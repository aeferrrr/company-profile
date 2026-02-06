@extends('layouts.app')

@section('title', 'Electrical | KPCM Industrial Estate')

@section('content')

    {{-- ======================
       1. HERO SECTION
    ====================== --}}
    <section class="bg-dark text-white position-relative d-flex align-items-center service-hero">
        
        <div class="position-absolute w-100 h-100 top-0 start-0 hero-overlay-gradient"></div>
        
        <div class="container position-relative z-1 text-center">
            <span class="badge bg-primary mb-3 px-3 py-2 rounded-pill text-uppercase ls-1">
                Electrical Services
            </span>
            <h1 class="display-4 fw-bold mb-4">Electrical</h1>

            <p class="lead text-white-50 mx-auto hero-text-limit">
                Solusi instalasi dan pemeliharaan kelistrikan yang andal untuk mendukung operasional industri yang aman dan efisien.
            </p>
        </div>
    </section>

    {{-- ======================
       2. VALUE PROPOSITION
    ====================== --}}
    <section class="py-5">
        <div class="container py-4">
            <div class="row text-center g-4">

                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm h-100 bg-white">
                        <div class="text-primary mb-3">
                            <i class="fas fa-bolt fa-3x"></i>
                        </div>
                        <h4 class="fw-bold">Safe Installation</h4>
                        <p class="text-muted">
                            Sistem kelistrikan dipasang sesuai standar keselamatan untuk meminimalkan risiko operasional.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm h-100 bg-white">
                        <div class="text-primary mb-3">
                            <i class="fas fa-plug fa-3x"></i>
                        </div>
                        <h4 class="fw-bold">Stable Power Supply</h4>
                        <p class="text-muted">
                            Dirancang untuk menyediakan distribusi daya yang stabil dan andal bagi fasilitas industri.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm h-100 bg-white">
                        <div class="text-primary mb-3">
                            <i class="fas fa-tools fa-3x"></i>
                        </div>
                        <h4 class="fw-bold">Easy Maintenance</h4>
                        <p class="text-muted">
                            Tata letak kelistrikan disusun rapi untuk memudahkan inspeksi, perawatan, dan penanganan gangguan.
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
                <h2 class="fw-bold">Electrical Installation Method</h2>
            </div>

            <div class="row align-items-center">

                <div class="col-md-3 text-center mb-4 mb-md-0">
                    <div class="bg-white rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-primary mb-0">01</span>
                    </div>
                    <h5 class="fw-bold">Site Survey</h5>
                    <p class="small text-muted">
                        Analisis kebutuhan beban listrik serta kondisi lokasi proyek.
                    </p>
                </div>

                <div class="col-md-3 text-center mb-4 mb-md-0">
                    <div class="bg-white rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-primary mb-0">02</span>
                    </div>
                    <h5 class="fw-bold">Design & Planning</h5>
                    <p class="small text-muted">
                        Perancangan sistem kelistrikan, perhitungan beban, dan jalur instalasi.
                    </p>
                </div>

                <div class="col-md-3 text-center mb-4 mb-md-0">
                    <div class="bg-white rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-primary mb-0">03</span>
                    </div>
                    <h5 class="fw-bold">Installation</h5>
                    <p class="small text-muted">
                        Penarikan kabel, pemasangan panel, dan penyambungan peralatan listrik.
                    </p>
                </div>

                <div class="col-md-3 text-center mb-4 mb-md-0">
                    <div class="bg-primary rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-white mb-0">04</span>
                    </div>
                    <h5 class="fw-bold">Testing & Commissioning</h5>
                    <p class="small text-muted">
                        Pengujian sistem untuk memastikan keamanan, keandalan, dan performa.
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
                    <h2 class="fw-bold mb-3">Electrical Services</h2>
                    <p class="text-secondary">
                        Kami menyediakan layanan kelistrikan yang komprehensif untuk fasilitas industri, komersial, dan proyek.
                    </p>
                    <a href="https://wa.me/628122002718" class="btn btn-outline-primary mt-3">
                        Consult via WhatsApp
                    </a>
                </div>

                <div class="col-lg-7">
                    <div class="accordion shadow-sm" id="serviceAccordion">

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                    Electrical Installation
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show">
                                <div class="accordion-body text-muted">
                                    Instalasi sistem distribusi listrik, pencahayaan, dan peralatan kelistrikan.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    Panel & Distribution System
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse">
                                <div class="accordion-body text-muted">
                                    Pemasangan dan perawatan panel listrik serta sistem distribusi daya.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                    Maintenance & Troubleshooting
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse">
                                <div class="accordion-body text-muted">
                                    Inspeksi, perbaikan, dan penanganan gangguan listrik untuk menjaga keandalan sistem.
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
            <h2 class="fw-bold">Need Electrical Services?</h2>
            <p class="mb-4">
                Pastikan sistem kelistrikan yang aman dan andal untuk fasilitas Anda.
            </p>
            <a href="https://wa.me/628122002718" class="btn btn-light fw-bold px-5">
                Contact Us
            </a>
        </div>
    </section>

@endsection
