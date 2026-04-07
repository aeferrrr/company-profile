@extends('layouts.app')

@section('meta_title', __('general.seo.contact_title'))
@section('meta_description', __('general.seo.contact_desc'))

@section('content')

    {{-- ======================
        CONTACT HERO
    ====================== --}}
    <section class="hero-section hero-contact">
        <img src="{{ asset('/images/hero/engineer-working.webp') }}" class="hero-bg" alt="{{ __('contact.hero_title') }}">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="hero-content text-center">
                <h1 class="hero-title">{{ __('contact.hero_title') }}</h1>
                <p class="hero-subtitle">{{ __('contact.hero_subtitle') }}</p>
            </div>
        </div>
    </section>

    {{-- ======================
        KPCM LOUNGE SECTION
    ====================== --}}
    {{-- PERUBAHAN DI SINI: Ganti 'bg-white' menjadi 'bg-sky-blue' --}}
    <section class="lounge-section bg-sky-blue py-5">

        {{-- SEPARATOR ATAS --}}
        <div class="section-separator mb-4">
            <div class="separator-line"></div>
            <div class="separator-icon">
                <i class="fa-solid fa-mug-hot" style="font-size: 14px; color: var(--samsung-blue);"></i>
            </div>
            <div class="separator-line"></div>
        </div>

        <div class="container">
            
            {{-- 3 KARTU STAGGERED --}}
            <div class="lounge-stage-wrap">
                <div class="lounge-cards-stage">
                    {{-- KARTU KIRI --}}
                    <div class="lounge-card-item card-left">
                        <div class="lc-bg" style="background-image: url('{{ asset('images/lounge/sofa.webp') }}');"></div>
                        <div class="lc-overlay"></div>
                        <span class="lc-label">Lounge & Sofa Area</span>
                    </div>

                    {{-- KARTU TENGAH --}}
                    <div class="lounge-card-item card-middle">
                        <div class="lc-bg" style="background-image: url('{{ asset('images/lounge/exterior.webp') }}');"></div>
                        <div class="lc-overlay"></div>
                        <span class="lc-label">Exterior & Networking</span>
                    </div>

                    {{-- KARTU KANAN --}}
                    <div class="lounge-card-item card-right">
                        <div class="lc-bg" style="background-image: url('{{ asset('images/lounge/bar.webp') }}');"></div>
                        <div class="lc-overlay"></div>
                        <span class="lc-label">Coffee & Bar</span>
                    </div>
                </div>
            </div>

            {{-- TEKS BAWAH --}}
            <div class="lounge-bottom-row mt-5">
                <div class="lounge-bottom-left">
                    <h2 class="lounge-main-title">KPCM Lounge,<br>Ruang Eksklusif<br>untuk Bisnis Anda</h2>
                </div>
                <div class="lounge-bottom-right">
                    <p class="lounge-main-desc">
                        Nikmati suasana eksklusif bersama tim kami.
                        KPCM Lounge hadir sebagai ruang terpilih untuk
                        pertemuan bisnis, konsultasi proyek, dan sesi
                        networking yang produktif.
                    </p>
                    <a href="#contact-form" class="lounge-cta-link">
                        Hubungi Kami <span class="lounge-cta-arrow">→</span>
                    </a>
                </div>
            </div>

        </div> 
    </section>

    {{-- ======================
        CONTACT SECTION
    ====================== --}}
    {{-- PERUBAHAN DI SINI: Ganti 'bg-light' menjadi 'bg-sky-blue' --}}
    <section id="contact-form" class="contact-section py-5 bg-sky-blue">
        <div class="container">
            
            {{-- SEPARATOR --}}
            <div class="section-separator mb-5">
                <div class="separator-line"></div>
                <div class="separator-icon">
                    <i class="fa-solid fa-headset" style="font-size: 14px; color: var(--samsung-blue);"></i>
                </div>
                <div class="separator-line"></div>
            </div>

            <div class="card-base main-card">
                <div class="row g-0">

                    <div class="col-lg-5 col-xl-4">
                        <div class="info-sidebar">
                            <h3 class="fw-bold mb-5 text-white">Saluran Komunikasi</h3>
                            {{-- ... isi sidebar tetap sama ... --}}
                            <div class="info-item">
                                <div class="info-icon"><i class="fa-solid fa-location-dot"></i></div>
                                <div class="info-text">
                                    <h6>Alamat Kantor</h6>
                                    <p>Gedung AKA Lt.9, Jl. Bangka Raya, Mampang Prapatan, Jakarta Selatan</p>
                                </div>
                            </div>
                            <div class="info-item">
                                <div class="info-icon"><i class="fa-solid fa-phone"></i></div>
                                <div class="info-text">
                                    <h6>Telepon & WA</h6>
                                    <p>+62 811-1966-903 (Mr. Han)<br>+62 813-7070-4904 (Adinda)</p>
                                </div>
                            </div>
                            <div class="info-item">
                                <div class="info-icon"><i class="fa-solid fa-envelope"></i></div>
                                <div class="info-text">
                                    <h6>Email Bisnis</h6>
                                    <p>kpcidhan@gmail.com<br>adinda.kpcm@gmail.com</p>
                                </div>
                            </div>
                            <div class="mt-5 pt-4 border-top border-secondary">
                                <h6 class="text-white opacity-50 small text-uppercase mb-3">Ikuti Kami</h6>
                                <div class="d-flex gap-3">
                                    <a href="#" class="text-white opacity-75 fs-5"><i class="fa-brands fa-linkedin"></i></a>
                                    <a href="#" class="text-white opacity-75 fs-5"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#" class="text-white opacity-75 fs-5"><i class="fa-brands fa-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 col-xl-8">
                        {{-- ... isi form area tetap sama ... --}}
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif

                        <div class="form-area">
                            <span class="section-tag">Formulir Kontak</span>
                            <h2 class="fw-bold mb-4">Kirim Pesan</h2>

                            <form action="{{ route('contact.send') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="text" name="website" style="display:none">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <label class="form-label">Nama Lengkap</label>
                                        <input type="text" name="name" class="form-control" placeholder="Contoh: Budi Santoso" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Alamat Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="contoh@perusahaan.com" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Nomor WhatsApp</label>
                                        <input type="text" name="phone" class="form-control" placeholder="+62 812 3456 7890">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Tujuan Kepentingan</label>
                                        <select name="subject" class="form-select" required>
                                            <option disabled selected>-- Pilih Kebutuhan Anda --</option>
                                            <option>Informasi Perusahaan</option>
                                            <option>Konsultasi Awal Proyek</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Pesan Detail</label>
                                        <textarea name="message" rows="5" class="form-control" required placeholder="Jelaskan kebutuhan proyek Anda secara singkat..."></textarea>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Lampiran (Optional)</label>
                                        <input type="file" name="attachment" class="form-control">
                                    </div>
                                    <div class="g-recaptcha" data-sitekey="6Ldxb5QsAAAAAMCjqWnOcbzik0QQ6PJFaVZxpSDk"></div>
                                    <div class="col-12 mt-4">
                                        <button type="submit" class="btn btn-send w-100">Kirim Pesan 🚀</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ======================
        MAP SECTION
    ====================== --}}
    {{-- PERUBAHAN DI SINI: Tambahkan class 'bg-sky-blue' --}}
    <section class="map-section py-5 bg-sky-blue">
        <div class="container">
            {{-- SEPARATOR --}}
            <div class="section-separator mb-4">
                <div class="separator-line"></div>
                <div class="separator-icon">
                    <i class="fa-solid fa-location-dot" style="font-size: 14px; color: var(--samsung-blue);"></i>
                </div>
                <div class="separator-line"></div>
            </div>

            <div class="map-card">
                <iframe src="https://www.google.com/maps?q=PT+KPCM+Industrial+Estate+-6.2404597,106.8175674&output=embed"
                    width="100%" height="400" style="border:0; display:block;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </div>
    </section>

@endsection