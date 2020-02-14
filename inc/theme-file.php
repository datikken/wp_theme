<?php 
    function theme_scripts() {
        // styles
        wp_enqueue_style('styles', THEME_URI . '/css/main.css' );
        wp_enqueue_style('swiper_styles', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css' );
        wp_enqueue_style('owl_styles', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css' );
        wp_enqueue_style('owl2_styles', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
        wp_enqueue_style('brands_styles', 'https://use.fontawesome.com/releases/v5.0.8/css/brands.css' );
        wp_enqueue_style('brands2_styles', 'https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css' );
        wp_enqueue_style('slider_styles', 'https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.css' );
        wp_enqueue_style('slider_styles', 'https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.css' );
       
        // scripts
        wp_enqueue_script('4','https://code.jquery.com/jquery-3.4.1.js', array('jquery'), true);
        wp_enqueue_script('main', THEME_URI . '/js/main.js');
        wp_enqueue_script('2','https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js');
        wp_enqueue_script('3','https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js', array('jquery'), true);
        wp_enqueue_script('5','https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js', array('jquery'), true);
        wp_enqueue_script('6','//api-maps.yandex.ru/2.1/?lang=ru_RU', array('jquery'), true);
    }