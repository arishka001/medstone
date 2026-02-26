export function initDoctorsFilter() {
    const filters = document.querySelectorAll('.doctor-filter');
    if (!filters.length) return;

    filterDoctors('all');
}

window.filterDoctors = function (direction) {
    const cards = document.querySelectorAll('.doctor-card');

    cards.forEach((card) => {
        if (direction === 'all' || card.dataset.direction === direction) {
            card.classList.remove('!hidden');
        } else {
            card.classList.add('!hidden');
        }
    });

    // Стили фильтров
    document.querySelectorAll('.doctor-filter').forEach((btn) => {
        btn.classList.remove('border-basic-brown');
    });
    document.getElementById('filter');

    const activeCalegory = document.getElementById('filter-' + direction);
    activeCalegory?.classList.add('border-basic-brown');

    activeCalegory.scrollIntoView({
        behavior: 'smooth',
        block: 'nearest',
        inline: 'center',
    });
};
