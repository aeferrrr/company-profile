<section id="video-showcase" class="video-section">

    <div class="container position-relative">
        <div class="section-separator">
            <div class="separator-line"></div>
            <div class="separator-icon">
                <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor"
                    stroke-width="2">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                    <polyline points="9 22 9 12 15 12 15 22" />
                </svg>
            </div>
            <div class="separator-line"></div>
        </div>
        {{-- Section Header --}}
        <div class="vs-header">
            <div class="vs-label">
                <span class="vs-label-line"></span>
                <span class="vs-label-text">VIDEO PROFIL</span>
                <span class="vs-label-line"></span>
            </div>
            <h2 class="vs-title">{{ __('messages.video.heading') }}</h2>
            <p class="vs-subtitle">
                Kenali lebih dekat siapa kami — visi, dedikasi, dan karya nyata KPCM di lapangan.
            </p>
        </div>

        {{-- Main Layout --}}
        <div class="vs-layout">

            {{-- LEFT: Video Player --}}
            <div class="vs-player-col">

                {{-- Badge Atas --}}
                <div class="vs-player-badge">
                    <span class="vs-dot"></span> LIVE PREVIEW
                </div>

                <div class="vs-player-wrapper" id="videoWrapper">

                    <video id="companyVideo" autoplay muted loop playsinline>
                        <source src="{{ asset('videos/kpcm-construction.webm') }}" type="video/mp4">
                    </video>

                    {{-- Overlay Paused --}}
                    <div class="vs-play-overlay" id="playOverlay">
                        <div class="vs-play-btn">
                            <svg viewBox="0 0 24 24" width="28" height="28" fill="white">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                    </div>

                    {{-- Bottom Caption --}}
                    <div class="vs-caption">
                        <div class="vs-caption-inner">
                            <span class="vs-caption-badge">KPCM CONSTRUCTION</span>
                            <h4 class="vs-caption-title" id="currentVideoTitle">
                                Profil & Perkenalan Perusahaan
                            </h4>
                            <p class="vs-caption-desc">
                                Membangun dengan integritas, menghadirkan hasil terbaik sejak awal berdiri.
                            </p>
                        </div>
                        <div class="vs-caption-icon">
                            <svg viewBox="0 0 24 24" width="40" height="40" fill="none"
                                stroke="rgba(255,255,255,0.2)" stroke-width="1.5">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                                <polyline points="9 22 9 12 15 12 15 22" />
                            </svg>
                        </div>
                    </div>

                </div>

                {{-- Stats Row --}}
                <div class="vs-stats">
                    <div class="vs-stat-item">
                        <span class="vs-stat-number">14+</span>
                        <span class="vs-stat-label">Tahun Pengalaman</span>
                    </div>
                    <div class="vs-stat-divider"></div>
                    <div class="vs-stat-item">
                        <span class="vs-stat-number">500+</span>
                        <span class="vs-stat-label">Proyek Selesai</span>
                    </div>
                    <div class="vs-stat-divider"></div>
                    <div class="vs-stat-item">
                        <span class="vs-stat-number">98%</span>
                        <span class="vs-stat-label">Kepuasan Klien</span>
                    </div>
                </div>

            </div>

            {{-- RIGHT: Info Panel --}}
            <div class="vs-info-col">

                <div class="vs-info-card">
                    <div class="vs-info-icon">
                        <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <circle cx="12" cy="12" r="10" />
                            <line x1="2" y1="12" x2="22" y2="12" />
                            <path
                                d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
                        </svg>
                    </div>
                    <div>
                        <h6 class="vs-info-title">Tentang KPCM</h6>
                        <p class="vs-info-text">
                            PT KPCM adalah perusahaan konstruksi terpercaya yang telah melayani berbagai proyek skala
                            nasional dengan standar mutu tinggi.
                        </p>
                    </div>
                </div>

                <div class="vs-info-card">
                    <div class="vs-info-icon">
                        <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <polygon
                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                        </svg>
                    </div>
                    <div>
                        <h6 class="vs-info-title">Keunggulan KPCM</h6>
                        <ul class="vs-info-list">
                            <li>Pengerjaan tepat waktu & sesuai anggaran</li>
                            <li>Tim berpengalaman & bersertifikat</li>
                            <li>Material berkualitas standar nasional</li>
                            <li>Garansi purna jual & after-service</li>
                        </ul>
                    </div>
                </div>

                <div class="vs-info-card">
                    <div class="vs-info-icon">
                        <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                        </svg>
                    </div>
                    <div>
                        <h6 class="vs-info-title">Sertifikasi & Standar</h6>
                        <p class="vs-info-text">
                            Berlisensi resmi, memenuhi standar K3 nasional, ISO 9001:2015, dan berpengalaman dalam
                            proyek pemerintah maupun swasta.
                        </p>
                    </div>
                </div>

                <a href="#contact" class="vs-cta-btn">
                    Konsultasi Gratis
                    <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor"
                        stroke-width="2.5">
                        <line x1="5" y1="12" x2="19" y2="12" />
                        <polyline points="12 5 19 12 12 19" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
