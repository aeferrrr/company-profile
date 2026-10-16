<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Str;
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
        $categories = [
            'all' => 'All',
            'civil' => 'Civil & Structural',
            'architecture' => 'Architecture & Interior',
            'mechanical' => 'Mechanical Engineering',
            'electrical' => 'Electrical & Instrumentation',
            'management' => 'Project Management & Construction',
            'concept' => 'Design Concept',
        ];

        $raw = config('projects');

        $projects = collect($raw)->map(fn($p) => $this->normalize($p));

        // ── Selected Category ───────────────────────────────
        $selected = $request->get('category', 'all');
        if (!array_key_exists($selected, $categories)) {
            $selected = 'all';
        }

        // ── Filter ──────────────────────────────────────────
        $filtered = $selected === 'all'
            ? $projects
            : $projects->where('category', $selected);

        // ── Count ───────────────────────────────────────────
        $totalProjects = $projects->count();
        $categoryCounts = ['all' => $totalProjects];
        foreach ($categories as $key => $label) {
            if ($key !== 'all') {
                $categoryCounts[$key] = $projects->where('category', $key)->count();
            }
        }

        // ── Pagination ──────────────────────────────────────
        $perPage = 6;
        $currentPage = max(1, (int) $request->get('page', 1));

        $paginated = new LengthAwarePaginator(
            $filtered->values()->forPage($currentPage, $perPage)->values(),
            $filtered->count(),
            $perPage,
            $currentPage,
            ['path' => $request->url(), 'query' => $request->query()]
        );

        return view('pages.projects', compact(
            'categories',
            'paginated',
            'selected',
            'totalProjects',
            'categoryCounts'
        ));
    }

    /**
     * Ubah Format A / Format B menjadi satu struktur seragam.
     */
    private function normalize(array $p): array
    {
        // Folder otomatis = nama category (atau isi 'folder' kalau ingin beda)
        $folder = $p['folder'] ?? $p['category'];
        $url = fn(string $path) => asset("images/projects/{$folder}/" . ltrim($path, '/'));

        // Format A → jadikan 1 section berisi 1 foto
        if (isset($p['image'])) {
            $p['media'] = [$p['image']];
        }

        // 'media' (tanpa nama section) → 1 section tanpa nama
        $sections = $p['sections'] ?? [null => $p['media'] ?? []];

        $viewerSections = [];
        foreach ($sections as $name => $items) {
            $media = [];
            foreach ($items as $item) {
                if (is_string($item)) {
                    $media[] = ['type' => 'image', 'src' => $url($item), 'thumb' => $url($item)];
                } elseif (isset($item['video'])) {
                    $poster = isset($item['poster']) ? $url($item['poster']) : null;
                    $media[] = ['type' => 'video', 'src' => $url($item['video']), 'thumb' => $poster, 'poster' => $poster];
                } elseif (isset($item['youtube'])) {
                    $media[] = [
                        'type' => 'youtube',
                        'src' => $item['youtube'],
                        'thumb' => $item['poster'] ?? null
                            ? $url($item['poster'])
                            : 'https://img.youtube.com/vi/' . $item['youtube'] . '/hqdefault.jpg',
                    ];
                }
            }
            $viewerSections[] = ['name' => is_string($name) ? $name : null, 'media' => $media];
        }

        $allMedia = collect($viewerSections)->flatMap(fn($s) => $s['media']);

        $firstImage = $allMedia->firstWhere('type', 'image')['src'] ?? ($allMedia->first()['thumb'] ?? null);

        return [
            'slug' => $p['slug'] ?? Str::slug($p['title']),
            'category' => $p['category'],
            'label' => $p['label'],
            'title' => $p['title'],
            'cover' => isset($p['cover']) ? $url($p['cover']) : $firstImage,
            'photo_count' => $allMedia->where('type', 'image')->count(),
            'video_count' => $allMedia->whereIn('type', ['video', 'youtube'])->count(),
            // dikirim ke JS
            'viewer' => [
                'title' => $p['title'],
                'label' => $p['label'],
                'sections' => $viewerSections,
            ],
        ];
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