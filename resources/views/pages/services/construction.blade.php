@extends('layouts.app')

@section('title', 'Konstruksi & Manajemen Proyek | KPCM Industrial Estate')

@section('content')

    {{-- ======================
       1. HERO SECTION (Professional)
    ====================== --}}
    <section class="bg-dark text-white position-relative d-flex align-items-center service-hero">
        
        <div class="position-absolute w-100 h-100 top-0 start-0 hero-overlay-gradient"></div>
        
        <div class="container position-relative z-1 text-center">
            <span class="badge bg-primary mb-3 px-3 py-2 rounded-pill text-uppercase ls-1">Layanan Industri</span>
            <h1 class="display-4 fw-bold mb-4">Konstruksi & Manajemen Proyek</h1>
            
            <p class="lead text-white-50 mx-auto hero-text-limit">
                Kami berdedikasi pada integritas struktural dan manajemen sistematis guna menghadirkan fasilitas industri yang handal dan siap operasional.
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
                            <i class="fas fa-shield-alt fa-3x"></i>
                        </div>
                        <h4 class="fw-bold">Standar K3 & Keselamatan</h4>
                        <p class="text-muted">
                            Implementasi kebijakan <i>Zero Accident</i> yang ketat. Seluruh personel kami tersertifikasi untuk memitigasi risiko di lingkungan kerja industri.
                        </p>
                    </div>
                </div>
                {{-- Value 2 --}}
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm h-100 bg-white">
                        <div class="text-primary mb-3">
                            <i class="fas fa-stopwatch fa-3x"></i>
                        </div>
                        <h4 class="fw-bold">Ketepatan Waktu Penyerahan</h4>
                        <p class="text-muted">
                            Penerapan manajemen penjadwalan terintegrasi untuk memastikan fasilitas pabrik atau gudang Anda siap beroperasi sesuai target waktu (<i>On-Schedule</i>).
                        </p>
                    </div>
                </div>
                {{-- Value 3 --}}
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm h-100 bg-white">
                        <div class="text-primary mb-3">
                            <i class="fas fa-calculator fa-3x"></i>
                        </div>
                        <h4 class="fw-bold">Akuntabilitas Anggaran</h4>
                        <p class="text-muted">
                            Transparansi pembiayaan tanpa biaya tersembunyi. Kami melakukan optimasi material (<i>Value Engineering</i>) untuk memaksimalkan ROI (<i>Return on Investment</i>) Anda.
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
                <h5 class="text-primary text-uppercase fw-bold">Alur Kerja Kami</h5>
                <h2 class="fw-bold">Metodologi Pelaksanaan Proyek</h2>
            </div>

            <div class="row align-items-center">
                {{-- Step 1 --}}
                <div class="col-md-3 text-center position-relative mb-4 mb-md-0">
                    <div class="bg-white rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-primary mb-0">01</span>
                    </div>
                    <h5 class="fw-bold">Studi & Konsultasi</h5>
                    <p class="small text-muted">Analisis kelayakan lokasi dan pemetaan kebutuhan teknis.</p>
                </div>

                {{-- Step 2 --}}
                <div class="col-md-3 text-center position-relative mb-4 mb-md-0">
                    <div class="bg-white rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-primary mb-0">02</span>
                    </div>
                    <h5 class="fw-bold">Perencanaan & Estimasi</h5>
                    <p class="small text-muted">Penyusunan RAB dan desain teknis (<i>Engineering Design</i>).</p>
                </div>

                {{-- Step 3 --}}
                <div class="col-md-3 text-center position-relative mb-4 mb-md-0">
                    <div class="bg-white rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-primary mb-0">03</span>
                    </div>
                    <h5 class="fw-bold">Implementasi Fisik</h5>
                    <p class="small text-muted">Pelaksanaan konstruksi dengan supervisi kualitas harian.</p>
                </div>

                {{-- Step 4 --}}
                <div class="col-md-3 text-center position-relative mb-4 mb-md-0">
                    <div class="bg-primary rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-white mb-0">04</span>
                    </div>
                    <h5 class="fw-bold">Serah Terima</h5>
                    <p class="small text-muted">Inspeksi akhir, komisioning, dan serah terima kunci.</p>
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
                    <h2 class="fw-bold mb-3">Lingkup Layanan</h2>
                    <p class="text-secondary">
                        Kami menyediakan solusi menyeluruh (<i>end-to-end</i>) untuk konstruksi industri. Silakan tinjau kapabilitas spesifik kami di bawah ini.
                    </p>
                    <a href="/contact" class="btn btn-outline-primary mt-3">Ajukan Penawaran</a>
                </div>
                
                <div class="col-lg-7">
                    <div class="accordion shadow-sm" id="serviceAccordion">
                        
                        {{-- Item 1 --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">
                                    Manajemen Proyek & Supervisi
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#serviceAccordion">
                                <div class="accordion-body text-muted">
                                    Bertindak sebagai koordinator utama proyek, kami mengelola sub-kontraktor, logistik material, dan pelaporan progres berkala untuk menjamin keselarasan dengan jadwal induk (<i>Master Schedule</i>).
                                </div>
                            </div>
                        </div>

                        {{-- Item 2 --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    Rekayasa Sipil & Struktural
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#serviceAccordion">
                                <div class="accordion-body text-muted">
                                    Mencakup pekerjaan pondasi hingga ereksi baja. Kami menjamin mutu pengecoran beton dan presisi struktur baja yang mematuhi Standar Nasional Indonesia (SNI).
                                </div>
                            </div>
                        </div>

                        {{-- Item 3 --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                    Revitalisasi & Ekspansi Fasilitas
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#serviceAccordion">
                                <div class="accordion-body text-muted">
                                    Membutuhkan perluasan area gudang? Kami memiliki spesialisasi dalam proyek ekspansi yang meminimalisir disrupsi terhadap operasional bisnis Anda yang sedang berjalan.
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
            <h2 class="fw-bold">Mencari Mitra Konstruksi Terpercaya?</h2>
            <p class="mb-4">Diskusikan spesifikasi proyek Anda bersama tim ahli kami.</p>
            <a href="https://wa.me/628122002718" class="btn btn-light fw-bold px-5">Hubungi Kami</a>
        </div>
    </section>

@endsection