@php
    $heroSlides = [
        [
            'img' => 'images/hero/hero-2.png',
            'key' => 'chipyard',
        ],
        [
            'img' => 'images/hero/hero-1.webp',
            'key' => 'cafe',
        ],
        [
            'img' => 'images/hero/hero-3.png',
            'key' => 'construction',
        ],
    ];
@endphp

<section class="hero-section">

    <div id="heroCarousel" class="carousel slide carousel-fade" aria-label="KPCM Project Highlights">

        {{-- =====================================
        HERO SLIDES
        ===================================== --}}
        <div class="carousel-inner">

            @foreach ($heroSlides as $i => $slide)
                @php
                    $key = $slide['key'];
                    $translation = 'general.hero.slides.' . $key;
                @endphp

                <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">

                    {{-- Background Image --}}
                    <img src="{{ asset($slide['img']) }}" class="hero-img" alt="{{ __($translation . '.caption') }}"
                        loading="eager" decoding="async" @if ($i === 0) fetchpriority="high" @endif>

                    {{-- Overlay --}}
                    <div class="hero-overlay"></div>

                    {{-- Center Content --}}
                    <div class="hero-content">

                        <span class="hero-subtitle">
                            {{ __('general.hero.subtitle') }}
                        </span>

                        <h1 class="hero-title">
                            {{ __($translation . '.title') }}
                        </h1>

                        <div class="hero-line"></div>

                        <p class="hero-description">
                            {{ __($translation . '.description') }}
                        </p>

                    </div>

                    {{-- Bottom Caption --}}
                    <div class="hero-caption">
                        {{ __($translation . '.caption') }}
                    </div>

                </div>
            @endforeach

        </div>

        {{-- =====================================
        DOTS + PAUSE
        ===================================== --}}
        <div class="carousel-indicators hero-dots">

            @foreach ($heroSlides as $i => $slide)
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="{{ $i }}"
                    class="{{ $i === 0 ? 'active' : '' }}" aria-label="Slide {{ $i + 1 }}"
                    @if ($i === 0) aria-current="true" @endif></button>
            @endforeach

            <button type="button" class="hero-pause" id="heroPause" aria-label="Pause slideshow" aria-pressed="false">
                <i class="bi bi-pause-fill"></i>
            </button>

        </div>

        {{-- =====================================
        PREVIOUS ARROW
        ===================================== --}}
        <button class="carousel-control-prev hero-arrow" type="button" data-bs-target="#heroCarousel"
            data-bs-slide="prev" aria-label="Previous slide">
            <i class="bi bi-chevron-left"></i>
        </button>

        {{-- =====================================
        NEXT ARROW
        ===================================== --}}
        <button class="carousel-control-next hero-arrow" type="button" data-bs-target="#heroCarousel"
            data-bs-slide="next" aria-label="Next slide">
            <i class="bi bi-chevron-right"></i>
        </button>

    </div>

</section>

{{-- ==========================================
HERO CAROUSEL SCRIPT
========================================== --}}
<script>
    document.addEventListener('DOMContentLoaded', async function() {
        const el = document.getElementById('heroCarousel');
        const btn = document.getElementById('heroPause');

        if (!el || !btn || typeof bootstrap === 'undefined') return;

        const icon = btn.querySelector('i');
        const slides = Array.from(el.querySelectorAll('.carousel-item'));
        const images = Array.from(el.querySelectorAll('.hero-img'));

        const carousel = bootstrap.Carousel.getOrCreateInstance(el, {
            interval: 5000,
            pause: false,
            ride: false,
            touch: true,
            wrap: true
        });

        let playing = true;

        // Tunggu gambar selesai dimuat
        await Promise.all(images.map(img => {
            if (img.complete) return Promise.resolve();

            return new Promise(resolve => {
                img.addEventListener('load', resolve, {
                    once: true
                });
                img.addEventListener('error', resolve, {
                    once: true
                });
            });
        }));

        // Jalankan zoom pada slide pertama
        const firstSlide = el.querySelector('.carousel-item.active');

        if (firstSlide) {
            firstSlide.classList.add('is-zooming');
        }

        // Saat slide baru mulai masuk
        el.addEventListener('slide.bs.carousel', function(event) {
            const incoming = slides[event.to];

            if (incoming) {
                incoming.classList.add('is-zooming');
            }
        });

        // Setelah fade selesai, bersihkan animasi slide lain
        el.addEventListener('slid.bs.carousel', function() {
            const activeSlide = el.querySelector('.carousel-item.active');

            slides.forEach(slide => {
                if (slide !== activeSlide) {
                    slide.classList.remove('is-zooming');
                }
            });
        });

        // Mulai autoplay
        carousel.cycle();

        // Pause / Play
        btn.addEventListener('click', function() {
            playing = !playing;

            if (playing) {
                carousel.cycle();
            } else {
                carousel.pause();
            }

            icon.className = playing ?
                'bi bi-pause-fill' :
                'bi bi-play-fill';

            btn.setAttribute(
                'aria-label',
                playing ? 'Pause slideshow' : 'Play slideshow'
            );

            btn.setAttribute('aria-pressed', String(!playing));
        });
    });
</script>
