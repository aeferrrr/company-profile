@extends('layouts.app')

@section('title', 'Layanan | KPCM Industrial Estate')

@section('content')

    {{-- ======================
       SERVICES HERO (FULL WIDTH)
    ====================== --}}
    <section class="hero-section hero-services">

        {{-- Background Image --}}
        <img src="{{ asset('images/services.jpg') }}" class="hero-bg" alt="Layanan Kami KPCM Industrial Estate">

        {{-- Overlay --}}
        <div class="hero-overlay"></div>

        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Layanan Kami</h1>
                <p class="hero-subtitle">
                    Layanan konstruksi industri komprehensif yang diberikan dengan profesionalisme, 
                    keahlian teknis, dan komitmen terhadap keselamatan kerja.
                </p>
            </div>
        </div>
    </section>

    {{-- ======================
       SERVICES GRID
    ====================== --}}
    <section id="services" class="section-padding bg-light">
        <div class="container">

            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-heading">Kapabilitas Kami</h2>
                    <div class="heading-line mx-auto"></div>
                    <p class="text-muted mt-3">
                        Kami menyediakan layanan konstruksi industri ujung-ke-ujung (end-to-end) dengan komitmen kuat terhadap kualitas, ketepatan waktu, dan keselamatan.
                    </p>
                </div>
            </div>

            <div class="row g-4">

                {{-- 1. Construction & Management --}}
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="icon-wrapper">
                            <i class="fas fa-project-diagram"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Construction & Management</h5>
                            <p class="card-text">
                                Pelaksanaan proyek konstruksi menyeluruh dengan perencanaan profesional, supervisi, dan pengendalian mutu.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- 2. Warehouse --}}
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="icon-wrapper">
                            <i class="fas fa-warehouse"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Warehouse</h5>
                            <p class="card-text">
                                Desain dan pembangunan fasilitas pergudangan yang fungsional dan tahan lama, disesuaikan dengan kebutuhan operasional industri.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- 3. Mechanical & Piping --}}
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="icon-wrapper">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Mechanical & Piping</h5>
                            <p class="card-text">
                                Pemasangan sistem mekanikal dan perpipaan industri untuk mendukung utilitas serta proses produksi.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- 4. Walling & APC --}}
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="icon-wrapper">
                            <i class="fas fa-border-all"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Walling & APC</h5>
                            <p class="card-text">
                                Pembangunan dinding industri dan beton pracetak arsitektural (APC) dengan presisi serta daya tahan tinggi.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- 5. Epoxy & Concrete Polishing --}}
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="icon-wrapper">
                            <i class="fas fa-fill-drip"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Epoxy & Concrete Polishing</h5>
                            <p class="card-text">
                                Lantai epoxy industri dan pemolesan beton untuk permukaan yang higienis, tahan lama, dan mudah dirawat.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- 6. Roofing --}}
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="icon-wrapper">
                            <i class="fas fa-home"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Roofing</h5>
                            <p class="card-text">
                                Sistem atap industri yang dirancang untuk ketahanan cuaca, performa termal, dan keandalan jangka panjang.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- 7. Panel Construction --}}
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="icon-wrapper">
                            <i class="fas fa-th-large"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Panel Construction</h5>
                            <p class="card-text">
                                Fabrikasi dan pemasangan panel modular untuk bangunan industri dan fasilitas pendukung.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- 8. Road Work --}}
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="icon-wrapper">
                            <i class="fas fa-road"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Road Work</h5>
                            <p class="card-text">
                                Pembangunan dan perbaikan jalan akses untuk mendukung kelancaran logistik dan lalu lintas kendaraan berat.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- 9. Landscape Work --}}
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="icon-wrapper">
                            <i class="fas fa-tree"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Landscape Work</h5>
                            <p class="card-text">
                                Pengembangan lanskap untuk meningkatkan kualitas lingkungan, estetika, dan penataan area lokasi.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- 10. Interior & Revamping --}}
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="icon-wrapper">
                            <i class="fas fa-paint-roller"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Interior & Revamping</h5>
                            <p class="card-text">
                                Konstruksi interior dan pembaruan fasilitas untuk meningkatkan fungsionalitas, tata letak, serta tampilan visual.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- 11. Temporary Office --}}
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="icon-wrapper">
                            <i class="fas fa-building"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Temporary Office</h5>
                            <p class="card-text">
                                Pengadaan dan pemasangan bangunan kantor sementara untuk kebutuhan operasional berbasis proyek.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- 12. Electrical --}}
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="icon-wrapper">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Electrical</h5>
                            <p class="card-text">
                                Pemasangan sistem kelistrikan termasuk distribusi daya, pencahayaan, dan infrastruktur listrik industri.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- 13. Speed Door --}}
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="icon-wrapper">
                            <i class="fas fa-door-open"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Speed Door</h5>
                            <p class="card-text">
                                Pemasangan pintu industri berkecepatan tinggi untuk meningkatkan efisiensi akses, keamanan, dan kontrol lingkungan.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- 14. Utilities Work (NEW) --}}
                <div class="col-md-6 col-lg-4"> 
                    <div class="service-card h-100">
                        <div class="icon-wrapper">
                            <i class="fas fa-wrench"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Utilities Work</h5>
                            <p class="card-text">
                                Instalasi dan pemeliharaan infrastruktur utilitas pendukung, termasuk sistem air bersih, sanitasi, dan jaringan teknis kawasan.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- 15. Interior Villa (NEW) --}}
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="icon-wrapper">
                            <i class="fas fa-couch"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Interior Villa</h5>
                            <p class="card-text">
                                Perancangan dan pengerjaan interior villa yang eksklusif, memadukan estetika mewah dengan kenyamanan hunian premium.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    
    {{-- ======================
        CALL TO ACTION (CTA)
    ====================== --}}
    <section class="section-padding bg-primary text-white text-center py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h2 class="display-5 fw-bold mb-3 text-white">Siap Mewujudkan Proyek Industri Anda?</h2>
                    <p class="lead mb-4 opacity-75">
                        Dapatkan solusi konstruksi yang tepat, efisien, dan berkualitas tinggi bersama tim ahli KPCM Industrial Estate. 
                        Kami siap membantu dari tahap perencanaan hingga pemeliharaan.
                    </p>
                    <div class="d-flex justify-content-center gap-3 flex-wrap">
                        <a href="{{ url('/contact') }}" class="btn btn-light btn-lg px-5 py-3 fw-bold">
                            <i class="fas fa-envelope me-2"></i>Hubungi Kami Sekarang
                        </a>
                        <a href="https://wa.me/your-number" class="btn btn-outline-light btn-lg px-5 py-3">
                            <i class="fab fa-whatsapp me-2"></i>Konsultasi Gratis
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Optional: CSS Tambahan untuk CTA (Jika belum ada di file CSS utama) --}}
    <style>
        .bg-primary {
            background-color: #003366 !important; /* Sesuaikan dengan warna brand KPCM */
        }
        .section-padding {
            padding: 80px 0;
        }
        .btn-light {
            color: #003366;
            transition: all 0.3s ease;
        }
        .btn-light:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
        .btn-outline-light:hover {
            transform: translateY(-3px);
        }
    </style>
@endsection