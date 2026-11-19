
<nav class="navbar navbar-expand-lg navbar-dark navbar-corporate fixed-top">
    <div class="container">

        {{-- BRAND --}}
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
            <img src="{{ asset('images/logo-company.png') }}" alt="KPCM Logo">
            <span class="ms-2 fw-semibold text-uppercase">
                PT. KPCM Industrial Estate
            </span>
        </a>

        {{-- MOBILE TOGGLER --}}
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCorporate"
            aria-controls="navbarCorporate"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCorporate">

            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-3 text-uppercase fw-semibold small">

                {{-- BERANDA --}}
                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                        href="{{ route('home') }}"
                    >
                        {{ __('general.home') }}
                    </a>
                </li>

                {{-- PERUSAHAAN --}}
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle {{ request()->routeIs('about', 'organization') ? 'active' : '' }}"
                        href="#"
                        id="companyDropdown"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        {{ __('general.perusahaan') }}
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="companyDropdown">
                        <li>
                            <a
                                class="dropdown-item {{ request()->routeIs('about') ? 'active' : '' }}"
                                href="{{ route('about') }}"
                            >
                                {{ __('general.about') }}
                            </a>
                        </li>

                        <li>
                            <a
                                class="dropdown-item {{ request()->routeIs('organization') ? 'active' : '' }}"
                                href="{{ route('organization') }}"
                            >
                                {{ __('general.organisasi') }}
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- LAYANAN & PROYEK --}}
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle {{ request()->routeIs('services', 'projects') ? 'active' : '' }}"
                        href="#"
                        id="servicesProjectsDropdown"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        {{ __('general.services') }} &amp; {{ __('general.projects') }}
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="servicesProjectsDropdown">
                        <li>
                            <a
                                class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}"
                                href="{{ route('services') }}"
                            >
                                {{ __('general.services') }}
                            </a>
                        </li>

                        <li>
                            <a
                                class="dropdown-item {{ request()->routeIs('projects') ? 'active' : '' }}"
                                href="{{ route('projects') }}"
                            >
                                {{ __('general.projects') }}
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- KPC INDONESIA --}}
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle {{ request()->routeIs('kpc') ? 'active' : '' }}"
                        href="#"
                        id="kpcDropdown"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        {{ __('general.kpc_name') }}
                        <span class="badge badge-new ms-1">
                            {{ __('general.kpc_new') }}
                        </span>
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="kpcDropdown">

                        <li>
                            <a class="dropdown-item" href="{{ route('kpc') }}">
                                {{ __('general.kpc_overview') }}
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

                        {{-- SUBMENU LAYANAN KPC --}}
                        <li class="dropdown-submenu">
                            <a
                                class="dropdown-item submenu-toggle"
                                href="{{ route('kpc') }}#layanan"
                                aria-expanded="false"
                            >
                                {{ __('general.kpc_services') }}
                                <span class="submenu-arrow" aria-hidden="true">›</span>
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="{{ route('kpc') }}#svc-consulting">
                                        {{ __('general.kpc_consulting') }}
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('kpc') }}#svc-training">
                                        {{ __('general.kpc_industrial_training') }}
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('kpc') }}#svc-investment">
                                        {{ __('general.kpc_investment') }}
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('kpc') }}#svc-iso">
                                        {{ __('general.kpc_iso') }}
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('kpc') }}#svc-tax">
                                        {{ __('general.kpc_tax') }}
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('kpc') }}#svc-halal">
                                        {{ __('general.kpc_halal') }}
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

                {{-- KONTAK --}}
                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                        href="{{ route('contact') }}"
                    >
                        {{ __('general.contact') }}
                    </a>
                </li>

                {{-- BAHASA --}}
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        id="languageDropdown"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        🌐 {{ strtoupper(app()->getLocale()) }}
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown">
                        <li>
                            <a
                                class="dropdown-item {{ app()->getLocale() === 'en' ? 'active' : '' }}"
                                href="{{ route('lang.switch', 'en') }}"
                            >
                                🇺🇸 English
                            </a>
                        </li>

                        <li>
                            <a
                                class="dropdown-item {{ app()->getLocale() === 'id' ? 'active' : '' }}"
                                href="{{ route('lang.switch', 'id') }}"
                            >
                                🇮🇩 Bahasa Indonesia
                            </a>
                        </li>

                        <li>
                            <a
                                class="dropdown-item {{ app()->getLocale() === 'ko' ? 'active' : '' }}"
                                href="{{ route('lang.switch', 'ko') }}"
                            >
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

    let lastScrollTop = Math.max(0, window.scrollY);
    let ticking = false;

    const scrollThreshold = 100;
    const scrollTolerance = 6;

    function updateNavbar() {
        const scrollTop = Math.max(0, window.scrollY);

        const menuIsActive =
            !!navbar.querySelector('.dropdown-menu.show') ||
            !!navbar.querySelector('.navbar-collapse.show') ||
            navbar.contains(document.activeElement) ||
            navbar.matches(':hover');

        navbar.classList.toggle('navbar-scrolled', scrollTop > 40);

        if (menuIsActive) {
            navbar.classList.remove('navbar-hidden');
        } else {
            const difference = scrollTop - lastScrollTop;

            if (scrollTop > scrollThreshold && difference > scrollTolerance) {
                navbar.classList.add('navbar-hidden');
            } else if (difference < -scrollTolerance || scrollTop <= scrollThreshold) {
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

    navbar.addEventListener('show.bs.dropdown', function () {
        navbar.classList.remove('navbar-hidden');
    });

    navbar.addEventListener('show.bs.collapse', function () {
        navbar.classList.remove('navbar-hidden');
    });

    navbar.addEventListener('focusin', function () {
        navbar.classList.remove('navbar-hidden');
    });

    // Submenu KPC: tap untuk membuka di mobile
    navbar.querySelectorAll('.submenu-toggle').forEach(function (toggle) {
        toggle.addEventListener('click', function (event) {
            if (window.innerWidth >= 992) return;

            const submenu = toggle.closest('.dropdown-submenu');
            if (!submenu) return;

            event.preventDefault();
            event.stopPropagation();

            const isOpen = submenu.classList.toggle('submenu-open');
            toggle.setAttribute('aria-expanded', String(isOpen));
        });
    });

    // Reset submenu ketika dropdown KPC ditutup
    navbar.addEventListener('hidden.bs.dropdown', function (event) {
        const parent = event.target.closest('.nav-item.dropdown');
        if (!parent) return;

        parent.querySelectorAll('.dropdown-submenu').forEach(function (submenu) {
            submenu.classList.remove('submenu-open');

            const toggle = submenu.querySelector('.submenu-toggle');
            if (toggle) {
                toggle.setAttribute('aria-expanded', 'false');
            }
        });
    });

    updateNavbar();
});
</script>
