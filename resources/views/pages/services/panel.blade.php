@extends('layouts.app')

@section('title', 'Panel System | KPCM Industrial Estate')

@section('content')

    {{-- ======================
       1. HERO SECTION
    ====================== --}}
    <section class="bg-dark text-white position-relative d-flex align-items-center service-hero">
        
        <div class="position-absolute w-100 h-100 top-0 start-0 hero-overlay-gradient"></div>
        
        <div class="container position-relative z-1 text-center">
            <span class="badge bg-primary mb-3 px-3 py-2 rounded-pill text-uppercase ls-1">
                Building System
            </span>
            <h1 class="display-4 fw-bold mb-4">Panel System</h1>

            <p class="lead text-white-50 mx-auto hero-text-limit">
                Solusi panel yang efisien dan fleksibel untuk bangunan industri, perkantoran, dan fasilitas pendukung.
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
                            <i class="fas fa-th-large fa-3x"></i>
                        </div>
                        <h4 class="fw-bold">Modular Design</h4>
                        <p class="text-muted">
                            Sistem panel memungkinkan pemasangan cepat serta mudah dimodifikasi sesuai kebutuhan ruang.
                        </p>
                    </div>
                </div>

                {{-- Value 2 --}}
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm h-100 bg-white">
                        <div class="text-primary mb-3">
                            <i class="fas fa-bolt fa-3x"></i>
                        </div>
                        <h4 class="fw-bold">Efficient Installation</h4>
                        <p class="text-muted">
                            Waktu konstruksi lebih cepat dibandingkan dinding konvensional, sehingga meminimalkan downtime proyek.
                        </p>
                    </div>
                </div>

                {{-- Value 3 --}}
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm h-100 bg-white">
                        <div class="text-primary mb-3">
                            <i class="fas fa-building fa-3x"></i>
                        </div>
                        <h4 class="fw-bold">Clean & Professional Look</h4>
                        <p class="text-muted">
                            Memberikan tampilan yang rapi dan profesional untuk lingkungan industri, perkantoran, dan komersial.
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
                <h2 class="fw-bold">Panel Installation Method</h2>
            </div>

            <div class="row align-items-center">

                {{-- Step 1 --}}
                <div class="col-md-3 text-center mb-4 mb-md-0">
                    <div class="bg-white rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-primary mb-0">01</span>
                    </div>
                    <h5 class="fw-bold">Measurement & Planning</h5>
                    <p class="small text-muted">
                        Pengukuran lokasi dan perencanaan tata letak sebelum pemasangan panel.
                    </p>
                </div>

                {{-- Step 2 --}}
                <div class="col-md-3 text-center mb-4 mb-md-0">
                    <div class="bg-white rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-primary mb-0">02</span>
                    </div>
                    <h5 class="fw-bold">Material Preparation</h5>
                    <p class="small text-muted">
                        Pemotongan dan persiapan panel sesuai dengan gambar kerja yang telah disetujui.
                    </p>
                </div>

                {{-- Step 3 --}}
                <div class="col-md-3 text-center mb-4 mb-md-0">
                    <div class="bg-white rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-primary mb-0">03</span>
                    </div>
                    <h5 class="fw-bold">Panel Installation</h5>
                    <p class="small text-muted">
                        Proses pemasangan panel, rangka, serta komponen pendukung lainnya.
                    </p>
                </div>

                {{-- Step 4 --}}
                <div class="col-md-3 text-center mb-4 mb-md-0">
                    <div class="bg-primary rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-white mb-0">04</span>
                    </div>
                    <h5 class="fw-bold">Final Inspection</h5>
                    <p class="small text-muted">
                        Pemeriksaan keselarasan, kestabilan, dan kualitas finishing.
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
                    <h2 class="fw-bold mb-3">Panel Solutions</h2>
                    <p class="text-secondary">
                        Sistem panel kami cocok untuk kebutuhan bangunan sementara maupun permanen.
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
                                    Wall Panel
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show">
                                <div class="accordion-body text-muted">
                                    Pemasangan panel dinding untuk pembatas ruang industri dan perkantoran.
                                </div>
                            </div>
                        </div>

                        {{-- Item 2 --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    Insulated Panel
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse">
                                <div class="accordion-body text-muted">
                                    Panel dengan material insulasi untuk meningkatkan performa termal dan peredaman suara.
                                </div>
                            </div>
                        </div>

                        {{-- Item 3 --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                    Temporary & Office Panel
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse">
                                <div class="accordion-body text-muted">
                                    Sistem panel untuk kantor sementara, fasilitas proyek, dan bangunan pendukung.
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
            <h2 class="fw-bold">Need Panel Installation Services?</h2>
            <p class="mb-4">
                Bangun ruang fungsional dengan cepat melalui sistem panel profesional kami.
            </p>
            <a href="https://wa.me/628122002718" class="btn btn-light fw-bold px-5">
                Contact Us
            </a>
        </div>
    </section>

@endsection
