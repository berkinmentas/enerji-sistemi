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
import Swal from 'sweetalert2';
window.Swal = Swal;
import.meta.glob([
    '../images/**'
])
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    },
    beforeSend: function () {

    },
    complete: function () {

    },
    error: window.ajaxDefaultErrorCallback
});
window.ajaxDefaultErrorCallback = function (result, returnResponse = false) {
    if (result.responseJSON) {
        let message = [];

        if (result.responseJSON.errors) {
            $.each(result.responseJSON.errors, function (key, item) {
                $.each(item, function (key2, m) {
                    message.push(m);
                });
            });
        } else if (result.responseJSON.message) {
            message.push(result.responseJSON.message);
        }

        if (message.length > 0) {
            // hideLoader();

            if (returnResponse)
                return message.join("<br />");

            Swal.fire("", message.join("<br />"), 'error').then(() => {
            });
        }
    }

    return '';
}
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

const heroCardsMobile = new Swiper('.hero-cards-mobile-swiper', {
    loop: true,
    autoplay: true,
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
    $('.image-link-product-detail').magnificPopup({
        type:'image',
        gallery: {
            enabled: true
        },
    });
});


let navbarMobileButton = document.querySelector('.navbar-mobile-button');
let navbarMobileModal = document.querySelector('.navbar-mobile-modal');
let navbarMobileModalCloseBtn = document.querySelector('.navbar-mobile-modal-close-btn');
let navbarAccordionButton=document.querySelector('.accordion-button');
let navbarAccordionDownButton=document.querySelector('.accordion-down-btn');
navbarMobileButton.addEventListener('click', function (){
    //navbarMobileModal.style.display="block";
    //navbarMobileModal.style.width="400px";
    navbarMobileModal.classList.add("show");
})
navbarMobileModalCloseBtn.addEventListener('click', function (){
    navbarMobileModal.classList.remove("show");
})


