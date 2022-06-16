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

            $translations_child[] = [
                "id" => $prefix . "table_of_contents_" . $lng['code'],
                "type" => "text",
                "title" => 'Table of contents title"' . ' (' . $lng['code'] . ')',
                "default" => 'Table of contents'
            ];

            $translations_child[] = [
                "id" => $prefix . "summary_" . $lng['code'],
                "type" => "text",
                "title" => 'Summary' . ' (' . $lng['code'] . ')',
                "default" => 'Summary'
            ];

            $translations_child[] = [
                "id" => $prefix . "main_features_" . $lng['code'],
                "type" => "text",
                "title" => 'Main features' . ' (' . $lng['code'] . ')',
                "default" => 'Main features'
            ];

            $translations_child[] = [
                "id" => $prefix . "payment_methods_" . $lng['code'],
                "type" => "text",
                "title" => 'Payment methods' . ' (' . $lng['code'] . ')',
                "default" => 'Payment methods'
            ];

            $translations_child[] = [
                "id" => $prefix . "more_info_" . $lng['code'],
                "type" => "text",
                "title" => 'More info' . ' (' . $lng['code'] . ')',
                "default" => 'More info'
            ];

            $translations_child[] = [
                "id" => $prefix . "less_info_" . $lng['code'],
                "type" => "text",
                "title" => 'Less info' . ' (' . $lng['code'] . ')',
                "default" => 'Less info'
            ];

            $translations_child[] = [
                "id" => $prefix . "review_name_" . $lng['code'],
                "type" => "text",
                "title" => 'Review name label' . ' (' . $lng['code'] . ')',
                "default" => 'Vārds'
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

}

/** Show current template name and version */
add_filter('redux/args/born_options', function($args){
    $theme    = wp_get_theme();

    $args['display_name'] = $theme->get('Name');
    $args['display_version'] = $theme->get('Version');

    return $args;
});



/** AWARDS */
$translations_child = [];

$adward_filelds = [
    [
        'id'          => 'award_title',
        'type'        => 'text',
        'title'       => 'Title'
    ],
    [
        'id'          => 'award_text_1',
        'type'        => 'text',
        'title'       => 'Small text'
    ],
    [
        'id'          => 'award_text_2',
        'type'        => 'text',
        'title'       => 'Bottom text'
    ]
];

if (!empty($languages)) {
    foreach ($languages as $lng) {
        $translations_child[] = [
            "id" => $prefix . "award_block_title_" . $lng['code'],
            "type" => "text",
            "title" => 'Block title' . ' (' . $lng['code'] . ')',
            "default" => "Awards"
        ];

        $translations_child[] = [
            'id'         => $prefix . 'awards_repeater' . $lng['code'],
            'type'       => 'repeater',
            'title'      => 'Awards' . ' (' . $lng['code'] . ')',
            'group_values' => true,
            'item_name' => 'award'  . ' (' . $lng['code'] . ')',
            'fields'     => $adward_filelds
        ];
    }
}


Redux::setSection('born_options', array(
    'title' => 'Awards block    ',
    'id' => 'awards',
    'desc' => '',
    'icon' => 'el el-certificate',
    'priority' => 103,
    'fields' => $translations_child
));


/** LOGOS SECTION */
$translations_child = [];

if (!empty($languages)) {
    foreach ($languages as $lng) {
        $translations_child[] = [
            "id" => $prefix . "logos_block_title_" . $lng['code'],
            "type" => "text",
            "title" => 'Block title' . ' (' . $lng['code'] . ')',
            "default" => "As featured in"
        ];
    }
}

$translations_child[] = [
    'id'       => $prefix . "logos_list",
    'type'     => 'gallery',
    'title'    => 'Add/Edit logos list'
];

Redux::setSection('born_options', array(
    'title' => 'Logos block    ',
    'id' => 'logos',
    'desc' => '',
    'icon' => 'el el-picture',
    'priority' => 104,
    'fields' => $translations_child
));



/** foo SECTION */

$translations_child = [];

