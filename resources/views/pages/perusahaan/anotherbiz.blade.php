@extends('layouts.app')

@section('title', 'Trading & Diversifikasi Bisnis | KPCM Industrial Estate')

@section('content')

    {{-- ======================
       HERO SECTION (Global Trade Theme)
    ====================== --}}
    <section class="hero-section hero">
        {{-- Gunakan gambar yang bernuansa pelabuhan/kontainer/peta dunia --}}
        <img src="{{ asset('images/background/7.jpg') }}" class="hero-bg" alt="Korea Indonesia Trading Bridge">
        <div class="hero-overlay"></div>

        <div class="container">
            <div class="hero-content text-center">
                <span class="badge bg-primary text-dark mb-3 px-3 py-2">KOR - IND Gateway</span>
                <h1 class="hero-title">Divisi Perdagangan & Bisnis Global</h1>
                <p class="hero-subtitle mx-auto" style="max-width: 800px;">
                    Memperluas jangkauan melampaui konstruksi. Kami menjembatani pasar Korea dan Indonesia melalui
                    perdagangan komoditas strategis, kebutuhan medis, hingga gaya hidup.
                </p>
            </div>
        </div>
    </section>

    {{-- ======================
       INTRO / STRATEGY
    ====================== --}}
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="fw-bold mb-3" style="color: #003366;">Menghubungkan Sumber Daya</h2>
                    <p class="lead text-muted">
                        KPCM tidak hanya membangun fisik, tetapi juga membangun jalur distribusi.
                    </p>
                    <p>
                        Sebagai mitra strategis, kami memfasilitasi pertukaran komoditas vital dan produk inovatif antara
                        Korea Selatan dan Indonesia. Divisi perdagangan kami menangani rantai pasok dari hulu ke hilir untuk
                        memastikan kualitas dan ketepatan pengiriman.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 rounded-3 bg-light border-start border-5 border-primary shadow-sm">
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex align-items-center mb-3">
                                <i class="fas fa-globe-asia text-primary fa-2x me-3"></i>
                                <div>
                                    <strong>Jaringan Internasional</strong>
                                    <div class="small text-muted">Akses langsung ke produsen dan pasar di Korea & Indonesia.
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="fas fa-handshake text-primary fa-2x me-3"></i>
                                <div>
                                    <strong>Multi-Sektor</strong>
                                    <div class="small text-muted">Diversifikasi dari energi hingga produk konsumen.</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ======================
       BUSINESS UNITS GRID
    ====================== --}}
    <section class="section-padding bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-heading">Sektor Bisnis Kami</h2>
                <div class="heading-line mx-auto"></div>
            </div>

            <div class="row g-4">

                {{-- 1. COSMETICS (Highlight Cayclly) --}}
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-top">
                        <div class="card-body p-4 text-center">
                            <div class="icon-circle bg-pink-soft text-pink mb-4 mx-auto">
                                <i class="fas fa-pump-soap"></i> {{-- atau fa-air-freshener --}}
                            </div>
                            <h4 class="card-title fw-bold">Cosmetics & Beauty</h4>
                            <p class="card-text text-muted">
                                Distributor resmi produk kecantikan premium Korea. Menghadirkan inovasi perawatan kulit dan
                                kosmetik berkualitas tinggi ke pasar Indonesia.
                            </p>
                            <hr>
                            <p class="fw-bold mb-2">Featured Brand:</p>
                            <a href="https://cayclly.com" target="_blank"
                                class="btn btn-outline-danger btn-sm rounded-pill px-4">
                                Kunjungi Cayclly.com <i class="fas fa-external-link-alt ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- 2. COAL TRADING --}}
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-top">
                        <div class="card-body p-4 text-center">
                            <div class="icon-circle bg-dark-soft text-dark mb-4 mx-auto">
                                <i class="fas fa-fire"></i>
                            </div>
                            <h4 class="card-title fw-bold">Coal Trading</h4>
                            <p class="card-text text-muted">
                                Suplai batubara termal berkualitas tinggi untuk pembangkit listrik dan kebutuhan industri. Menjamin kontinuitas energi bagi mitra strategis kami.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- 3. PALM OIL --}}
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-top">
                        <div class="card-body p-4 text-center">
                            <div class="icon-circle bg-warning-soft text-warning mb-4 mx-auto">
                                <i class="fas fa-tint"></i>
                            </div>
                            <h4 class="card-title fw-bold">Palm Oil (CPO)</h4>
                            <p class="card-text text-muted">
                                Ekspor dan distribusi produk kelapa sawit (Crude Palm Oil) dan turunannya untuk kebutuhan
                                industri pangan dan oleokimia global.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- 4. ALUMINUM --}}
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-top">
                        <div class="card-body p-4 text-center">
                            <div class="icon-circle bg-secondary-soft text-secondary mb-4 mx-auto">
                                <i class="fas fa-layer-group"></i>
                            </div>
                            <h4 class="card-title fw-bold">Aluminum & Metals</h4>
                            <p class="card-text text-muted">
                                Suplai material aluminium industri, ingot, dan produk ekstrusi untuk kebutuhan konstruksi
                                dan manufaktur otomotif.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- 5. PHARMACEUTICALS (Drugs) --}}
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-top">
                        <div class="card-body p-4 text-center">
                            <div class="icon-circle bg-info-soft text-info mb-4 mx-auto">
                                <i class="fas fa-pills"></i>
                            </div>
                            <h4 class="card-title fw-bold">Pharmaceuticals</h4>
                            <p class="card-text text-muted">
                                Impor dan distribusi bahan baku obat-obatan dan perbekalan kesehatan farmasi dengan standar
                                regulasi yang ketat.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- 6. MILITARY SUPPLIES --}}
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-top">
                        <div class="card-body p-4 text-center">
                            <div class="icon-circle bg-success-soft text-success mb-4 mx-auto">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h4 class="card-title fw-bold">Defense Supplies</h4>
                            <p class="card-text text-muted">
                                Pengadaan strategis perlengkapan taktis, seragam, dan peralatan pendukung pertahanan untuk
                                kebutuhan instansi resmi.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ======================
       CTA SECTION
    ====================== --}}
    <section class="py-5 text-white" style="background-color: #1a252f;">
        <div class="container text-center">
            <h2 class="mb-3">Tertarik Bermitra dengan Kami?</h2>
            <p class="lead mb-4 text-white-50">
                Hubungi divisi perdagangan kami untuk mendiskusikan peluang kerjasama ekspor-impor atau distribusi produk.
            </p>
            <a href="{{ url('/contact') }}" class="btn btn-primary btn-lg px-5">Hubungi Tim Trading</a>
        </div>
    </section>
@endsection
