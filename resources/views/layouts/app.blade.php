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
    <!--CSS -->
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/page.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="{{ asset('images/kpcm.ico') }}" type="image/x-icon">

    <style>
        body {
            padding-top: 90px;
            /* sesuaikan tinggi navbar */
        }
    </style>
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
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const alertBox = document.getElementById('successAlert');

        if (alertBox) {
            alertBox.classList.add('show-animate');

            // auto close after 4 seconds
            setTimeout(() => {
                alertBox.classList.remove('show-animate');
                alertBox.style.display = 'none';
            }, 4000);
        }
    });
</script>

</html>
