import { helpers } from './helpers.js';
export function burger() {
    const header = document.querySelector('.header');
    const burger = document.querySelector('.burger');
    const burgerToggle = document.querySelector('.burger-toggle');
    const burgerText = burgerToggle.querySelector('.burger-text');
    const burgerCloser = burgerToggle.querySelector('.burger-close');

    const dropdownBlock = burger.querySelector('.drop-down-block');
    const dropdownList = burger.querySelector('.drop-down-list');
    const dropdownArrow = burger.querySelector('.drop-down-arrow');

    function toggleBurger() {
        header.classList.toggle('rounded-b-3xl');
        burger.classList.toggle('hidden');
        burgerText.classList.toggle('hidden');
        burgerCloser.classList.toggle('hidden');

        helpers.lookScroll.toggle();
    }

    burgerToggle.addEventListener('click', toggleBurger);

    let currentWindowWith = window.innerWidth;
    window.addEventListener('resize', function () {
        if (
            currentWindowWith !== window.innerWidth &&
            (helpers.breakpoints.isTablet() || helpers.breakpoints.isDesktop())
        ) {
            currentWindowWith = window.innerWidth;
            if (header.classList.contains('fixed')) {
                toggleBurger();
            }
        }
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && !burger.classList.contains('hidden')) {
            toggleBurger();
        }
    });

    dropdownBlock.addEventListener('mouseenter', () => {
        dropdownList.classList.remove('hidden');
        dropdownArrow.classList.add('rotate-180');
    });

    dropdownBlock.addEventListener('mouseleave', () => {
        dropdownList.classList.add('hidden');
        dropdownArrow.classList.remove('rotate-180');
    });
}
