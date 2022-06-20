<?php

define('PARENT_PATH', __DIR__);

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/Scada/init.php';
require_once __DIR__ . '/Scada/functions/styles-scripts.php';

add_action('init', function(){
    require get_template_directory() . '/plugin-update-checker/plugin-update-checker.php';
    $myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
        'https://github.com/scadadev/jmtmedia',
        __FILE__,
        'jmtmedia'
    );
    $myUpdateChecker->setBranch('production');
});

add_action('after_setup_theme', function(){
    require_once __DIR__ . '/Scada/functions/admin.php';
    require_once __DIR__ . '/Scada/functions/gtm.php';
    require_once __DIR__ . '/Scada/functions/user.php';
});


/** set status publish for product review */
add_action('wp_insert_post', function($post_ID, $post, $update){
    if( $post->post_type == 'product-reviews' && !$update ) {
        wp_update_post([
            'ID' => $post_ID,
            'post_status' => 'publish'
        ]);
    }
}, 10, 3);
/**
 * Убрать из загрузки
 */
function plug_disable_emoji() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    add_filter( 'tiny_mce_plugins', 'plug_disable_tinymce_emoji' );
  }
  add_action( 'init', 'plug_disable_emoji', 1 );
   
  /**
   * Очистить в tinymce
   */
  function plug_disable_tinymce_emoji( $plugins ) {
    return array_diff( $plugins, array( 'wpemoji' ) );
  }