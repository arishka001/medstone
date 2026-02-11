import Swiper from 'swiper';
import { Navigation } from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/navigation';
export function scrollReviews() {
    const review = document.querySelector('#review');
    const swiper = review.querySelector('.swiper');
    const prev = review.querySelector('.swiper-prev');
    const next = review.querySelector('.swiper-next');

    function getContainerOffset() {
        const container = review.querySelector('.container');
        const styles = getComputedStyle(container);

        const paddingLeft = parseFloat(styles.paddingLeft);
        const left = container.getBoundingClientRect().left;

        return left + paddingLeft;
    }

    new Swiper(swiper, {
        slidesPerView: 1,
        spaceBetween: 10,
        slidesOffsetBefore: getContainerOffset(),
        slidesOffsetAfter: getContainerOffset(),
        modules: [Navigation],
        navigation: {
            prevEl: prev,
            nextEl: next,
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
