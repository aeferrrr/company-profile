document.addEventListener('DOMContentLoaded', function () {

    /* ==========================
       ALERT AUTO CLOSE
    ========================== */
    const alertBox = document.getElementById('successAlert');
    if (alertBox) {
        alertBox.classList.add('show-animate');
        setTimeout(() => {
            alertBox.classList.remove('show-animate');
            alertBox.style.display = 'none';
        }, 4000);
    }

    /* ==========================
       NAVBAR SCROLL EFFECT
    ========================== */
    const navbar = document.querySelector('.navbar-corporate');
    if (navbar) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 60) {
                navbar.classList.add('navbar-scrolled');
            } else {
                navbar.classList.remove('navbar-scrolled');
            }
        });
    }

    /* ==========================
       SERVICE TAB SWITCH
    ========================== */
    const serviceButtons = document.querySelectorAll('.service-btn');
    const serviceItems = document.querySelectorAll('.service-item');

    if (serviceButtons.length && serviceItems.length) {
        serviceButtons.forEach(button => {
            button.addEventListener('click', function () {
                serviceButtons.forEach(btn => btn.classList.remove('active'));
                serviceItems.forEach(item => item.classList.remove('active'));

                this.classList.add('active');
                const target = this.getAttribute('data-service');
                const targetEl = document.getElementById(target);
                if (targetEl) targetEl.classList.add('active');
            });
        });
    }

    /* ==========================
       VIDEO AUDIO TOGGLE
    ========================== */
    const video = document.getElementById('companyVideo');
    const toggleBtn = document.getElementById('audioToggle');

    if (video && toggleBtn) {
        toggleBtn.addEventListener('click', function () {
            video.muted = !video.muted;
            toggleBtn.textContent = video.muted ? '🔇' : '🔊';
        });
    }

    /* ==========================
       ORGANIZATION TOGGLE
       (Office / Site Berau)
    ========================== */
    const orgButtons = document.querySelectorAll('.org-btn');
    const orgWrappers = document.querySelectorAll('.org-wrapper');

    if (orgButtons.length && orgWrappers.length) {
        orgButtons.forEach(button => {
            button.addEventListener('click', function () {

                // active button
                orgButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');

                // switch organization chart
                orgWrappers.forEach(wrapper => wrapper.classList.remove('active'));

                const target = this.getAttribute('data-target');
                const targetEl = document.getElementById(target);
                if (targetEl) targetEl.classList.add('active');

            });
        });
    }

});
