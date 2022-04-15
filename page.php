<?php get_header(); ?>

<?php
global $BORN_FRAMEWORK;
$lang_code = born_get_current_language_code();
wp_reset_query();

?>

<?php if (get_field('enable_breadcrumbs') && !is_front_page()):?>
    <?php if (get_field('enable_breadcrumbs') && wp_get_post_parent_id(get_the_ID())):?>
    <script type="application/ld+json">{
        "@context": "https:\/\/schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,
                "name": "<?php echo $BORN_FRAMEWORK->Options->Get('breadcrumb_home' . $lang_code);?>",
                "item": {
                    "@type": "Thing",
                    "url": "<?php echo get_home_url();?>",
                    "@id": "<?php echo get_home_url();?>"
                }
            },
            {
                "@type": "ListItem",
                "position": 2,
                "name": "<?php echo get_the_title(wp_get_post_parent_id(get_the_ID()));?>",
                "item": {
                    "@type": "Thing",
                    "url": "<?php echo get_the_permalink(wp_get_post_parent_id(get_the_ID()));?>",
                    "@id": "<?php echo get_the_permalink(wp_get_post_parent_id(get_the_ID()));?>"
                }
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "<?php the_title();?>",
                "item": {
                    "@type": "Thing",
                    "url": "<?php the_permalink();?>",
                    "@id": "<?php the_permalink();?>"
                }
            }
        ]
    }
</script>
    <?php else:?>
    <script type="application/ld+json">{
        "@context": "https:\/\/schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,
                "name": "<?php echo $BORN_FRAMEWORK->Options->Get('breadcrumb_home' . $lang_code);?>",
                "item": {
                    "@type": "Thing",
                    "url": "<?php echo get_home_url();?>",
                    "@id": "<?php echo get_home_url();?>"
                }
            },
            {
                "@type": "ListItem",
                "position": 2,
                "name": "<?php the_title();?>",
                "item": {
                    "@type": "Thing",
                    "url": "<?php the_permalink();?>",
                    "@id": "<?php the_permalink();?>"
                }
            }
        ]
    }
</script>
    <?php endif;?>
<?php endif;?>



<?php if (get_field('enable_breadcrumbs') && !is_front_page()):?>
    <div class="aff-page-info">
        <div class="born-container is-wide">
            <div class="content">
            <?php if (get_field('enable_breadcrumbs') && wp_get_post_parent_id(get_the_ID())):?>
                <ul class="breadcrumb">
                    <li><a href="<?php echo get_home_url();?>"><?php echo $BORN_FRAMEWORK->Options->Get('breadcrumb_home' . $lang_code);?></a></li>
                    <li><a href="<?php echo get_the_permalink(wp_get_post_parent_id(get_the_ID()));?>"><?php echo get_the_title(wp_get_post_parent_id(get_the_ID()));?></a></li>
                    <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
                </ul>
            <?php else:?>
                <ul class="breadcrumb">
                    <li><a href="<?php echo get_home_url();?>"><?php echo $BORN_FRAMEWORK->Options->Get('breadcrumb_home' . $lang_code);?></a></li>
                    <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
                </ul>
            <?php endif;?>
            </div>
        </div>
    </div>
<?php endif;?>

<?php get_template_part('layout/acf/global');?>


    <?php if ( !empty( get_the_content() ) ):?>
    <div class="aff-post <?php if (!get_field('enable_full_width') && get_field('sidebar_area_to_display')): ?> has-sidebar<?php endif; ?>">
        <div class="born-container is-wide">
            <div class="content">
                <div class="main">

                    <?php
                    if (have_posts()) :
                        while (have_posts()) :
                            the_post(); ?>


                            <?php the_content(); ?>


                        <?php endwhile;
                    endif; ?>


                </div>
                <?php if (!get_field('enable_full_width') && get_field('sidebar_area_to_display')): ?>
                    <div class="aff-sidebar">

                        <?php echo get_field('sidebar_area_to_display'); ?>

                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>




<?php if (get_field('show_feedback_form',get_the_ID())):?>
    <?php get_template_part('layout/partials/feedback','',array('id' => get_the_ID()));?>
<?php endif;?>


<?php do_action( 'aff_before_footer', get_queried_object_id() ); ?>

<?php get_footer(); ?>