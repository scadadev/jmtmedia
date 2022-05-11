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