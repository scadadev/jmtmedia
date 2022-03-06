<?php

function add_theme_css() {
    wp_enqueue_style( 'flags', get_stylesheet_directory_uri() . '/assets/css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'add_theme_css' );


add_action('wp_footer', function(){
    echo '<style>';
        echo apply_filters('aff_inline_footer_styles', '');
    echo '</style>';
}, 100);