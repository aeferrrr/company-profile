@extends('layouts.app')

@section('meta_title', __('general.seo.organization_title'))
@section('meta_description', __('general.seo.organization_desc'))

@section('content')

    {{-- ======================
Organization SECTION
====================== --}}
    <section class="hero-section hero-organization">
        <img src="{{ asset('/images/hero/construction-1.webp') }}" class="hero-bg" alt="{{ __('organization.hero_title') }}">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">{{ __('organization.hero_title') }}</h1>
                <p class="hero-subtitle">{{ __('organization.hero_subtitle') }}</p>
            </div>
        </div>
    </section>

    <section id="organization" class="organization-section">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="fw-bold text-uppercase">{{ __('organization.header_title') }}</h2>
                <div class="separator mx-auto" style="width: 80px; height: 4px; background: #311b92; margin-top: 15px;">
                </div>
            </div>

            <div class="org-chart text-center mb-5" id="chart-container">
                <div id="org-hq">
                    @include('components.organization.office-svg')
                </div>
            </div>

            <div class="members-section rounded-4 mb-5">
                <div class="members-header text-center mb-5">
                    <h3 class="fw-bold ms-4" style="color: #311b92;">Meet Our Team</h3>
                </div>

                <div class="team-gallery-grid">
                    @php
                        $teams = [
                            ['photo' => '/images/team/mrhan.png', 'name' => 'Han Gyu Seong', 'title' => ''],
                            ['photo' => '/images/team/ratu.png'],
                            ['photo' => '/images/team/adinda.png'],
                            ['photo' => '/images/team/mrchoi.png'],
                            ['photo' => '/images/team/rido.png'],
                            ['photo' => '/images/team/nugroho.png'],
                            ['photo' => '/images/team/rahmad.png'],
                            ['photo' => '/images/team/leo.png'],
                            ['photo' => '/images/team/rudy.png'],
                            ['photo' => '/images/team/tito.png'],
                            ['photo' => '/images/team/steven.png'],
                            ['photo' => '/images/team/pani.png'],
                            ['photo' => '/images/team/nia.png'],
                            ['photo' => '/images/team/ayu.png'],
                            ['photo' => '/images/team/fauzia.png'],
                            ['photo' => '/images/team/samsul.png'],
                            ['photo' => '/images/team/faesal.png'],
                            ['photo' => '/images/team/sofyan.png'],
                            ['photo' => '/images/team/panji.png'],
                            ['photo' => '/images/team/arief.png'],
                            ['photo' => '/images/team/hans.png'],
                        ];
                    @endphp

                    @foreach ($teams as $member)
                        @if ($loop->first)
                            <div class="president-wrapper">
                                <div class="president-card-custom">
                                    <div class="pres-photo-area">
                                        <img src="{{ $member['photo'] }}" class="pres-img" loading="lazy">
                                        <div class="pres-info">
                                            <div class="pres-name">{{ $member['name'] }}</div>
                                            <div class="pres-title-sub">{{ $member['title'] }}</div>
                                        </div>
                                    </div>
                                    <div class="pres-label-vertical">
                                        <div class="pres-label-text">President Director</div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="team-card">
                                <img src="{{ $member['photo'] }}" class="standard-img" loading="lazy">
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

            {{-- Section: Together Photos with Client-side Pagination --}}
            <div class="together-photos-section mt-5 pt-5 border-top">
                <div class="section-header text-center mb-5">
                    <h3 class="fw-bold" style="color: #311b92;">OUR MOMENTS</h3>
                    <p class="text-muted">Captured memories of our journey together</p>
                </div>

                <div class="row g-4" id="moments-container">
                    @php
                        $moments = [
                            [
                                'url' => '/images/team/moments/moments-bachingplant.webp',
                                'caption' => 'Team Gathering at Batching Plant Area',
                            ],
                            [
                                'url' => '/images/team/moments/moments-chipyard.webp',
                                'caption' => 'Night Shift Operations & On-site Coordination',
                            ],
                            [
                                'url' => '/images/team/moments/moments-chipyard2.webp',
                                'caption' => 'Technical Team Inspection at Industrial Project Site',
                            ],
                            // TAMBAH DATA MOMENTS DISINI
                                                        [
                                'url' => '/images/team/moments/moments-eid.webp',
                                'caption' => 'Harmony & Togetherness',
                            ],
                        ];
                    @endphp

                    @foreach ($moments as $moment)
                        <div class="col-md-6 col-lg-4 moment-item">
                            <div class="moment-card gallery-item shadow-sm rounded-3 overflow-hidden cursor-pointer"
                                onclick="openImageModal('{{ asset($moment['url']) }}')">
                                <div class="moment-img-wrapper"
                                    style="aspect-ratio: 16/9; overflow: hidden; position: relative;">
                                    <img src="{{ asset($moment['url']) }}" alt="{{ $moment['caption'] }}"
                                        class="w-100 h-100 object-fit-cover transition-transform"
                                        style="transition: transform 0.3s ease;">
                                    <div class="moment-overlay d-flex align-items-end p-3">
                                        <span class="text-white fw-medium">{{ $moment['caption'] }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Pagination Controls --}}
                <div id="moments-pagination" class="d-flex justify-content-center mt-5">
                    <!-- Buttons will be injected by JS -->
                </div>
            </div>
        </div>
    </section>

    <!-- Image Modal -->
    <div id="imageModal" class="image-modal" onclick="closeImageModal()">
        <span class="close-modal">&times;</span>
        <img class="modal-content-img" id="modalImage" onclick="event.stopPropagation()">
    </div>

@endsection
