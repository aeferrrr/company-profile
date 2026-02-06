@extends('layouts.app')

@section('title', 'Interior & Revamping | KPCM Industrial Estate')

@section('content')

    {{-- ======================
       1. HERO SECTION
    ====================== --}}
    <section class="bg-dark text-white position-relative d-flex align-items-center service-hero">
        
        <div class="position-absolute w-100 h-100 top-0 start-0 hero-overlay-gradient"></div>
        
        <div class="container position-relative z-1 text-center">
            <span class="badge bg-primary mb-3 px-3 py-2 rounded-pill text-uppercase ls-1">
                Interior Solution
            </span>
            <h1 class="display-4 fw-bold mb-4">Interior & Revamping</h1>

            <p class="lead text-white-50 mx-auto hero-text-limit">
                Solusi interior yang fungsional dan modern untuk meningkatkan kualitas ruang industri, komersial, dan perkantoran.
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
                            <i class="fas fa-layer-group fa-3x"></i>
                        </div>
                        <h4 class="fw-bold">Functional Design</h4>
                        <p class="text-muted">
                            Tata letak interior dirancang untuk mendukung alur kerja, produktivitas, dan efisiensi ruang.
                        </p>
                    </div>
                </div>

                {{-- Value 2 --}}
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm h-100 bg-white">
                        <div class="text-primary mb-3">
                            <i class="fas fa-pencil-ruler fa-3x"></i>
                        </div>
                        <h4 class="fw-bold">Modern & Professional Look</h4>
                        <p class="text-muted">
                            Konsep interior yang bersih dan modern untuk merepresentasikan citra profesional perusahaan.
                        </p>
                    </div>
                </div>

                {{-- Value 3 --}}
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm h-100 bg-white">
                        <div class="text-primary mb-3">
                            <i class="fas fa-sync-alt fa-3x"></i>
                        </div>
                        <h4 class="fw-bold">Efficient Revamping</h4>
                        <p class="text-muted">
                            Proses peningkatan interior yang efisien dengan gangguan minimal terhadap aktivitas operasional.
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
                <h2 class="fw-bold">Interior & Revamping Method</h2>
            </div>

            <div class="row align-items-center">

                {{-- Step 1 --}}
                <div class="col-md-3 text-center mb-4 mb-md-0">
                    <div class="bg-white rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-primary mb-0">01</span>
                    </div>
                    <h5 class="fw-bold">Site Assessment</h5>
                    <p class="small text-muted">
                        Evaluasi kondisi ruang eksisting, tata letak, dan kebutuhan fungsional.
                    </p>
                </div>

                {{-- Step 2 --}}
                <div class="col-md-3 text-center mb-4 mb-md-0">
                    <div class="bg-white rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-primary mb-0">02</span>
                    </div>
                    <h5 class="fw-bold">Design & Planning</h5>
                    <p class="small text-muted">
                        Perencanaan ruang, pemilihan material, dan pengembangan konsep interior.
                    </p>
                </div>

                {{-- Step 3 --}}
                <div class="col-md-3 text-center mb-4 mb-md-0">
                    <div class="bg-white rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-primary mb-0">03</span>
                    </div>
                    <h5 class="fw-bold">Execution</h5>
                    <p class="small text-muted">
                        Pekerjaan konstruksi interior, instalasi, dan finishing.
                    </p>
                </div>

                {{-- Step 4 --}}
                <div class="col-md-3 text-center mb-4 mb-md-0">
                    <div class="bg-primary rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-white mb-0">04</span>
                    </div>
                    <h5 class="fw-bold">Final Inspection</h5>
                    <p class="small text-muted">
                        Pemeriksaan kualitas pekerjaan dan serah terima sesuai spesifikasi proyek.
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
                    <h2 class="fw-bold mb-3">Interior & Revamping Services</h2>
                    <p class="text-secondary">
                        Kami menyediakan solusi interior yang meningkatkan fungsi, kenyamanan, dan tampilan profesional.
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
                                    Office Interior
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show">
                                <div class="accordion-body text-muted">
                                    Desain dan konstruksi interior perkantoran untuk mendukung produktivitas dan kenyamanan kerja.
                                </div>
                            </div>
                        </div>

                        {{-- Item 2 --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    Industrial & Warehouse Interior
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse">
                                <div class="accordion-body text-muted">
                                    Solusi interior fungsional untuk fasilitas industri dan area gudang.
                                </div>
                            </div>
                        </div>

                        {{-- Item 3 --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                    Revamping & Renovation
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse">
                                <div class="accordion-body text-muted">
                                    Peningkatan dan pembaruan ruang eksisting tanpa perubahan struktur utama.
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
            <h2 class="fw-bold">Need Interior & Revamping Services?</h2>
            <p class="mb-4">
                Tingkatkan kualitas ruang kerja Anda dengan solusi interior yang fungsional dan profesional.
            </p>
            <a href="https://wa.me/628122002718" class="btn btn-light fw-bold px-5">
                Contact Us
            </a>
        </div>
    </section>

@endsection
