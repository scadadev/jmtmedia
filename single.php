<?php get_header(); ?>


<?php
wp_reset_query();
?>


<?php

global $BORN_FRAMEWORK;
$lang_code = born_get_current_language_code();


$news_id = get_option( 'page_for_posts' );

$post_category = get_the_category();

$sidebar_disabled = $BORN_FRAMEWORK->Options->Get('news_sidebar');


$user_id = get_the_author_meta("ID");
$user = get_user_by('id', $user_id);
$author_avatar = get_user_meta($user->ID,'custom_avatar',true);

// override with single post option
if (get_field('disable_sidebar_for_this_post')){
    $sidebar_disabled = false;
}

?>


<div class="aff-page-info">
    <div class="born-container is-wide">
        <div class="content">
            <ul class="breadcrumb">
                <li><a href="<?php echo get_home_url();?>"><?php echo $BORN_FRAMEWORK->Options->Get('breadcrumb_home' . $lang_code);?></a></li>
                <li><a href="<?php echo get_the_permalink($news_id);?>"><?php echo get_the_title($news_id);?></a></li>
                <li><a href="<?php echo get_term_link($post_category[0]->term_id); ?>"><?php echo $post_category[0]->cat_name; ?></a></li>
                <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
            </ul>
        </div>
    </div>
</div>
<div class="aff-news-post <?php if (!$sidebar_disabled):?>has-sidebar<?php endif;?>">
    <div class="born-container is-wide">
        <div class="content">
            <div class="main">
                <h1><?php the_title(); ?></h1>
                <div class="aff-post-author-info">
                    <div class="info">
                        <div class="author">
                            <?php if (!empty($author_avatar)):?>
                                <div class="image-wrapper">
                                    <?php echo born_acf_image($author_avatar,'icons-micro-avatar-product',true);?>
                                </div>
                            <?php else:?>
                                <div class="image-wrapper">
                                    <?php if ($BORN_FRAMEWORK->Options->Get('default_user_icon')):?>
                                        <?php echo born_acf_image($BORN_FRAMEWORK->Options->Get('default_user_icon')['id'],'icons-micro-avatar-product',true);?>
                                    <?php endif;?>
                                </div>
                            <?php endif;?>

                            <span class="name">
                                <?php echo $BORN_FRAMEWORK->Options->Get('written_by' . $lang_code);?> <?php echo get_the_author_meta('first_name'); ?> <?php echo get_the_author_meta('last_name'); ?>
                            </span>
                        </div>
                        <div class="date">
                        <span>
                            <?php echo aff_time_ago(); ?>
                        </span>
                        </div>
                    </div>
                </div>

                <?php
                if (have_posts()) :
                    while (have_posts()) :
                        the_post(); ?>


                        <?php the_content(); ?>

                    <?php endwhile;
                endif; ?>

            </div>
            <?php if (!$sidebar_disabled):?>
            <div class="aff-sidebar aff-main-items-grid">

                <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('news-widget')) :endif;?>

            </div>
            <?php endif;?>
        </div>
    </div>
</div>

<div class="born-spacer is-line-dark"></div>


<?php get_template_part('layout/partials/feedback','',array('id' => get_the_ID()));?>



<div class="aff-news-grid">
    <div class="born-container is-wide">
        <div class="content">
            <div class="title">
                <h2><?php echo $BORN_FRAMEWORK->Options->Get('similar_news' . $lang_code);?></h2>
            </div>
            <div class="grid">
                <?php
                $args = array( 'category__in' => wp_get_post_categories(get_the_ID()), 'paged' => 1, 'posts_per_page' => 3, 'post__not_in' => array(get_the_ID()) );

                $related = new WP_Query( $args );
                if ( $related->have_posts() ) {
                    while ($related->have_posts()) {
                        $related->the_post();
                        get_template_part('layout/loop/content', 'post');
                    }
                    wp_reset_postdata();
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php if ($related->max_num_pages > 1):?>
<div class="aff-load-more">
    <div class="born-container is-wide">
        <div class="content">
            <button class="load-more-btn button" data-page="1" data-settings="<?php echo esc_attr(json_encode([
                'category__in' => wp_get_post_categories(get_the_ID()),
                'post__not_in' => get_the_ID(),
                'posts_per_page' => 3,
                'section' => 'aff-news-grid',
                'grid' => 'grid'
            ])); ?>"><?php echo $BORN_FRAMEWORK->Options->Get('load_more' . $lang_code);?></button>
        </div>
    </div>
</div>
<?php endif;?>
<?php  wp_reset_postdata(); ?>


<?php get_footer(); ?>
