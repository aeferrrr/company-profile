<section class="hero-section">

    {{-- Background Image Slider --}}
    <div class="hero-slider">

        <div class="hero-slide" style="background-image:url('{{ asset('/images/hero/beko.webp') }}')">
        </div>

        <div class="hero-slide" style="background-image:url('{{ asset('/images/hero/construction-1.webp') }}')">
        </div>

        <div class="hero-slide" style="background-image:url('{{ asset('/images/hero/engineer-working.webp') }}')">
        </div>

    </div>

    {{-- Overlay --}}
    <div class="hero-overlay"></div>

    {{-- Main Content --}}
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-lg-10">

                <div class="hero-content">

                    <span class="hero-badge">
                        {{ __('messages.hero.subtitle') }}
                    </span>

                    <h1 class="hero-title">
                        {!! __('messages.hero.title') !!}
                    </h1>

                    <p class="hero-subtitle">
                        {{ __('messages.hero.desc') }}
                    </p>

                    <div class="hero-buttons">
                        <a href="#services" class="btn btn-outline-light btn-lg custom-btn">
                            {{ __('messages.hero.btn_services') }}
                        </a>
                        <a href="https://www.youtube.com/watch?v=f3Ao7fPE_WI" target="_blank"
                            class="btn btn-outline-light btn-lg custom-btn ms-3">
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
                    $stats = [
                        [__('messages.hero.stat_1_val'), __('messages.hero.stat_1_text')],
                        [__('messages.hero.stat_2_val'), __('messages.hero.stat_2_text')],
                        [__('messages.hero.stat_3_val'), __('messages.hero.stat_3_text')],
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

</section>
