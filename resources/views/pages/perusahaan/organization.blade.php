@extends('layouts.app')

@section('title', __('organization.title') . ' | KPCM Industrial Estate')

@section('content')

    <!-- HERO SECTION -->
    <section class="hero-section hero-organization">
        <!-- Placeholder Image -->
        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=2070&auto=format&fit=crop"
            class="hero-bg" alt="{{ __('organization.hero_title') }}">
        <div class="hero-overlay"></div>

        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">{{ __('organization.hero_title') }}</h1>
                <p class="hero-subtitle">
                    {{ __('organization.hero_subtitle') }}
                </p>
            </div>
        </div>
    </section>

    <!-- ORGANIZATION SECTION -->
    <section id="organization" class="organization-section">
        <div class="container">

            <!-- HEADER -->
            <div class="section-header text-center mb-5">
                <h2 class="fw-bold text-uppercase">{{ __('organization.header_title') }}</h2>
                <p class="text-muted mt-2">
                    {{ __('organization.header_subtitle') }}
                </p>
            </div>

            <!-- CHART AREA -->
            <div class="org-chart text-center" id="chart-container">
                <svg id="org-svg" viewBox="0 0 1200 250" width="100%" preserveAspectRatio="xMidYMid meet"
                    xmlns="http://www.w3.org/2000/svg">

                    <!-- Garis Konektor -->
                    <line x1="600" y1="90" x2="600" y2="130" class="chart-line" />
                    <line x1="200" y1="130" x2="1000" y2="130" class="chart-line" />

                    <line x1="200" y1="130" x2="200" y2="160" class="chart-line" />
                    <line x1="400" y1="130" x2="400" y2="160" class="chart-line" />
                    <line x1="600" y1="130" x2="600" y2="160" class="chart-line" />
                    <line x1="800" y1="130" x2="800" y2="160" class="chart-line" />
                    <line x1="1000" y1="130" x2="1000" y2="160" class="chart-line" />

                    <!-- NODE GROUPS -->
                    <!-- Catatan: Teks diletakkan di tengah kotak (x=90, y=30 jika lebar kotak 180 dan tinggi 60) -->

                    <!-- Presiden -->
                    <g class="node-group" transform="translate(510, 30)">
                        <rect width="180" height="60" class="chart-rect" />
                        <text x="90" y="30" class="chart-text">{{ __('organization.role_pres_dir') }}</text>
                    </g>

                    <!-- Architect Design -->
                    <g class="node-group" transform="translate(110, 160)">
                        <rect width="180" height="60" class="chart-rect" />
                        <text x="90" y="30" class="chart-text">{{ __('organization.role_architect') }}</text>
                    </g>

                    <!-- Finance -->
                    <g class="node-group" transform="translate(310, 160)">
                        <rect width="180" height="60" class="chart-rect" />
                        <text x="90" y="30" class="chart-text">{{ __('organization.role_finance') }}</text>
                    </g>

                    <!-- General Affair / Marketing -->
                    <g class="node-group" transform="translate(510, 160)">
                        <rect width="180" height="60" class="chart-rect" />
                        <text x="90" y="30" class="chart-text">{{ __('organization.role_marketing') }}</text>
                    </g>

                    <!-- Workshop -->
                    <g class="node-group" transform="translate(710, 160)">
                        <rect width="180" height="60" class="chart-rect" />
                        <text x="90" y="30" class="chart-text">{{ __('organization.role_workshop') }}</text>
                    </g>

                    <!-- Engineer -->
                    <g class="node-group" transform="translate(910, 160)">
                        <rect width="180" height="60" class="chart-rect" />
                        <text x="90" y="30" class="chart-text">{{ __('organization.role_engineering') }}</text>
                    </g>
                </svg>
            </div>

            <!-- MEMBERS LIST -->
            <div class="members-section">
                <div class="members-header">
                    <div class="members-title">{{ __('organization.team_members') }}</div>
                </div>

                <div class="members-grid">
                    <!-- Group 1 -->
                    <div class="member-group">
                        <div class="member-badge">
                            <svg class="badge-icon" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            Ratu Uliya.N
                            <div class="popup-photo-list"><img src="/images/team/ratu.jpg" alt="Foto"></div>
                        </div>
                        <div class="member-badge">
                            <svg class="badge-icon" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            Adinda
                            <div class="popup-photo-list"><img src="/images/team/adinda.jpeg" alt="Foto"></div>
                        </div>
                        <div class="member-badge">
                            <svg class="badge-icon" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            Mr Choi
                            <div class="popup-photo-list"><img src="/images/team/mrchoi.jpeg" alt="Foto"></div>
                        </div>
                        <div class="member-badge">
                            <svg class="badge-icon" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            Mr Lee
                            <div class="popup-photo-list"><img
                                    src="https://ui-avatars.com/api/?name=Mr+Lee&background=random" alt="Foto"></div>
                        </div>
                    </div>

                    <!-- Group 2 -->
                    <div class="member-group">
                        <div class="member-badge">
                            <svg class="badge-icon" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            Ridho
                            <div class="popup-photo-list"><img src="/images/team/rido.jpeg" alt="Foto"></div>
                        </div>
                        <div class="member-badge">
                            <svg class="badge-icon" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            Nugroho
                            <div class="popup-photo-list"><img src="/images/team/nugroho.jpeg" alt="Foto"></div>
                        </div>
                        <div class="member-badge">
                            <svg class="badge-icon" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            Rahmad
                            <div class="popup-photo-list"><img src="/images/team/rahmad.jpeg" alt="Foto"></div>
                        </div>
                        <div class="member-badge">
                            <svg class="badge-icon" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            Leo
                            <div class="popup-photo-list"><img src="/images/team/leo.jpeg" alt="Foto"></div>
                        </div>
                        <div class="member-badge">
                            <svg class="badge-icon" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            Rudy
                            <div class="popup-photo-list"><img src="/images/team/rudy.jpeg" alt="Foto"></div>
                        </div>
                        <div class="member-badge">
                            <svg class="badge-icon" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            Tito
                            <div class="popup-photo-list"><img src="/images/team/tito.jpeg" alt="Foto"></div>
                        </div>
                        <div class="member-badge">
                            <svg class="badge-icon" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            Arief
                            <div class="popup-photo-list"><img src="/images/team/arief.jpg" alt="Foto"></div>
                        </div>
                    </div>

                    <!-- Group 3 -->
                    <div class="member-group">
                        <div class="member-badge">
                            <svg class="badge-icon" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            Fauzia
                            <div class="popup-photo-list"><img src="/images/team/fauzia.jpeg" alt="Foto"></div>
                        </div>
                        <div class="member-badge">
                            <svg class="badge-icon" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            Ayu
                            <div class="popup-photo-list"><img src="/images/team/ayu.jpeg" alt="Foto"></div>
                        </div>
                        <div class="member-badge">
                            <svg class="badge-icon" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            Pani
                            <div class="popup-photo-list"><img src="/images/team/pani.jpeg" alt="Foto"></div>
                        </div>
                        <div class="member-badge">
                            <svg class="badge-icon" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            Nia
                            <div class="popup-photo-list"><img src="/images/team/nia.jpeg" alt="Foto"></div>
                        </div>
                        <div class="member-badge">
                            <svg class="badge-icon" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            Steven
                            <div class="popup-photo-list"><img src="/images/team/steven.jpeg" alt="Foto"></div>
                        </div>
                        <div class="member-badge">
                            <svg class="badge-icon" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            Hans
                            <div class="popup-photo-list"><img src="/images/team/hans.jpg" alt="Foto"></div>
                        </div>
                    </div>

                    <!-- Group 4 -->
                    <div class="member-group">
                        <div class="member-badge">
                            <svg class="badge-icon" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            Samsul
                            <div class="popup-photo-list"><img src="/images/team/samsul.jpeg" alt="Foto"></div>
                        </div>
                        <div class="member-badge">
                            <svg class="badge-icon" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            Faesal
                            <div class="popup-photo-list"><img src="/images/team/faesal.jpeg" alt="Foto"></div>
                        </div>
                        <div class="member-badge">
                            <svg class="badge-icon" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            Sofyan
                            <div class="popup-photo-list"><img src="/images/team/sofyan.jpeg" alt="Foto"></div>
                        </div>
                        <div class="member-badge">
                            <svg class="badge-icon" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            Panji
                            <div class="popup-photo-list"><img src="/images/team/panji.jpeg" alt="Foto"></div>
                        </div>
                        <div class="member-badge">
                            <svg class="badge-icon" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            Daniel
                            <div class="popup-photo-list"><img
                                    src="https://ui-avatars.com/api/?name=Daniel&background=random" alt="Foto"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
