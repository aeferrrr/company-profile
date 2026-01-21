@extends('layouts.app')

@section('title', 'About Us | KPCM Industrial Estate')

@section('content')

{{-- ======================
    1. HERO SECTION (ORIGINAL STYLE)
====================== --}}
<section class="hero-section hero-about">

    {{-- Background Image --}}
    <img src="{{ asset('images/background-senja.png') }}"
         class="hero-bg"
         alt="About KPCM Industrial Estate">

    {{-- Overlay --}}
    <div class="hero-overlay"></div>

    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">About Us</h1>
            <p class="hero-subtitle">
                Empowering Industrial Growth with Integrity and Excellence
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
                <h5 class="text-primary font-weight-bold text-uppercase mb-3">Who We Are</h5>
                <h2 class="font-weight-bold mb-4" style="line-height: 1.2;">
                    Strategic Partner for <br>
                    <span class="text-secondary">Industrial Excellence</span>
                </h2>
                <div class="bg-primary" style="width: 60px; height: 4px;"></div>
            </div>

            {{-- Right: Content --}}
            <div class="col-lg-7">
                <p class="text-muted text-justify mb-3">
                    <strong>PT KPCM Industrial Estate</strong> stands as a premier development entity dedicated to navigating the complexities of the modern industrial landscape. We transcend conventional boundaries to deliver comprehensive solutions designed to accelerate business growth.
                </p>
                <p class="text-muted text-justify mb-0">
                    We believe that sustainable transformation is the cornerstone of business resilience. Our mission is to empower organizations not only to survive but to lead amidst the dynamic challenges of the 21st century, ensuring long-term success and operational excellence for all our stakeholders.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- ======================
    3. IMAGE SEPARATOR (Parallax Style)
====================== --}}
<section class="py-5" style="background: url('/images/separator_about.jpg') no-repeat center center/cover; background-attachment: fixed; min-height: 300px; position: relative;">
    {{-- Overlay gelap tipis agar text terbaca --}}
    <div style="position: absolute; top:0; left:0; width:100%; height:100%; background: rgba(0,0,0,0.4);"></div>
    
    <div class="container h-100 d-flex align-items-center justify-content-center position-relative">
        <div class="bg-white p-4 p-lg-5 shadow text-center" style="max-width: 600px; opacity: 0.95;">
            <h3 class="h5 text-uppercase text-primary font-weight-bold mb-3">Our Commitment</h3>
            <p class="mb-0 text-dark">
                "Delivering quality infrastructure that drives national economic growth with a commitment to safety and sustainability."
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
                            {{-- Gunakan Bootstrap Icons --}}
                            <i class="bi bi-eye display-4"></i>
                        </div>
                        <h3 class="font-weight-bold mb-3">Our Vision</h3>
                        <p class="text-muted text-justify mb-0">
                            To be a premier development company dedicated to delivering sustainable, efficient, and innovative industrial solutions that create enduring value for our clients, partners, and the industries we serve.
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
                        <h3 class="font-weight-bold mb-3">Our Mission</h3>
                        <p class="text-muted text-justify mb-0">
                            To provide strategic, competitive, and result-oriented business solutions that optimize operational efficiency and maximize return on investment for our stakeholders through integrity and innovation.
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
        <h5 class="text-primary font-weight-bold text-uppercase mb-2">Our Foundation</h5>
        <h2 class="font-weight-bold mb-5">Corporate Values</h2>
        
        <div class="row justify-content-center">
            <div class="col-md-4 col-lg-3 mb-4">
                <div class="p-3">
                    <i class="bi bi-shield-check text-warning display-4 mb-3 d-block"></i>
                    <h5 class="font-weight-bold">Integrity</h5>
                    <p class="small text-muted">Upholding honesty and transparency.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 mb-4">
                <div class="p-3">
                    <i class="bi bi-lightbulb text-warning display-4 mb-3 d-block"></i>
                    <h5 class="font-weight-bold">Innovation</h5>
                    <p class="small text-muted">Continuous improvement and modernization.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 mb-4">
                <div class="p-3">
                    <i class="bi bi-people text-warning display-4 mb-3 d-block"></i>
                    <h5 class="font-weight-bold">Collaboration</h5>
                    <p class="small text-muted">Building strong synergies.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 mb-4">
                <div class="p-3">
                    <i class="bi bi-gear-wide-connected text-warning display-4 mb-3 d-block"></i>
                    <h5 class="font-weight-bold">Excellence</h5>
                    <p class="small text-muted">Superior quality and safety.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection