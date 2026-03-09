window.openModal = function (id = 'callback-modal', position = null) {
    const modal = document.getElementById(id);
    if (!modal) return;

    if (position) {
        const title = modal.querySelector('#vacancy-position-title');
        const input = modal.querySelector('#vacancy-position-input');

        if (title) {
            title.textContent = position;
            title.classList.remove('hidden');
        }
        if (input) input.value = position;
    }

    modal.classList.remove('pointer-events-none', 'opacity-0');
    modal.classList.add('opacity-100');
    document.body.style.overflow = 'hidden';
};

window.closeModal = function (id = 'callback-modal') {
    const modal = document.getElementById(id);
    modal.classList.add('pointer-events-none', 'opacity-0');
    modal.classList.remove('opacity-100');
    document.body.style.overflow = '';
};
