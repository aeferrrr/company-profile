<footer id="footer" class="bg-dark text-light pt-5 pb-4 footer">
    <div class="container">
        <div class="row g-4">

            <!-- 1. CONTACT FORM -->
            <div class="col-lg-3 col-md-6 footer-col">
                <h6 class="footer-title">Contact Us</h6>

                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf
                    <input type="text" name="name" class="form-control form-control-sm mb-2" placeholder="Your Name"
                        required>
                    <input type="email" name="email" class="form-control form-control-sm mb-2"
                        placeholder="Email Address" required>
                    <input type="text" name="phone" class="form-control form-control-sm mb-2"
                        placeholder="Phone Number">
                    <textarea name="message" rows="3" class="form-control form-control-sm mb-3" placeholder="Message" required></textarea>
                    <button type="submit" class="btn btn-warning btn-sm w-100 fw-semibold">
                        Send Message
                    </button>
                </form>

            </div>

            <!-- 2. COMPANY INFO -->
            <div class="col-lg-3 col-md-6 footer-col">
                <h6 class="footer-title">Company Info</h6>

                <ul class="list-unstyled footer-text">
                    <!-- Alamat -->
                    <li class="d-flex mb-3">
                        <span class="me-2">📍</span>
                        <span>
                            Gedung AKA Lt.9, Jl. Bangka Raya,<br>
                            Mampang Prapatan, Jakarta Selatan
                        </span>
                    </li>

                    <!-- Mr. Han -->
                    <li class="mb-3">
                        <strong>Mr. Han</strong>
                        <div class="d-flex mt-1">
                            <span class="me-2">📞</span>
                            <span>+62 811-1966-903</span>
                        </div>
                        <div class="d-flex">
                            <span class="me-2">📧</span>
                            <span>kpcidhan@gmail.com</span>
                        </div>
                    </li>

                    <!-- Adinda -->
                    <li>
                        <strong>Adinda (Marketing)</strong>
                        <div class="d-flex mt-1">
                            <span class="me-2">📞</span>
                            <span>+62 813-7070-4904</span>
                        </div>
                        <div class="d-flex">
                            <span class="me-2">📧</span>
                            <span>adinda.kpcm@gmail.com</span>
                        </div>
                    </li>
                </ul>
            </div>




            <!-- GOOGLE MAPS -->
            <div class="col-lg-3 col-md-6 footer-col">
                <h6 class="footer-title">Our Location</h6>

                <div class="footer-map">
                    <iframe
                        src="https://www.google.com/maps?q=PT+KPCM+Industrial+Estate+-6.2404597,106.8175674&output=embed"
                        width="100%" height="180" style="border:0;" allowfullscreen loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <!-- 4. CTA -->
            <div class="col-lg-3 col-md-6 footer-col">
                <h6 class="footer-title">Let’s Work Together</h6>

                <p class="footer-text mb-3">
                    Let’s Build Your Industrial Project Together with a trusted
                    and experienced construction partner.
                </p>

                <a href="https://wa.me/628111966903" class="btn btn-outline-warning btn-sm fw-semibold px-4">
                    Get Free Consultation
                </a>
            </div>

        </div>

        <hr class="border-secondary my-4">

        <div class="text-center footer-text">
            © {{ date('Y') }} PT KPCM Industrial Estate. All Rights Reserved.
        </div>
    </div>
</footer>
