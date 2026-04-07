@extends('layouts.app')

@section('meta_title', __('general.seo.project_title'))
@section('meta_description', __('general.seo.project_desc'))

@section('content')

{{-- =====================================================
     HERO
===================================================== --}}
<section class="hero-section hero-project">
    <img src="{{ asset('/images/hero/beko.webp') }}" class="hero-bg" alt="Hero Background">
    <div class="hero-overlay"></div>

    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">{{ __('projects.hero_title') }}</h1>
            <p class="hero-subtitle">{{ __('projects.hero_subtitle') }}</p>
        </div>
    </div>
</section>

{{-- =====================================================
     FILTER
===================================================== --}}
<section class="filter-section">
    <div class="container">
        <nav class="nav-filter">
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


{{-- GALLERY --}}
<section class="gallery-section" id="gallerySection">
    <div class="container">
        <div id="galleryGrid">

            @if ($paginated->isEmpty())
                <div class="empty-state">
                    <div class="empty-icon">📂</div>
                    <h3 class="empty-title">No Projects Found</h3>
                    <p class="empty-desc">There are no projects in this category yet.</p>
                </div>
            @else
                <div class="gallery-container">
                    @foreach ($paginated as $item)
                        <div class="gallery-item" data-src="{{ asset('images/projects/' . $item['image']) }}">
                            <img src="{{ asset('images/projects/' . $item['image']) }}"
                                 alt="{{ $item['title'] }}">
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


{{-- =====================================================
     PAGINATION
===================================================== --}}
<section class="action-section text-center">
    <div class="container">
        {{ $paginated->links('pagination::bootstrap-5') }}
    </div>
</section>


{{-- MODAL --}}
<div id="imageModal" class="image-modal">
    <button class="modal-nav modal-prev" onclick="navigateModal(-1)">&#8249;</button>
    <img class="modal-content-img" id="modalImage" alt="Preview">
    <button class="modal-nav modal-next" onclick="navigateModal(1)">&#8250;</button>
    <span class="close-modal" onclick="closeImageModal()">&times;</span>
</div>

@endsection