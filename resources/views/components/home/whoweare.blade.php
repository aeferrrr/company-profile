<section class="py-5 bg-white overflow-hidden" id="greetings">
    {{-- SEPARATOR ATAS --}}
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

    <div class="container py-lg-5 reveal">
        <div class="row align-items-center gy-5">

            {{-- BAGIAN KIRI: Image Grid --}}
            <div class="col-lg-6 pe-lg-5 reveal">
                <div class="image-grid-wrapper position-relative">
                    <div class="img-tall rounded-4 overflow-hidden shadow-lg" data-aos="fade-right"
                        data-aos-delay="100">
                        <img src="{{ asset('images/background/6.webp') }}" alt="Project High"
                            class="w-100 h-100 object-fit-cover hover-zoom">
                    </div>
                    <div class="img-small-top rounded-4 overflow-hidden shadow" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{ asset('images/background/5.webp') }}" alt="Project Planning"
                            class="w-100 h-100 object-fit-cover hover-zoom">
                    </div>
                    <div class="img-wide-bottom rounded-4 overflow-hidden shadow" data-aos="fade-up"
                        data-aos-delay="300">
                        <img src="{{ asset('images/background/7.webp') }}" alt="Project Site"
                            class="w-100 h-100 object-fit-cover hover-zoom">
                    </div>
                </div>
            </div>

            {{-- BAGIAN KANAN: Our Journey --}}
            <div class="col-lg-6 ps-lg-5 reveal" data-aos="fade-left">
                <h6 class="text-primary fw-bold text-uppercase mb-2 letter-spacing-2">
                    {{ __('messages.journey.subtitle') }}
                </h6>

                <h2 class="journey-title fw-bold text-dark mb-4">
                    {!! __('messages.journey.title') !!}
                </h2>

                <div class="journey-copy mb-4">
                    <p class="journey-lead">{{ __('messages.journey.content_1') }}</p>
                    <p class="journey-body mb-0">{{ __('messages.journey.content_2') }}</p>
                </div>

                {{-- JOURNEY STEPS --}}
                @php
                    $journeySteps = [
                        ['key' => 'step1', 'icon' => 'bi-tools'],
                        ['key' => 'step2', 'icon' => 'bi-bricks'],
                        ['key' => 'step3', 'icon' => 'bi-buildings'],
                    ];
                @endphp

                <div class="journey-steps mt-4 pt-4 border-top border-light reveal">
                    @foreach ($journeySteps as $i => $step)
                        <div class="journey-step {{ $loop->last ? 'journey-step--final' : '' }}">
                            <div class="journey-icon">
                                <i class="bi {{ $step['icon'] }}"></i>
                            </div>
                            <div class="journey-text">
                                <span class="journey-num">0{{ $i + 1 }}</span>
                                <h6 class="journey-label">{{ __('messages.journey.' . $step['key'] . '_label') }}</h6>
                                <ul class="journey-list">
                                    @foreach (explode('·', __('messages.journey.' . $step['key'] . '_desc')) as $item)
                                        <li>{{ trim($item) }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- SEPARATOR BAWAH --}}
        <div class="section-separator mt-5">
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
    </div>
</section>

<style>

</style>
