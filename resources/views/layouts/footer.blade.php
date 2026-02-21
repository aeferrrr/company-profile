<footer id="footer" class="footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-col">
                <h6 class="footer-title">Company Info</h6>
                <div class="footer-info">
                    <div class="address-box">
                        <i class="fa-solid fa-location-dot icon-accent"></i>
                        <span>
                            Gedung AKA Lt.9, Jl. Bangka Raya,<br>
                            Mampang Prapatan, Jakarta Selatan
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

                        <div class="contact-person mt-3">
                            <strong class="text-white">Adinda (Marketing)</strong>
                            <a href="tel:+6281370704904">
                                <i class="fa-solid fa-phone icon-accent"></i> +62 813-7070-4904
                            </a>
                            <a href="mailto:adinda.kpcm@gmail.com">
                                <i class="fa-solid fa-envelope icon-accent"></i> adinda.kpcm@gmail.com
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-col">
                <h6 class="footer-title">Quick Links</h6>
                <ul class="footer-links">
                    <li><a href="{{ route('about') }}">About Company</a></li>
                    <li><a href="{{ route('services') }}">Our Services</a></li>
                    <li><a href="{{ route('projects') }}">Project Portfolio</a></li>
                    <li><a href="{{ route('organization') }}">Organization</a></li>
                    <li><a href="{{ route('contact') }}">Contact Page</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h6 class="footer-title">Our Location</h6>
                <div class="footer-map-wrapper">
                    <iframe
                        src="https://www.google.com/maps?q=PT+KPCM+Industrial+Estate+-6.2404597,106.8175674&output=embed"
                        allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>

            <div class="footer-col footer-cta-col">
                <h6 class="footer-title">Siap Membangun?</h6>
                <p class="footer-text">
                    Hubungi kami untuk konsultasi gratis mengenai proyek Anda.
                </p>

                <a href="https://wa.me/6285591710360" class="btn btn-footer" target="_blank">
                    <i class="fa-brands fa-whatsapp"></i> Konsultasi Gratis
                </a>

                <div class="social-section">
                    <span class="social-label">Follow Us</span>
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

        <div class="footer-bottom">
            <p>© {{ date('Y') }} <strong>PT KPCM Industrial Estate</strong>. All Rights Reserved.</p>
        </div>
    </div>
</footer>
