export function scrollToTop() {
    const backToTopBtns = document.querySelectorAll('.scroll-to-top');

    if (backToTopBtns.length === 0) {
        return;
    }

    function toggleBackToTop() {
        const scrollTop =
            window.pageYOffset || document.documentElement.scrollTop;

        backToTopBtns.forEach((btn) => {
            if (scrollTop > 300) {
                btn.classList.add('visible');
            } else {
                btn.classList.remove('visible');
            }
        });
    }

    backToTopBtns.forEach((btn) => {
        btn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth',
            });
        });
    });

    window.addEventListener('scroll', toggleBackToTop);

    toggleBackToTop();
}
