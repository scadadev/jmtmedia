<?php get_header(); ?>


<?php
wp_reset_query();

global $BORN_FRAMEWORK;
$lang_code = born_get_current_language_code();


$author_id = get_the_author_meta('ID');
$userdata = get_user_by('id', $author_id);
$author_data = get_user_meta($author_id);
$review = get_field('author_review');
$author_avatar = get_user_meta($author_id, 'custom_avatar', true);

$author_avatar_html = get_avatar($author_id, 96, '', esc_attr($userdata->data->display_name));

$expert = get_field('expert', 'user_' . $author_id);

$args = array(
    'post_type' => 'product-reviews',
    'post_status' => 'publish',
    'numberposts' => -1,
    'meta_key' => 'review_product_id',
    'meta_value' => get_the_ID()

);

$reviews = get_posts($args);

$reviews_count = count($reviews);


$args = array(
    'post_type' => 'post',
    'post_status' => 'published',
    'posts_per_page' => 3,
    'meta_query' => array(
        array(
            'key' => 'related_products',
            'value' => '"' . get_the_ID() . '"',
            'compare' => 'LIKE'
        )
    )
);

$news = new WP_Query($args);

?>

<?php if (have_rows('bonuses_settings')): ?>
    <?php while (have_rows('bonuses_settings')): the_row(); ?>

        <?php
        $bonuses = get_sub_field('bonuses');
        if ($bonuses) {
            $bonuses_count = count($bonuses);
        } else {
            $bonuses_count = 0;
        }
        ?>

    <?php endwhile; ?>
<?php endif; ?>


<?php

$h2_ratings = get_field('ratings_after_h2_titles');

?>


<?php if (get_field('enable_breadcrumbs')): ?>
    <script type="application/ld+json">{
        "@context": "https:\/\/schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,
                "name": "<?php echo $BORN_FRAMEWORK->Options->Get('breadcrumb_home' . $lang_code); ?>",
                "item": {
                    "@type": "Thing",
                    "url": "<?php echo get_home_url(); ?>",
                    "@id": "<?php echo get_home_url(); ?>"
                }
            },
            {
                "@type": "ListItem",
                "position": 2,
                "name": "<?php echo born_get_archive_title('products'); ?>",
                "item": {
                    "@type": "Thing",
                    "url": "<?php echo get_home_url(); ?>/<?php echo born_get_archive_slug('products'); ?>/",
                    "@id": "<?php echo get_home_url(); ?>/<?php echo born_get_archive_slug('products'); ?>/"
                }
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "<?php the_title(); ?>",
                "item": {
                    "@type": "Thing",
                    "url": "<?php the_permalink(); ?>",
                    "@id": "<?php the_permalink(); ?>"
                }
            }
        ]
    }





    </script>
<?php endif; ?>




<?php if (have_rows('faq_settings')): ?>
    <?php $count = count(get_field('faq_settings')); ?>

    <script type="application/ld+json">{
            "@context": "https:\/\/schema.org",
            "@type": "FAQPage",
            "mainEntity": [
<?php foreach (get_field('faq_settings') as $index => $q): ?>


                {
                    "@type": "Question",
                    "name": "<?php echo strip_tags($q['title']); ?>",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "<?php echo strip_tags($q['value']); ?>"
                    }
                }<?php if ($count == $index + 1) {
        } else {
            echo ',';
        } ?>
        <?php endforeach; ?>
            ]
        }




    </script>

<?php endif; ?>


<div class="aff-page-info">
    <div class="born-container is-wide">
        <div class="content">
            <?php if (get_field('enable_breadcrumbs')): ?>
                <ul class="breadcrumb">
                    <li>
                        <a href="<?php echo get_home_url(); ?>"><?php echo $BORN_FRAMEWORK->Options->Get('breadcrumb_home' . $lang_code); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo get_home_url(); ?>/<?php echo born_get_archive_slug('products'); ?>/"><?php echo born_get_archive_title('products'); ?></a>
                    </li>
                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                </ul>
            <?php endif; ?>
            <div class="last-update">
                <?php echo $BORN_FRAMEWORK->Options->Get('last_update' . $lang_code); ?>
                <span> <?php echo get_the_modified_time('d.m.Y H:i'); ?></span>
            </div>
        </div>
    </div>
</div>

<div class="aff-inner-item-header" id="<?php echo $BORN_FRAMEWORK->Options->Get('sitelink_overview'); ?>">
    <div class="born-container is-wide">
        <div class="content">
            <div class="logo">
                <span class="image">
                    <a href="<?php echo get_field('main_link'); ?>" target="_blank">
                    <?php
                    echo wp_get_attachment_image(get_field('logo'), 'icons-large');
                    // echo born_acf_image(get_field('logo'), 'icons-large', true);
                    ?>
                    </a>
                </span>
                <?php if (get_field('add_label_after_logo')): ?>
                    <div class="aff-bonus-tag">
                        <a href="<?php echo get_field('main_link'); ?>" target="_blank">
                            <span class="text">
                                <span><?php echo get_field('label_after_logo_title'); ?></span>
                                <span><?php echo get_field('label_after_logo_text'); ?></span>
                            </span>
                            <span class="tag">
                            <span><?php echo get_field('label_after_logo_tag_text'); ?></span>
                        </span>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="data">
                <div class="title">
                    <h1><a href="<?php echo get_field('main_link'); ?>" target="_blank"><?php the_title(); ?></a></h1>
                    <div class="rating">
                        <?php get_template_part('layout/partials/rating', '', array('id' => get_the_ID())); ?>
                    </div>
                </div>

                <div class="cta">
                    <div class="action">
                        <a href="<?php echo get_field('main_link'); ?>" target="_blank"
                           class="button"><?php echo $BORN_FRAMEWORK->Options->Get('play' . $lang_code); ?></a>
                    </div>
                    <?php get_template_part('layout/partials/favorites', '', array('id' => get_the_ID())); ?>
                    <div class="author">
                        <?php
                        if (!empty($author_avatar_html)): ?>
                            <?php echo $author_avatar_html; ?>
                        <?php else: ?>
                            <?php if ($BORN_FRAMEWORK->Options->Get('default_user_icon')): ?>
                                <?php
                                echo wp_get_attachment_image($BORN_FRAMEWORK->Options->Get('default_user_icon')['id'], 'icons-micro-avatar-product');
                                //echo born_acf_image($BORN_FRAMEWORK->Options->Get('default_user_icon')['id'], 'icons-micro-avatar-product', true);
                                ?>
                            <?php endif; ?>
                        <?php endif; ?>

                        <span><?php echo $BORN_FRAMEWORK->Options->Get('review_by' . $lang_code); ?><span><a
                                        href="<?php echo get_author_posts_url($author_id); ?>"><?php echo $userdata->data->display_name; ?></a></span></span>


                    </div>
                </div>
            </div>

            <div class="image">
                <?php while (have_rows('gallery_settings')): the_row(); ?>
                    <?php $has_gallery = get_sub_field('has_gallery'); ?>
                    <?php if ($has_gallery): ?>
                        <span class="tag"></span>
                    <?php endif; ?>
                <?php endwhile; ?>
                <?php if (get_post_thumbnail_id()): ?>
                    <?php if ($has_gallery): ?>
                        <a rel="gallery-1" href="<?php echo born_acf_image(get_post_thumbnail_id(), 'large', false); ?>"
                           class="thumb">
                            <img rel="gallery-1"
                                 src="<?php echo born_acf_image(get_post_thumbnail_id(), 'product-gal', false); ?>">
                        </a>
                    <?php else: ?>

                        <?php echo born_acf_image(get_post_thumbnail_id(), 'product-gal', true); ?>

                    <?php endif; ?>

                <?php endif; ?>

                <?php if (have_rows('gallery_settings')): ?>
                    <?php $has_gallery = get_sub_field('has_gallery'); ?>

                    <div class="thumbs-list">

                        <?php while (have_rows('gallery_settings')): the_row();
                            $gallery = get_sub_field('gallery');
                            $has_gallery = get_sub_field('has_gallery');
                            ?>
                            <?php if ($has_gallery): ?>
                                <?php foreach ($gallery as $image_id): ?>

                                    <a rel="gallery-1"
                                       href="<?php echo born_acf_image($image_id['ID'], 'large', false); ?>"
                                       class="thumb"></a>

                                <?php endforeach; ?>
                            <?php endif; ?>

                        <?php endwhile; ?>

                    </div>

                <?php endif; ?>

            </div>
        </div>
    </div>

    <?php $active_anchors = get_field('product_anchors'); ?>
    <?php $custom_anchors = get_field('custom_anchors'); ?>
    <?php $SiteNavigationCounter = 1; ?>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
	        "@graph":
            [
                {
                    "@type":"SiteNavigationElement",
                    "position":1,
                    "name": "<?php echo $BORN_FRAMEWORK->Options->Get('prod_details' . $lang_code); ?>",
                    "url":"<?php echo get_the_permalink() . $BORN_FRAMEWORK->Options->Get('sitelink_details'); ?>"
                }
                <?php if ($bonuses_count != 0 && !in_array('details', $active_anchors)): ?>
            <?php $SiteNavigationCounter++; ?>
                ,{
                    "@type":"SiteNavigationElement",
                    "position":<?php echo $SiteNavigationCounter; ?>,
                    "name": "<?php echo $BORN_FRAMEWORK->Options->Get('prod_bonuses' . $lang_code); ?>",
                    "url":"<?php echo get_the_permalink() . $BORN_FRAMEWORK->Options->Get('sitelink_bonuses'); ?>"
                }
                <?php endif; ?>
                <?php if (!in_array('reviews', $active_anchors)): ?>
            <?php $SiteNavigationCounter++; ?>
                ,{
                    "@type":"SiteNavigationElement",
                    "position":<?php echo $SiteNavigationCounter; ?>,
                    "name": "<?php echo $BORN_FRAMEWORK->Options->Get('prod_reviews' . $lang_code); ?>",
                    "url":"<?php echo get_the_permalink() . $BORN_FRAMEWORK->Options->Get('sitelink_reviews'); ?>"
                }
                <?php endif; ?>
                <?php if ($news->have_posts() && !in_array('news', $active_anchors)): ?>
            <?php $SiteNavigationCounter++; ?>
                ,{
                    "@type":"SiteNavigationElement",
                    "position":<?php echo $SiteNavigationCounter; ?>,
                    "name": "<?php echo $BORN_FRAMEWORK->Options->Get('prod_news' . $lang_code); ?>",
                    "url":"<?php echo get_the_permalink() . $BORN_FRAMEWORK->Options->Get('sitelink_news'); ?>"
                }
                <?php endif; ?>
                <?php if (get_field('summary') && !in_array('summary', $active_anchors)): ?>
            <?php $SiteNavigationCounter++; ?>
                ,{
                    "@type":"SiteNavigationElement",
                    "position":<?php echo $SiteNavigationCounter; ?>,
                    "name": "<?php echo $BORN_FRAMEWORK->Options->Get('prod_summary' . $lang_code); ?>",
                    "url":"<?php echo get_the_permalink() . $BORN_FRAMEWORK->Options->Get('sitelink_summary'); ?>"
                }
                <?php endif; ?>

            <?php if ($custom_anchors): ?>

            <?php foreach ($custom_anchors as $ca): ?>
                <?php $SiteNavigationCounter++; ?>
                <?php
                if (substr($ca['sitelink'], 0, 1) == '#') {
                    $sitelink_url = get_the_permalink() . $ca['sitelink'];
                } else {
                    $sitelink_url = get_the_permalink() . '#' . $ca['sitelink'];
                }
                ?>
                ,{
                    "@type":"SiteNavigationElement",
                    "position":<?php echo $SiteNavigationCounter; ?>,
                    "name": "<?php echo $ca['anchor_title'] ?>",
                    "url":"<?php echo $sitelink_url; ?>"
                }
            <?php endforeach; ?>

        <?php endif; ?>
            ]
        }



    </script>


    <div class="menu">
        <div class="born-container is-wide">
            <ul class="born-reset">
                <li class="active">
                    <div><?php echo $BORN_FRAMEWORK->Options->Get('prod_overview' . $lang_code); ?></div>
                </li>

                <?php if (in_array('details', $active_anchors)): ?>
                <?php else: ?>
                    <li>
                        <a itemprop="url"
                           href="#<?php echo $BORN_FRAMEWORK->Options->Get('sitelink_details'); ?>"><?php echo $BORN_FRAMEWORK->Options->Get('prod_details' . $lang_code); ?></a>
                    </li>
                <?php endif; ?>

                <?php if (in_array('bonuses', $active_anchors)): ?>

                <?php else: ?>
                    <?php if ($bonuses_count != 0): ?>
                        <li>
                            <a href="#<?php echo $BORN_FRAMEWORK->Options->Get('sitelink_bonuses'); ?>"><?php echo $BORN_FRAMEWORK->Options->Get('prod_bonuses' . $lang_code); ?><?php if ($bonuses_count != 0): ?>
                                    <span class="tag"><?php echo $bonuses_count; ?></span><?php endif; ?></a></li>
                    <?php endif; ?>
                <?php endif; ?>

                <?php if (in_array('reviews', $active_anchors)): ?>

                <?php else: ?>
                    <li>
                        <a href="#<?php echo $BORN_FRAMEWORK->Options->Get('sitelink_reviews'); ?>"><?php echo $BORN_FRAMEWORK->Options->Get('prod_reviews' . $lang_code); ?><?php if ($reviews_count != 0): ?>
                                <span class="tag"><?php echo $reviews_count; ?></span><?php endif; ?>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if (in_array('news', $active_anchors)): ?>

                <?php else: ?>
                    <?php if ($news->have_posts()): ?>
                        <li>
                            <a href="#<?php echo $BORN_FRAMEWORK->Options->Get('sitelink_news'); ?>"><?php echo $BORN_FRAMEWORK->Options->Get('prod_news' . $lang_code); ?></a>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>

                <?php if (in_array('summary', $active_anchors)): ?>

                <?php else: ?>
                    <?php if (get_field('summary')): ?>
                        <li>
                            <a href="#<?php echo $BORN_FRAMEWORK->Options->Get('sitelink_summary'); ?>"><?php echo $BORN_FRAMEWORK->Options->Get('prod_summary' . $lang_code); ?></a>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>

                <?php if ($custom_anchors): ?>

                    <?php foreach ($custom_anchors as $ca): ?>
                        <li>
                            <a href="<?php if (substr($ca['sitelink'], 0, 1) == '#'): ?><?php else: ?>#<?php endif; ?><?php echo $ca['sitelink']; ?>"><?php echo $ca['anchor_title']; ?></a>
                        </li>
                    <?php endforeach; ?>

                <?php endif; ?>

            </ul>

        </div>

        <?php if (get_field('scrolldown_on_top')): ?>

            <?php
            $scrolldown_link = get_field('scrolldown_cta_top_button_link');
            ?>

            <div class="cta">
                <a href="<?php echo $scrolldown_link['url']; ?>"
                   <?php if (!empty($scrolldown_link['target'])): ?>target="<?php echo $scrolldown_link['target']; ?>" <?php endif; ?>
                   class="button"><?php echo get_field('scrolldown_cta_top_button_title'); ?></a>
            </div>

        <?php endif; ?>

    </div>
    <div class="menu-mobile">
        <select>
            <option value="#<?php echo $BORN_FRAMEWORK->Options->Get('sitelink_overview'); ?>"><?php echo $BORN_FRAMEWORK->Options->Get('prod_overview' . $lang_code); ?></option>

            <?php if (in_array('details', $active_anchors)): ?>
            <?php else: ?>
                <option value="#<?php echo $BORN_FRAMEWORK->Options->Get('sitelink_details'); ?>"><?php echo $BORN_FRAMEWORK->Options->Get('prod_details' . $lang_code); ?></option>
            <?php endif; ?>

            <?php if (in_array('bonuses', $active_anchors)): ?>
            <?php else: ?>
                <?php if ($bonuses_count != 0): ?>
                    <option value="#<?php echo $BORN_FRAMEWORK->Options->Get('sitelink_bonuses'); ?>"><?php echo $BORN_FRAMEWORK->Options->Get('prod_bonuses' . $lang_code); ?></option>
                <?php endif; ?>
            <?php endif; ?>

            <?php if (in_array('reviews', $active_anchors)): ?>
            <?php else: ?>
                <option value="#<?php echo $BORN_FRAMEWORK->Options->Get('sitelink_reviews'); ?>"><?php echo $BORN_FRAMEWORK->Options->Get('prod_reviews' . $lang_code); ?></option>
            <?php endif; ?>

            <?php if (in_array('news', $active_anchors)): ?>
            <?php else: ?>
                <?php if ($news->have_posts()): ?>
                    <option value="#<?php echo $BORN_FRAMEWORK->Options->Get('sitelink_news'); ?>"><?php echo $BORN_FRAMEWORK->Options->Get('prod_news' . $lang_code); ?></option>
                <?php endif; ?>
            <?php endif; ?>

            <?php if (in_array('summary', $active_anchors)): ?>
            <?php else: ?>
                <?php if (get_field('summary')): ?>
                    <option value="#<?php echo $BORN_FRAMEWORK->Options->Get('sitelink_summary'); ?>"><?php echo $BORN_FRAMEWORK->Options->Get('prod_summary' . $lang_code); ?></option>
                <?php endif; ?>
            <?php endif; ?>


            <?php foreach ($custom_anchors as $ca): ?>
                <option value="<?php if (substr($ca['sitelink'], 0, 1) == '#'): ?><?php else: ?>#<?php endif; ?><?php echo $ca['sitelink']; ?>"><?php echo $ca['anchor_title']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
</div>

<?php if (have_rows('details_settings')): ?>

    <div class="aff-item-details has-sidebar" id="<?php echo $BORN_FRAMEWORK->Options->Get('sitelink_details'); ?>">

        <div class="born-container is-wide">

            <div class="main">

                <?php if (have_rows('overall_rating')): ?>


                    <div class="aff-details-table is-overall-rating">

                        <?php if (get_field('overall_ratings_main_title')): ?>
                            <div class="title">
                                <h2><?php echo get_field('overall_ratings_main_title'); ?></h2>
                                <?php if ($h2_ratings['overall_ratings_rating']): ?>
                                    <?php echo product_title_rating($h2_ratings['overall_ratings_rating']); ?>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <?php while (have_rows('overall_rating')) : the_row(); ?>

                            <div class="item">
                                <div class="name">
                                    <div class="text">
                                        <?php echo get_sub_field('overall_title'); ?>
                                    </div>
                                </div>
                                <div class="data">
                                    <div class="stars">
                                        <div class="aff-rating rating-<?php echo get_sub_field('overall_rating'); ?>">
                                            <span class="tooltip"><?php echo get_sub_field('overall_rating'); ?> / 5</span>
                                        </div>
                                    </div>
                                    <div class="numbers">
                                        <?php echo get_sub_field('overall_rating'); ?> / 5
                                    </div>
                                </div>
                            </div>

                        <?php endwhile; ?>

                    </div>

                <?php endif; ?>

                <div class="aff-details-table is-table">

                    <div class="title">
                        <h2><?php echo $BORN_FRAMEWORK->Options->Get('prod_details' . $lang_code); ?></h2>
                        <?php if ($h2_ratings['details_rating']): ?>
                            <?php echo product_title_rating($h2_ratings['details_rating']); ?>
                        <?php endif; ?>

                    </div>

                    <table>
                        <tbody>

                        <?php while (have_rows('details_settings')) :
                        the_row(); ?>

                        <?php
                        $details = get_sub_field('details');

                        if (count($details) > 5) {
                            $has_load_more = true;
                        } else {
                            $has_load_more = false;
                        }


                        foreach ($details

                        as $index => $d): ?>

                        <?php


                        $detail_tax = get_term($d['select_detail'], 'products-details');
                        $tax_icon_id = get_field('icon', 'products-details' . '_' . $detail_tax->term_id);

                        ?>


                        <tr>

                            <td class="icon-and-text">
                                <?php if ($tax_icon_id): ?>
                                    <?php echo born_acf_image($tax_icon_id, 'icons-micro-avatar-product', true); ?>
                                <?php endif; ?>
                                <?php echo $detail_tax->name; ?>
                            </td>
                            <td class="data">
                                <?php foreach ($d['detail_value'] as $detail_text_arr): ?>

                                    <?php if ($detail_text_arr['link']): ?>
                                        <a href="<?php echo $detail_text_arr['link']; ?>">
                                    <?php endif; ?>
                                    <?php echo $detail_text_arr['text']; ?>
                                    <?php if ($detail_text_arr['link']): ?>
                                        </a>
                                    <?php endif; ?>

                                <?php endforeach; ?>
                            </td>
                        </tr>

                        <?php if ($index == 4 && $has_load_more): ?>
                        </tbody>
                    </table>

                    <div id="learMoreDetails" class="learn-more-content collapse">
                        <table>
                            <tbody>
                            <?php endif; ?>


                            <?php endforeach; ?>

                            </tbody>
                        </table>


                        <?php endwhile; ?>

                        <?php if ($has_load_more): ?>
                    </div>
                    <div class="learn-more collapsed" data-toggle="collapse" data-target="#learMoreDetails">
                        <span><?php echo $BORN_FRAMEWORK->Options->Get('learn_more' . $lang_code); ?></span>
                    </div>
                    <?php endif; ?>


                </div>

                <?php if (get_field('video')): ?>
                    <div class="aff-youtube">
                        <div class="video">
                            <?php if (get_field('video_placeholder_image')): ?>
                                <div class="thumb"
                                     style="background-image: url(<?php echo born_acf_image(get_field('video_placeholder_image'), 'yt-placeholder', false); ?>">
                                    <button class="play"></button>
                                </div>
                            <?php endif; ?>
                            <div class="player">
                                <iframe src="" frameborder="0" allow="autoplay" allowTransparency="true" allowfullscreen
                                        data-src="https://www.youtube.com/embed/<?php echo get_field('video'); ?>?autoplay=1"></iframe>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>



                <?php if (have_rows('positives_negatives')): ?>
                    <?php while (have_rows('positives_negatives')): the_row(); ?>

                        <?php
                        $positives = get_sub_field('positives');
                        $negatives = get_sub_field('negatives');


                        if (count($positives) > 5) {
                            $has_more_positives = true;
                        } else {
                            $has_more_positives = false;
                        }

                        if (count($negatives) > 5) {
                            $has_more_negatives = true;
                        } else {
                            $has_more_negatives = false;
                        }
                        ?>
                        <div class="aff-pros-cons">

                            <div class="col">
                                <div class="left">
                                    <ul class="born-reset">
                                        <?php foreach ($positives as $index => $p): ?>

                                            <li class="is-pro"><span><?php echo $p['feature']; ?></span></li>
                                            <?php if ($index == 4) {
                                                break;
                                            } ?>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <div class="right">
                                    <ul class="born-reset">
                                        <?php foreach ($negatives as $index => $n): ?>
                                            <li class="is-con"><span><?php echo $n['feature']; ?></span></li>
                                            <?php if ($index == 4) {
                                                break;
                                            } ?>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>

                            <?php if ($has_more_positives || $has_more_negatives): ?>

                                <div id="learnMoreProsCons" class="learn-more-content collapse">
                                    <div class="content">

                                        <div class="col">

                                            <?php if ($has_more_positives): ?>
                                                <div class="left">
                                                    <ul class="born-reset">
                                                        <?php foreach ($positives as $index => $p): ?>
                                                            <?php if ($index <= 4) {
                                                                continue;
                                                            } ?>
                                                            <li class="is-pro"><span><?php echo $p['feature']; ?></span>
                                                            </li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                </div>
                                            <?php endif; ?>

                                            <?php if ($has_more_negatives): ?>
                                                <div class="right">
                                                    <ul class="born-reset">
                                                        <?php foreach ($negatives as $index => $n): ?>
                                                            <?php if ($index <= 4) {
                                                                continue;
                                                            } ?>
                                                            <li class="is-con"><span><?php echo $n['feature']; ?></span>
                                                            </li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    </div>
                                </div>

                                <?php if ($has_more_positives || $has_more_negatives): ?>
                                    <div class="learn-more collapsed" data-toggle="collapse"
                                         data-target="#learnMoreProsCons">
                                        <span><?php echo $BORN_FRAMEWORK->Options->Get('learn_more' . $lang_code); ?></span>
                                    </div>
                                <?php endif; ?>

                            <?php endif; ?>


                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>

            </div>

            <?php if (have_rows('similar_products_settings')): ?>

                <?php $similar = get_field('similar_products_settings'); ?>

                <?php if ($similar['has_similar_products']): ?>
                    <div class="aff-sidebar">


                        <div class="offer">
                            <div class="title">
                                <h2><?php echo $BORN_FRAMEWORK->Options->Get('similar_prod' . $lang_code); ?></h2>
                                <?php if ($h2_ratings['similar_products_rating']): ?>
                                    <?php echo product_title_rating($h2_ratings['similar_products_rating']); ?>
                                <?php endif; ?>
                            </div>
                            <div class="card-wrapper">

                                <?php foreach ($similar['select_products'] as $prod): ?>
                                    <div class="card">
                                        <div class="logo">
                                            <a href="<?php echo get_permalink($prod->ID); ?>" class="image">
                                                <?php
                                                echo wp_get_attachment_image(get_field('logo', $prod->ID), 'icons-small-avatar-100');
                                                // echo born_acf_image(get_field('logo', $prod->ID), 'icons-small-avatar-100', true);
                                                ?>
                                            </a>
                                        </div>
                                        <div class="data">
                                            <a href="<?php echo get_permalink($prod->ID); ?>"
                                               class="name"><?php echo get_the_title($prod->ID); ?></a>
                                            <?php get_template_part('layout/partials/rating', '', array('id' => $prod->ID)); ?>

                                        </div>
                                        <div class="cta"><a target="_blank"
                                                            href="<?php echo get_field('main_link', $prod->ID); ?>"><?php echo $BORN_FRAMEWORK->Options->Get('play' . $lang_code); ?></a>
                                        </div>
                                    </div>
                                <?php endforeach; ?>

                            </div>

                        </div>
                    </div>
                <?php endif; ?>
            <?php endif; ?>


        </div>

        <?php if (!empty(get_the_content())): ?>
            <div class="born-spacer is-line"></div>

            <div class="aff-item-description">
                <div class="born-container is-wide">
                    <div class="content">
                        <?php echo the_content(); ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>


        <?php if (have_rows('bonuses_settings') && $bonuses_count != 0): ?>
            <div class="born-spacer is-line"></div>

            <?php while (have_rows('bonuses_settings')): the_row(); ?>

                <?php $bonuses = get_sub_field('bonuses'); ?>

                <?php if ($bonuses_count != 0): ?>

                    <div class="born-container is-wide">

                        <div class="aff-bonuses" id="<?php echo $BORN_FRAMEWORK->Options->Get('sitelink_bonuses'); ?>">

                            <div class="title">
                                <h2><?php echo $BORN_FRAMEWORK->Options->Get('prod_bonuses' . $lang_code); ?></h2>
                                <?php if ($h2_ratings['bonuses_rating']): ?>
                                    <?php echo product_title_rating($h2_ratings['bonuses_rating']); ?>
                                <?php endif; ?>
                            </div>

                            <div class="cards-list">

                                <?php foreach ($bonuses as $bonus): ?>

                                    <?php
                                    $bg_type = get_field('background_type', $bonus->ID);

                                    if ($bg_type == 'color') {
                                        $bg_color = get_field('background_color', $bonus->ID);
                                    } elseif ($bg_type == 'image') {
                                        $bg_img = get_field('background_image', $bonus->ID);
                                    }
                                    ?>
                                    <div class="card <?php if ($bg_type == 'color'): ?><?php echo $bg_color; ?><?php endif; ?> <?php if ($bg_type == 'image'): ?>is-image<?php endif; ?>"
                                         <?php if ($bg_type == 'image'): ?>style="background-image: url(<?php echo born_acf_image($bg_img, 'product-gal', false); ?>"<?php endif; ?>>
                                        <?php if (get_field('icon', $bonus->ID)): ?>
                                            <div class="icon">
                                                <?php
                                                echo wp_get_attachment_image(get_field('icon', $bonus->ID), 'icons-small');
                                                //echo born_acf_image(get_field('icon', $bonus->ID), 'icons-small', true);
                                                ?>
                                            </div>
                                        <?php endif; ?>
                                        <div class="text">
                                            <?php echo get_the_title($bonus->ID); ?>
                                        </div>
                                        <div class="cta">
                                            <a href="<?php echo get_field('play_link', $bonus->ID); ?>" target="_blank"
                                               class="button"><?php echo $BORN_FRAMEWORK->Options->Get('play' . $lang_code); ?></a>
                                        </div>
                                    </div>

                                <?php endforeach; ?>


                            </div>

                        </div>

                    </div>

                <?php endif; ?>

            <?php endwhile; ?>
        <?php endif; ?>

    </div>


<?php endif; ?>

<?php get_template_part('layout/acf/global'); ?>

<?php get_template_part('layout/partials/reviews'); ?>

<div class="born-spacer is-line-dark"></div>

<?php if (get_field('summary')): ?>
    <div class="aff-item-description" id="<?php echo $BORN_FRAMEWORK->Options->Get('sitelink_summary'); ?>">
        <div class="born-container is-wide">
            <div class="title">
                <h2><?php echo $BORN_FRAMEWORK->Options->Get('prod_summary' . $lang_code); ?></h2>
                <?php if ($h2_ratings['summary_rating']): ?>
                    <?php echo product_title_rating($h2_ratings['summary_rating']); ?>
                <?php endif; ?>
            </div>
            <div class="content">
                <?php echo get_field('summary'); ?>
            </div>
        </div>
    </div>
<?php endif; ?>



<?php if (!empty($author_avatar)): ?>
    <?php $avatar_url = born_acf_image($author_avatar, 'icons-large-160', false); ?>
<?php else: ?>
    <?php if ($BORN_FRAMEWORK->Options->Get('default_user_icon')): ?>
        <?php $avatar_url = born_acf_image($BORN_FRAMEWORK->Options->Get('default_user_icon')['id'], 'icons-large-160', false); ?>
    <?php endif; ?>
<?php endif; ?>


<script type="application/ld+json">{
            "@context": "https:\/\/schema.org",
            "@type": "Person",
            "name": "<?php echo $userdata->data->display_name; ?>",
            "url": "<?php echo get_author_posts_url($author_id); ?>",
            "image": "<?php echo $avatar_url; ?>",
            "knowsAbout": "<?php echo get_the_author_meta('knowsabout'); ?>",
            "worksFor": {
                "@type": "Organization",
                "name": "<?php get_bloginfo('name'); ?>",
                "email": "<?php echo $userdata->data->user_email; ?>"
            }
        }


</script>

<?php
$total_stars = get_field('total_stars', get_the_ID());
$total_reviews = get_field('total_reviews', get_the_ID());

if ($total_stars && $total_reviews) {
    $rating = $total_stars / $total_reviews;

    $stars = round($rating * 2) / 2;
} else {
    $stars = 0;
}
?>

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [{
            "@type": "Review",
            "@context": "https://schema.org",
            "name": "<?php the_title(); ?>",
            "reviewBody": "<?php echo strip_tags($review['review_text']); ?>",
            "itemReviewed": {
                "@type": "Organization",
                "url": "<?php the_permalink(); ?>",
                "name": "<?php the_title(); ?>",
                "image": "<?php echo born_acf_image(get_field('logo'), 'icons-large', false); ?>"
            },
            "reviewRating": {
                "@type": "Rating",
                "bestRating": "5",
                "worstRating": "1",
                "ratingValue": "<?php echo $stars; ?>"
            },
            "author": {
                "@type": "Person",
                "name": "<?php echo $userdata->data->display_name; ?>",
                "url": "<?php echo get_author_posts_url($author_id); ?>"
            },
            "publisher": {
                "@type": "Organization",
                "name": "<?php echo get_bloginfo('name'); ?>",
                "logo": {
                    "@type": "ImageObject",
                    "url": "<?php echo born_acf_image(get_field('logo'), 'icons-large', false); ?>"
                }
            }
        }]
    }


</script>

<div class="aff-item-description aff-is-author <?php echo isset($expert['is_expert']) && $expert['is_expert'] === true ? 'is-expert' : '' ?>">
    <div class="born-container is-wide">
        <div class="title">
            <h2><?php echo $BORN_FRAMEWORK->Options->Get('acc_reviews_author' . $lang_code); ?></h2>
            <?php if ($h2_ratings['author_review_rating']): ?>
                <?php echo product_title_rating($h2_ratings['author_review_rating']); ?>
            <?php endif; ?>
        </div>
        <div class="content">
            <div class="heading">

                <div class="icon">
                            <span>
                                <a href="<?php echo get_author_posts_url($author_id); ?>">
                                    <?php
                                    if (!empty($author_avatar_html)):
                                        echo $author_avatar_html
                                        ?>
                                    <?php else: ?>
                                        <?php if ($BORN_FRAMEWORK->Options->Get('default_user_icon')): ?>
                                            <?php echo born_acf_image($BORN_FRAMEWORK->Options->Get('default_user_icon')['id'], 'icons-large-160', true); ?>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </a>
                            </span>
                </div>

                <div class="name">
                    <div>
                        <a href="<?php echo get_author_posts_url($author_id); ?>">
                            <?php echo $userdata->data->display_name; ?>
                            <?php if( isset($expert['is_expert']) && $expert['is_expert'] === true ) : ?>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 0C9.125 0 10.125 0.65625 10.625 1.625C11.6562 1.28125 12.8125 1.53125 13.6562 2.34375C14.4688 3.15625 14.6875 4.34375 14.375 5.375C15.3438 5.875 16 6.875 16 8C16 9.15625 15.3438 10.1562 14.375 10.6562C14.7188 11.6875 14.4688 12.8438 13.6562 13.6562C12.8125 14.4688 11.6562 14.7188 10.625 14.4062C10.125 15.375 9.125 16 8 16C6.84375 16 5.84375 15.375 5.34375 14.4062C4.3125 14.7188 3.15625 14.4688 2.3125 13.6562C1.5 12.8438 1.28125 11.6875 1.59375 10.6562C0.625 10.1562 0 9.15625 0 8C0 6.875 0.625 5.875 1.59375 5.375C1.25 4.34375 1.5 3.15625 2.3125 2.34375C3.15625 1.53125 4.3125 1.28125 5.34375 1.625C5.84375 0.65625 6.84375 0 8 0ZM11 7.03125C11.3125 6.75 11.3125 6.28125 11 5.96875C10.7188 5.6875 10.25 5.6875 9.96875 5.96875L7 8.96875L5.75 7.71875C5.46875 7.4375 5 7.4375 4.71875 7.71875C4.40625 8.03125 4.40625 8.5 4.71875 8.78125L6.46875 10.5312C6.75 10.8438 7.21875 10.8438 7.5 10.5312L11 7.03125Z" fill="currentColor"/>
                                </svg>
                            <?php endif; ?>
                        </a>
                    </div>
                    <p><?php echo $BORN_FRAMEWORK->Options->Get('author_text' . $lang_code); ?></p>
                </div>

                <?php get_template_part('Scada/templates/author', 'expert', [
                    'expert' => $expert
                ]) ?>

                <div class="cta">
                    <a href="<?php echo get_author_posts_url($author_id); ?>"
                       class="articles"><?php echo count_user_posts($author_id, array('post', 'page', 'products', 'games'), true); ?><?php echo $BORN_FRAMEWORK->Options->Get('author_articles' . $lang_code); ?></a>
                </div>

            </div>
            <div class="text">
                <?php echo $author_data['description'][0] ?? ''; ?>
            </div>
            <div class="more author-block-more">
                <a href="<?php echo get_author_posts_url($author_id); ?>"><?php echo $BORN_FRAMEWORK->Options->Get('author_about' . $lang_code); ?></a>
                <div class="author-soc-links">
                    <?php if( !empty($author_data['telegram'][0]) ) :  ?>
                        <a href="<?php echo $author_data['telegram'][0]; ?>" class="is-button is-mail" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 width="16" height="16">
                                <path fill-rule="evenodd" fill="currentColor"
                                      d="M14.160,13.468 C14.138,13.620 14.52,13.756 13.926,13.837 C13.846,13.887 13.756,13.912 13.666,13.912 C13.611,13.912 13.556,13.903 13.504,13.885 L6.516,11.392 L13.388,2.752 L4.507,10.676 L0.337,9.189 C0.148,9.121 0.16,8.943 0.0,8.735 C0.13,8.527 0.91,8.329 0.268,8.232 L15.268,0.58 C15.434,0.32 15.636,0.17 15.789,0.96 C15.942,0.210 16.21,0.403 15.994,0.598 L14.160,13.468 ZM6.735,15.787 C6.639,15.923 6.488,15.999 6.332,15.999 C6.280,15.999 6.228,15.991 6.176,15.974 C5.971,15.903 5.832,15.703 5.832,15.478 L5.832,12.251 L8.544,13.218 L6.735,15.787 Z"></path>
                            </svg>
                        </a>
                    <?php endif; ?>

                    <?php if( !empty($author_data['twitter'][0]) ) :  ?>
                        <a href="https://twitter.com/<?php echo $author_data['twitter'][0]; ?>" target="_blank"
                           class="is-button is-twitter">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="15" height="15" fill="curentColor"><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg>
                        </a>
                    <?php endif; ?>

                    <?php if( !empty($author_data['linkedin'][0]) ) :  ?>
                        <a href="<?php echo $author_data['linkedin'][0]; ?>" target="_blank"
                           class="is-button is-linkedin">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 width="15" height="15">
                                <path fill-rule="evenodd" fill="currentColor"
                                      d="M14.996,14.999 L14.996,14.999 L11.893,14.999 L11.893,10.124 C11.893,8.962 11.869,7.472 10.276,7.472 C8.659,7.472 8.411,8.735 8.411,10.40 L8.411,14.999 L5.305,14.999 L5.305,4.984 L8.288,4.984 L8.288,6.350 L8.332,6.350 C8.746,5.563 9.761,4.733 11.274,4.733 C14.420,4.733 15.0,6.806 15.0,9.498 L15.0,14.999 L14.996,14.999 ZM1.801,3.619 C0.806,3.619 0.0,2.795 0.0,1.801 C0.0,0.806 0.806,0.0 1.801,0.0 C2.794,0.0 3.601,0.806 3.602,1.801 C3.602,2.795 2.795,3.619 1.801,3.619 ZM3.357,14.999 L0.247,14.999 L0.247,4.985 L3.357,4.985 L3.357,14.999 Z"></path>
                            </svg>
                        </a>
                    <?php endif; ?>

                    <?php if( !empty($author_data['instagram'][0]) ) :  ?>
                        <a href="<?php echo $author_data['instagram'][0]; ?>" target="_blank"
                           class="is-button is-instagram">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="20" height="20"><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg>
                        </a>
                    <?php endif; ?>

                    <?php if( !empty($author_data['facebook'][0]) ) :  ?>
                        <a href="<?php echo $author_data['facebook'][0]; ?>" target="_blank"
                           class="is-button is-facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 264 512" width="20" height="20"><path fill="currentColor" d="M76.7 512V283H0v-91h76.7v-71.7C76.7 42.4 124.3 0 193.8 0c33.3 0 61.9 2.5 70.2 3.6V85h-48.2c-37.8 0-45.1 18-45.1 44.3V192H256l-11.7 91h-73.6v229"></path></svg>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php //endif; ?>


<div class="born-spacer is-line-dark"></div>


<?php if (have_rows('faq_settings')): ?>


    <div class="aff-faq">
        <div class="born-container is-wide">

            <div class="aff-title">
                <div class="content">
                    <h2><?php echo $BORN_FRAMEWORK->Options->Get('prod_faq' . $lang_code); ?></h2>
                    <?php if ($h2_ratings['faq_rating']): ?>
                        <?php echo product_title_rating($h2_ratings['faq_rating']); ?>
                    <?php endif; ?>
                </div>
            </div>

            <div class="aff-faq-list">
                <div class="content">
                    <ul class="born-reset">

                        <?php foreach (get_field('faq_settings') as $index => $q): ?>
                            <li>
                                <div class="question collapsed" data-toggle="collapse"
                                     data-target="#collapse<?php echo $index; ?>" aria-expanded="true"
                                     aria-controls="collapseOne">
                                    <?php echo $q['title']; ?>
                                    <div class="caret"></div>
                                </div>
                                <div id="collapse<?php echo $index; ?>" class="collapse" aria-labelledby="headingOne"
                                     data-parent="#accordionExample">
                                    <div class="desc">
                                        <?php echo $q['value']; ?>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>


                    </ul>
                </div>
            </div>

        </div>
    </div>

<?php endif; ?>

<?php if (get_field('show_feedback_form', get_the_ID())): ?>
    <?php get_template_part('layout/partials/feedback', '', array('id' => get_the_ID())); ?>
<?php endif; ?>

<div class="born-spacer is-line-dark"></div>


<?php if ($news->have_posts()): ?>

    <div class="aff-news-grid" id="<?php echo $BORN_FRAMEWORK->Options->Get('sitelink_news'); ?>">
        <div class="born-container is-wide">

            <div class="content">

                <div class="title">
                    <div class="content">
                        <h2><?php echo $BORN_FRAMEWORK->Options->Get('prod_news' . $lang_code); ?></h2>
                        <?php if ($h2_ratings['news_rating']): ?>
                            <?php echo product_title_rating($h2_ratings['news_rating']); ?>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="grid">

                    <?php
                    while ( $news->have_posts() ) {
                        $news->the_post();
                        get_template_part('layout/loop/content', 'post');
                    }
                    wp_reset_postdata();
                    ?>


                </div>

                <?php if ($news->max_num_pages > 1): ?>
                    <div class="cta">
                        <a href="#" class="load-more-btn button" data-page="1" data-settings="<?php echo esc_attr(json_encode([
                            'related' => get_the_ID(),
                            'posts_per_page' => 3,
                            'section' => 'aff-news-grid',
                            'grid' => 'grid'
                        ])); ?>"><?php echo $BORN_FRAMEWORK->Options->Get('load_more' . $lang_code);?></a>
                    </div>
                <?php endif; ?>

            </div>

        </div>
    </div>

<?php endif; ?>
<?php wp_reset_query(); ?>




<?php if (get_field('add_scroll_down_cta')): ?>

    <?php
    $scrolldown_bot_link = get_field('scrolldown_cta_button_link');
    ?>

    <div class="aff-bottom-cta" style="position: fixed; opacity: 0;">
        <span class="close aff-bottom-close">
            <svg role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M193.94 256L296.5 153.44l21.15-21.15c3.12-3.12 3.12-8.19 0-11.31l-22.63-22.63c-3.12-3.12-8.19-3.12-11.31 0L160 222.06 36.29 98.34c-3.12-3.12-8.19-3.12-11.31 0L2.34 120.97c-3.12 3.12-3.12 8.19 0 11.31L126.06 256 2.34 379.71c-3.12 3.12-3.12 8.19 0 11.31l22.63 22.63c3.12 3.12 8.19 3.12 11.31 0L160 289.94 262.56 392.5l21.15 21.15c3.12 3.12 8.19 3.12 11.31 0l22.63-22.63c3.12-3.12 3.12-8.19 0-11.31L193.94 256z"></path></svg>
        </span>
        <div class="content">
            <div class="icon">
                <a href="<?php echo $scrolldown_bot_link['url']; ?>"
                   <?php if (!empty($scrolldown_bot_link['target'])): ?>target="<?php echo $scrolldown_bot_link['target']; ?>" <?php endif; ?>
                   class="image">
                    <?php
                    echo wp_get_attachment_image(get_field('logo'), 'icons-large');
                    //echo born_acf_image(get_field('logo'), 'icons-large', true);
                    ?>
                </a>
            </div>
            <div class="name">
                <a href="<?php echo $scrolldown_bot_link['url']; ?>"
                   <?php if (!empty($scrolldown_bot_link['target'])): ?>target="<?php echo $scrolldown_bot_link['target']; ?>" <?php endif; ?>><?php echo get_field('cta_title'); ?></a>
            </div>
            <div class="cta">
                <a href="<?php echo $scrolldown_bot_link['url']; ?>"
                   <?php if (!empty($scrolldown_bot_link['target'])): ?>target="<?php echo $scrolldown_bot_link['target']; ?>" <?php endif; ?>
                   class="button"><?php echo get_field('scrolldown_cta_button_text'); ?></a>
            </div>
        </div>
    </div>

<?php endif; ?>


<?php get_footer(); ?>
