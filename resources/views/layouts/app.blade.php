<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>KPCM Industrial Estate</title>
    {{-- Font Poppins --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    {{-- Boostrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!--CSS -->
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/page.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contactus.css') }}">
    <link rel="stylesheet" href="{{ asset('css/perusahaan.css') }}">
    <link rel="stylesheet" href="{{ asset('css/project.css') }}">
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hero.css') }}">
    <link rel="stylesheet" href="{{ asset('css/organization.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/kpcm.ico') }}">


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
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/vidio.js') }}"></script>
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
</body>

</html>
