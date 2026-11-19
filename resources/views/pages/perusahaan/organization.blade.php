@extends('layouts.app')

@section('meta_title', __('general.seo.organization_title'))

@section('meta_description', __('general.seo.organization_desc'))

@section('content')

    {{-- ======================

          HERO SECTION

    ====================== --}}

    <section class="hero-section hero-page">

        <img src="{{ asset('images/hero/construction-1.webp') }}" class="hero-bg" alt="{{ __('organization.hero_title') }}">

        <div class="hero-overlay"></div>

        <div class="hero-text">

            <h1>{{ __('organization.hero_title') }}</h1>

            <p>{{ __('organization.hero_subtitle') }}</p>

        </div>

    </section>

    {{-- ======================

       ORGANIZATION SECTION

    ====================== --}}

    <section id="organization" class="organization-section">

        <div class="container-fluid px-4 px-lg-5 py-lg-5 reveal">

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

                    <h3 class="fw-bold" style="color: #311b92;">{{ __('organization.team_title') }}</h3>

                </div>

                @php

                    $teams = [

                        [

                            'photo' => '/images/team/mrhan.webp',

                            'name' => 'Han Gyu Seong',

                            'title' => __('organization.president_director'),

                        ],

                        ['photo' => '/images/team/ratu.webp', 'name' => 'Ratu', 'title' => ''],

                        ['photo' => '/images/team/adinda.webp', 'name' => 'Adinda', 'title' => ''],

                        ['photo' => '/images/team/ayu.webp', 'name' => 'Ayu', 'title' => ''],

                        ['photo' => '/images/team/arief.webp', 'name' => 'Arief', 'title' => ''],

                        ['photo' => '/images/team/hans.webp', 'name' => 'Hans', 'title' => ''],

                    ];

                    $rows = array_chunk($teams, 3, true); // pertahankan nomor urut*

                @endphp

                <div class="team-board" id="team-board">

                    <svg class="team-strings" id="team-strings" aria-hidden="true"></svg>

                    @foreach ($rows as $rowIndex => $row)

                        <div class="team-row {{ $rowIndex % 2 === 1 ? 'is-reverse' : '' }}">

                            @foreach ($row as $i => $member)

                                <div class="team-item {{ $loop->iteration === 2 ? 'is-down' : '' }} reveal">

                                    <div class="team-pin-card">

                                        <span class="pin" data-pin></span>

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

            {{-- ======================

            OUR MOMENTS (FILTER + LOAD MORE)*

            ====================== --}}

            <div class="together-photos-section mt-5 pt-5 border-top reveal">

                <div class="section-header text-center mb-4 reveal">

                    <h3 class="fw-bold" style="color: #311b92;">{{ __('organization.moments_title') }}</h3>

                    <p class="text-muted">{{ __('organization.moments_subtitle') }}</p>

                </div>

                @php

                    $moments = [

                        // ---------- Foto lama ----------
                        [

                            'url' => '/images/team/moments/moments-loading.webp',

                            'caption' => __('organization.captions.1'),

                        ],

                        [

                            'url' => '/images/team/moments/moments-bachingplant.webp',

                            'caption' => __('organization.captions.2'),

                        ],

                        [

                            'url' => '/images/team/moments/moments-survey.webp',

                            'caption' => __('organization.captions.3'),

                        ],

                        [

                            'url' => '/images/team/moments/moments-chipyard.webp',

                            'caption' => __('organization.captions.4'),

                        ],

                        [

                            'url' => '/images/team/moments/moments-chipyard2.webp',

                            'caption' => __('organization.captions.5'),

                        ],

                        ['url' => '/images/team/moments/moments-eid.webp', 'caption' => __('organization.captions.6')],

                        ['url' => '/images/team/moments/moments-teamchipyard.webp', 'caption' => __('organization.captions.7')],

                        // ---------- Foto baru ----------
                        [

                            'url' => '/images/team/moments/moment-pria-helm-putih-di-pabrik.webp',

                            'caption' => __('organization.captions.8'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-pekerja-vakum-lantai-pabrik.webp',

                            'caption' => __('organization.captions.9'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-jalur-pejalan-kuning-lantai-epoxy.webp',

                            'caption' => __('organization.captions.10'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-pekerja-merapikan-kabel-di-lantai.webp',

                            'caption' => __('organization.captions.11'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-selfie-helm-kuning-di-gudang.webp',

                            'caption' => __('organization.captions.12'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-pekerja-grinding-lantai-beton.webp',

                            'caption' => __('organization.captions.13'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-jalur-kuning-dekat-rak-oranye.webp',

                            'caption' => __('organization.captions.14'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-gedung-kaca-lengkung-hijau.webp',

                            'caption' => __('organization.captions.15'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-interior-pabrik-atap-lengkung.webp',

                            'caption' => __('organization.captions.16'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-lini-produksi-tangga-oranye.webp',

                            'caption' => __('organization.captions.17'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-pekerja-poles-lantai-dekat-rak.webp',

                            'caption' => __('organization.captions.18'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-lantai-poles-garis-kuning.webp',

                            'caption' => __('organization.captions.19'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-pekerja-aplikasi-coating-lantai.webp',

                            'caption' => __('organization.captions.20'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-lantai-mengkilap-rak-gudang.webp',

                            'caption' => __('organization.captions.21'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-lantai-beton-poles-gudang-luas.webp',

                            'caption' => __('organization.captions.22'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-pekerja-roll-coating-lantai.webp',

                            'caption' => __('organization.captions.23'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-mesin-poles-kuning-di-lantai.webp',

                            'caption' => __('organization.captions.24'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-lantai-poles-koridor-gudang.webp',

                            'caption' => __('organization.captions.25'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-lantai-poles-gudang-gelap.webp',

                            'caption' => __('organization.captions.26'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-lantai-mengkilap-pantulan-lampu.webp',

                            'caption' => __('organization.captions.27'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-peralatan-dan-jerigen-kimia.webp',

                            'caption' => __('organization.captions.28'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-mesin-grinding-dan-vakum-industri.webp',

                            'caption' => __('organization.captions.29'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-briefing-pekerja-rompi-oranye.webp',

                            'caption' => __('organization.captions.30'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-foto-bersama-tim-helm-biru.webp',

                            'caption' => __('organization.captions.31'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-tim-grinding-lantai-mesin-kuning.webp',

                            'caption' => __('organization.captions.32'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-pekerja-dorong-mesin-poles.webp',

                            'caption' => __('organization.captions.33'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-mesin-poles-di-koridor-pabrik.webp',

                            'caption' => __('organization.captions.34'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-gerbang-gedung-atap-hijau.webp',

                            'caption' => __('organization.captions.35'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-deretan-mesin-grinding-lantai.webp',

                            'caption' => __('organization.captions.36'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-pekerja-pasang-saluran-udara-scaffold.webp',

                            'caption' => __('organization.captions.37'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-atap-seng-bangunan-pabrik.webp',

                            'caption' => __('organization.captions.38'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-pekerja-di-atap-bangunan.webp',

                            'caption' => __('organization.captions.39'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-scaffold-di-dalam-pabrik.webp',

                            'caption' => __('organization.captions.40'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-langit-langit-atap-seng.webp',

                            'caption' => __('organization.captions.41'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-ducting-udara-di-pabrik.webp',

                            'caption' => __('organization.captions.42'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-struktur-baja-mesin-hijau.webp',

                            'caption' => __('organization.captions.43'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-scaffold-merah-dan-ducting.webp',

                            'caption' => __('organization.captions.44'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-serah-terima-nasi-kotak-di-lokasi.webp',

                            'caption' => __('organization.captions.45'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-batching-plant-foto-tim-berdiri.webp',

                            'caption' => __('organization.captions.46'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-foto-bersama-tim-batching-plant.webp',

                            'caption' => __('organization.captions.47'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-batching-plant-dan-ekskavator.webp',

                            'caption' => __('organization.captions.48'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-batching-plant-siap-operasi.webp',

                            'caption' => __('organization.captions.49'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-inspeksi-tulangan-pengecoran.webp',

                            'caption' => __('organization.captions.50'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-pengecoran-beton-pekerja-meratakan.webp',

                            'caption' => __('organization.captions.51'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-pekerja-ratakan-adukan-beton.webp',

                            'caption' => __('organization.captions.52'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-truk-mixer-dan-ekskavator-malam.webp',

                            'caption' => __('organization.captions.53'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-pengecoran-beton-truk-mixer.webp',

                            'caption' => __('organization.captions.54'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-pengecoran-beton-malam-hari.webp',

                            'caption' => __('organization.captions.55'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-pengecoran-beton-siang-hari.webp',

                            'caption' => __('organization.captions.56'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-pengecoran-malam-truk-mixer.webp',

                            'caption' => __('organization.captions.57'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-foto-bersama-tim-di-ruang-kantor.webp',

                            'caption' => __('organization.captions.58'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-ngopi-bersama-sunset-rooftop.webp',

                            'caption' => __('organization.captions.59'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-ngopi-bersama-pemandangan-kota.webp',

                            'caption' => __('organization.captions.60'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-kumpul-di-kafe-rooftop.webp',

                            'caption' => __('organization.captions.61'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-meja-panjang-di-workshop.webp',

                            'caption' => __('organization.captions.62'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-briefing-pagi-pekerja-lapangan.webp',

                            'caption' => __('organization.captions.63'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-ruang-kantor-lantai-keramik.webp',

                            'caption' => __('organization.captions.64'),

                        ],

                        [

                            'url' => '/images/team/moments/moment-foto-bersama-pekerja-proyek-pagi.webp',

                            'caption' => __('organization.captions.65'),

                        ],

                    ];

                    // Kategori otomatis dari nama file (urutan penting: yang cocok pertama dipakai)
                    $categoryRules = [

                        'batching' => ['batching', 'bachingplant'],

                        'team' => [

                            'foto-bersama',

                            'ngopi',

                            'kafe',

                            'kantor',

                            'briefing',

                            'eid',

                            'nasi-kotak',

                            'meja-panjang',

                            'selfie',

                            'teamchipyard',

                        ],

                        'concrete' => ['pengecoran', 'tulangan', 'mixer', 'adukan'],

                        'structure' => [

                            'scaffold',

                            'atap',

                            'ducting',

                            'saluran-udara',

                            'struktur-baja',

                            'langit-langit',

                        ],

                        'floor' => ['lantai', 'poles', 'grinding', 'vakum', 'coating', 'epoxy', 'jalur', 'kimia'],

                    ];

                    $categoryLabels = [

                        'all' => __('organization.categories.all'),

                        'floor' => __('organization.categories.floor'),

                        'concrete' => __('organization.categories.concrete'),

                        'batching' => __('organization.categories.batching'),

                        'structure' => __('organization.categories.structure'),

                        'team' => __('organization.categories.team'),

                        'project' => __('organization.categories.project'),

                    ];

                    $moments = collect($moments)

                        ->map(function ($m) use ($categoryRules) {

                            $cat = 'project';

                            foreach ($categoryRules as $key => $words) {

                                if (\Illuminate\Support\Str::contains($m['url'], $words)) {

                                    $cat = $key;

                                    break;

                                }

                            }

                            $m['cat'] = $cat;

                            return $m;

                        })

                        ->values()

                        ->all();

                    $catCounts = collect($moments)->countBy('cat');

                    $momentsMedia = collect($moments)

                        ->map(

                            fn($m) => [

                                'type' => 'image',

                                'src' => asset($m['url']),

                                'thumb' => asset($m['url']),

                            ],

                        )

                        ->all();

                @endphp
                {{-- Filter kategori --}}
                <div class="moment-filters reveal" id="moment-filters">

                    @foreach ($categoryLabels as $key => $label)

                        @if ($key === 'all' || ($catCounts[$key] ?? 0) > 0)

                            <button type="button" class="moment-filter {{ $key === 'all' ? 'active' : '' }}"

                                data-filter="{{ $key }}">

                                {{ $label }}

                                <span>{{ $key === 'all' ? count($moments) : $catCounts[$key] }}</span>

                            </button>

                        @endif

                    @endforeach

                </div>
{{-- hanya satu #moments-container --}}
                <div class="row g-4" id="moments-container">

                    @foreach ($moments as $i => $moment)

                        @php

                            $project = [

                                'title' => __('organization.gallery_title'),

                                'start' => $i,

                                'sections' => [['name' => null, 'media' => $momentsMedia]],

                            ];

                        @endphp

                        <div class="col-md-6 col-lg-4 moment-item" data-cat="{{ $moment['cat'] }}">

                            <div class="moment-card gallery-item shadow-sm rounded-3 overflow-hidden" role="button"

                                tabindex="0" data-project="{{ json_encode($project, JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_HEX_TAG) }}">

                                <div class="moment-img-wrapper">

                                    <img src="{{ asset($moment['url']) }}" alt="{{ $moment['caption'] }}"

                                        class="w-100 h-100 object-fit-cover" loading="lazy"

                                        onload="this.classList.add('loaded'); this.closest('.gallery-item').classList.add('is-ready')">

                                    <div class="moment-overlay d-flex align-items-end p-3">

                                        <span class="text-white fw-medium">{{ $moment['caption'] }}</span>

                                    </div>

                                </div>

                            </div>

                        </div>

                    @endforeach

                </div>

                <div class="moments-footer text-center mt-5">

                    <p class="text-muted small mb-3" id="moments-count"></p>

                    <button type="button" class="moments-more" id="moments-more">{{ __('organization.load_more') }}</button>

                </div>

            </div> {{-- /.together-photos-section --}}

        </div> {{-- /.container-fluid --}}

    </section>

    <div id="projectViewer" class="image-modal" role="dialog" aria-modal="true" aria-labelledby="viewerTitle">

        <button type="button" class="close-modal" id="viewerClose" aria-label="{{ __('organization.close') }}">×</button>

        <div class="viewer-wrap">

            <div class="viewer-head">

                <h2 class="viewer-title" id="viewerTitle"></h2>

                <span class="viewer-counter" id="viewerCounter"></span>

            </div>

            <div class="viewer-sections" id="viewerSections"></div>

            <div class="viewer-stage-wrap">

                <button type="button" class="modal-nav modal-prev" id="viewerPrev" aria-label="{{ __('organization.previous') }}">‹</button>

                <div class="viewer-stage" id="viewerStage"></div>

                <button type="button" class="modal-nav modal-next" id="viewerNext" aria-label="{{ __('organization.next') }}">›</button>

            </div>

            <div class="viewer-thumbs" id="viewerThumbs"></div>

        </div>

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

            document.querySelectorAll('.moment-card img').forEach(img => {

                const done = () => {

                    img.classList.add('loaded');

                    img.closest('.gallery-item')?.classList.add('is-ready');

                };

                img.complete ? done() : img.addEventListener('load', done);

            });

        })();

    </script>

@endsection
