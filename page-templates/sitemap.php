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
            <div class="main sitemap-links">
                <div class="sitemap-links__wrap">
                    <?php

                    $post_types = [
                        'post',
                        'page',
                        'products',
                        'games',
                    ];

                    foreach ($post_types as $post_type) {

                        switch ($post_type) {
                            case 'post':
                                $block_title = __('Raksti', 'aff');
                                break;
                            case 'page':
                                $block_title = __('Sadaļas', 'aff');
                                break;
                            case 'products':
                                $block_title = __('Apskati', 'aff');
                                break;
                            case 'games':
                                $block_title = __('Spēles', 'aff');
                                break;
                            default:
                                $labels = get_post_type_object($post_type);
                                $block_title = $labels->label;
                        }

                        $args = [
                            'post_status' => 'publish',
                            'post_type' => $post_type,
                            'posts_per_page' => -1
                        ];

                        if ($post_type == 'page') {
                            $args['post__not_in'][] = get_the_ID();
                        }

                        $posts_query = new WP_Query($args);

                        if (!empty($posts_query->posts)) {
                            echo '<div class="sitemap-links__item">';
                                echo '<div class="sitemap-links__title">';
                                    echo '<span class="sitemap-links__count" data-count="'. count($posts_query->posts) .'"></span>';
                                    echo '<h2>' . $block_title . '</h2>';
                                echo '</div>';

                                echo '<div class="sitemap-links__list">';
                                foreach ($posts_query->posts as $p) {
                                    echo '<div class="sitemap-links__list-item"><a href="' . get_the_permalink($p->ID) . '">' . $p->post_title . '</a></div>';
                                }
                                echo '</div>';
                            echo '</div>';
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