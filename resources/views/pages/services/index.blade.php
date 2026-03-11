@extends('layouts.app')

@section('meta_title', __('general.seo.service_title'))
@section('meta_description', __('general.seo.service_desc'))

@section('content')

    {{-- ======================
        SERVICES HERO (FULL WIDTH)
    ====================== --}}
    <section class="hero-section hero-services">
        <img src="{{ asset('/images/hero/excavator-action.jpg') }}" class="hero-bg" alt="{{ __('services.hero_title') }}">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title display-3 fw-bold">{{ __('services.hero_title') }}</h1>
                <p class="hero-subtitle lead">
                    {{ __('services.hero_subtitle') }}
                </p>
            </div>
        </div>
    </section>

    {{-- ======================
        SERVICES CATEGORIES (ENHANCED DESIGN)
    ====================== --}}
    <section id="services" class="section-padding position-relative overflow-hidden">
        {{-- Decorative background elements --}}
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-light opacity-50 z-n1"></div>
        <div class="blob-decorator position-absolute top-0 end-0"></div>
        <div class="container">
            {{-- <div class="row justify-content-center mb-5 pb-3">
                <div class="col-lg-7 text-center">
                    <span class="badge rounded-pill bg-danger-soft text-primary px-3 py-2 mb-3 text-uppercase fw-bold letter-spacing-1">Our Expertise</span>
                    <h2 class="section-heading text-dark fw-bold display-5">{{ __('services.capabilities_title') }}</h2>
                    <div class="heading-line mx-auto mb-4"></div>
                    <p class="text-muted fs-5">
                        {{ __('services.capabilities_subtitle') }}
                    </p>
                </div>
            </div> --}}

            @php
                $serviceGroups = [
                    [
                        'title' => 'Civil',
                        'icon' => 'fas fa-city',
                        'items' => ['Foundation', 'Road Construction', 'Golf Course Development']
                    ],
                    [
                        'title' => 'Architecture',
                        'icon' => 'fas fa-drafting-compass',
                        'items' => ['Apartment', 'Bungalow', 'Factory Design', 'Warehouse', 'Temporary Facilities']
                    ],
                    [
                        'title' => 'Mechanical',
                        'icon' => 'fas fa-tools',
                        'items' => ['Fabrication', 'Erection', 'Steel Structure', 'Piping', 'Tank', 'Pipeline', 'Fire Fighting Systems', 'WTP/WWTP']
                    ],
                    [
                        'title' => 'Electrical & Instrument',
                        'icon' => 'fas fa-bolt',
                        'items' => ['Substation', 'Transformer', 'Panel Board', 'Cabling', 'Industrial Lighting', 'Telecommunication', 'Fire Alarm/CCTV']
                    ],
                    [
                        'title' => 'Revamping',
                        'icon' => 'fas fa-recycle',
                        'items' => ['Building Demolition', 'Structural Renovation']
                    ],
                    [
                        'title' => 'Maintenance',
                        'icon' => 'fas fa-hammer',
                        'items' => ['Factory Maintenance', 'Plant Services']
                    ],
                    [
                        'title' => 'Interior',
                        'icon' => 'fas fa-couch',
                        'items' => ['Space Design', 'Interior Fit-out']
                    ],
                    [
                        'title' => 'Others',
                        'icon' => 'fas fa-plus-circle',
                        'items' => ['Epoxy Flooring', 'Roofing Solutions', 'Speed Door Systems']
                    ],
                ];
            @endphp

            <div class="row g-4">
                @foreach($serviceGroups as $group)
                <div class="col-4 col-md-4 col-lg-3">
                    <div class="service-card-modern p-4 h-100">
                        <div class="icon-circle mb-4">
                            <i class="{{ $group['icon'] }}"></i>
                        </div>
                        <h4 class="category-title-modern">{{ $group['title'] }}</h4>
                        <ul class="list-unstyled category-list-modern">
                            @foreach($group['items'] as $item)
                                <li class="d-flex align-items-start mb-2">
                                    <span class="bullet-dot me-2 mt-2"></span>
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
    
    {{-- ======================
        CALL TO ACTION (MODERN GRADIENT)
    ====================== --}}
    <section class="cta-modern py-5">
        <div class="container py-4">
            <div class="cta-glass p-5 text-center shadow-lg">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <h2 class="display-5 fw-bold mb-3 text-white">{{ __('services.cta_title') }}</h2>
                        <p class="lead mb-5 text-white opacity-90">
                            {{ __('services.cta_desc') }}
                        </p>
                        <div class="d-flex justify-content-center gap-4 flex-wrap">
                            <a href="{{ url('/contact') }}" class="btn btn-primary-modern btn-lg px-5 py-3 fw-bold">
                                <i class="fas fa-paper-plane me-2"></i>Hubungi Kami
                            </a>
                            <a href="https://wa.me/085591710360" class="btn btn-whatsapp-modern btn-lg px-5 py-3">
                                <i class="fab fa-whatsapp me-2"></i>WhatsApp Chat
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection