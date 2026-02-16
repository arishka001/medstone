export function scrollMap() {
    const mapOverlay = document.querySelector('.map-overlay');

    mapOverlay.addEventListener('click', function () {
        this.style.display = 'none';
    });
}
