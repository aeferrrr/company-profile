      document.addEventListener('DOMContentLoaded', function() {
            const orgButtons = document.querySelectorAll('.org-btn');
            const orgWrappers = document.querySelectorAll('.org-wrapper');

            orgButtons.forEach(button => {
                button.addEventListener('click', () => {
                    // 1. Matikan semua tombol
                    orgButtons.forEach(btn => btn.classList.remove('active'));
                    // 2. Aktifkan tombol yang diklik
                    button.classList.add('active');

                    // 3. Sembunyikan semua chart
                    orgWrappers.forEach(wrapper => {
                        wrapper.classList.remove('active');
                        wrapper.style.display =
                        'none'; // Paksa display none agar animasi ulang
                    });

                    // 4. Munculkan chart yang sesuai target
                    const targetId = button.getAttribute('data-target');
                    const targetWrapper = document.getElementById(targetId);

                    if (targetWrapper) {
                        targetWrapper.style.display = 'block'; // Reset display
                        // Sedikit delay agar animasi CSS transition bisa jalan (jika ada fade effect)
                        setTimeout(() => {
                            targetWrapper.classList.add('active');
                        }, 10);
                    }
                });
            });
        });