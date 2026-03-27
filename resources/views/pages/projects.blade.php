@extends('layouts.app')

@section('meta_title', __('general.seo.project_title'))
@section('meta_description', __('general.seo.project_desc'))

@section('content')

    {{-- ======================
        PROJECT HERO
    ====================== --}}
    <section class="hero-section hero-project">

        {{-- Background Image --}}
        <img src="{{ asset('/images/hero/beko.webp') }}" class="hero-bg" alt="{{ __('projects.hero_title') }}">

        {{-- Overlay --}}
        <div class="hero-overlay"></div>

        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">{{ __('projects.hero_title') }}</h1>
                <p class="hero-subtitle">
                    {{ __('projects.hero_subtitle') }}
                </p>
            </div>
        </div>
    </section>

    </section>
    <!-- Section 2: Filter (Sticky) -->
    <section class="filter-section">
        <div class="container">
            <nav class="nav-filter">
                <div class="filter-link active" onclick="changeCategory('all', this)">{{ __('projects.filter_all') }}</div>
                <div class="filter-link" onclick="changeCategory('atap', this)">Roofing</div>
                <div class="filter-link" onclick="changeCategory('pipa', this)">Piping</div>
                <div class="filter-link" onclick="changeCategory('epoxy', this)">Epoxy</div>
                <div class="filter-link" onclick="changeCategory('interior', this)">{{ __('projects.filter_interior') }}
                </div>
                <div class="filter-link" onclick="changeCategory('civil', this)">Civil</div>
            </nav>
        </div>
    </section>

    <!-- Section 3: Gallery Content -->
    <section class="gallery-section">
        <div class="container">
            <div class="gallery-container" id="galleryGrid">

                <!-- Atap -->
                <div class="gallery-item" data-category="atap">
                    <img src="{{ asset('images/projects/atap-pungkook.jpg') }}" alt="Atap Pungkook">
                    <div class="gallery-overlay">
                        <span class="item-category">{{ __('projects.label_roofing') }}</span>
                        <h3 class="item-title">PT Pungkook Indonesia One</h3>
                    </div>
                </div>
                <div class="gallery-item" data-category="atap">
                    <img src="{{ asset('images/projects/atap-sg.jpg') }}" alt="Atap Semarang Garment">
                    <div class="gallery-overlay">
                        <span class="item-category">{{ __('projects.label_roofing') }}</span>
                        <h3 class="item-title">PT Semarang Garment</h3>
                    </div>
                </div>
                <div class="gallery-item" data-category="atap">
                    <img src="{{ asset('images/projects/atap-pekerjaan.jpg') }}" alt="Atap Pekerjaan">
                    <div class="gallery-overlay">
                        <span class="item-category">{{ __('projects.label_roofing') }}</span>
                        <h3 class="item-title">Pekerjaan Atap</h3>
                    </div>
                </div>

                <!-- Interior -->
                <div class="gallery-item" data-category="interior">
                    <img src="{{ asset('images/projects/interior-bidakara.jpg') }}" alt="Interior Bidakara">
                    <div class="gallery-overlay">
                        <span class="item-category">{{ __('projects.label_interior') }}</span>
                        <h3 class="item-title">Interior - Bidakara</h3>
                    </div>
                </div>
                <div class="gallery-item" data-category="interior">
                    <img src="{{ asset('images/projects/interior-mezzanine.jpg') }}" alt="Interior Solo">
                    <div class="gallery-overlay">
                        <span class="item-category">{{ __('projects.label_interior') }}</span>
                        <h3 class="item-title">Solo - Mezzanine</h3>
                    </div>
                </div>
                <div class="gallery-item" data-category="interior">
                    <img src="{{ asset('images/projects/interior-dasoni1.jpg') }}" alt="Interior Dasoni">
                    <div class="gallery-overlay">
                        <span class="item-category">{{ __('projects.label_interior') }}</span>
                        <h3 class="item-title">K Dasoni - Interior Concept 1</h3>
                    </div>
                </div>
                <div class="gallery-item" data-category="interior">
                    <img src="{{ asset('images/projects/interior-dasoni.jpg') }}" alt="Interior Dasoni">
                    <div class="gallery-overlay">
                        <span class="item-category">{{ __('projects.label_interior') }}</span>
                        <h3 class="item-title">K Dasoni - Interior Concept 2</h3>
                    </div>
                </div>
                <div class="gallery-item" data-category="interior">
                    <img src="{{ asset('images/projects/interior-vipkn.jpeg') }}" alt="Interior Dasoni">
                    <div class="gallery-overlay">
                        <span class="item-category">{{ __('projects.label_interior') }}</span>
                        <h3 class="item-title">Interior & Revamping - Kertas Nusantara</h3>
                    </div>
                </div>

                <!-- Pipa -->
                <div class="gallery-item" data-category="pipa">
                    <img src="{{ asset('images/projects/piping-balikpapan.jpg') }}" alt="Instalasi Pipa">
                    <div class="gallery-overlay">
                        <span class="item-category">{{ __('projects.label_piping') }}</span>
                        <h3 class="item-title">Piping, RDMP Balikpapan, JO with PT Gemilang Karya Mandiri, 2023</h3>
                    </div>
                </div>

                <!-- Temporary -->
                <div class="gallery-item" data-category="maintenance">
                    <img src="{{ asset('images/projects/temporary-hyundai.jpg') }}" alt="Coating Tangki">
                    <div class="gallery-overlay">
                        <span class="item-category">{{ __('projects.label_temporary') }}</span>
                        <h3 class="item-title">Access Floor, Perforated (Air Grill), Data Center and Server Room</h3>
                    </div>
                </div>

                <!-- Epoxy -->
                <div class="gallery-item" data-category="civil">
                    <img src="{{ asset('images/projects/civil-chipyard1.jpeg') }}" alt="Civil Cor">
                    <div class="gallery-overlay">
                        <span class="item-category">Civil</span>
                        <h3 class="item-title">Chipyard - Kertas Nusantara</h3>
                    </div>
                </div>

                <!-- Epoxy -->
                <div class="gallery-item" data-category="epoxy">
                    <img src="{{ asset('images/projects/epoxy-concrete.jpg') }}" alt="Pipe Rack">
                    <div class="gallery-overlay">
                        <span class="item-category">{{ __('projects.label_epoxy') }}</span>
                        <h3 class="item-title">Concrete Polishing Epoxy</h3>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Section 4: Action / Load More -->
    <section class="action-section text-center">
        <div class="container">
            <button class="load-more-btn" id="loadMoreBtn" onclick="showAll()">
                {{ __('projects.btn_load_more') }}
            </button>
        </div>
    </section>
    <!-- Image Modal -->
    <div id="imageModal" class="image-modal">
        <span class="close-modal" onclick="closeImageModal()">&times;</span>
        <img class="modal-content-img" id="modalImage">
    </div>
@endsection
