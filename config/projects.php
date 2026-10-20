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
    // CONCEPT DESAIN TYPE (A)
    ['category' => 'concept', 'image' => 'concept-mezzanine.webp', 'title' => 'Solo - Mezzanine', 'label' => 'Design Concept'],

    // CONCEPT DESAIN TYPE (B)
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
        'cover' => 'concept-villa1.webp',
        'sections' => [
            'Desain Concept' => [
                'concept-villa1.webp',
                'concept-villa2.webp',
                'concept-villa3.webp',
            ],
        ],
    ],
    [
        'category' => 'concept',
        'label' => 'Design Concept',
        'title' => 'Project SPA and Sauna pasaraya Blok M - Concept Design',
        'cover' => 'concept-spa1.webp',
        'sections' => [
            'Desain Concept' => [
                'concept-spa1.webp',
                'concept-spa2.webp',
                'concept-spa3.webp',
                'concept-spa4.webp',
            ],
        ],
    ],
    [
        'category' => 'concept',
        'label' => 'Design Concept',
        'title' => 'SK Plasma 2025 Interior Concept - Concept Design',
        'cover' => 'concept-sk1.webp',
        'sections' => [
            'Desain Concept' => [
                'concept-sk1.webp',
                'concept-sk2.webp',
                'concept-sk3.webp',
                'concept-sk4.webp',
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
                'concept-hi3.webp',
                'concept-hi4.webp',
                'concept-hi5.webp',
                'concept-hi6.webp',
                'concept-hi7.webp',
                'concept-hi8.webp',
            ],
        ],
    ],
];