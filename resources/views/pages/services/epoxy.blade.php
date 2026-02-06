@extends('layouts.app')

@section('title', 'Epoxy & Concrete Polishing | KPCM Industrial Estate')

@section('content')

    {{-- ======================
       1. HERO SECTION
    ====================== --}}
    <section class="bg-dark text-white position-relative d-flex align-items-center service-hero">
        
        <div class="position-absolute w-100 h-100 top-0 start-0 hero-overlay-gradient"></div>
        
        <div class="container position-relative z-1 text-center">
            <span class="badge bg-primary mb-3 px-3 py-2 rounded-pill text-uppercase ls-1">
                Industrial Flooring
            </span>
            <h1 class="display-4 fw-bold mb-4">Epoxy & Concrete Polishing</h1>

            <p class="lead text-white-50 mx-auto hero-text-limit">
                Solusi lantai yang kuat, tanpa sambungan, dan berperforma tinggi yang dirancang untuk area industri,
                gudang, serta fasilitas komersial.
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
                            <i class="fas fa-layer-group fa-3x"></i>
                        </div>
                        <h4 class="fw-bold">High Durability</h4>
                        <p class="text-muted">
                            Lantai epoxy dan beton poles dirancang untuk menahan <i>beban berat</i>, benturan,
                            serta aktivitas industri harian.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm h-100 bg-white">
                        <div class="text-primary mb-3">
                            <i class="fas fa-shield-alt fa-3x"></i>
                        </div>
                        <h4 class="fw-bold">Seamless & Hygienic</h4>
                        <p class="text-muted">
                            Permukaan halus tanpa sambungan mencegah penumpukan debu dan memudahkan proses pembersihan,
                            ideal untuk area yang membutuhkan standar kebersihan tinggi.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm h-100 bg-white">
                        <div class="text-primary mb-3">
                            <i class="fas fa-ruler-combined fa-3x"></i>
                        </div>
                        <h4 class="fw-bold">Precision Finish</h4>
                        <p class="text-muted">
                            Tingkat kerataan, ketebalan, dan hasil akhir dikontrol secara presisi untuk menghasilkan
                            lantai yang profesional dan tahan lama.
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
                <h5 class="text-primary text-uppercase fw-bold">Working Process</h5>
                <h2 class="fw-bold">Flooring Execution Method</h2>
            </div>

            <div class="row align-items-center">

                <div class="col-md-3 text-center mb-4 mb-md-0">
                    <div class="bg-white rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-primary mb-0">01</span>
                    </div>
                    <h5 class="fw-bold">Surface Preparation</h5>
                    <p class="small text-muted">
                        Proses penggerindaan dan pembersihan untuk memastikan daya rekat maksimal dan permukaan lantai rata.
                    </p>
                </div>

                <div class="col-md-3 text-center mb-4 mb-md-0">
                    <div class="bg-white rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-primary mb-0">02</span>
                    </div>
                    <h5 class="fw-bold">Base Treatment</h5>
                    <p class="small text-muted">
                        Perbaikan retak, perataan permukaan, serta aplikasi primer sebelum pelapisan.
                    </p>
                </div>

                <div class="col-md-3 text-center mb-4 mb-md-0">
                    <div class="bg-white rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-primary mb-0">03</span>
                    </div>
                    <h5 class="fw-bold">Epoxy / Polishing</h5>
                    <p class="small text-muted">
                        Aplikasi epoxy atau proses pemolesan mekanis sesuai kebutuhan dan spesifikasi proyek.
                    </p>
                </div>

                <div class="col-md-3 text-center mb-4 mb-md-0">
                    <div class="bg-primary rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-white mb-0">04</span>
                    </div>
                    <h5 class="fw-bold">Final Inspection</h5>
                    <p class="small text-muted">
                        Pemeriksaan kualitas meliputi ketebalan, tingkat kilap, dan kekuatan permukaan lantai.
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
                    <h2 class="fw-bold mb-3">Flooring Solutions</h2>
                    <p class="text-secondary">
                        Kami menyediakan sistem lantai yang disesuaikan untuk pabrik, gudang, area parkir,
                        dan fasilitas komersial lainnya.
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
                                    Epoxy Flooring
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show">
                                <div class="accordion-body text-muted">
                                    Solusi ideal untuk lantai industri dan gudang yang membutuhkan ketahanan terhadap
                                    bahan kimia, daya tahan tinggi, serta tampilan yang bersih dan rapi.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    Concrete Polishing
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse">
                                <div class="accordion-body text-muted">
                                    Beton poles memberikan hasil akhir mengilap alami dengan perawatan minimal
                                    serta ketahanan abrasi yang tinggi.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                    Repair & Recoating
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse">
                                <div class="accordion-body text-muted">
                                    Perbaikan lantai yang rusak meliputi penanganan retak, pelapisan ulang,
                                    hingga aplikasi ulang epoxy.
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
            <h2 class="fw-bold">Need Industrial Flooring Solutions?</h2>
            <p class="mb-4">
                Tingkatkan performa lantai Anda dengan sistem epoxy atau beton poles berkualitas tinggi.
            </p>
            <a href="https://wa.me/628122002718" class="btn btn-light fw-bold px-5">
                Contact Us
            </a>
        </div>
    </section>

@endsection
