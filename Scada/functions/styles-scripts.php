<?php

function add_theme_css() {

    global $born_options;

    $theme_version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style( 'theme-child', get_stylesheet_directory_uri() . '/assets/css/style.css', ['aff'], $theme_version );

    wp_deregister_script('my_loadmore');
    wp_dequeue_script('my_loadmore');
    //wp_register_script( 'my_loadmore', get_stylesheet_directory_uri() . '/assets/js/loadmore.js', ['jquery'] );

    wp_enqueue_script('theme-child', get_stylesheet_directory_uri() . '/assets/js/scripts.js', ['jquery', 'lightbox'], $theme_version, true);

    wp_localize_script( 'theme-child', 'theme_params', array(
        'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php',
        'texts' => [
            'loadmore' => $born_options['aff_load_more' . LANG_CODE],
            'loading' => $born_options['aff_loading' . LANG_CODE],
        ]
    ) );
}
add_action( 'wp_enqueue_scripts', 'add_theme_css', 99 );

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

    $styles .= '.author-expert__item svg, .title-meta__item svg{fill:'. $global_accent .'}';

    return $styles;
}