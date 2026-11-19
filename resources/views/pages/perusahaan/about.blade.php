
@extends('layouts.app')

@section('meta_title', __('general.seo.about_title'))
@section('meta_description', __('general.seo.about_desc'))

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@section('content')

    {{-- ============ HERO ============ --}}
    <section class="hero-section hero-page">

        <img
            src="{{ asset('images/hero/worker-meeting.webp') }}"
            class="hero-bg"
            alt="{{ __('about.hero_title') }}"
        >

        <div class="hero-overlay"></div>

        <div class="hero-text">
            <h1>{{ __('about.hero_title') }}</h1>
            <p>{{ __('about.hero_subtitle') }}</p>
        </div>

    </section>


    {{-- ============ WHO WE ARE ============ --}}
    <section class="section-padding">
        <div class="container-fluid px-4 px-lg-5">
            <div class="intro-grid">

                <div class="img-box reveal">
                    <img
                        src="{{ asset('images/about/office.webp') }}"
                        alt="{{ __('about.intro_image_alt') }}"
                        loading="lazy"
                    >
                </div>

                <div class="reveal">

                    <div class="section-label">
                        <span class="section-label-line"></span>
                        <span class="section-label-text">
                            {{ __('about.intro_label') }}
                        </span>
                    </div>

                    <h2>{{ __('about.intro_title') }}</h2>

<p>
    <strong>PT. KPCM Industrial Estate</strong>{{ app()->getLocale() === 'ko' ? '는 ' : ', ' }}{{ __('about.intro_content_1') }}
</p>

                    <p>
                        {{ __('about.intro_content_2') }}
                    </p>

                </div>

            </div>
        </div>
    </section>


    {{-- ============ VISION & MISSION ============ --}}
    <section class="section-padding section-alt">
        <div class="container-fluid px-4 px-lg-5">
            <div class="grid-2">

                {{-- VISION --}}
                <div class="card-surface card-mini reveal">

                    <i class="bi bi-eye"></i>

                    <h3>{{ __('about.vision_title') }}</h3>

                    <p>
                        {{ __('about.vision_desc') }}
                    </p>

                </div>

                {{-- MISSION --}}
                <div class="card-surface card-mini reveal">

                    <i class="bi bi-flag"></i>

                    <h3>{{ __('about.mission_title') }}</h3>

                    <p>
                        {{ __('about.mission_desc') }}
                    </p>

                </div>

            </div>
        </div>
    </section>


    {{-- ============ CORE VALUES ============ --}}
    <section class="section-padding">
        <div class="container-fluid px-4 px-lg-5">

            <div class="section-heading reveal">

                <div class="section-label">
                    <span class="section-label-line"></span>
                    <span class="section-label-text">
                        {{ __('about.values_label') }}
                    </span>
                </div>

                <h2>{{ __('about.values_title') }}</h2>

            </div>

            <div class="grid-4">

                {{-- INTEGRITY --}}
                <div class="card-surface card-mini reveal">

                    <i class="bi bi-shield-check"></i>

                    <h3>{{ __('about.integrity_title') }}</h3>

                    <p>
                        {{ __('about.integrity_desc') }}
                    </p>

                </div>

                {{-- COLLABORATION --}}
                <div class="card-surface card-mini reveal">

                    <i class="bi bi-people-fill"></i>

                    <h3>{{ __('about.collaboration_title') }}</h3>

                    <p>
                        {{ __('about.collaboration_desc') }}
                    </p>

                </div>

                {{-- INNOVATION --}}
                <div class="card-surface card-mini reveal">

                    <i class="bi bi-lightbulb-fill"></i>

                    <h3>{{ __('about.innovation_title') }}</h3>

                    <p>
                        {{ __('about.innovation_desc') }}
                    </p>

                </div>

                {{-- HARMONY --}}
                <div class="card-surface card-mini reveal">

                    <i class="bi bi-heart-fill"></i>

                    <h3>{{ __('about.harmony_title') }}</h3>

                    <p>
                        {{ __('about.harmony_desc') }}
                    </p>

                </div>

            </div>
        </div>
    </section>


    {{-- ============ WHO WE SERVE / HOW WE WORK ============ --}}
    <section class="section-padding section-alt">
        <div class="container-fluid px-4 px-lg-5">
            <div class="work-grid">

                {{-- WHO WE SERVE --}}
                <div class="card-surface work-box reveal">

                    <div class="section-label">
                        <span class="section-label-line"></span>
                        <span class="section-label-text">
                            {{ __('about.serve_label') }}
                        </span>
                    </div>

                    <h3>{{ __('about.serve_title') }}</h3>

                    <p>
                        {{ __('about.serve_desc') }}
                    </p>

                </div>

                {{-- HOW WE WORK --}}
                <div class="card-surface work-box reveal">

                    <div class="section-label">
                        <span class="section-label-line"></span>
                        <span class="section-label-text">
                            {{ __('about.work_label') }}
                        </span>
                    </div>

                    <h3>{{ __('about.work_title') }}</h3>

                    <p>
                        {{ __('about.work_desc') }}
                    </p>

                </div>

            </div>
        </div>
    </section>

@endsection


@push('scripts')
    <script src="{{ asset('js/about.js') }}"></script>
@endpush
