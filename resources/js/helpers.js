export let helpers = {
    breakpoints: {
        isSm: function () {
            return window.innerWidth >= 640 && window.innerWidth < 768;
        },
        isMd: function () {
            return window.innerWidth >= 768 && window.innerWidth < 1024;
        },
        isLg: function () {
            return window.innerWidth >= 1024 && window.innerWidth < 1280;
        },
        isXl: function () {
            return window.innerWidth >= 1280 && window.innerWidth < 1536;
        },
        is2Xl: function () {
            return window.innerWidth >= 1536;
        },
        isMobile: function () {
            return window.innerWidth < 640;
        },
        isTablet: function () {
            return this.isSm() || this.isLg();
        },
        isDesktop: function () {
            return this.isXl() || this.is2Xl();
        },
    },
    className: {
        toggle: function (el, classNames) {
            classNames.forEach(function (className) {
                el.classList.toggle(className);
            });
        },
    },
    image: {
        lazyLoading: function (img) {
            img.setAttribute('src', img.getAttribute('data-src'));
        },
    },
    lookScroll: {
        scrollTop: 0,
        isLocked: false,
        toggleClass: function () {
            helpers.className.toggle(document.querySelector('body'), [
                'touch-none',
                'overflow-hidden',
                'h-full',
            ]);
        },
        lock: function () {
            this.scrollTop = window.scrollY;
            this.toggleClass();
            this.isLocked = true;
        },
        unlock: function () {
            this.toggleClass();
            window.scroll(0, this.scrollTop);
            this.isLocked = false;
        },
        toggle: function () {
            if (this.isLocked) {
                this.unlock();
            } else {
                this.lock();
            }
        },
    },
};
