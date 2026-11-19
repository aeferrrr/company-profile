
<footer id="footer" class="footer reveal">
    <div class="container">
        <div class="footer-grid">

            <div class="footer-col reveal">
                <h6 class="footer-title">{{ __('general.footer.company_info') }}</h6>
                <div class="footer-info">
                    <div class="address-box">
                        <i class="fa-solid fa-location-dot icon-accent"></i>
                        <span>
                            {{ __('general.footer.address_line1') }}<br>
                            {{ __('general.footer.address_line2') }}
                        </span>
                    </div>

                    <div class="contact-group">
                        <div class="contact-person">
                            <strong class="text-white">Mr. Han</strong>
                            <a href="tel:+628111966903">
                                <i class="fa-solid fa-phone icon-accent"></i> +62 811-1966-903
                            </a>
                            <a href="mailto:kpcidhan@gmail.com">
                                <i class="fa-solid fa-envelope icon-accent"></i> kpcidhan@gmail.com
                            </a>
                        </div>

                        {{-- <div class="contact-person mt-3">
                            <strong class="text-white">Adinda (Marketing)</strong>
                            <a href="tel:+6281370704904">
                                <i class="fa-solid fa-phone icon-accent"></i> +62 813-7070-4904
                            </a>
                            <a href="mailto:adinda.kpcm@gmail.com">
                                <i class="fa-solid fa-envelope icon-accent"></i> adinda.kpcm@gmail.com
                            </a>
                        </div> --}}

                        <div class="contact-person mt-3">
                            <strong class="text-white">Admin</strong>
                            <a href="tel:+6285111377112">
                                <i class="fa-solid fa-phone icon-accent"></i> +62 851-1137-7112
                            </a>
                            <a href="mailto:kpcmplan@gmail.com">
                                <i class="fa-solid fa-envelope icon-accent"></i> kpcmplan@gmail.com
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-col reveal">
                <h6 class="footer-title">{{ __('general.footer.quick_links') }}</h6>
                <ul class="footer-links">
                    <li><a href="{{ route('about') }}">{{ __('general.footer.about_company') }}</a></li>
                    <li><a href="{{ route('services') }}">{{ __('general.footer.our_services') }}</a></li>
                    <li><a href="{{ route('projects') }}">{{ __('general.footer.project_gallery') }}</a></li>
                    <li><a href="{{ route('organization') }}">{{ __('general.footer.organization') }}</a></li>
                    <li><a href="{{ route('contact') }}">{{ __('general.footer.contact_page') }}</a></li>
                </ul>
            </div>

            <div class="footer-col reveal">
                <h6 class="footer-title">{{ __('general.footer.our_location') }}</h6>
                <div class="footer-map-wrapper">
                    <iframe
                        src="https://www.google.com/maps?q=PT+KPCM+Industrial+Estate+-6.2404597,106.8175674&output=embed"
                        allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>

            <div class="footer-col footer-cta-col reveal">
                <h6 class="footer-title">{{ __('general.footer.cta_title') }}</h6>
                <p class="footer-text">
                    {{ __('general.footer.cta_description') }}
                </p>

                <a href="https://wa.me/6285111377112" class="btn btn-footer" target="_blank">
                    <i class="fa-brands fa-whatsapp"></i> {{ __('general.footer.free_consultation') }}
                </a>

                <div class="social-section">
                    <span class="social-label">{{ __('general.footer.follow_us') }}</span>
                    <div class="social-icons">
                        <a href="https://www.instagram.com/kpcmindustrial/" target="_blank" aria-label="Instagram">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/pt-kpcm-real-estate/" target="_blank"
                            aria-label="LinkedIn">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                        <a href="https://youtube.com/@kpcmie?si=YwJtoDFqWjoSkC-f" target="_blank" aria-label="YouTube">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                        <a href="https://www.tiktok.com/@kpcmie?_r=1&_t=ZS-93h1TXdGNsI" target="_blank"
                            aria-label="TikTok">
                            <i class="fa-brands fa-tiktok"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <div class="footer-bottom reveal">
            <p>© {{ date('Y') }} <strong>PT KPCM Industrial Estate</strong>. {{ __('general.footer.copyright') }}</p>
        </div>
    </div>
</footer>
