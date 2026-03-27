<section class="py-5 bg-white overflow-hidden" id="greetings">
    {{-- SEPARATOR ATAS GREETINGS PRESIDENT --}}
    <div class="section-separator">
        <div class="separator-line"></div>
        <div class="separator-icon">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.8">
                <path d="M6 9H4.5a2.5 2.5 0 0 0 0 5H6" />
                <path d="M18 9h1.5a2.5 2.5 0 0 1 0 5H18" />
                <path d="M8 9h8" />
                <path d="M8 15h8" />
                <path d="M8 9a4 4 0 0 1 8 0" />
                <path d="M8 15a4 4 0 0 0 8 0" />
            </svg>
        </div>
        <div class="separator-line"></div>
    </div>

    <div class="container py-lg-5">
        <div class="row align-items-center gy-5">

            {{-- BAGIAN KIRI: Image Grid (Dipindah ke atas agar di kiri) --}}
            <div class="col-lg-6 pe-lg-5">
                <div class="image-grid-wrapper position-relative">

                    {{-- Gambar 1: Tinggi (Kanan dalam grid) --}}
                    <div class="img-tall rounded-4 overflow-hidden shadow-lg" data-aos="fade-right"
                        data-aos-delay="100">
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
                        <img src="{{ asset('images/background/7.jpg') }}" alt="Project Site"
                            class="w-100 h-100 object-fit-cover hover-zoom">
                    </div>

                </div>
            </div>

            {{-- CEO Message --}}
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
                    <div class="me-3">
                        <div class="bg-primary-subtle text-primary rounded-circle d-flex align-items-center justify-content-center"
                            style="width: 50px; height: 50px;">
                            <i class="bi bi-quote fs-3"></i>
                        </div>
                    </div>
                    {{-- Nama & Tanda Tangan di Kanan --}}
                    <div class="text-end">
                        <div class="mb-2"
                            style="height: 70px; display: flex; align-items: center; justify-content: flex-end;">
                            <img src="{{ asset('images/sign.jpg') }}" alt="Signature"
                                style="height: 100px; object-fit: contain;">
                        </div>
                        <h6 class="fw-bold text-dark mb-0">Han Gyu Seong</h6>
                        <p class="text-primary fw-medium mb-0 small text-uppercase ls-1">
                            {{ __('messages.greetings.position') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- SEPARATOR BAWAH GREETINGS PRESIDENT --}}
        <div class="section-separator">
            <div class="separator-line"></div>
            <div class="separator-icon">
                <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor"
                    stroke-width="1.8">
                    <path d="M6 9H4.5a2.5 2.5 0 0 0 0 5H6" />
                    <path d="M18 9h1.5a2.5 2.5 0 0 1 0 5H18" />
                    <path d="M8 9h8" />
                    <path d="M8 15h8" />
                    <path d="M8 9a4 4 0 0 1 8 0" />
                    <path d="M8 15a4 4 0 0 0 8 0" />
                </svg>
            </div>
            <div class="separator-line"></div>
        </div>
</section>
