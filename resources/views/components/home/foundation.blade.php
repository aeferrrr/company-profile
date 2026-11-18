<section class="py-5 bg-white overflow-hidden" id="greetings">

    <div class="container-fluid px-4 px-lg-5 py-lg-5 reveal">
        <div class="row align-items-center gy-5 gm-row">

            {{-- KIRI: Foto CEO + papan nama (tanda tangan) --}}
            <div class="col-lg-5" data-aos="fade-right">
                <div class="gm-photo-wrap">

                    <figure class="gm-photo">
                        {{-- simpan fotonya di public/images/mrhan.webp --}}
                        <img src="{{ asset('images/team/mrhan.webp') }}" alt="Han Gyu Seong">
                    </figure>

                    {{-- SIGNATURE BLOCK (KOREAN ONLY) --}}
                    <div class="gm-plate">
                        <div class="gm-sign">
                            <h6 class="gm-name">
                                한규성
                                <span class="gm-name-latin">Han Gyu Seong</span>
                            </h6>
                        </div>
                        <p class="gm-position">{{ __('messages.greetings.position') }}</p>
                    </div>

                </div>
            </div>

            {{-- KANAN: Isi sambutan --}}
            <div class="col-lg-7 ps-lg-5" data-aos="fade-left">

                <h6 class="gm-subtitle">
                    {{ __('messages.greetings.subtitle') }}
                </h6>

                <h2 class="gm-title">
                    {!! __('messages.greetings.title') !!}
                </h2>

                <p class="gm-lead">"{{ __('messages.greetings.content_1') }}"</p>

                <p class="gm-text">{{ __('messages.greetings.content_2') }}</p>

            </div>
        </div>
    </div>
</section>

<style>
    /* Font serif (opsional, fallback Georgia). Tambahkan di layout utama:
       <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,500;0,700;1,500&display=swap" rel="stylesheet"> */
    #greetings {
        --gm-serif: "Lora", Georgia, "Times New Roman", serif;
        --gm-ink: #0b1540;
        --gm-pale: #e6eafb;
        --gm-arch: 140px 14px 14px 14px; /* satu sudut melengkung besar, sisanya tegas */
    }

    /* ============ FOTO + PAPAN NAMA ============ */
    #greetings .gm-photo-wrap {
        position: relative;
        max-width: 520px;
        margin: 0 auto 4rem;
    }

    /* blok pucat di belakang foto, bergeser ke kanan-bawah */
    #greetings .gm-photo-wrap::before {
        content: "";
        position: absolute;
        inset: 0;
        transform: translate(18px, 18px);
        background: var(--gm-pale);
        border-radius: var(--gm-arch);
        z-index: 0;
    }

    #greetings .gm-photo {
        position: relative;
        z-index: 1;
        margin: 0;
        aspect-ratio: 1 / 1;
        border-radius: var(--gm-arch);
        overflow: hidden;
        background: #cfd6e6;
    }

    #greetings .gm-photo img {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: 50% 30%;
    }

    /* papan nama di bawah foto, seperti papan nama di meja kerja */
    #greetings .gm-plate {
        position: absolute;
        z-index: 2;
        left: 1.25rem;
        right: 1.25rem;
        bottom: -3.5rem;
        padding: 1rem 1rem .9rem;
        background: var(--bg-surface);
        border-top: 3px solid var(--samsung-blue);
        border-radius: 0 0 var(--radius-md) var(--radius-md);
        box-shadow: var(--shadow-card);
    }

    /* container-fluid melebar penuh, jadi lebar isi dibatasi di sini */
    #greetings .gm-row {
        max-width: 1400px;
        margin-inline: auto;
    }

    #greetings .gm-sign {
        text-align: center;
    }

    #greetings .gm-sign-box {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 64px;
        margin-bottom: .35rem;
    }

    #greetings .gm-sign-box img {
        max-height: 100%;
        max-width: 170px;
        object-fit: contain;
        mix-blend-mode: multiply; /* latar putih TTD menyatu dengan papan */
    }

    #greetings .gm-name {
        margin: 0;
        font-family: var(--gm-serif);
        font-size: .95rem;
        font-weight: 700;
        letter-spacing: 0;
        color: var(--gm-ink);
    }

    #greetings .gm-name-latin {
        display: block;
        margin-top: .1rem;
        font-size: .8rem;
        font-weight: 500;
        color: var(--text-grey);
    }

    #greetings .gm-position {
        margin: .8rem 0 0;
        padding-top: .65rem;
        border-top: 1px solid var(--border-soft);
        text-align: center;
        font-size: .8rem;
        font-weight: 600;
        color: var(--samsung-blue);
    }

    /* ============ TEKS ============ */
    #greetings .gm-subtitle {
        display: flex;
        align-items: center;
        gap: .75rem;
        margin: 0 0 1rem;
        font-size: .95rem;
        font-weight: 600;
        letter-spacing: 0;
        color: var(--samsung-blue);
    }

    #greetings .gm-subtitle::before {
        content: "";
        width: 28px;
        height: 2px;
        background: var(--samsung-blue);
    }

    #greetings .gm-title {
        margin: 0 0 1.75rem;
        font-size: clamp(1.7rem, 3vw, 2.5rem);
        line-height: 1.25;
        color: var(--samsung-blue);
    }

    #greetings .gm-lead {
        max-width: 56ch;
        margin: 0 0 1.5rem;
        padding-left: 1.25rem;
        border-left: 4px solid var(--samsung-blue);
        font-family: var(--gm-serif);
        font-size: clamp(1.1rem, 1.6vw, 1.35rem);
        font-style: italic;
        font-weight: 500;
        line-height: 1.6;
        color: var(--gm-ink);
    }

    #greetings .gm-text {
        max-width: 58ch;
        margin: 0;
        font-size: 1rem;
        line-height: 1.85;
        text-align: left;
        color: var(--text-grey);
    }

    /* ============ RESPONSIVE ============ */
    @media (max-width: 991.98px) {
        #greetings { --gm-arch: 100px 12px 12px 12px; }

        #greetings .gm-photo-wrap { margin-bottom: 0; }

        /* papan nama turun ke alur normal, hanya menimpa sedikit foto */
        #greetings .gm-plate {
            position: relative;
            left: auto;
            right: auto;
            bottom: auto;
            margin: -2.5rem 1.25rem 0;
        }
    }

    @media (max-width: 575.98px) {
        #greetings .gm-photo-wrap::before { transform: translate(10px, 10px); }
        #greetings .gm-sign-box img { max-width: 140px; }
        #greetings .gm-name { font-size: .9rem; }
    }
</style>