@extends('layouts.app')

@section('title', 'Galeri Proyek | KPCM Industrial Estate')

@section('content')

    {{-- ======================
        PROJECT HERO
    ====================== --}}
    <section class="hero-section hero-project">

        {{-- Background Image --}}
        <img src="{{ asset('images/ourproject.jpg') }}" class="hero-bg" alt="Galeri Proyek KPCM Industrial Estate">

        {{-- Overlay --}}
        <div class="hero-overlay"></div>

        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Galeri Proyek</h1>
                <p class="hero-subtitle">
                    Proyek konstruksi industri pilihan yang dikerjakan 
                    dengan presisi, kualitas, dan profesionalisme.
                </p>
            </div>
        </div>

    </section>

    {{-- ======================
        PROJECT CAROUSEL SECTION
    ====================== --}}
    <section id="projects" class="projects-section">
        <div class="container">

            {{-- Section Title --}}
            <div class="text-center mb-5 section-header">
                <h2 class="fw-bold display-6">Proyek Unggulan</h2>
                <p class="text-muted mt-2 mx-auto w-75">
                    Pilihan proyek konstruksi industri kami yang menunjukkan kualitas, 
                    kapabilitas, dan pelaksanaan profesional di lapangan.
                </p>
                <hr class="mx-auto my-3" style="width: 60px; border: 2px solid #0d6efd; opacity: 1;">
            </div>

            {{-- Custom Styled Carousel --}}
            <div id="projectCarousel" class="carousel slide carousel-fade shadow-lg rounded-3 overflow-hidden"
                data-bs-ride="carousel">

                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#projectCarousel" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#projectCarousel" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#projectCarousel" data-bs-slide-to="2"></button>
                    {{-- <button type="button" data-bs-target="#projectCarousel" data-bs-slide-to="3"></button>
                    <button type="button" data-bs-target="#projectCarousel" data-bs-slide-to="4"></button> --}}
                </div>

                <div class="carousel-inner">

                    {{-- Slide 1 --}}
                    <div class="carousel-item active">
                        <img src="{{ asset('images/projects/project-4.jpg') }}" class="d-block w-100 project-slide-img"
                            alt="Roofing">

                        <div class="slide-overlay"></div> 

                        <div class="carousel-caption">
                            <span class="badge bg-primary mb-2">Roofing</span>
                            <h3 class="fw-bold">Roofing, Insullation & Panels </h3>
                            <p class="mb-0 d-none d-md-block">Subang, Jawa Barat</p>
                        </div>
                    </div>

                    {{-- Slide 2 --}}
                    <div class="carousel-item">
                        <img src="{{ asset('images/projects/project-6.jpg') }}" class="d-block w-100 project-slide-img"
                            alt="Bangunan Pabrik">
                        <div class="slide-overlay"></div>
                        <div class="carousel-caption">
                            <span class="badge bg-success mb-2">Mechanical & Piping Services</span>
                            <h3 class="fw-bold">Partnership with PT. GEMILANG KARYA MANDIRI </h3>
                            <p class="mb-0 d-none d-md-block">Balikpapan, Kalimantan Timur</p>
                        </div>
                    </div>

                    {{-- Slide 3 --}}
                    <div class="carousel-item">
                        <img src="{{ asset('images/projects/project-12.jpg') }}" class="d-block w-100 project-slide-img"
                            alt="Interior">
                        <div class="slide-overlay"></div>
                        <div class="carousel-caption">
                            <span class="badge bg-warning text-dark mb-2">Temporary Office</span>
                            <h3 class="fw-bold">Access Floor, Perforated (Air Grill), Data Center, and Server room</h3>
                            <p class="mb-0 d-none d-md-block">Cikarang, Jawa Barat</p>
                        </div>
                    </div>

                    {{-- Slide 4 --}}
                    {{-- <div class="carousel-item">
                        <img src="{{ asset('images/projects/project-4.jpg') }}" class="d-block w-100 project-slide-img"
                            alt="Atap Industri">
                        <div class="slide-overlay"></div>
                        <div class="carousel-caption">
                            <span class="badge bg-info text-dark mb-2">Atap</span>
                            <h3 class="fw-bold">Pekerjaan Atap & Insulasi</h3>
                            <p class="mb-0 d-none d-md-block">Pekerjaan Atap Industri - Subang</p>
                        </div>
                    </div> --}}

                    {{-- Slide 5 --}}
                    {{-- <div class="carousel-item">
                        <img src="{{ asset('images/projects/project-6.jpg') }}" class="d-block w-100 project-slide-img"
                            alt="Minyak & Gas">
                        <div class="slide-overlay"></div>
                        <div class="carousel-caption">
                            <span class="badge bg-danger mb-2">MECHANICAL AND PIPING SERVICES</span>
                            <h3 class="fw-bold">Layanan Mekanikal</h3>
                            <p class="mb-0 d-none d-md-block">RDMP RU-V Pertamina Balikpapan</p>
                        </div>
                    </div> --}}

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
                Siap Membangun Proyek Industri Anda?
            </h3>
            <p class="text-muted mb-4">
                Kami memastikan setiap proyek ditangani dengan standar keselamatan dan kualitas tertinggi.
            </p>
            <a href="/contact" class="btn btn-primary px-5 py-2 fw-bold">
                Hubungi Kami
            </a>
        </div>
    </section>
@endsection