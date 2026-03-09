export function initForms() {
    document.querySelectorAll('form[data-validate]').forEach((form) => {
        const submitBtn = form.querySelector('button[type="submit"]');
        const agree = form.querySelector('input[type="checkbox"]');

        setButtonState(submitBtn, false);

        form.querySelectorAll('input[type="text"]').forEach((input) => {
            input.addEventListener('input', () => {
                input.value = input.value.replace(/[^а-яёА-ЯЁa-zA-Z\s\-]/g, '');
                checkForm(form, submitBtn);
            });
        });

        form.querySelectorAll('input[type="tel"]').forEach((input) => {
            input.addEventListener('input', () => {
                input.value = input.value.replace(/[^\d\+\-\(\)\s]/g, '');
                checkForm(form, submitBtn);
            });
        });

        form.querySelectorAll('input, textarea').forEach((input) => {
            input.addEventListener('input', () => checkForm(form, submitBtn));
            input.addEventListener('blur', () => validateField(input));
        });

        // Чекбокс разблокирует кнопку
        agree?.addEventListener('change', () => checkForm(form, submitBtn));

        // Файл
        form.querySelector('input[type="file"]')?.addEventListener(
            'change',
            () => {
                checkForm(form, submitBtn);
            },
        );

        // Сабмит
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            if (validateForm(form)) {
                const modal = form.closest('[id$="-modal"]');
                if (modal) closeModal(modal.id);

                const thanksUrl =
                    document.querySelector('meta[name="thanks-url"]')
                        ?.content || '/thanks';
                window.location.href = thanksUrl;
            }
        });
    });
}

function checkForm(form, btn) {
    const name = form.querySelector('input[type="text"]');
    const phone = form.querySelector('input[type="tel"]');
    const agree = form.querySelector('input[type="checkbox"]');
    const file = form.querySelector('input[type="file"]');

    const nameValid = name
        ? /^[а-яёА-ЯЁa-zA-Z\s\-]+$/.test(name.value.trim()) && name.value.trim()
        : true;
    const phoneValid = phone
        ? /^[\d\+\-\(\)\s]{7,}$/.test(phone.value.trim())
        : true;
    const agreeValid = agree ? agree.checked : true;
    const fileValid = true;

    setButtonState(btn, nameValid && phoneValid && agreeValid && fileValid);
}

function validateField(input) {
    const type = input.type;
    let hasError = false;

    if (type === 'text') {
        hasError =
            !input.value.trim() ||
            !/^[а-яёА-ЯЁa-zA-Z\s\-]+$/.test(input.value.trim());
    }

    if (type === 'tel') {
        hasError =
            !input.value.trim() ||
            !/^[\d\+\-\(\)\s]{7,}$/.test(input.value.trim());
    }

    if (hasError) {
        input.classList.add('border', 'border-red-400');
    } else {
        input.classList.remove('border', 'border-red-400');
    }
}

function validateForm(form) {
    let valid = true;
    form.querySelectorAll(
        'input[type="text"], input[type="tel"], textarea',
    ).forEach((input) => {
        validateField(input);
        if (input.classList.contains('border-red-400')) {
            valid = false;
        }
    });
    return valid;
}
function setButtonState(btn, enabled) {
    if (!btn) return;
    if (enabled) {
        btn.removeAttribute('disabled');
    } else {
        btn.setAttribute('disabled', true);
    }
}
