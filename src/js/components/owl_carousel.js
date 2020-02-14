
const owl = $('.owl-wrapper');

let count;

if(window.screen.width < 450) {
    count = 1;
} else {
    count = 5;
}

if(owl) {
    document.addEventListener("DOMContentLoaded", function() {
        $('.owl-carousel').owlCarousel({
            items: count,
            nav: true,
            autoplay: true,
            loop: true,
            stagePadding: 10
        });
    });
}
