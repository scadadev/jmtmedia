<?php

add_filter('post_type_archive_link', function($link, $post_type){
    
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
add_filter('wpml_alternate_hreflang', function($url, $lang_code){

    if( $archive_url = get_cpt_archive_link($lang_code) ) {
        return $archive_url;
    }

    return $url;
}, 10, 2);


add_filter( 'icl_ls_languages', function( $languages ) {
    foreach( $languages as $key => $language ) {
        if( !empty( $language['code'] ) ) {
            if( $archive_url = get_cpt_archive_link($language['code']) ) {
                $languages[$key]['url'] = $archive_url;
            }
        }
    }
    return $languages;
});


function get_cpt_archive_link($lang_code) {
    if(is_post_type_archive(['games', 'product'])) {

        $object = get_queried_object();

        global $born_options;

        $slug = $born_options['aff_games_archive_slug_' . $lang_code];

        $post_type_obj = get_post_type_object( $object->name );

        $struct = ( true === $post_type_obj->has_archive ) ? $post_type_obj->rewrite['slug'] : $post_type_obj->has_archive;

        $link = get_site_url() .'/'. $lang_code .'/'. user_trailingslashit( $struct, 'post_type_archive' );

        if( !empty($slug) ) {
            return str_replace( $struct, $slug, $link );
        }
    }

    return false;
}