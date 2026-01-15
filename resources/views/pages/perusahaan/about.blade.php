@extends('layouts.app')

@section('title', 'About Us | KPCM Industrial Estate')

@section('content')

{{-- ======================
   ABOUT HERO (FULL WIDTH)
====================== --}}
<section class="hero-section hero-about">

    {{-- Background Image --}}
    <img src="{{ asset('images/background-senja.png') }}"
         class="hero-bg"
         alt="About KPCM Industrial Estate">

    {{-- Overlay --}}
    <div class="hero-overlay"></div>

    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">About Us</h1>
            <p class="hero-subtitle">
                Building Industrial Excellence with Professional Integrity
            </p>
        </div>
    </div>

</section>


    {{-- ======================
    ABOUT INTRO
    ====================== --}}
    <section class="about-intro">
        <div class="container">
            <h2>About KPCM Industrial Estate</h2>

            <div class="row mt-4">
                <div class="col-lg-6">
                    <p class="text-justify">
                        <strong>PT KPCM Industrial Estate</strong> "Di tengah dinamika pasar global yang terus berubah, KPCM hadir sebagai mitra strategis yang berdedikasi untuk membantu perusahaan melampaui batas-batas konvensional. Saat ini, kami aktif menyelenggarakan berbagai layanan komprehensif yang dirancang khusus untuk mempercepat upaya globalisasi dan mendorong gerakan inovasi manajemen terbaru. 
                    </p>
                </div>
                <div class="col-lg-6">
                    <p class="text-justify">
                        Kami percaya bahwa transformasi yang berkelanjutan adalah kunci utama bagi dunia usaha untuk tidak hanya bertahan, tetapi juga tampil sebagai pemimpin dalam menjawab tantangan serta peluang kompleks di abad ke-21.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ======================
   IMAGE DIVIDER (FULL WIDTH)
====================== --}}
    <section class="about-image-divider">
        <img src="/images/separator_about.jpg" alt="Industrial Landscape">
    </section>

    {{-- ======================
   VISION & MISSION (OFFSET LAYOUT)
====================== --}}
    <section class="vision-mission-offset">
        <div class="container">

            <!-- Vision -->
            <div class="vm-row vm-left">
                <div class="vm-box">
                    <div class="vm-header">
                        <i class="bi bi-eye"></i>
                        <h3>Vision</h3>
                    </div>
                    <p class="text-justify">
                        A High-Quality and Profitable Development Company Dedicated to Delivering Sustainable,
                        Efficient, and Innovative Industrial Solutions, Creating Long-Term Value for Clients,
                        Partners, and the Industries We Serve.
                    </p>
                </div>
            </div>

            <!-- Mission -->
            <div class="vm-row vm-right">
                <div class="vm-box">
                    <div class="vm-header">
                        <i class="bi bi-flag"></i>
                        <h3>Mission</h3>
                    </div class="text-justify">
                    <p>
                        To provide effective, competitive, result-oriented, and practical business solutions
                        that optimize operational efficiency and maximize return on investment.
                    </p>
                </div>
            </div>

        </div>
    </section>



@endsection
