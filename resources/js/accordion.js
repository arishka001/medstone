export function accordion() {
    const accordions = document.querySelectorAll('.accordion');

    if (!accordions.length) return;

    accordions.forEach((item) => {
        const btn = item.querySelector('.btn-accordion');
        const answer = item.querySelector('.answer-accordion');
        const arrow = item.querySelector('.arrow-accordion');

        item.addEventListener('click', () => {
            const isOpen = !answer.classList.contains('hidden');

            accordions.forEach((acc) => {
                const b = acc.querySelector('.btn-accordion');
                const a = acc.querySelector('.answer-accordion');
                const ar = acc.querySelector('.arrow-accordion');

                b.classList.remove('bg-basic-brown');
                ar.classList.remove('rotate-180', 'text-white');
                a.classList.add('hidden');
            });

            if (!isOpen) {
                btn.classList.add('bg-basic-brown');
                arrow.classList.add('rotate-180', 'text-white');
                answer.classList.remove('hidden');
            }
        });
    });
}
