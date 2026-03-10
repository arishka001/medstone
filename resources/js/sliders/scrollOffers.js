import Swiper from 'swiper';
import { Navigation } from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/navigation';
export function scrollOffers() {
    const offers = document.querySelector('#offers-block');
    if (!offers) return;

    const swiper = offers;
    const prev = offers.querySelector('.swiper-prev');
    const next = offers.querySelector('.swiper-next');

    new Swiper(swiper, {
        slidesPerView: 1,
        spaceBetween: 5,
        loop: true,
        grabCursor: true,
        allowTouchMove: true,
        simulateTouch: true,
        modules: [Navigation],
        navigation: {
            prevEl: prev,
            nextEl: next,
        },
    });
}
