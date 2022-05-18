<?php

namespace Scada;

class Ajax
{
    public function __construct() {
        add_action('wp_ajax_aff_loadmore', [$this, 'loadmore']);
        add_action('wp_ajax_nopriv_aff_loadmore', [$this, 'loadmore']);

        add_action('wp_ajax_get_menu_slugs', [$this, 'get_menu_slugs']);
        add_action('wp_ajax_nopriv_get_menu_slugs', [$this, 'get_menu_slugs']);
    }


    public function loadmore() {

        $page = !empty($_POST['page']) ? (int) $_POST['page'] : 1;
        $next_page = $page + 1;
        $post_type = !empty($_POST['settings']['post_type']) ? $_POST['settings']['post_type'] : 'post';


        $args = [
            'post_type' => $post_type,
            'posts_per_page' => !empty($_POST['settings']['posts_per_page']) ? $_POST['settings']['posts_per_page'] : get_option('posts_per_page'),
            'suppress_filters' => false,
            'paged' => $next_page,
            'post_status' => 'publish'
        ];

        if( !empty( $_POST['settings']['author'] ) ) {
            $args['author'] = $_POST['settings']['author'];
        }

        if( !empty( $_POST['settings']['category__in'] ) ) {
            $args['category__in'] = $_POST['settings']['category__in'];
        }

        if( !empty( $_POST['settings']['post__not_in'] ) ) {
            $args['post__not_in'] = $_POST['settings']['post__not_in'];
        }

        if( !empty( $_POST['settings']['related'] ) ) {
            $args['meta_query'] = [
                [
                    'key' => 'related_products',
                    'value' => $_POST['settings']['related'], // current post/product id
                    'compare' => 'LIKE'
                ]
            ];
        }

        $query = new \WP_Query($args);

        $response = [
            'page' => $query->get('paged'),
            'hide_btn' => $query->max_num_pages <= $next_page,
            'html' => ''
        ];

        if($query->have_posts()) {
            ob_start();
            while ($query->have_posts()) {
                $query->the_post();
                get_template_part('layout/loop/content', $post_type);
            }
            $response['html'] = ob_get_clean();
        }

        wp_send_json($response);
    }



    public function get_menu_slugs(){
        $anchors = $_POST['anchors'];
        $out = [];

        if( !empty($anchors) ) {
            foreach($anchors as $key => $item) {
                $item['slug'] = sanitize_title($item['anchor']);
                $out[] = $item;
            }
        }
        wp_send_json_success($out);
    }
}