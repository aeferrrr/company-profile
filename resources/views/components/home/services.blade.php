@php
    use App\Support\ProjectPhotos;

    $services = [
        [
            'id' => 'service1',
            'icon' => 'fas fa-industry',
            'name' => 'civil_name',
            'sub' => 'civil_sub',
            'desc' => 'civil_desc',
            'categories' => ['civil', 'mechanical', 'electrical', 'flooring'],
            'fallback' => 'images/background/civil.webp',
        ],
        [
            'id' => 'service2',
            'icon' => 'fas fa-pencil-ruler',
            'name' => 'architecture_name',
            'sub' => 'architecture_sub',
            'desc' => 'architecture_desc',
            'categories' => ['architecture', 'concept'],
            'fallback' => 'images/background/architecture.webp',
        ],
        [
            'id' => 'service3',
            'icon' => 'fas fa-couch',
            'name' => 'interior_name',
            'sub' => 'interior_sub',
            'desc' => 'interior_desc',
            'categories' => ['architecture', 'concept'],
            'fallback' => 'images/background/interior-design.webp',
        ],
        [
            'id' => 'service4',
            'icon' => 'fas fa-hard-hat',
            'name' => 'mgmt_name',
            'sub' => 'mgmt_sub',
            'desc' => 'mgmt_desc',
            'categories' => ['management', 'civil'],
            'fallback' => 'images/background/meeting.webp',
        ],
    ];

    $used = [];
    foreach ($services as $k => $svc) {
        $slides = ProjectPhotos::many($svc['categories'], 5, $used);
        $services[$k]['slides'] = $slides ?: [
            [
                'src' => asset($svc['fallback']),
                'title' => '',
                'url' => route('projects'),
            ],
        ];
    }
@endphp

<section id="services" class="services-highlight py-5 bg-white reveal">
    {{-- SEPARATOR ATAS OUR SERVICES --}}
    <div class="section-separator">
        <div class="separator-line"></div>
        <div class="separator-icon">
            <i class="fa-solid fa-clipboard-list" style="font-size: 14px; color: var(--samsung-blue);"></i>
        </div>
        <div class="separator-line"></div>
    </div>

    <div class="container-fluid px-4 px-lg-5 py-lg-5 reveal">

        <div class="text-center mb-5" data-aos="fade-up">
            <h6 class="text-primary fw-bold text-uppercase ls-2">
                {{ __('messages.services.subtitle') }}
            </h6>
            <h2 class="fw-bold display-5">
                {{ __('messages.services.title') }}
            </h2>
            <p class="text-muted mt-2 mx-auto" style="max-width: 600px;">
                {{ __('messages.services.desc') }}
            </p>
        </div>

        <div class="row g-0 shadow-lg rounded-4 overflow-hidden bg-white reveal">

            {{-- KIRI: TAB --}}
            <div class="col-lg-4 bg-white border-end position-relative">
                <div class="service-tabs d-flex flex-column h-100 p-4">

                    @foreach ($services as $svc)
                        <button
                            class="service-btn {{ $loop->first ? 'active' : '' }} {{ $loop->last ? '' : 'mb-3' }} reveal"
                            onclick="openService(event, '{{ $svc['id'] }}')">
                            <div class="d-flex align-items-center">
                                <div class="icon-box me-3">
                                    <i class="{{ $svc['icon'] }}"></i>
                                </div>
                                <div class="text-start">
                                    <h6 class="mb-0 fw-bold">{{ __('messages.services.' . $svc['name']) }}</h6>
                                    <small class="text-muted">{{ __('messages.services.' . $svc['sub']) }}</small>
                                </div>
                            </div>
                        </button>
                    @endforeach

                    <div class="mt-auto pt-4">
                        <a href="{{ route('services') }}" class="btn btn-primary w-100 py-2 rounded-pill fw-bold">
                            {{ __('messages.services.button') }} <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            {{-- KANAN: CAROUSEL FOTO PROJECT --}}
            <div class="col-lg-8 position-relative bg-dark reveal">
                @foreach ($services as $svc)
                    @php $slides = $svc['slides']; @endphp

                    <div id="{{ $svc['id'] }}" class="service-content {{ $loop->first ? 'active' : '' }}">

                        <div id="carousel-{{ $svc['id'] }}" class="carousel slide carousel-fade service-carousel"
                            data-bs-ride="carousel" data-bs-interval="4500" data-bs-pause="false">

                            @if (count($slides) > 1)
                                <div class="carousel-indicators">
                                    @foreach ($slides as $i => $sl)
                                        <button type="button" data-bs-target="#carousel-{{ $svc['id'] }}"
                                            data-bs-slide-to="{{ $i }}"
                                            class="{{ $i === 0 ? 'active' : '' }}"
                                            aria-label="Slide {{ $i + 1 }}"></button>
                                    @endforeach
                                </div>
                            @endif

                            <div class="carousel-inner">
                                @foreach ($slides as $i => $sl)
                                    <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
                                        <a href="{{ $sl['url'] ?? route('projects') }}" class="service-link"
                                            aria-label="{{ $sl['title'] ?: __('messages.services.' . $svc['name']) }}">
                                            <img src="{{ $sl['src'] }}"
                                                alt="{{ $sl['title'] ?: __('messages.services.' . $svc['name']) }}"
                                                loading="{{ $loop->parent->first && $i === 0 ? 'eager' : 'lazy' }}">

                                            @if ($sl['title'])
                                                <span class="service-caption">
                                                    <small class="service-tag">
                                                        <i
                                                            class="fas fa-check-circle me-1"></i>{{ __('services.works_label') }}
                                                    </small>
                                                    <span class="service-caption-title">
                                                        {{ $sl['title'] }}
                                                        <i class="fas fa-arrow-up-right-from-square ms-1"></i>
                                                    </span>
                                                </span>
                                            @endif
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="service-overlay p-5 d-flex flex-column justify-content-end h-100">
                            <h3 class="text-white fw-bold mb-3">{{ __('messages.services.' . $svc['name']) }}</h3>
                            <p class="text-white-50 fs-5">{{ __('messages.services.' . $svc['desc']) }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</section>

<script>
    function openService(evt, serviceName) {
        // sembunyikan semua panel dan hentikan carousel-nya
        document.querySelectorAll('.service-content').forEach(el => {
            el.classList.remove('active');
            const c = el.querySelector('.carousel');
            if (c) bootstrap.Carousel.getOrCreateInstance(c).pause();
        });

        document.querySelectorAll('.service-btn').forEach(b => b.classList.remove('active'));

        // tampilkan panel yang dipilih, mulai dari slide pertama
        const target = document.getElementById(serviceName);
        target.classList.add('active');
        const car = target.querySelector('.carousel');
        if (car) {
            const inst = bootstrap.Carousel.getOrCreateInstance(car);
            inst.to(0);
            inst.cycle();
        }

        evt.currentTarget.classList.add('active');
    }
</script>
