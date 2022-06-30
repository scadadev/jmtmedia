 <?php get_header(); ?>


 <?php
wp_reset_query();

global $BORN_FRAMEWORK;
$lang_code = born_get_current_language_code();


$featured = get_field('featured_products');
$other_games = get_field('other_games');
$single_featured = get_field('single_featured_product');
$user = wp_get_current_user();
$avatar = get_user_meta($user->ID,'custom_avatar',true);

?>


 <div class="aff-game-header">

     <div class="aff-page-info">
         <div class="born-container is-wide">
             <div class="content">
                 <?php if (get_field('enable_breadcrumbs')):?>
                 <ul class="breadcrumb">
                     <li><a
                             href="<?php echo get_home_url();?>"><?php echo $BORN_FRAMEWORK->Options->Get('breadcrumb_home' . $lang_code);?></a>
                     </li>
                     <li>
                         <a
                             href="<?php echo get_post_type_archive_link('games'); ?>"><?php echo born_get_archive_title('games'); ?></a>
                     </li>
                     <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
                 </ul>
                 <?php endif;?>
             </div>
         </div>
     </div>

     <div class="game has-sidebar">
         <div class="title">
             <div class="born-container is-wide">
                 <h1><?php the_title();?></h1>
             </div>
         </div>

         <div class="born-container is-wide">

             <div class="content">
                 <div class="left">
                     <!--<iframe src="game.html" frameborder="0"></iframe>-->
                     <div class="iframe-wrapper" id="iframe-wrapper">
                         <?php if (get_field('iframe')):?>
                         <div class="game-cover">
                             <div class="game-cover-btns">
                                 <a href="#"
                                     class="button click-to-game"><?php echo $BORN_FRAMEWORK->Options->Get('play_btn_demo' . $lang_code);?></a>
                                 <a href="<?php echo get_field('main_link',$single_featured->ID);?>"
                                     class="button external-game"><?php echo $BORN_FRAMEWORK->Options->Get('play_btn_real' . $lang_code);?></a>
                             </div>
                             <?php  if (get_post_thumbnail_id()):?>
                             <?php  echo born_acf_image(get_post_thumbnail_id(),'game-thumb',true);?>
                             <?php  endif;?>
                         </div>
                         <script>
                         jQuery(document).ready(function() {
                             let dlockdiv = jQuery('#iframe-wrapper');
                             jQuery('.click-to-game').on('click', function(e) {
                                 e.preventDefault();
                                 jQuery('.game-cover').hide();
                                 dlockdiv.append('<?php echo get_field("iframe");?>');
                             });
                         });
                         </script>

                         <?php endif;?>
                         <div class="report">
                             <a href="#iframe-report"
                                 rel="modal:open"><?php echo $BORN_FRAMEWORK->Options->Get('report_problem' . $lang_code);?></a>
                         </div>
                         <div id="iframe-report" class="modal aff-report-modal">
                             <div class="heading">
                                 <?php echo $BORN_FRAMEWORK->Options->Get('report_problem' . $lang_code);?>
                             </div>
                             <form class="report-form" action="<?php echo admin_url('admin-ajax.php'); ?>">
                                 <?php wp_nonce_field('report_nonce', 'report_nonce'.get_the_ID()); ?>
                                 <input type="hidden" name="id" value="<?php echo get_the_ID(); ?>">
                                 <div class="input">
                                     <textarea name="report-text" class="report-text"></textarea>
                                 </div>
                                 <div class="cta">
                                     <input type="submit"
                                         value="<?php echo $BORN_FRAMEWORK->Options->Get('report_problem_send' . $lang_code);?>">
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
                 <?php if ($featured):?>
                 <div class="aff-sidebar">
                     <div class="offer">
                         <div class="title">
                             <h2><?php echo $BORN_FRAMEWORK->Options->Get('casinos_like' . $lang_code);?></h2>
                         </div>
                         <div class="card-wrapper">

                             <?php foreach ($featured as $prod):?>

                             <div class="card is-large">
                                 <div class="logo">
                                     <a href="<?php echo get_permalink($prod->ID);?>" class="image">
                                         <?php
                                        echo wp_get_attachment_image(get_field('logo', $prod->ID), 'icons-small-avatar-100');
                                        // echo born_acf_image(get_field('logo',$prod->ID),'icons-small-avatar-100',true);
                                        ?>
                                     </a>
                                 </div>
                                 <div class="data">
                                     <a href="<?php echo get_permalink($prod->ID);?>"
                                         class="name"><?php echo get_the_title($prod->ID);?></a>
                                     <?php get_template_part('layout/partials/rating','',array('id' => $prod->ID));?>
                                     <?php get_template_part('layout/partials/favorites','',array('id' => $prod->ID));?>
                                 </div>
                                 <div class="cta"><a
                                         href="<?php echo get_field('main_link',$prod->ID);?>"><?php echo $BORN_FRAMEWORK->Options->Get('play' . $lang_code);?></a>
                                 </div>
                             </div>

                             <?php endforeach;?>

                         </div>
                     </div>
                 </div>
                 <?php endif;?>
             </div>
         </div>
     </div>

 </div>

 <?php if (get_field('game_name_value')):?>
 <div class="aff-game-details">
  
     <div class="title">
         <div class="born-container is-wide">
             <h2><?php echo get_field("information_title");?></h2>
         </div>
     </div>
    
     <div class="born-container is-wide">
         <div class="aff-game-details-row">
            <div class="aff-game-details-thumb">
                 <?php  if (get_post_thumbnail_id()):?>
                 <?php  echo born_acf_image(get_post_thumbnail_id(),'full',true);?>
                 <?php  endif;?>
             </div>
         
             <div class="aff-game-details-tables">
                 <table class="game-details-table">
                     <tbody>
                         <?php if (get_field('game_name_value')):?>
                         <tr>
                             <td><?php echo $BORN_FRAMEWORK->Options->Get('game_name_title' . $lang_code);?></td>
                             <td><?php echo get_field("game_name_value");?></td>
                         </tr>
                         <?php endif;?>
                         <?php if (get_field('software_provider_value')):?>
                         <tr>
                             <td><?php echo $BORN_FRAMEWORK->Options->Get('software_provider_title' . $lang_code);?></td>
                             <td><?php echo get_field("software_provider_value");?></td>
                         </tr>
                         <?php endif;?>
                         <?php if (get_field('theme_value')):?>
                         <tr>
                             <td><?php echo $BORN_FRAMEWORK->Options->Get('theme_title' . $lang_code);?></td>
                             <td><?php echo get_field("theme_value");?></td>
                         </tr>
                         <?php endif;?>
                         <?php if (get_field('paylines_value')):?>
                         <tr>
                             <td><?php echo $BORN_FRAMEWORK->Options->Get('paylines_title' . $lang_code);?></td>
                             <td><?php echo get_field("paylines_value");?></td>
                         </tr>
                         <?php endif;?>
                         <?php if (get_field('rtp_value')):?>
                         <tr>
                             <td><?php echo $BORN_FRAMEWORK->Options->Get('rtp_title' . $lang_code);?></td>
                             <td><?php echo get_field("rtp_value");?></td>
                         </tr>
                         <?php endif;?>
                         <?php if (get_field('game_launch_date_value')):?>
                         <tr>
                             <td><?php echo $BORN_FRAMEWORK->Options->Get('game_launch_date_title' . $lang_code);?></td>
                             <td><?php echo get_field("game_launch_date_value");?></td>
                         </tr>
                         <?php endif;?>
                         <?php if (get_field('jackpot_value')):?>
                         <tr>
                             <td><?php echo $BORN_FRAMEWORK->Options->Get('jackpot_title' . $lang_code);?></td>
                             <td><?php echo get_field("jackpot_value");?></td>
                         </tr>
                         <?php endif;?>
                     </tbody>
                 </table>
             </div>
             <div class="aff-game-details-tables">
                 <table class="game-details-table">
                     <tbody>
                     
                         <tr>
                             <td><?php echo $BORN_FRAMEWORK->Options->Get('bonus_feature_title' . $lang_code);?></td>
                             <td><?php if ( get_field( 'bonus_feature_value' ) == 1 ) { ?>
                               <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/check.svg" alt="Check mark"> 
                            <?php    } else { 
                                echo $BORN_FRAMEWORK->Options->Get('no-value' . $lang_code);
                                } ?></td>
                         </tr>
                         
                        
                         <tr>
                             <td><?php echo $BORN_FRAMEWORK->Options->Get('free_spins_title' . $lang_code);?></td>
                             <td><?php if ( get_field( 'free_spins_value' ) == 1 ) { ?>
                               <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/check.svg" alt="Check mark"> 
                            <?php    } else { 
                                echo $BORN_FRAMEWORK->Options->Get('no-value' . $lang_code); 
                                } ?></td>
                         </tr>
                        
                      
                         <tr>
                             <td><?php echo $BORN_FRAMEWORK->Options->Get('autoplay_title' . $lang_code);?></td>
                             <td><?php if ( get_field( 'autoplay_value' ) == 1 ) { ?>
                               <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/check.svg" alt="Check mark"> 
                            <?php    } else { 
                                 echo $BORN_FRAMEWORK->Options->Get('no-value' . $lang_code);
                                } ?></td>
                         </tr>
                    
                         <?php if (get_field('minimum_bet_value')):?>
                         <tr>
                             <td><?php echo $BORN_FRAMEWORK->Options->Get('minimum_bet_title' . $lang_code);?></td>
                             <td><?php echo get_field("minimum_bet_value");?></td>
                         </tr>
                         <?php endif;?>
                         <?php if (get_field('maximum_bet_value')):?>
                         <tr>
                             <td><?php echo $BORN_FRAMEWORK->Options->Get('maximum_bet_title' . $lang_code);?></td>
                             <td><?php echo get_field("maximum_bet_value");?></td>
                         </tr>
                         <?php endif;?>
                         <?php if (get_field('biggest_win_value')):?>
                         <tr>
                             <td><?php echo $BORN_FRAMEWORK->Options->Get('biggest_win_title' . $lang_code);?></td>
                             <td><?php echo get_field("biggest_win_value");?></td>
                         </tr>
                         <?php endif;?>
                        
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
 </div>
 <?php endif;?>


 <?php if ($other_games):?>

 <?php
