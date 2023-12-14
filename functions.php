<?php

// Add to theme Styles, JS
function mk_theme() {
    // JQUERY v3.7.1
    wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/assets/js/vendor/jquery/jquery-3.7.1.min.js');
    // Slick Carousel
    wp_enqueue_script( 'slick_carousel_js', get_template_directory_uri() . '/node_modules/slick-carousel/slick/slick.min.js');

    // CSS
    wp_enqueue_style( 'style', get_template_directory_uri().'/assets/dist/css/style.css' );
    // Navigation JS
    wp_enqueue_script( 'navbar_js', get_template_directory_uri() . '/assets/js/sections/navbar.js');
    // Home hero block
    wp_enqueue_script( 'home_hero_block_js', get_template_directory_uri() . '/assets/js/sections/home-hero.js');
}
add_action( 'wp_enqueue_scripts', 'mk_theme' );

require_once get_template_directory() . '/includes/social-links-customizations.php';
require_once get_template_directory() . '/includes/contacts-customizations.php';
