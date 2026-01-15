@extends('layouts.app')

@section('content')
    <!-- HERO SECTION -->
    <section class="hero-section">
        <!-- Background Video -->
        <video class="hero-video" autoplay muted loop playsinline>
            <source src="/videos/hero.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <!-- Overlay -->
        <div class="hero-overlay"></div>

        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">KPCM Industrial Estate</h1>
                <p class="hero-subtitle">
                    {{ __('home.hero_title') }}
                </p>

                <div class="hero-buttons">
                    <a href="#services" class="btn btn-primary">
                        View Our Services
                    </a>

                    <a href="https://www.youtube.com/watch?v=VIDEO_ID" target="_blank"
                        class="btn btn-outline-light btn-video ms-3">
                        <span class="play-icon"></span>
                        View Company Profile
                    </a>

                </div>
            </div>
        </div>
    </section>


    {{-- ======================
     VIDEO SHOWCASE
====================== --}}
<section id="video-showcase" class="video-section">
    <div class="container">

        <!-- Heading -->
        <div class="text-center mb-5">
            <h2 class="fw-bold">{{ __('home.video_heading') }}</h2>
            <p class="text-muted mt-2">
                {{ __('home.video_subheading') }}
            </p>
        </div>

        <!-- Landscape Video -->
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <div class="video-wrapper video-landscape shadow position-relative">

                    <video id="companyVideo" autoplay muted loop playsinline>
                        <source src="{{ asset('videos/kpcm-construction.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                    <!-- Audio Toggle Button -->
                    <button id="audioToggle" class="audio-toggle" aria-label="Toggle Audio">
                        🔇
                    </button>

                    <!-- Overlay -->
                    <div class="video-overlay">
                        All Services
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>


    {{-- ======================
   OUR SERVICES (HIGHLIGHT)
====================== --}}
    <section id="services" class="services-highlight py-5">
        <div class="container">

            <!-- Heading -->
            <div class="text-center mb-5">
                <h2 class="fw-bold">{{ __('general.services') }}</h2>
                <p class="text-muted mt-2">
                    {{ __('home.services_heading') }}
                </p>
            </div>

            <div class="row align-items-stretch">
                <!-- LEFT : SERVICE BUTTONS -->
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="service-tabs">
                        <button class="service-btn active" data-service="service1">
                            Epoxy & Concrete Polishing
                        </button>
                        <button class="service-btn" data-service="service2">
                            Roofing Construction
                        </button>
                        <button class="service-btn" data-service="service3">
                            Interior & Revamping
                        </button>
                        <button class="service-btn" data-service="service4">
                            Construction & Management
                        </button>
                    </div>

                    <a href="/services" class="btn btn-primary mt-4 w-100">
                        {{ __('home.buttonservice') }}
                    </a>
                </div>

                <!-- RIGHT : SERVICE CONTENT -->
                <div class="col-lg-8">
                    <div class="service-content">

                        <div class="service-item active" id="service1">
                            <h4>Epoxy & Concrete Polishing</h4>
                            <p>
                                {{ __('home.epoxy_text') }}
                            </p>
                        </div>

                        <div class="service-item" id="service2">
                            <h4>Roofing Construction</h4>
                            <p>
                                {{ __('home.roofing_text') }}
                            </p>
                        </div>

                        <div class="service-item" id="service3">
                            <h4>Interior & Revamping</h4>
                            <p>
                               {{ __('home.revamping_text') }}
                            </p>
                        </div>

                        <div class="service-item" id="service4">
                            <h4>Construction & Management</h4>
                            <p>
                               {{ __('home.management_text') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="client-section py-5">
        <div class="container">

            <div class="text-center mb-4">
                <h2 class="fw-bold">{{ __('home.client_heading') }}</h2>
                <p class="text-muted mt-2">
                    {{ __('home.client_subheading') }}
                </p>
            </div>

            <div class="row g-4 justify-content-center align-items-center client-logos">

                <!-- LOGO ITEM -->
                <div class="col-6 col-md-4 col-lg-2">
                    <img src="{{ asset('images/clients/samsung.png') }}" alt="Samsung" class="client-logo">
                </div>

                <div class="col-6 col-md-4 col-lg-2">
                    <img src="{{ asset('images/clients/hyundai.png') }}" alt="Hyundai" class="client-logo">
                </div>

                <div class="col-6 col-md-4 col-lg-2">
                    <img src="{{ asset('images/clients/nike.png') }}" alt="Nike" class="client-logo">
                </div>

                <div class="col-6 col-md-4 col-lg-2">
                    <img src="{{ asset('images/clients/locklock.png') }}" alt="Lock & Lock" class="client-logo">
                </div>

                <div class="col-6 col-md-4 col-lg-2">
                    <img src="{{ asset('images/clients/cj.png') }}" alt="CJ Super Feed" class="client-logo">
                </div>

                <div class="col-6 col-md-4 col-lg-2">
                    <img src="{{ asset('images/clients/erajaya.png') }}" alt="Erajaya" class="client-logo">
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <img src="{{ asset('images/clients/lg.png') }}" alt="Samsung" class="client-logo">
                </div>

                <div class="col-6 col-md-4 col-lg-2">
                    <img src="{{ asset('images/clients/lotte.png') }}" alt="Hyundai" class="client-logo">
                </div>

                <div class="col-6 col-md-4 col-lg-2">
                    <img src="{{ asset('images/clients/zinus.png') }}" alt="Nike" class="client-logo">
                </div>

                <div class="col-6 col-md-4 col-lg-2">
                    <img src="{{ asset('images/clients/emsonic.png') }}" alt="Lock & Lock" class="client-logo">
                </div>

                <div class="col-6 col-md-4 col-lg-2">
                    <img src="{{ asset('images/clients/strawland.png') }}" alt="CJ Super Feed" class="client-logo">
                </div>

                <div class="col-6 col-md-4 col-lg-2">
                    <img src="{{ asset('images/clients/shinwon.png') }}" alt="Erajaya" class="client-logo">
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <img src="{{ asset('images/clients/zimmoah.png') }}" alt="Samsung" class="client-logo">
                </div>

                <div class="col-6 col-md-4 col-lg-2">
                    <img src="{{ asset('images/clients/daeyoung.png') }}" alt="Hyundai" class="client-logo">
                </div>

                <div class="col-6 col-md-4 col-lg-2">
                    <img src="{{ asset('images/clients/pungkook.png') }}" alt="Nike" class="client-logo">
                </div>

                <div class="col-6 col-md-4 col-lg-2">
                    <img src="{{ asset('images/clients/serim.png') }}" alt="Lock & Lock" class="client-logo">
                </div>
            </div>

            <!-- Optional text -->
            <div class="text-center mt-4">
                <p class="small text-muted">
                    {{ __('home.client_subsubheading') }}
                </p>
            </div>

        </div>
    </section>
@endsection
