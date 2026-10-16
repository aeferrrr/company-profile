@extends('layouts.app')

@section('meta_title', __('general.seo.project_title'))
@section('meta_description', __('general.seo.project_desc'))

@section('content')

    {{-- HERO --}}
    <section class="hero-section hero-project reveal">
        <img src="{{ asset('/images/hero/beko.webp') }}" class="hero-bg" alt="Hero Background">
        <div class="hero-overlay"></div>

        <div class="container">
            <div class="hero-content reveal">
                <h1 class="hero-title">{{ __('projects.hero_title') }}</h1>
                <p class="hero-subtitle">{{ __('projects.hero_subtitle') }}</p>
            </div>
        </div>
    </section>

    {{-- FILTER --}}
    <section class="filter-section reveal">
        <div class="container">
            <nav class="nav-filter reveal">
                @foreach ($categories as $key => $label)
                    <div class="filter-link {{ $selected === $key ? 'active' : '' }}"
                        onclick="changeCategory('{{ $key }}', this)">
                        {{ $label }}
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
        <div class="container">
            <div id="galleryGrid">

                @if ($paginated->isEmpty())
                    <div class="empty-state">
                        <div class="empty-icon">📂</div>
                        <h3 class="empty-title">No Projects Found</h3>
                        <p class="empty-desc">There are no projects in this category yet.</p>
                    </div>
                @else
                    <div class="gallery-container reveal">
                        @foreach ($paginated as $item)
                            <div class="gallery-item" role="button" tabindex="0" aria-label="{{ $item['title'] }}"
                                data-project="{{ json_encode($item['viewer']) }}">

                                <img src="{{ $item['cover'] }}" alt="{{ $item['title'] }}" loading="lazy"
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
                                    <span class="item-category">{{ $item['label'] }}</span>
                                    <h3 class="item-title">{{ $item['title'] }}</h3>
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
        <div class="container">
            {{ $paginated->links('pagination::bootstrap-5') }}
        </div>
    </section>

    {{-- PROJECT VIEWER --}}
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

@endsection