$args = array(
    'post_type' => 'games',
    'post_status' => 'published',
    'posts_per_page' => 4,
    'post__in' => $other_games,
);
$queried_posts = new WP_Query($args);
?>

 <?php if ( $queried_posts->have_posts() ):?>
 <div class="aff-games-grid">

     <div class="title">
         <div class="born-container is-wide">
             <h2><?php echo $BORN_FRAMEWORK->Options->Get('other_games' . $lang_code);?></h2>
         </div>
     </div>

     <div class="born-container is-wide">
         <div class="games-grid">
             <?php while ( $queried_posts->have_posts() ): $queried_posts->the_post();  ?>

             <div class="game-card">
                 <div class="image">
                     <a
                         href="<?php echo get_permalink();?>"><?php if (get_post_thumbnail_id()):?><?php echo born_acf_image(get_post_thumbnail_id(),'game-thumb',true);?><?php endif;?></a>
                 </div>
                 <div class="heading">
                     <h3><a href="<?php echo get_permalink();?>"><?php echo get_the_title();?></a></h3>
                 </div>
                <div class="game-grid-details-table">
                    <?php if (get_field('software_provider_value')):?>
                        <div class="game-details-row">
                             <span><?php echo $BORN_FRAMEWORK->Options->Get('software_provider_title' . $lang_code);?></span>
                             <span><?php echo get_field("software_provider_value");?></span>
                        </div>
                    <?php endif;?>   
                    <?php if (get_field('paylines_value')):?>
                        <div class="game-details-row">
                             <span><?php echo $BORN_FRAMEWORK->Options->Get('paylines_title' . $lang_code);?></span>
                             <span><?php echo get_field("paylines_value");?></span>
                             </div>
                    <?php endif;?>
                    <?php if (get_field('rtp_value')):?>
                        <div class="game-details-row">
                             <span><?php echo $BORN_FRAMEWORK->Options->Get('rtp_title' . $lang_code);?></span>
                             <span><?php echo get_field("rtp_value");?></span>
                        </div>
                     <?php endif;?>
                </div>     
                 <div class="cta">
                     <a href="<?php echo get_permalink();?>"
                         class="button"><?php echo $BORN_FRAMEWORK->Options->Get('read_more' . $lang_code); ?></a>
                 </div>
             </div>
             <?php endwhile;?>
             <?php wp_reset_postdata();?>
         </div>

         <?php if ($queried_posts->max_num_pages > 1):?>
         <div class="load-more cta">
             <a href="#" class="load-more-btn button" data-page="1" data-settings="<?php echo esc_attr(json_encode([
                    'post_type' => 'games',
                    'posts_per_page' => 4,
                    'section' => 'aff-games-grid',
                    'grid' => 'games-grid',
                    'post__in' => $other_games
                ])); ?>"><?php echo $BORN_FRAMEWORK->Options->Get('load_more' . $lang_code);?></a>
         </div>
         <?php endif;?>
     </div>
 </div>
 <?php endif;?>

 <?php endif;?>

 <div class="aff-post is-review has-sidebar">
     <div class="born-container is-wide">
         <div class="content">
             <div class="main">

                 <div class="title">
                     <div class="born-container is-wide">
                         <h2><?php echo $BORN_FRAMEWORK->Options->Get('slot_review' . $lang_code);?></h2>
                     </div>
                 </div>

                 <div class="author">
                     <span>
                         <?php if (!empty($avatar)):?>
                         <?php echo born_acf_image($avatar,'icons-micro-avatar-product',true);?>
                         <?php else:?>
                         <?php if ($BORN_FRAMEWORK->Options->Get('default_user_icon')):?>
                         <?php echo born_acf_image($BORN_FRAMEWORK->Options->Get('default_user_icon')['id'], 'icons-micro-avatar-product', true); ?>
                         <?php endif;?>
                         <?php endif;?>
                     </span>
                     <span><?php echo $BORN_FRAMEWORK->Options->Get('review_by' . $lang_code);?><span><?php echo get_the_author_meta('first_name');?>
                             <?php echo get_the_author_meta('last_name');?></span></span>
                 </div>

                 <?php the_content();?>

             </div>

             <?php if ($single_featured):?>

             <?php
            $text_gray = get_field('text_gray',$single_featured->ID);
            $text_orange= get_field('text_orange',$single_featured->ID);
            ?>

             <div class="aff-sidebar">

                 <div class="aff-main-items-grid">

                     <div class="born-container is-wide">
                         <div class="items-grid">

                             <div class="item">
                                 <?php get_template_part('layout/partials/favorites','',array('id' => $single_featured->ID));?>
                                 <div class="data">
                                     <div class="row">
                                         <div class="logo">
                                             <a href="<?php echo get_permalink($single_featured->ID);?>" class="image">
                                                 <?php echo born_acf_image(get_field('logo',$single_featured->ID),'icons-large',true);?>
                                             </a>
                                         </div>
                                     </div>
                                     <div class="row">
                                         <a href="<?php echo get_permalink($single_featured->ID);?>"
                                             class="name"><?php echo get_the_title(get_permalink($single_featured->ID));?></a>
                                     </div>
                                     <div class="row">
                                         <?php get_template_part('layout/partials/rating','',array('id' => $single_featured->ID));?>
                                     </div>
                                 </div>
                                 <div class="details">
                                     <?php if ($text_gray || $text_orange):?>
                                     <div class="desc">
                                         <div class="text">
                                             <?php if ($text_orange):?><span
                                                 style="color: #e7a736;"><?php echo $text_orange;?></span><br><?php endif;?>
                                             <?php if ($text_gray):?><?php echo $text_gray;?><?php endif;?>
                                         </div>
                                     </div>
                                     <?php endif;?>
                                     <?php
                                    $parameter_settings = get_field('parameters_settings',$single_featured->ID);
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
                                         <a href="<?php echo get_permalink($single_featured->ID);?>"
                                             class="button"><?php echo $BORN_FRAMEWORK->Options->Get('go_to_profile' . $lang_code);?></a>
                                     </div>
                                 </div>
                                 <div class="cta">
                                     <a href="<?php echo get_field('main_link',$single_featured->ID);?>"
                                         class="button"><?php echo $BORN_FRAMEWORK->Options->Get('play' . $lang_code);?></a>
                                 </div>
                             </div>

                         </div>
                     </div>

                 </div>

             </div>
             <?php endif;?>
         </div>
     </div>
 </div>

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
    ?>

 </div>

 <?php if (get_field('show_feedback_form',get_the_ID())):?>
 <?php get_template_part('layout/partials/feedback','',array('id' => get_the_ID()));?>
 <?php endif;?>
 <script>
jQuery('.report-form').on('submit', function(e) {

    e.preventDefault();

    if (jQuery(this).find('.report-text').val().length === 0) {

    } else {

        var data = jQuery(this).serialize();

        e.preventDefault();
        jQuery.modal.close();
        jQuery.ajax({
            data: {
                action: 'report_form',
                value: data,
            },
            type: 'post',
            url: jQuery(this).attr('action'),
            success: function(data) {

                //var returnedData = JSON.parse(data);

            }
        });

    }

});
 </script>

 <?php get_footer(); ?>