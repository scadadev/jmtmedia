<?php

// отключить режим кеширования во время режима кеширования
add_filter( 'rank_math/sitemap/enable_caching', '__return_false');


/**
 * Fix sitemap url
 */
add_filter( 'rank_math/sitemap/entry', function( $url, $type, $object ){
    if( $object->post_type === 'games' || $object->post_type === 'products' ) {
        $post_language_details = apply_filters( 'wpml_post_language_details', NULL, $object->ID );
        if( !empty($post_language_details['language_code']) && $new_url = get_cpt_single_link($post_language_details['language_code'], $object) ) {
            $url['loc'] = $new_url;
        }
    }
    elseif($object->post_type === 'page' && function_exists('icl_object_id')) {
        $post_language_details = apply_filters( 'wpml_post_language_details', NULL, $object->ID );
        $frontpage_id = get_option('page_on_front');
        $frontpage_id_for_lang = icl_object_id($frontpage_id, 'page', false, $post_language_details['language_code']);

        if( $object->ID == $frontpage_id || $object->ID == $frontpage_id_for_lang ) {
            $url = str_replace(
                [
                    $object->post_name . '/',
                    $object->post_name
                ],
                '',
                $url);
        }
    }
    return $url;
}, 10, 3 );