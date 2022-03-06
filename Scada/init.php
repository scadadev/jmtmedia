<?php


if( class_exists('acf') ) {

    add_action('init', 'scada_init');
}

/** if not installed show notice */
else {
    add_action('admin_notices', 'my_plugin_notice');
    function my_plugin_notice() {
        echo '<div class="notice notice-error is-dismissible"><p>The theme requires the ACF Pro plugin to work.</p></div>';
    }
}


function scada_init() {
    require_once __DIR__ . '/Classes/Author.php';
    require_once __DIR__ . '/Classes/ToTop.php';
}