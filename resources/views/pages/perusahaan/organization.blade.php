@extends('layouts.app')

@section('title', 'Organization | KPCM Industrial Estate')

@section('content')

    {{-- ======================
   ORGANIZATION HERO (FULL WIDTH)
====================== --}}
    <section class="hero-section hero-organization">

        {{-- Background Image (DO NOT CHANGE) --}}
        <img src="{{ asset('images/organization.jpg') }}" class="hero-bg" alt="Organization Structure KPCM">

        {{-- Overlay --}}
        <div class="hero-overlay"></div>

        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Organization Structure</h1>
                <p class="hero-subtitle">
                    Management and organizational structure of PT KPCM Industrial Estate
                </p>
            </div>
        </div>

    </section>


    {{-- ======================
       ORGANIZATION SECTION
    ====================== --}}
    <section id="organization" class="organization-section">
        <div class="container">

            {{-- SECTION TITLE --}}
            <div class="section-header text-center mb-5">
                <h2 class="fw-bold text-uppercase">Organization Structure</h2>
                <p class="text-muted mt-2">
                    Organizational structure of PT KPCM Industrial Estate
                </p>
            </div>

            {{-- ======================
               TOGGLE BUTTON
            ====================== --}}
            <div class="org-toggle text-center mb-4">
                {{-- Tombol Office Default Active --}}
                <button class="org-btn active" data-target="office-org">
                    Office Organization
                </button>
                {{-- Tombol Site Tidak Active --}}
                <button class="org-btn" data-target="site-org">
                    Site Organization – Berau
                </button>
            </div>

            {{-- ======================
               OFFICE ORGANIZATION
            ====================== --}}
            {{-- PERBAIKAN: Tambahkan class 'active' disini agar muncul duluan --}}
            <div id="office-org" class="org-wrapper active" style="max-width: 1200px; margin: 0 auto; padding: 20px;">
                <div class="org-chart text-center">
                    @include('pages.perusahaan.organizationchart.office-svg')
                </div>
            </div>

            {{-- ======================
               SITE ORGANIZATION – BERAU
            ====================== --}}
            {{-- PERBAIKAN: HAPUS class 'active' dari sini agar tersembunyi saat awal --}}
            <div id="site-org" class="org-wrapper">
                <div class="org-chart text-center">
                    @include('pages.perusahaan.organizationchart.berau-svg')
                </div>
            </div>

        </div>
    </section>

    {{-- ======================
       TOGGLE SCRIPT
    ====================== --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const orgButtons = document.querySelectorAll('.org-btn');
            const orgWrappers = document.querySelectorAll('.org-wrapper');

            orgButtons.forEach(button => {
                button.addEventListener('click', () => {
                    // 1. Matikan semua tombol
                    orgButtons.forEach(btn => btn.classList.remove('active'));
                    // 2. Aktifkan tombol yang diklik
                    button.classList.add('active');

                    // 3. Sembunyikan semua chart
                    orgWrappers.forEach(wrapper => {
                        wrapper.classList.remove('active');
                        wrapper.style.display =
                        'none'; // Paksa display none agar animasi ulang
                    });

                    // 4. Munculkan chart yang sesuai target
                    const targetId = button.getAttribute('data-target');
                    const targetWrapper = document.getElementById(targetId);

                    if (targetWrapper) {
                        targetWrapper.style.display = 'block'; // Reset display
                        // Sedikit delay agar animasi CSS transition bisa jalan (jika ada fade effect)
                        setTimeout(() => {
                            targetWrapper.classList.add('active');
                        }, 10);
                    }
                });
            });
        });
    </script>

@endsection
