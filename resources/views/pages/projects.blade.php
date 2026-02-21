@extends('layouts.app')

@section('title', __('projects.title') . ' | KPCM Industrial Estate')

@section('content')

    {{-- ======================
        PROJECT HERO
    ====================== --}}
    <section class="hero-section hero-project">

        {{-- Background Image --}}
        <img src="{{ asset('images/ourproject.jpg') }}" class="hero-bg" alt="{{ __('projects.hero_title') }}">

        {{-- Overlay --}}
        <div class="hero-overlay"></div>

        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">{{ __('projects.hero_title') }}</h1>
                <p class="hero-subtitle">
                    {{ __('projects.hero_subtitle') }}
                </p>
            </div>
        </div>

    </section>

    {{-- ======================
        PROJECT CAROUSEL SECTION
    ====================== --}}
    <section id="projects" class="projects-section section-padding">
        <div class="container">

            {{-- Section Title --}}
            <div class="text-center mb-5 section-header">
                <h2 class="fw-bold display-6">{{ __('projects.featured_title') }}</h2>
                <p class="text-muted mt-2 mx-auto w-75">
                    {{ __('projects.featured_subtitle') }}
                </p>
                <hr class="mx-auto my-3" style="width: 60px; border: 2px solid #0d6efd; opacity: 1;">
            </div>

            {{-- Custom Styled Carousel --}}
            <div id="projectCarousel" class="carousel slide carousel-fade shadow-lg rounded-3 overflow-hidden"
                data-bs-ride="carousel">

                @php
                    // Mapping data slide agar rapi dan mudah dikelola
                    $slides = [
                        [
                            'id' => 'roofing',
                            'img' => 'project-4.jpg',
                            'badge' => 'bg-primary'
                        ],
                        [
                            'id' => 'mechanical',
                            'img' => 'project-6.jpg',
                            'badge' => 'bg-success'
                        ],
                        [
                            'id' => 'temporary',
                            'img' => 'project-12.jpg',
                            'badge' => 'bg-warning text-dark'
                        ]
                    ];
                @endphp

                <div class="carousel-indicators">
                    @foreach($slides as $index => $slide)
                        <button type="button" data-bs-target="#projectCarousel" data-bs-slide-to="{{ $index }}" 
                            class="{{ $index == 0 ? 'active' : '' }}"></button>
                    @endforeach
                </div>

                <div class="carousel-inner">
                    @foreach($slides as $index => $slide)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <img src="{{ asset('images/projects/' . $slide['img']) }}" class="d-block w-100 project-slide-img"
                            alt="{{ __('projects.slide_' . $slide['id'] . '_title') }}">

                        <div class="slide-overlay"></div> 

                        <div class="carousel-caption">
                            <span class="badge {{ $slide['badge'] }} mb-2">
                                {{ __('projects.slide_' . $slide['id'] . '_badge') }}
                            </span>
                            <h3 class="fw-bold">{{ __('projects.slide_' . $slide['id'] . '_title') }}</h3>
                            <p class="mb-0 d-none d-md-block">{{ __('projects.slide_' . $slide['id'] . '_location') }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#projectCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark bg-opacity-25 rounded-circle p-3"
                        aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#projectCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-dark bg-opacity-25 rounded-circle p-3"
                        aria-hidden="true"></span>
                </button>

            </div>
        </div>
    </section>

    {{-- ======================
        CTA SECTION
    ====================== --}}
    <section class="container py-5 mb-4">
        <div class="text-center p-5 rounded bg-white shadow-sm border border-light">
            <h3 class="fw-bold mb-3 text-dark">
                {{ __('projects.cta_title') }}
            </h3>
            <p class="text-muted mb-4">
                {{ __('projects.cta_desc') }}
            </p>
            <a href="{{ url('/contact') }}" class="btn btn-primary px-5 py-3 fw-bold">
                {{ __('projects.cta_button') }}
            </a>
        </div>
    </section>

    <style>
        .section-padding { padding: 60px 0; }
        .project-slide-img { height: 500px; object-fit: cover; }
        .slide-overlay {
            position: absolute;
            bottom: 0; left: 0; right: 0;
            height: 50%;
            background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);
        }
    </style>
@endsection