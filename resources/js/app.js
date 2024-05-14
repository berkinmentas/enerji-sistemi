import './bootstrap';
import '../scss/app.scss';
import 'magnific-popup';
import LazyLoad from "vanilla-lazyload";
import Swiper from 'swiper';

Swiper.use([Pagination, Autoplay, Navigation, Thumbs]);
import {Pagination, Navigation, Autoplay, Thumbs} from 'swiper/modules';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/autoplay';
import.meta.glob([
    '../images/**'
])
const productWaterHeatingMainSlider = new Swiper('.product-water-heating-main-swiper', {
    loop: true,
    autoplay: false,
    spaceBetween: 10,
    preloadImages: true,
    centeredSlides: true,
    pagination: {

        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 10
        },
        480: {
            slidesPerView: 1,
            spaceBetween: 10
        },
        640: {
            slidesPerView: 3,
            spaceBetween: 10
        },
        992: {
            slidesPerView: 4,
            spaceBetween: 40
        },
        1250: {
            slidesPerView: 4,
            spaceBetween: 40
        },
        1800: {
            slidesPerView: 6,
            spaceBetween: 40
        }
    }
});
const productWaterHeatingPvPackageSlider = new Swiper('.product-water-heating-pv-package-swiper', {
    loop: true,
    autoplay: true,
    spaceBetween: 10,
    preloadImages: true,
    centeredSlides: true,
    pagination: {

        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 10
        },
        480: {
            slidesPerView: 1,
            spaceBetween: 10
        },
        640: {
            slidesPerView: 3,
            spaceBetween: 10
        },
        992: {
            slidesPerView: 4,
            spaceBetween: 40
        },
        1250: {
            slidesPerView: 4,
            spaceBetween: 40
        },
        1800: {
            slidesPerView: 6,
            spaceBetween: 40
        }
    }
});

const swiper = new Swiper('.comments-swiper', {
    loop: true,
    //autoplay: true,
    spaceBetween: 10,
    preloadImages: true,
    centeredSlides: true,
    slidesPerView: 1,
    pagination: {
        el: '.swiper-pagination',
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },
});
new LazyLoad({
    elements_selector: '.lazy'
});

$(document).ready(function() {
    $('.image-link').magnificPopup({
        type:'image',
        gallery: {
            enabled: true
        },
    });
    $('.image-link-pv-systems').magnificPopup({
        type:'image',
        gallery: {
            enabled: true
        },
    });
    $('.image-link-solar-heating').magnificPopup({
        type:'image',
        gallery: {
            enabled: true
        },
    });
});
