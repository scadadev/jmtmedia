<?php

add_action('init', function(){
    define('LANG_CODE', function_exists('born_get_current_language_code') ? born_get_current_language_code() : 'lv');
});

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
    require_once __DIR__ . '/Classes/SiteMap.php';
    require_once __DIR__ . '/Classes/Awards.php';
    require_once __DIR__ . '/Classes/Logos.php';
    require_once __DIR__ . '/Classes/Ajax.php';
    require_once __DIR__ . '/Classes/TopProducts.php';
    require_once __DIR__ . '/Classes/Payments.php';
    require_once __DIR__ . '/Classes/Gambleaware.php';

    new \Scada\ToTop();
    new \Scada\SiteMap();
    new \Scada\Awards();
    new \Scada\Logos();
    new \Scada\Ajax();
    new \Scada\TopProducts();
    new \Scada\Payments();
    new \Scada\Gambleaware();
}