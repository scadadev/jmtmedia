<?php

require_once __DIR__ . '/Scada/init.php';


add_action('init', function(){
    require get_template_directory() . '/plugin-update-checker/plugin-update-checker.php';
    $myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
        'https://github.com/rogodessa/aff_child',
        __FILE__,
        'aff_child'
    );
    $myUpdateChecker->setBranch('production');
});