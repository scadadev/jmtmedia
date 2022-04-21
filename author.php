<?php get_header(); ?>


<?php
wp_reset_query();

global $BORN_FRAMEWORK;
$lang_code = born_get_current_language_code();


$featured = get_field('featured_products');
$other_games = get_field('other_games');
$single_featured = get_field('single_featured_product');


$user_id = get_the_author_meta("ID");

$user = get_user_by('id', $user_id);
$userdata = get_user_meta( $user_id );
$user_meta = get_user_by('id', $user_id);

$user_avatar_url = get_avatar_url($user_id) ?? '';

$author_archive = get_pages(

    array(

        'meta_key' => '_wp_page_template',

        'meta_value' => 'template-authors.php'
    )
);
?>

<div class="aff-page-info">
    <div class="born-container is-wide">
        <div class="content">

            <ul class="breadcrumb">
                <li><a href="<?php echo get_home_url();?>"><?php echo $BORN_FRAMEWORK->Options->Get('breadcrumb_home' . $lang_code);?></a></li>
                <?php if ($author_archive[0]->ID):?>
                <li><a href="<?php echo get_the_permalink($author_archive[0]->ID);?>"><?php echo get_the_title($author_archive[0]->ID);?></a></li>
                <?php endif;?>
                <li><a href="<?php the_permalink();?>"><?php echo $user->data->display_name;?></a></li>
            </ul>

        </div>
    </div>
</div>

<div class="aff-news-post is-author">
    <div class="born-container is-wide">
        <div class="content">
            <div class="main">
                <div class="author-avatar">
                <?php if (!empty($user_avatar_url)):?>
                    <img src="<?php echo $user_avatar_url ?>"
                         alt="<?php echo esc_attr($userdata->data->display_name); ?>">
                <?php else:?>
                    <?php if ($BORN_FRAMEWORK->Options->Get('default_user_icon')):?>
                        <?php echo born_acf_image($BORN_FRAMEWORK->Options->Get('default_user_icon')['id'],'icons-large-160',true);?>
                    <?php endif;?>
                <?php endif;?>
                </div>
                <h1><?php echo $user->data->display_name;?></h1>
                <?php if (!empty($userdata['description'][0])):?>
                <div class="author-description">
                <?php echo $userdata['description'][0] ?? '';?>
                </div>
                <?php endif;?>

            </div>
        </div>
    </div>
</div>
<div class="born-spacer is-line-dark"></div>


<?php
$args = array(
    'post_type' => 'products',
    'post_status' => 'publish',
    'author' => $user_id,
    'posts_per_page' => 12,
);
$queried_posts = new WP_Query($args);
?>

<?php if ( $queried_posts->have_posts() ):?>

    <div class="aff-main-items-grid">


        <div class="title">
            <div class="born-container is-wide">
                <h2><?php echo $BORN_FRAMEWORK->Options->Get('author_reviewed_products' . $lang_code);?></h2>
            </div>
        </div>


        <div class="born-container is-wide">
            <div class="items-grid">

                <?php
                while ( $queried_posts->have_posts() ) {
                    $queried_posts->the_post();
                    get_template_part('layout/loop/content', 'products');
                }
                wp_reset_postdata();
                ?>

            </div>
            <?php if ($queried_posts->max_num_pages > 1):?>
                <div class="load-more cta">
                    <a href="#" class="load-more-btn button" data-page="1" data-settings="<?php echo esc_attr(json_encode([
                        'post_type' => 'products',
                        'author' => $user_id,
                        'posts_per_page' => 12,
                        'section' => 'aff-main-items-grid',
                        'grid' => 'items-grid'
                    ])); ?>"><?php echo $BORN_FRAMEWORK->Options->Get('load_more' . $lang_code);?></a>
                </div>
            <?php endif;?>

        </div>

    </div>

<?php endif;?>

<?php wp_reset_postdata();?>

<?php
$args = array(
'post_type' => 'games',
'post_status' => 'publish',
'author' => $user_id,
'posts_per_page' => 12,
);
$queried_posts = new WP_Query($args);
?>

