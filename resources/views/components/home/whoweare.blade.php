<section class="py-5 bg-white overflow-hidden" id="greetings">
    {{-- SEPARATOR ATAS --}}
    <div class="section-separator">
        <div class="separator-line"></div>
        <div class="separator-icon">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.8">
                <path d="M6 9H4.5a2.5 2.5 0 0 0 0 5H6" />
                <path d="M18 9h1.5a2.5 2.5 0 0 1 0 5H18" />
                <path d="M8 9h8" /><path d="M8 15h8" />
                <path d="M8 9a4 4 0 0 1 8 0" /><path d="M8 15a4 4 0 0 0 8 0" />
            </svg>
        </div>
        <div class="separator-line"></div>
    </div>

    <div class="container py-lg-5 reveal">
        <div class="row align-items-center gy-5">

            {{-- BAGIAN KIRI: Image Grid --}}
            <div class="col-lg-6 pe-lg-5 reveal">
                <div class="image-grid-wrapper position-relative">
                    <div class="img-tall rounded-4 overflow-hidden shadow-lg" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{ asset('images/background/6.jpg') }}" alt="Project High" class="w-100 h-100 object-fit-cover hover-zoom">
                    </div>
                    <div class="img-small-top rounded-4 overflow-hidden shadow" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{ asset('images/background/5.png') }}" alt="Project Planning" class="w-100 h-100 object-fit-cover hover-zoom">
                    </div>
                    <div class="img-wide-bottom rounded-4 overflow-hidden shadow" data-aos="fade-up" data-aos-delay="300">
                        <img src="{{ asset('images/background/7.jpg') }}" alt="Project Site" class="w-100 h-100 object-fit-cover hover-zoom">
                    </div>
                </div>
            </div>

            {{-- BAGIAN KANAN: CEO Message --}}
            <div class="col-lg-6 ps-lg-5 reveal" data-aos="fade-left">
                <h6 class="text-primary fw-bold text-uppercase mb-2 letter-spacing-2">
                    {{ __('messages.greetings.subtitle') }}
                </h6>

                <h2 class="display-6 fw-bold text-dark mb-4">
                    {!! __('messages.greetings.title') !!}
                </h2>

                <div class="text-muted leading-relaxed text-justify mb-4">
                    <p class="mb-3">"{{ __('messages.greetings.content_1') }}"</p>
                    <p class="mb-3">{{ __('messages.greetings.content_2') }}</p>
                </div>

                {{-- SIGNATURE BLOCK (2 SIGNATURES) --}}
                <div class="d-flex align-items-center justify-content-between mt-5 pt-4 border-top border-light reveal">
                    <div class="me-3 d-none d-sm-block">
                        <div class="bg-primary-subtle text-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <i class="bi bi-quote fs-3"></i>
                        </div>
                    </div>

                    <div class="d-flex gap-4 gap-md-5 reveal">
                        <div class="text-center signature-item">
                            <div class="mb-2 signature-box">
                                <img src="{{ asset('images/sign/sign-korean.webp') }}" alt="Korean Signature" class="signature-img">
                            </div>
                            <h6 class="fw-bold text-dark mb-0 small">한규성</h6>
                            <span class="text-muted" style="font-size: 10px; letter-spacing: 1px;">(KR Sign)</span>
                        </div>

                        <div class="text-center signature-item">
                            <div class="mb-2 signature-box">
                                <img src="{{ asset('images/sign/sign-indo.webp') }}" alt="Indo Signature" class="signature-img">
                            </div>
                            <h6 class="fw-bold text-dark mb-0 small">Han Gyu Seong</h6>
                            <p class="text-primary fw-bold mb-0 text-uppercase ls-1" style="font-size: 11px;">
                                {{ __('messages.greetings.position') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- SEPARATOR BAWAH --}}
        <div class="section-separator mt-5">
            <div class="separator-line"></div>
            <div class="separator-icon">
                <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.8">
                    <path d="M6 9H4.5a2.5 2.5 0 0 0 0 5H6" /><path d="M18 9h1.5a2.5 2.5 0 0 1 0 5H18" />
                    <path d="M8 9h8" /><path d="M8 15h8" />
                    <path d="M8 9a4 4 0 0 1 8 0" /><path d="M8 15a4 4 0 0 0 8 0" />
                </svg>
            </div>
            <div class="separator-line"></div>
        </div>
    </div>
</section>

<style>

</style>