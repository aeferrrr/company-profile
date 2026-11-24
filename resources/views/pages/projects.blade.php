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
            return is_array($dictionary) ? $dictionary[$text] ?? $text : $text;
        };
    @endphp


    {{-- FILTER --}}
    <section class="filter-section reveal" id="filterSection">
        <div class="container-fluid px-4 px-lg-5 py-lg-5 reveal">

            <nav class="nav-filter reveal">

                @foreach ($categories as $key => $label)
                    @php
                        $filterUrl =
                            $key === 'all'
                                ? url()->current() . '#filterSection'
                                : url()->current() . '?category=' . urlencode($key) . '#filterSection';
                    @endphp

                    <a href="{{ $filterUrl }}" class="filter-link {{ $selected === $key ? 'active' : '' }}"
                        @if ($selected === $key) aria-current="page" @endif>

                        {{ $categoryLabels[$key] ?? $label }}

                        @if (isset($categoryCounts[$key]))
                            <span class="filter-badge">
                                {{ $categoryCounts[$key] }}
                            </span>
                        @endif

                    </a>
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
                                        $projectTitles,
                                    );
                                }

                                if (isset($translatedViewer['sections']) && is_array($translatedViewer['sections'])) {
                                    foreach ($translatedViewer['sections'] as &$viewerSection) {
                                        if (isset($viewerSection['name']) && $viewerSection['name'] !== null) {
                                            $viewerSection['name'] = $translateProject(
                                                $viewerSection['name'],
                                                $projectSections,
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
    @if ($paginated->hasPages())
        <section class="action-section text-center reveal" id="projectPagination">

            <div class="container-fluid px-4 px-lg-5 py-lg-5 reveal">

                {{ $paginated->onEachSide(1)->fragment('gallerySection')->links('pagination::bootstrap-5') }}

            </div>

        </section>
    @endif



    {{-- PROJECT VIEWER --}}
    <div id="projectViewer" class="image-modal" role="dialog" aria-modal="true" aria-labelledby="viewerTitle">
        <button type="button" class="close-modal" id="viewerClose"
            aria-label="{{ __('projects.close') }}">&times;</button>

        <div class="viewer-wrap">
            <div class="viewer-head">
                <h2 class="viewer-title" id="viewerTitle"></h2>
                <span class="viewer-counter" id="viewerCounter"></span>
            </div>

            <div class="viewer-sections" id="viewerSections"></div>

            <div class="viewer-stage-wrap">
                <button type="button" class="modal-nav modal-prev" id="viewerPrev"
                    aria-label="{{ __('projects.previous') }}">&#8249;</button>
                <div class="viewer-stage" id="viewerStage"></div>
                <button type="button" class="modal-nav modal-next" id="viewerNext"
                    aria-label="{{ __('projects.next') }}">&#8250;</button>
            </div>

            <div class="viewer-thumbs" id="viewerThumbs"></div>
        </div>
    </div>



    <script>
        (function() {
            'use strict';

            const gallery = document.getElementById('galleryGrid');
            const pagination = document.getElementById('projectPagination');

            if (!gallery || !pagination) return;

            let activeRequest = null;

            // PRELOAD GAMBAR SEBELUM DIGANTI
            async function preloadImages(container) {
                const images = Array.from(
                    container.querySelectorAll('.gallery-item img')
                );

                const loading = images.map(img => {
                    return new Promise(resolve => {
                        const src = img.getAttribute('src');

                        if (!src) {
                            resolve();
                            return;
                        }

                        const preloader = new Image();

                        preloader.onload = resolve;
                        preloader.onerror = resolve;
                        preloader.src = src;

                        if (preloader.complete) resolve();
                    });
                });

                // Batasi waktu tunggu gambar
                await Promise.race([
                    Promise.all(loading),
                    new Promise(resolve => setTimeout(resolve, 2500))
                ]);
            }

            // UPDATE KARTU TANPA MENGGANTI ELEMEN UTAMA
            function updateGallery(newGallery) {
                const currentContainer = gallery.querySelector(
                    '.gallery-container'
                );

                const nextContainer = newGallery.querySelector(
                    '.gallery-container'
                );

                if (!currentContainer || !nextContainer) {
                    gallery.innerHTML = newGallery.innerHTML;
                    return;
                }

                const currentCards = Array.from(
                    currentContainer.querySelectorAll(':scope > .gallery-item')
                );

                const nextCards = Array.from(
                    nextContainer.querySelectorAll(':scope > .gallery-item')
                );

                nextCards.forEach((nextCard, index) => {
                    let card = currentCards[index];

                    if (!card) {
                        card = nextCard.cloneNode(true);
                        currentContainer.appendChild(card);
                    } else {
                        // Perbarui atribut project
                        Array.from(card.attributes).forEach(attr => {
                            if (!nextCard.hasAttribute(attr.name)) {
                                card.removeAttribute(attr.name);
                            }
                        });

                        Array.from(nextCard.attributes).forEach(attr => {
                            card.setAttribute(attr.name, attr.value);
                        });

                        // Ganti isi kartu tanpa menghapus event di elemen utama
                        card.innerHTML = nextCard.innerHTML;
                    }

                    card.hidden = false;
                    card.classList.add('is-ready');

                    card.querySelectorAll('img').forEach(img => {
                        img.classList.add('loaded');
                    });

                    // Animasi lembut pada kartu baru
                    if (typeof card.animate === 'function') {
                        card.animate(
                            [{
                                    opacity: 0.88
                                },
                                {
                                    opacity: 1
                                }
                            ], {
                                duration: 220,
                                easing: 'ease-out'
                            }
                        );
                    }
                });

                // Sembunyikan slot yang tidak digunakan
                currentCards.slice(nextCards.length).forEach(card => {
                    card.hidden = true;
                });
            }

            // AJAX PAGINATION
            async function loadProjectPage(url, pushHistory = true) {

                // Batalkan request sebelumnya jika klik cepat
                if (activeRequest) {
                    activeRequest.abort();
                }

                const controller = new AbortController();
                activeRequest = controller;

                try {
                    const response = await fetch(url, {
                        method: 'GET',
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        },
                        signal: controller.signal
                    });

                    if (!response.ok) {
                        throw new Error('Gagal memuat project');
                    }

                    const html = await response.text();

                    const parser = new DOMParser();

                    const doc = parser.parseFromString(
                        html,
                        'text/html'
                    );

                    const newGallery = doc.getElementById('galleryGrid');
                    const newPagination = doc.getElementById(
                        'projectPagination'
                    );

                    if (!newGallery) {
                        throw new Error('Gallery tidak ditemukan');
                    }

                    // Gallery lama tetap tampil saat gambar baru dimuat
                    await preloadImages(newGallery);

                    if (controller.signal.aborted) return;

                    // Update gallery
                    updateGallery(newGallery);

                    // Update nomor pagination dan jumlah hasil
                    pagination.innerHTML = newPagination ?
                        newPagination.innerHTML :
                        '';

                    // Update URL tanpa reload
                    if (pushHistory) {
                        const target = new URL(url, window.location.href);

                        history.pushState({
                                projectPagination: true
                            },
                            '',
                            target.pathname + target.search + target.hash
                        );

                        // Scroll halus ke gallery
                        document.getElementById('gallerySection')
                            ?.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });
                    }

                } catch (error) {
                    if (error.name !== 'AbortError') {
                        console.error('Pagination AJAX:', error);
                    }
                } finally {
                    if (activeRequest === controller) {
                        activeRequest = null;
                    }
                }
            }

            // TANGKAP KLIK PAGINATION
            document.addEventListener('click', function(event) {

                if (!(event.target instanceof Element)) return;

                const link = event.target.closest(
                    '#projectPagination a.page-link'
                );

                if (!link || !link.href) return;

                // Izinkan membuka tab baru
                if (
                    event.button !== 0 ||
                    event.ctrlKey ||
                    event.metaKey ||
                    event.shiftKey ||
                    event.altKey
                ) {
                    return;
                }

                const target = new URL(link.href);

                if (target.origin !== window.location.origin) return;

                event.preventDefault();
                event.stopImmediatePropagation();

                loadProjectPage(target.href);

            }, true);

            // SUPPORT TOMBOL BACK / FORWARD BROWSER
            window.addEventListener('popstate', function() {
                loadProjectPage(window.location.href, false);
            });

        })();
    </script>


@endsection
