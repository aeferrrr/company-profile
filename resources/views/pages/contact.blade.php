
@extends('layouts.app')

@section('meta_title', __('general.seo.contact_title'))
@section('meta_description', __('general.seo.contact_desc'))

@section('content')

    {{-- ======================
        CONTACT HERO
    ====================== --}}
    {{-- HERO --}}
    <section class="hero-section hero-page">
        <img src="{{ asset('images/hero/worker-meeting.webp') }}" class="hero-bg" alt="{{ __('contact.hero_title') }}">

        <div class="hero-overlay"></div>

        <div class="hero-text">
            <h1>{{ __('contact.hero_title') }}</h1>
            <p>{{ __('contact.hero_subtitle') }}</p>
        </div>
    </section>

    {{-- ======================
        KPCM LOUNGE SECTION
    ====================== --}}
    <section class="lounge-section bg-sky-blue py-4">

        <div class="section-separator mb-2 reveal">
            <div class="separator-line"></div>
            <div class="separator-icon">
                <i class="fa-solid fa-mug-hot" style="font-size: 14px; color: var(--samsung-blue);"></i>
            </div>
            <div class="separator-line"></div>
        </div>

        <div class="container-fluid px-4 px-lg-5 py-lg-2 reveal">

            <div class="lounge-stage-wrap reveal">
                <div class="lounge-cards-stage">
                    <div class="lounge-card-item card-left">
                        <div class="lc-bg" style="background-image: url('{{ asset('images/lounge/sofa.webp') }}');"></div>
                        <div class="lc-overlay"></div>
                        <span class="lc-label">{{ __('contact.lounge_sofa') }}</span>
                    </div>

                    <div class="lounge-card-item card-middle">
                        <div class="lc-bg" style="background-image: url('{{ asset('images/lounge/exterior.webp') }}');">
                        </div>
                        <div class="lc-overlay"></div>
                        <span class="lc-label">{{ __('contact.lounge_exterior') }}</span>
                    </div>

                    <div class="lounge-card-item card-right">
                        <div class="lc-bg" style="background-image: url('{{ asset('images/lounge/bar.webp') }}');"></div>
                        <div class="lc-overlay"></div>
                        <span class="lc-label">{{ __('contact.lounge_bar') }}</span>
                    </div>
                </div>
            </div>

            <div class="lounge-bottom-row reveal">
                <div class="lounge-bottom-left">
                    <h2 class="lounge-main-title">{!! __('contact.lounge_title') !!}</h2>
                </div>
                <div class="lounge-bottom-right">
                    <p class="lounge-main-desc">
                        {{ __('contact.lounge_desc') }}
                    </p>
                    <a href="#contact-form" class="lounge-cta-link">
                        {{ __('contact.lounge_cta') }} <span class="lounge-cta-arrow">→</span>
                    </a>
                </div>
            </div>

        </div>
    </section>

    {{-- ======================
        CONTACT SECTION
    ====================== --}}
    <section id="contact-form" class="contact-section py-4 bg-sky-blue reveal">
        <div class="container-fluid px-4 px-lg-5 py-lg-2 reveal">

            <div class="section-separator mb-4 reveal">
                <div class="separator-line"></div>
                <div class="separator-icon">
                    <i class="fa-solid fa-headset" style="font-size: 14px; color: var(--samsung-blue);"></i>
                </div>
                <div class="separator-line"></div>
            </div>

            <div class="card-base main-card reveal">
                <div class="row g-0">

                    <div class="col-lg-5 col-xl-4 d-flex">
                        <div class="info-sidebar">
                            <h3 class="fw-bold mb-4 text-white">{{ __('contact.communication_title') }}</h3>

                            <div class="info-item">
                                <div class="info-icon"><i class="fa-solid fa-location-dot"></i></div>
                                <div class="info-text">
                                    <h6>{{ __('contact.office_address_title') }}</h6>
                                    <p>{{ __('contact.office_address') }}</p>
                                </div>
                            </div>

                            <div class="info-item">
                                <div class="info-icon"><i class="fa-solid fa-phone"></i></div>
                                <div class="info-text">
                                    <h6>{{ __('contact.phone_title') }}</h6>
                                    <p>+62 811-1966-903 (Mr. Han)<br>+62 813-7070-4904 (Adinda)</p>
                                </div>
                            </div>

                            <div class="info-item">
                                <div class="info-icon"><i class="fa-solid fa-envelope"></i></div>
                                <div class="info-text">
                                    <h6>{{ __('contact.email_title') }}</h6>
                                    <p>kpcidhan@gmail.com<br>adinda.kpcm@gmail.com</p>
                                </div>
                            </div>

                            <div class="info-poster">
                                <img src="{{ asset('images/poster/internal/han-poster.webp') }}"
                                    alt="KPCM - Building a Better Tomorrow" loading="lazy" width="1131" height="1600">
                            </div>

                            <div class="mt-5 pt-4 border-top border-secondary">
                                <h6 class="text-white opacity-50 small text-uppercase mb-3">{{ __('contact.follow_us') }}</h6>
                                <div class="d-flex gap-3">
                                    <a href="#" class="text-white opacity-75 fs-5"><i
                                            class="fa-brands fa-linkedin"></i></a>
                                    <a href="#" class="text-white opacity-75 fs-5"><i
                                            class="fa-brands fa-instagram"></i></a>
                                    <a href="#" class="text-white opacity-75 fs-5"><i
                                            class="fa-brands fa-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 col-xl-8">
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif

                        <div class="form-area">
                            <span class="section-tag">{{ __('contact.form_tag') }}</span>
                            <h2 class="fw-bold mb-4">{{ __('contact.form_title') }}</h2>

                            <form action="{{ route('contact.send') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="text" name="website" style="display:none">

                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <label class="form-label">{{ __('contact.name_label') }}</label>
                                        <input type="text" name="name" class="form-control"
                                            placeholder="{{ __('contact.name_placeholder') }}" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">{{ __('contact.email_label') }}</label>
                                        <input type="email" name="email" class="form-control"
                                            placeholder="{{ __('contact.email_placeholder') }}" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">{{ __('contact.phone_label') }}</label>
                                        <input type="text" name="phone" class="form-control"
                                            placeholder="+62 812 3456 7890">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">{{ __('contact.subject_label') }}</label>
                                        <select name="subject" class="form-select" required>
                                            <option disabled selected>{{ __('contact.subject_placeholder') }}</option>
                                            <option>{{ __('contact.subject_company') }}</option>
                                            <option>{{ __('contact.subject_consultation') }}</option>
                                        </select>
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label">{{ __('contact.message_label') }}</label>
                                        <textarea name="message" rows="8" class="form-control" required
                                            placeholder="{{ __('contact.message_placeholder') }}"></textarea>
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label">{{ __('contact.attachment_label') }}</label>
                                        <input type="file" name="attachment" class="form-control">
                                    </div>

                                    <div class="g-recaptcha" data-sitekey="6Ldxb5QsAAAAAMCjqWnOcbzik0QQ6PJFaVZxpSDk">
                                    </div>

                                    <div class="col-12 mt-4">
                                        <button type="submit" class="btn btn-send w-100">{{ __('contact.submit_button') }} 🚀</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- ======================
        MAP SECTION
    ====================== --}}
    <section class="map-section py-5 bg-sky-blue reveal">
        <div class="container-fluid px-4 px-lg-5 py-lg-5 reveal">

            <div class="section-separator mb-4 reveal">
                <div class="separator-line"></div>
                <div class="separator-icon">
                    <i class="fa-solid fa-location-dot" style="font-size: 14px; color: var(--samsung-blue);"></i>
                </div>
                <div class="separator-line"></div>
            </div>

            <div class="map-card reveal">
                <iframe src="https://www.google.com/maps?q=PT+KPCM+Industrial+Estate+-6.2404597,106.8175674&output=embed"
                    width="100%" height="400" style="border:0; display:block;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </div>
    </section>

@endsection
