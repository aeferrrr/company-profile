<nav class="navbar navbar-expand-lg navbar-dark navbar-corporate fixed-top">
    <div class="container">

        <!-- BRAND -->
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">

            <img src="{{ asset('images/logo-company.png') }}" alt="KPCM Logo">
            <span class="ms-2 fw-semibold text-uppercase">
                PT. KPCM Industrial Estate
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
                        {{-- <li>
                            <a class="dropdown-item" href="{{ route('anotherbiz') }}">
                                ID-KOR Global Trading (Soon)
                            </a>
                        </li> --}}
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


{{-- ===== KPC INDONESIA ===== --}}
<li class="nav-item dropdown kpc-nav-item">

    <a
        class="nav-link dropdown-toggle {{ request()->routeIs('kpc') ? 'active' : '' }}"
        href="{{ route('kpc') }}"
        id="kpcDropdown"
        role="button"
        data-bs-toggle="dropdown"
        aria-expanded="false"
    >
        {{ __('general.kpc') }}
        <span class="badge badge-new ms-1">
            {{ __('general.new') }}
        </span>
    </a>

    <ul class="dropdown-menu dropdown-menu-kpc shadow-sm"
        aria-labelledby="kpcDropdown">

        <li>
            <a class="dropdown-item fw-bold" href="{{ route('kpc') }}">
                KPC Indonesia Overview
            </a>
        </li>

        <li><hr class="dropdown-divider"></li>

        <li>
            <h6 class="dropdown-header">
                {{ __('general.kpc_desc') }}
            </h6>
        </li>

        <li>
            <a class="dropdown-item" href="{{ route('kpc') }}#tentang">
                {{ __('general.kpc_about') }}
            </a>
        </li>

        <li class="dropdown-submenu">
            <a class="dropdown-item d-flex justify-content-between align-items-center"
               href="{{ route('kpc') }}#layanan">
                {{ __('general.kpc_services') }}
                <span aria-hidden="true">&rsaquo;</span>
            </a>

            <ul class="dropdown-menu shadow-sm">
                <li>
                    <a class="dropdown-item" href="{{ route('kpc') }}#svc-consulting">
                        Management Consulting
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route('kpc') }}#svc-training">
                        Industrial Training & Education
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route('kpc') }}#svc-investment">
                        Investment Service
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route('kpc') }}#svc-iso">
                        ISO Consulting
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route('kpc') }}#svc-tax">
                        Tax & Legal
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route('kpc') }}#svc-halal">
                        Halal Certification
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a class="dropdown-item" href="{{ route('kpc') }}#pelatihan">
                {{ __('general.kpc_training') }}
            </a>
        </li>

        <li>
            <a class="dropdown-item" href="{{ route('kpc') }}#sejarah">
                {{ __('general.kpc_history') }}
            </a>
        </li>

        <li>
            <a class="dropdown-item" href="{{ route('kpc') }}#pimpinan">
                {{ __('general.kpc_leader') }}
            </a>
        </li>

        <li>
            <a class="dropdown-item" href="{{ route('kpc') }}#kontak">
                {{ __('general.kpc_contact') }}
            </a>
        </li>
    </ul>
</li>
{{-- ===== END KPC INDONESIA ===== --}}


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
                        <li>
                            <a class="dropdown-item {{ app()->getLocale() == 'ko' ? 'active' : '' }}"
                                href="{{ route('lang.switch', 'ko') }}">
                                🇰🇷 한국어 (Korean)
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>


<script>
document.addEventListener('DOMContentLoaded', function () {

    const navbar = document.querySelector('.navbar-corporate');

    if (!navbar) return;

    let lastScrollTop = window.scrollY;
    let ticking = false;

    const scrollThreshold = 100;
    const scrollTolerance = 6;

    function updateNavbar() {

        const scrollTop = Math.max(0, window.scrollY);

        const dropdownOpen = navbar.querySelector('.dropdown-menu.show');
        const mobileMenuOpen = navbar.querySelector('.navbar-collapse.show');
        const navbarFocused = navbar.contains(document.activeElement);
        const navbarHovered = navbar.matches(':hover');

        const menuIsActive =
            dropdownOpen ||
            mobileMenuOpen ||
            navbarFocused ||
            navbarHovered;

        // Background solid saat scroll
        navbar.classList.toggle(
            'navbar-scrolled',
            scrollTop > 40
        );

        // Selalu tampil ketika menu sedang digunakan
        if (menuIsActive) {
            navbar.classList.remove('navbar-hidden');
        } else {

            const scrollDifference = scrollTop - lastScrollTop;

            if (
                scrollTop > scrollThreshold &&
                scrollDifference > scrollTolerance
            ) {
                navbar.classList.add('navbar-hidden');
            }

            if (
                scrollDifference < -scrollTolerance ||
                scrollTop <= scrollThreshold
            ) {
                navbar.classList.remove('navbar-hidden');
            }
        }

        lastScrollTop = scrollTop;
        ticking = false;
    }

    window.addEventListener('scroll', function () {

        if (!ticking) {
            window.requestAnimationFrame(updateNavbar);
            ticking = true;
        }

    }, { passive: true });

    // Navbar muncul saat dropdown dibuka
    navbar.addEventListener('show.bs.dropdown', function () {
        navbar.classList.remove('navbar-hidden');
    });

    // Navbar muncul saat mobile menu dibuka
    navbar.addEventListener('show.bs.collapse', function () {
        navbar.classList.remove('navbar-hidden');
    });

    // Tampilkan navbar saat fokus keyboard masuk
    navbar.addEventListener('focusin', function () {
        navbar.classList.remove('navbar-hidden');
    });

    // Initial state
    updateNavbar();

});
</script>
