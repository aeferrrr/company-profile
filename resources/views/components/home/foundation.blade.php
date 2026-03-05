<section class="py-5 bg-light position-relative">
    <div class="container py-lg-5">
        <div class="row align-items-center">

            {{-- BAGIAN KIRI: Heading & Navigasi --}}
            <div class="col-lg-4 mb-5 mb-lg-0 pe-lg-5">
                <h2 class="display-5 fw-bold text-dark mb-4">
                    {!! __('messages.values.title') !!}
                </h2>
                <p class="text-muted leading-relaxed mb-4">
                    {{ __('messages.values.desc') }}
                </p>

                {{-- Tombol Navigasi Bulat Kuning --}}
                <div class="d-flex gap-3 mt-4">
                    <button class="btn-nav-custom prev-val">
                        <i class="bi bi-arrow-left"></i>
                    </button>
                    <button class="btn-nav-custom next-val">
                        <i class="bi bi-arrow-right"></i>
                    </button>
                </div>
            </div>

            {{-- BAGIAN KANAN: Slider Cards --}}
            <div class="col-lg-8">
                <div class="swiper valueSwiper p-3">
                    <div class="swiper-wrapper">

                        {{-- Card 1: Integrity --}}
                        <div class="swiper-slide">
                            <div class="value-card bg-white p-4 rounded-4 shadow-sm h-100">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="icon-circle bg-light text-primary me-3">
                                        {{-- Ikon Jabat Tangan --}}
                                        <i class="bi bi-hand-thumbs-up fs-3"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold mb-0">{{ __('messages.values.integrity_title') }}</h5>
                                        <small class="text-muted">{{ __('messages.values.integrity_sub') }}</small>
                                        <div class="text-primary small mt-1">★★★★★</div>
                                    </div>
                                </div>
                                <p class="text-muted mb-0 small">
                                    "{{ __('messages.values.integrity_desc') }}"
                                </p>
                            </div>
                        </div>

                        {{-- Card 2: Collaboration --}}
                        <div class="swiper-slide">
                            <div class="value-card bg-white p-4 rounded-4 shadow-sm h-100">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="icon-circle bg-light text-primary me-3">
                                        {{-- Ikon Roda Gigi Terhubung --}}
                                        <i class="bi bi-gear-wide-connected fs-3"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold mb-0">{{ __('messages.values.collaboration_title') }}</h5>
                                        <small class="text-muted">{{ __('messages.values.collaboration_sub') }}</small>
                                        <div class="text-primary small mt-1">★★★★★</div>
                                    </div>
                                </div>
                                <p class="text-muted mb-0 small">
                                    "{{ __('messages.values.collaboration_desc') }}"
                                </p>
                            </div>
                        </div>

                        {{-- Card 3: Innovation --}}
                        <div class="swiper-slide">
                            <div class="value-card bg-white p-4 rounded-4 shadow-sm h-100">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="icon-circle bg-light text-primary me-3">
                                        {{-- Ikon Lampu --}}
                                        <i class="bi bi-lightbulb fs-3"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold mb-0">{{ __('messages.values.innovation_title') }}</h5>
                                        <small class="text-muted">{{ __('messages.values.innovation_sub') }}</small>
                                        <div class="text-primary small mt-1">★★★★★</div>
                                    </div>
                                </div>
                                <p class="text-muted mb-0 small">
                                    "{{ __('messages.values.innovation_desc') }}"
                                </p>
                            </div>
                        </div>

                        {{-- Card 4: Harmony --}}
                        <div class="swiper-slide">
                            <div class="value-card bg-white p-4 rounded-4 shadow-sm h-100">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="icon-circle bg-light text-primary me-3">
                                        {{-- Ikon Timbangan (Gunakan bi-scales jika bi-balance-scale tidak muncul) --}}
                                        <i class="bi bi-flower1 fs-3"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold mb-0">{{ __('messages.values.harmony_title') }}</h5>
                                        <small class="text-muted">{{ __('messages.values.harmony_sub') }}</small>
                                        <div class="text-primary small mt-1">★★★★★</div>
                                    </div>
                                </div>
                                <p class="text-muted mb-0 small">
                                    "{{ __('messages.values.harmony_desc') }}"
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- Style CSS (Sama seperti sebelumnya) --}}
    <style>
        .value-card {
            border: 1px solid #f8f9fa;
            transition: all 0.3s ease;
        }

        .value-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 1rem 3rem rgba(255, 255, 255, 0.075) !important;
        }

        .icon-circle {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-nav-custom {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: none;
            background-color: #badcf3;
            color: #333;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
            cursor: pointer;
        }

        .btn-nav-custom:hover,
        .btn-nav-custom.active {
            background-color: #0734ff;
            color: #000;
            box-shadow: 0 4px 10px rgba(255, 193, 7, 0.4);
        }
    </style>

    {{-- Script JS (Sama seperti sebelumnya) --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var valSwiper = new Swiper(".valueSwiper", {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false
                },
                breakpoints: {
                    768: {
                        slidesPerView: 2
                    }
                },
                navigation: {
                    nextEl: ".next-val",
                    prevEl: ".prev-val"
                },
            });
        });
    </script>
</section>
