<section class="client-section py-5 bg-white position-relative overflow-hidden">
    {{-- SEPARATOR ATAS OUR CLIENTS --}}
    <div class="section-separator">
        <div class="separator-line"></div>
        <div class="separator-icon">
            <i class="fa-solid fa-handshake-simple" style="font-size: 14px; color: var(--samsung-blue);"></i>
        </div>
        <div class="separator-line"></div>
    </div>

    <div class="container py-3 py-lg-5">

        <div class="row align-items-center">

            <!-- Bagian Teks (Kiri) -->
            <div class="col-lg-5 mb-5 mb-lg-0 pe-lg-5 text-center text-lg-start z-index-2">
                <div data-aos="fade-right">
                    <h6 class="text-primary fw-bold text-uppercase ls-2 mb-2">
                        {{ __('messages.clients.subtitle') }}
                    </h6>
                    <h2 class="fw-bold display-6 mb-3">
                        {{ __('messages.clients.title') }}
                    </h2>
                    <p class="text-muted leading-relaxed" style="font-size: 1.05rem;">
                        {{ __('messages.clients.desc') }}
                    </p>
                    <div class="mt-4 border-top border-primary border-2 mx-auto mx-lg-0" style="width: 50px;"></div>
                </div>
            </div>

            <!-- Bagian Slider Logo (Kanan) -->
            <div class="col-lg-7 position-relative">
                <!-- Efek Fade Kiri & Kanan -->
                <div class="slider-fade-mask"></div>

                <div class="marquee-wrapper">
                    <div class="marquee-content" id="logoMarquee">
                        <!-- List Logo -->
                        <div class="logo-item"><img src="{{ asset('images/clients/samsung.png') }}" alt="Samsung">
                        </div>
                        <div class="logo-item"><img src="{{ asset('images/clients/hyundai.png') }}" alt="Hyundai">
                        </div>
                        <div class="logo-item"><img src="{{ asset('images/clients/nike.png') }}" alt="Nike"></div>
                        <div class="logo-item"><img src="{{ asset('images/clients/locklock.png') }}" alt="Lock & Lock">
                        </div>
                        <div class="logo-item"><img src="{{ asset('images/clients/cj.png') }}" alt="CJ"></div>
                        <div class="logo-item"><img src="{{ asset('images/clients/erajaya.png') }}" alt="Erajaya">
                        </div>
                        <div class="logo-item"><img src="{{ asset('images/clients/lg.png') }}" alt="LG"></div>
                        <div class="logo-item"><img src="{{ asset('images/clients/lotte.png') }}" alt="Lotte"></div>
                        <div class="logo-item"><img src="{{ asset('images/clients/zinus.png') }}" alt="Zinus"></div>
                        <div class="logo-item"><img src="{{ asset('images/clients/emsonic.png') }}" alt="Emsonic">
                        </div>
                        <div class="logo-item"><img src="{{ asset('images/clients/strawland.png') }}" alt="Strawland">
                        </div>
                        <div class="logo-item"><img src="{{ asset('images/clients/shinwon.png') }}" alt="Shinwon">
                        </div>
                        <div class="logo-item"><img src="{{ asset('images/clients/zimmoah.png') }}" alt="Zimmoah">
                        </div>
                        <div class="logo-item"><img src="{{ asset('images/clients/daeyoung.png') }}" alt="Daeyoung">
                        </div>
                        <div class="logo-item"><img src="{{ asset('images/clients/pungkook.png') }}" alt="Pungkook">
                        </div>
                        <div class="logo-item"><img src="{{ asset('images/clients/serim.png') }}" alt="Serim"></div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Sub-sub Heading -->
        <div class="row">
            <div class="col-12">
                <div class="text-center mt-5 pt-3 border-top w-lg-75 w-100 mx-auto">
                    <p class="small text-muted mb-0">
                        {{ __('messages.clients.note') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const marquee = document.getElementById('logoMarquee');

        // Clone konten marquee untuk menciptakan efek infinite loop tanpa putus
        // Kita menduplikasi isi di dalam .marquee-content
        if (marquee) {
            marquee.innerHTML += marquee.innerHTML;
        }
    });
</script>
