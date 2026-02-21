    document.addEventListener('DOMContentLoaded', function() {
        
        // =====================================================================
        // 1. SCRIPT UNTUK TAB / SWITCH ORGANISASI (Dari kode bawaan Anda)
        // =====================================================================
        const orgButtons = document.querySelectorAll('.org-btn');
        const orgWrappers = document.querySelectorAll('.org-wrapper');

        orgButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Matikan semua tombol
                orgButtons.forEach(btn => btn.classList.remove('active'));
                // Aktifkan tombol yang diklik
                button.classList.add('active');

                // Sembunyikan semua chart
                orgWrappers.forEach(wrapper => {
                    wrapper.classList.remove('active');
                    wrapper.style.display = 'none'; // Paksa display none agar animasi ulang
                });

                // Munculkan chart yang sesuai target
                const targetId = button.getAttribute('data-target');
                const targetWrapper = document.getElementById(targetId);

                if (targetWrapper) {
                    targetWrapper.style.display = 'block'; // Reset display
                    // Sedikit delay agar animasi CSS transition bisa jalan
                    setTimeout(() => {
                        targetWrapper.classList.add('active');
                    }, 10);
                }
            });
        });

        // =====================================================================
        // 2. SCRIPT UNTUK ZOOM IN/OUT (MULTI-INSTANCE & AUTO-DETECT)
        // =====================================================================
        // Kita cari semua tombol zoom-wrapper di halaman, bukan cari svg-nya langsung
        document.querySelectorAll('.zoom-wrapper').forEach(wrapper => {
            
            // Cari elemen SVG yang berada di dalam "wadah/tab" yang sama dengan tombol zoom ini
            const parentContainer = wrapper.parentElement;
            const svgElement = parentContainer.querySelector('svg');
            
            if (!svgElement) return; // Kalau tidak ada SVG di dekatnya, abaikan

            // Tangkap elemen-elemen tombol dari dalam wrapper ini saja (Anti Bentrok ID)
            const zoomSlider = wrapper.querySelector('.zoom-range');
            const panelToggleBtn = wrapper.querySelector('.zoom-main-toggle');
            const zoomPanel = wrapper.querySelector('.zoom-controls');
            
            // Menggunakan Atribut selektor agar tetap aman walau ada ID duplikat
            const zoomInBtn = wrapper.querySelector('.zoom-btn[title="Zoom In"]') || wrapper.querySelector('#zoom-in');
            const zoomOutBtn = wrapper.querySelector('.zoom-btn[title="Zoom Out"]') || wrapper.querySelector('#zoom-out');
            const resetBtn = wrapper.querySelector('.zoom-btn.reset');

            // --- OTOMATIS MEMBACA UKURAN SVG (VIEWBOX) ---
            const svgViewBox = svgElement.getAttribute('viewBox');
            if(!svgViewBox) return; // Pastikan SVG punya viewBox

            const viewBoxData = svgViewBox.split(' ').map(Number);
            // Default nilai viewBox (contoh: 0 0 2000 1000)
            let vb = { x: viewBoxData[0], y: viewBoxData[1], w: viewBoxData[2], h: viewBoxData[3] };
            const initialVb = { ...vb };
            
            let currentZoom = 1.0;
            let isPanning = false;
            let startPoint = { x: 0, y: 0 };

            function updateViewBox() {
                svgElement.setAttribute('viewBox', `${vb.x} ${vb.y} ${vb.w} ${vb.h}`);
            }

            function setZoom(scale) {
                if (scale < 0.5) scale = 0.5;
                if (scale > 2.5) scale = 2.5;
                
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

            // --- EVENT LISTENER TOGGLE PANEL ZOOM ---
            if (panelToggleBtn && zoomPanel) {
                panelToggleBtn.addEventListener('click', () => {
                    // Cek apakah panel sedang tertutup (punya class hidden atau zoom-panel-closed)
                    const isClosed = zoomPanel.classList.contains('hidden') || zoomPanel.classList.contains('zoom-panel-closed');
                    
                    if (isClosed) {
                        zoomPanel.classList.remove('hidden', 'zoom-panel-closed');
                    } else {
                        zoomPanel.classList.add('zoom-panel-closed');
                    }
                });
            }

            // --- EVENT LISTENER TOMBOL ZOOM ---
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

            // --- EVENT LISTENER PANNING (MOUSE DRAG) ---
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
            
            // --- EVENT LISTENER PANNING (TOUCH HP) ---
            svgElement.addEventListener('touchstart', (e) => {
                isPanning = true;
                startPoint = { x: e.touches[0].clientX, y: e.touches[0].clientY };
            }, { passive: false });

            window.addEventListener('touchmove', (e) => {
                if (!isPanning) return;
                // Jangan cegah scroll browser kalau bukan nge-drag chart
                if (e.target.closest('svg') === svgElement) {
                    e.preventDefault();
                }
                
                const svgRect = svgElement.getBoundingClientRect();
                const ratioW = vb.w / svgRect.width;
                const ratioH = vb.h / svgRect.height;
                
                const dx = (e.touches[0].clientX - startPoint.x) * ratioW;
                const dy = (e.touches[0].clientY - startPoint.y) * ratioH;
                
                vb.x -= dx;
                vb.y -= dy;
                
                startPoint = { x: e.touches[0].clientX, y: e.touches[0].clientY };
                updateViewBox();
            }, { passive: false });

            window.addEventListener('touchend', () => isPanning = false);
        });

    });