<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Meta Tags Dinamis dengan Default dari File Bahasa --}}
    <title>@yield('meta_title', __('general.seo.default_title'))</title>
    <meta name="description" content="@yield('meta_description', __('general.seo.default_desc'))">

    <meta property="og:title" content="@yield('meta_title', __('general.seo.default_title'))">
    <meta property="og:description" content="@yield('meta_description', __('general.seo.default_desc'))">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    {{-- Font Poppins --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    {{-- Boostrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!--CSS -->
    {{-- GLOBAL --}}
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    {{-- FOOTER --}}
    <link rel="stylesheet" href="{{ asset('css/layout/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layout/footer.css') }}">
    {{-- HOME --}}
    <link rel="stylesheet" href="{{ asset('css/home/clients.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/hero.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/service.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/video.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/greeting.css') }}">
    {{-- PERUSAHAAN --}}
    <link rel="stylesheet" href="{{ asset('css/perusahaan/organization.css') }}">
    <link rel="stylesheet" href="{{ asset('css/perusahaan/perusahaan.css') }}">
    {{-- PERUSAHAAN --}}
    <link rel="stylesheet" href="{{ asset('css/services/services.css') }}">
    {{-- Project --}}
    <link rel="stylesheet" href="{{ asset('css/projects/project.css') }}">
    {{-- CONTACT --}}
    <link rel="stylesheet" href="{{ asset('css//contact/contactus.css') }}">


    <!-- Favicon Standard -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="192x192">

    <!-- PNG fallback -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">

    <!-- Apple -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">

    {{-- JavaScript --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>

<body>

    {{-- Navbar --}}
    @include('layouts.navbar')
    @if (session('success'))
        <div class="alert alert-success alert-animate">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    {{-- main Konten --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('layouts.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/lenis@1.0.45/dist/lenis.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/project.js') }}"></script>
    <script src="{{ asset('js/organization.js') }}"></script>
    <script>
        function openService(evt, serviceName) {
            // 1. Sembunyikan semua konten
            var content = document.getElementsByClassName("service-content");
            for (var i = 0; i < content.length; i++) {
                content[i].style.display = "none";
                content[i].classList.remove("active");
            }

            // 2. Matikan semua tombol aktif
            var buttons = document.getElementsByClassName("service-btn");
            for (var i = 0; i < buttons.length; i++) {
                buttons[i].classList.remove("active");
            }

            // 3. Nyalakan yang dipilih
            document.getElementById(serviceName).style.display = "block";
            // Timeout kecil agar animasi CSS sempat berjalan
            setTimeout(function() {
                document.getElementById(serviceName).classList.add("active");
            }, 10);

            evt.currentTarget.classList.add("active");
        }
    </script>

    <script>
        // Inisialisasi Lenis
        const lenis = new Lenis({
            duration: 1.2, // Durasi kelicinan (semakin besar semakin licin/lambat)
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)), // Efek fisika
            direction: 'vertical',
            gestureDirection: 'vertical',
            smooth: true,
            mouseMultiplier: 1, // Sensitivitas scroll mouse
            smoothTouch: false, // Matikan di HP (biarkan native HP yang handle)
            touchMultiplier: 2,
        });

        // Jalankan Loop Animasi
        function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
        }

        requestAnimationFrame(raf);

        // Opsional: Sambungkan dengan anchor links (agar klik menu tetap smooth)
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                lenis.scrollTo(this.getAttribute('href'));
            });
        });
    </script>
    @stack('scripts')
</body>

</html>
