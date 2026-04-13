    @extends('layouts.app')

    @section('meta_title', __('general.seo.service_title'))
    @section('meta_description', __('general.seo.service_desc'))

    @section('content')

    {{-- ============================================================
        HERO
    ============================================================ --}}
    <section class="hero-section hero-services reveal">
        <img
            src="{{ asset('/images/hero/excavator-action.webp') }}"
            class="hero-bg"
            alt="{{ __('services.hero_title') }}"
        >
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title display-3 fw-bold reveal">{{ __('services.hero_title') }}</h1>
                <p class="hero-subtitle lead reveal">{{ __('services.hero_subtitle') }}</p>
            </div>
        </div>
    </section>


    {{-- ============================================================
        SERVICE CATEGORIES
    ============================================================ --}}
    <section id="services" class="section-padding position-relative overflow-hidden">

        <div class="blob-decorator position-absolute top-0 end-0"></div>

        <div class="container reveal">

            @php
                $serviceGroups = [
                    [
                        'icon'  => 'fas fa-hard-hat',
                        'title' => 'Construction & Management',
                        'items' => [
                            'Project Planning',
                            'Project Management',
                            'Construction Supervision',
                            'Site Management',
                            'Quality Control',
                            'Safety Management',
                            'Cost Control',
                            'Scheduling & Progress Monitoring',
                        ],
                    ],
                    [
                        'icon'  => 'fas fa-city',
                        'title' => 'Civil',
                        'items' => [
                            'Foundation',
                            'Road Construction',
                            'Golf Course Development',
                        ],
                    ],
                    [
                        'icon'  => 'fas fa-drafting-compass',
                        'title' => 'Architecture',
                        'items' => [
                            'Apartment',
                            'Bungalow',
                            'Factory Design',
                            'Warehouse',
                            'Temporary Facilities',
                        ],
                    ],
                    [
                        'icon'  => 'fas fa-tools',
                        'title' => 'Mechanical',
                        'items' => [
                            'Fabrication',
                            'Erection',
                            'Steel Structure',
                            'Piping',
                            'Tank',
                            'Pipeline',
                            'Fire Fighting Systems',
                            'WTP / WWTP',
                        ],
                    ],
                    [
                        'icon'  => 'fas fa-bolt',
                        'title' => 'Electrical & Instrument',
                        'items' => [
                            'Substation',
                            'Transformer',
                            'Panel Board',
                            'Cabling',
                            'Industrial Lighting',
                            'Telecommunication',
                            'Fire Alarm / CCTV',
                        ],
                    ],
                    [
                        'icon'  => 'fas fa-recycle',
                        'title' => 'Revamping',
                        'items' => [
                            'Building Demolition',
                            'Structural Renovation',
                        ],
                    ],
                    [
                        'icon'  => 'fas fa-hammer',
                        'title' => 'Maintenance',
                        'items' => [
                            'Factory Maintenance',
                            'Plant Services',
                        ],
                    ],
                    [
                        'icon'  => 'fas fa-couch',
                        'title' => 'Interior',
                        'items' => [
                            'Space Design',
                            'Interior Fit-out',
                        ],
                    ],
                    [
                        'icon'  => 'fas fa-plus-circle',
                        'title' => 'Others',
                        'items' => [
                            'Flooring & ACP',
                            'Roofing Solutions',
                            'Speed Door Systems',
                        ],
                    ],
                ];
            @endphp

            <div class="row g-4">
                @foreach ($serviceGroups as $group)
                    <div class="col-6 col-md-4 col-lg-3 reveal">
                        <div class="service-card">

                            <div class="service-icon">
                                <i class="{{ $group['icon'] }}"></i>
                            </div>

                            <h4 class="service-title">{{ $group['title'] }}</h4>

                            <ul class="service-list">
                                @foreach ($group['items'] as $item)
                                    <li>
                                        <span class="dot"></span>
                                        <span>{{ $item }}</span>
                                    </li>
                                @endforeach
                            </ul>

                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>


    {{-- ============================================================
        CALL TO ACTION
    ============================================================ --}}
    <section class="cta-section py-5 reveal">
        <div class="container py-4">
            <div class="cta-card text-center shadow-lg reveal">
                <div class="row justify-content-center">
                    <div class="col-lg-9">

                        <h2 class="display-5 fw-bold mb-3 reveal">{{ __('services.cta_title') }}</h2>
                        <p class="lead mb-5 reveal">{{ __('services.cta_desc') }}</p>

                        <div class="d-flex justify-content-center gap-3 flex-wrap reveal">
                            <a href="{{ url('/contact') }}" class="btn btn-primary-cta btn-lg px-5 py-3 fw-bold">
                                <i class="fas fa-paper-plane me-2"></i>Hubungi Kami
                            </a>
                            <a href="https://wa.me/6285111377112" class="btn btn-whatsapp btn-lg px-5 py-3 fw-bold">
                                <i class="fab fa-whatsapp me-2"></i>WhatsApp Chat
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection