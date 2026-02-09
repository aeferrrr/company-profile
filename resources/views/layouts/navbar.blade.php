<nav class="navbar navbar-expand-lg navbar-dark navbar-corporate fixed-top">
    <div class="container">

        <!-- BRAND -->
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">

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
                    <a class="nav-link" href="{{ route('home') }}">
                        {{ __('general.home') }}
                    </a>
                </li>
                {{-- Perusahaan --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        {{ __('general.perusahaan') }}
                    </a>
                    <ul class="dropdown-menu shadow-sm">
                        <li>
                            <a class="dropdown-item" href="{{ route('about') }}">
                                {{ __('general.about') }}
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('organization') }}">
                                {{ __('general.organisasi') }}
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('anotherbiz') }}">
                                ID-KOR Global Trading (Soon)
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Services
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('services') }}" data-bs-toggle="dropdown">
                        {{ __('general.services') }}
                    </a>
                    <ul class="dropdown-menu shadow-sm">
                        <li><a class="dropdown-item" href="{{ route('services') }}">
                                {{ __('general.allservices') }}
                            </a></li>
                        <li><a class="dropdown-item" href="{{ route('construction') }}">
                                Construction & Management
                            </a></li>
                        <li><a class="dropdown-item" href="{{ route('warehouse') }}">
                                Warehouse
                            </a></li>
                        <li><a class="dropdown-item" href="{{ route('piping') }}">Mechanical & Piping</a></li>
                        <li><a class="dropdown-item" href="{{ route('walling') }}">Walling & APC</a></li>
                        <li><a class="dropdown-item" href="{{ route('epoxy') }}">Epoxy & Concrete Polishing</a></li>
                        <li><a class="dropdown-item" href="{{ route('roofing') }}">Roofing</a></li>
                        <li><a class="dropdown-item" href="{{ route('panel') }}">Panel Construction</a></li>
                        <li><a class="dropdown-item" href="{{ route('road') }}">Road Work</a></li>
                        <li><a class="dropdown-item" href="{{ route('landscape') }}">Landscape Work</a></li>
                        <li><a class="dropdown-item" href="{{ route('interior') }}">Interior & Revamping</a></li>
                        <li><a class="dropdown-item" href="{{ route('temporary') }}">Temporary Office </a></li>
                        <li><a class="dropdown-item" href="{{ route('electrical') }}">Electrical</a></li>
                        <li><a class="dropdown-item" href="{{ route('door') }}">Speed Door</a></li>
                    </ul>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('services') }}">{{ __('general.services') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('projects') }}">{{ __('general.projects') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">{{ __('general.contact') }}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        🌐 {{ strtoupper(app()->getLocale()) }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item {{ app()->getLocale() == 'en' ? 'active' : '' }}"
                                href="{{ route('lang.switch', 'en') }}">
                                🇺🇸 English
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ app()->getLocale() == 'id' ? 'active' : '' }}"
                                href="{{ route('lang.switch', 'id') }}">
                                🇮🇩 Bahasa Indonesia
                            </a>
                        </li>
                        {{-- <li>
                            <a class="dropdown-item {{ app()->getLocale() == 'ko' ? 'active' : '' }}"
                                href="{{ route('lang.switch', 'ko') }}">
                                🇰🇷 한국어 (Korean)
                            </a>
                        </li> --}}
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    let lastScrollTop = 0;
    const navbar = document.querySelector('.navbar-corporate');
    const scrollThreshold = 100; // Jarak scroll sebelum efek mulai aktif

    window.addEventListener('scroll', function() {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        // 1. Logika Hilang/Muncul
        if (scrollTop > lastScrollTop && scrollTop > scrollThreshold) {
            // Scroll ke BAWAH -> Sembunyikan Navbar
            navbar.classList.add('navbar-hidden');
            // Hapus efek background solid saat disembunyikan (opsional)
            navbar.classList.remove('navbar-scrolled');
        } else {
            // Scroll ke ATAS -> Munculkan Navbar
            navbar.classList.remove('navbar-hidden');

            // Tambahkan efek background solid jika tidak di paling atas
            if (scrollTop > 50) {
                navbar.classList.add('navbar-scrolled');
            } else {
                navbar.classList.remove('navbar-scrolled');
            }
        }

        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // For Mobile or negative scrolling
    }, false);
</script>
