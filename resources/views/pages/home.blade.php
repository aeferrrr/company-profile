@extends('layouts.app')

@section('content')
    <section class="hero-section">
        <video class="hero-video" autoplay muted loop playsinline>
            <source src="/videos/hero.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <div class="hero-overlay"></div>

        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-8">
                    <div class="hero-content">
                        <span class="hero-badge">EST. KPCM INDUSTRIAL ESTATE</span>

                        <h1 class="hero-title">BUILDING THE FUTURE OF <br> <span class="text-highlight">INDUSTRIAL
                                ESTATE</span></h1>

                        <p class="hero-subtitle">
                            {{ __('home.hero_title') }}
                        </p>

                        <div class="hero-buttons">
                            <a href="#services" class="btn btn-primary btn-lg custom-btn">
                                Explore Services
                            </a>

                            <a href="https://www.youtube.com/watch?v=VIDEO_ID" target="_blank"
                                class="btn btn-outline-light btn-lg custom-btn ms-3 icon-btn">
                                <i class="bi bi-play-circle-fill me-2"></i> Company Profile
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero-stats-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 stat-item">
                        <h3 class="stat-number">250+</h3>
                        <p class="stat-desc">Projects Completed</p>
                    </div>
                    <div class="col-md-4 col-sm-6 stat-item">
                        <h3 class="stat-number">15+</h3>
                        <p class="stat-desc">Years Experience</p>
                    </div>
                    <div class="col-md-4 col-sm-12 stat-item">
                        <h3 class="stat-number">100%</h3>
                        <p class="stat-desc">Safety Record</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- ======================
     VIDEO SHOWCASE (WITH PLAYLIST)
