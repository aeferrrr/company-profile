<?php
// ── Project Data ──────────────────────────────────────
// 1 entri = 1 project (1 card).
//
// FORMAT A — project sederhana (1 foto), sama seperti data lamamu:
//   ['category'=>'atap','image'=>'atap-sg.webp','title'=>'...','label'=>'Roofing']
//
// FORMAT B — project besar dengan banyak media & sub-bagian:
//   'sections' => [
//       'Nama Section' => [
//           'folder/foto-1.webp',                                   // foto
//           ['video'   => 'folder/tour.mp4', 'poster' => 'folder/poster.webp'], // video lokal
//           ['youtube' => 'dQw4w9WgXcQ'],                            // video YouTube (ID saja)
//       ],
//   ]
//   Tanpa nama section (cukup list)? Pakai 'media' => [ ... ].
//
// Semua path relatif terhadap public/images/projects/
//
// ── Contoh Format B (bercabang) ──────────────────────
// [
//     'category' => 'pipa',
//     'label' => 'Piping',
//     'title' => 'PT. KPCM Industrial Estate With PT. SABI TEHNIK',
//     'cover' => 'piping1.webp',
//     'sections' => [
//         'VIP Room' => [
//             'kn/vip-1.webp',
//             'kn/vip-2.webp',
//             ['video' => 'kn/vip-tour.mp4', 'poster' => 'kn/vip-tour.webp'],
//         ],
//         'Revamping' => [
//             'kn/rev-1.webp',
//             'kn/rev-2.webp',
//         ],
//         'Lobby' => [
//             'kn/lobby-1.webp',
//         ],
//     ],
// ],
//
// ── DAFTAR ISI (urutan sama dengan tombol filter) ────
//   1. Civil & Structural ............ category: civil
//   2. Architecture & Interior ....... category: architecture
//   3. Mechanical Engineering ........ category: mechanical
//   4. Electrical & Instrumentation .. category: electrical
//   5. Project Management ............ category: management
//   6. Flooring ...................... category: flooring
//   7. Design Concept ................ category: concept
//
// Format A = 1 foto  |  Format B = banyak media / bercabang
return [

    // ═════════════════════════════════════════════════════
    // 1. CIVIL & STRUCTURAL                  category: civil
    // ═════════════════════════════════════════════════════
    // CIVIL TYPE (B)
    [
        'category' => 'civil',
        'label' => 'Civil Engineering',
        'title' => 'Civil Engineering - Concrete Works',
        'cover' => 'civil-chipyard1.webp',
        'sections' => [
            'Desain Concept' => [
                'civil-chipyard1.webp',
                'civil-chipyard2.webp',
                'civil-chipyard3.webp',
                'civil-chipyard4.webp',
                'civil-chipyard5.webp',
                'civil-chipyard6.webp',
                'civil-chipyard7.webp',
                'civil-bachingplant1.webp',
                'civil-bachingplant2.webp',
                'civil-pengukuran.webp',
            ],
        ],
    ],
    // Civil
    ['category' => 'civil', 'image' => 'roadwork.webp', 'title' => 'Road Work - Jakarta Utara', 'label' => 'Civil Works'],
    //civil-roofing
    ['category' => 'civil', 'image' => 'atap-pungkook.webp', 'title' => 'PT Pungkook Indonesia One', 'label' => 'Roofing'],
    ['category' => 'civil', 'image' => 'atap-sg.webp', 'title' => 'PT Semarang Garment', 'label' => 'Roofing'],
    ['category' => 'civil', 'image' => 'atap-pekerjaan.webp', 'title' => 'Pekerjaan Atap', 'label' => 'Roofing'],

    // ═════════════════════════════════════════════════════
    // 2. ARCHITECTURE & INTERIOR       category: architecture
    // ═════════════════════════════════════════════════════

    // ARCHITECTURE TYPE (B) - KN
    [
        'category' => 'architecture',
        'label' => 'Architecture',
        'title' => '2026 Interior & Exterior - Kertas Nusantara - Kalimantan',
        'cover' => 'exterior-kn1.webp',
        'sections' => [
            'Exterior' => [
                'exterior-kn1.webp',
                'exterior-kn2.webp',
            ],
            'Interior' => [
                'interior-kn1.webp',
                // 'interior-kn2.webp',
                'interior-kn3.webp',
                'interior-kn4.webp',
                'interior-kn5.webp',
                'interior-kn6.webp',
                'interior-kn7.webp',
                'interior-kn8.webp',
            ],
            'VIP Room' => [
                'interior-vipkn.webp'
            ],
        ],
    ],

    // Interior
    ['category' => 'architecture', 'image' => 'interior-bidakara.webp', 'title' => 'Interior - Bidakara', 'label' => 'Interior'],

    // Architecture
    ['category' => 'architecture', 'image' => 'architecture-bungalow1.webp', 'title' => 'Seed Resort, Rote, 9 bungalows, PT Santic Sari Dewi, 2015–2016', 'label' => 'Architecture'],
    ['category' => 'architecture', 'image' => 'architecture-bungalow2.webp', 'title' => 'Sudamala Resort, Seraya, 23 bungalows, PT Griya Usaha, 2014–2015', 'label' => 'Architecture'],

    // ═════════════════════════════════════════════════════
    // 3. MECHANICAL ENGINEERING          category: mechanical
    // ═════════════════════════════════════════════════════

    // Piping
    ['category' => 'mechanical', 'image' => 'piping-balikpapan.webp', 'title' => 'Piping RDMP Balikpapan', 'label' => 'Mechanical Engineering'],

    // MECHANICAL TYPE (B)
    [
        'category' => 'mechanical',
        'label' => 'Mechanical Engineering',
        'title' => 'PT. KPCM Industrial Estate With PT. SABI TEHNIK',
        'cover' => 'sabipiping3.webp',
        'sections' => [
            'Installation' => [
                'sabipiping2.webp',
                'sabipiping3.webp',
                'sabipiping5.webp',
            ],
            'Supply' => [
                'sabipiping1.webp',
                'sabipiping4.webp',
            ],
        ],
    ],


    // ═════════════════════════════════════════════════════
    // 4. ELECTRICAL & INSTRUMENTATION    category: electrical
    // ═════════════════════════════════════════════════════

    // Electrical
    ['category' => 'electrical', 'image' => 'electrical-batara.webp', 'title' => 'Electrical, PG Rendeng', 'label' => 'Electrical'],
    ['category' => 'electrical', 'image' => 'electrical-jawapower.webp', 'title' => 'Switchgear Installation PT Jawa Power, 2021', 'label' => 'Electrical'],


    // ═════════════════════════════════════════════════════
    // 5. PROJECT MANAGEMENT              category: management
    // ═════════════════════════════════════════════════════

    // Construction
    ['category' => 'management', 'image' => 'construction1.webp', 'title' => 'Koordinasi dan Briefing Lapangan', 'label' => 'Construction & Management'],
    ['category' => 'management', 'image' => 'construction3.webp', 'title' => 'Inspeksi Struktur dan Progress Proyek', 'label' => 'Construction & Management'],


    // ═════════════════════════════════════════════════════
    // 6. FLOORING                          category: flooring
    // ═════════════════════════════════════════════════════

    // Epoxy
    ['category' => 'flooring', 'image' => 'epoxy-concrete.webp', 'title' => 'Concrete Polishing', 'label' => 'Flooring'],
    ['category' => 'flooring', 'image' => 'flooring-1.webp', 'title' => 'Area Penyimpanan', 'label' => 'Flooring'],
    ['category' => 'flooring', 'image' => 'flooring-2.webp', 'title' => 'Aplikasi Lapisan Epoxy', 'label' => 'Flooring'],


    // ═════════════════════════════════════════════════════
    // 7. DESIGN CONCEPT                     category: concept
    // ═════════════════════════════════════════════════════
    [
        'category' => 'concept',
        'label' => 'Design Concept',
        'title' => 'KS Club Cafe & Lounge 2 - Concept Design',
        'cover' => 'concept-ksclub1.webp',
        'sections' => [
            'Desain Concept' => [
                'concept-ksclub1.webp',
                'concept-ksclub2.webp',
                'concept-ksclub3.webp',
                'concept-ksclub4.webp',
            ],
        ],
    ],
    [
        'category' => 'concept',
        'label' => 'Design Concept',
        'title' => 'KS Club Cafe & Lounge - Concept Design',
        'cover' => 'concept-dasoni1.webp',
        'sections' => [
            'Desain Concept' => [
                'concept-dasoni1.webp',
                'concept-dasoni0.webp',
            ],
        ],
    ],
    [
        'category' => 'concept',
        'label' => 'Design Concept',
        'title' => 'Villa Cikeas 2013 - Concept Design',
        'cover' => 'concept-villa-pool-waterfall.webp',
        'sections' => [
            'Denah' => [
                'concept-villa-denah-lt1.webp',
            ],
            'Pool & Waterfall' => [
                'concept-villa-pool-waterfall.webp',
            ],
            'Interior' => [
                'concept-villa-dining-room.webp',
                'concept-villa-kitchen-island.webp',
                'concept-villa-zen-living1.webp',
                'concept-villa-zen-living2.webp',
                'concept-villa-guest-room.webp',
            ],
            'Lantai 2' => [
                'concept-villa-master-bedroom.webp',
                'concept-villa-master-bedroom-perspektif.webp',
                'concept-villa-kamar-reguler.webp',
                'concept-villa-kamar-reguler-perspektif.webp',
                'concept-villa-ruang-tengah-perspektif.webp',
                'concept-villa-ruang-tengah-option2.webp',
            ],
            'Toilet' => [
                'concept-villa-toilet-master.webp',
                'concept-villa-toilet-kamar-reguler.webp',
            ],
            '3D Tour' => [
                ['video' => 'concept-villa-3d-tour.webm', 'poster' => 'concept-villa-3d-tour-poster.webp'],
            ],
        ],
    ],
    // CONCEPT DESAIN TYPE (A)
    ['category' => 'concept', 'image' => 'concept-mezzanine.webp', 'title' => 'Solo - Mezzanine', 'label' => 'Design Concept'],

    // CONCEPT DESAIN TYPE (B)



    [
        'category' => 'concept',
        'label' => 'Design Concept',
        'title' => 'Project SPA and Sauna pasaraya Blok M - Concept Design',
        'cover' => 'concept-spa1.webp',
        'sections' => [
            'Lobby & Reception' => [
                'concept-spa1.webp',
                'concept-spa2.webp',
                'concept-spa3.webp',
            ],
            'Lounge & Bar' => [
                'concept-spa4.webp',
                'concept-spa5.webp',
                'concept-spa6.webp',
            ],
            'Relaxation Room' => [
                'concept-spa7.webp',
                'concept-spa8.webp',
            ],
            'Locker & Gym Area' => [
                'concept-spa9.webp',
                'concept-spa10.webp',
                'concept-spa11.webp',
            ],
            'Treatment Room' => [
                'concept-spa12.webp',
                'concept-spa13.webp',
                'concept-spa14.webp',
                'concept-spa15.webp',
            ],
            'VIP Room' => [
                'concept-spa16.webp',
                'concept-spa17.webp',
                'concept-spa18.webp',
            ],
            'Pool Area' => [
                'concept-spa19.webp',
                'concept-spa20.webp',
                'concept-spa21.webp',
            ],
            'Sauna' => [
                'concept-spa22.webp',
                'concept-spa23.webp',
                'concept-spa24.webp',
                'concept-spa25.webp',
                'concept-spa26.webp',
            ],
            'Shower & Body Scrub' => [
                'concept-spa27.webp',
                'concept-spa28.webp',
                'concept-spa29.webp',
                'concept-spa30.webp',
            ],
            'Locker Room' => [
                'concept-spa31.webp',
                'concept-spa32.webp',
                'concept-spa33.webp',
                'concept-spa34.webp',
                'concept-spa35.webp',
                'concept-spa36.webp',
            ],
        ],
    ],
    [
        'category' => 'concept',
        'label' => 'Design Concept',
        'title' => 'SK Plasma 2025 Interior Concept - Concept Design',
        'cover' => 'concept-sk1.webp',
        'sections' => [
            'Lobby & Reception' => [
                'concept-sk2.webp',
                'concept-sk3.webp',
                'concept-sk4.webp',
                'concept-sk5.webp',
                'concept-sk11.webp',
                'concept-sk12.webp',
                'concept-sk13.webp',
            ],
            'Trainee Room & Canteen' => [
                'concept-sk1.webp',
                'concept-sk6.webp',
                'concept-sk7.webp',
                'concept-sk8.webp',
                'concept-sk9.webp',
            ],
            'Meeting Room' => [
                'concept-sk10.webp',
                'concept-sk14.webp',
                'concept-sk17.webp',
                'concept-sk18.webp',
            ],
            'Ruang Direktur' => [
                'concept-sk16.webp',
                'concept-sk19.webp',
                'concept-sk20.webp',
            ],
            'Tangga' => [
                'concept-sk15.webp',
            ],
        ],
    ],
    [
        'category' => 'concept',
        'label' => 'Design Concept',
        'title' => 'Cinema Harapan Indah - Concept Design',
        'cover' => 'concept-hi1.webp',
        'sections' => [
            'Desain Concept' => [
                'concept-hi1.webp',
                'concept-hi2.webp',     
            ],
        ],
    ],
];