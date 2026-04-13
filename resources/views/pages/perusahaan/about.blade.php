@extends('layouts.app')

@section('meta_title', __('general.seo.about_title'))
@section('meta_description', __('general.seo.about_desc'))

@push('styles')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@section('content')

    {{-- HERO SECTION --}}
    <section class="hero-section">
        <img src="{{ asset('images/hero/worker-meeting.webp') }}"
             class="hero-bg"
             alt="{{ __('about.hero_title') }}">

        <div class="hero-overlay"></div>

        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">{{ __('about.hero_title') }}</h1>
                <p class="hero-subtitle">{{ __('about.hero_subtitle') }}</p>
            </div>
        </div>
    </section>


    {{-- WHO WE ARE --}}
    <section class="section-padding">
        <div class="container">
            <div class="intro-grid">

                <div class="img-box reveal">
                    <img src="{{ asset('images/about/office.webp') }}"
                         alt="Kantor KPCM">
                </div>

                <div class="reveal">
                    <div class="section-label">
                        <span class="label-line"></span>
                        WHO WE ARE
                    </div>

                    <h2>Strategic Partner for Industrial Excellence</h2>

                    <p>
                        <strong>PT. KPCM Industrial Estate</strong>, didirikan pada 2011,
                        adalah pionir pengembang kawasan industri terpadu yang mendorong
                        kemajuan ekonomi nasional melalui infrastruktur kelas dunia.
                    </p>

                    <p>
                        Kami memberdayakan perusahaan untuk menghadapi tantangan global abad ke-21
                        melalui inovasi manajemen dan ekosistem bisnis yang dinamis.
                    </p>
                </div>

            </div>
        </div>
    </section>


    {{-- VISION & MISSION --}}
    <section class="section-padding bg-light">
        <div class="container">
            <div class="grid-2">

                <div class="card-mini reveal">
                    <i class="bi bi-eye"></i>
                    <h3>Visi</h3>
                    <p>
                        Menjadi pengembang terkemuka solusi industri berkelanjutan dan inovatif
                        untuk nilai jangka panjang bagi klien, mitra, dan sektor industri.
                    </p>
                </div>

                <div class="card-mini reveal">
                    <i class="bi bi-flag"></i>
                    <h3>Misi</h3>
                    <p>
                        Menyediakan solusi strategis kompetitif untuk optimasi efisiensi
                        operasional dan ROI melalui integritas dan inovasi.
                    </p>
                </div>

            </div>
        </div>
    </section>


    {{-- CORE VALUES --}}
    <section class="section-padding">
        <div class="container">

            <div class="section-heading reveal">
                <div class="section-label center">
                    <span class="label-line"></span>
                    OUR FOUNDATION
                </div>
                <h2>Core Values</h2>
            </div>

            <div class="grid-4">

                <div class="card-mini reveal">
                    <i class="bi bi-shield-check"></i>
                    <h3>Integrity</h3>
                    <p>We uphold honesty and transparency in every aspect of business.</p>
                </div>

                <div class="card-mini reveal">
                    <i class="bi bi-people-fill"></i>
                    <h3>Collaboration</h3>
                    <p>Building strong synergy between internal teams and stakeholders.</p>
                </div>

                <div class="card-mini reveal">
                    <i class="bi bi-lightbulb-fill"></i>
                    <h3>Innovation</h3>
                    <p>Continuous modernization for efficient industrial solutions.</p>
                </div>

                <div class="card-mini reveal">
                    <i class="bi bi-heart-fill"></i>
                    <h3>Harmony</h3>
                    <p>Creating a balanced environment for seamless project delivery.</p>
                </div>

            </div>
        </div>
    </section>


    {{-- WHO WE SERVE --}}
    <section class="section-padding bg-light">
        <div class="container">
            <div class="work-grid">

                <div class="work-box reveal">
                    <div class="section-label">
                        <span class="label-line"></span>
                        WHO WE SERVE
                    </div>

                    <h3>Mitra Industri Nasional</h3>

                    <p>
                        Rumah bagi sektor manufaktur otomotif, pusat logistik,
                        dan penyedia energi yang berkomitmen membangun rantai pasok tangguh.
                    </p>
                </div>

                <div class="work-box reveal">
                    <div class="section-label">
                        <span class="label-line"></span>
                        HOW WE WORK
                    </div>

                    <h3>Standar & Ketepatan</h3>

                    <p>
                        Sinergi infrastruktur modern dengan manajemen proaktif
                        guna memastikan solusi teknis yang handal dan berkelanjutan.
                    </p>
                </div>

            </div>
        </div>
    </section>


    {{-- VALUE DELIVERED --}}
    <section class="section-padding">
        <div class="container">

            <div class="section-heading reveal">
                <div class="section-label center">
                    <span class="label-line"></span>
                    VALUE DELIVERED
                </div>
                <h2>Hasil Nyata Proyek</h2>
            </div>

            <div class="vd-grid">

                <div class="vd-item reveal"><strong>01.</strong> Ketepatan Waktu</div>
                <div class="vd-item reveal"><strong>02.</strong> Efisiensi Biaya</div>
                <div class="vd-item reveal"><strong>03.</strong> Keamanan (HSE)</div>
                <div class="vd-item reveal"><strong>04.</strong> Presisi Konstruksi</div>
                <div class="vd-item reveal"><strong>05.</strong> Transparansi</div>
                <div class="vd-item reveal"><strong>06.</strong> Durabilitas</div>

            </div>

            <div class="highlight-box reveal">
                <i class="bi bi-patch-check-fill"></i>
                <strong>Integritas Kemitraan Nasional:</strong>
                Membangun kepercayaan melalui standarisasi industri.
            </div>

        </div>
    </section>

@endsection


@push('scripts')
<script src="{{ asset('js/about.js') }}"></script>
@endpush