if (!empty($languages)) {
    foreach ($languages as $lng) {
        $translations_child[] = [
            "id" => $prefix . "foo_" . $lng['code'],
            "type" => "editor",
            "title" => 'Footer text' . ' (' . $lng['code'] . ')',
            "default" => "",
            'args'   => array(
                "wpautop" => "true"
            )
            
        ];

    }
}

$foo_logos_filelds = [
    [
        'id'          => 'foo_logo',
        "default" => false,
        "type"    => "media",
        'title'       => 'Logo image'
    ],
    [
        'id'          => 'foo_logo_link',
        'type'        => 'text',
        'title'       => 'Logo link'
    ]
];

$translations_child[] = [
    'id'         => $prefix . 'foo_logo_repeater',
    'type'       => 'repeater',
    'title'      => 'Logos in footer',
    'group_values' => true,
    'item_name' => 'logo_footer',
    'fields'     => $foo_logos_filelds
];

Redux::setSection('born_options', array(
    'title' => 'Footer text block    ',
    'id' => 'footer_text',
    'desc' => '',
    'icon' => 'el el-align-justify',
    'priority' => 105,
    'fields' => $translations_child
));

/** social links */

$translations_child = [];


$translations_child[] = [
    "id" => $prefix . "soc_fb",
    "type" => "text",
    "title" => 'facebook',
    "default" => ""
];

$translations_child[] = [
    "id" => $prefix . "soc_tw",
    "type" => "text",
    "title" => 'twitter',
    "default" => ""
];

$translations_child[] = [
    "id" => $prefix . "soc_insta",
    "type" => "text",
    "title" => 'instagram',
    "default" => ""
];

$translations_child[] = [
    "id" => $prefix . "soc_yout",
    "type" => "text",
    "title" => 'youtube',
    "default" => ""
];

$translations_child[] = [
    "id" => $prefix . "soc_in",
    "type" => "text",
    "title" => 'linkedin',
    "default" => ""
];

$translations_child[] = [
    "id" => $prefix . "soc_tik",
    "type" => "text",
    "title" => 'tiktok',
    "default" => ""
];

Redux::setSection('born_options', array(
    'title' => 'Social links ',
    'id' => 'social_links',
    'desc' => '',
    'icon' => 'el el-share-alt',
    'priority' => 106,
    'fields' => $translations_child
));


/** play buttons  */

$translations_child = [];

if (!empty($languages)) {
    foreach ($languages as $lng) {
        $translations_child[] = [
            "id" => $prefix . "play_btn_demo" . $lng['code'],
            "type" => "text",
            "title" => 'Play demo btn' . ' (' . $lng['code'] . ')',
            "default" => "Play demo"
        ];
        $translations_child[] = [
            "id" => $prefix . "play_btn_real" . $lng['code'],
            "type" => "text",
            "title" => 'Play real money btn' . ' (' . $lng['code'] . ')',
            "default" => "Play with real money"
        ];

    }
}

Redux::setSection('born_options', array(
    'title' => 'Play buttons for game',
    'id' => 'play_btns_game',
    'desc' => '',
    'icon' => 'el el-play',
    'priority' => 106,
    'fields' => $translations_child
));



/** game info titles  */

$translations_child = [];

