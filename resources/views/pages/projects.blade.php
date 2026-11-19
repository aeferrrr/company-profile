
@extends('layouts.app')

@section('meta_title', __('general.seo.project_title'))
@section('meta_description', __('general.seo.project_desc'))

@section('content')

    {{-- HERO --}}
    <section class="hero-section hero-page">
        <img src="{{ asset('images/hero/excavator-action.webp') }}" class="hero-bg" alt="{{ __('projects.hero_title') }}">

        <div class="hero-overlay"></div>

        <div class="hero-text">
            <h1>{{ __('projects.hero_title') }}</h1>
            <p>{{ __('projects.hero_subtitle') }}</p>
        </div>
    </section>

    @php
        /*
         * Terjemahkan teks yang berasal dari config/projects.php.
         * Nama kategori, slug, dan path media tidak diubah.
         */
        $projectTitles = __('projects.project_titles');
        $projectLabels = __('projects.project_labels');
        $projectSections = __('projects.project_sections');
        $categoryLabels = __('projects.category_labels');

        $translateProject = function ($text, $dictionary) {
            return is_array($dictionary)
                ? ($dictionary[$text] ?? $text)
                : $text;
        };
    @endphp

    {{-- FILTER --}}
    <section class="filter-section reveal">
        <div class="container-fluid px-4 px-lg-5 py-lg-5 reveal">
            <nav class="nav-filter reveal">
                @foreach ($categories as $key => $label)
                    <div class="filter-link {{ $selected === $key ? 'active' : '' }}"
                        onclick="changeCategory('{{ $key }}', this)">
                        {{ $categoryLabels[$key] ?? $label }}
                        @if (isset($categoryCounts[$key]))
                            <span class="filter-badge">{{ $categoryCounts[$key] }}</span>
                        @endif
                    </div>
                @endforeach
            </nav>
        </div>
    </section>

    {{-- GALLERY: 1 card = 1 project --}}
    <section class="gallery-section reveal" id="gallerySection">
        <div class="container-fluid px-4 px-lg-5 py-lg-5 reveal">
            <div id="galleryGrid">

                @if ($paginated->isEmpty())
                    <div class="empty-state">
                        <div class="empty-icon">📂</div>
                        <h3 class="empty-title">{{ __('projects.empty_title') }}</h3>
                        <p class="empty-desc">{{ __('projects.empty_desc') }}</p>
                    </div>
                @else
                    <div class="gallery-container reveal">
                        @foreach ($paginated as $item)
                            @php
                                $translatedTitle = $translateProject($item['title'], $projectTitles);
                                $translatedLabel = $translateProject($item['label'], $projectLabels);

                                $translatedViewer = $item['viewer'];

                                if (isset($translatedViewer['title'])) {
                                    $translatedViewer['title'] = $translateProject(
                                        $translatedViewer['title'],
                                        $projectTitles
                                    );
                                }

                                if (isset($translatedViewer['sections']) && is_array($translatedViewer['sections'])) {
                                    foreach ($translatedViewer['sections'] as &$viewerSection) {
                                        if (isset($viewerSection['name']) && $viewerSection['name'] !== null) {
                                            $viewerSection['name'] = $translateProject(
                                                $viewerSection['name'],
                                                $projectSections
                                            );
                                        }
                                    }
                                    unset($viewerSection);
                                }
                            @endphp

                            <div class="gallery-item" role="button" tabindex="0" aria-label="{{ $translatedTitle }}"
                                data-slug="{{ $item['slug'] }}" data-project="{{ json_encode($translatedViewer) }}">

                                <img src="{{ $item['cover'] }}" alt="{{ $translatedTitle }}" loading="lazy"
                                    onload="this.classList.add('loaded'); this.parentNode.classList.add('is-ready')">

                                @if ($item['photo_count'] + $item['video_count'] > 1)
                                    <div class="media-badges">
                                        @if ($item['photo_count'])
                                            <span>📷 {{ $item['photo_count'] }}</span>
                                        @endif
                                        @if ($item['video_count'])
                                            <span>▶ {{ $item['video_count'] }}</span>
                                        @endif
                                    </div>
                                @endif

                                <div class="gallery-overlay">
                                    <span class="item-category">{{ $translatedLabel }}</span>
                                    <h3 class="item-title">{{ $translatedTitle }}</h3>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif

            </div>
        </div>
    </section>

    {{-- PAGINATION --}}
    <section class="action-section text-center reveal">
        <div class="container-fluid px-4 px-lg-5 py-lg-5 reveal">
            {{ $paginated->links('pagination::bootstrap-5') }}
        </div>
    </section>

    {{-- PROJECT VIEWER --}}
    <div id="projectViewer" class="image-modal" role="dialog" aria-modal="true" aria-labelledby="viewerTitle">
        <button type="button" class="close-modal" id="viewerClose" aria-label="{{ __('projects.close') }}">&times;</button>

        <div class="viewer-wrap">
            <div class="viewer-head">
                <h2 class="viewer-title" id="viewerTitle"></h2>
                <span class="viewer-counter" id="viewerCounter"></span>
            </div>

            <div class="viewer-sections" id="viewerSections"></div>

            <div class="viewer-stage-wrap">
                <button type="button" class="modal-nav modal-prev" id="viewerPrev" aria-label="{{ __('projects.previous') }}">&#8249;</button>
                <div class="viewer-stage" id="viewerStage"></div>
                <button type="button" class="modal-nav modal-next" id="viewerNext" aria-label="{{ __('projects.next') }}">&#8250;</button>
            </div>

            <div class="viewer-thumbs" id="viewerThumbs"></div>
        </div>
    </div>

    <script>
        window.addEventListener('load', function() {
            const params = new URLSearchParams(location.search);
            const slug = params.get('open');
            if (!slug) return;

            const el = document.querySelector('.gallery-item[data-slug="' + CSS.escape(slug) + '"]');
            if (!el) return;

            el.scrollIntoView({
                block: 'center'
            });
            setTimeout(() => el.click(), 400); // buka viewer project

            // bersihkan ?open= dari URL supaya refresh tidak membuka ulang
            params.delete('open');
            const qs = params.toString();
            history.replaceState(null, '', location.pathname + (qs ? '?' + qs : ''));
        });
    </script>
@endsection
