
@extends('layouts.app')

@section('title', 'KPC Indonesia | Management Consulting & Training')

@section('content')
<div class="kpc-page">

    {{-- HERO SECTION --}}
    <section class="kpc-hero" id="kpc-home">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7">
                    <div class="kpc-eyebrow">
                        <span class="kpc-eyebrow-line"></span>
                        KOREA PRODUCTIVITY CONSULTING INDONESIA
                    </div>

                    <h1>
                        Transforming Business.
                        <span>Empowering Growth.</span>
                    </h1>

                    <p class="kpc-hero-description">
                        PT. Korea Productivity Consulting Indonesia (KPCI)
                        provides management consulting, industrial training,
                        investment advisory, ISO consulting, tax and legal
                        services, and halal certification support to help
                        organizations improve performance and competitiveness.
                    </p>

                    <div class="kpc-hero-actions">
                        <a href="#layanan" class="btn-primary-custom">
                            Explore Our Services
                            <i class="bi bi-arrow-up-right"></i>
                        </a>

                        <a href="#tentang" class="btn-outline-custom">
                            Discover KPC Indonesia
                        </a>
                    </div>

                    <div class="kpc-hero-bottom">
                        <span>MANAGEMENT CONSULTING</span>
                        <span class="kpc-dot"></span>
                        <span>INDUSTRIAL TRAINING</span>
                        <span class="kpc-dot"></span>
                        <span>BUSINESS DEVELOPMENT</span>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="kpc-hero-visual">
                        <img
                            src="{{ asset('images/hero/1 (2).webp') }}"
                            alt="KPC Indonesia Consulting"
                            class="img-fluid"
                        >

                        <div class="kpc-visual-label">
                            <span class="kpc-visual-icon">
                                <i class="bi bi-graph-up-arrow"></i>
                            </span>

                            <div>
                                <strong>Simple, Clear & Valuable</strong>
                                <small>Our Commitment to Excellence</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ABOUT --}}
    <section class="kpc-section" id="tentang">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-5">
                    <div class="kpc-about-image">
                        <img
                            src="{{ asset('images/hero/1 (2).webp') }}"
                            alt="About KPC Indonesia"
                            class="img-fluid"
                            loading="lazy"
                        >
                        <div class="kpc-image-accent"></div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="section-label">
                        <span class="section-label-line"></span>
                        <span class="section-label-text">ABOUT KPC INDONESIA</span>
                    </div>

                    <h2 class="kpc-section-title">
                        Building Stronger Businesses
                        Through <span>Knowledge & Innovation.</span>
                    </h2>

                    <p class="kpc-section-description">
                        PT. Korea Productivity Consulting Indonesia is a
                        business management consulting firm serving organizations
                        of various sizes and industries.
                    </p>

                    <p class="kpc-section-description">
                        We help companies align their processes, people,
                        and information to improve operational efficiency,
                        reduce costs, and increase productivity.
                    </p>

                    <div class="kpc-value-grid">
                        <div>
                            <i class="bi bi-lightbulb"></i>
                            <strong>Knowledge</strong>
                            <small>Continuous Learning</small>
                        </div>

                        <div>
                            <i class="bi bi-bar-chart-line"></i>
                            <strong>Performance</strong>
                            <small>Measurable Improvement</small>
                        </div>

                        <div>
                            <i class="bi bi-shield-check"></i>
                            <strong>Control</strong>
                            <small>Operational Excellence</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- VISION & MISSION --}}
    <section class="kpc-section kpc-soft-bg">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="kpc-info-card h-100">
                        <div class="kpc-card-icon">
                            <i class="bi bi-eye"></i>
                        </div>

                        <h3>Our Vision</h3>
                        <p>
                            To become a high-quality and profitable
                            consulting company.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="kpc-info-card h-100">
                        <div class="kpc-card-icon">
                            <i class="bi bi-bullseye"></i>
                        </div>

                        <h3>Our Mission</h3>
                        <p>
                            To provide effective, competitive, practical,
                            and result-oriented business solutions that
                            improve operational efficiency and maximize
                            return on investment.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- SERVICES --}}
    <section class="kpc-section" id="layanan">
        <div class="container">
            <div class="kpc-section-heading text-center">
                <div class="section-label justify-content-center">
                    <span class="section-label-line"></span>
                    <span class="section-label-text">OUR EXPERTISE</span>
                </div>

                <h2 class="kpc-section-title">
                    Comprehensive Business <span>Solutions</span>
                </h2>

                <p>
                    Integrated consulting and training services designed
                    to support sustainable business development.
                </p>
            </div>

            @php
                $services = [
                    [
                        'id' => 'svc-consulting',
                        'icon' => 'bi-diagram-3',
                        'title' => 'Management Consulting',
                        'description' => 'Business strategy, management diagnosis, process improvement, productivity enhancement, and organizational development.',
                        'items' => ['Business Strategy', 'Process Improvement', 'Productivity Innovation']
                    ],
                    [
                        'id' => 'svc-training',
                        'icon' => 'bi-mortarboard',
                        'title' => 'Industrial Training & Education',
                        'description' => 'Practical training programs for human resources, production, quality, leadership, and operational excellence.',
                        'items' => ['HR Development', 'Production & Quality', 'Leadership Training']
                    ],
                    [
                        'id' => 'svc-investment',
                        'icon' => 'bi-buildings',
                        'title' => 'Investment Service',
                        'description' => 'Business environment surveys, investment guidance, company establishment support, and local business partner assistance.',
                        'items' => ['Investment Guidance', 'Company Setup', 'Business Partner Search']
                    ],
                    [
                        'id' => 'svc-iso',
                        'icon' => 'bi-patch-check',
                        'title' => 'ISO Consulting',
                        'description' => 'Management system consulting, documentation, internal audit preparation, and international standards implementation.',
                        'items' => ['ISO 9001', 'ISO Management Systems', 'Internal Audit']
                    ],
                    [
                        'id' => 'svc-tax',
                        'icon' => 'bi-file-earmark-text',
                        'title' => 'Tax & Legal',
                        'description' => 'Tax planning, compliance advisory, and business-related tax and legal consulting support.',
                        'items' => ['Tax Planning', 'Tax Compliance', 'Business Advisory']
                    ],
                    [
                        'id' => 'svc-halal',
                        'icon' => 'bi-award',
                        'title' => 'Halal Certification',
                        'description' => 'Halal assurance system support, gap assessment, documentation, certification application assistance, and awareness training.',
                        'items' => ['Gap Assessment', 'Documentation & SOP', 'Halal Awareness']
                    ]
                ];
            @endphp

            <div class="row g-4">
                @foreach($services as $service)
                    <div class="col-lg-4 col-md-6">
                        <article class="kpc-service-card h-100" id="{{ $service['id'] }}">
                            <div class="kpc-service-icon">
                                <i class="bi {{ $service['icon'] }}"></i>
                            </div>

                            <h3>{{ $service['title'] }}</h3>
                            <p>{{ $service['description'] }}</p>

                            <ul class="kpc-service-list">
                                @foreach($service['items'] as $item)
                                    <li>
                                        <i class="bi bi-check2"></i>
                                        {{ $item }}
                                    </li>
                                @endforeach
                            </ul>

                            <a href="#kontak" class="kpc-text-link">
                                Consult With Us
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- TRAINING PROGRAM --}}
    <section class="kpc-section kpc-soft-bg" id="pelatihan">
        <div class="container">
            <div class="kpc-section-heading text-center">
                <div class="section-label justify-content-center">
                    <span class="section-label-line"></span>
                    <span class="section-label-text">TRAINING INFORMATION 2026</span>
                </div>

                <h2 class="kpc-section-title">
                    Develop People. <span>Improve Performance.</span>
                </h2>

                <p>
                    Explore practical training programs designed to
                    improve organizational capability and productivity.
                </p>
            </div>

            @php
                $trainings = [
                    [
                        'category' => 'Productivity',
                        'icon' => 'bi-speedometer2',
                        'courses' => [
                            'Production Planning & Inventory Control (PPIC)',
                            'New Product Development',
                            'Process Analysis',
                            'Failure Mode & Effects Analysis (FMEA)',
                            'Just in Time (JIT)'
                        ]
                    ],
                    [
                        'category' => 'Quality',
                        'icon' => 'bi-clipboard-check',
                        'courses' => [
                            'Basic Statistics',
                            'Quality Cost Management',
                            'Quality Inspection System',
                            'QC 7 Tools',
                            'Measurement System Analysis (MSA)',
                            'Statistical Process Control (SPC)'
                        ]
                    ],
                    [
                        'category' => 'Purchasing & Marketing',
                        'icon' => 'bi-cart-check',
                        'courses' => [
                            'Supply Chain Management',
                            'Procurement Management',
                            'Inventory Control in Factory',
                            'Sales Promotion'
                        ]
                    ],
                    [
                        'category' => 'HRM & Language',
                        'icon' => 'bi-people',
                        'courses' => [
                            'Leadership Development',
                            'Management Supervisor Development',
                            'Indonesian Language Course',
                            'Mandarin Language Course',
                            'Korean Language Course'
                        ]
                    ],
                    [
                        'category' => 'ISO',
                        'icon' => 'bi-shield-check',
                        'courses' => [
                            'Customer Satisfaction Management',
                            'ISO Documentation',
                            'ISO Internal Audit',
                            'Quality Management Systems',
                            'Environmental Management Systems'
                        ]
                    ],
                    [
                        'category' => 'TPM',
                        'icon' => 'bi-tools',
                        'courses' => [
                            '5S Activity',
                            'Basic Concept of TPM',
                            'Autonomous Maintenance',
                            'Planned Maintenance',
                            'Equipment Effectiveness',
                            'Quality Maintenance'
                        ]
                    ],
                    [
                        'category' => 'Tax',
                        'icon' => 'bi-receipt',
                        'courses' => [
                            'Tax Planning & Compliance',
                            'Tax Consulting'
                        ]
                    ],
                    [
                        'category' => 'Halal Certification',
                        'icon' => 'bi-award',
                        'courses' => [
                            'Halal Certification Application Support',
                            'Halal Awareness Training'
                        ]
                    ]
                ];
            @endphp

            <div class="kpc-training-filters">
                <button class="kpc-filter-btn active" data-filter="all">
                    All Programs
                </button>

                @foreach($trainings as $training)
                    <button
                        class="kpc-filter-btn"
                        data-filter="{{ \Illuminate\Support\Str::slug($training['category']) }}"
                    >
                        {{ $training['category'] }}
                    </button>
                @endforeach
            </div>

            <div class="row g-4" id="kpcTrainingGrid">
                @foreach($trainings as $training)
                    <div
                        class="col-lg-4 col-md-6 kpc-training-item"
                        data-category="{{ \Illuminate\Support\Str::slug($training['category']) }}"
                    >
                        <div class="kpc-training-card h-100">
                            <div class="kpc-training-top">
                                <div class="kpc-training-icon">
                                    <i class="bi {{ $training['icon'] }}"></i>
                                </div>

                                <span>TRAINING 2026</span>
                            </div>

                            <h3>{{ $training['category'] }}</h3>

                            <ul>
                                @foreach($training['courses'] as $course)
                                    <li>{{ $course }}</li>
                                @endforeach
                            </ul>

                            <a
                                href="mailto:kpcidhan@gmail.com?subject={{ rawurlencode('Training Inquiry - '.$training['category']) }}"
                                class="kpc-text-link"
                            >
                                Request Information
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="kpc-training-note">
                <i class="bi bi-info-circle"></i>
                Training programs are available for in-house arrangements.
                Contact our team to discuss your organization's needs.
            </div>
        </div>
    </section>

    {{-- TRAINING METHOD --}}
    <section class="kpc-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="section-label">
                        <span class="section-label-line"></span>
                        <span class="section-label-text">HOW WE DELIVER</span>
                    </div>

                    <h2 class="kpc-section-title">
                        Practical Learning.
                        <span>Real Business Impact.</span>
                    </h2>

                    <p class="kpc-section-description">
                        Our training combines participatory classroom learning,
                        simulations, interactive activities, and practical
                        exercises delivered by experienced professionals.
                    </p>

                    <div class="kpc-method-list">
                        <div>
                            <i class="bi bi-person-video3"></i>
                            <span>Interactive Classroom Training</span>
                        </div>

                        <div>
                            <i class="bi bi-people"></i>
                            <span>15–25 Participants</span>
                        </div>

                        <div>
                            <i class="bi bi-clock"></i>
                            <span>7 Hours per Training Day</span>
                        </div>

                        <div>
                            <i class="bi bi-building"></i>
                            <span>In-house Training Arrangement</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="kpc-method-panel">
                        <span>TRAINING INFORMATION 2026</span>

                        <h3>Invest in Your Team's Capability</h3>

                        <p>
                            Training investment listed in our 2026 information:
                        </p>

                        <div class="kpc-price">
                            IDR 1.500.000
                            <small>/ day, excl. tax</small>
                        </div>

                        <p class="kpc-price-note">
                            Subject to confirmation of program scope,
                            availability, and applicable arrangements.
                        </p>

                        <a href="#kontak" class="kpc-white-button">
                            Discuss Your Training Needs
                            <i class="bi bi-arrow-up-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- HISTORY --}}
    <section class="kpc-section kpc-soft-bg" id="sejarah">
        <div class="container">
            <div class="kpc-section-heading text-center">
                <div class="section-label justify-content-center">
                    <span class="section-label-line"></span>
                    <span class="section-label-text">OUR JOURNEY</span>
                </div>

                <h2 class="kpc-section-title">
                    A Legacy of <span>Productivity & Progress.</span>
                </h2>

                <p>
                    Key milestones in the development of Korea Productivity
                    Consulting and its presence in Indonesia.
                </p>
            </div>

            @php
                $history = [
                    ['year' => '1957', 'text' => 'Korea Productivity Center was established.'],
                    ['year' => '1999', 'text' => 'Korea Productivity Consulting was separated from KPC.'],
                    ['year' => '2000', 'text' => 'PT. Korea Productivity Consulting Indonesia was established.'],
                    ['year' => '2005', 'text' => 'The Indonesia business adopted the Knowledge & Performance Consulting Indonesia brand.'],
                    ['year' => '2007', 'text' => 'Investment Service Division was established.'],
                    ['year' => '2014', 'text' => 'Legal & Tax Service Division was established.'],
                    ['year' => '2026', 'text' => 'Service areas include industrial, investment, ISO, tax and legal, and halal certification.']
                ];
            @endphp

            <div class="kpc-timeline">
                @foreach($history as $item)
                    <div class="kpc-timeline-item">
                        <div class="kpc-timeline-year">
                            {{ $item['year'] }}
                        </div>

                        <div class="kpc-timeline-dot"></div>

                        <div class="kpc-timeline-content">
                            <p>{{ $item['text'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- LEADERSHIP --}}
    <section class="kpc-section" id="pimpinan">
        <div class="container">
            <div class="kpc-leadership">
                <div class="row align-items-center g-4">
                    <div class="col-lg-8">
                        <div class="section-label">
                            <span class="section-label-line"></span>
                            <span class="section-label-text">LEADERSHIP</span>
                        </div>

                        <h2 class="kpc-section-title">
                            Distinct Expertise.
                            <span>Shared Leadership.</span>
                        </h2>

                        <p class="kpc-section-description">
                            KPC Indonesia and KPCM Industrial Estate operate
                            in different business fields under the same
                            President Director.
                        </p>

                        <p class="kpc-section-description">
                            KPCM focuses on construction and industrial
                            projects, while KPC Indonesia specializes in
                            management consulting, training, and business
                            development services.
                        </p>
                    </div>

                    <div class="col-lg-4">
                        <div class="kpc-leadership-side">
                            <div>
                                <strong>KPCM</strong>
                                <span>Construction & Industrial Projects</span>
                            </div>

                            <div class="kpc-leadership-divider"></div>

                            <div>
                                <strong>KPC INDONESIA</strong>
                                <span>Management Consulting & Training</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CONTACT --}}
    <section class="kpc-contact-section" id="kontak">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7">
                    <div class="kpc-contact-eyebrow">
                        LET'S WORK TOGETHER
                    </div>

                    <h2>
                        Ready to Improve
                        <span>Your Business Performance?</span>
                    </h2>

                    <p>
                        Connect with KPC Indonesia to discuss consulting,
                        industrial training, investment, ISO, tax and legal,
                        or halal certification services.
                    </p>

                    <div class="kpc-contact-actions">
                        <a
                            href="mailto:kpcidhan@gmail.com"
                            class="kpc-white-button"
                        >
                            Contact Our Team
                            <i class="bi bi-arrow-up-right"></i>
                        </a>

                        <a href="tel:+628111966903" class="kpc-contact-phone">
                            <i class="bi bi-telephone"></i>
                            +62 811-1966-903
                        </a>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="kpc-contact-info">
                        <h3>Contact Information</h3>

                        <div class="kpc-contact-row">
                            <i class="bi bi-building"></i>
                            <div>
                                <small>COMPANY</small>
                                <strong>PT. Korea Productivity Consulting Indonesia</strong>
                            </div>
                        </div>

                        <div class="kpc-contact-row">
                            <i class="bi bi-telephone"></i>
                            <div>
                                <small>PHONE</small>
                                <a href="tel:+622122716931">+62 21 2271-6931</a>
                                <a href="tel:+628111966903">+62 811-1966-903</a>
                            </div>
                        </div>

                        <div class="kpc-contact-row">
                            <i class="bi bi-envelope"></i>
                            <div>
                                <small>EMAIL</small>
                                <a href="mailto:kpcidhan@gmail.com">
                                    kpcidhan@gmail.com
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const filterButtons = document.querySelectorAll('.kpc-filter-btn');
    const trainingItems = document.querySelectorAll('.kpc-training-item');

    filterButtons.forEach(button => {
        button.addEventListener('click', function () {
            const filter = this.dataset.filter;

            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            trainingItems.forEach(item => {
                const visible = filter === 'all' || item.dataset.category === filter;
                item.classList.toggle('d-none', !visible);
            });
        });
    });
});
</script>
@endpush
