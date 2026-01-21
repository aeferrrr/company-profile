@extends('layouts.app')

@section('title', 'Konstruksi Pergudangan | KPCM Industrial Estate')

@section('content')

    {{-- ======================
       1. HERO SECTION
    ====================== --}}
    <section class="bg-dark text-white position-relative d-flex align-items-center service-hero">
        
        <div class="position-absolute w-100 h-100 top-0 start-0 hero-overlay-gradient"></div>
        
        <div class="container position-relative z-1 text-center">
            <span class="badge bg-primary mb-3 px-3 py-2 rounded-pill text-uppercase ls-1">Layanan Industri</span>
            <h1 class="display-4 fw-bold mb-4">Konstruksi Pergudangan</h1>
            
            <p class="lead text-white-50 mx-auto hero-text-limit">
                Membangun fasilitas penyimpanan andal yang berfokus pada optimasi ruang, durabilitas struktur, dan kelancaran alur operasional logistik.
            </p>
        </div>
    </section>

    {{-- ======================
       2. VALUE PROPOSITION (Professional)
    ====================== --}}
    <section class="py-5">
        <div class="container py-4">
            <div class="row text-center g-4">
                {{-- Value 1 --}}
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm h-100 bg-white">
                        <div class="text-primary mb-3">
                            <i class="fas fa-cubes fa-3x"></i>
                        </div>
                        <h4 class="fw-bold">Optimasi Ruang</h4>
                        <p class="text-muted">
                            Kami merancang tata letak (layout) yang memaksimalkan kapasitas penyimpanan, memastikan utilitas maksimal pada setiap meter persegi area inventaris Anda.
                        </p>
                    </div>
                </div>
                {{-- Value 2 --}}
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm h-100 bg-white">
                        <div class="text-primary mb-3">
                            <i class="fas fa-layer-group fa-3x"></i>
                        </div>
                        <h4 class="fw-bold">Integritas Lantai</h4>
                        <p class="text-muted">
                            Lantai beton bertulang kualitas tinggi yang dirancang khusus untuk menahan beban muatan berat, mesin industri, serta lalu lintas forklift yang intensif.
                        </p>
                    </div>
                </div>
                {{-- Value 3 --}}
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm h-100 bg-white">
                        <div class="text-primary mb-3">
                            <i class="fas fa-tools fa-3x"></i>
                        </div>
                        <h4 class="fw-bold">Efisiensi Pemeliharaan</h4>
                        <p class="text-muted">
                            Dibangun menggunakan material berdurabilitas tinggi yang tahan terhadap cuaca dan abrasi, mereduksi biaya perawatan fasilitas dalam jangka panjang.
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
                <h5 class="text-primary text-uppercase fw-bold">Dari Perencanaan Hingga Konstruksi</h5>
                <h2 class="fw-bold">Proses Pengembangan Fasilitas</h2>
            </div>

            <div class="row align-items-center">
                {{-- Step 1 --}}
                <div class="col-md-3 text-center position-relative mb-4 mb-md-0">
                    <div class="bg-white rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-primary mb-0">01</span>
                    </div>
                    <h5 class="fw-bold">Perencanaan Tata Letak</h5>
                    <p class="small text-muted">Perancangan denah lantai yang paling efisien sesuai spesifikasi operasional.</p>
                </div>

                {{-- Step 2 --}}
                <div class="col-md-3 text-center position-relative mb-4 mb-md-0">
                    <div class="bg-white rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-primary mb-0">02</span>
                    </div>
                    <h5 class="fw-bold">Persiapan Material</h5>
                    <p class="small text-muted">Pengadaan material baja dan beton dengan standar mutu industri.</p>
                </div>

                {{-- Step 3 --}}
                <div class="col-md-3 text-center position-relative mb-4 mb-md-0">
                    <div class="bg-white rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-primary mb-0">03</span>
                    </div>
                    <h5 class="fw-bold">Pelaksanaan Konstruksi</h5>
                    <p class="small text-muted">Ereksi struktur, pemasangan atap, dan pengecoran lantai (flooring).</p>
                </div>

                {{-- Step 4 --}}
                <div class="col-md-3 text-center position-relative mb-4 mb-md-0">
                    <div class="bg-primary rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-white mb-0">04</span>
                    </div>
                    <h5 class="fw-bold">Serah Terima</h5>
                    <p class="small text-muted">Pemeriksaan akhir (final check) dan serah terima operasional.</p>
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
                    <h2 class="fw-bold mb-3">Spesifikasi Bangunan</h2>
                    <p class="text-secondary">
                        Pergudangan modern memerlukan kekuatan struktur dan fungsionalitas tinggi. Berikut adalah aspek kunci yang kami prioritaskan dalam proses konstruksi.
                    </p>
                    <a href="https://wa.me/628122002718" class="btn btn-outline-primary mt-3">Konsultasi via WhatsApp</a>
                </div>
                
                <div class="col-lg-7">
                    <div class="accordion shadow-sm" id="serviceAccordion">
                        
                        {{-- Item 1 --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">
                                    Struktur Baja & Beton
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#serviceAccordion">
                                <div class="accordion-body text-muted">
                                    Kami membangun kerangka kokoh menggunakan baja WF dan beton bertulang standar industri untuk memastikan bangunan tahan terhadap cuaca dan memiliki masa pakai yang panjang (long lifespan).
                                </div>
                            </div>
                        </div>

                        {{-- Item 2 --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    Aksesibilitas Logistik
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#serviceAccordion">
                                <div class="accordion-body text-muted">
                                    Titik masuk dan keluar (loading docks) dirancang secara presisi untuk memfasilitasi manuver truk dan forklift, menjamin alur distribusi barang yang tanpa hambatan.
                                </div>
                            </div>
                        </div>

                        {{-- Item 3 --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                    Sistem Atap & Ventilasi
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#serviceAccordion">
                                <div class="accordion-body text-muted">
                                    Proteksi aset adalah prioritas kami. Kami menginstalasi atap tahan korosi dan sistem ventilasi (turbine ventilator) yang memadai untuk menjaga sirkulasi udara dan suhu interior tetap stabil.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ======================
       5. CTA SIMPLE
    ====================== --}}
    <section class="bg-primary py-5 text-white text-center">
        <div class="container">
            <h2 class="fw-bold">Membutuhkan Fasilitas Gudang Baru?</h2>
            <p class="mb-4">Diskusikan lokasi dan spesifikasi teknis yang Anda butuhkan.</p>
            <a href="https://wa.me/628122002718" class="btn btn-light fw-bold px-5">Hubungi Kami</a>
        </div>
    </section>

@endsection