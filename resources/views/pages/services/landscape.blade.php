@extends('layouts.app')

@section('title', 'Landscape Work | KPCM Industrial Estate')

@section('content')

    {{-- ======================
       1. HERO SECTION
    ====================== --}}
    <section class="bg-dark text-white position-relative d-flex align-items-center service-hero">
        
        <div class="position-absolute w-100 h-100 top-0 start-0 hero-overlay-gradient"></div>
        
        <div class="container position-relative z-1 text-center">
            <span class="badge bg-primary mb-3 px-3 py-2 rounded-pill text-uppercase ls-1">
                Outdoor Development
            </span>
            <h1 class="display-4 fw-bold mb-4">Landscape Work</h1>

            <p class="lead text-white-50 mx-auto hero-text-limit">
                Solusi lanskap yang fungsional dan estetis untuk meningkatkan kualitas area luar di lingkungan industri dan komersial.
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
                            <i class="fas fa-leaf fa-3x"></i>
                        </div>
                        <h4 class="fw-bold">Green & Organized Area</h4>
                        <p class="text-muted">
                            Penataan area hijau yang baik meningkatkan tampilan visual serta kualitas lingkungan kawasan.
                        </p>
                    </div>
                </div>

                {{-- Value 2 --}}
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm h-100 bg-white">
                        <div class="text-primary mb-3">
                            <i class="fas fa-tree fa-3x"></i>
                        </div>
                        <h4 class="fw-bold">Functional Design</h4>
                        <p class="text-muted">
                            Desain lanskap dirancang untuk mendukung sistem drainase, sirkulasi area, dan aspek keselamatan.
                        </p>
                    </div>
                </div>

                {{-- Value 3 --}}
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm h-100 bg-white">
                        <div class="text-primary mb-3">
                            <i class="fas fa-seedling fa-3x"></i>
                        </div>
                        <h4 class="fw-bold">Low Maintenance</h4>
                        <p class="text-muted">
                            Pemilihan tanaman dan tata letak difokuskan pada ketahanan serta kemudahan perawatan jangka panjang.
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
                <h2 class="fw-bold">Landscape Implementation Method</h2>
            </div>

            <div class="row align-items-center">

                {{-- Step 1 --}}
                <div class="col-md-3 text-center mb-4 mb-md-0">
                    <div class="bg-white rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-primary mb-0">01</span>
                    </div>
                    <h5 class="fw-bold">Site Assessment</h5>
                    <p class="small text-muted">
                        Pemeriksaan area, evaluasi kondisi tanah, dan perencanaan tata letak lanskap.
                    </p>
                </div>

                {{-- Step 2 --}}
                <div class="col-md-3 text-center mb-4 mb-md-0">
                    <div class="bg-white rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-primary mb-0">02</span>
                    </div>
                    <h5 class="fw-bold">Ground Preparation</h5>
                    <p class="small text-muted">
                        Pembersihan lahan, perbaikan struktur tanah, serta persiapan sistem drainase.
                    </p>
                </div>

                {{-- Step 3 --}}
                <div class="col-md-3 text-center mb-4 mb-md-0">
                    <div class="bg-white rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-primary mb-0">03</span>
                    </div>
                    <h5 class="fw-bold">Planting & Installation</h5>
                    <p class="small text-muted">
                        Penanaman pohon, rumput, serta pemasangan elemen-elemen lanskap.
                    </p>
                </div>

                {{-- Step 4 --}}
                <div class="col-md-3 text-center mb-4 mb-md-0">
                    <div class="bg-primary rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-white mb-0">04</span>
                    </div>
                    <h5 class="fw-bold">Final Touch & Inspection</h5>
                    <p class="small text-muted">
                        Penataan akhir, pembersihan area, dan pemeriksaan kualitas pekerjaan.
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
                    <h2 class="fw-bold mb-3">Landscape Services</h2>
                    <p class="text-secondary">
                        Pekerjaan lanskap kami mendukung kebutuhan fungsional sekaligus estetika lingkungan industri.
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
                                    Softscape
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show">
                                <div class="accordion-body text-muted">
                                    Penanaman pohon, semak, rumput, dan tanaman penutup tanah untuk menciptakan ruang terbuka hijau.
                                </div>
                            </div>
                        </div>

                        {{-- Item 2 --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    Hardscape
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse">
                                <div class="accordion-body text-muted">
                                    Pekerjaan jalur pejalan kaki, kanstin, paving block, dan pembatas area lanskap.
                                </div>
                            </div>
                        </div>

                        {{-- Item 3 --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                    Landscape Maintenance
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse">
                                <div class="accordion-body text-muted">
                                    Perawatan rutin meliputi pemangkasan tanaman, pemotongan rumput, dan pembersihan area.
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
            <h2 class="fw-bold">Need Landscape Work Services?</h2>
            <p class="mb-4">
                Ciptakan lingkungan luar yang lebih bersih, hijau, dan tertata dengan baik.
            </p>
            <a href="https://wa.me/628122002718" class="btn btn-light fw-bold px-5">
                Contact Us
            </a>
        </div>
    </section>

@endsection
