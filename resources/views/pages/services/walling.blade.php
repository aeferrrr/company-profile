@extends('layouts.app')

@section('title', 'Wall Works & ACP | KPCM Industrial Estate')

@section('content')

    {{-- ======================
       1. HERO SECTION
    ====================== --}}
    <section class="bg-dark text-white position-relative d-flex align-items-center service-hero">

        <div class="position-absolute w-100 h-100 top-0 start-0 hero-overlay-gradient"></div>

        <div class="container position-relative z-1 text-center">
            <span class="badge bg-primary mb-3 px-3 py-2 rounded-pill text-uppercase ls-1">Industrial Services</span>
            <h1 class="display-4 fw-bold mb-4">Walling & ACP Works</h1>

            <p class="lead text-white-50 mx-auto hero-text-limit">
                Memodernisasi tampilan eksterior fasilitas serta mengoptimalkan tata ruang interior melalui sistem
                <i>cladding</i> dan partisi berkualitas tinggi.
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
                            <i class="fas fa-building fa-3x"></i>
                        </div>
                        <h4 class="fw-bold">Modern Aesthetics</h4>
                        <p class="text-muted">
                            Meningkatkan citra visual pabrik atau kantor Anda. ACP <i>cladding</i> menghadirkan tampilan
                            industrial yang modern, profesional, dan bersih.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm h-100 bg-white">
                        <div class="text-primary mb-3">
                            <i class="fas fa-umbrella fa-3x"></i>
                        </div>
                        <h4 class="fw-bold">Weather Protection</h4>
                        <p class="text-muted">
                            Sistem pelapis dinding kami berfungsi sebagai pelindung dari hujan dan sinar UV, menjaga
                            struktur utama bangunan dari kelembapan serta panas ekstrem.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm h-100 bg-white">
                        <div class="text-primary mb-3">
                            <i class="fas fa-columns fa-3x"></i>
                        </div>
                        <h4 class="fw-bold">Space Division</h4>
                        <p class="text-muted">
                            Partisi interior yang efisien untuk menciptakan ruang meeting, kantor, atau pembatas area
                            produksi yang kuat namun tetap rapi.
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
                <h5 class="text-primary text-uppercase fw-bold">Installation Workflow</h5>
                <h2 class="fw-bold">Installation Method</h2>
            </div>

            <div class="row align-items-center">

                <div class="col-md-3 text-center mb-4 mb-md-0">
                    <div class="bg-white rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-primary mb-0">01</span>
                    </div>
                    <h5 class="fw-bold">Design & Measurement</h5>
                    <p class="small text-muted">
                        Pengukuran area secara presisi serta penentuan spesifikasi material dan pilihan warna.
                    </p>
                </div>

                <div class="col-md-3 text-center mb-4 mb-md-0">
                    <div class="bg-white rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-primary mb-0">02</span>
                    </div>
                    <h5 class="fw-bold">Frame Installation</h5>
                    <p class="small text-muted">
                        Pemasangan rangka (besi hollow atau aluminium) sebagai struktur penopang utama.
                    </p>
                </div>

                <div class="col-md-3 text-center mb-4 mb-md-0">
                    <div class="bg-white rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-primary mb-0">03</span>
                    </div>
                    <h5 class="fw-bold">Panel Application</h5>
                    <p class="small text-muted">
                        Pemasangan panel ACP atau pembangunan dinding partisi pada rangka yang telah terpasang.
                    </p>
                </div>

                <div class="col-md-3 text-center mb-4 mb-md-0">
                    <div class="bg-primary rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-white mb-0">04</span>
                    </div>
                    <h5 class="fw-bold">Finishing</h5>
                    <p class="small text-muted">
                        Aplikasi <i>sealant</i> dan pembersihan akhir untuk hasil yang rapi dan maksimal.
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
                    <h2 class="fw-bold mb-3">Scope of Work</h2>
                    <p class="text-secondary">
                        Baik untuk kebutuhan estetika eksterior maupun fungsional interior, kami menyediakan solusi dinding
                        yang disesuaikan dengan anggaran dan kebutuhan teknis Anda.
                    </p>
                    <a href="https://wa.me/628122002718" class="btn btn-outline-primary mt-3">
                        Consult via WhatsApp
                    </a>
                </div>

                <div class="col-lg-7">
                    <div class="accordion shadow-sm" id="serviceAccordion">

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne">
                                    ACP Facade (Exterior)
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show">
                                <div class="accordion-body text-muted">
                                    Kami memasang <i>Aluminium Composite Panel</i> untuk melapisi dinding lama atau
                                    menyempurnakan bangunan baru. Material ini ringan, tahan lama, dan tersedia dalam
                                    berbagai pilihan warna sesuai identitas perusahaan Anda.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    Interior Partitions
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse">
                                <div class="accordion-body text-muted">
                                    Membutuhkan ruang kantor baru atau pembatas jalur produksi? Kami menyediakan partisi
                                    gypsum maupun partisi industrial yang cepat dikerjakan dan mudah untuk dicat ulang.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                    Wall Repair & Maintenance
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse">
                                <div class="accordion-body text-muted">
                                    Kami juga menangani perbaikan dinding rusak, cat yang mengelupas, hingga penggantian
                                    panel ACP lama yang mengalami kerusakan akibat benturan atau faktor cuaca.
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
            <h2 class="fw-bold">Enhance Your Building's Aesthetics?</h2>
            <p class="mb-4">
                Mari diskusikan pilihan material dan warna terbaik untuk proyek Anda.
            </p>
            <a href="https://wa.me/628122002718" class="btn btn-light fw-bold px-5">
                Contact Us
            </a>
        </div>
    </section>

@endsection