====================== --}}
    <section id="video-showcase" class="video-section section-padding">



        <div class="container">

            <div class="text-center mb-5 fade-in-up">
                <h2 class="fw-bold display-6">{{ __('home.video_heading') }}</h2>
                <p class="text-muted mt-2 fs-5">
                    {{ __('home.video_subheading') }}
                </p>
            </div>

            {{-- Layout Row Bootstrap Diubah --}}
            <div class="row justify-content-center align-items-stretch g-4">

                {{-- KOLOM KIRI: VIDEO PLAYER UTAMA --}}
                <div class="col-lg-8">
                    <div class="video-wrapper shadow-lg h-100" id="videoWrapper" style="min-height: 400px;">

                        {{-- ID companyVideo dipertahankan --}}
                        <video id="companyVideo" poster="{{ asset('images/video-poster.jpg') }}" autoplay muted loop
                            playsinline class="w-100 h-100 object-fit-cover">
                            <source src="{{ asset('videos/kpcm-construction.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>

                        <div class="play-overlay">
                            <svg class="play-icon" viewBox="0 0 24 24" width="60" height="60" fill="white">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>

                        <div class="video-controls">
                            <div class="video-caption">
                                <span class="badge bg-primary mb-1">Now Playing</span>
                                {{-- Judul dibuat dinamis dengan ID --}}
                                <h5 class="text-white m-0" id="currentVideoTitle">All Services Overview</h5>
                            </div>

                            <button id="audioToggle" class="btn-glass" aria-label="Toggle Audio">
                                <svg id="iconMuted" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2">
                                    <path d="M11 5L6 9H2v6h4l5 4V5zM23 9l-6 6M17 9l6 6" />
                                </svg>
                                <svg id="iconSound" class="d-none" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2">
                                    <path
                                        d="M11 5L6 9H2v6h4l5 4V5zM19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                {{-- KOLOM KANAN: PLAYLIST --}}
                <div class="col-lg-4">
                    <div class="playlist-container shadow-lg">
                        <div class="playlist-header">
                            <h5 class="m-0 fw-bold text-dark">More Highlights</h5>
                            <small class="text-muted">KPCM Project Gallery</small>
                        </div>

                        <div class="playlist-items">

                            {{-- Item 1 (Aktif) --}}
                            <div class="video-item active"
                                onclick="changeVideo('{{ asset('videos/kpcm-construction.mp4') }}', 'All Services Overview', this)">
                                {{-- Gunakan gambar poster yang sama untuk thumbnail --}}
                                <img src="{{ asset('images/ourproject.jpg') }}" class="item-thumb" alt="Thumbnail">
                                <div class="item-info">
                                    <h6>All Services Overview</h6>
                                    <p>Duration: 02:15</p>
                                </div>
                            </div>

                            {{-- Item 2 (Contoh Placeholder) --}}
                            <div class="video-item"
                                onclick="changeVideo('{{ asset('videos/aspaltpaver.mp4') }}', 'Site Preparation Phase', this)">
                                {{-- Ganti src dengan gambar lain jika ada --}}
                                <img src="{{ asset('images/services.jpg') }}" class="item-thumb"
                                    alt="Thumbnail">
                                <div class="item-info">
                                    <h6>Site Preparation Phase</h6>
                                    <p>Land Clearing & Grading</p>
                                </div>
                            </div>

                            {{-- Item 3 (Contoh Placeholder) --}}
                            <div class="video-item"
                                onclick="changeVideo('{{ asset('videos/construction.mp4') }}', 'Structural Steel Work', this)">
                                <img src="{{ asset('images/organization.jpg') }}" class="item-thumb"
                                    alt="Thumbnail">
                                <div class="item-info">
                                    <h6>Structural Steel Work</h6>
                                    <p>Heavy Lifting Process</p>
                                </div>
                            </div>

                            {{-- Item 4 (Contoh Placeholder) --}}
                            <div class="video-item"
                                onclick="changeVideo('{{ asset('videos/interior.mp4') }}', 'Safety Standards', this)">
                                <img src="{{ asset('images/landscape.jpg') }}" class="item-thumb"
                                    alt="Thumbnail">
                                <div class="item-info">
                                    <h6>Safety Standards</h6>
                                    <p>ISO Implementation</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script>
        function changeVideo(videoSource, title, element) {
            const video = document.getElementById('companyVideo');
            const titleElement = document.getElementById('currentVideoTitle');
            const items = document.querySelectorAll('.video-item');

            // Kalau klik video yang sama → skip (anti reload gak perlu)
            if (video.getAttribute('src') === videoSource) return;

            // Fade OUT
            video.classList.add('video-fade-out');

            setTimeout(() => {
                // Ganti video
                video.pause();
                video.setAttribute('src', videoSource);
                video.load();

                video.onloadeddata = () => {
                    video.play();

                    // Fade IN
                    video.classList.remove('video-fade-out');
                    video.classList.add('video-fade-in');

                    setTimeout(() => {
                        video.classList.remove('video-fade-in');
                    }, 400);
                };
            }, 400);

            // Ganti Judul
            titleElement.innerText = title;

            // Update playlist active
            items.forEach(item => item.classList.remove('active'));
            element.classList.add('active');
        }
    </script>



    <section id="services" class="services-highlight py-5 bg-white">
        <div class="container">

            <div class="text-center mb-5" data-aos="fade-up">
                <h6 class="text-primary fw-bold text-uppercase ls-2">Our Expertise</h6>
                <h2 class="fw-bold display-5">{{ __('general.services') }}</h2>
                <p class="text-muted mt-2 mx-auto" style="max-width: 600px;">
                    {{ __('home.services_heading') }}
                </p>
            </div>

            <div class="row g-0 shadow-lg rounded-4 overflow-hidden bg-white">
                <div class="col-lg-4 bg-white border-end position-relative">
                    <div class="service-tabs d-flex flex-column h-100 p-4">

                        <button class="service-btn active mb-3" onclick="openService(event, 'service1')">
                            <div class="d-flex align-items-center">
                                <div class="icon-box me-3">
                                    <i class="fas fa-paint-roller"></i>
                                </div>
                                <div class="text-start">
                                    <h6 class="mb-0 fw-bold">Epoxy & Polishing</h6>
                                    <small class="text-muted">Industrial grade flooring</small>
                                </div>
                            </div>
                        </button>

                        <button class="service-btn mb-3" onclick="openService(event, 'service2')">
                            <div class="d-flex align-items-center">
                                <div class="icon-box me-3">
                                    <i class="fas fa-home"></i>
                                </div>
                                <div class="text-start">
                                    <h6 class="mb-0 fw-bold">Roofing Construction</h6>
                                    <small class="text-muted">Durable roof solutions</small>
                                </div>
                            </div>
                        </button>

                        <button class="service-btn mb-3" onclick="openService(event, 'service3')">
                            <div class="d-flex align-items-center">
                                <div class="icon-box me-3">
                                    <i class="fas fa-couch"></i>
                                </div>
                                <div class="text-start">
                                    <h6 class="mb-0 fw-bold">Interior & Revamping</h6>
                                    <small class="text-muted">Modern design updates</small>
                                </div>
                            </div>
                        </button>

                        <button class="service-btn" onclick="openService(event, 'service4')">
                            <div class="d-flex align-items-center">
                                <div class="icon-box me-3">
                                    <i class="fas fa-hard-hat"></i>
                                </div>
                                <div class="text-start">
                                    <h6 class="mb-0 fw-bold">Construction & Management</h6>
                                    <small class="text-muted">End-to-end supervision</small>
                                </div>
                            </div>
                        </button>

                        <div class="mt-auto pt-4">
                            <a href="/services" class="btn btn-primary w-100 py-2 rounded-pill fw-bold">
                                {{ __('home.buttonservice') }} <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 position-relative bg-dark">

                    <div id="service1" class="service-content active">
                        <img src="images/background/1.jpg" alt="Epoxy" class="service-bg-img">
                        <div class="service-overlay p-5 d-flex flex-column justify-content-end h-100">
                            <h3 class="text-white fw-bold mb-3">Epoxy & Concrete Polishing</h3>
                            <p class="text-white-50 fs-5">
                                {{ __('home.epoxy_text') }}
                            </p>
                        </div>
                    </div>

                    <div id="service2" class="service-content">
                        <img src="images/background/2.jpg" alt="Roofing" class="service-bg-img">
                        <div class="service-overlay p-5 d-flex flex-column justify-content-end h-100">
                            <h3 class="text-white fw-bold mb-3">Roofing Construction</h3>
                            <p class="text-white-50 fs-5">
                                {{ __('home.roofing_text') }}
                            </p>
                        </div>
                    </div>

                    <div id="service3" class="service-content">
                        <img src="images/background/3.jpg" alt="Interior" class="service-bg-img">
                        <div class="service-overlay p-5 d-flex flex-column justify-content-end h-100">
                            <h3 class="text-white fw-bold mb-3">Interior & Revamping</h3>
                            <p class="text-white-50 fs-5">
                                {{ __('home.revamping_text') }}
                            </p>
                        </div>
                    </div>

                    <div id="service4" class="service-content">
                        <img src="images/background/4.jpg" alt="Management" class="service-bg-img">
                        <div class="service-overlay p-5 d-flex flex-column justify-content-end h-100">
                            <h3 class="text-white fw-bold mb-3">Construction & Management</h3>
                            <p class="text-white-50 fs-5">
                                {{ __('home.management_text') }}
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="client-section py-5 bg-white">
        <div class="container">

            <div class="text-center mb-5" data-aos="fade-up">
                <h6 class="text-primary fw-bold text-uppercase ls-2">Trusted By</h6>
                <h2 class="fw-bold display-6">{{ __('home.client_heading') }}</h2>
                <p class="text-muted mt-2 mx-auto" style="max-width: 600px;">
                    {{ __('home.client_subheading') }}
                </p>
            </div>

            <div class="row client-grid g-4 g-lg-5 justify-content-center align-items-center">

                <div class="col">
                    <div class="client-logo-wrapper">
                        <img src="{{ asset('images/clients/samsung.png') }}" alt="Samsung" class="client-logo">
                    </div>
                </div>

                <div class="col">
                    <div class="client-logo-wrapper">
                        <img src="{{ asset('images/clients/hyundai.png') }}" alt="Hyundai" class="client-logo">
                    </div>
                </div>

                <div class="col">
                    <div class="client-logo-wrapper">
                        <img src="{{ asset('images/clients/nike.png') }}" alt="Nike" class="client-logo">
                    </div>
                </div>

                <div class="col">
                    <div class="client-logo-wrapper">
                        <img src="{{ asset('images/clients/locklock.png') }}" alt="Lock & Lock" class="client-logo">
                    </div>
                </div>

                <div class="col">
                    <div class="client-logo-wrapper">
                        <img src="{{ asset('images/clients/cj.png') }}" alt="CJ" class="client-logo">
                    </div>
                </div>

                <div class="col">
                    <div class="client-logo-wrapper">
                        <img src="{{ asset('images/clients/erajaya.png') }}" alt="Erajaya" class="client-logo">
                    </div>
                </div>

                <div class="col">
                    <div class="client-logo-wrapper">
                        <img src="{{ asset('images/clients/lg.png') }}" alt="LG" class="client-logo">
                    </div>
                </div>

                <div class="col">
                    <div class="client-logo-wrapper">
                        <img src="{{ asset('images/clients/lotte.png') }}" alt="Lotte" class="client-logo">
                    </div>
                </div>

                <div class="col">
                    <div class="client-logo-wrapper">
                        <img src="{{ asset('images/clients/zinus.png') }}" alt="Zinus" class="client-logo">
                    </div>
                </div>

                <div class="col">
                    <div class="client-logo-wrapper">
                        <img src="{{ asset('images/clients/emsonic.png') }}" alt="Emsonic" class="client-logo">
                    </div>
                </div>

                <div class="col">
                    <div class="client-logo-wrapper">
                        <img src="{{ asset('images/clients/strawland.png') }}" alt="Strawland" class="client-logo">
                    </div>
                </div>

                <div class="col">
                    <div class="client-logo-wrapper">
                        <img src="{{ asset('images/clients/shinwon.png') }}" alt="Shinwon" class="client-logo">
                    </div>
                </div>

                <div class="col">
                    <div class="client-logo-wrapper">
                        <img src="{{ asset('images/clients/zimmoah.png') }}" alt="Zimmoah" class="client-logo">
                    </div>
                </div>

                <div class="col">
                    <div class="client-logo-wrapper">
                        <img src="{{ asset('images/clients/daeyoung.png') }}" alt="Daeyoung" class="client-logo">
                    </div>
                </div>

                <div class="col">
                    <div class="client-logo-wrapper">
                        <img src="{{ asset('images/clients/pungkook.png') }}" alt="Pungkook" class="client-logo">
                    </div>
                </div>

                <div class="col">
                    <div class="client-logo-wrapper">
                        <img src="{{ asset('images/clients/serim.png') }}" alt="Serim" class="client-logo">
                    </div>
                </div>

            </div>

            <div class="text-center mt-5 pt-3 border-top w-50 mx-auto">
                <p class="small text-muted mb-0">
                    {{ __('home.client_subsubheading') }}
                </p>
            </div>

        </div>
    </section>
@endsection
