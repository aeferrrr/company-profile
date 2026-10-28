@extends('layouts.app')

@section('meta_title', __('general.seo.about_title'))
@section('meta_description', __('general.seo.about_desc'))

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@section('content')

    {{-- ============ HERO ============ --}}
    <section class="hero-section hero-page">
        <img src="{{ asset('images/hero/worker-meeting.webp') }}" class="hero-bg"
            alt="{{ __('about.hero_title') }}">

        <div class="hero-overlay"></div>

        <div class="hero-text">
            <h1>{{ __('about.hero_title') }}</h1>
            <p>{{ __('about.hero_subtitle') }}</p>
        </div>
    </section>


    {{-- ============ WHO WE ARE ============ --}}
    <section class="section-padding">
        <div class="container-fluid px-4 px-lg-5">
            <div class="intro-grid">

                <div class="img-box reveal">
                    <img src="{{ asset('images/about/office.webp') }}" alt="Kantor KPCM" loading="lazy">
                </div>

                <div class="reveal">
                    <div class="section-label">
                        <span class="section-label-line"></span>
                        <span class="section-label-text">WHO WE ARE</span>
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


    {{-- ============ VISION & MISSION ============ --}}
    <section class="section-padding section-alt">
        <div class="container-fluid px-4 px-lg-5">
            <div class="grid-2">

                <div class="card-surface card-mini reveal">
                    <i class="bi bi-eye"></i>
                    <h3>Visi</h3>
                    <p>
                        Menjadi pengembang terkemuka solusi industri berkelanjutan dan inovatif
                        untuk nilai jangka panjang bagi klien, mitra, dan sektor industri.
                    </p>
                </div>

                <div class="card-surface card-mini reveal">
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


    {{-- ============ CORE VALUES ============ --}}
    <section class="section-padding">
        <div class="container-fluid px-4 px-lg-5">

            <div class="section-heading reveal">
                <div class="section-label">
                    <span class="section-label-line"></span>
                    <span class="section-label-text">OUR FOUNDATION</span>
                </div>
                <h2>Core Values</h2>
            </div>

            <div class="grid-4">

                <div class="card-surface card-mini reveal">
                    <i class="bi bi-shield-check"></i>
                    <h3>Integrity</h3>
                    <p>We uphold honesty and transparency in every aspect of business.</p>
                </div>

                <div class="card-surface card-mini reveal">
                    <i class="bi bi-people-fill"></i>
                    <h3>Collaboration</h3>
                    <p>Building strong synergy between internal teams and stakeholders.</p>
                </div>

                <div class="card-surface card-mini reveal">
                    <i class="bi bi-lightbulb-fill"></i>
                    <h3>Innovation</h3>
                    <p>Continuous modernization for efficient industrial solutions.</p>
                </div>

                <div class="card-surface card-mini reveal">
                    <i class="bi bi-heart-fill"></i>
                    <h3>Harmony</h3>
                    <p>Creating a balanced environment for seamless project delivery.</p>
                </div>

            </div>
        </div>
    </section>


    {{-- ============ WHO WE SERVE / HOW WE WORK ============ --}}
    <section class="section-padding section-alt">
        <div class="container-fluid px-4 px-lg-5">
            <div class="work-grid">

                <div class="card-surface work-box reveal">
                    <div class="section-label">
                        <span class="section-label-line"></span>
                        <span class="section-label-text">WHO WE SERVE</span>
                    </div>

                    <h3>Mitra Industri Nasional</h3>

                    <p>
                        Rumah bagi sektor manufaktur otomotif, pusat logistik,
                        dan penyedia energi yang berkomitmen membangun rantai pasok tangguh.
                    </p>
                </div>

                <div class="card-surface work-box reveal">
                    <div class="section-label">
                        <span class="section-label-line"></span>
                        <span class="section-label-text">HOW WE WORK</span>
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

@endsection


@push('scripts')
    <script src="{{ asset('js/about.js') }}"></script>
@endpush