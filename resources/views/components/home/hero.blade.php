@php
    $heroSlides = [
        ['img' => 'images/hero/hero-1.webp', 'caption' => 'Silo fly ash foundation project'],
        ['img' => 'images/hero/hero-2.webp', 'caption' => 'Chipyard area project'],
        ['img' => 'images/hero/hero-3.webp', 'caption' => 'Exterior & Interior project'],
    ];
@endphp

<section class="hero-section">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000"
        data-bs-pause="false">

        {{-- Dots + tombol pause --}}
        <div class="carousel-indicators hero-dots">
            @foreach ($heroSlides as $i => $slide)
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="{{ $i }}"
                    class="{{ $i === 0 ? 'active' : '' }}" aria-label="Slide {{ $i + 1 }}"></button>
            @endforeach
            <button type="button" class="hero-pause" id="heroPause" aria-label="Pause">
                <i class="bi bi-pause-fill"></i>
            </button>
        </div>

        {{-- Slides --}}
        <div class="carousel-inner">
            @foreach ($heroSlides as $i => $slide)
                <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
                    <img src="{{ asset($slide['img']) }}" class="hero-img" alt="{{ $slide['caption'] }}">
                    <div class="hero-caption">{{ $slide['caption'] }}</div>
                </div>
            @endforeach
        </div>

        {{-- Arrows --}}
        <button class="carousel-control-prev hero-arrow" type="button" data-bs-target="#heroCarousel"
            data-bs-slide="prev">
            <i class="bi bi-chevron-left"></i>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next hero-arrow" type="button" data-bs-target="#heroCarousel"
            data-bs-slide="next">
            <i class="bi bi-chevron-right"></i>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<script>
    (function() {
        const el = document.getElementById('heroCarousel');
        const btn = document.getElementById('heroPause');
        const icon = btn.querySelector('i');
        const carousel = bootstrap.Carousel.getOrCreateInstance(el);
        let playing = true;

        btn.addEventListener('click', function() {
            playing = !playing;
            if (playing) {
                carousel.cycle();
            } else {
                carousel.pause();
            }
            icon.className = playing ? 'bi bi-pause-fill' : 'bi bi-play-fill';
        });
    })();
</script>
