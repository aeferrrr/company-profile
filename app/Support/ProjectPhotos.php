<?php

namespace App\Support;

use Illuminate\Support\Str;

class ProjectPhotos
{
    protected static function all(): array
    {
        return config('projects');
    }

    /**
     * Return: [['src' => url foto, 'title' => judul, 'url' => link ke galeri project], ...]
     */
    public static function many(array $categories, int $count, array &$used = []): array
    {
        $pool = []; // 'folder/file.webp' => ['title', 'category', 'slug']

        foreach (self::all() as $item) {
            $category = $item['category'] ?? '';

            if (!in_array($category, $categories, true)) {
                continue;
            }

            $folder = $item['folder'] ?? $category;
            $title = $item['title'] ?? '';
            $slug = $item['slug'] ?? Str::slug($title);   // harus sama dengan PageController

            $files = [];
            if (!empty($item['image']))
                $files[] = $item['image'];
            if (!empty($item['cover']))
                $files[] = $item['cover'];

            foreach (($item['sections'] ?? []) as $media) {
                foreach ($media as $m) {
                    if (is_string($m))
                        $files[] = $m;
                }
            }
            foreach (($item['media'] ?? []) as $m) {
                if (is_string($m))
                    $files[] = $m;
            }

            foreach ($files as $f) {
                $path = $folder . '/' . ltrim($f, '/');
                $pool[$path] ??= [
                    'title' => $title,
                    'category' => $category,
                    'slug' => $slug,
                ];
            }
        }

        $candidates = array_values(array_filter(
            array_keys($pool),
            fn($p) => !in_array($p, $used, true)
                && file_exists(public_path('images/projects/' . $p))
        ));

        shuffle($candidates);

        $picked = [];
        foreach (array_slice($candidates, 0, $count) as $p) {
            $used[] = $p;
            $picked[] = [
                'src' => asset('images/projects/' . $p),
                'title' => $pool[$p]['title'],
                'url' => route('projects', [
                    'category' => $pool[$p]['category'],
                    'open' => $pool[$p]['slug'],
                ]),
            ];
        }

        return $picked;
    }
}