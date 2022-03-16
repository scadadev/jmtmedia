<?php

function add_theme_css() {
    $theme_version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style( 'flags', get_stylesheet_directory_uri() . '/assets/css/style.css' );

    wp_deregister_script('my_loadmore');
    wp_register_script( 'my_loadmore', get_stylesheet_directory_uri() . '/assets/js/loadmore.js', ['jquery'] );

    wp_enqueue_script('theme-child', get_stylesheet_directory_uri() . '/assets/js/scripts.js', ['jquery'], $theme_version, true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_css' );

add_action('wp_footer', function(){
    echo '<style>';
        echo apply_filters('aff_inline_footer_styles', '');
    echo '</style>';
}, 100);


add_filter('aff_inline_footer_styles', 'aff_set_contrast_color');
function aff_set_contrast_color($styles){
    global $BORN_FRAMEWORK;

    //accent color
    $global_accent = $BORN_FRAMEWORK->Options->Get('accent_color_global');
    if( !$global_accent ) {
        $global_accent = '#E7A736';
    }

    $styles .= '.author-expert__item svg{fill:'. $global_accent .'}';

    return $styles;
}