<section id="services" class="services-highlight py-5 bg-white">
    <div class="container">

        <div class="text-center mb-5" data-aos="fade-up">
            <h6 class="text-primary fw-bold text-uppercase ls-2">
                {{ __('messages.services.subtitle') }}
            </h6>
            <h2 class="fw-bold display-5">
                {{ __('messages.services.title') }}
            </h2>
            <p class="text-muted mt-2 mx-auto" style="max-width: 600px;">
                {{ __('messages.services.desc') }}
            </p>
        </div>

        <div class="row g-0 shadow-lg rounded-4 overflow-hidden bg-white">
            <div class="col-lg-4 bg-white border-end position-relative">
                <div class="service-tabs d-flex flex-column h-100 p-4">

                    {{-- Service 1: Epoxy --}}
                    <button class="service-btn active mb-3" onclick="openService(event, 'service1')">
                        <div class="d-flex align-items-center">
                            <div class="icon-box me-3">
                                <i class="fas fa-paint-roller"></i>
                            </div>
                            <div class="text-start">
                                <h6 class="mb-0 fw-bold">{{ __('messages.services.epoxy_name') }}</h6>
                                <small class="text-muted">{{ __('messages.services.epoxy_sub') }}</small>
                            </div>
                        </div>
                    </button>

                    {{-- Service 2: Roofing --}}
                    <button class="service-btn mb-3" onclick="openService(event, 'service2')">
                        <div class="d-flex align-items-center">
                            <div class="icon-box me-3">
                                <i class="fas fa-home"></i>
                            </div>
                            <div class="text-start">
                                <h6 class="mb-0 fw-bold">{{ __('messages.services.roofing_name') }}</h6>
                                <small class="text-muted">{{ __('messages.services.roofing_sub') }}</small>
                            </div>
                        </div>
                    </button>

                    {{-- Service 3: Interior --}}
                    <button class="service-btn mb-3" onclick="openService(event, 'service3')">
                        <div class="d-flex align-items-center">
                            <div class="icon-box me-3">
                                <i class="fas fa-couch"></i>
                            </div>
                            <div class="text-start">
                                <h6 class="mb-0 fw-bold">{{ __('messages.services.interior_name') }}</h6>
                                <small class="text-muted">{{ __('messages.services.interior_sub') }}</small>
                            </div>
                        </div>
                    </button>

                    {{-- Service 4: Management --}}
                    <button class="service-btn" onclick="openService(event, 'service4')">
                        <div class="d-flex align-items-center">
                            <div class="icon-box me-3">
                                <i class="fas fa-hard-hat"></i>
                            </div>
                            <div class="text-start">
                                <h6 class="mb-0 fw-bold">{{ __('messages.services.mgmt_name') }}</h6>
                                <small class="text-muted">{{ __('messages.services.mgmt_sub') }}</small>
                            </div>
                        </div>
                    </button>

                    <div class="mt-auto pt-4">
                        <a href="{{ route('services') }}" class="btn btn-primary w-100 py-2 rounded-pill fw-bold">
                            {{ __('messages.services.button') }} <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 position-relative bg-dark">

                {{-- Content 1 --}}
                <div id="service1" class="service-content active">
                    <img src="{{ asset('images/background/1.jpg') }}" alt="Epoxy" class="service-bg-img">
                    <div class="service-overlay p-5 d-flex flex-column justify-content-end h-100">
                        <h3 class="text-white fw-bold mb-3">{{ __('messages.services.epoxy_name') }}</h3>
                        <p class="text-white-50 fs-5">
                            {{ __('messages.services.epoxy_desc') }}
                        </p>
                    </div>
                </div>

                {{-- Content 2 --}}
                <div id="service2" class="service-content">
                    <img src="{{ asset('images/background/2.jpg') }}" alt="Roofing" class="service-bg-img">
                    <div class="service-overlay p-5 d-flex flex-column justify-content-end h-100">
                        <h3 class="text-white fw-bold mb-3">{{ __('messages.services.roofing_name') }}</h3>
                        <p class="text-white-50 fs-5">
                            {{ __('messages.services.roofing_desc') }}
                        </p>
                    </div>
                </div>

                {{-- Content 3 --}}
                <div id="service3" class="service-content">
                    <img src="{{ asset('images/background/3.jpg') }}" alt="Interior" class="service-bg-img">
                    <div class="service-overlay p-5 d-flex flex-column justify-content-end h-100">
                        <h3 class="text-white fw-bold mb-3">{{ __('messages.services.interior_name') }}</h3>
                        <p class="text-white-50 fs-5">
                            {{ __('messages.services.interior_desc') }}
                        </p>
                    </div>
                </div>

                {{-- Content 4 --}}
                <div id="service4" class="service-content">
                    <img src="{{ asset('images/background/4.jpg') }}" alt="Management" class="service-bg-img">
                    <div class="service-overlay p-5 d-flex flex-column justify-content-end h-100">
                        <h3 class="text-white fw-bold mb-3">{{ __('messages.services.mgmt_name') }}</h3>
                        <p class="text-white-50 fs-5">
                            {{ __('messages.services.mgmt_desc') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>