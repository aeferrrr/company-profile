document.addEventListener('DOMContentLoaded', function () {

    // =====================================================
    // ELEMENTS
    // =====================================================
    const viewer     = document.getElementById('projectViewer');
    const elTitle    = document.getElementById('viewerTitle');
    const elCounter  = document.getElementById('viewerCounter');
    const elSections = document.getElementById('viewerSections');
    const elStage    = document.getElementById('viewerStage');
    const elThumbs   = document.getElementById('viewerThumbs');

    let flat    = [];   // semua media project, berurutan: {..., sectionIndex}
    let project = null;
    let current = 0;
    let lastFocus = null;


    // =====================================================
    // FILTER — ubah kategori via AJAX
    // =====================================================
    window.changeCategory = function (category, element) {
        document.querySelectorAll('.filter-link')
            .forEach(link => link.classList.remove('active'));
        element.classList.add('active');

        const url = new URL(window.location.href);
        url.searchParams.set('category', category);
        url.searchParams.set('page', 1);

        loadGallery(url.toString());
    };


    // =====================================================
    // GALLERY LOADER
    // =====================================================
    function loadGallery(url, scrollTop = false) {
        const section = document.getElementById('gallerySection');
        const grid = document.getElementById('galleryGrid');
        const paginationWrapper = document.querySelector('.action-section .container');

        if (grid) grid.classList.add('fade-out');
        section.classList.add('is-loading');                 // ← tambah

        fetch(url, { headers: { 'X-Requested-With': 'XMLHttpRequest' } })
            .then(res => res.text())
            .then(html => {
                const doc           = new DOMParser().parseFromString(html, 'text/html');
                const newGrid       = doc.getElementById('galleryGrid');
                const newPagination = doc.querySelector('.action-section .container');

                if (grid && newGrid)                    grid.innerHTML              = newGrid.innerHTML;
                if (paginationWrapper && newPagination) paginationWrapper.innerHTML = newPagination.innerHTML;

                history.pushState(null, '', url);
                if (grid) grid.classList.remove('fade-out');

                if (scrollTop) {
                    document.getElementById('gallerySection')
                        ?.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            })
            .catch(() => { if (grid) grid.classList.remove('fade-out'); })
            .finally(() => section.classList.remove('is-loading'));   // ← tambah
}

    // Event delegation: tidak perlu bind ulang setelah AJAX
    document.addEventListener('click', function (e) {
        const link = e.target.closest('.pagination a');
        if (link) {
            e.preventDefault();
            loadGallery(link.href, true);
            return;
        }

        const card = e.target.closest('.gallery-item');
        if (card) openProject(card);
    });

    document.addEventListener('keydown', function (e) {
        // Enter / Space pada card (aksesibilitas keyboard)
        const card = e.target.closest?.('.gallery-item');
        if (card && (e.key === 'Enter' || e.key === ' ')) {
            e.preventDefault();
            openProject(card);
        }
    });

    window.addEventListener('popstate', () => loadGallery(window.location.href));


    // =====================================================
    // VIEWER — buka project
    // =====================================================
    function openProject(card) {
        try {
            project = JSON.parse(card.dataset.project);
        } catch (err) {
            return;
        }

        flat = [];
        project.sections.forEach((section, sectionIndex) => {
            section.media.forEach(m => flat.push({ ...m, sectionIndex }));
        });
        if (!flat.length) return;

        lastFocus = document.activeElement;
        elTitle.textContent = project.title;

        buildSectionChips();
       show(project.start || 0);

        viewer.classList.add('show');
        document.body.classList.add('viewer-open');
        document.getElementById('viewerClose').focus();
    }

    function closeViewer() {
        viewer.classList.remove('show');
        document.body.classList.remove('viewer-open');
        elStage.innerHTML = '';   // hentikan video / iframe
        project = null;
        flat = [];
        if (lastFocus) lastFocus.focus();
    }


    // =====================================================
    // VIEWER — render
    // =====================================================
    function buildSectionChips() {
        elSections.innerHTML = '';

        const named = project.sections.filter(s => s.name);
        if (named.length < 1 || project.sections.length < 2) return; // tidak bercabang → tanpa chip

        project.sections.forEach((section, sectionIndex) => {
            const chip = document.createElement('button');
            chip.type = 'button';
            chip.className = 'viewer-chip';
            chip.dataset.section = sectionIndex;
            chip.textContent = section.name || 'Other';

            const count = document.createElement('small');
            count.textContent = section.media.length;
            chip.appendChild(count);

            chip.addEventListener('click', () => {
                const first = flat.findIndex(m => m.sectionIndex === sectionIndex);
                if (first > -1) show(first);
            });
            elSections.appendChild(chip);
        });
    }

    function buildThumbs(sectionIndex) {
        elThumbs.innerHTML = '';
        elThumbs.dataset.section = sectionIndex;

        flat.forEach((m, index) => {
            if (m.sectionIndex !== sectionIndex) return;

            const btn = document.createElement('button');
            btn.type = 'button';
            btn.className = 'viewer-thumb';
            btn.dataset.index = index;
            btn.setAttribute('aria-label', 'Media ' + (index + 1));

            if (m.thumb) {
                const img = document.createElement('img');
                img.src = m.thumb;
                img.loading = 'lazy';
                img.alt = '';
                btn.appendChild(img);
            }
            if (m.type !== 'image') {
                const play = document.createElement('span');
                play.className = 'play';
                play.textContent = '▶';
                btn.appendChild(play);
            }

            btn.addEventListener('click', () => show(index));
            elThumbs.appendChild(btn);
        });
    }

    function show(index) {
        current = (index + flat.length) % flat.length;
        const m = flat[current];

        // Stage
        elStage.innerHTML = '';
        let node;

        if (m.type === 'image') {
            node = document.createElement('img');
            node.src = m.src;
            node.alt = project.title;
        } else if (m.type === 'video') {
            node = document.createElement('video');
            node.src = m.src;
            node.controls = true;
            node.preload = 'metadata';
            node.playsInline = true;
            if (m.poster) node.poster = m.poster;
        } else if (m.type === 'youtube') {
            node = document.createElement('iframe');
            node.src = 'https://www.youtube-nocookie.com/embed/' + encodeURIComponent(m.src) + '?rel=0';
            node.allow = 'accelerometer; encrypted-media; gyroscope; picture-in-picture; fullscreen';
            node.allowFullscreen = true;
            node.title = project.title;
        }
        elStage.classList.add('is-loading');
        const done = () => elStage.classList.remove('is-loading');

        node.addEventListener('load', done);        // img, iframe
        node.addEventListener('loadeddata', done);  // video
        node.addEventListener('error', done);

        elStage.appendChild(node);

        // Counter
        elCounter.textContent = (current + 1) + ' / ' + flat.length;

        // Chips
        elSections.querySelectorAll('.viewer-chip').forEach(chip => {
            const active = Number(chip.dataset.section) === m.sectionIndex;
            chip.classList.toggle('active', active);
            if (active) chip.scrollIntoView({ block: 'nearest', inline: 'center' });
        });

        // Thumbs (strip hanya berisi section yang sedang aktif)
        if (elThumbs.dataset.section !== String(m.sectionIndex) || !elThumbs.children.length) {
            buildThumbs(m.sectionIndex);
        }
        elThumbs.querySelectorAll('.viewer-thumb').forEach(btn => {
            const active = Number(btn.dataset.index) === current;
            btn.classList.toggle('active', active);
            if (active) btn.scrollIntoView({ block: 'nearest', inline: 'center' });
        });

        // Preload foto berikutnya
        const next = flat[(current + 1) % flat.length];
        if (next && next.type === 'image') new Image().src = next.src;
    }


    // =====================================================
    // VIEWER — kontrol
    // =====================================================
    document.getElementById('viewerClose').addEventListener('click', closeViewer);
    document.getElementById('viewerPrev').addEventListener('click', () => show(current - 1));
    document.getElementById('viewerNext').addEventListener('click', () => show(current + 1));

    // Klik area gelap → tutup
    viewer.addEventListener('click', function (e) {
        if (e.target === viewer) closeViewer();
    });

    // Keyboard
    document.addEventListener('keydown', function (e) {
        if (!viewer.classList.contains('show')) return;

        if (e.key === 'Escape')     closeViewer();
        if (e.key === 'ArrowRight') show(current + 1);
        if (e.key === 'ArrowLeft')  show(current - 1);
    });

    // Swipe (mobile)
    let touchX = null;
    elStage.addEventListener('touchstart', e => { touchX = e.touches[0].clientX; }, { passive: true });
    elStage.addEventListener('touchend', e => {
        if (touchX === null) return;
        const dx = e.changedTouches[0].clientX - touchX;
        if (Math.abs(dx) > 50) show(current + (dx < 0 ? 1 : -1));
        touchX = null;
    });
});