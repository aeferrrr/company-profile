@php
    use App\Support\ProjectPhotos;

    $services = [
        [
            'name' => 'civil_name',
            'desc' => 'civil_desc',
            'categories' => ['civil', 'mechanical', 'electrical', 'flooring'],
            'fallback' => 'images/background/civil.webp',
        ],
        [
            'name' => 'architecture_name',
            'desc' => 'architecture_desc',
            'categories' => ['architecture', 'concept'],
            'fallback' => 'images/background/architecture.webp',
        ],
        [
            'name' => 'interior_name',
            'desc' => 'interior_desc',
            'categories' => ['architecture', 'concept'],
            'fallback' => 'images/background/interior-design.webp',
        ],
        [
            'name' => 'mgmt_name',
            'desc' => 'mgmt_desc',
            'categories' => ['management', 'civil'],
            'fallback' => 'images/background/meeting.webp',
        ],
    ];

    // banyak foto per service
    $used = [];
    foreach ($services as $k => $svc) {
        $slides = ProjectPhotos::many($svc['categories'], 8, $used);
        $services[$k]['slides'] = $slides ?: [
            ['src' => asset($svc['fallback']), 'title' => '', 'url' => route('projects')],
        ];
    }
@endphp

<section id="services" class="sx-section reveal">

    {{-- HEADER: judul + deskripsi di kiri, VIEW MORE di kanan --}}
    <div class="sx-head">
        <div>
            <h2 class="sx-heading">{{ __('messages.services.title') }}</h2>
            <p class="sx-intro">{{ __('messages.services.desc') }}</p>
        </div>
        <a href="{{ route('services') }}" class="sx-more">{{ __('messages.services.button') }}</a>
    </div>

    {{-- TRACK FULL-WIDTH: kartu digeser ke kanan --}}
    <div class="sx-viewport">
        <div class="sx-track" id="sxTrack">
            <div class="sx-rail">
                @foreach ($services as $svc)
                    <article class="sx-card">
                        <div class="sx-slides">
                            @foreach ($svc['slides'] as $i => $sl)
                                <div class="sx-slide {{ $i === 0 ? 'is-on' : '' }}">
                                    <img src="{{ $sl['src'] }}"
                                        alt="{{ $sl['title'] ?: __('messages.services.' . $svc['name']) }}"
                                        draggable="false"
                                        loading="{{ $loop->parent->index < 2 && $i === 0 ? 'eager' : 'lazy' }}">
                                </div>
                            @endforeach
                        </div>
                        <div class="sx-shade"></div>

                        <div class="sx-body">
                            <h3 class="sx-title">{{ __('messages.services.' . $svc['name']) }}</h3>
                            <p class="sx-desc">{{ __('messages.services.' . $svc['desc']) }}</p>
                        </div>

                        @if (count($svc['slides']) > 1)
                            <div class="sx-dots" aria-hidden="true">
                                @foreach ($svc['slides'] as $i => $sl)
                                    <span class="{{ $i === 0 ? 'is-on' : '' }}"></span>
                                @endforeach
                            </div>
                        @endif
                    </article>
                @endforeach
            </div>
        </div>

        {{-- kursor "Hold and Drag" --}}
        <div class="sx-cursor" id="sxCursor" aria-hidden="true">
            <svg class="sx-ring" viewBox="0 0 100 100">
                <defs>
                    <path id="sxRingPath" d="M50,50 m-38,0 a38,38 0 1,1 76,0 a38,38 0 1,1 -76,0" />
                </defs>
                <text>
                    <textPath href="#sxRingPath" textLength="236" lengthAdjust="spacing">Hold and Drag · Hold and Drag ·
                    </textPath>
                </text>
            </svg>
            <i class="sx-dot"></i>
        </div>
    </div>
</section>

