@extends('layouts.app')

@section('title', 'Speed Door | KPCM Industrial Estate')

@section('content')

    {{-- ======================
       1. HERO SECTION
    ====================== --}}
    <section class="bg-dark text-white position-relative d-flex align-items-center service-hero">
        
        <div class="position-absolute w-100 h-100 top-0 start-0 hero-overlay-gradient"></div>
        
        <div class="container position-relative z-1 text-center">
            <span class="badge bg-primary mb-3 px-3 py-2 rounded-pill text-uppercase ls-1">
                Industrial Access System
            </span>
            <h1 class="display-4 fw-bold mb-4">Speed Door</h1>

            <p class="lead text-white-50 mx-auto hero-text-limit">
                Solusi pintu berkecepatan tinggi yang dirancang untuk meningkatkan efisiensi, keselamatan, dan pengendalian lingkungan di fasilitas industri.
            </p>
        </div>
    </section>

    {{-- ======================
       2. VALUE PROPOSITION
    ====================== --}}
    <section class="py-5">
        <div class="container py-4">
            <div class="row text-center g-4">

                {{-- Value 1 --}}
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm h-100 bg-white">
                        <div class="text-primary mb-3">
                            <i class="fas fa-tachometer-alt fa-3x"></i>
                        </div>
                        <h4 class="fw-bold">Fast Operation</h4>
                        <p class="text-muted">
                            Proses buka dan tutup yang cepat untuk mendukung kelancaran lalu lintas dan efisiensi operasional.
                        </p>
                    </div>
                </div>

                {{-- Value 2 --}}
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm h-100 bg-white">
                        <div class="text-primary mb-3">
                            <i class="fas fa-shield-alt fa-3x"></i>
                        </div>
                        <h4 class="fw-bold">Safety & Protection</h4>
                        <p class="text-muted">
                            Dilengkapi sensor keselamatan untuk mengurangi risiko tabrakan serta melindungi personel dan peralatan.
                        </p>
                    </div>
                </div>

                {{-- Value 3 --}}
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm h-100 bg-white">
                        <div class="text-primary mb-3">
                            <i class="fas fa-temperature-low fa-3x"></i>
                        </div>
                        <h4 class="fw-bold">Environmental Control</h4>
                        <p class="text-muted">
                            Membantu menjaga suhu, mengontrol debu, dan menciptakan lingkungan kerja yang bersih.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ======================
       3. OUR PROCESS
    ====================== --}}
    <section class="py-5 bg-light">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase fw-bold">Work Process</h5>
                <h2 class="fw-bold">Speed Door Installation Method</h2>
            </div>

            <div class="row align-items-center">

                {{-- Step 1 --}}
                <div class="col-md-3 text-center mb-4 mb-md-0">
                    <div class="bg-white rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-primary mb-0">01</span>
                    </div>
                    <h5 class="fw-bold">Site Measurement</h5>
                    <p class="small text-muted">
                        Pengukuran bukaan pintu dan evaluasi kondisi lokasi.
                    </p>
                </div>

                {{-- Step 2 --}}
                <div class="col-md-3 text-center mb-4 mb-md-0">
                    <div class="bg-white rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-primary mb-0">02</span>
                    </div>
                    <h5 class="fw-bold">Specification & Design</h5>
                    <p class="small text-muted">
                        Penentuan jenis pintu, ukuran, dan sistem kontrol sesuai kebutuhan penggunaan.
                    </p>
                </div>

                {{-- Step 3 --}}
                <div class="col-md-3 text-center mb-4 mb-md-0">
                    <div class="bg-white rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-primary mb-0">03</span>
                    </div>
                    <h5 class="fw-bold">Installation</h5>
                    <p class="small text-muted">
                        Pemasangan struktur pintu, motor, sensor, dan panel kontrol.
                    </p>
                </div>

                {{-- Step 4 --}}
                <div class="col-md-3 text-center mb-4 mb-md-0">
                    <div class="bg-primary rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-white mb-0">04</span>
                    </div>
                    <h5 class="fw-bold">Testing & Handover</h5>
                    <p class="small text-muted">
                        Pengujian operasional, pemeriksaan keselamatan, dan serah terima kepada pengguna.
                    </p>
                </div>

            </div>
        </div>
    </section>

    {{-- ======================
       4. DETAILED SERVICES
    ====================== --}}
    <section class="py-5">
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-5 mb-4">
                    <h2 class="fw-bold mb-3">Speed Door Services</h2>
                    <p class="text-secondary">
                        Kami menyediakan solusi pintu berkecepatan tinggi untuk pabrik, gudang, dan area dengan kontrol lingkungan khusus.
                    </p>
                    <a href="https://wa.me/628122002718" class="btn btn-outline-primary mt-3">
                        Konsultasi via WhatsApp
                    </a>
                </div>

                <div class="col-lg-7">
                    <div class="accordion shadow-sm" id="serviceAccordion">

                        {{-- Item 1 --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                    High Speed Door Installation
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show">
                                <div class="accordion-body text-muted">
                                    Pemasangan pintu otomatis berkecepatan tinggi untuk akses area industri dan gudang.
                                </div>
                            </div>
                        </div>

                        {{-- Item 2 --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    Control & Safety System
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse">
                                <div class="accordion-body text-muted">
                                    Integrasi sensor, panel kontrol, dan sistem keselamatan.
                                </div>
                            </div>
                        </div>

                        {{-- Item 3 --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                    Maintenance & Repair
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse">
                                <div class="accordion-body text-muted">
                                    Layanan perawatan, penyesuaian, dan perbaikan untuk memastikan performa pintu tetap optimal.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ======================
       5. CTA
    ====================== --}}
    <section class="bg-primary py-5 text-white text-center">
        <div class="container">
            <h2 class="fw-bold">Need Speed Door Installation?</h2>
            <p class="mb-4">
                Tingkatkan efisiensi dan keselamatan dengan solusi pintu berkecepatan tinggi yang andal.
            </p>
            <a href="https://wa.me/628122002718" class="btn btn-light fw-bold px-5">
                Contact Us
            </a>
        </div>
    </section>
@endsection
