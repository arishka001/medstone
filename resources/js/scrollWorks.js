import Swiper from 'swiper';
import { Navigation } from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/navigation';
export function scrollWorks() {
    const works = document.querySelector('#works');
    const swiper = works.querySelector('.swiper');
    const prev = works.querySelector('.swiper-prev');
    const next = works.querySelector('.swiper-next');

    function getContainerOffset() {
        const container = works.querySelector('.container');
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
        breakpoints: {
            640: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 4,
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
