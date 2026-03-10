function showModal(modal) {
    modal.classList.remove('pointer-events-none', 'opacity-0');
    modal.classList.add('opacity-100');
    document.body.style.overflow = 'hidden';
}

function hideModal(modal) {
    modal.classList.add('pointer-events-none', 'opacity-0');
    modal.classList.remove('opacity-100');
    document.body.style.overflow = '';
}

function resetModal(modal) {
    modal.querySelectorAll('input, textarea').forEach((input) => {
        input.value = '';
        input.classList.remove('border', 'border-red-400');
    });
    modal.querySelectorAll('.form-error').forEach((el) => el.remove());

    const btn = modal.querySelector('button[type="submit"]');
    if (btn) {
        btn.setAttribute('disabled', true);
        btn.classList.add('opacity-50', 'cursor-not-allowed');
    }

    ['#callback-doctor-title', '#vacancy-position-title'].forEach((sel) => {
        const el = modal.querySelector(sel);
        if (el) {
            el.textContent = '';
            el.classList.add('hidden');
        }
    });

    ['#callback-doctor-input', '#vacancy-position-input'].forEach((sel) => {
        const el = modal.querySelector(sel);
        if (el) el.value = '';
    });
}

window.openModal = function (
    id = 'callback-modal',
    { position = null, doctor = null } = {},
) {
    const modal = document.getElementById(id);
    if (!modal) return;

    resetModal(modal);

    if (position) {
        const title = modal.querySelector('#vacancy-position-title');
        const input = modal.querySelector('#vacancy-position-input');
        if (title) {
            title.textContent = position;
            title.classList.remove('hidden');
        }
        if (input) input.value = position;
    }

    if (doctor) {
        const title = modal.querySelector('#callback-doctor-title');
        const input = modal.querySelector('#callback-doctor-input');
        if (title) {
            title.textContent = doctor;
            title.classList.remove('hidden');
        }
        if (input) input.value = doctor;
    }

    showModal(modal);
};

window.closeModal = function (id = 'callback-modal') {
    const modal = document.getElementById(id);
    if (!modal) return;
    resetModal(modal);
    hideModal(modal);
};

window.openCertificate = function (src) {
    const modal = document.getElementById('certificate-modal');
    const img = document.getElementById('certificate-img');
    if (!modal || !img) return;
    img.src = src;
    showModal(modal);
};

window.closeCertificate = function () {
    const modal = document.getElementById('certificate-modal');
    if (!modal) return;
    hideModal(modal);
};
