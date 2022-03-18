<?php

$prefix = BORN_NAME . '_';

if (class_exists('\Redux')) {

    $languages = born_get_languages();

    Redux::setSection('born_options', array(
        'title' => __('Google Tag Manager', BORN_NAME),
        'id' => 'gtm',
        'desc' => '',
        'icon' => 'el el-signal',
        'priority' => 102,
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

    /** Section for child theme translations */
    $translations_child = [];

    if (!empty($languages)) {
        foreach ($languages as $lng) {

            $translations_child[] = [
                "id" => $prefix . "page_meta_country_" . $lng['code'],
                "type" => "text",
                "title" => __('Text before country (page top icons)', BORN_NAME) . ' (' . $lng['code'] . ')',
                "default" => "Licenced in"
            ];

            $translations_child[] = [
                "id" => $prefix . "page_meta_safe_" . $lng['code'],
                "type" => "text",
                "title" => __('"Safe & expert" text (page top icons)', BORN_NAME) . ' (' . $lng['code'] . ')',
                "default" => "Safe & expert reviewed"
            ];

            $translations_child[] = [
                "id" => $prefix . "sitemap_name_post_" . $lng['code'],
                "type" => "text",
                "title" => 'Sitemap name for "Posts"' . ' (' . $lng['code'] . ')',
                "default" => 'Raksti'
            ];

            $translations_child[] = [
                "id" => $prefix . "sitemap_name_page_" . $lng['code'],
                "type" => "text",
                "title" => 'Sitemap name for "Pages"' . ' (' . $lng['code'] . ')',
                "default" => 'Sadaļas'
            ];

            $translations_child[] = [
                "id" => $prefix . "sitemap_name_products_" . $lng['code'],
                "type" => "text",
                "title" => 'Sitemap name for "Products"' . ' (' . $lng['code'] . ')',
                "default" => 'Apskati'
            ];

            $translations_child[] = [
                "id" => $prefix . "sitemap_name_games_" . $lng['code'],
                "type" => "text",
                "title" => 'Sitemap name for "Games"' . ' (' . $lng['code'] . ')',
                "default" => 'Spēles'
            ];
        }
    }

    Redux::setSection('born_options', array(
        'title' => __('Theme Child Translations', BORN_NAME),
        'id' => 'translations_child',
        'desc' => '',
        'icon' => 'el el-bullhorn',
        'priority' => 102,
        //'callback' => 'test_redux_callback',
        'fields' => $translations_child
    ));

//    Redux::setField(
//        'born_options',
//        array(
//            "section_id" => "gtm",
//            "id" => $prefix . "page_meta_country_222",
//            "type" => "text",
//            "title" => __('TEST', BORN_NAME),
//            "default" => "Licenced in"
//        )
//    );

}