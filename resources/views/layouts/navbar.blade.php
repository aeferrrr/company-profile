<nav class="navbar navbar-expand-lg navbar-dark navbar-corporate fixed-top">
    <div class="container">

        <!-- BRAND -->
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="{{ asset('images/logo-company.png') }}" alt="KPCM Logo">
            <span class="ms-2 fw-semibold text-uppercase">
                KPCM Industrial Estate
            </span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCorporate">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCorporate">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-3 text-uppercase fw-semibold small">

                <li class="nav-item">
                    <a class="nav-link" href="/">{{ __('general.home') }}</a>
                </li>
                {{-- Perusahaan --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        {{ __('general.perusahaan') }}
                    </a>

                    <ul class="dropdown-menu shadow-sm">
                        <li>
                            <a class="dropdown-item" href="/about">
                                {{ __('general.about') }}
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/organization">
                                {{ __('general.organisasi') }}
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Services --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#services" data-bs-toggle="dropdown">
                        {{ __('general.services') }}
                    </a>
                    <ul class="dropdown-menu shadow-sm">
                        <li><a class="dropdown-item" href="/services">{{ __('general.allservices') }}</a></li>

                        <li><a class="dropdown-item" href="/services/construction">Construction & Management</a></li>
                        <li><a class="dropdown-item" href="#services">Warehouse</a></li>
                        <li><a class="dropdown-item" href="#services">Mechanical & Piping</a></li>
                        <li><a class="dropdown-item" href="#services">Walling & APC</a></li>
                        <li><a class="dropdown-item" href="#services">Epoxy & Concrete Polishing</a></li>
                        <li><a class="dropdown-item" href="#services">Roofing</a></li>

                        <!-- TAMBAHAN -->
                        <li><a class="dropdown-item" href="#services">Panel Construction</a></li>
                        <li><a class="dropdown-item" href="#services">Road Work</a></li>
                        <li><a class="dropdown-item" href="#services">Landscape Work</a></li>
                        <li><a class="dropdown-item" href="#services">Interior & Revamping</a></li>
                        <li><a class="dropdown-item" href="#services">Temporary Office & Speed Door</a></li>
                        <li><a class="dropdown-item" href="#services">Electrical</a></li>
                    </ul>

                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/projects">{{ __('general.projects') }}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/contact">{{ __('general.contact') }}</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        🌐 {{ strtoupper(app()->getLocale()) }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="{{ route('lang.switch', 'en') }}">
                                English
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('lang.switch', 'id') }}">
                                Bahasa Indonesia
                            </a>
                        </li>
                    </ul>
                </li>


            </ul>
        </div>
    </div>
</nav>