<script>
    (function() {
        const track = document.getElementById('sxTrack');
        if (!track) return;
        const rail = track.querySelector('.sx-rail');
        if (!rail) {
            console.warn('[services] .sx-rail tidak ditemukan - pastikan blade terbaru terpasang');
            return;
        }

        const SPEED = 30; // kecepatan auto-geser (px/detik) - makin kecil makin lambat
        const SLIDE_MS = 4500; // jeda ganti foto di tiap kartu
        const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        let visible = true;
        new IntersectionObserver(([en]) => visible = en.isIntersecting, {
            threshold: 0.1
        }).observe(track);

        /* 0. Gandakan 1 set kartu supaya bisa berputar tanpa ujung: [A][A'] */
        const originals = Array.from(rail.children);
        originals.forEach((el, i) => {
            el.dataset.svc = i;
            el.querySelector('.sx-slide img')?.setAttribute('loading',
            'eager'); // foto pertama langsung dimuat
        });
        originals.forEach(el => {
            const c = el.cloneNode(true);
            c.setAttribute('aria-hidden', 'true');
            rail.appendChild(c);
        });
        const cards = Array.from(rail.children);
        const n = originals.length;

        let setW = 0;
        const measure = () => {
            setW = cards[n].offsetLeft - cards[0].offsetLeft;
        };
        measure();

        /* 1. Slideshow foto: satu timer per service, kartu asli & duplikatnya ikut sinkron.
              Foto berikutnya di-decode dulu sebelum ditampilkan supaya tidak patah-patah. */
        originals.forEach((_, i) => {
            const group = cards.filter(c => +c.dataset.svc === i);
            const count = group[0].querySelectorAll('.sx-slide').length;
            if (count < 2) return;

            let cur = 0;
            const show = to => {
                group.forEach(c => {
                    const s = c.querySelectorAll('.sx-slide');
                    const d = c.querySelectorAll('.sx-dots span');
                    const im = s[to].querySelector('img');
                    if (im) im.loading = 'eager';
                    s[cur].classList.remove('is-on');
                    d[cur]?.classList.remove('is-on');
                    s[to].classList.add('is-on');
                    d[to]?.classList.add('is-on');
                });
                cur = to;
            };
            const next = () => {
                if (document.hidden) return;
                const to = (cur + 1) % count;
                const img = group[0].querySelectorAll('.sx-slide img')[to];
                let done = false;
                const go = () => {
                    if (!done) {
                        done = true;
                        show(to);
                    }
                };

                // muat & decode di luar layar dulu, baru ditampilkan (tidak patah-patah)
                const pre = new Image();
                pre.onload = () => (pre.decode ? pre.decode().then(go, go) : go());
                pre.onerror = go;
                pre.src = img.currentSrc || img.src;
                setTimeout(go, 2500); // pengaman: foto tetap ganti walau decode macet
            };
            setTimeout(() => setInterval(next, reduceMotion ? SLIDE_MS + 2000 : SLIDE_MS), i * 900);
        });

        /* 2. Gerak memakai transform (mulus, tidak memicu layout) */
        let pos = 0,
            inertia = 0,
            dragging = false;
        let startX = 0,
            startPos = 0,
            lastX = 0,
            lastT = 0,
            vx = 0;

        const norm = () => {
            if (setW > 0) pos = ((pos % setW) + setW) % setW;
        };
        const apply = () => {
            rail.style.transform = `translate3d(${-pos}px,0,0)`;
        };

        track.addEventListener('dragstart', e => e.preventDefault());

        track.addEventListener('pointerdown', e => {
            if (e.pointerType === 'mouse' && e.button !== 0) return;
            dragging = true;
            startX = lastX = e.clientX;
            startPos = pos;
            lastT = performance.now();
            vx = 0;
            inertia = 0;
            track.setPointerCapture(e.pointerId);
            track.classList.add('is-dragging');
        });

        track.addEventListener('pointermove', e => {
            if (!dragging) return;
            const now = performance.now();
            const dt = Math.max(now - lastT, 1);
            vx = vx * 0.7 + ((e.clientX - lastX) / dt * 1000) * 0.3;
            lastX = e.clientX;
            lastT = now;
            pos = startPos - (e.clientX - startX);
            norm();
            apply();
        });

        const endDrag = () => {
            if (!dragging) return;
            dragging = false;
            if (performance.now() - lastT > 80) vx = 0; // berhenti dulu sebelum dilepas
            inertia = Math.max(-2500, Math.min(2500, -vx)); // lanjut meluncur sebentar
            track.classList.remove('is-dragging');
        };
        track.addEventListener('pointerup', endDrag);
        track.addEventListener('pointercancel', endDrag);
        track.addEventListener('lostpointercapture', endDrag);

        window.addEventListener('resize', () => {
            const ratio = setW ? pos / setW : 0;
            measure();
            pos = ratio * setW;
            apply();
        });

        /* 3. Auto-geser ke kanan terus-menerus */
        let last = performance.now();
        const tick = now => {
            const dt = Math.min((now - last) / 1000, 0.05);
            last = now;
            if (!dragging && visible && !document.hidden) {
                pos += (SPEED + inertia) * dt;
                inertia *= Math.exp(-3 * dt);
                norm();
                apply();
            }
            requestAnimationFrame(tick);
        };
        apply();
        requestAnimationFrame(tick);

        /* 4. Kursor "Hold and Drag" */
        const cursor = document.getElementById('sxCursor');
        if (cursor && window.matchMedia('(hover: hover)').matches) {
            const vp = track.parentElement;
            vp.addEventListener('pointermove', e => {
                const r = vp.getBoundingClientRect();
                cursor.style.transform =
                    `translate(${e.clientX - r.left}px, ${e.clientY - r.top}px) translate(-50%, -50%)`;
            });
            vp.addEventListener('pointerenter', () => cursor.classList.add('is-visible'));
            vp.addEventListener('pointerleave', () => cursor.classList.remove('is-visible'));
            track.addEventListener('pointerdown', () => cursor.classList.add('is-down'));
            window.addEventListener('pointerup', () => cursor.classList.remove('is-down'));
        }
    })();
</script>
