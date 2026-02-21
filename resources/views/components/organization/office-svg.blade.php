    {{-- <!-- CHART SECTION -->
    <div class="chart-container" id="chart-container">
        <!-- Tambahkan overflow visible agar popup tidak terpotong -->
        <svg id="org-svg" viewBox="0 0 1200 450" width="100%" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg">
            
            <!-- Garis Konektor -->
            <line x1="600" y1="90" x2="600" y2="130" class="chart-line" />
            <line x1="200" y1="130" x2="1000" y2="130" class="chart-line" />
            
            <line x1="200" y1="130" x2="200" y2="160" class="chart-line" />
            <line x1="400" y1="130" x2="400" y2="160" class="chart-line" />
            <line x1="600" y1="130" x2="600" y2="160" class="chart-line" />
            <line x1="800" y1="130" x2="800" y2="160" class="chart-line" />
            <line x1="1000" y1="130" x2="1000" y2="160" class="chart-line" />

            <!-- 
               NODE GROUPS 
               Sekarang ditambahkan <g class="chart-photo-wrapper"> agar CSS hover bekerja 
            -->

            <!-- Presiden -->
            <g class="node-group" transform="translate(510, 30)">
                <rect width="180" height="60" class="chart-rect" />
                <text x="90" y="22" class="chart-text chart-text-multiline-1">
                    <tspan x="90" dy="0">PRESIDEN</tspan>
                    <tspan x="90" dy="20">DIREKTUR</tspan>
                </text>
                <!-- Foto Popup -->
                <g class="chart-photo-wrapper">
                     <!-- Menggunakan placeholder karena tidak ada foto spesifik -->
                    <image href="https://ui-avatars.com/api/?name=Presiden+Direktur&background=002B5C&color=fff&size=128" />
                </g>
            </g>

            <!-- Architect Design -->
            <g class="node-group" transform="translate(110, 160)">
                <rect width="180" height="60" class="chart-rect" />
                <text x="90" y="30" class="chart-text">Architect Design</text>
                <g class="chart-photo-wrapper">
                    <image href="https://ui-avatars.com/api/?name=Architect&background=random&size=128" />
                </g>
            </g>

            <!-- Finance -->
            <g class="node-group" transform="translate(310, 160)">
                <rect width="180" height="60" class="chart-rect" />
                <text x="90" y="30" class="chart-text">Finance</text>
                <g class="chart-photo-wrapper">
                    <image href="https://ui-avatars.com/api/?name=Finance&background=random&size=128" />
                </g>
            </g>

            <!-- General Affair -->
            <g class="node-group" transform="translate(510, 160)">
                <rect width="180" height="60" class="chart-rect" />
                <text x="90" y="30" class="chart-text">General Affair</text>
                <g class="chart-photo-wrapper">
                    <image href="https://ui-avatars.com/api/?name=GA&background=random&size=128" />
                </g>
            </g>

            <!-- Workshop -->
            <g class="node-group" transform="translate(710, 160)">
                <rect width="180" height="60" class="chart-rect" />
                <text x="90" y="30" class="chart-text">Workshop</text>
                <g class="chart-photo-wrapper">
                    <image href="https://ui-avatars.com/api/?name=Workshop&background=random&size=128" />
                </g>
            </g>

            <!-- Engineer -->
            <!-- Tambahkan class pop-right agar popup geser ke kiri -->
            <g class="node-group" transform="translate(910, 160)">
                <rect width="180" height="60" class="chart-rect" />
                <text x="90" y="30" class="chart-text">Engineer</text>
                <g class="chart-photo-wrapper pop-right">
                    <image href="https://ui-avatars.com/api/?name=Engineer&background=random&size=128" />
                </g>
            </g>

        </svg>
    </div>

    <!-- MEMBERS SECTION -->
    <div class="members-section">
        <div class="members-header">
            <div class="members-title">Team Members</div>
        </div>

        <div class="members-grid">
            
            <!-- Group 1 -->
            <div class="member-group">
                <div class="member-badge">
                    <svg class="badge-icon" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    Ratu Uliya.N
                    <div class="popup-photo-list"><img src="https://ui-avatars.com/api/?name=Ratu+Uliya&background=random" alt="Foto"></div>
                </div>
                <div class="member-badge">
                    <svg class="badge-icon" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    Adinda
                    <div class="popup-photo-list"><img src="https://ui-avatars.com/api/?name=Adinda&background=random" alt="Foto"></div>
                </div>
                <div class="member-badge">
                    <svg class="badge-icon" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    Mr Choi
                    <div class="popup-photo-list"><img src="https://ui-avatars.com/api/?name=Mr+Choi&background=random" alt="Foto"></div>
                </div>
                <div class="member-badge">
                    <svg class="badge-icon" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    Mr Lee
                    <div class="popup-photo-list"><img src="https://ui-avatars.com/api/?name=Mr+Lee&background=random" alt="Foto"></div>
                </div>
            </div>

            <!-- Group 2 -->
            <div class="member-group">
                <div class="member-badge">
                    <svg class="badge-icon" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    Ridho
                    <div class="popup-photo-list"><img src="https://ui-avatars.com/api/?name=Ridho&background=random" alt="Foto"></div>
                </div>
                <div class="member-badge">
                    <svg class="badge-icon" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    Rahmad
                    <div class="popup-photo-list"><img src="https://ui-avatars.com/api/?name=Rahmad&background=random" alt="Foto"></div>
                </div>
                <div class="member-badge">
                    <svg class="badge-icon" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    Leo
                    <div class="popup-photo-list"><img src="https://ui-avatars.com/api/?name=Leo&background=random" alt="Foto"></div>
                </div>
                <div class="member-badge">
                    <svg class="badge-icon" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    Rudy
                    <div class="popup-photo-list"><img src="https://ui-avatars.com/api/?name=Rudy&background=random" alt="Foto"></div>
                </div>
                <div class="member-badge">
                    <svg class="badge-icon" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    Tito
                    <div class="popup-photo-list"><img src="https://ui-avatars.com/api/?name=Tito&background=random" alt="Foto"></div>
                </div>
                <div class="member-badge">
                    <svg class="badge-icon" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    Arief
                    <div class="popup-photo-list"><img src="https://ui-avatars.com/api/?name=Arief&background=random" alt="Foto"></div>
                </div>
            </div>

            <!-- Group 3 -->
            <div class="member-group">
                <div class="member-badge">
                    <svg class="badge-icon" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    Ayu
                    <div class="popup-photo-list"><img src="https://ui-avatars.com/api/?name=Ayu&background=random" alt="Foto"></div>
                </div>
                <div class="member-badge">
                    <svg class="badge-icon" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    Pani
                    <div class="popup-photo-list"><img src="https://ui-avatars.com/api/?name=Pani&background=random" alt="Foto"></div>
                </div>
                <div class="member-badge">
                    <svg class="badge-icon" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    Steven
                    <div class="popup-photo-list"><img src="https://ui-avatars.com/api/?name=Steven&background=random" alt="Foto"></div>
                </div>
                <div class="member-badge">
                    <svg class="badge-icon" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    Hans
                    <div class="popup-photo-list"><img src="https://ui-avatars.com/api/?name=Hans&background=random" alt="Foto"></div>
                </div>
            </div>

            <!-- Group 4 -->
            <div class="member-group">
                <div class="member-badge">
                    <svg class="badge-icon" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    Samsul
                    <div class="popup-photo-list"><img src="https://ui-avatars.com/api/?name=Samsul&background=random" alt="Foto"></div>
                </div>
                <div class="member-badge">
                    <svg class="badge-icon" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    Faesal
                    <div class="popup-photo-list"><img src="https://ui-avatars.com/api/?name=Faesal&background=random" alt="Foto"></div>
                </div>
                <div class="member-badge">
                    <svg class="badge-icon" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    Sofyan
                    <div class="popup-photo-list"><img src="https://ui-avatars.com/api/?name=Sofyan&background=random" alt="Foto"></div>
                </div>
                 <div class="member-badge">
                    <svg class="badge-icon" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    Panji
                    <div class="popup-photo-list"><img src="https://ui-avatars.com/api/?name=Panji&background=random" alt="Foto"></div>
                </div>
                 <div class="member-badge">
                    <svg class="badge-icon" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    Daniel
                    <div class="popup-photo-list"><img src="https://ui-avatars.com/api/?name=Daniel&background=random" alt="Foto"></div>
                </div>
            </div>

        </div>
    </div>

        <!-- SCRIPT SEDERHANA UNTUK ZOOM (Opsional, agar tombol berfungsi) -->
    <script>
        const zoomPanel = document.getElementById('zoom-controls-panel');
        const toggleBtn = document.getElementById('toggle-zoom');
        const svg = document.getElementById('org-svg');
        const slider = document.getElementById('zoom-slider');
        const zoomIn = document.getElementById('zoom-in');
        const zoomOut = document.getElementById('zoom-out');
        const zoomReset = document.getElementById('zoom-reset');

        let isZoomOpen = false;
        let currentZoom = 1;

        // Toggle Panel
        toggleBtn.addEventListener('click', () => {
            isZoomOpen = !isZoomOpen;
            if(isZoomOpen) {
                zoomPanel.classList.remove('hidden');
                toggleBtn.innerHTML = '❌ Close';
            } else {
                zoomPanel.classList.add('hidden');
                toggleBtn.innerHTML = '🔍 Zoom';
            }
        });

        // Update Zoom Function
        function updateZoom(val) {
            currentZoom = parseFloat(val);
            // Batasi
            if(currentZoom < 0.5) currentZoom = 0.5;
            if(currentZoom > 2.0) currentZoom = 2.0;
            
            // Update Slider UI
            slider.value = currentZoom;
            
            // Apply Transform
            // Kita scale container atau SVG viewBox. Untuk simpelnya kita ubah width style
            // Tapi cara terbaik untuk SVG statis adalah scale transform
            svg.style.transform = `scale(${currentZoom})`;
            svg.style.transformOrigin = 'top center';
            svg.style.transition = 'transform 0.2s ease-out';
        }

        slider.addEventListener('input', (e) => updateZoom(e.target.value));
        zoomIn.addEventListener('click', () => updateZoom(currentZoom + 0.1));
        zoomOut.addEventListener('click', () => updateZoom(currentZoom - 0.1));
        zoomReset.addEventListener('click', () => updateZoom(1));

    </script> --}}