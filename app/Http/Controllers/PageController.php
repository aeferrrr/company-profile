<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.perusahaan.about');
    }

    public function anotherbiz()
    {
        return view('pages.perusahaan.anotherbiz');
    }

    public function services()
    {
        return view('pages.services.index');
    }

    public function projects(Request $request)
    {
        // ── Categories ────────────────────────────────────────
        $categories = [
            'all'          => 'All',
            'atap'         => 'Roofing',
            'construction' => 'Construction And Management',
            'pipa'         => 'Piping',
            'epoxy'        => 'Flooring',
            'interior'     => 'Interior',
            'civil'        => 'Civil',
            'electrical'   => 'Electrical',
            'architecture' => 'Architecture',
        ];

        // ── Project Data ──────────────────────────────────────
        $projects = collect([
            // Roofing
            ['category' => 'atap', 'image' => 'atap-pungkook.webp',  'title' => 'PT Pungkook Indonesia One',  'label' => 'Roofing'],
            ['category' => 'atap', 'image' => 'atap-sg.webp',        'title' => 'PT Semarang Garment',        'label' => 'Roofing'],
            ['category' => 'atap', 'image' => 'atap-pekerjaan.webp', 'title' => 'Pekerjaan Atap',             'label' => 'Roofing'],

            // Interior
            ['category' => 'interior', 'image' => 'interior-bidakara.webp',  'title' => 'Interior - Bidakara',       'label' => 'Interior'],
            ['category' => 'interior', 'image' => 'interior-mezzanine.webp', 'title' => 'Solo - Mezzanine',          'label' => 'Interior'],
            ['category' => 'interior', 'image' => 'interior-dasoni1.webp',   'title' => 'K Dasoni - Concept 1',      'label' => 'Interior'],
            ['category' => 'interior', 'image' => 'interior-dasoni.webp',    'title' => 'K Dasoni - Concept 2',      'label' => 'Interior'],
            ['category' => 'interior', 'image' => 'interior-vipkn.webp',    'title' => 'Interior & Revamping - KN', 'label' => 'Interior'],

            // Piping
            ['category' => 'pipa', 'image' => 'piping-balikpapan.webp', 'title' => 'Piping RDMP Balikpapan',                                                    'label' => 'Piping'],
            ['category' => 'pipa', 'image' => 'piping1.webp',          'title' => 'Supply Expansion Joint Rubber, JO With PT. Sabi Tehnik',                     'label' => 'Piping'],
            ['category' => 'pipa', 'image' => 'piping2.webp',          'title' => 'Installation Expansion Joint Metal, JO With PT. Sabi Tehnik',                'label' => 'Piping'],
            ['category' => 'pipa', 'image' => 'piping3.webp',          'title' => 'Installation, PLTU SEBALANG, JO With PT. Sabi Tehnik',                       'label' => 'Piping'],
            ['category' => 'pipa', 'image' => 'piping4.webp',          'title' => 'Supply Flexible Hose, PT. Pamitra, 2024, JO With PT. Sabi Tehnik',           'label' => 'Piping'],
            ['category' => 'pipa', 'image' => 'piping5.webp',          'title' => 'Installation & Service PT. Yoowon – Cikarang 2022, JO With PT. Sabi Tehnik', 'label' => 'Piping'],

            // Civil
            ['category' => 'civil', 'image' => 'civil-chipyard1.webp', 'title' => 'Pengecoran Area Chipyard', 'label' => 'Civil Works'],
            ['category' => 'civil', 'image' => 'roadwork.webp','title' => 'Road Work - Jakarta Utara',   'label' => 'Civil Works'],
            ['category' => 'civil', 'image' => 'civil-bachingplant1.webp', 'title' => 'Operasional Batching Plant 1', 'label' => 'Batching Plant'],
            ['category' => 'civil', 'image' => 'civil-bachingplant2.webp','title' => 'Operasional Batching Plant 2',   'label' => 'Batching Plant'],
            ['category' => 'civil', 'image' => 'civil-pengukuran.webp','title' => 'Survey dan Pemetaan',   'label' => 'Land Survey'],

            // Construction
            ['category' => 'construction', 'image' => 'construction1.webp', 'title' => 'Koordinasi dan Briefing Lapangan', 'label' => 'Construction & Management'],
            ['category' => 'construction', 'image' => 'construction3.webp', 'title' => 'Inspeksi Struktur dan Progress Proyek', 'label' => 'Construction & Management'],


            // Epoxy
            ['category' => 'epoxy', 'image' => 'epoxy-concrete.webp', 'title' => 'Concrete Polishing', 'label' => 'Epoxy'],
            ['category' => 'epoxy', 'image' => 'flooring-1.webp', 'title' => 'Area Penyimpanan', 'label' => 'Epoxy'],
            ['category' => 'epoxy', 'image' => 'flooring-2.webp', 'title' => 'Aplikasi Lapisan Epoxy', 'label' => 'Epoxy'],

            // Electrical
            ['category' => 'electrical', 'image' => 'electrical-batara.webp', 'title' => 'Electrical, PG Rendeng', 'label' => 'Electrical'],
            ['category' => 'electrical', 'image' => 'electrical-jawapower.webp', 'title' => 'Switchgear Installation PT Jawa Power, 2021', 'label' => 'Electrical'],

            // Architecture
            ['category' => 'architecture', 'image' => 'architecture-bungalow1.webp', 'title' => 'Seed Resort, Rote, 9 bungalows, PT Santic Sari Dewi, 2015–2016',   'label' => 'Architecture'],
            ['category' => 'architecture', 'image' => 'architecture-bungalow2.webp', 'title' => 'Sudamala Resort, Seraya, 23 bungalows, PT Griya Usaha, 2014–2015', 'label' => 'Architecture'],
        ]);

        // ── Selected Category ───────────────────────────────
        $selected = $request->get('category', 'all');

        if (!array_key_exists($selected, $categories)) {
            $selected = 'all';
        }

        // ── Filter Data ─────────────────────────────────────
        $filtered = $selected === 'all'
            ? $projects
            : $projects->where('category', $selected);

        // ── Count Data ──────────────────────────────────────
        $totalProjects = $projects->count();

        $categoryCounts = [
            'all' => $totalProjects,
        ];

        foreach ($categories as $key => $label) {
            if ($key !== 'all') {
                $categoryCounts[$key] = $projects->where('category', $key)->count();
            }
        }

        // ── Pagination ──────────────────────────────────────
        $perPage = 6;
        $currentPage = (int) $request->get('page', 1);

        $paginated = new LengthAwarePaginator(
            $filtered->forPage($currentPage, $perPage),
            $filtered->count(),
            $perPage,
            $currentPage,
            [
                'path'  => $request->url(),
                'query' => $request->query(),
            ]
        );

        return view('pages.projects', compact(
            'categories',
            'paginated',
            'selected',
            'totalProjects',
            'categoryCounts'
        ));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function organization()
    {
        return view('pages.perusahaan.organization');
    }
}