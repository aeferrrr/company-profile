@extends('layouts.app')

@section('title', 'Struktur Organisasi | KPCM Industrial Estate')

@section('content')

    {{-- HERO --}}
    <section class="hero-section hero-organization">
        <img src="{{ asset('images/organization.jpg') }}" class="hero-bg" alt="Struktur Organisasi KPCM">
        <div class="hero-overlay"></div>

        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Struktur Organisasi</h1>
                <p class="hero-subtitle">
                    Manajemen dan struktur organisasi PT KPCM Industrial Estate
                </p>
            </div>
        </div>
    </section>

    {{-- ORGANIZATION --}}
    <section id="organization" class="organization-section">
        <div class="container">

            {{-- HEADER --}}
            <div class="section-header text-center mb-5">
                <h2 class="fw-bold text-uppercase">Struktur Organisasi</h2>
                <p class="text-muted mt-2">
                    Struktur organisasi tata kelola PT KPCM Industrial Estate
                </p>
            </div>

            {{-- TOGGLE --}}
            <div class="org-toggle text-center mb-4">
                <button class="org-btn active" data-target="office-org">
                    Organisasi Kantor Pusat
                </button>
                <button class="org-btn" data-target="site-org">
                    Organisasi Proyek – Berau
                </button>
            </div>

            {{-- OFFICE --}}
            <div id="office-org" class="org-wrapper active">
                <div class="org-chart text-center">
                    @include('components.organization.office-svg')
                </div>
            </div>

            {{-- SITE --}}
            <div id="site-org" class="org-wrapper">
                <div class="org-chart text-center">
                    @include('components.organization.berau-svg')
                </div>
            </div>
        </div>
    </section>

@endsection