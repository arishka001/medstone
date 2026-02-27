export function initWorksFilter() {
    const works = document.querySelectorAll('.work-filter');
    if (!works.length) return;

    filterWorks('all');
}

window.filterWorks = function (direction) {
    const cards = document.querySelectorAll('.work-card');

    cards.forEach((card) => {
        const wrapper = card.parentElement; // div.swiper-slide или просто div в grid
        if (direction === 'all' || card.dataset.direction === direction) {
            wrapper.style.display = '';
        } else {
            wrapper.style.display = 'none';
        }
    });

    document.querySelectorAll('.work-filter').forEach((btn) => {
        btn.classList.remove('bg-basic-brown', 'text-white');
        btn.classList.add(
            'hover:border-extra-light-brown',
            'hover:text-extra-light-brown',
        );
    });
    document.getElementById('filter');

    const activeCategory = document.getElementById('filter-' + direction);
    activeCategory?.classList.add('bg-basic-brown', 'text-white');
    activeCategory?.classList.remove(
        'hover:border-extra-light-brown',
        'hover:text-extra-light-brown',
    );

    activeCategory.scrollIntoView({
        behavior: 'smooth',
        block: 'nearest',
        inline: 'center',
    });
};
