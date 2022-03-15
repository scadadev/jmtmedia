<?php

function aff_child_scripts() {
    wp_deregister_script('my_loadmore');
    wp_register_script( 'my_loadmore', get_stylesheet_directory_uri() . '/assets/js/loadmore.js', ['jquery'] );
}
add_action( 'wp_enqueue_scripts', 'aff_child_scripts' );

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