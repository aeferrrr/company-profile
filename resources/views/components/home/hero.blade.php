<section class="hero-section">
    {{-- Background Video --}}
    <video class="hero-video" alt="PT KPCM Industrial Estate - Perusahaan Konstruksi di Jakarta Selatan" autoplay muted loop playsinline>
        <source src="{{ asset('videos/hero.mp4') }}" type="video/mp4">
    </video>

    {{-- Overlay (Diubah agar gelapnya merata, tidak hanya di kiri) --}}
    <div class="hero-overlay"></div>

    {{-- Main Content --}}
    <div class="container h-100">
        {{-- TAMBAHAN: justify-content-center (biar di tengah horizontal) & text-center --}}
        <div class="row h-100 align-items-center justify-content-center text-center">

            {{-- UBAH: col-lg-8 jadi col-lg-10 biar area lebih luas --}}
            <div class="col-lg-10">
                <div class="hero-content">

                    <span class="hero-badge">
                        {{ __('messages.hero.subtitle') }}
                    </span>

                    {{-- Menggunakan {!! !!} karena title mengandung tag HTML <br> dan <span> --}}
                    <h1 class="hero-title">
                        {!! __('messages.hero.title') !!}
                    </h1>

                    <p class="hero-subtitle">
                        {{ __('messages.hero.desc') }}
                    </p>

                    <div class="hero-buttons">
                        <a href="#services" class="btn btn-outline-light btn-lg custom-btn icon-btn">
                            {{ __('messages.hero.btn_services') }}
                        </a>
                        <a href="#" target="_blank" rel="noopener"
                            class="btn btn-outline-light btn-lg custom-btn ms-3 icon-btn">
                            <i class="bi bi-play-circle-fill me-2"></i>
                            {{ __('messages.hero.btn_profile') }}
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    {{-- Stats --}}
    <div class="hero-stats-wrapper">
        <div class="container">
            <div class="row">
                @php
                    // Mengambil data statistik dari file bahasa
                    $stats = [
                        [__('messages.hero.stat_1_val'), __('messages.hero.stat_1_text')],
                        [__('messages.hero.stat_2_val'), __('messages.hero.stat_2_text')],
                        [__('messages.hero.stat_3_val'), __('messages.hero.stat_3_text')]
                    ];
                @endphp

                @foreach ($stats as [$number, $label])
                    <div class="col-md-4 col-sm-6 stat-item">
                        <h3 class="stat-number">{{ $number }}</h3>
                        <p class="stat-desc">{{ $label }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Style Tambahan untuk mendukung class dari translation file --}}
    <style>
        /* Class ini ada di dalam file bahasa (messages.php) pada bagian title */
        .text-outline {
            color: transparent;
            -webkit-text-stroke: 1px #fff;
            text-stroke: 1px #fff;
            font-weight: 800;
        }
    </style>
</section>