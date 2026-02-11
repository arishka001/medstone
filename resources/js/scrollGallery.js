import Swiper from 'swiper';
import { Navigation } from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/navigation';
export function scrollGallery() {
    const gallery = document.querySelector('#gallery');
    const swiper = gallery.querySelector('.swiper');
    const prev = gallery.querySelector('.swiper-prev');
    const next = gallery.querySelector('.swiper-next');

    function getContainerOffset() {
        const container = gallery.querySelector('.container');
        const styles = getComputedStyle(container);

        const paddingLeft = parseFloat(styles.paddingLeft);
        const left = container.getBoundingClientRect().left;

        return left + paddingLeft;
    }

    new Swiper(swiper, {
        slidesPerView: 1,
        spaceBetween: 10,

        loop: true,
        centeredSlides: true,
        grabCursor: true,

        //тут скролл пальцем и мышкой
        allowTouchMove: true,
        simulateTouch: true,
        touchRatio: 1,
        touchAngle: 45,

        loopAdditionalSlides: 2,
        slidesOffsetBefore: getContainerOffset(),
        slidesOffsetAfter: getContainerOffset(),
        modules: [Navigation],
        navigation: {
            prevEl: prev,
            nextEl: next,
        },
        breakpoints: {
            1024: {
                slidesPerView: 1,
            },
        },

        on: {
            resize(swiperInstance) {
                swiperInstance.params.slidesOffsetBefore = getContainerOffset();
                swiperInstance.params.slidesOffsetAfter = getContainerOffset();
                swiperInstance.update();
            },
        },
    });
}
