export function getContainerOffset(wrapper) {
    const container = wrapper.querySelector('.container');
    const styles = getComputedStyle(container);

    const paddingLeft = parseFloat(styles.paddingLeft);
    const left = container.getBoundingClientRect().left;

    return left + paddingLeft;
}

export function applyContainerPadding(scrollEl) {
    const wrapper = scrollEl.parentElement;

    const apply = () => {
        const offset = getContainerOffset(wrapper);
        scrollEl.style.paddingLeft = offset + 'px';
        scrollEl.style.paddingRight = offset + 'px';
    };

    apply();
    window.addEventListener('resize', apply);
}
