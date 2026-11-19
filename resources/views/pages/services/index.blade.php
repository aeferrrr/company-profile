@extends('layouts.app')

@section('meta_title', __('general.seo.service_title'))

@section('meta_description', __('general.seo.service_desc'))

@section('content')

    {{-- ============================================================*
    HERO
*========================= (dipertahankan)=================================== --}}

    <section class="hero-section hero-page">

        <img src="{{ asset('images/hero/excavator-action.webp') }}" class="hero-bg" alt="{{ __('services.hero_title') }}">

        <div class="hero-overlay"></div>

        <div class="hero-text">

            <h1>{{ __('services.hero_title') }}</h1>

            <p>{{ __('services.hero_subtitle') }}</p>

        </div>

    </section>

    {{-- ============================================================*
    SERVICE DIVISIONS    Klik kartu -> divisi melebar. Klik JUDUL GRUP (Civil, Mechanical, dst.)    -> panel proyek terbuka di bawah kartu.    Foto divisi : public/images/services/{slug}.webp    Foto proyek : public/images/projects/{slug-grup}/*.webp|jpg|png                  (otomatis terdeteksi, urut nama file)    Slug grup   : civil, architecture, interior, mechanical,                  electrical-instrument, construction-management,                  revamping, maintenance, others
*============================================================ --}}

    @php

        $lang = in_array(app()->getLocale(), ['id', 'en', 'ko']) ? app()->getLocale() : 'en';

        $divisions = [

            [

                'slug' => 'engineering',

                'icon' => 'fas fa-drafting-compass',

                'title' => __('services.terms.engineering_design'),

                'desc' => __('services.terms.foundations_buildings_and_interiors_from_design_to_finish'),

                'groups' => [

                    ['title' => __('services.terms.civil'), 'slug' => 'civil', 'items' => [__('services.terms.foundation'), __('services.terms.road_construction'), __('services.terms.golf_course_development')]],

                    [

                        'title' => __('services.terms.architecture'), 'slug' => 'architecture',

                        'items' => [__('services.terms.apartment'), __('services.terms.bungalow'), __('services.terms.factory_design'), __('services.terms.warehouse'), __('services.terms.temporary_facilities')],

                    ],

                    ['title' => __('services.terms.interior'), 'slug' => 'interior', 'items' => [__('services.terms.space_design'), __('services.terms.interior_fit_out')]],

                ],

            ],

            [

                'slug' => 'industrial',

                'icon' => 'fas fa-industry',

                'title' => __('services.terms.industrial_systems'),

                'desc' => __('services.terms.mechanical_and_electrical_works_for_plants_and_factories'),

                'groups' => [

                    [

                        'title' => __('services.terms.mechanical'), 'slug' => 'mechanical',

                        'items' => [

                            __('services.terms.fabrication'),

                            __('services.terms.erection'),

                            __('services.terms.steel_structure'),

                            __('services.terms.piping'),

                            __('services.terms.tank'),

                            __('services.terms.pipeline'),

                            __('services.terms.fire_fighting_systems'),

                            __('services.terms.wtp_wwtp'),

                        ],

                    ],

                    [

                        'title' => __('services.terms.electrical_instrument'), 'slug' => 'electrical-instrument',

                        'items' => [

                            __('services.terms.substation'),

                            __('services.terms.transformer'),

                            __('services.terms.panel_board'),

                            __('services.terms.cabling'),

                            __('services.terms.industrial_lighting'),

                            __('services.terms.telecommunication'),

                            __('services.terms.fire_alarm_cctv'),

                        ],

                    ],

                ],

            ],

            [

                'slug' => 'project-management',

                'icon' => 'fas fa-hard-hat',

                'title' => __('services.terms.project_management'),

                'desc' => __('services.terms.planning_supervision_and_control_from_start_to_handover'),

                'groups' => [

                    [

                        'title' => __('services.terms.construction_management'), 'slug' => 'construction-management',

                        'items' => [

                            __('services.terms.project_planning'),

                            __('services.terms.project_management'),

                            __('services.terms.construction_supervision'),

                            __('services.terms.site_management'),

                            __('services.terms.quality_control'),

                            __('services.terms.safety_management'),

                            __('services.terms.cost_control'),

                            __('services.terms.scheduling_progress_monitoring'),

                        ],

                    ],

                ],

            ],

            [

                'slug' => 'renovation-support',

                'icon' => 'fas fa-tools',

                'title' => __('services.terms.renovation_support'),

                'desc' => __('services.terms.revamping_maintenance_and_finishing_works_to_keep_facilities_running'),

                'groups' => [

                    ['title' => __('services.terms.revamping'), 'slug' => 'revamping', 'items' => [__('services.terms.building_demolition'), __('services.terms.structural_renovation')]],

                    ['title' => __('services.terms.maintenance'), 'slug' => 'maintenance', 'items' => [__('services.terms.factory_maintenance'), __('services.terms.plant_services')]],

                    ['title' => __('services.terms.others'), 'slug' => 'others', 'items' => [__('services.terms.flooring_acp'), __('services.terms.roofing_solutions'), __('services.terms.speed_door_systems')]],

                ],

            ],

        ];
/*         * Isi panel per grup (dua bahasa). Kunci = slug grup.         * 'captions' (opsional) = keterangan foto: 'nama-file.webp' => 'teks'.         * Contoh di bawah perlu disesuaikan dengan proyek asli.         */
        $details = [

            'civil' => [

                'id' => __('services.details.civil'),

                'en' => __('services.details.civil'),
                'ko' => __('services.details.civil'),

                'captions' => [],

            ],

            'architecture' => [

                'id' => __('services.details.architecture'),

                'en' => __('services.details.architecture'),
                'ko' => __('services.details.architecture'),

                'captions' => [],

            ],

            'interior' => [

                'id' => __('services.details.interior'),

                'en' => __('services.details.interior'),
                'ko' => __('services.details.interior'),

                'captions' => [],

            ],

            'mechanical' => [

                'id' => __('services.details.mechanical'),

                'en' => __('services.details.mechanical'),
                'ko' => __('services.details.mechanical'),

                'captions' => [],

            ],

            'electrical-instrument' => [

                'id' => __('services.details.electrical_instrument'),

                'en' => __('services.details.electrical_instrument'),
                'ko' => __('services.details.electrical_instrument'),

                'captions' => [],

            ],

        ];

        $fallbackDesc = [

            'id' => __('services.fallback_desc'),

            'en' => __('services.fallback_desc'),
            'ko' => __('services.fallback_desc'),

        ];
// Data panel untuk semua grup + deteksi foto otomatis
        $groupData = [];

        foreach ($divisions as $d) {

            foreach ($d['groups'] as $g) {

                $key = $g['slug'];

                $dir = 'images/projects/' . $key;

                $files = glob(public_path($dir) . '/*.{webp,jpg,jpeg,png,WEBP,JPG,JPEG,PNG}', GLOB_BRACE) ?: [];

                sort($files);

                $captions = $details[$key]['captions'] ?? [];

                $groupData[$key] = [

                    'division' => $d['title'],

                    'title' => $g['title'],

                    'desc' => $details[$key][$lang] ?? $fallbackDesc[$lang],

                    'items' => $g['items'],

                    'images' => array_map(

                        fn($f) => [

                            'src' => asset($dir . '/' . basename($f)),

                            'caption' => $captions[basename($f)] ?? '',

                        ],

                        $files,

                    ),

                ];

            }

        }

    @endphp

    <section id="services" class="section-padding">

        <div class="container">

            {{-- Header section --}}

            <div class="dv-header">

                <div class="section-label">

                    <span class="section-label-line"></span>

                    <span class="section-label-text">{{ __('services.section_label') }}</span>

                    <span class="section-label-line"></span>

                </div>

                <h2 class="dv-header-title">Integrated Construction & Industrial Services</h2>

                <p class="dv-header-desc">

                    From planning and construction to maintenance, choose a division below to see the full scope of our

                    services. Click a heading to see our project documentation.

                </p>

            </div>

            <div class="dv-wrap">

                @foreach ($divisions as $d)

                    @php

                        $imgFile = 'images/services/' . $d['slug'] . '.webp';

                        $imgUrl = file_exists(public_path($imgFile))

                            ? asset($imgFile)

                            : asset('images/hero/excavator-action.webp'); // cadangan bila foto belum ada*

                    @endphp

                    <article class="dv-card {{ $loop->first ? 'is-active' : '' }}" id="dv-{{ $d['slug'] }}">

                        <img class="dv-bg" src="{{ $imgUrl }}" alt="" loading="lazy" decoding="async">

                        <div class="dv-shade"></div>

                        <button type="button" class="dv-toggle" aria-expanded="{{ $loop->first ? 'true' : 'false' }}"

                            aria-controls="dv-body-{{ $d['slug'] }}" aria-label="{{ $d['title'] }}"></button>

                        {{-- Tampilan menyempit --}}

                        <div class="dv-rail" aria-hidden="true">

                            <i class="{{ $d['icon'] }}"></i>

                            <span class="dv-rail-title">{{ $d['title'] }}</span>

                            <i class="fas fa-plus dv-plus"></i>

                        </div>

                        {{-- Isi saat terbuka --}}

                        <div class="dv-body" id="dv-body-{{ $d['slug'] }}">

                            <h2 class="dv-title">{{ $d['title'] }}</h2>

                            <p class="dv-desc">{{ $d['desc'] }}</p>

                            <div class="dv-groups">

                                @foreach ($d['groups'] as $g)

                                    <div class="dv-group">

                                        <h3 class="dv-group-title">

                                            <button type="button" class="dv-group-btn" aria-expanded="false"

                                                aria-controls="pjPanel"

                                                data-group="{{ $g['slug'] }}">

                                                <span>{{ $g['title'] }}</span>

                                                <i class="fas fa-chevron-down dv-group-ico" aria-hidden="true"></i>

                                            </button>

                                        </h3>

                                        <ul>

                                            @foreach ($g['items'] as $item)

                                                <li>{{ $item }}</li>

                                            @endforeach

                                        </ul>

                                    </div>

                                @endforeach

                            </div>

                        </div>

                    </article>

                @endforeach

            </div>

            {{-- Panel proyek: terbuka di bawah kartu saat judul grup diklik --}}

            <div class="pj-panel" id="pjPanel" hidden>

                <button type="button" class="pj-close" aria-label="{{ __('services.close') }}">×</button>

                <div class="pj-head">

                    <span class="pj-group" id="pjGroup"></span>

                    <h3 class="pj-title" id="pjTitle"></h3>

                    <p class="pj-desc" id="pjDesc"></p>

                    <ul class="pj-chips" id="pjChips"></ul>

                </div>

                <div class="pj-gallery" id="pjGallery"></div>

                <p class="pj-empty" id="pjEmpty" hidden>

                    {{ __('services.empty_photos') }}

                </p>

                <div class="pj-foot">

                    <a href="{{ url('/contact') }}" class="btn btn-primary-cta px-4 py-2 fw-bold">

                        <i class="fas fa-paper-plane me-2"></i>{{ __('services.contact') }}

                    </a>

                </div>

            </div>

        </div>

    </section>

    {{-- Lightbox untuk memperbesar foto --}}

    <div class="pj-lightbox" id="pjLightbox" hidden>

        <button type="button" class="pj-lb-btn pj-lb-close" aria-label="{{ __('services.close') }}">×</button>

        <button type="button" class="pj-lb-btn pj-lb-prev" aria-label="{{ __('services.previous') }}">‹</button>

        <img id="pjLbImg" src="" alt="">

        <button type="button" class="pj-lb-btn pj-lb-next" aria-label="{{ __('services.next') }}">›</button>

    </div>

    {{-- ============================================================*
    CALL TO ACTION    <section class="cta-section py-5">        <div class="container py-4">            <div class="cta-card text-center shadow-lg">                <div class="row justify-content-center">                    <div class="col-lg-9">                        <h2 class="display-5 fw-bold mb-3">{{ __('services.cta_title') }}</h2>                        <p class="lead mb-5">{{ __('services.cta_desc') }}</p>                        <div class="d-flex justify-content-center gap-3 flex-wrap">                            <a href="{{ url('/contact') }}" class="btn btn-primary-cta btn-lg px-5 py-3 fw-bold">                                <i class="fas fa-paper-plane me-2"></i>{{ __('services.cta_contact') }}                            </a>                            <a href="https\://wa.me/6285111377112" class="btn btn-whatsapp btn-lg px-5 py-3 fw-bold">                                <i class="fab fa-whatsapp me-2"></i>{{ __('services.cta_whatsapp') }}                            </a>                        </div>                    </div>                </div>            </div>        </div>    </section>
*============================================================ --}}

    <script>
// ---------- Kartu divisi: klik -> melebar, yang lain menyempit ----------
        (function() {

            const cards = Array.from(document.querySelectorAll('.dv-card'));

            if (!cards.length) return;

            function activate(card, scroll) {

                cards.forEach((c) => {

                    const on = c === card;

                    c.classList.toggle('is-active', on);

                    c.querySelector('.dv-toggle').setAttribute('aria-expanded', on ? 'true' : 'false');

                });

                if (scroll && window.innerWidth < 992) {

                    card.scrollIntoView({

                        behavior: 'smooth',

                        block: 'start'

                    });

                }

            }

            cards.forEach((card) => {

                card.querySelector('.dv-toggle').addEventListener('click', () => {

                    activate(card, true);

                    history.replaceState(null, '', '#' + card.id);

                });

            });
// Buka divisi sesuai hash URL, mis. /services#dv-industrial
            const target = document.getElementById(location.hash.slice(1));

            if (target && target.classList.contains('dv-card')) activate(target, false);

        })();
// ---------- Panel proyek di bawah kartu + lightbox ----------
        (function() {

            const DATA = @json($groupData);

            const panel = document.getElementById('pjPanel');

            const gallery = document.getElementById('pjGallery');

            const chips = document.getElementById('pjChips');

            const empty = document.getElementById('pjEmpty');

            const lb = document.getElementById('pjLightbox');

            const lbImg = document.getElementById('pjLbImg');

            const btns = Array.from(document.querySelectorAll('.dv-group-btn'));

            let openKey = null;

            let current = [];

            let idx = 0;

            function setActiveBtn(key) {

                btns.forEach((b) => {

                    const on = key !== null && b.dataset.group === key;

                    b.classList.toggle('is-open', on);

                    b.setAttribute('aria-expanded', on ? 'true' : 'false');

                });

            }

            function openPanel(key) {

                const p = DATA[key];

                if (!p) return;

                document.getElementById('pjGroup').textContent = p.division;

                document.getElementById('pjTitle').textContent = p.title;

                document.getElementById('pjDesc').textContent = p.desc;

                chips.innerHTML = '';

                p.items.forEach((name) => {

                    const li = document.createElement('li');

                    li.textContent = name;

                    chips.appendChild(li);

                });

                gallery.innerHTML = '';

                current = p.images.map((im) => im.src);

                p.images.forEach((im, i) => {

                    const fig = document.createElement('figure');

                    fig.className = 'pj-item';

                    const b = document.createElement('button');

                    b.type = 'button';

                    b.className = 'pj-thumb';

                    const img = document.createElement('img');

                    img.loading = 'lazy';

                    img.decoding = 'async';

                    img.alt = im.caption || (p.title + ' ' + (i + 1));

                    img.src = im.src;

                    b.appendChild(img);

                    b.addEventListener('click', () => openLb(i));

                    fig.appendChild(b);

                    if (im.caption) {

                        const cap = document.createElement('figcaption');

                        cap.textContent = im.caption;

                        fig.appendChild(cap);

                    }

                    gallery.appendChild(fig);

                });

                empty.hidden = current.length > 0;

                const wasHidden = panel.hidden;

                panel.hidden = false;

                if (wasHidden) {

                    panel.classList.remove('is-in');

                    void panel.offsetWidth;

                    panel.classList.add('is-in');

                }

                openKey = key;

                setActiveBtn(key);

                panel.scrollIntoView({

                    behavior: 'smooth',

                    block: 'start'

                });

            }

            function closePanel() {

                panel.hidden = true;

                openKey = null;

                setActiveBtn(null);

            }

            btns.forEach((b) => {

                b.addEventListener('click', (e) => {

                    e.stopPropagation();

                    if (openKey === b.dataset.group) closePanel();

                    else openPanel(b.dataset.group);

                });

            });

            panel.querySelector('.pj-close').addEventListener('click', closePanel);
// Pindah divisi -> tutup panel supaya tidak membingungkan
            document.querySelectorAll('.dv-toggle').forEach((t) => t.addEventListener('click', closePanel));

            function openLb(i) {

                idx = i;

                lbImg.src = current[idx];

                lb.hidden = false;

            }

            function closeLb() {

                lb.hidden = true;

            }

            function step(d) {

                if (!current.length) return;

                idx = (idx + d + current.length) % current.length;

                lbImg.src = current[idx];

            }

            lb.querySelector('.pj-lb-close').addEventListener('click', closeLb);

            lb.querySelector('.pj-lb-prev').addEventListener('click', () => step(-1));

            lb.querySelector('.pj-lb-next').addEventListener('click', () => step(1));

            lb.addEventListener('click', (e) => {

                if (e.target === lb) closeLb();

            });

            document.addEventListener('keydown', (e) => {

                if (!lb.hidden) {

                    if (e.key === 'Escape') closeLb();

                    if (e.key === 'ArrowLeft') step(-1);

                    if (e.key === 'ArrowRight') step(1);

                } else if (!panel.hidden && e.key === 'Escape') {

                    closePanel();

                }

            });

        })();

    </script>

@endsection
