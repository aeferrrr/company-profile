@extends('layouts.app')

@section('title', 'Pekerjaan Dinding & APC | KPCM Industrial Estate')

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
            <h1 class="display-4 fw-bold mb-4">Dinding & APC</h1>
            
            {{-- Custom Class: hero-text-limit --}}
            <p class="lead text-white-50 mx-auto hero-text-limit">
                Memodernisasi eksterior fasilitas dan mengoptimalkan tata ruang interior Anda melalui sistem <i>cladding</i> dan partisi berkualitas tinggi.
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
                            {{-- Icon: Building (Melambangkan Tampilan Gedung) --}}
                            <i class="fas fa-building fa-3x"></i>
                        </div>
                        <h4 class="fw-bold">Estetika Modern</h4>
                        <p class="text-muted">
                            Tingkatkan citra visual pabrik atau kantor Anda. <i>Cladding</i> APC memberikan tampilan industrial yang ramping, profesional, dan bersih.
                        </p>
                    </div>
                </div>
                {{-- Value 2 --}}
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm h-100 bg-white">
                        <div class="text-primary mb-3">
                            {{-- Icon: Umbrella (Melambangkan Tahan Cuaca) --}}
                            <i class="fas fa-umbrella fa-3x"></i>
                        </div>
                        <h4 class="fw-bold">Proteksi Cuaca</h4>
                        <p class="text-muted">
                            Pelapis dinding kami berfungsi sebagai perisai terhadap hujan dan sinar UV, melindungi struktur utama bangunan dari kelembapan dan panas ekstrem.
                        </p>
                    </div>
                </div>
                {{-- Value 3 --}}
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm h-100 bg-white">
                        <div class="text-primary mb-3">
                            {{-- Icon: Columns/Th-Large (Melambangkan Partisi/Ruang) --}}
                            <i class="fas fa-columns fa-3x"></i>
                        </div>
                        <h4 class="fw-bold">Pembagian Ruang</h4>
                        <p class="text-muted">
                            Partisi interior yang efisien untuk menciptakan ruang pertemuan, kantor, atau pembatas area produksi yang kokoh namun tetap rapi.
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
                <h5 class="text-primary text-uppercase fw-bold">Alur Pemasangan</h5>
                <h2 class="fw-bold">Metode Instalasi</h2>
            </div>

            <div class="row align-items-center">
                {{-- Step 1 --}}
                <div class="col-md-3 text-center position-relative mb-4 mb-md-0">
                    <div class="bg-white rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-primary mb-0">01</span>
                    </div>
                    <h5 class="fw-bold">Desain & Pengukuran</h5>
                    <p class="small text-muted">Pengukuran area presisi dan pemilihan spesifikasi material atau warna.</p>
                </div>

                {{-- Step 2 --}}
                <div class="col-md-3 text-center position-relative mb-4 mb-md-0">
                    <div class="bg-white rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-primary mb-0">02</span>
                    </div>
                    <h5 class="fw-bold">Pemasangan Rangka</h5>
                    <p class="small text-muted">Instalasi kerangka (besi <i>hollow</i>/aluminium) sebagai struktur pendukung.</p>
                </div>

                {{-- Step 3 --}}
                <div class="col-md-3 text-center position-relative mb-4 mb-md-0">
                    <div class="bg-white rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-primary mb-0">03</span>
                    </div>
                    <h5 class="fw-bold">Aplikasi Panel</h5>
                    <p class="small text-muted">Pemasangan lembar APC atau pendirian dinding partisi pada rangka.</p>
                </div>

                {{-- Step 4 --}}
                <div class="col-md-3 text-center position-relative mb-4 mb-md-0">
                    <div class="bg-primary rounded-circle shadow mb-3 process-circle-box">
                        <span class="h3 fw-bold text-white mb-0">04</span>
                    </div>
                    <h5 class="fw-bold">Finishing</h5>
                    <p class="small text-muted">Pengaplikasian <i>sealant</i> dan pembersihan akhir untuk hasil sempurna.</p>
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
                    <h2 class="fw-bold mb-3">Lingkup Pekerjaan</h2>
                    <p class="text-secondary">
                        Baik untuk keindahan eksterior maupun fungsionalitas interior, kami menyediakan solusi dinding yang sesuai dengan anggaran dan kebutuhan teknis Anda.
                    </p>
                    <a href="https://wa.me/628122002718" class="btn btn-outline-primary mt-3">Konsultasi via WhatsApp</a>
                </div>
                
                <div class="col-lg-7">
                    <div class="accordion shadow-sm" id="serviceAccordion">
                        
                        {{-- Item 1 --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">
                                    Fasad APC (Eksterior)
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#serviceAccordion">
                                <div class="accordion-body text-muted">
                                    Kami memasang <i>Aluminium Composite Panel</i> untuk melapisi dinding lama atau penyelesaian gedung baru. Material ini ringan, tahan lama, dan tersedia dalam berbagai warna untuk menyesuaikan identitas (<i>branding</i>) perusahaan Anda.
                                </div>
                            </div>
                        </div>

                        {{-- Item 2 --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    Partisi Interior
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#serviceAccordion">
                                <div class="accordion-body text-muted">
                                    Membutuhkan ruang kantor baru atau pemisah lini produksi? Kami memasang dinding partisi gipsum atau industrial yang cepat dibangun dan mudah untuk pengecatan ulang.
                                </div>
                            </div>
                        </div>

                        {{-- Item 3 --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                    Perbaikan & Perawatan Dinding
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#serviceAccordion">
                                <div class="accordion-body text-muted">
                                    Kami juga menangani perbaikan dinding rusak, pengelupasan cat, atau penggantian lembar APC lama yang mengalami kerusakan akibat benturan maupun faktor cuaca.
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
            <h2 class="fw-bold">Tingkatkan Estetika Bangunan Anda?</h2>
            <p class="mb-4">Mari diskusikan pilihan material dan warna untuk proyek Anda.</p>
            <a href="https://wa.me/628122002718" class="btn btn-light fw-bold px-5">Hubungi Kami</a>
        </div>
    </section>

@endsection