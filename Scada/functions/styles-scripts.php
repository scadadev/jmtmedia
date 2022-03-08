<?php

function add_theme_css() {
    $theme_version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style( 'flags', get_stylesheet_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_script('theme-child', get_stylesheet_directory_uri() . '/assets/js/scripts.js', ['jquery'], $theme_version, true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_css' );


add_action('wp_footer', function(){
    echo '<style>';
        echo apply_filters('aff_inline_footer_styles', '');
    echo '</style>';
}, 100);