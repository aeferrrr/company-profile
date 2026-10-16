@extends('layouts.app')

@section('meta_title', __('general.seo.organization_title'))
@section('meta_description', __('general.seo.organization_desc'))

@section('content')

    {{-- ======================
Organization SECTION
====================== --}}
    <section class="hero-section hero-organization reveal">
        <img src="{{ asset('/images/hero/construction-1.webp') }}" class="hero-bg" alt="{{ __('organization.hero_title') }}">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title reveal">{{ __('organization.hero_title') }}</h1>
                <p class="hero-subtitle reveal">{{ __('organization.hero_subtitle') }}</p>
            </div>
        </div>
    </section>

    <section id="organization" class="organization-section">
        <div class="container">

            <div class="section-header text-center mb-5 reveal">
                <h2 class="fw-bold text-uppercase">{{ __('organization.header_title') }}</h2>
                <div class="separator mx-auto" style="width: 80px; height: 4px; background: #311b92; margin-top: 15px;">
                </div>
            </div>

            <div class="org-chart text-center mb-5 reveal" id="chart-container">
                <div id="org-hq">
                    @include('components.organization.office-svg')
                </div>
            </div>

            <div class="members-section rounded-4 mb-5 reveal">
                <div class="members-header text-center mb-4 reveal">
                    <h3 class="fw-bold" style="color: #311b92;">Meet Our Team</h3>
                </div>

                @php
                    $teams = [
                        [
                            'photo' => '/images/team/mrhan.webp',
                            'name' => 'Han Gyu Seong',
                            'title' => 'President Director',
                        ],
                        ['photo' => '/images/team/ratu.webp', 'name' => 'Ratu', 'title' => ''],
                        ['photo' => '/images/team/adinda.webp', 'name' => 'Adinda', 'title' => ''],
                        ['photo' => '/images/team/ayu.webp', 'name' => 'Ayu', 'title' => ''],
                        ['photo' => '/images/team/arief.webp', 'name' => 'Arief', 'title' => ''],
                        ['photo' => '/images/team/hans.webp', 'name' => 'Hans', 'title' => ''],
                    ];
                    $rows = array_chunk($teams, 3, true); // pertahankan nomor urut
                @endphp

                <div class="team-board" id="team-board">
                    <svg class="team-strings" id="team-strings" aria-hidden="true"></svg>

                    @foreach ($rows as $rowIndex => $row)
                        <div class="team-row {{ $rowIndex % 2 === 1 ? 'is-reverse' : '' }}">
                            @foreach ($row as $i => $member)
                                <div class="team-item {{ $loop->iteration === 2 ? 'is-down' : '' }} reveal">
                                    <div class="team-pin-card">
                                        <span class="pin" data-pin></span>
                                        <span class="card-number">{{ $i + 1 }}</span>
                                        <div class="card-avatar">
                                            <img src="{{ asset($member['photo']) }}" alt="{{ $member['name'] }}"
                                                loading="lazy">
                                        </div>
                                        <div class="card-name">{{ $member['name'] }}</div>
                                        @if ($member['title'])
                                            <div class="card-title">{{ $member['title'] }}</div>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="together-photos-section mt-5 pt-5 border-top reveal">
                <div class="section-header text-center mb-5 reveal">
                    <h3 class="fw-bold" style="color: #311b92;">OUR MOMENTS</h3>
                    <p class="text-muted">Captured memories of our journey together</p>
                </div>

                <div class="row g-4" id="moments-container">
                    @php
                        $moments = [
                            [
                                'url' => '/images/team/moments/moments-loading.webp',
                                'caption' => 'Process Loading Materials in Jetty Area for Industrial Project',
                            ],
                            [
                                'url' => '/images/team/moments/moments-bachingplant.webp',
                                'caption' => 'Team Gathering at Batching Plant Area',
                            ],
                            [
                                'url' => '/images/team/moments/moments-survey.webp',
                                'caption' => 'Surveying Chipyard Area',
                            ],
                            [
                                'url' => '/images/team/moments/moments-chipyard.webp',
                                'caption' => 'Night Shift Operations & On-site Coordination',
                            ],
                            [
                                'url' => '/images/team/moments/moments-chipyard2.webp',
                                'caption' => 'Technical Team Inspection at Industrial Project Site',
                            ],
                            ['url' => '/images/team/moments/moments-eid.webp', 'caption' => 'Harmony & Togetherness'],
                            ['url' => '/images/team/moments/moments-teamchipyard.webp', 'caption' => 'Chipyard Team'],
                        ];
                    @endphp

                    @foreach ($moments as $moment)
                        <div class="col-md-6 col-lg-4 moment-item reveal">
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

                <div id="moments-pagination" class="d-flex justify-content-center mt-5"></div>
            </div>

        </div>
    </section>

    <div id="imageModal" class="image-modal" onclick="closeImageModal()">
        <span class="close-modal">&times;</span>
        <img class="modal-content-img" id="modalImage" onclick="event.stopPropagation()">
    </div>
    <script>
        (function() {
            function drawStrings() {
                const board = document.getElementById('team-board');
                const svg = document.getElementById('team-strings');
                if (!board || !svg) return;

                const b = board.getBoundingClientRect();
                const pins = board.querySelectorAll('[data-pin]');
                svg.setAttribute('width', b.width);
                svg.setAttribute('height', b.height);
                svg.innerHTML = '';

                const pts = Array.from(pins).map(p => {
                    const r = p.getBoundingClientRect();
                    return {
                        x: r.left - b.left + r.width / 2,
                        y: r.top - b.top + r.height / 2
                    };
                });

                for (let i = 0; i < pts.length - 1; i++) {
                    const line = document.createElementNS('http://www.w3.org/2000/svg', 'line');
                    line.setAttribute('x1', pts[i].x);
                    line.setAttribute('y1', pts[i].y);
                    line.setAttribute('x2', pts[i + 1].x);
                    line.setAttribute('y2', pts[i + 1].y);
                    line.setAttribute('class', 'team-string');
                    svg.appendChild(line);
                }
            }

            window.addEventListener('load', drawStrings);
            window.addEventListener('resize', drawStrings);
            // animasi .reveal bisa menggeser posisi, hitung ulang setelahnya
            setTimeout(drawStrings, 600);
            setTimeout(drawStrings, 1500);
        })();
    </script>
@endsection
