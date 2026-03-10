import Swiper from 'swiper';
import { Navigation } from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/navigation';
export function scrollServicesImages() {
    const images = document.querySelector('#services-about');
    if (!images) return;
    const swiperImg = images.querySelector('.swiper');
    const prev = images.querySelector('.swiper-prev');
    const next = images.querySelector('.swiper-next');

    console.log('suk');

    new Swiper(swiperImg, {
        modules: [Navigation],

        slidesPerView: 1,
        slidesPerGroup: 1,
        spaceBetween: 16,

        centeredSlides: true,
        loop: true,
        watchOverflow: true,
        grabCursor: true,

        allowTouchMove: true,
        simulateTouch: true,
        touchRatio: 1,
        touchAngle: 45,

        navigation: {
            prevEl: prev,
            nextEl: next,
        },

        breakpoints: {
            640: {
                slidesPerView: 1,
            },
        },
    });
}
