@extends('layouts.app')

@section('meta_title', __('general.seo.service_title'))
@section('meta_description', __('general.seo.service_desc'))

@section('content')

    {{-- ============================================================
    HERO
========================= (dipertahankan)=================================== --}}
    <section class="hero-section hero-page">
        <img src="{{ asset('images/hero/excavator-action.webp') }}" class="hero-bg" alt="{{ __('services.hero_title') }}">

        <div class="hero-overlay"></div>

        <div class="hero-text">
            <h1>{{ __('services.hero_title') }}</h1>
            <p>{{ __('services.hero_subtitle') }}</p>
        </div>
    </section>


    {{-- ============================================================
    SERVICE DIVISIONS
    9 kategori digabung menjadi 4 divisi. Klik kartu untuk membuka.
    Foto: public/images/services/{slug}.webp
============================================================ --}}
    @php
        $divisions = [
            [
                'slug' => 'engineering',
                'icon' => 'fas fa-drafting-compass',
                'title' => 'Engineering & Design',
                'desc' => 'Foundations, buildings and interiors, from design to finish.',
                'groups' => [
                    ['title' => 'Civil', 'items' => ['Foundation', 'Road Construction', 'Golf Course Development']],
                    [
                        'title' => 'Architecture',
                        'items' => ['Apartment', 'Bungalow', 'Factory Design', 'Warehouse', 'Temporary Facilities'],
                    ],
                    ['title' => 'Interior', 'items' => ['Space Design', 'Interior Fit-out']],
                ],
            ],
            [
                'slug' => 'industrial',
                'icon' => 'fas fa-industry',
                'title' => 'Industrial Systems',
                'desc' => 'Mechanical and electrical works for plants and factories.',
                'groups' => [
                    [
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
                ],
            ],
            [
                'slug' => 'project-management',
                'icon' => 'fas fa-hard-hat',
                'title' => 'Project Management',
                'desc' => 'Planning, supervision and control from start to handover.',
                'groups' => [
                    [
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
                ],
            ],
            [
                'slug' => 'renovation-support',
                'icon' => 'fas fa-tools',
                'title' => 'Renovation & Support',
                'desc' => 'Revamping, maintenance and finishing works to keep facilities running.',
                'groups' => [
                    ['title' => 'Revamping', 'items' => ['Building Demolition', 'Structural Renovation']],
                    ['title' => 'Maintenance', 'items' => ['Factory Maintenance', 'Plant Services']],
                    ['title' => 'Others', 'items' => ['Flooring & ACP', 'Roofing Solutions', 'Speed Door Systems']],
                ],
            ],
        ];
    @endphp

    <section id="services" class="section-padding">
        <div class="container-fluid px-4 px-lg-5 py-lg-5 reveal">

            {{-- Header section --}}
            <div class="dv-header">
                <div class="section-label">
                    <span class="section-label-line"></span>
                    <span class="section-label-text">What We Do</span>
                    <span class="section-label-line"></span>
                </div>
                <h2 class="dv-header-title">Integrated Construction &amp; Industrial Services</h2>
                <p class="dv-header-desc">
                    From planning and construction to maintenance, choose a division below to see the full scope of our
                    services.
                </p>
            </div>

            <div class="dv-wrap">
                @foreach ($divisions as $d)
                    @php
                        $imgFile = 'images/services/' . $d['slug'] . '.webp';
                        $imgUrl = file_exists(public_path($imgFile))
                            ? asset($imgFile)
                            : asset('images/hero/excavator-action.webp'); // cadangan bila foto belum ada
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
                                        <h3 class="dv-group-title">{{ $g['title'] }}</h3>
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
        </div>
    </section>


    {{-- ============================================================
    CALL TO ACTION
============================================================ --}}
    <section class="cta-section py-5">
        <div class="container-fluid px-4 px-lg-5 py-lg-5 reveal">
            <div class="cta-card text-center shadow-lg">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <h2 class="display-5 fw-bold mb-3">{{ __('services.cta_title') }}</h2>
                        <p class="lead mb-5">{{ __('services.cta_desc') }}</p>

                        <div class="d-flex justify-content-center gap-3 flex-wrap">
                            <a href="{{ url('/contact') }}" class="btn btn-primary-cta btn-lg px-5 py-3 fw-bold">
                                <i class="fas fa-paper-plane me-2"></i>{{ __('services.cta_contact') }}
                            </a>
                            <a href="https://wa.me/6285111377112" class="btn btn-whatsapp btn-lg px-5 py-3 fw-bold">
                                <i class="fab fa-whatsapp me-2"></i>{{ __('services.cta_whatsapp') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Klik kartu -> kartu itu melebar, yang lain menyempit
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
    </script>

@endsection
