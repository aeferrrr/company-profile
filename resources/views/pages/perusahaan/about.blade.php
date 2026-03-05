@extends('layouts.app')

@section('meta_title', __('general.seo.about_title'))
@section('meta_description', __('general.seo.about_desc'))

@section('content')

    {{-- ======================
    1. HERO SECTION
    ====================== --}}
    <section class="hero-section">
        <img src="{{ asset('/images/hero/hero-siluate.jpg') }}" class="hero-bg" alt="{{ __('about.hero_title') }}">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">{{ __('about.hero_title') }}</h1>
                <p class="hero-subtitle">{{ __('about.hero_subtitle') }}</p>
            </div>
        </div>
    </section>

    {{-- ======================
    2. SIAPA KAMI (CORPORATE OVERVIEW)
    ====================== --}}
    <section class="py-5 bg-white">
        <div class="container py-lg-5">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <h5 class="text-primary font-weight-bold text-uppercase mb-3">{{ __('about.who_we_are') }}</h5>
                    <h2 class="font-weight-bold mb-4" style="line-height: 1.2;">
                        {{ __('about.strategic_partner') }} <br>
                        <span class="text-secondary">{{ __('about.industrial_excellence') }}</span>
                    </h2>
                    <div class="bg-primary" style="width: 60px; height: 4px;"></div>
                </div>
                <div class="col-lg-7">
                    <p class="text-muted text-justify mb-3">{!! __('about.desc_p1') !!}</p>
                    <p class="text-muted text-justify mb-0">{{ __('about.desc_p2') }}</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ======================
    3. VISI & MISI
    ====================== --}}
    <section class="py-5 bg-light">
        <div class="container py-lg-5">
            <div class="row">
                {{-- Vision --}}
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="card h-100 border-0 shadow-sm hover-lift">
                        <div class="card-body p-4 p-lg-5">
                            <div class="icon-box mb-4 text-primary">
                                <i class="bi bi-eye display-4"></i>
                            </div>
                            <h3 class="font-weight-bold mb-3">{{ __('about.vision_title') }}</h3>
                            <p class="text-muted text-justify mb-0">{{ __('about.vision_text') }}</p>
                        </div>
                    </div>
                </div>
                {{-- Mission --}}
                <div class="col-md-6">
                    <div class="card h-100 border-0 shadow-sm hover-lift">
                        <div class="card-body p-4 p-lg-5">
                            <div class="icon-box mb-4 text-primary">
                                <i class="bi bi-flag display-4"></i>
                            </div>
                            <h3 class="font-weight-bold mb-3">{{ __('about.mission_title') }}</h3>
                            <p class="text-muted text-justify mb-0">{{ __('about.mission_text') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ======================
    4. NILAI INTI (CORE VALUES)
    ====================== --}}
    <section class="py-5 bg-white border-bottom">
        <div class="container py-lg-5 text-center">
            <h5 class="text-primary font-weight-bold text-uppercase mb-2">{{ __('about.foundation') }}</h5>
            <h2 class="font-weight-bold mb-5">{{ __('about.corp_values') }}</h2>
            <div class="row justify-content-center">
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="p-3">
                        <i class="bi bi-shield-check text-primary display-4 mb-3 d-block"></i>
                        <h5 class="font-weight-bold">{{ __('about.val_integrity') }}</h5>
                        <p class="small text-muted">{{ __('about.val_integrity_desc') }}</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="p-3">
                        <i class="bi bi-lightbulb text-primary display-4 mb-3 d-block"></i>
                        <h5 class="font-weight-bold">{{ __('about.val_innovation') }}</h5>
                        <p class="small text-muted">{{ __('about.val_innovation_desc') }}</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="p-3">
                        <i class="bi bi-people text-primary display-4 mb-3 d-block"></i>
                        <h5 class="font-weight-bold">{{ __('about.val_collaboration') }}</h5>
                        <p class="small text-muted">{{ __('about.val_collaboration_desc') }}</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="p-3">
                        <i class="bi bi-gear-wide-connected text-primary display-4 mb-3 d-block"></i>
                        <h5 class="font-weight-bold">{{ __('about.val_excellence') }}</h5>
                        <p class="small text-muted">{{ __('about.val_excellence_desc') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

{{-- ======================
    5. SIAPA PELANGGAN KAMI & BAGAIMANA KAMI BEKERJA
    ====================== --}}
    <section class="py-5 bg-light">
        <div class="container py-lg-5">
            <div class="row">
                {{-- Who We Serve --}}
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="pr-lg-4">
                        <h5 class="text-primary font-weight-bold text-uppercase mb-3">Siapa Pelanggan Kami</h5>
                        <h2 class="font-weight-bold mb-4">Mitra Pertumbuhan Industri Nasional</h2>
                        
                        <p class="text-muted text-justify">
                            Fokus kami adalah menjadi rumah bagi entitas bisnis di sektor industri strategis tanah air, mulai dari manufaktur otomotif, pusat logistik, hingga penyedia energi. Kami melayani perusahaan yang memprioritaskan ketepatan lokasi dan integritas fasilitas sebagai kunci sukses operasional mereka.
                        </p>
                        
                        <p class="text-muted text-justify">
                            Lebih dari sekadar penyedia lahan, kami bermitra dengan para pelaku industri nasional yang berkomitmen membangun rantai pasok yang tangguh, efisien, dan memiliki daya saing tinggi di pasar domestik.
                        </p>
                    </div>
                </div>

                {{-- How We Work --}}
                <div class="col-lg-6">
                    <div class="pl-lg-4 border-left">
                        <h5 class="text-primary font-weight-bold text-uppercase mb-3">Bagaimana Kami Bekerja</h5>
                        <h2 class="font-weight-bold mb-4">Dedikasi pada Standar & Ketepatan</h2>
                        
                        <p class="text-muted text-justify">
                            Operasional kami berpijak pada sinergi antara infrastruktur modern dan manajemen kawasan yang proaktif. Kami memastikan setiap kebutuhan spesifik tenant dijawab dengan solusi teknis yang handal dan proses perizinan yang transparan.
                        </p>
                        
                        <p class="text-muted text-justify">
                            Keberlanjutan adalah prinsip kerja kami; melalui pengelolaan lingkungan yang disiplin dan penyediaan utilitas tanpa henti, kami menciptakan ekosistem kerja yang aman dan produktif bagi seluruh mitra bisnis di dalam kawasan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ======================
    7. NILAI YANG KAMI WUJUDKAN (VALUE DELIVERED)
    Layout: Professional Technical List
    ====================== --}}
    <section class="py-5 bg-white border-top">
        <div class="container py-lg-5">
            <div class="row">
                {{-- Judul Samping --}}
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="sticky-top" style="top: 100px;">
                        <h5 class="text-primary font-weight-bold text-uppercase mb-3">Value Delivered</h5>
                        <h2 class="font-weight-bold mb-4" style="letter-spacing: -1px;">Hasil Nyata dalam Setiap Proyek</h2>
                        <p class="text-muted">
                            Di KPCM, kualitas bukan sekadar janji, melainkan standar yang kami wujudkan melalui eksekusi teknis yang presisi. Berikut adalah nilai nyata yang dirasakan langsung oleh mitra kami di lapangan.
                        </p>
                        <hr class="w-25 ml-0 border-primary" style="border-width: 3px;">
                    </div>
                </div>

                {{-- Daftar Nilai - Grid 2 Kolom --}}
                <div class="col-lg-8">
                    <div class="row">
                        {{-- 1. Ketepatan Waktu --}}
                        <div class="col-md-6 mb-4">
                            <div class="d-flex align-items-start p-3 border rounded shadow-sm">
                                <span class="h3 font-weight-bold text-light mr-3">01</span>
                                <div>
                                    <h6 class="font-weight-bold mb-1">Ketepatan Waktu Penyelesaian</h6>
                                    <p class="small text-muted mb-0">Manajemen jadwal yang ketat guna memastikan operasional mitra dimulai sesuai target.</p>
                                </div>
                            </div>
                        </div>

                        {{-- 2. Efisiensi Biaya --}}
                        <div class="col-md-6 mb-4">
                            <div class="d-flex align-items-start p-3 border rounded shadow-sm">
                                <span class="h3 font-weight-bold text-light mr-3">02</span>
                                <div>
                                    <h6 class="font-weight-bold mb-1">Efisiensi Biaya (Cost Leadership)</h6>
                                    <p class="small text-muted mb-0">Optimalisasi anggaran tanpa mengompromikan kualitas spesifikasi teknis.</p>
                                </div>
                            </div>
                        </div>

                        {{-- 3. Zero Major Accident --}}
                        <div class="col-md-6 mb-4">
                            <div class="d-flex align-items-start p-3 border rounded shadow-sm">
                                <span class="h3 font-weight-bold text-light mr-3">03</span>
                                <div>
                                    <h6 class="font-weight-bold mb-1">Zero Major Accident</h6>
                                    <p class="small text-muted mb-0">Implementasi K3 (HSE) tingkat tinggi demi keselamatan lingkungan kerja.</p>
                                </div>
                            </div>
                        </div>

                        {{-- 4. Minim Rework --}}
                        <div class="col-md-6 mb-4">
                            <div class="d-flex align-items-start p-3 border rounded shadow-sm">
                                <span class="h3 font-weight-bold text-light mr-3">04</span>
                                <div>
                                    <h6 class="font-weight-bold mb-1">Minimalisasi Rework</h6>
                                    <p class="small text-muted mb-0">Presisi dalam setiap tahap konstruksi untuk menghindari pengerjaan ulang yang tidak efisien.</p>
                                </div>
                            </div>
                        </div>

                        {{-- 5. Transparansi Progress --}}
                        <div class="col-md-6 mb-4">
                            <div class="d-flex align-items-start p-3 border rounded shadow-sm">
                                <span class="h3 font-weight-bold text-light mr-3">05</span>
                                <div>
                                    <h6 class="font-weight-bold mb-1">Transparansi Progress</h6>
                                    <p class="small text-muted mb-0">Pelaporan data lapangan yang akurat dan dapat dipertanggungjawabkan secara real-time.</p>
                                </div>
                            </div>
                        </div>

                        {{-- 6. Kualitas Tahan Lama --}}
                        <div class="col-md-6 mb-4">
                            <div class="d-flex align-items-start p-3 border rounded shadow-sm">
                                <span class="h3 font-weight-bold text-light mr-3">06</span>
                                <div>
                                    <h6 class="font-weight-bold mb-1">Durabilitas Tinggi</h6>
                                    <p class="small text-muted mb-0">Penggunaan material terpilih untuk memastikan infrastruktur tahan lama dan minim perawatan.</p>
                                </div>
                            </div>
                        </div>

                        {{-- 7. Kemitraan Strategis --}}
                        <div class="col-12">
                            <div class="d-flex align-items-start p-4 bg-primary text-white rounded">
                                <span class="h3 font-weight-bold opacity-50 mr-3"></span>
                                <div>
                                    <h6 class="font-weight-bold mb-1 text-white">Integritas Kemitraan Nasional</h6>
                                    <p class="small mb-0 opacity-80">Membangun kepercayaan melalui komitmen penuh terhadap standarisasi industri nasional.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection