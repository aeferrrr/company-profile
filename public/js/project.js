document.addEventListener('DOMContentLoaded', function () {

    const modal    = document.getElementById('imageModal');
    const modalImg = document.getElementById('modalImage');
    let imageList    = [];
    let currentIndex = 0;


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
    // GALLERY LOADER — fetch & update DOM
    // =====================================================
    function loadGallery(url) {
        const grid              = document.getElementById('galleryGrid');
        const paginationWrapper = document.querySelector('.action-section .container');

        if (grid) grid.classList.add('fade-out');

        fetch(url, { headers: { 'X-Requested-With': 'XMLHttpRequest' } })
            .then(res => res.text())
            .then(html => {
                const doc        = new DOMParser().parseFromString(html, 'text/html');
                const newGrid    = doc.getElementById('galleryGrid');
                const newPagination = doc.querySelector('.action-section .container');

                if (grid && newGrid)                     grid.innerHTML              = newGrid.innerHTML;
                if (paginationWrapper && newPagination)  paginationWrapper.innerHTML = newPagination.innerHTML;

                history.pushState(null, '', url);

                if (grid) grid.classList.remove('fade-out');

                bindPagination();
                bindModal();
            });
    }


    // =====================================================
    // PAGINATION — intercept link clicks
    // =====================================================
    function bindPagination() {
        document.querySelectorAll('.pagination a').forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                loadGallery(this.href);
            });
        });
    }


    // =====================================================
    // MODAL — buka gambar full-screen + navigasi prev/next
    // =====================================================
    function bindModal() {
        const items = document.querySelectorAll('.gallery-item');

        // Kumpulkan semua src gambar untuk navigasi
        imageList = Array.from(items).map(item => {
            return item.querySelector('img').src;
        });

        items.forEach((item, index) => {
            item.addEventListener('click', function () {
                currentIndex = index;
                openModal(imageList[currentIndex]);
            });
        });
    }

    function openModal(src) {
        modalImg.src = src;
        modal.classList.add('show');
    }

    window.closeImageModal = function () {
        modal.classList.remove('show');
        modalImg.src = '';  
    };

    // Prev / Next
    window.navigateModal = function (direction) {
        currentIndex = (currentIndex + direction + imageList.length) % imageList.length;
        openModal(imageList[currentIndex]);
    };

    // Klik backdrop (area gelap di luar gambar) → tutup
    modal.addEventListener('click', function (e) {
        if (e.target === modal) closeImageModal();
    });

    // Keyboard: ESC tutup, Arrow navigasi
    document.addEventListener('keydown', function (e) {
        if (!modal.classList.contains('show')) return;

        if (e.key === 'Escape')     closeImageModal();
        if (e.key === 'ArrowRight') navigateModal(1);
        if (e.key === 'ArrowLeft')  navigateModal(-1);
    });


    // =====================================================
    // BROWSER BACK / FORWARD
    // =====================================================
    window.addEventListener('popstate', function () {
        loadGallery(window.location.href);
    });


    // ── Init ─────────────────────────────────────────────
    bindPagination();
    bindModal();
});