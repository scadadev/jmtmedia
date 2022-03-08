<?php
/**
 * Template Name: Sitemap
 */

get_header();

while (have_posts()) {
    the_post();
    ?>
    <?php if (get_field('enable_breadcrumbs') && !is_front_page()): ?>
        <div class="aff-page-info">
            <div class="born-container is-wide">
                <div class="content">
                    <?php if (get_field('enable_breadcrumbs') && wp_get_post_parent_id(get_the_ID())): ?>
                        <ul class="breadcrumb">
                            <li>
                                <a href="<?php echo get_home_url(); ?>"><?php echo $BORN_FRAMEWORK->Options->Get('breadcrumb_home' . $lang_code); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo get_the_permalink(wp_get_post_parent_id(get_the_ID())); ?>"><?php echo get_the_title(wp_get_post_parent_id(get_the_ID())); ?></a>
                            </li>
                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                        </ul>
                    <?php else: ?>
                        <ul class="breadcrumb">
                            <li>
                                <a href="<?php echo get_home_url(); ?>"><?php echo $BORN_FRAMEWORK->Options->Get('breadcrumb_home' . $lang_code); ?></a>
                            </li>
                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="aff-post">
        <div class="born-container is-wide">
            <div class="content">
                <div class="main">
                    <?php

                    $post_types = [
                        'post',
                        'page',
                        'products',
                        'games',
                    ];

                    foreach ($post_types as $post_type) {
                        $labels = get_post_type_object($post_type);

                        $args = [
                            'post_status' => 'publish',
                            'post_type' => $post_type,
                            'posts_per_page' => -1
                        ];

                        if( $post_type == 'page' ) {
                            $args['post__not_in'][] = get_the_ID();
                        }

                        $posts_query = new WP_Query($args);

                        if( !empty($posts_query->posts) ) {
                            echo '<h2>' . $labels->label . '<h2>';

                            echo '<ul class="sitemap-links">';
                            foreach( $posts_query->posts as $p ) {
                                echo '<li><a href="'. get_the_permalink($p->ID) .'">'. $p->post_title .'</a></li>';
                            }
                            echo '</ul>';
                        }

                    }
                    ?>


                </div>
            </div>
        </div>
    </div>
<?php

}

get_footer();