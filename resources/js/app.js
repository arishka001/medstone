import.meta.glob(['../images/**', '../fonts/**']);
import '../css/app.css';

import { accordion } from './accordion.js';
import { burger } from './burger.js';
import { changePricesTabs } from './changePricesTabs.js';
import { scrollToTop } from './components/scroll-to-top.js';
import { initBlogsFilter } from './filterBlogs.js';
import { initDoctorsFilter } from './filterDoctors.js';
import { initWorksFilter } from './filterWorks.js';
import { initForms } from './forms.js';
import { scrollMap } from './map.js';
import './modals.js';
import { scrollCertificates } from './scrollCertificates.js';
import { scrollGallery } from './scrollGallery.js';
import { scrollOffers } from './scrollOffers.js';
import { scrollReviews } from './scrollReviews.js';
import { scrollServicesImages } from './scrollServicesGallery.js';
import { scrollWorks } from './scrollWorks.js';

burger();
accordion();
scrollReviews();
scrollWorks();
scrollGallery();
scrollToTop();
scrollMap();
scrollServicesImages();
scrollCertificates();
scrollOffers();
initForms();

document.addEventListener('DOMContentLoaded', () => {
    changePricesTabs();
    initDoctorsFilter();
    initBlogsFilter();
    initWorksFilter();
});
