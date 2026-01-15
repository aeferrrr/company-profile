@extends('layouts.app')

@section('title', 'Construction & Management | KPCM Industrial Estate')

@section('content')

    {{-- ======================
   SERVICE HERO
====================== --}}
    <section class="hero-section">
        <img src="{{ asset('images/background-senja.png') }}" class="hero-video" alt="Construction & Management">
        <div class="hero-overlay"></div>

        <div class="container hero-content">
            <h1 class="hero-title">Construction & Management</h1>
            <p class="hero-subtitle">
                Professional industrial construction with structured project management.
            </p>
        </div>
    </section>

    {{-- ======================
   SERVICE VISUAL
====================== --}}
    <section class="service-visual">
        <img src="{{ asset('images/services/construction.jpg') }}" alt="Construction & Management">
    </section>

    {{-- ======================
   CTA
====================== --}}
    <section class="container pb-5">
        <div class="text-center p-5 rounded bg-white shadow-sm">
            <h3 class="fw-bold mb-3">
                Ready to Build Your Industrial Project?
            </h3>
            <p class="text-muted mb-4">
                Contact us today to discuss your construction and project management needs.
            </p>
            <a href="/contact" class="btn btn-primary px-4 py-2">
                Contact Us
            </a>
        </div>
    </section>
@endsection
