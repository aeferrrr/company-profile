@extends('layouts.app')

@section('title', __('contact.title') . ' | KPCM Industrial Estate')

@section('content')

    {{-- ======================
        CONTACT HERO
    ====================== --}}
    <section class="hero-section hero-contact">
        <img src="{{ asset('/images/hero/hero-siluate1.jpg') }}" class="hero-bg" alt="{{ __('contact.hero_title') }}">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">{{ __('contact.hero_title') }}</h1>
                <p class="hero-subtitle">{{ __('contact.hero_subtitle') }}</p>
            </div>
        </div>
    </section>

    <section class="contact-section py-5">
        <div class="container">
            <div class="contact-wrapper">

                {{-- Header --}}
                <div class="text-center mb-5">
                    <h2 class="fw-bold">{{ __('contact.form_header') }}</h2>
                    <p class="text-muted mt-2">{{ __('contact.form_subheader') }}</p>
                    <hr class="mx-auto my-3" style="width: 60px; border: 2px solid #0d6efd; opacity: 1;">
                </div>

                {{-- Alert Messages --}}
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="contact-card shadow-lg p-4 p-md-5 rounded-4 bg-white">
                            <form action="{{ route('contact.send') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">{{ __('contact.label_name') }}</label>
                                        <input type="text" name="name" class="form-control" placeholder="{{ __('contact.placeholder_name') }}" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">{{ __('contact.label_email') }}</label>
                                        <input type="email" name="email" class="form-control" placeholder="example@mail.com" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">{{ __('contact.label_phone') }}</label>
                                        <input type="text" name="phone" class="form-control" placeholder="+62...">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">{{ __('contact.label_file') }}</label>
                                        <input type="file" name="attachment" class="form-control" accept=".pdf,.doc,.docx,.xls,.xlsx">
                                        <small class="text-muted d-block mt-1">{{ __('contact.file_hint') }}</small>
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label fw-semibold">{{ __('contact.label_subject') }}</label>
                                        <input type="text" name="subject" class="form-control" placeholder="{{ __('contact.placeholder_subject') }}" required>
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label fw-semibold">{{ __('contact.label_message') }}</label>
                                        <textarea name="message" rows="5" class="form-control" placeholder="{{ __('contact.placeholder_message') }}" required></textarea>
                                    </div>

                                    <div class="col-12 text-center mt-4">
                                        <button type="submit" class="btn btn-primary px-5 py-3 fw-bold rounded-pill">
                                            {{ __('contact.btn_send') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection