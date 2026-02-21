<section class="hero-section position-relative overflow-hidden">

    {{-- Background Video --}}
    <video class="hero-video" autoplay muted loop playsinline aria-hidden="true">
        <source src="{{ asset('videos/hero.mp4') }}" type="video/mp4">
    </video>

    {{-- Dark Overlay --}}
    <div class="hero-overlay"></div>

    {{-- Main Content --}}
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 col-xl-8">

                <div class="hero-content">

                    <span class="hero-badge d-inline-block mb-3">
                        {{ __('messages.hero.subtitle') }}
                    </span>

                    {{-- Title (Allow HTML from translation) --}}
                    <h1 class="hero-title mb-4">
                        {!! __('messages.hero.title') !!}
                    </h1>

                    <p class="hero-subtitle mb-5">
                        {{ __('messages.hero.desc') }}
                    </p>

                    <div class="hero-buttons d-flex flex-wrap justify-content-center gap-3">

                        <a href="#services"
                           class="btn btn-outline-light btn-lg custom-btn icon-btn">
                            {{ __('messages.hero.btn_services') }}
                        </a>

                        <a href="https://www.youtube.com/watch?v=ECFhajv4zw0"
                           target="_blank"
                           rel="noopener"
                           class="btn btn-outline-light btn-lg custom-btn icon-btn">
                            <i class="bi bi-play-circle-fill me-2"></i>
                            {{ __('messages.hero.btn_profile') }}
                        </a>

                    </div>

                </div>
            </div>
        </div>
    </div>

</section>

{{-- Stats Section --}}
<section class="hero-stats-wrapper py-5">
    <div class="container">
        <div class="row justify-content-center text-center">

            @php
                $stats = [
                    [__('messages.hero.stat_1_val'), __('messages.hero.stat_1_text')],
                    [__('messages.hero.stat_2_val'), __('messages.hero.stat_2_text')],
                    [__('messages.hero.stat_3_val'), __('messages.hero.stat_3_text')],
                ];
            @endphp

            @foreach ($stats as [$number, $label])
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="stat-item">
                        <h3 class="stat-number">{{ $number }}</h3>
                        <p class="stat-desc mb-0">{{ $label }}</p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>