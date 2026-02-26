import Swiper from 'swiper';
import { Navigation } from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/navigation';
export function scrollCertificates() {
    const certificates = document.querySelector('#certificates');
    if (!certificates) return;

    const swiper = certificates.querySelector('.swiper');
    const prev = certificates.querySelector('.swiper-prev');
    const next = certificates.querySelector('.swiper-next');

    function getContainerOffset() {
        const container = certificates.querySelector('.container');
        const styles = getComputedStyle(container);

        const paddingLeft = parseFloat(styles.paddingLeft);
        const left = container.getBoundingClientRect().left;

        return left + paddingLeft;
    }

    new Swiper(swiper, {
        slidesPerView: 1,
        spaceBetween: 10,
        watchOverflow: true,
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
                slidesPerView: 3,
            },
            1280: {
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
