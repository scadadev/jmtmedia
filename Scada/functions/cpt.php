<?php

add_filter('post_type_archive_link', function ($link, $post_type) {

    if (false !== strpos($link, '%blog_page%')) {
        $blog = get_post(get_option('page_for_posts'));
        $link = str_replace('%blog_page%', $blog->post_name, $link);
    } else if (false !== strpos($link, '%products_page%')) {
        $product_slug = born_get_archive_slug('products');
        $link = str_replace('%products_page%', $product_slug, $link);
    } else if (false !== strpos($link, '%games_page%')) {
        $shop_slug = born_get_archive_slug('games');
        $link = str_replace('%games_page%', $shop_slug, $link);
    }

    return $link;

}, 10, 2);

/** fix  */
add_filter('wpml_alternate_hreflang', function ($url, $lang_code) {

    if (is_post_type_archive(['games', 'products'])) {
        if ($archive_url = get_cpt_archive_link($lang_code)) {
            return $archive_url;
        }
    }

    elseif (is_singular(['games', 'products'])) {
        if ($single_url = get_cpt_single_link($lang_code)) {
            return $single_url;
        }
    }

    return $url;
}, 10, 2);


add_filter('icl_ls_languages', function ($languages) {
    foreach ($languages as $key => $language) {
        if (!empty($language['code'])) {
            if (is_post_type_archive(['games', 'products'])) {
                if ($archive_url = get_cpt_archive_link($language['code'])) {
                    $languages[$key]['url'] = $archive_url;
                }
            }
            elseif (is_singular(['games', 'products'])) {
                if ($single_url = get_cpt_single_link($language['code'])) {
                    $languages[$key]['url'] = $single_url;
                }
            }
        }
    }
    return $languages;
});


function get_cpt_archive_link($lang_code)
{

    $object = get_queried_object();

    global $born_options;

    $default_lang = apply_filters('wpml_default_language', NULL );

    if( $object->name == 'games' ) {
        $slug = $born_options['aff_games_archive_slug_' . $lang_code];
    }
    elseif( $object->name == 'products' ) {
        $slug = $born_options['aff_products_archive_slug_' . $lang_code];
    }

    $post_type_obj = get_post_type_object($object->name);

    $struct = (true === $post_type_obj->has_archive) ? $post_type_obj->rewrite['slug'] : $post_type_obj->has_archive;

    if( $lang_code !== $default_lang ) {
        $link = get_site_url() . '/' . $lang_code . '/' . user_trailingslashit($struct, 'post_type_archive');
    } else {
        $link = get_site_url() . '/' . user_trailingslashit($struct, 'post_type_archive');
    }

    if (!empty($slug)) {
        return str_replace($struct, $slug, $link);
    }

    return false;
}

function get_cpt_single_link($lang_code, $object = null) {

    $object = $object ?? get_queried_object();

    global $born_options;

    $slug = false;

    $default_lang = apply_filters('wpml_default_language', NULL );

    if( $object->post_type == 'games' ) $slug = $born_options['aff_games_archive_slug_' . $lang_code];
    elseif( $object->post_type == 'products' ) $slug = $born_options['aff_products_archive_slug_' . $lang_code];

    $post_type_obj = get_post_type_object($object->post_type);

    if( !empty($slug) && !empty($post_type_obj->rewrite['slug']) ) {
        if( $lang_code !== $default_lang ) {
            $link = get_site_url() . '/' . $lang_code . '/' . user_trailingslashit($post_type_obj->rewrite['slug'], 'post_type_archive') . $object->post_name;
        } else {
            $link = get_site_url() . '/' . user_trailingslashit($post_type_obj->rewrite['slug'], 'post_type_archive') . $object->post_name;
        }
        return str_replace($post_type_obj->rewrite['slug'], $slug, $link);
    }

    return false;
}