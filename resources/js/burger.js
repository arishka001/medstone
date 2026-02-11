export function burger() {
    const burger = document.querySelector('.burger');
    const burgerToggle = document.querySelector('.burger-toggle');
    const burgerText = burgerToggle.querySelector('.burger-text');
    const burgerCloser = burgerToggle.querySelector('.burger-close');

    const dropdownBlock = burger.querySelector('.drop-down-block');
    const dropdownList = burger.querySelector('.drop-down-list');
    const dropdownArrow = burger.querySelector('.drop-down-arrow');

    burgerToggle.addEventListener('click', () => {
        burger.classList.toggle('hidden');
        burgerText.classList.toggle('hidden');
        burgerCloser.classList.toggle('hidden');
    });

    dropdownBlock.addEventListener('mouseenter', () => {
        dropdownList.classList.remove('hidden');
        dropdownArrow.classList.add('rotate-180');
    });

    dropdownBlock.addEventListener('mouseleave', () => {
        dropdownList.classList.add('hidden');
        dropdownArrow.classList.remove('rotate-180');
    });

    // написать функцию, которая автоматом закрывает менюшку, если меняется размер окна на планшете
    // написать функцию которая блокирует скролл страницы, если меню открыто
}
