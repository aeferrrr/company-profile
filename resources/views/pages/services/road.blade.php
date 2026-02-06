@extends('layouts.app')

@section('title', 'Road Work | KPCM Industrial Estate')

@section('content')

    {{-- ======================
       1. HERO SECTION
    ====================== --}}
    <section class="bg-dark text-white position-relative d-flex align-items-center service-hero">
        
        <div class="position-absolute w-100 h-100 top-0 start-0 hero-overlay-gradient"></div>
        
        <div class="container position-relative z-1 text-center">
            <span class="badge bg-primary mb-3 px-3 py-2 rounded-pill text-uppercase ls-1">
                Infrastructure Service
            </span>
            <h1 class="display-4 fw-bold mb-4">Road Work</h1>

            <p class="lead text-white-50 mx-auto hero-text-limit">
                Layanan konstruksi dan peningkatan jalan yang andal untuk mendukung kebutuhan transportasi industri dan komersial.
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
                            <i class="fas fa-road fa-3x"></i>
                        </div>
                        <h4 class="fw-bold">Strong Road Structure</h4>
                        <p class="text-muted">
                            Dirancang untuk menahan beban kendaraan berat dan lalu lintas industri harian tanpa cepat mengalami kerusakan.
                        </p>
                    </div>
                </div>

                {{-- Value 2 --}}
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm h-100 bg-white">
                        <div class="text-primary mb-3">
                            <i class="fas fa-truck fa-3x"></i>
                        </div>
                        <h4 class="fw-bold">Smooth & Safe Access</h4>
                        <p class="text-muted">
                            Perataan dan finishing permukaan yang optimal untuk memastikan akses transportasi yang aman dan efisien.
                        </p>
                    </div>
                </div>

                {{-- Value 3 --}}
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm h-100 bg-white">
                        <div class="text-primary mb-3">
                            <i class="fas fa-ruler-horizontal fa-3x"></i>
                        </div>
                        <h4 class="fw-bold">Accurate Execution</h4>
                        <p class="text-muted">
                            Dimensi jalan, kemiringan, dan ketebalan dikerjakan sesuai standar teknis dan spesifikasi proyek.
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
                <h2 class="fw-bold">Road Construction Method</h2>
            </div>

            <div class="row align-items-center">

                {{-- Step 1 --}}
                <div class="col-md-3 text-center mb-4 mb-md-0">
                    <div class="bg-white rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-primary mb-0">01</span>
                    </div>
                    <h5 class="fw-bold">Site Survey</h5>
                    <p class="small text-muted">
                        Pemeriksaan lokasi, pengecekan elevasi, serta analisis kondisi tanah.
                    </p>
                </div>

                {{-- Step 2 --}}
                <div class="col-md-3 text-center mb-4 mb-md-0">
                    <div class="bg-white rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-primary mb-0">02</span>
                    </div>
                    <h5 class="fw-bold">Earthwork Preparation</h5>
                    <p class="small text-muted">
                        Pekerjaan galian, perataan, dan pemadatan untuk membentuk pondasi jalan yang kuat.
                    </p>
                </div>

                {{-- Step 3 --}}
                <div class="col-md-3 text-center mb-4 mb-md-0">
                    <div class="bg-white rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-primary mb-0">03</span>
                    </div>
                    <h5 class="fw-bold">Pavement Work</h5>
                    <p class="small text-muted">
                        Pemasangan perkerasan aspal atau beton sesuai spesifikasi desain.
                    </p>
                </div>

                {{-- Step 4 --}}
                <div class="col-md-3 text-center mb-4 mb-md-0">
                    <div class="bg-primary rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-white mb-0">04</span>
                    </div>
                    <h5 class="fw-bold">Final Inspection</h5>
                    <p class="small text-muted">
                        Pemeriksaan kualitas permukaan, sistem drainase, dan kesiapan terhadap beban lalu lintas.
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
                    <h2 class="fw-bold mb-3">Road Work Services</h2>
                    <p class="text-secondary">
                        Kami melayani jalan internal kawasan, jalan akses, serta area sirkulasi industri.
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
                                    Asphalt Road
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show">
                                <div class="accordion-body text-muted">
                                    Pembangunan jalan aspal yang cocok untuk lalu lintas industri dan kendaraan berat.
                                </div>
                            </div>
                        </div>

                        {{-- Item 2 --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    Concrete Road
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse">
                                <div class="accordion-body text-muted">
                                    Perkerasan beton kaku untuk area dengan beban tinggi dan daya tahan jangka panjang.
                                </div>
                            </div>
                        </div>

                        {{-- Item 3 --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                    Road Repair & Improvement
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse">
                                <div class="accordion-body text-muted">
                                    Perbaikan, pelapisan ulang, dan penguatan struktur jalan yang sudah ada.
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
            <h2 class="fw-bold">Need Road Construction Services?</h2>
            <p class="mb-4">
                Bangun akses jalan yang kuat, aman, dan tahan lama untuk mendukung operasional industri Anda.
            </p>
            <a href="https://wa.me/628122002718" class="btn btn-light fw-bold px-5">
                Contact Us
            </a>
        </div>
    </section>

@endsection
