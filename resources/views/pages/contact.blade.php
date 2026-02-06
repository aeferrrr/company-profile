@extends('layouts.app')

@section('title', 'Contact Us | KPCM Industrial Estate')

@section('content')


    {{-- ======================
   CONTACT HERO (FULL WIDTH)
====================== --}}
    <section class="hero-section hero-contact">

        {{-- Background Image --}}
        <img src="{{ asset('images/services.jpg') }}" class="hero-bg" alt="Contact KPCM Industrial Estate">

        {{-- Overlay --}}
        <div class="hero-overlay"></div>

        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Contact Us</h1>
                <p class="hero-subtitle">
                    Let’s discuss your industrial project with our professional team.
                </p>
            </div>
        </div>

    </section>

    <section class="contact-section">
        <div class="container">
            <div class="contact-wrapper">

                <!-- Header -->
                <div class="text-center mb-5">
                    <h1 class="fw-bold">Contact Us</h1>
                    <p class="text-muted mt-2">
                        Let’s discuss your industrial project with our professional team.
                    </p>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="contact-card shadow-sm">

                            <form action="{{ route('contact.send') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row g-3">

                                    <div class="col-md-6">
                                        <label class="form-label">Full Name</label>
                                        <input type="text" name="name" class="form-control" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Email Address</label>
                                        <input type="email" name="email" class="form-control" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Phone Number</label>
                                        <input type="text" name="phone" class="form-control">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Attach File (PDF)</label>
                                        <input type="file" name="attachment" class="form-control"
                                            accept=".pdf,.doc,.docx,.xls,.xlsx">
                                        <small class="text-muted">
                                            Max file size: 5MB (PDF, DOC & XLX)
                                        </small>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Subject</label>
                                        <input type="text" name="subject" class="form-control"
                                            placeholder="Industrial Construction Inquiry" required>
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label">Message</label>
                                        <textarea name="message" rows="5" class="form-control" required></textarea>
                                    </div>

                                    <div class="col-12 text-center mt-4">
                                        <button type="submit" class="btn btn-primary px-5 fw-semibold">
                                            Send Message
                                        </button>
                                    </div>

                                </div>
                            </form>

                        </div>

                    </div>
                </div>

            </div>
    </section>

@endsection
