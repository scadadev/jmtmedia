<?php get_header(); ?>
<?php /* Template Name: Products archive */ ?>

<?php
global $BORN_FRAMEWORK;
$lang_code = born_get_current_language_code();

$pages = get_pages(array(
    'meta_key' => '_wp_page_template',
    'meta_value' => 'archive-products.php'
));

$fake_page_id = $pages[0]->ID;

$args = array(
    'post_type' => 'products',
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
                            <a href="<?php echo get_home_url(); ?>/<?php echo born_get_archive_slug('products'); ?>/"><?php echo born_get_archive_title('products'); ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    <?php endif;?>

    <div class="aff-main-items-grid">




        <div class="title">
            <div class="born-container is-wide">
                <h1><?php echo born_get_archive_title('products');?></h1>
            </div>
        </div>


        <div class="born-container is-wide">
            <div class="items-grid">

                <?php while ( $queried_posts->have_posts() ): $queried_posts->the_post();  ?>


                    <?php
                    $text_gray = get_field('text_gray');
                    $text_orange= get_field('text_orange');
                    ?>
                    <div class="item">

                        <?php get_template_part('layout/partials/label','',array('id' => get_the_ID()));?>
                        <?php get_template_part('layout/partials/favorites','',array('id' => get_the_ID()));?>
                        <div class="data">
                            <div class="row">
                                <div class="logo">
                                    <a href="<?php echo get_permalink();?>" class="image">
                                        <?php echo born_acf_image(get_field('logo'),'icons-large',true);?>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <a href="<?php echo get_permalink();?>" class="name"><?php echo get_the_title();?></a>
                            </div>
                            <div class="row">
                                <?php get_template_part('layout/partials/rating','',array('id' => get_the_ID()));?>
                            </div>
                        </div>

                            <div class="details">
                                <?php if ($text_gray || $text_orange):?>
                                    <div class="desc">
                                        <div class="text">
                                            <?php if ($text_orange):?><span style="color: #e7a736;"><?php echo $text_orange;?></span><br><?php endif;?> <?php if ($text_gray):?><?php echo $text_gray;?><?php endif;?>
                                        </div>
                                    </div>
                                <?php endif;?>


                                <?php
                                $parameter_settings = get_field('parameters_settings');
                                ?>

                                <?php if (!empty($parameter_settings['parameters'])):?>
                                    <div class="table">

                                        <?php
                                        foreach ($parameter_settings as $parameters){

                                            foreach ($parameters as $parameter):?>

                                                <div class="row">
                                                    <div class="cell">
                                                        <?php echo get_term( $parameter['parameter_select'] )->name;?>
                                                    </div>
                                                    <div class="cell">
                                                        <?php echo $parameter['Parameter_value'];?>
                                                    </div>
                                                </div>
                                            <?php endforeach;?>
                                            <?php
                                        }
                                        ?>

                                    </div>
                                <?php endif;?>


                                <div class="cta">
                                    <a href="<?php echo get_permalink();?>" class="button"><?php echo $BORN_FRAMEWORK->Options->Get('go_to_profile'.$lang_code);?></a>
                                </div>
                            </div>

                        <?php if (get_field('main_link')):?>
                            <div class="cta">
                                <a href="<?php echo get_field('main_link');?>" class="button"><?php echo $BORN_FRAMEWORK->Options->Get('play'.$lang_code);?></a>
                            </div>
                        <?php endif;?>
                    </div>

                <?php endwhile;?>
                <?php wp_reset_postdata();?>



            </div>
            <?php if ($queried_posts->max_num_pages > 1):?>
                <div class="load-more cta">
                    <a href="#" class="load-more-products button" data-max="<?php echo $queried_posts->max_num_pages;?>"><?php echo $BORN_FRAMEWORK->Options->Get('load_more' . $lang_code);?></a>
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

    do_action( 'after_page_content_global', $fake_page_id );

    ?>

</div>

<?php if (get_field('show_feedback_form',$fake_page_id)):?>
    <?php get_template_part('layout/partials/feedback','',array('id' => $fake_page_id));?>
<?php endif;?>

<?php get_footer(); ?>