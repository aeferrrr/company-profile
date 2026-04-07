<?php

namespace App\Http\Controllers;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

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
        'construction' => 'Construction',
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
        ['category' => 'atap', 'image' => 'atap-pungkook.jpg',  'title' => 'PT Pungkook Indonesia One',  'label' => 'Roofing'],
        ['category' => 'atap', 'image' => 'atap-sg.jpg',        'title' => 'PT Semarang Garment',        'label' => 'Roofing'],
        ['category' => 'atap', 'image' => 'atap-pekerjaan.jpg', 'title' => 'Pekerjaan Atap',             'label' => 'Roofing'],

        // Interior
        ['category' => 'interior', 'image' => 'interior-bidakara.jpg',  'title' => 'Interior - Bidakara',       'label' => 'Interior'],
        ['category' => 'interior', 'image' => 'interior-mezzanine.jpg', 'title' => 'Solo - Mezzanine',          'label' => 'Interior'],
        ['category' => 'interior', 'image' => 'interior-dasoni1.jpg',   'title' => 'K Dasoni - Concept 1',      'label' => 'Interior'],
        ['category' => 'interior', 'image' => 'interior-dasoni.jpg',    'title' => 'K Dasoni - Concept 2',      'label' => 'Interior'],
        ['category' => 'interior', 'image' => 'interior-vipkn.jpeg',    'title' => 'Interior & Revamping - KN', 'label' => 'Interior'],

        // Piping
        ['category' => 'pipa', 'image' => 'piping-balikpapan.jpg', 'title' => 'Piping RDMP Balikpapan',                                                    'label' => 'Piping'],
        ['category' => 'pipa', 'image' => 'piping1.webp',          'title' => 'Supply Expansion Joint Rubber, JO With PT. Sabi Tehnik',                     'label' => 'Piping'],
        ['category' => 'pipa', 'image' => 'piping2.webp',          'title' => 'Installation Expansion Joint Metal, JO With PT. Sabi Tehnik',                'label' => 'Piping'],
        ['category' => 'pipa', 'image' => 'piping3.webp',          'title' => 'Installation, PLTU SEBALANG, JO With PT. Sabi Tehnik',                       'label' => 'Piping'],
        ['category' => 'pipa', 'image' => 'piping4.webp',          'title' => 'Supply Flexible Hose, PT. Pamitra, 2024, JO With PT. Sabi Tehnik',           'label' => 'Piping'],
        ['category' => 'pipa', 'image' => 'piping5.webp',          'title' => 'Installation & Service PT. Yoowon – Cikarang 2022, JO With PT. Sabi Tehnik', 'label' => 'Piping'],

        // Civil
        ['category' => 'civil', 'image' => 'civil-chipyard1.jpeg', 'title' => 'Chipyard - Kertas Nusantara', 'label' => 'Civil'],
        ['category' => 'civil', 'image' => 'roadwork.webp',        'title' => 'Road Work - Jakarta Utara',   'label' => 'Civil'],

        // Epoxy
        ['category' => 'epoxy', 'image' => 'epoxy-concrete.jpg', 'title' => 'Concrete Polishing', 'label' => 'Epoxy'],

        // Electrical
        ['category' => 'electrical', 'image' => 'electrical-batara.webp', 'title' => 'Electrical, PG Rendeng', 'label' => 'Electrical'],

        // Architecture
        ['category' => 'architecture', 'image' => 'architecture-bungalow1.webp', 'title' => 'Seed Resort, Rote, 9 bungalows, PT Santic Sari Dewi, 2015–2016',   'label' => 'Architecture'],
        ['category' => 'architecture', 'image' => 'architecture-bungalow2.webp', 'title' => 'Sudamala Resort, Seraya, 23 bungalows, PT Griya Usaha, 2014–2015', 'label' => 'Architecture'],
    ]);

    // ── Filter ────────────────────────────────────────────
    $selected = $request->get('category', 'all');

    $filtered = $selected === 'all'
        ? $projects
        : $projects->where('category', $selected);

    // ── Pagination ────────────────────────────────────────
    $perPage     = 6;
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
