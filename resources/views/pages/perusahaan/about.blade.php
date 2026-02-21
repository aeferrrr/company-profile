@extends('layouts.app')

@section('title', __('about.hero_title') . ' | KPCM Industrial Estate')

@section('content')

    {{-- ======================
    1. HERO SECTION (ORIGINAL STYLE)
    ====================== --}}
    <section class="hero-section hero-about">

        {{-- Background Image --}}
        <img src="{{ asset('images/background-senja.png') }}" class="hero-bg" alt="{{ __('about.hero_title') }}">

        {{-- Overlay --}}
        <div class="hero-overlay"></div>

        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">{{ __('about.hero_title') }}</h1>
                <p class="hero-subtitle">
                    {{ __('about.hero_subtitle') }}
                </p>
            </div>
        </div>
    </section>

    {{-- ======================
    2. CORPORATE OVERVIEW
    Style: Professional Split Content
    ====================== --}}
    <section class="py-5 bg-white">
        <div class="container py-lg-5">
            <div class="row align-items-center">
                {{-- Left: Headline --}}
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <h5 class="text-primary font-weight-bold text-uppercase mb-3">{{ __('about.who_we_are') }}</h5>
                    <h2 class="font-weight-bold mb-4" style="line-height: 1.2;">
                        {{ __('about.strategic_partner') }} <br>
                        <span class="text-secondary">{{ __('about.industrial_excellence') }}</span>
                    </h2>
                    <div class="bg-primary" style="width: 60px; height: 4px;"></div>
                </div>

                {{-- Right: Content --}}
                <div class="col-lg-7">
                    <p class="text-muted text-justify mb-3">
                        {!! __('about.desc_p1') !!}
                    </p>
                    <p class="text-muted text-justify mb-0">
                        {{ __('about.desc_p2') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ======================
    3. IMAGE SEPARATOR (Parallax Style)
    ====================== --}}
    <section class="py-5"
        style="background: url('/images/separator_about.jpg') no-repeat center center/cover; background-attachment: fixed; min-height: 300px; position: relative;">
        {{-- Overlay gelap tipis agar text terbaca --}}
        <div style="position: absolute; top:0; left:0; width:100%; height:100%; background: rgba(0,0,0,0.4);"></div>
        <div class="container h-100 d-flex align-items-center justify-content-center position-relative">
            <div class="bg-white p-4 p-lg-5 shadow text-center" style="max-width: 600px; opacity: 0.95;">
                <h3 class="h5 text-uppercase text-primary font-weight-bold mb-3">{{ __('about.commitment_title') }}</h3>
                <p class="mb-0 text-dark">
                    {{ __('about.commitment_text') }}
                </p>
            </div>
        </div>
    </section>

    {{-- ======================
    4. VISION & MISSION
    Style: Clean Cards (Standard BUMN/Corporate Style)
    ====================== --}}
    <section class="py-5 bg-light">
        <div class="container py-lg-5">
            <div class="row">
                {{-- Vision --}}
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="card h-100 border-0 shadow-sm hover-lift">
                        <div class="card-body p-4 p-lg-5">
                            <div class="icon-box mb-4 text-primary">
                                <i class="bi bi-eye display-4"></i>
                            </div>
                            <h3 class="font-weight-bold mb-3">{{ __('about.vision_title') }}</h3>
                            <p class="text-muted text-justify mb-0">
                                {{ __('about.vision_text') }}
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Mission --}}
                <div class="col-md-6">
                    <div class="card h-100 border-0 shadow-sm hover-lift">
                        <div class="card-body p-4 p-lg-5">
                            <div class="icon-box mb-4 text-primary">
                                <i class="bi bi-flag display-4"></i>
                            </div>
                            <h3 class="font-weight-bold mb-3">{{ __('about.mission_title') }}</h3>
                            <p class="text-muted text-justify mb-0">
                                {{ __('about.mission_text') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ======================
    5. CORE VALUES
    ====================== --}}
    <section class="py-5 bg-white">
        <div class="container py-lg-5 text-center">
            <h5 class="text-primary font-weight-bold text-uppercase mb-2">{{ __('about.foundation') }}</h5>
            <h2 class="font-weight-bold mb-5">{{ __('about.corp_values') }}</h2>
            <div class="row justify-content-center">
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="p-3">
                        <i class="bi bi-shield-check text-primary display-4 mb-3 d-block"></i>
                        <h5 class="font-weight-bold">{{ __('about.val_integrity') }}</h5>
                        <p class="small text-muted">{{ __('about.val_integrity_desc') }}</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="p-3">
                        <i class="bi bi-lightbulb text-primary display-4 mb-3 d-block"></i>
                        <h5 class="font-weight-bold">{{ __('about.val_innovation') }}</h5>
                        <p class="small text-muted">{{ __('about.val_innovation_desc') }}</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="p-3">
                        <i class="bi bi-people text-primary display-4 mb-3 d-block"></i>
                        <h5 class="font-weight-bold">{{ __('about.val_collaboration') }}</h5>
                        <p class="small text-muted">{{ __('about.val_collaboration_desc') }}</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="p-3">
                        <i class="bi bi-gear-wide-connected text-primary display-4 mb-3 d-block"></i>
                        <h5 class="font-weight-bold">{{ __('about.val_excellence') }}</h5>
                        <p class="small text-muted">{{ __('about.val_excellence_desc') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection