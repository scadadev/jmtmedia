<?php
/**
 * Template Name: Sitemap
 */

get_header();
global $BORN_FRAMEWORK;
$lang_code = born_get_current_language_code();

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
    <div class="title">
        <div class="born-container is-wide">
            <h1><?php the_title();?></h1>
        </div>
    </div>
        <div class="born-container is-wide">
            <div class="main sitemap-links">
                <div class="sitemap-links__wrap">
                    <?php
                    $post_types = \Scada\SiteMap::getUseTypes();
                    foreach ($post_types as $post_type) {
                        $posts = \Scada\SiteMap::getPosts($post_type);

                        if (!empty($posts)) {
                            echo '<div class="sitemap-links__item">';
                                echo '<div class="sitemap-links__title">';
                                    echo '<span class="sitemap-links__count" data-count="'. count($posts) .'"></span>';
                                    echo '<h2>' . \Scada\SiteMap::blockTitle($post_type) . '</h2>';
                                echo '</div>';

                                echo '<div class="sitemap-links__list">';
                                foreach ($posts as $p) {
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