export function initBlogsFilter() {
    const blogs = document.querySelectorAll('.blog-filter');
    if (!blogs.length) return;

    filterBlogs('all');
}

window.filterBlogs = function (direction) {
    const cards = document.querySelectorAll('.blog-card');

    cards.forEach((card) => {
        if (direction === 'all' || card.dataset.direction === direction) {
            card.classList.remove('!hidden');
        } else {
            card.classList.add('!hidden');
        }
    });

    document.querySelectorAll('.blog-filter').forEach((btn) => {
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
