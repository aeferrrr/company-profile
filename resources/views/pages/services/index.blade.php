@extends('layouts.app')

@section('title', __('services.title') . ' | KPCM Industrial Estate')

@section('content')

    {{-- ======================
        SERVICES HERO (FULL WIDTH)
    ====================== --}}
    <section class="hero-section hero-services">
        {{-- Background Image --}}
        <img src="{{ asset('images/services.jpg') }}" class="hero-bg" alt="{{ __('services.hero_title') }}">

        {{-- Overlay --}}
        <div class="hero-overlay"></div>

        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">{{ __('services.hero_title') }}</h1>
                <p class="hero-subtitle">
                    {{ __('services.hero_subtitle') }}
                </p>
            </div>
        </div>
    </section>

    {{-- ======================
        SERVICES GRID
    ====================== --}}
    <section id="services" class="section-padding bg-light">
        <div class="container">

            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-heading">{{ __('services.capabilities_title') }}</h2>
                    <div class="heading-line mx-auto"></div>
                    <p class="text-muted mt-3">
                        {{ __('services.capabilities_subtitle') }}
                    </p>
                </div>
            </div>

            <div class="row g-4">
            @php
                // Array bantuan untuk memetakan Icon ke Key Bahasa
                $services = [
                    ['icon' => 'fas fa-project-diagram', 'key' => 'construction'],
                    ['icon' => 'fas fa-warehouse',       'key' => 'warehouse'],
                    ['icon' => 'fas fa-city',            'key' => 'civil'], 
                    ['icon' => 'fas fa-layer-group',     'key' => 'mep_steel'], 
                    ['icon' => 'fas fa-cogs',            'key' => 'mechanical'],
                    ['icon' => 'fas fa-database',         'key' => 'tank'],
                    ['icon' => 'fas fa-border-all',      'key' => 'walling'],
                    ['icon' => 'fas fa-fill-drip',       'key' => 'epoxy'],
                    ['icon' => 'fas fa-home',            'key' => 'roofing'],
                    ['icon' => 'fas fa-th-large',        'key' => 'panel'],
                    ['icon' => 'fas fa-road',            'key' => 'road'],
                    ['icon' => 'fas fa-tree',            'key' => 'landscape'],
                    ['icon' => 'fas fa-paint-roller',    'key' => 'interior'],
                    ['icon' => 'fas fa-building',        'key' => 'temporary'],
                    ['icon' => 'fas fa-bolt',            'key' => 'electrical'],
                    ['icon' => 'fas fa-door-open',       'key' => 'speed_door'],
                    ['icon' => 'fas fa-wrench',          'key' => 'utilities'],
                    ['icon' => 'fas fa-couch',           'key' => 'villa'],
                ];
            @endphp

                @foreach($services as $item)
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="icon-wrapper">
                            <i class="{{ $item['icon'] }}"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ __('services.s_' . $item['key'] . '_title') }}</h5>
                            <p class="card-text">
                                {{ __('services.s_' . $item['key'] . '_desc') }}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    
    {{-- ======================
        CALL TO ACTION (CTA)
    ====================== --}}
    <section class="section-padding bg-primary text-white text-center py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h2 class="display-5 fw-bold mb-3 text-white">{{ __('services.cta_title') }}</h2>
                    <p class="lead mb-4 opacity-75">
                        {{ __('services.cta_desc') }}
                    </p>
                    <div class="d-flex justify-content-center gap-3 flex-wrap">
                        <a href="{{ url('/contact') }}" class="btn btn-light btn-lg px-5 py-3 fw-bold">
                            <i class="fas fa-envelope me-2"></i>{{ __('services.cta_button_contact') }}
                        </a>
                        <a href="https://wa.me/your-number" class="btn btn-outline-light btn-lg px-5 py-3">
                            <i class="fab fa-whatsapp me-2"></i>{{ __('services.cta_button_wa') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .bg-primary {
            background-color: #003366 !important; 
        }
        .section-padding {
            padding: 80px 0;
        }
        .btn-light {
            color: #003366;
            transition: all 0.3s ease;
        }
        .btn-light:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
        .btn-outline-light:hover {
            transform: translateY(-3px);
        }
    </style>
@endsection