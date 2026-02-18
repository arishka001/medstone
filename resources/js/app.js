import.meta.glob(['../images/**', '../fonts/**']);
import '../css/app.css';

import { accordion } from './accordion.js';
import { burger } from './burger.js';
import { scrollToTop } from './components/scroll-to-top.js';
import { scrollMap } from './map.js';
import { scrollGallery } from './scrollGallery.js';
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