if (!empty($languages)) {
    foreach ($languages as $lng) {
        $translations_child[] = [
            "id" => $prefix . "game_name_title" . $lng['code'],
            "type" => "text",
            "title" => 'Game name' . ' (' . $lng['code'] . ')',
            "default" => "Game name"
        ];
        $translations_child[] = [
            "id" => $prefix . "software_provider_title" . $lng['code'],
            "type" => "text",
            "title" => 'Software provider' . ' (' . $lng['code'] . ')',
            "default" => "Software provider"
        ];
        $translations_child[] = [
            "id" => $prefix . "theme_title" . $lng['code'],
            "type" => "text",
            "title" => 'Theme' . ' (' . $lng['code'] . ')',
            "default" => "Theme"
        ];
        $translations_child[] = [
            "id" => $prefix . "paylines_title" . $lng['code'],
            "type" => "text",
            "title" => 'Paylines' . ' (' . $lng['code'] . ')',
            "default" => "Paylines"
        ];
        $translations_child[] = [
            "id" => $prefix . "rtp_title" . $lng['code'],
            "type" => "text",
            "title" => 'RTP' . ' (' . $lng['code'] . ')',
            "default" => "RTP"
        ];
        $translations_child[] = [
            "id" => $prefix . "game_launch_date_title" . $lng['code'],
            "type" => "text",
            "title" => 'Game launch date' . ' (' . $lng['code'] . ')',
            "default" => "Game launch date"
        ];
        $translations_child[] = [
            "id" => $prefix . "jackpot_title" . $lng['code'],
            "type" => "text",
            "title" => 'Jackpot' . ' (' . $lng['code'] . ')',
            "default" => "Jackpot"
        ];
        $translations_child[] = [
            "id" => $prefix . "bonus_feature_title" . $lng['code'],
            "type" => "text",
            "title" => 'Bonus feature' . ' (' . $lng['code'] . ')',
            "default" => "Bonus feature"
        ];
        $translations_child[] = [
            "id" => $prefix . "free_spins_title" . $lng['code'],
            "type" => "text",
            "title" => 'Free Spins' . ' (' . $lng['code'] . ')',
            "default" => "Free Spins"
        ];
        $translations_child[] = [
            "id" => $prefix . "autoplay_title" . $lng['code'],
            "type" => "text",
            "title" => 'Autoplay' . ' (' . $lng['code'] . ')',
            "default" => "Autoplay"
        ];
        $translations_child[] = [
            "id" => $prefix . "minimum_bet_title" . $lng['code'],
            "type" => "text",
            "title" => 'Minimum bet' . ' (' . $lng['code'] . ')',
            "default" => "Minimum bet"
        ];
        $translations_child[] = [
            "id" => $prefix . "maximum_bet_title" . $lng['code'],
            "type" => "text",
            "title" => 'Maximum bet' . ' (' . $lng['code'] . ')',
            "default" => "Maximum bet"
        ];
        $translations_child[] = [
            "id" => $prefix . "biggest_win_title" . $lng['code'],
            "type" => "text",
            "title" => 'Biggest win' . ' (' . $lng['code'] . ')',
            "default" => "Biggest win"
        ];
    }
}



Redux::setSection('born_options', array(
    'title' => 'Games infotitles',
    'id' => 'games_infotitles',
    'desc' => '',
    'icon' => 'el el-info-circle',
    'priority' => 107,
    'fields' => $translations_child
));


/** Go page */

$translations_child = [];

if (!empty($languages)) {
    foreach ($languages as $lng) {

        $translations_child[] = [
            "id" => $prefix . "go_title" . $lng['code'],
            "type" => "text",
            "title" => 'go title' . ' (' . $lng['code'] . ')',
            "default" => ""
        ];

        $translations_child[] = [
            "id" => $prefix . "go_text" . $lng['code'],
            "type" => "text",
            "title" => 'go text' . ' (' . $lng['code'] . ')',
            "default" => ""
        ];

        $translations_child[] = [
            "id" => $prefix . "go_seconds" . $lng['code'],
            "type" => "text",
            "title" => 'go seconds' . ' (' . $lng['code'] . ')',
            "default" => "seconds"
        ];

        $translations_child[] = [
            "id" => $prefix . "go_button" . $lng['code'],
            "type" => "text",
            "title" => 'go button' . ' (' . $lng['code'] . ')',
            "default" => ""
        ];
    }
}

$translations_child[] = [
    "id" => $prefix . "go_logo",
    "type" => "media",
    "title" => 'logo',
    "default" => ""
];


Redux::setSection('born_options', array(
    'title' => 'Go page',
    'id' => 'go_page',
    'desc' => '',
    'icon' => 'el el-retweet',
    'priority' => 107,
    'fields' => $translations_child
));