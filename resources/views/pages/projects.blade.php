@extends('layouts.app')

@section('title', 'Contact Us | KPCM Industrial Estate')

@section('content')

    {{-- ======================
   PROJECT HERO (FULL WIDTH)
====================== --}}
    <section class="hero-section hero-project">

        {{-- Background Image --}}
        <img src="{{ asset('images/ourproject.jpg') }}" class="hero-bg" alt="Project Gallery KPCM Industrial Estate">

        {{-- Overlay --}}
        <div class="hero-overlay"></div>

        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Project Gallery</h1>
                <p class="hero-subtitle">
                    Selected industrial construction projects delivered
                    with precision, quality, and professionalism.
                </p>
            </div>
        </div>

    </section>


    <section id="projects" class="projects container ">
        <div class="text-center mb-5">
            <h1 class="fw-bold">Project Gallery</h1>
            <p class="text-muted mt-2">
                Our selected industrial construction projects showcasing quality,
                capability, and professional execution.
            </p>
        </div>

        <div id="projectCarousel" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#projectCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#projectCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#projectCarousel" data-bs-slide-to="2"></button>
                {{-- <button type="button" data-bs-target="#projectCarousel" data-bs-slide-to="3"></button>
                <button type="button" data-bs-target="#projectCarousel" data-bs-slide-to="4"></button>
                <button type="button" data-bs-target="#projectCarousel" data-bs-slide-to="5"></button>
                <button type="button" data-bs-target="#projectCarousel" data-bs-slide-to="6"></button> --}}
            </div>

            <!-- Slides -->
            <div class="carousel-inner rounded shadow">

                <div class="carousel-item active">
                    <img src="{{ asset('images/projects/project-1.jpg') }}" class="d-block w-100 project-img"
                        alt="Warehouse Construction">
                    <div class="carousel-caption">
                        <h5>Concept Design</h5>
                        <p>Kertas Nusantara, Berau, Kalimantan Timur</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('images/projects/project-2.jpg') }}" class="d-block w-100 project-img"
                        alt="Factory Building">
                    <div class="carousel-caption">
                        <h5>Batching Plan & Cafetaria</h5>
                        <p>Kertas Nusantara, Berau, Kalimantan Timur</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('images/projects/project-3.jpg') }}" class="d-block w-100 project-img"
                        alt="Road Work">
                    <div class="carousel-caption">
                        <h5>Interior & Revamping</h5>
                        <p>Kertas Nusantara, Berau, Kalimantan Timur</p>
                    </div>
                </div>

                {{-- <div class="carousel-item">
                    <img src="{{ asset('images/projects/project-4.jpg') }}" class="d-block w-100 project-img"
                        alt="Epoxy Flooring">
                    <div class="carousel-caption">
                        <h5>Roofing Panels</h5>
                        <p>Roofing, Insullation & Panels. Roofing Work - Subang</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('images/projects/project-5.jpg') }}" class="d-block w-100 project-img"
                        alt="Mechanical & Piping">
                    <div class="carousel-caption">
                        <h5>Interior & Revamping</h5>
                        <p>KN, BERAU, KALIMANTAN TIMUR</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('images/projects/project-6.jpg') }}" class="d-block w-100 project-img"
                        alt="Interior & Revamping">
                    <div class="carousel-caption">
                        <h5>Mechanical & Piping Services</h5>
                        <p>RDMP RU-V PERTAMINA BALIKPAPAN PROJECT
                            Partnership with PT. GEMILANG KARYA MANDIRI .</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/projects/project-7.jpg') }}" class="d-block w-100 project-img"
                        alt="Interior & Revamping">
                    <div class="carousel-caption">
                        <h5>Road Work & Landscape Work</h5>
                        <p>Asphalt, Concrete, and Paving Block - Paving Block Road – Jalan Sayuti - Landscape Building &
                            Warehouse.</p>
                    </div>
                </div>

            </div> --}}

                <!-- Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#projectCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#projectCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>

            </div>
    </section>
    <section class="container pb-5">
        <div class="text-center p-5 rounded bg-white shadow-sm">
            <h3 class="fw-bold mb-3">
                Ready to Build Your Industrial Project?
            </h3>
            <p class="text-muted mb-4">
                Contact us today to discuss your construction and project management needs.
            </p>
            <a href="/contact" class="btn btn-primary px-4 py-2">
                Contact Us
            </a>
        </div>
    @endsection
