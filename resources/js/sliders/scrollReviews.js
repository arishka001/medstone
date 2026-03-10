import Swiper from 'swiper';
import { Navigation } from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/navigation';
import { getContainerOffset } from '../utils.js';
export function scrollReviews() {
    const review = document.querySelector('#review');
    if (!review) return;

    const swiper = review.querySelector('.swiper');
    const prev = review.querySelector('.swiper-prev');
    const next = review.querySelector('.swiper-next');

    new Swiper(swiper, {
        slidesPerView: 1,
        spaceBetween: 10,
        watchOverflow: true,
        slidesOffsetBefore: getContainerOffset(review),
        slidesOffsetAfter: getContainerOffset(review),
        modules: [Navigation],
        navigation: {
            prevEl: prev,
            nextEl: next,
        },

        on: {
            resize(swiperInstance) {
                swiperInstance.params.slidesOffsetBefore =
                    getContainerOffset(review);
                swiperInstance.params.slidesOffsetAfter =
                    getContainerOffset(review);
                swiperInstance.update();
            },
        },
    });
}
