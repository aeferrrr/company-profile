document.addEventListener('DOMContentLoaded', function () {

    let currentCategory = 'all';
    let isExpanded = false;
    const initialLimit = 6;

    function renderGallery() {
        const items = document.querySelectorAll('.gallery-item');
        const loadMoreBtn = document.getElementById('loadMoreBtn');

        let visibleCount = 0;
        let totalMatchCount = 0;

        items.forEach(item => {
            const itemCat = item.getAttribute('data-category');
            const isMatch = (currentCategory === 'all' || itemCat === currentCategory);

            if (isMatch) {
                totalMatchCount++;

                if (!isExpanded && visibleCount < initialLimit) {
                    item.classList.add('visible');
                    visibleCount++;
                } else if (isExpanded) {
                    item.classList.add('visible');
                } else {
                    item.classList.remove('visible');
                }

            } else {
                item.classList.remove('visible');
            }
        });

        if (totalMatchCount <= initialLimit) {
            loadMoreBtn.classList.add('hidden');
        } else {
            loadMoreBtn.classList.remove('hidden');
        }

        loadMoreBtn.textContent = isExpanded 
            ? "Show Less" 
            : "Show More";
    }

    window.changeCategory = function(category, element) {
        isExpanded = false; 
        currentCategory = category;

        document.querySelectorAll('.filter-link')
            .forEach(link => link.classList.remove('active'));

        element.classList.add('active');

        renderGallery();
    }

    window.showAll = function() {
        const gallerySection = document.querySelector('.filter-section');

        if (isExpanded) {
            isExpanded = false;
            renderGallery();

            setTimeout(() => {
                gallerySection.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }, 100);
        } else {
            isExpanded = true;
            renderGallery();
        }
    }

    // =========================
    // IMAGE MODAL FIX
    // =========================

    const modal = document.getElementById('imageModal');
    const modalImg = document.getElementById('modalImage');

    document.querySelectorAll('.gallery-item img').forEach(img => {
        img.addEventListener('click', function (e) {
            e.stopPropagation(); // penting kalau overlay ada
            modal.classList.add('show');
            modalImg.src = this.src;
        });
    });

    window.closeImageModal = function() {
        modal.classList.remove('show');
    }

    modal.addEventListener('click', function (e) {
        if (e.target === modal) {
            closeImageModal();
        }
    });

    renderGallery();
});
