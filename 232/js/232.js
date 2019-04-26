$(document).ready(function () {
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 4,
        spaceBetween: 10,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            1024: {
                slidesPerView: 4,
                slidesPerColumn: 1,
                spaceBetween: 30,
            },
            768: {
                slidesPerView: 3,
                slidesPerColumn: 1,
                spaceBetween: 20,
            },
            640: {
                slidesPerView: 2,
                slidesPerColumn: 1,
                spaceBetween: 10,
            },
            320: {
                slidesPerView: 1,
                slidesPerColumn: 1,
                spaceBetween: 5,
            }
        },
    });
});