<?php if ( $queried_posts->have_posts() ):?>


    <div class="aff-games-grid">




        <div class="title">
            <div class="born-container is-wide">
                <h2><?php echo $BORN_FRAMEWORK->Options->Get('author_games' . $lang_code);?></h2>
            </div>
        </div>



        <div class="born-container container-author-games is-wide">

            <div class="games-grid">
                <?php
                while ( $queried_posts->have_posts() ) {
                    $queried_posts->the_post();
                    get_template_part('layout/loop/content', 'games');
                }
                wp_reset_postdata();
                ?>
            </div>

            <?php if ($queried_posts->max_num_pages > 1):?>
                <div class="load-more cta">
                    <a href="#" class="load-more-btn button" data-page="1" data-settings="<?php echo esc_attr(json_encode([
                        'post_type' => 'games',
                        'author' => $user_id,
                        'posts_per_page' => 12,
                        'section' => 'container-author-games',
                        'grid' => 'games-grid'
                    ])); ?>"><?php echo $BORN_FRAMEWORK->Options->Get('load_more' . $lang_code);?></a>
                </div>
            <?php endif;?>

        </div>

    </div>

<?php endif;?>
<?php wp_reset_postdata();?>


<?php
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'author' => $user_id,
    'posts_per_page' => 12,
);
$queried_posts = new WP_Query($args);
?>

<?php if ( $queried_posts->have_posts() ):?>




<div class="aff-news-grid author-news-grid">

    <div class="title">
        <div class="born-container is-wide">
            <h2><?php echo $BORN_FRAMEWORK->Options->Get('author_news' . $lang_code);?></h2>
        </div>
    </div>

    <div class="born-container is-wide">
            <div class="content">
                <div class="grid">

                    <?php
                    while ( $queried_posts->have_posts() ) {
                        $queried_posts->the_post();
                        get_template_part('layout/loop/content', 'post');
                    }
                    wp_reset_postdata();
                    ?>
                </div>
                    <?php if ($queried_posts->max_num_pages > 1):?>
                        <div class="load-more cta">
                            <a href="#" class="load-more-btn button" data-page="1" data-settings="<?php echo esc_attr(json_encode([
                                'author' => $user_id,
                                'posts_per_page' => 12,
                                'section' => 'aff-news-grid',
                                'grid' => 'grid'
                            ])); ?>"><?php echo $BORN_FRAMEWORK->Options->Get('load_more' . $lang_code);?></a>
                        </div>
                    <?php endif;?>

            </div>
    </div>
</div>

<?php endif;?>

<?php wp_reset_postdata();?>
<?php wp_reset_query();?>
<?php
$args_pages = array(
    'post_type' => 'page',
    'post_status' => 'publish',
    'author' => $user_id,
    'posts_per_page' => 12,
);
$queried_pages = new WP_Query($args_pages);

?>

<?php if ( $queried_pages->have_posts() ):?>





    <div class="aff-news-grid aff-pages-grid">

        <div class="title">
            <div class="born-container is-wide">
                <h2><?php echo $BORN_FRAMEWORK->Options->Get('author_pages' . $lang_code);?></h2>
            </div>
        </div>

        <div class="born-container container-author-pages is-wide">

                <div class="content">
                    <div class="grid">
                        <?php
                        while ( $queried_pages->have_posts() ) {
                            $queried_pages->the_post();
                            get_template_part('layout/loop/content', 'page');
                        }
                        wp_reset_postdata();
                        ?>
                    </div>
                        <?php if ($queried_pages->max_num_pages > 1):?>
                            <div class="load-more cta">
                                <a href="#" class="load-more-btn button" data-page="1" data-settings="<?php echo esc_attr(json_encode([
                                    'post_type' => 'page',
                                    'author' => $user_id,
                                    'posts_per_page' => 12,
                                    'section' => 'container-author-pages',
                                    'grid' => 'grid'
                                ])); ?>"><?php echo $BORN_FRAMEWORK->Options->Get('load_more' . $lang_code);?></a>
                            </div>
                        <?php endif;?>
                </div>


        </div>
    </div>

<?php endif;?>



<?php if (get_field('show_feedback_form',get_the_ID())):?>
    <?php get_template_part('layout/partials/feedback','',array('id' => get_the_ID()));?>
<?php endif;?>


<?php get_footer(); ?>
