<?php

define('PARENT_PATH', __DIR__);

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/Scada/init.php';
require_once __DIR__ . '/Scada/functions/styles-scripts.php';

add_action('init', function(){
    require get_template_directory() . '/plugin-update-checker/plugin-update-checker.php';
    $myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
        'https://github.com/scadadev/jmtmedia',
        __FILE__,
        'jmtmedia'
    );
    $myUpdateChecker->setBranch('production');
});

add_action('after_setup_theme', function(){
    require_once __DIR__ . '/Scada/functions/admin.php';
    require_once __DIR__ . '/Scada/functions/gtm.php';
});


/** set status publish for product review */
add_action('wp_insert_post', function($post_ID, $post, $update){
    if( $post->post_type == 'product-reviews' && !$update ) {
        wp_update_post([
            'ID' => $post_ID,
            'post_status' => 'publish'
        ]);

        // clear Rocket cache for product, when add new comment
        if( function_exists('rocket_clean_post') ) {
            $product_id = get_post_meta($post_ID, 'review_product_id', true);
            if( !empty($product_id) ) {
                rocket_clean_post($product_id);
            }
        }

    }
}, 10, 3);


// clear Rocket all cache after update theme
add_action( 'upgrader_process_complete', 'clear_rocket_all_cache_after_update_theme',10, 2);
function clear_rocket_all_cache_after_update_theme( $upgrader_object, $options ) {
    if ($options['action'] == 'update' && $options['type'] == 'theme' ) {
        if( function_exists('rocket_clean_domain') ) {
            rocket_clean_domain();
        }
    }
}


/*function update_on_reviews_saved( $post_id, $post, $update ) {

    if ( $post->post_type != 'product-reviews' ) return;
    if ( wp_is_post_revision( $post_id ) ) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    remove_action('save_post', 'update_on_reviews_saved');

    wp_update_post( [
        'ID'           => $post_id,
        'post_status' => 'publish'
    ] );

    // re-hook this function
    add_action('save_post', 'update_on_reviews_saved');
}
add_action( 'save_post', 'update_on_reviews_saved', 50, 3 );*/