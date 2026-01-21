@extends('layouts.app')

@section('title', 'Mekanikal & Pemipaan | KPCM Industrial Estate')

@section('content')

    {{-- ======================
       1. HERO SECTION
    ====================== --}}
    {{-- Custom Class: service-hero --}}
    <section class="bg-dark text-white position-relative d-flex align-items-center service-hero">
        
        {{-- Custom Class: hero-overlay-gradient --}}
        <div class="position-absolute w-100 h-100 top-0 start-0 hero-overlay-gradient"></div>
        
        <div class="container position-relative z-1 text-center">
            <span class="badge bg-primary mb-3 px-3 py-2 rounded-pill text-uppercase ls-1">Layanan Industri</span>
            <h1 class="display-4 fw-bold mb-4">Mekanikal & Pemipaan</h1>
            
            {{-- Custom Class: hero-text-limit --}}
            <p class="lead text-white-50 mx-auto hero-text-limit">
                Menjamin kelancaran lini produksi Anda melalui instalasi mekanikal yang presisi serta jaringan pemipaan yang handal dan terintegrasi.
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
                            {{-- Icon: Cogs (Melambangkan Mekanikal/Presisi) --}}
                            <i class="fas fa-cogs fa-3x"></i>
                        </div>
                        <h4 class="fw-bold">Instalasi Presisi</h4>
                        <p class="text-muted">
                            Keselarasan (<i>alignment</i>) mesin dan pipa adalah hal krusial. Kami memastikan setiap komponen terpasang akurat pada titik koordinat yang ditentukan.
                        </p>
                    </div>
                </div>
                {{-- Value 2 --}}
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm h-100 bg-white">
                        <div class="text-primary mb-3">
                            {{-- Icon: Tint/Water (Melambangkan Aliran/Pipa) --}}
                            <i class="fas fa-tint fa-3x"></i>
                        </div>
                        <h4 class="fw-bold">Jaminan Bebas Kebocoran</h4>
                        <p class="text-muted">
                            Kami memprioritaskan penyegelan rapat dan sambungan kuat untuk mencegah kebocoran, menjamin keamanan maksimal dalam distribusi fluida dan gas Anda.
                        </p>
                    </div>
                </div>
                {{-- Value 3 --}}
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm h-100 bg-white">
                        <div class="text-primary mb-3">
                            {{-- Icon: Wrench (Melambangkan Maintenance/Reliability) --}}
                            <i class="fas fa-wrench fa-3x"></i>
                        </div>
                        <h4 class="fw-bold">Keandalan Sistem</h4>
                        <p class="text-muted">
                            Menggunakan material tahan lama (<i>heavy-duty</i>) dan metode instalasi terstandarisasi untuk meminimalisir waktu henti (<i>downtime</i>) dan biaya perawatan.
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
                <h5 class="text-primary text-uppercase fw-bold">Alur Kerja Instalasi</h5>
                <h2 class="fw-bold">Metode Eksekusi</h2>
            </div>

            <div class="row align-items-center">
                {{-- Step 1 --}}
                <div class="col-md-3 text-center position-relative mb-4 mb-md-0">
                    {{-- Custom Class: process-circle-box --}}
                    <div class="bg-white rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-primary mb-0">01</span>
                    </div>
                    <h5 class="fw-bold">Pemetaan Sistem</h5>
                    <p class="small text-muted">Pemeriksaan tata letak untuk rute jalur pemipaan dan penempatan mesin.</p>
                </div>

                {{-- Step 2 --}}
                <div class="col-md-3 text-center position-relative mb-4 mb-md-0">
                    <div class="bg-white rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-primary mb-0">02</span>
                    </div>
                    <h5 class="fw-bold">Fabrikasi</h5>
                    <p class="small text-muted">Pemotongan, penyetelan (<i>fitting</i>), dan persiapan material untuk perakitan.</p>
                </div>

                {{-- Step 3 --}}
                <div class="col-md-3 text-center position-relative mb-4 mb-md-0">
                    <div class="bg-white rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-primary mb-0">03</span>
                    </div>
                    <h5 class="fw-bold">Instalasi</h5>
                    <p class="small text-muted">Pengelasan, penyambungan, dan pengamanan (<i>anchoring</i>) mesin di lokasi.</p>
                </div>

                {{-- Step 4 --}}
                <div class="col-md-3 text-center position-relative mb-4 mb-md-0">
                    <div class="bg-primary rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-white mb-0">04</span>
                    </div>
                    <h5 class="fw-bold">Uji Tekanan</h5>
                    <p class="small text-muted">Pengujian aliran (<i>pressure test</i>) untuk memastikan tidak ada kebocoran sebelum serah terima.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ======================
       4. DETAILED SERVICES (Universal)
    ====================== --}}
    <section class="py-5">
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-5 mb-4">
                    <h2 class="fw-bold mb-3">Lingkup Keahlian</h2>
                    <p class="text-secondary">
                        Dari koneksi utilitas hingga pengaturan unit produksi, kami menangani tulang punggung mekanikal yang esensial bagi operasional pabrik Anda.
                    </p>
                    <a href="https://wa.me/628122002718" class="btn btn-outline-primary mt-3">Konsultasi via WhatsApp</a>
                </div>
                
                <div class="col-lg-7">
                    <div class="accordion shadow-sm" id="serviceAccordion">
                        
                        {{-- Item 1 --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">
                                    Pemipaan Industri (Industrial Piping)
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#serviceAccordion">
                                <div class="accordion-body text-muted">
                                    Instalasi berbagai sistem pemipaan untuk air, udara bertekanan, gas, atau fluida industri. Kami memastikan penyangga (<i>support</i>) dan rute yang tepat agar area kerja tetap aman dan terorganisir.
                                </div>
                            </div>
                        </div>

                        {{-- Item 2 --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    Instalasi Mekanikal
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#serviceAccordion">
                                <div class="accordion-body text-muted">
                                    Kami membantu dalam ereksi dan pengaturan (<i>setting</i>) mesin industri, pompa, konveyor, dan peralatan produksi, memastikan semuanya rata (<i>leveling</i>) dan terpasang kokoh.
                                </div>
                            </div>
                        </div>

                        {{-- Item 3 --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                    Pemeliharaan & Perbaikan
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#serviceAccordion">
                                <div class="accordion-body text-muted">
                                    Pipa dan katup dapat mengalami keausan seiring waktu. Kami menyediakan layanan pemeliharaan untuk perbaikan kebocoran, penggantian bagian berkarat, atau peningkatan (<i>upgrade</i>) sistem mekanikal Anda.
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
            <h2 class="fw-bold">Butuh Pekerjaan Pemipaan atau Mekanikal?</h2>
            <p class="mb-4">Mari pastikan operasional pabrik Anda mengalir dengan efisien.</p>
            <a href="https://wa.me/628122002718" class="btn btn-light fw-bold px-5">Hubungi Kami</a>
        </div>
    </section>

@endsection