<?php

require_once __DIR__ . '/Scada/init.php';


require get_template_directory() . '/plugin-update-checker/plugin-update-checker.php';
/*$MyUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
    'http://update.dev.born.lv/aff.json', //Metadata URL.
    __FILE__, //Full path to the main plugin file.
    'aff' //Plugin slug. Usually it's the same as the name of the directory.
);*/