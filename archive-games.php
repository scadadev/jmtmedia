<?php get_header(); ?>
<?php /* Template Name: Games archive */ ?>

<?php
global $BORN_FRAMEWORK;
$lang_code = born_get_current_language_code();

$pages = get_pages(array(
    'meta_key' => '_wp_page_template',
    'meta_value' => 'archive-games.php'
));

$fake_page_id = $pages[0]->ID;

$args = array(
    'post_type' => 'games',
    'post_status' => 'publish',
    'posts_per_page' => 12,
);
$queried_posts = new WP_Query($args);
?>

<?php if ( $queried_posts->have_posts() ):?>

    <?php if (get_field('enable_breadcrumbs')):?>
        <div class="aff-page-info">
            <div class="born-container is-wide">
                <div class="content">
                    <ul class="breadcrumb">
                        <li><a href="<?php echo get_home_url();?>"><?php echo $BORN_FRAMEWORK->Options->Get('breadcrumb_home' . $lang_code);?></a></li>
                        <li>
                            <a href="<?php echo get_home_url(); ?>/<?php echo born_get_archive_slug('games'); ?>/"><?php echo born_get_archive_title('games'); ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    <?php endif;?>

<div class="aff-games-grid">




    <div class="title">
        <div class="born-container is-wide">
            <h1><?php echo born_get_archive_title('games');?></h1>
        </div>
    </div>



    <div class="born-container is-wide">

        <div class="games-grid">

            <?php while ( $queried_posts->have_posts() ): $queried_posts->the_post();  ?>

                <div class="game-card">
                    <div class="image">
                        <a href="<?php echo get_permalink();?>"><?php if (get_post_thumbnail_id()):?><?php echo born_acf_image(get_post_thumbnail_id(),'game-thumb',true);?><?php endif;?></a>
                    </div>
                    <div class="heading">
                        <h3><a href="<?php echo get_permalink();?>"><?php echo get_the_title();?></a></h3>
                    </div>
                    <div class="cta">
                        <a href="<?php echo get_permalink();?>" class="button"><?php echo $BORN_FRAMEWORK->Options->Get('read_more_games' . $lang_code);?></a>
                    </div>
                </div>

            <?php endwhile;?>
            <?php wp_reset_postdata();?>


        </div>

        <?php if ($queried_posts->max_num_pages > 1):?>
        <div class="load-more cta">
            <a href="#" class="load-more-games button" data-max="<?php echo $queried_posts->max_num_pages;?>"><?php echo $BORN_FRAMEWORK->Options->Get('load_more' . $lang_code);?></a>
        </div>
        <?php endif;?>

    </div>

</div>

<?php endif;?>


<div class="aff-white-bg-wrapper">

<?php
// Check value exists.
if( have_rows('page_content',$fake_page_id) ):

    // Loop through rows.
    while ( have_rows('page_content',$fake_page_id) ) : the_row();

        do_action( 'before_page_content_block', get_row_layout(), $fake_page_id );

        // Case: Paragraph layout.
        if( get_row_layout() == 'header_with_blocks' ):
            get_template_part('layout/acf/header-with-blocks');

        // Case: Download layout.
        elseif( get_row_layout() == 'menu_acf' ):

            get_template_part('layout/acf/menu');


        elseif( get_row_layout() == 'top_products' ):

            get_template_part('layout/acf/top-products');

        elseif( get_row_layout() == 'product_cards' ):

            get_template_part('layout/acf/product-cards');

        elseif( get_row_layout() == 'which_one_is_better' ):

            get_template_part('layout/acf/which-one-is-better');

        elseif( get_row_layout() == 'banner' ):

            get_template_part('layout/acf/banner');

        elseif( get_row_layout() == 'text_element' ):

            get_template_part('layout/acf/text-element');

        elseif( get_row_layout() == 'line' ):

            get_template_part('layout/acf/line');

        elseif( get_row_layout() == 'steps' ):

            get_template_part('layout/acf/steps');

        elseif( get_row_layout() == 'compare_products' ):

            get_template_part('layout/acf/compare-products');

        elseif( get_row_layout() == 'recent_reviews' ):

            get_template_part('layout/acf/recent-reviews');

        elseif( get_row_layout() == 'recent_news' ):

            get_template_part('layout/acf/recent-news');

        elseif( get_row_layout() == 'product_list' ):

            get_template_part('layout/acf/product-list');

        elseif( get_row_layout() == 'faq' ):

            get_template_part('layout/acf/faq');

        endif;
        // End loop.
    endwhile;

// No value.
else :

endif;
?>

</div>

<?php if (get_field('show_feedback_form',$fake_page_id)):?>
    <?php get_template_part('layout/partials/feedback','',array('id' => $fake_page_id));?>
<?php endif;?>

<?php get_footer(); ?>
