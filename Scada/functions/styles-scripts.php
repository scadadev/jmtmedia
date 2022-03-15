<?php

function add_theme_css() {
    $theme_version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style( 'flags', get_stylesheet_directory_uri() . '/assets/css/style.css' );

    wp_deregister_script('my_loadmore');
    wp_register_script( 'my_loadmore', get_stylesheet_directory_uri() . '/assets/js/loadmore.js', ['jquery'] );

    wp_enqueue_script('theme-child', get_stylesheet_directory_uri() . '/assets/js/scripts.js', ['jquery'], $theme_version, true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_css' );


add_action('wp_head', function(){
    global $BORN_FRAMEWORK;
    $global_background = $BORN_FRAMEWORK->Options->Get('background_color_global') ?? '#162e4c';
    echo '<meta name="theme-color" content="'. $global_background .'" >' . "\n";
    echo '<meta name="msapplication-navbutton-color" content="'. $global_background .'" >' . "\n";
    echo '<meta name="apple-mobile-web-app-status-bar-style" content="black" >' . "\n";
});


add_action('wp_footer', function(){
    echo '<style>';
        echo apply_filters('aff_inline_footer_styles', '');
    echo '</style>';
}, 100);