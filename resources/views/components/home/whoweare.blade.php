<section class="py-5 bg-white overflow-hidden" id="greetings">
    <div class="container py-lg-5">
        <div class="row align-items-center gy-5">

            {{-- BAGIAN KIRI: Image Grid (Dipindah ke atas agar di kiri) --}}
            <div class="col-lg-6 pe-lg-5">
                <div class="image-grid-wrapper position-relative">

                    {{-- Gambar 1: Tinggi (Kanan dalam grid) --}}
                    <div class="img-tall rounded-4 overflow-hidden shadow-lg" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{ asset('images/background/6.jpg') }}" alt="Project High"
                            class="w-100 h-100 object-fit-cover hover-zoom">
                    </div>

                    {{-- Gambar 2: Kecil (Kiri Atas dalam grid) --}}
                    <div class="img-small-top rounded-4 overflow-hidden shadow" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{ asset('images/background/5.png') }}" alt="Project Planning"
                            class="w-100 h-100 object-fit-cover hover-zoom">
                    </div>

                    {{-- Gambar 3: Lebar (Kiri Bawah dalam grid) --}}
                    <div class="img-wide-bottom rounded-4 overflow-hidden shadow" data-aos="fade-up"
                        data-aos-delay="300">
                        <img src="{{ asset('images/background/4.jpg') }}" alt="Project Site"
                            class="w-100 h-100 object-fit-cover hover-zoom">
                    </div>

                </div>
            </div>

            {{-- BAGIAN KANAN: CEO Message (Dipindah ke bawah agar di kanan) --}}
            <div class="col-lg-6 ps-lg-5" data-aos="fade-left">

                {{-- Small Header --}}
                <h6 class="text-primary fw-bold text-uppercase mb-2 letter-spacing-2">
                    {{ __('messages.greetings.subtitle') }}
                </h6>

                {{-- Main Title --}}
                <h2 class="display-6 fw-bold text-dark mb-4">
                    {!! __('messages.greetings.title') !!}
                </h2>

                {{-- Isi Surat --}}
                <div class="text-muted leading-relaxed text-justify mb-4">
                    <p class="mb-3">
                        "{{ __('messages.greetings.content_1') }}"
                    </p>
                    <p class="mb-3">
                        {{ __('messages.greetings.content_2') }}
                    </p>
                </div>

                {{-- Signature Block --}}
                <div class="d-flex align-items-center justify-content-between mt-5 pt-3 border-top border-light">
                    {{-- Icon Quote Tetap di Kiri --}}
                    <div class="me-3">
                        <div class="bg-primary-subtle text-primary rounded-circle d-flex align-items-center justify-content-center"
                            style="width: 50px; height: 50px;">
                            <i class="bi bi-quote fs-3"></i>
                        </div>
                    </div>
                    
                    {{-- Nama & Tanda Tangan di Kanan --}}
                    <div class="text-end">
                        {{-- Tempat Tanda Tangan CEO --}}
                        <div class="mb-2">
                            {{-- Ganti path src dengan file tanda tangan asli --}}
                            <img src="{{ asset('images/random/sign.png') }}" 
                                 alt="CEO Signature" 
                                 style="height: 50px; width: auto;"
                                 class="d-inline-block">
                        </div>

                        {{-- Nama (Dikecilkan menjadi h6) --}}
                        <h6 class="fw-bold text-dark mb-0">Han Gyu Seong</h6>
                        <p class="text-primary fw-medium mb-0 small text-uppercase ls-1">
                            {{ __('messages.greetings.position') }}
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <style>
        /* ========================
           GREETINGS SECTION CSS
        ======================== */

        /* Typography */
        .letter-spacing-2 {
            letter-spacing: 2px;
        }

        .ls-1 {
            letter-spacing: 1px;
        }

        .leading-relaxed {
            line-height: 1.8;
        }

        /* Warna Mengikuti Root */
        .text-primary {
            color: var(--samsung-blue) !important;
        }

        .bg-primary-subtle {
            background-color: var(--samsung-blue-glow) !important;
        }

        .border-light {
            border-color: var(--border-soft) !important;
        }

        /* --- IMAGE GRID LAYOUT --- */
        .image-grid-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 200px 220px;
            gap: 20px;
            height: 440px;
        }

        /* Posisi Gambar */
        .img-tall {
            grid-column: 2;
            grid-row: 1 / span 2;
            position: relative;
            z-index: 1;
        }

        .img-small-top {
            grid-column: 1;
            grid-row: 1;
        }

        .img-wide-bottom {
            grid-column: 1;
            grid-row: 2;
        }

        /* Efek Hover Zoom Halus */
        .hover-zoom {
            transition: transform 0.6s ease;
        }

        .image-grid-wrapper div:hover .hover-zoom {
            transform: scale(1.05);
        }

        /* Responsive Mobile */
        @media (max-width: 991px) {
            .image-grid-wrapper {
                display: flex;
                flex-direction: column;
                height: auto;
                gap: 15px;
                /* Margin top dipindah ke margin bottom karena gambar sekarang diatas pada mobile */
                margin-bottom: 30px; 
            }

            .img-tall {
                height: 250px;
            }

            .img-small-top,
            .img-wide-bottom {
                height: 180px;
            }
        }
    </style>
</section>