<?php

namespace Scada;

use WP_Query;

class SiteMap {

    public function __construct() {
        $this->acf();
    }


    public static function getUseTypes() {
        return [
            'post',
            'page',
            'products',
            'games',
        ];
    }

    /** return posts list by post type */
    public static function getPosts($post_type) {

        global $post;

        $args = [
            'post_status' => 'publish',
            'post_type' => $post_type,
            'posts_per_page' => -1,
            'orderby' => 'name',
            'order' => 'ASC',
            'meta_query' => [
                [
                    'relation' => 'OR',
                    [
                        'key' => 'exclude_from_html_sitemap',
                        'compare' => 'NOT EXISTS'
                    ],
                    [
                        'key' => 'exclude_from_html_sitemap',
                        'value' => '1',
                        'compare' => '!=',
                    ]
                ]
            ],
        ];

        if ($post_type == 'page') {
            $args['post__not_in'][] = $post->ID;
        }

        $posts_query = new WP_Query($args);

        if( !empty($posts_query) ) {
            return $posts_query->posts;
        }

        return false;
    }


    /** return titles for block links */
    public static function blockTitle($post_type){
        global $BORN_FRAMEWORK;

        if( in_array($post_type, self::getUseTypes()) ) {
            return $BORN_FRAMEWORK->Options->Get('sitemap_name_'. $post_type .'_'. LANG_CODE );
        }
        else {
            $labels = get_post_type_object($post_type);
            return $labels->label;
        }
    }


    /** add acf field for exclude page from the sitemap */
    public function acf() {

        $location = [];

        foreach( self::getUseTypes() as $post_type ) {
            $location[] = [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => $post_type,
                ]
            ];
        }

        acf_add_local_field_group(array(
            'key' => 'group_624e84bd13290',
            'title' => 'Sitemap',
            'fields' => array(
                array(
                    'key' => 'field_624e84c8ff8ed',
                    'label' => 'Exclude from HTML sitemap',
                    'name' => 'exclude_from_html_sitemap',
                    'type' => 'true_false',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'message' => '',
                    'default_value' => 0,
                    'ui' => 1,
                    'ui_on_text' => '',
                    'ui_off_text' => '',
                ),
            ),
            'location' => $location,
            'menu_order' => 11,
            'position' => 'side',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
            'show_in_rest' => 0,
        ));
    }
}