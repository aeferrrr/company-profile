<section id="video-showcase" class="video-section section-padding">

    <div class="container">

        <div class="text-center mb-5 fade-in-up">
            {{-- Menggunakan key baru agar konsisten, atau bisa tetap pakai home.video_heading --}}
            <h2 class="fw-bold display-6">{{ __('messages.video.heading') }}</h2>
            <p class="text-muted mt-2 fs-5">
                {{ __('messages.video.subheading') }}
            </p>
        </div>

        {{-- Layout Row Bootstrap Diubah --}}
        <div class="row justify-content-center align-items-stretch g-4">

            {{-- KOLOM KIRI: VIDEO PLAYER UTAMA --}}
            <div class="col-lg-8">
                <div class="video-wrapper shadow-lg h-100" id="videoWrapper" style="min-height: 400px;">

                    {{-- ID companyVideo dipertahankan --}}
                    <video id="companyVideo" autoplay muted loop playsinline class="w-100 h-100 object-fit-cover">
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
                            <span class="badge bg-primary mb-1">{{ __('messages.video.badge_playing') }}</span>
                            {{-- Judul dibuat dinamis dengan ID --}}
                            <h5 class="text-white m-0" id="currentVideoTitle">
                                {{ __('messages.video.items.overview.title') }}
                            </h5>
                        </div>
                    </div>
                </div>
            </div>

            {{-- KOLOM KANAN: PLAYLIST --}}
            <div class="col-lg-4">
                <div class="playlist-container shadow-lg">
                    <div class="playlist-header">
                        <h5 class="m-0 fw-bold text-dark">{{ __('messages.video.playlist_title') }}</h5>
                        <small class="text-muted">{{ __('messages.video.playlist_subtitle') }}</small>
                    </div>

                    <div class="playlist-items">

                        {{-- Item 1 (Aktif) --}}
                        {{-- Perhatikan cara memasukkan __() ke dalam onclick Javascript --}}
                        <div class="video-item active"
                            onclick="changeVideo('{{ asset('videos/kpcm-construction.mp4') }}', '{{ __('messages.video.items.overview.title') }}', this)">
                            <img src="{{ asset('images/ourproject.jpg') }}" class="item-thumb" alt="Thumbnail">
                            <div class="item-info">
                                <h6>{{ __('messages.video.items.overview.title') }}</h6>
                                <p>{{ __('messages.video.items.overview.desc') }}</p>
                            </div>
                        </div>

                        {{-- Item 2 --}}
                        <div class="video-item"
                            onclick="changeVideo('{{ asset('videos/interior.mp4') }}', '{{ __('messages.video.items.team.title') }}', this)">
                            <img src="{{ asset('images/allteam.jpeg') }}" class="item-thumb" alt="Thumbnail">
                            <div class="item-info">
                                <h6>{{ __('messages.video.items.team.title') }}</h6>
                                <p>{{ __('messages.video.items.team.desc') }}</p>
                            </div>
                        </div>

                        {{-- Item 3 --}}
                        {{-- <div class="video-item"
                            onclick="changeVideo('{{ asset('videos/construction.mp4') }}', '{{ __('messages.video.items.structural.title') }}', this)">
                            <img src="{{ asset('images/organization.jpg') }}" class="item-thumb" alt="Thumbnail">
                            <div class="item-info">
                                <h6>{{ __('messages.video.items.structural.title') }}</h6>
                                <p>{{ __('messages.video.items.structural.desc') }}</p>
                            </div>
                        </div>  --}}

                        {{-- Item 4 --}}
                        {{-- <div class="video-item"
                            onclick="changeVideo('{{ asset('videos/interior.mp4') }}', '{{ __('messages.video.items.safety.title') }}', this)">
                            <img src="{{ asset('images/landscape.jpg') }}" class="item-thumb" alt="Thumbnail">
                             <div class="item-info">
                                <h6>{{ __('messages.video.items.safety.title') }}</h6>
                                <p>{{ __('messages.video.items.safety.desc') }}</p>
                            </div> --}}
                    </div>

                </div>
            </div>
        </div>

    </div>
    </div>
</section>
