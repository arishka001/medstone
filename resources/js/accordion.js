export function accordion() {
    const accordions = document.querySelectorAll('.faq-accordion');

    if (!accordions.length) return;

    accordions.forEach((item) => {
        const btn = item.querySelector('.faq-btn');
        const answer = item.querySelector('.faq-answer');
        const arrow = item.querySelector('.faq-arrow');

        btn.addEventListener('click', () => {
            const isOpen = !answer.classList.contains('hidden');

            accordions.forEach((acc) => {
                const b = acc.querySelector('.faq-btn');
                const a = acc.querySelector('.faq-answer');
                const ar = acc.querySelector('.faq-arrow');

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
