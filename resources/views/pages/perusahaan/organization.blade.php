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

                @php
                    $moments = [
                        // ---------- Foto lama ----------
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

                        // ---------- Foto baru ----------
                        ['url' => '/images/team/moments/moment-pria-helm-putih-di-pabrik.webp', 'caption' => 'On-site Visit at the Factory Floor'],
                        ['url' => '/images/team/moments/moment-pekerja-vakum-lantai-pabrik.webp', 'caption' => 'Floor Cleaning with Industrial Vacuum Before Coating'],
                        ['url' => '/images/team/moments/moment-jalur-pejalan-kuning-lantai-epoxy.webp', 'caption' => 'Yellow Pedestrian Lane on Finished Epoxy Floor'],
                        ['url' => '/images/team/moments/moment-pekerja-merapikan-kabel-di-lantai.webp', 'caption' => 'Crew Organizing Power Cables on Site'],
                        ['url' => '/images/team/moments/moment-selfie-helm-kuning-di-gudang.webp', 'caption' => 'Selfie Moment Inside the Warehouse'],
                        ['url' => '/images/team/moments/moment-pekerja-grinding-lantai-beton.webp', 'caption' => 'Concrete Floor Grinding in Progress'],
                        ['url' => '/images/team/moments/moment-jalur-kuning-dekat-rak-oranye.webp', 'caption' => 'Yellow Walkway Marking Beside Storage Racks'],
                        ['url' => '/images/team/moments/moment-gedung-kaca-lengkung-hijau.webp', 'caption' => 'Glass Curved-Roof Building Exterior'],
                        ['url' => '/images/team/moments/moment-interior-pabrik-atap-lengkung.webp', 'caption' => 'Spacious Factory Interior with Arched Roof'],
                        ['url' => '/images/team/moments/moment-lini-produksi-tangga-oranye.webp', 'caption' => 'Production Line with Orange Floor Markings'],
                        ['url' => '/images/team/moments/moment-pekerja-poles-lantai-dekat-rak.webp', 'caption' => 'Floor Polishing Between Warehouse Racks'],
                        ['url' => '/images/team/moments/moment-lantai-poles-garis-kuning.webp', 'caption' => 'Polished Concrete Floor with Yellow Line'],
                        ['url' => '/images/team/moments/moment-pekerja-aplikasi-coating-lantai.webp', 'caption' => 'Applying Floor Hardener Coating'],
                        ['url' => '/images/team/moments/moment-lantai-mengkilap-rak-gudang.webp', 'caption' => 'Glossy Polished Floor in Warehouse Aisle'],
                        ['url' => '/images/team/moments/moment-lantai-beton-poles-gudang-luas.webp', 'caption' => 'Large Warehouse with Polished Concrete Floor'],
                        ['url' => '/images/team/moments/moment-pekerja-roll-coating-lantai.webp', 'caption' => 'Roller Coating Application on Concrete Floor'],
                        ['url' => '/images/team/moments/moment-mesin-poles-kuning-di-lantai.webp', 'caption' => 'Polishing Machine at Work'],
                        ['url' => '/images/team/moments/moment-lantai-poles-koridor-gudang.webp', 'caption' => 'Polished Floor Along the Warehouse Corridor'],
                        ['url' => '/images/team/moments/moment-lantai-poles-gudang-gelap.webp', 'caption' => 'Polished Floor Finish in Dimly Lit Warehouse'],
                        ['url' => '/images/team/moments/moment-lantai-mengkilap-pantulan-lampu.webp', 'caption' => 'Mirror-like Floor Reflecting Overhead Lights'],
                        ['url' => '/images/team/moments/moment-peralatan-dan-jerigen-kimia.webp', 'caption' => 'Floor Treatment Equipment and Chemical Supplies'],
                        ['url' => '/images/team/moments/moment-mesin-grinding-dan-vakum-industri.webp', 'caption' => 'Grinding Machines and Industrial Vacuums Ready'],
                        ['url' => '/images/team/moments/moment-briefing-pekerja-rompi-oranye.webp', 'caption' => 'Pre-Work Briefing with the Crew'],
                        ['url' => '/images/team/moments/moment-foto-bersama-tim-helm-biru.webp', 'caption' => 'Team Photo with the Floor Finishing Crew'],
                        ['url' => '/images/team/moments/moment-tim-grinding-lantai-mesin-kuning.webp', 'caption' => 'Grinding Team Working in Formation'],
                        ['url' => '/images/team/moments/moment-pekerja-dorong-mesin-poles.webp', 'caption' => 'Operator Pushing Polishing Machine'],
                        ['url' => '/images/team/moments/moment-mesin-poles-di-koridor-pabrik.webp', 'caption' => 'Polishing Machine in the Factory Corridor'],
                        ['url' => '/images/team/moments/moment-gerbang-gedung-atap-hijau.webp', 'caption' => 'Main Entrance of the Green-Roofed Building'],
                        ['url' => '/images/team/moments/moment-deretan-mesin-grinding-lantai.webp', 'caption' => 'Row of Floor Grinding Machines'],
                        ['url' => '/images/team/moments/moment-pekerja-pasang-saluran-udara-scaffold.webp', 'caption' => 'Installing Air Ducting on Scaffolding'],
                        ['url' => '/images/team/moments/moment-atap-seng-bangunan-pabrik.webp', 'caption' => 'Metal Roof Structure of the Factory Building'],
                        ['url' => '/images/team/moments/moment-pekerja-di-atap-bangunan.webp', 'caption' => 'Roof Inspection Work at Height'],
                        ['url' => '/images/team/moments/moment-scaffold-di-dalam-pabrik.webp', 'caption' => 'Scaffolding Work Inside the Factory'],
                        ['url' => '/images/team/moments/moment-langit-langit-atap-seng.webp', 'caption' => 'Roof Ceiling Sheets Installation'],
                        ['url' => '/images/team/moments/moment-ducting-udara-di-pabrik.webp', 'caption' => 'Ventilation Ducting System in the Plant'],
                        ['url' => '/images/team/moments/moment-struktur-baja-mesin-hijau.webp', 'caption' => 'Steel Structure Above the Production Machines'],
                        ['url' => '/images/team/moments/moment-scaffold-merah-dan-ducting.webp', 'caption' => 'Red Scaffold Beside Ducting Installation'],
                        ['url' => '/images/team/moments/moment-serah-terima-nasi-kotak-di-lokasi.webp', 'caption' => 'Sharing Meals with the Team on Site'],
                        ['url' => '/images/team/moments/moment-batching-plant-foto-tim-berdiri.webp', 'caption' => 'Team Standing at the Batching Plant'],
                        ['url' => '/images/team/moments/moment-foto-bersama-tim-batching-plant.webp', 'caption' => 'Group Photo at the Batching Plant'],
                        ['url' => '/images/team/moments/moment-batching-plant-dan-ekskavator.webp', 'caption' => 'Batching Plant and Excavator in Operation'],
                        ['url' => '/images/team/moments/moment-batching-plant-siap-operasi.webp', 'caption' => 'Batching Plant Ready for Operation'],
                        ['url' => '/images/team/moments/moment-inspeksi-tulangan-pengecoran.webp', 'caption' => 'Rebar Inspection Before Concrete Pouring'],
                        ['url' => '/images/team/moments/moment-pengecoran-beton-pekerja-meratakan.webp', 'caption' => 'Crew Leveling Fresh Concrete'],
                        ['url' => '/images/team/moments/moment-pekerja-ratakan-adukan-beton.webp', 'caption' => 'Spreading Concrete Mix by Hand'],
                        ['url' => '/images/team/moments/moment-truk-mixer-dan-ekskavator-malam.webp', 'caption' => 'Mixer Truck and Excavator at Night'],
                        ['url' => '/images/team/moments/moment-pengecoran-beton-truk-mixer.webp', 'caption' => 'Concrete Pouring with Mixer Truck'],
                        ['url' => '/images/team/moments/moment-pengecoran-beton-malam-hari.webp', 'caption' => 'Night Concrete Pouring Operation'],
                        ['url' => '/images/team/moments/moment-pengecoran-beton-siang-hari.webp', 'caption' => 'Daytime Concrete Pouring Over Rebar Mesh'],
                        ['url' => '/images/team/moments/moment-pengecoran-malam-truk-mixer.webp', 'caption' => 'Night Pour and On-site Supervision'],
                        ['url' => '/images/team/moments/moment-foto-bersama-tim-di-ruang-kantor.webp', 'caption' => 'Team Gathering Photo at the Office'],
                        ['url' => '/images/team/moments/moment-ngopi-bersama-sunset-rooftop.webp', 'caption' => 'Coffee Together at Sunset'],
                        ['url' => '/images/team/moments/moment-ngopi-bersama-pemandangan-kota.webp', 'caption' => 'Coffee Chat Overlooking the City'],
                        ['url' => '/images/team/moments/moment-kumpul-di-kafe-rooftop.webp', 'caption' => 'Rooftop Cafe Get-together'],
                        ['url' => '/images/team/moments/moment-meja-panjang-di-workshop.webp', 'caption' => 'Long Wooden Table at the Workshop'],
                        ['url' => '/images/team/moments/moment-briefing-pagi-pekerja-lapangan.webp', 'caption' => 'Morning Briefing with Field Workers'],
                        ['url' => '/images/team/moments/moment-ruang-kantor-lantai-keramik.webp', 'caption' => 'Clean Office Space with Tiled Floor'],
                        ['url' => '/images/team/moments/moment-foto-bersama-pekerja-proyek-pagi.webp', 'caption' => 'Morning Group Photo of the Project Crew'],
                    ];

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

                {{-- hanya satu #moments-container --}}
                <div class="row g-4" id="moments-container">
                    @foreach ($moments as $i => $moment)
                        @php
                            $project = [
                                'title' => 'Our Moments',
                                'start' => $i,
                                'sections' => [['name' => null, 'media' => $momentsMedia]],
                            ];
                        @endphp

                        <div class="col-md-6 col-lg-4 moment-item reveal">
                            <div class="moment-card gallery-item shadow-sm rounded-3 overflow-hidden" role="button"
                                tabindex="0" data-project="{{ json_encode($project) }}">
                                <div class="moment-img-wrapper"
                                    style="aspect-ratio: 16/9; overflow: hidden; position: relative;">
                                    <img src="{{ asset($moment['url']) }}" alt="{{ $moment['caption'] }}"
                                        class="w-100 h-100 object-fit-cover" loading="lazy"
                                        style="transition: transform 0.3s ease;"
                                        onload="this.classList.add('loaded'); this.closest('.gallery-item').classList.add('is-ready')">
                                    <div class="moment-overlay d-flex align-items-end p-3">
                                        <span class="text-white fw-medium">{{ $moment['caption'] }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div id="moments-pagination" class="d-flex justify-content-center mt-5"></div>
            </div> {{-- /.together-photos-section --}}

        </div> {{-- /.container-fluid --}}
    </section>

    <div id="projectViewer" class="image-modal" role="dialog" aria-modal="true" aria-labelledby="viewerTitle">
        <button type="button" class="close-modal" id="viewerClose" aria-label="Close">&times;</button>

        <div class="viewer-wrap">
            <div class="viewer-head">
                <h2 class="viewer-title" id="viewerTitle"></h2>
                <span class="viewer-counter" id="viewerCounter"></span>
            </div>

            <div class="viewer-sections" id="viewerSections"></div>

            <div class="viewer-stage-wrap">
                <button type="button" class="modal-nav modal-prev" id="viewerPrev" aria-label="Previous">&#8249;</button>
                <div class="viewer-stage" id="viewerStage"></div>
                <button type="button" class="modal-nav modal-next" id="viewerNext" aria-label="Next">&#8250;</button>
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