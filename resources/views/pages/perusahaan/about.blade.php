@extends('layouts.app')

@section('meta_title', __('general.seo.about_title'))
@section('meta_description', __('general.seo.about_desc'))

@section('content')

    {{-- ======================
    1. HERO SECTION
    ====================== --}}
    <section class="hero-section">
        <img src="{{ asset('/images/hero/worker-meeting.jpg') }}" class="hero-bg" alt="{{ __('about.hero_title') }}">
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

    {{-- SEPARATOR LINE --}}
    <div class="container"><hr class="m-0" style="opacity: .05;"></div>

    {{-- ======================
    3. VISI & MISI
    ====================== --}}
    <section class="py-5 bg-light" style="box-shadow: inset 0 10px 15px -15px rgba(0,0,0,0.1), inset 0 -10px 15px -15px rgba(0,0,0,0.1);">
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
    <section class="py-5 bg-white border-top" style="border-color: rgba(0,0,0,0.05) !important;">
        <div class="container py-lg-5 text-center">
            <h2 class="font-weight-bold mb-2">
                {!! __('messages.values.title') !!}
            </h2>
            <p class="text-muted mb-5">
                {{ __('messages.values.desc') }}
            </p>

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="p-3">
                        <i class="bi bi-hand-thumbs-up text-primary display-4 mb-3 d-block"></i>
                        <h5 class="font-weight-bold">{{ __('messages.values.integrity_title') }}</h5>
                        <p class="small text-muted">{{ __('messages.values.integrity_desc') }}</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="p-3">
                        <i class="bi bi-gear-wide-connected text-primary display-4 mb-3 d-block"></i>
                        <h5 class="font-weight-bold">{{ __('messages.values.collaboration_title') }}</h5>
                        <p class="small text-muted">{{ __('messages.values.collaboration_desc') }}</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="p-3">
                        <i class="bi bi-lightbulb text-primary display-4 mb-3 d-block"></i>
                        <h5 class="font-weight-bold">{{ __('messages.values.innovation_title') }}</h5>
                        <p class="small text-muted">{{ __('messages.values.innovation_desc') }}</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="p-3">
                        <i class="fas fa-balance-scale text-primary display-4 mb-3 d-block"></i>
                        <h5 class="font-weight-bold">{{ __('messages.values.harmony_title') }}</h5>
                        <p class="small text-muted">{{ __('messages.values.harmony_desc') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ======================
    5. SIAPA PELANGGAN KAMI & BAGAIMANA KAMI BEKERJA
    ====================== --}}
    <section class="py-5 bg-light border-top border-bottom" style="border-color: rgba(0,0,0,0.05) !important;">
        <div class="container py-lg-5">
            <div class="row">
                {{-- Who We Serve --}}
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="pr-lg-4">
                        <h5 class="text-primary font-weight-bold text-uppercase mb-3">Siapa Pelanggan Kami</h5>
                        <h2 class="font-weight-bold mb-4">Mitra Pertumbuhan Industri Nasional</h2>
                        <p class="text-muted text-justify">
                            Fokus kami adalah menjadi rumah bagi entitas bisnis di sektor industri strategis tanah air, mulai dari manufaktur otomotif, pusat logistik, hingga penyedia energi.
                        </p>
                        <p class="text-muted text-justify">
                            Lebih dari sekadar penyedia lahan, kami bermitra dengan para pelaku industri nasional yang berkomitmen membangun rantai pasok yang tangguh.
                        </p>
                    </div>
                </div>

                {{-- How We Work --}}
                <div class="col-lg-6">
                    <div class="pl-lg-4 border-left" style="border-width: 2px !important; border-color: #eee !important;">
                        <h5 class="text-primary font-weight-bold text-uppercase mb-3">Bagaimana Kami Bekerja</h5>
                        <h2 class="font-weight-bold mb-4">Dedikasi pada Standar & Ketepatan</h2>
                        <p class="text-muted text-justify">
                            Operasional kami berpijak pada sinergi antara infrastruktur modern dan manajemen kawasan yang proaktif. Kami memastikan setiap kebutuhan spesifik tenant dijawab dengan solusi teknis yang handal.
                        </p>
                        <p class="text-muted text-justify">
                            Keberlanjutan adalah prinsip kerja kami; melalui pengelolaan lingkungan yang disiplin dan penyediaan utilitas tanpa henti.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ======================
    7. NILAI YANG KAMI WUJUDKAN (VALUE DELIVERED)
    ====================== --}}
    <section class="py-5 bg-white">
        <div class="container py-lg-5">
            <div class="row">
                {{-- Judul Samping --}}
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="sticky-top" style="top: 100px; z-index: 1;">
                        <h5 class="text-primary font-weight-bold text-uppercase mb-3">Value Delivered</h5>
                        <h2 class="font-weight-bold mb-4" style="letter-spacing: -1px;">Hasil Nyata dalam Setiap Proyek</h2>
                        <p class="text-muted">
                            Di KPCM, kualitas bukan sekadar janji, melainkan standar yang kami wujudkan melalui eksekusi teknis yang presisi.
                        </p>
                        <hr class="w-25 ml-0 border-primary" style="border-width: 3px; opacity: 1;">
                    </div>
                </div>

                {{-- Daftar Nilai - Grid 2 Kolom --}}
                <div class="col-lg-8">
                    <div class="row">
                        @php
                            $values = [
                                ['01', 'Ketepatan Waktu Penyelesaian', 'Manajemen jadwal yang ketat guna memastikan operasional mitra dimulai sesuai target.'],
                                ['02', 'Efisiensi Biaya (Cost Leadership)', 'Optimalisasi anggaran tanpa mengompromikan kualitas spesifikasi teknis.'],
                                ['03', 'Zero Major Accident', 'Implementasi K3 (HSE) tingkat tinggi demi keselamatan lingkungan kerja.'],
                                ['04', 'Minimalisasi Rework', 'Presisi dalam setiap tahap konstruksi untuk menghindari pengerjaan ulang.'],
                                ['05', 'Transparansi Progress', 'Pelaporan data lapangan yang akurat dan dapat dipertanggungjawabkan.'],
                                ['06', 'Durabilitas Tinggi', 'Penggunaan material terpilih untuk memastikan infrastruktur tahan lama.'],
                            ];
                        @endphp

                        @foreach($values as $val)
                        <div class="col-md-6 mb-4">
                            <div class="d-flex align-items-start p-3 border rounded shadow-sm bg-white h-100" style="border-color: rgba(0,0,0,0.08) !important;">
                                <span class="h3 font-weight-bold text-light mr-3" style="color: #e9ecef !important;">{{ $val[0] }}</span>
                                <div>
                                    <h6 class="font-weight-bold mb-1">{{ $val[1] }}</h6>
                                    <p class="small text-muted mb-0">{{ $val[2] }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        {{-- 7. Kemitraan Strategis --}}
                        <div class="col-12 mt-2">
                            <div class="d-flex align-items-start p-4 bg-primary text-white rounded shadow">
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