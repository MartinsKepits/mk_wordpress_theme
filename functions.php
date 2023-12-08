<?php

// Add to theme Styles, JS
function mk_theme() {
    // JQUERY v3.7.1
    wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/assets/js/vendor/jquery/jquery-3.7.1.min.js');

    // CSS
    wp_enqueue_style( 'style', get_template_directory_uri().'/assets/dist/css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'mk_theme' );