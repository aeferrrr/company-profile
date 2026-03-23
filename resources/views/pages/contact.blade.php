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

    <section class="contact-section py-5 bg-light">
        <div class="container">
            <!-- Main Contact Card -->
            <div class="main-card">
                <div class="row g-0">
                    <!-- Info Sidebar -->
                    <div class="col-lg-5 col-xl-4">
                        <div class="info-sidebar">
                            <h3 class="fw-bold mb-5 text-white">Saluran Komunikasi</h3>

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
                                    <a href="#" class="text-white opacity-75 fs-5"><i
                                            class="fa-brands fa-linkedin"></i></a>
                                    <a href="#" class="text-white opacity-75 fs-5"><i
                                            class="fa-brands fa-instagram"></i></a>
                                    <a href="#" class="text-white opacity-75 fs-5"><i
                                            class="fa-brands fa-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Form Area -->
                    <div class="col-lg-7 col-xl-8">
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

                                    <!-- NAMA -->
                                    <div class="col-md-6">
                                        <label class="form-label">Nama Lengkap</label>
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Contoh: Budi Santoso" required>
                                    </div>

                                    <!-- EMAIL -->
                                    <div class="col-md-6">
                                        <label class="form-label">Alamat Email</label>
                                        <input type="email" name="email" class="form-control"
                                            placeholder="contoh@perusahaan.com" required>
                                    </div>

                                    <!-- WHATSAPP -->
                                    <div class="col-md-6">
                                        <label class="form-label">Nomor WhatsApp</label>
                                        <input type="text" name="phone" class="form-control"
                                            placeholder="+62 812 3456 7890">
                                    </div>

                                    <!-- SUBJECT -->
                                    <div class="col-md-6">
                                        <label class="form-label">Tujuan Kepentingan</label>
                                        <select name="subject" class="form-select" required>
                                            <option disabled selected>-- Pilih Kebutuhan Anda --</option>

                                            <!-- GENERAL -->
                                            <optgroup label="Informasi Umum">
                                                <option>Informasi Perusahaan</option>
                                                <option>Company Profile & Portfolio</option>
                                                <option>Konsultasi Awal Proyek</option>
                                            </optgroup>

                                            <!-- CIVIL -->
                                            <optgroup label="Civil & Infrastruktur">
                                                <option>Pembangunan Jalan & Infrastruktur</option>
                                                <option>Foundation & Earthwork</option>
                                                <option>Pengembangan Kawasan Industri</option>
                                            </optgroup>

                                            <!-- ARCHITECTURE -->
                                            <optgroup label="Bangunan & Arsitektur">
                                                <option>Pembangunan Pabrik / Gudang</option>
                                                <option>Pembangunan Gedung / Office</option>
                                                <option>Desain & Build (Design & Build)</option>
                                            </optgroup>

                                            <!-- MECHANICAL -->
                                            <optgroup label="Mechanical & Industrial">
                                                <option>Steel Structure & Fabrication</option>
                                                <option>Piping & Pipeline System</option>
                                                <option>Tank & Industrial Installation</option>
                                            </optgroup>

                                            <!-- ELECTRICAL -->
                                            <optgroup label="Electrical & System">
                                                <option>Instalasi Listrik & Panel</option>
                                                <option>Fire Alarm & CCTV System</option>
                                                <option>Substation & Transformer</option>
                                            </optgroup>

                                            <!-- MAINTENANCE -->
                                            <optgroup label="Maintenance & Renovasi">
                                                <option>Renovasi / Revamping</option>
                                                <option>Maintenance Pabrik</option>
                                                <option>Perbaikan Struktur / Bangunan</option>
                                            </optgroup>

                                            <!-- BUSINESS -->
                                            <optgroup label="Kerjasama & Bisnis">
                                                <option>Penawaran Kerjasama</option>
                                                <option>Vendor / Supplier</option>
                                                <option>Permintaan Penawaran Harga (RFQ)</option>
                                            </optgroup>

                                            <!-- OTHER -->
                                            <optgroup label="Lainnya">
                                                <option>Lainnya</option>
                                            </optgroup>
                                        </select>
                                    </div>

                                    <!-- MESSAGE -->
                                    <div class="col-12">
                                        <label class="form-label">Pesan Detail</label>
                                        <textarea name="message" rows="5" class="form-control" required
                                            placeholder="Jelaskan kebutuhan proyek Anda secara singkat...
Contoh:
- Jenis proyek: Pembangunan Gudang
- Lokasi: Karawang
- Luas area: ±2000 m²
- Estimasi waktu: 3 bulan"></textarea>
                                    </div>

                                    <!-- ATTACHMENT -->
                                    <div class="col-12">
                                        <label class="form-label">Lampiran (Optional)</label>
                                        <input type="file" name="attachment" class="form-control">
                                        <small class="text-muted">
                                            Upload gambar, drawing, atau dokumen pendukung (PDF, DOC, XLS max 5MB)
                                        </small>
                                    </div>
                                    <div class="g-recaptcha" data-sitekey="6Ldxb5QsAAAAAMCjqWnOcbzik0QQ6PJFaVZxpSDk"></div>
                                    <!-- BUTTON -->
                                    <div class="col-12 mt-4">
                                        <button type="submit" class="btn btn-send w-100">
                                            Kirim Pesan 🚀
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


    </section>

    {{-- Map Section --}}
    <section class="map-section">
        <!-- Map Section -->
        <div class="map-card">
            <iframe src="https://www.google.com/maps?q=PT+KPCM+Industrial+Estate+-6.2404597,106.8175674&output=embed"
                width="100%" height="400" style="border:0; display:block;" allowfullscreen="" loading="lazy">
            </iframe>
        </div>
        </div>
    </section>

@endsection
