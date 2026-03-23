document.addEventListener('DOMContentLoaded', function () {

    // =====================================================
    // 1. TAB / SWITCH ORGANISASI
    // =====================================================
    const orgButtons = document.querySelectorAll('.org-btn');
    const orgWrappers = document.querySelectorAll('.org-wrapper');

    orgButtons.forEach(button => {
        button.addEventListener('click', () => {

            orgButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');

            orgWrappers.forEach(wrapper => {
                wrapper.classList.remove('active');
                wrapper.style.display = 'none';
            });

            const targetId = button.getAttribute('data-target');
            const targetWrapper = document.getElementById(targetId);

            if (targetWrapper) {
                targetWrapper.style.display = 'block';
                setTimeout(() => {
                    targetWrapper.classList.add('active');
                }, 10);
            }
        });
    });


    // =====================================================
    // 2. ZOOM & PAN SVG (NO TOGGLE VERSION)
    // =====================================================
    document.querySelectorAll('.zoom-wrapper').forEach(wrapper => {

        const parentContainer = wrapper.parentElement;
        const svgElement = parentContainer.querySelector('svg');
        if (!svgElement) return;

        const zoomSlider = wrapper.querySelector('.zoom-range');
        const zoomInBtn = wrapper.querySelector('.zoom-btn[title="Zoom In"]');
        const zoomOutBtn = wrapper.querySelector('.zoom-btn[title="Zoom Out"]');
        const resetBtn = wrapper.querySelector('.zoom-btn.reset');

        const svgViewBox = svgElement.getAttribute('viewBox');
        if (!svgViewBox) return;

        const viewBoxData = svgViewBox.split(' ').map(Number);

        let vb = {
            x: viewBoxData[0],
            y: viewBoxData[1],
            w: viewBoxData[2],
            h: viewBoxData[3]
        };

        const initialVb = { ...vb };

        let currentZoom = 1.0;
        let isPanning = false;
        let startPoint = { x: 0, y: 0 };

        function updateViewBox() {
            svgElement.setAttribute('viewBox', `${vb.x} ${vb.y} ${vb.w} ${vb.h}`);
        }

        function setZoom(scale) {
            scale = Math.max(0.5, Math.min(2.5, scale));
            currentZoom = scale;

            const cx = vb.x + vb.w / 2;
            const cy = vb.y + vb.h / 2;

            vb.w = initialVb.w / scale;
            vb.h = initialVb.h / scale;

            vb.x = cx - vb.w / 2;
            vb.y = cy - vb.h / 2;

            updateViewBox();

            if (zoomSlider) zoomSlider.value = scale;
        }

        // Zoom Buttons
        if (zoomInBtn) {
            zoomInBtn.addEventListener('click', () => setZoom(currentZoom + 0.2));
        }

        if (zoomOutBtn) {
            zoomOutBtn.addEventListener('click', () => setZoom(currentZoom - 0.2));
        }

        if (resetBtn) {
            resetBtn.addEventListener('click', () => {
                vb = { ...initialVb };
                currentZoom = 1.0;
                updateViewBox();
                if (zoomSlider) zoomSlider.value = 1.0;
            });
        }

        if (zoomSlider) {
            zoomSlider.addEventListener('input', (e) => {
                setZoom(parseFloat(e.target.value));
            });
        }

        // =========================
        // PAN DESKTOP
        // =========================
        svgElement.addEventListener('mousedown', (e) => {
            isPanning = true;
            startPoint = { x: e.clientX, y: e.clientY };
            svgElement.style.cursor = 'grabbing';
        });

        window.addEventListener('mousemove', (e) => {
            if (!isPanning) return;

            const svgRect = svgElement.getBoundingClientRect();
            const ratioW = vb.w / svgRect.width;
            const ratioH = vb.h / svgRect.height;

            const dx = (e.clientX - startPoint.x) * ratioW;
            const dy = (e.clientY - startPoint.y) * ratioH;

            vb.x -= dx;
            vb.y -= dy;

            startPoint = { x: e.clientX, y: e.clientY };
            updateViewBox();
        });

        window.addEventListener('mouseup', () => {
            if (isPanning) {
                isPanning = false;
                svgElement.style.cursor = 'grab';
            }
        });

        // =========================
        // PAN MOBILE (SAFE)
        // =========================
        svgElement.addEventListener('touchstart', (e) => {
            isPanning = true;
            startPoint = {
                x: e.touches[0].clientX,
                y: e.touches[0].clientY
            };
        }, { passive: true });

        svgElement.addEventListener('touchmove', (e) => {
            if (!isPanning) return;

            const svgRect = svgElement.getBoundingClientRect();
            const ratioW = vb.w / svgRect.width;
            const ratioH = vb.h / svgRect.height;

            const dx = (e.touches[0].clientX - startPoint.x) * ratioW;
            const dy = (e.touches[0].clientY - startPoint.y) * ratioH;

            vb.x -= dx;
            vb.y -= dy;

            startPoint = {
                x: e.touches[0].clientX,
                y: e.touches[0].clientY
            };

            updateViewBox();
        }, { passive: true });

        svgElement.addEventListener('touchend', () => {
            isPanning = false;
        });

    });

});

// Organization

        // Modal functions
        function openImageModal(src) {
            const modal = document.getElementById('imageModal');
            const modalImg = document.getElementById('modalImage');
            modal.classList.add('show');
            modalImg.src = src;
            document.body.style.overflow = 'hidden'; // Disable scroll when modal open
        }

        function closeImageModal() {
            const modal = document.getElementById('imageModal');
            modal.classList.remove('show');
            document.body.style.overflow = 'auto'; // Enable scroll
        }

        // Pagination
        document.addEventListener('DOMContentLoaded', function() {
            const itemsPerPage = 3;
            const container = document.getElementById('moments-container');
            if (!container) return;

            const items = Array.from(container.getElementsByClassName('moment-item'));
            const paginationRoot = document.getElementById('moments-pagination');

            const totalPages = Math.ceil(items.length / itemsPerPage);

            function showPage(page) {
                const start = (page - 1) * itemsPerPage;
                const end = start + itemsPerPage;

                items.forEach((item, index) => {
                    item.style.display = (index >= start && index < end) ? 'block' : 'none';
                });

                updatePaginationButtons(page);
            }

            function updatePaginationButtons(currentPage) {
                if (!paginationRoot) return;
                paginationRoot.innerHTML = '';

                if (totalPages <= 1) return;

                for (let i = 1; i <= totalPages; i++) {
                    const btn = document.createElement('button');
                    btn.innerText = i;
                    btn.classList.add('page-btn');
                    if (i === currentPage) btn.classList.add('active');

                    btn.addEventListener('click', () => {
                        showPage(i);
                        document.querySelector('.together-photos-section').scrollIntoView({
                            behavior: 'smooth'
                        });
                    });

                    paginationRoot.appendChild(btn);
                }
            }

            // Init first page
            showPage(1);
        });