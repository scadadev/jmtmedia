<?php

$prefix = BORN_NAME . '_';

if (class_exists('\Redux')) {

    Redux::setSection('born_options', array(
        'title' => __('Google Tag Manager', BORN_NAME),
        'id' => 'gtm',
        'desc' => '',
        'icon' => 'el el-signal',
        'priority' => 101,
        //'callback' => 'test_redux_callback',
        'fields' => array(
            array(
                "id" => $prefix . "gtm_code",
                "desc" => "",
                'type' => 'textarea',
                'title' => __('GTM code', BORN_NAME),
                "default" => ""
            )
        )
    ));
}