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
                    <a href="#" class="load-more-products-author button" data-max="<?php echo $queried_posts->max_num_pages;?>"><?php echo $BORN_FRAMEWORK->Options->Get('load_more' . $lang_code);?></a>
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
        <?php if( have_posts() ): ?>
            <div class="content">
                <div class="grid">




                    <?php
                    while(have_posts()):
                        the_post();?>


                        <div class="news-card">
                            <?php if (has_post_thumbnail()):?>
                                <div class="image">
                                    <a href="<?php the_permalink();?>"><?php echo born_acf_image(get_post_thumbnail_id(), 'news-img', true); ?></a>
                                </div>
                            <?php endif;?>
                            <div class="date">
                                <?php echo aff_time_ago();?>
                            </div>
                            <div class="heading">
                                <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                            </div>
                            <div class="cta">
                                <a href="<?php the_permalink();?>"><?php echo $BORN_FRAMEWORK->Options->Get('read_more' . $lang_code); ?></a>
                            </div>
                        </div>

                    <?php
                    endwhile;
                    ?>

                    <?php if ($queried_posts->max_num_pages > 1):?>
                        <div class="load-more cta">
                            <a href="#" class="load-more-news button" data-max="<?php echo $queried_posts->max_num_pages;?>"><?php echo $BORN_FRAMEWORK->Options->Get('load_more' . $lang_code);?></a>
                        </div>
                    <?php endif;?>


                </div>
            </div>
        <?php endif; ?>

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

        <div class="born-container is-wide">

                <div class="content">
                    <div class="grid">




                        <?php while ( $queried_pages->have_posts() ): $queried_pages->the_post();  ?>

                            <div class="news-card">
                                <?php if (has_post_thumbnail()):?>
                                    <div class="image">
                                        <a href="<?php the_permalink();?>"><?php echo born_acf_image(get_post_thumbnail_id(), 'news-img', true); ?></a>
                                    </div>
                                <?php endif;?>
                                <div class="heading">
                                    <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                </div>
                                <div class="cta">
                                    <a href="<?php the_permalink();?>"><?php echo $BORN_FRAMEWORK->Options->Get('read_more' . $lang_code); ?></a>
                                </div>
                            </div>

                        <?php
                        endwhile;
                        ?>

                        <?php if ($queried_pages->max_num_pages > 1):?>
                            <div class="load-more cta">
                                <a href="#" class="load-more-pages button" data-max="<?php echo $queried_pages->max_num_pages;?>"><?php echo $BORN_FRAMEWORK->Options->Get('load_more' . $lang_code);?></a>
                            </div>
                        <?php endif;?>



                    </div>
                </div>


        </div>
    </div>

<?php endif;?>



<?php if (get_field('show_feedback_form',get_the_ID())):?>
    <?php get_template_part('layout/partials/feedback','',array('id' => get_the_ID()));?>
<?php endif;?>


<?php get_footer(); ?>
