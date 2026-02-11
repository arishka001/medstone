export let helpers = {
    windowResize: {
        windowWidth: window.innerWidth,
        hasWidthResize: function () {
            if (this.windowWidth !== $(window).width()) {
                this.windowWidth = $(window).width();
                return true;
            } else {
                return false;
            }
        },
    },
    lookScroll: {
        scrollTop: 0,
        isLocked: function () {
            return $('body').hasClass('overflow-hidden');
        },
        toggleClass: function () {
            $('body').toggleClass('touch-none overflow-hidden h-full');
        },
        lock: function () {
            this.scrollTop = $(window).scrollTop();
            this.toggleClass();
        },
        unlock: function () {
            this.toggleClass();
            $(window).scrollTop(this.scrollTop);
        },
        toggle: function () {
            if (this.isLocked()) {
                this.unlock();
            } else {
                this.lock();
            }
        },
    },
    breakpoints: {
        isSm: function () {
            return $(window).width() >= 640 && $(window).width() < 768;
        },
        isMd: function () {
            return $(window).width() >= 768 && $(window).width() < 1024;
        },
        isLg: function () {
            return $(window).width() >= 1024 && $(window).width() < 1280;
        },
        isXl: function () {
            return $(window).width() >= 1280 && $(window).width() < 1536;
        },
        is2Xl: function () {
            return $(window).width() >= 1536;
        },
        isMobile: function () {
            return $(window).width() < 640;
        },
        isTablet: function () {
            return this.isLg();
        },
        isDesktop: function () {
            return this.isXl() || this.is2Xl();
        },
    },
};
