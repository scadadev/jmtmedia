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