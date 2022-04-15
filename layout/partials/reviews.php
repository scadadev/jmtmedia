<?php
global $BORN_FRAMEWORK;
$lang_code = born_get_current_language_code();

$args_user = array(
    'post_type' => 'product-reviews',
    'post_status' => array( 'publish', 'draft'),
    'numberposts' => -1,
    'meta_query'	=> array(
        'relation'		=> 'AND',
        array(
            'key'	 	=> 'review_user_id',
            'value'	  	=> get_current_user_id(),
            'compare' 	=> '=',
        ),
        array(
            'key'	  	=> 'review_product_id',
            'value'	  	=> get_the_ID(),
            'compare' 	=> '=',
        ),
    ),

);
$enable_unregistered = $BORN_FRAMEWORK->Options->Get('enable_unregistered_reviews');

$already_reviewed = get_posts($args_user);

$pending_review = false;


if ($already_reviewed){
    foreach ($already_reviewed as $user_review){
        if ($user_review->post_status == 'draft'){
            $pending_review = true;
            break;
        }elseif($user_review->post_status == 'publish'){
            $already_reviewed = true;
            break;
        }
    }
}else{
    $already_reviewed = false;
}



$args = array(
    'post_type' => 'product-reviews',
    'post_status' => 'publish',
    'posts_per_page' => 5,
    'meta_key' => 'review_product_id',
    'meta_value' => get_the_ID()

);

$reviews = new WP_Query($args);

$h2_ratings = get_field('ratings_after_h2_titles');

$login_page = get_permalink($BORN_FRAMEWORK->Options->Get('login_page'));
$registration_page = get_permalink($BORN_FRAMEWORK->Options->Get('registration_page'));

?>



<?php if (!is_user_logged_in() && !$enable_unregistered && $reviews->found_posts == 0):?>
<div class="aff-item-reviews" id="<?php echo $BORN_FRAMEWORK->Options->Get('sitelink_reviews'); ?>">
    <div class="born-container is-wide">
        <div class="content">

            <div class="title">
                <div class="content">
                    <h2><?php echo $BORN_FRAMEWORK->Options->Get('acc_reviews'.$lang_code);?></h2>

                    <?php if ($h2_ratings['reviews_rating']):?>
                        <?php echo product_title_rating($h2_ratings['reviews_rating']);?>
                    <?php endif;?>
                </div>
            </div>
            <div class="review-select">

                <div class="signup">
                    <div>
                        <a href="<?php echo $login_page;?>"><?php echo $BORN_FRAMEWORK->Options->Get('log_in'.$lang_code);?></a> or <a href="<?php echo $registration_page;?>"><?php echo $BORN_FRAMEWORK->Options->Get('sign_up'.$lang_code);?></a> <?php echo $BORN_FRAMEWORK->Options->Get('reviews_login_req'.$lang_code);?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php else:?>

<div class="aff-item-reviews" id="<?php echo $BORN_FRAMEWORK->Options->Get('sitelink_reviews'); ?>">
    <div class="born-container is-wide">
        <div class="content">

            <div class="title">
                <div class="content">
                    <h2><?php echo $BORN_FRAMEWORK->Options->Get('acc_reviews'.$lang_code);?></h2>

                    <?php if ($h2_ratings['reviews_rating']):?>
                        <?php echo product_title_rating($h2_ratings['reviews_rating']);?>
                    <?php endif;?>
                </div>
            </div>

            <div class="review-select">

                <?php if (!$pending_review && !$already_reviewed && is_user_logged_in() || $enable_unregistered):?>

                <div class="rating">

                    <div class="aff-rating-select">
                        <ul class="born-reset">
                            <li class="star is-rating-1" data-value="1">
                                <span>1</span>
                            </li>
                            <li class="star is-rating-2" data-value="2">
                                <span>2</span>
                            </li>
                            <li class="star is-rating-3" data-value="3">
                                <span>3</span>
                            </li>
                            <li class="star is-rating-4" data-value="4">
                                <span>4</span>
                            </li>
                            <li class="star is-rating-5" data-value="5">
                                <span>5</span>
                            </li>
                        </ul>
                    </div>

                </div>


                <div class="name">

                <?php
                $avatar = get_user_meta(get_current_user_id(), 'custom_avatar', true);
                ?>



                <?php if (!empty($avatar)): ?>
                    <?php
                    echo wp_get_attachment_image($avatar, 'icons-small-avatar');
                    //echo born_acf_image($avatar, 'icons-small-avatar', true);
                    ?>
                <?php else: ?>
                    <?php if ($BORN_FRAMEWORK->Options->Get('default_user_icon')): ?>
                        <?php
                        echo wp_get_attachment_image($BORN_FRAMEWORK->Options->Get('default_user_icon')['id'], 'icons-small-avatar');
                        //echo born_acf_image($BORN_FRAMEWORK->Options->Get('default_user_icon')['id'], 'icons-small-avatar', true);
                        ?>
                    <?php endif; ?>
                <?php endif; ?>


                    <span><?php echo $BORN_FRAMEWORK->Options->Get('rate_casino'.$lang_code);?></span>
                </div>

                <?php elseif(!is_user_logged_in() && !$enable_unregistered):?>

                    <div class="login">
                        <div>
                            <a href="<?php echo $login_page;?>"><?php echo $BORN_FRAMEWORK->Options->Get('log_in'.$lang_code);?></a> or <a href="<?php echo $registration_page;?>"><?php echo $BORN_FRAMEWORK->Options->Get('sign_up'.$lang_code);?></a> <?php echo $BORN_FRAMEWORK->Options->Get('reviews_login_req'.$lang_code);?>
                        </div>
                    </div>

                <?php endif;?>

                <div class="sorting">
                    <div class="label">
                        <?php echo $BORN_FRAMEWORK->Options->Get('sort_by'.$lang_code);?>
                    </div>
                    <ul class="born-reset">
                        <li class="has-dropdown">
                            <a href="#" class="dropdown-trigger">
                                <span><?php echo $BORN_FRAMEWORK->Options->Get('sort_by_date'.$lang_code);?></span>
                            </a>
                            <ul class="born-reset dropdown-content">
                                <li><a href="#" data-sortby="date"><?php echo $BORN_FRAMEWORK->Options->Get('sort_by_date'.$lang_code);?></a></li>
                                <li><a href="#" data-sortby="rating-desc"><?php echo $BORN_FRAMEWORK->Options->Get('sort_by_desc'.$lang_code);?></a></li>
                                <li><a href="#" data-sortby="rating-asc"><?php echo $BORN_FRAMEWORK->Options->Get('sort_by_asc'.$lang_code);?></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>





            <?php if ($reviews->found_posts > 0):?>

            <div class="reviews-list">



                <?php while ( $reviews->have_posts() ): $reviews->the_post();  ?>

                <?php
                    $avatar = get_user_meta(get_field('review_user_id'),'custom_avatar',true);
                    $rating = get_field('reviews_rated');
                    $positives = get_field('reviews_positives');
                    $negatives = get_field('reviews_negatives');
                    $userid = get_field('review_user_id');
                    ?>
                <div class="review <?php echo get_the_ID();?>" style="width: 100%;" data-rating="<?php echo $rating;?>" data-date="<?php echo get_post_timestamp();?>">


                    <?php if (get_field('review_user_id')):?>
                    <div class="author">
                        <div class="name">

                            <?php if (!empty($avatar)):?>
                                <?php
                                echo wp_get_attachment_image($avatar, 'icons-small-avatar');
                                //echo born_acf_image($avatar,'icons-small-avatar',true);
                                ?>
                            <?php else:?>
                                <?php if ($BORN_FRAMEWORK->Options->Get('default_user_icon')):?>
                                    <?php
                                    echo wp_get_attachment_image($BORN_FRAMEWORK->Options->Get('default_user_icon')['id'], 'icons-small-avatar');
                                    //echo born_acf_image($BORN_FRAMEWORK->Options->Get('default_user_icon')['id'], 'icons-small-avatar', true);
                                    ?>
                                <?php endif;?>
                            <?php endif;?>

                            <span><span><?php echo get_user_meta($userid,'first_name',true);?><?php echo get_user_meta($userid,'last_name',true);?></span></span>
                        </div>
                        <div class="rating" data-rating="<?php echo $rating;?>">
                            <div class="aff-rating rating-<?php echo $rating;?>">
                                <span class="tooltip"><?php echo $rating;?> / 5</span>
                            </div>
                        </div>
                    </div>
                    <?php else:?>

                        <div class="author">
                            <div class="name">


                                <?php if ($BORN_FRAMEWORK->Options->Get('default_user_icon')):?>
                                    <?php echo born_acf_image($BORN_FRAMEWORK->Options->Get('default_user_icon')['id'], 'icons-small-avatar', true); ?>
                                <?php endif;?>


                                <span><span><?php echo get_field('review_name');?></span></span>
                            </div>
                            <div class="rating" data-rating="<?php echo $rating;?>">
                                <div class="aff-rating rating-<?php echo $rating;?>">
                                    <span class="tooltip"><?php echo $rating;?> / 5</span>
                                </div>
                            </div>
                        </div>

                    <?php endif;?>

                    <?php if ($positives || $negatives):?>

                    <div class="data">
                        <?php if ($positives):?>
                        <div class="positive">
                            <div class="text">
                                <?php echo $positives;?>
                            </div>
                        </div>
                        <?php endif;?>
                        <?php if ($negatives):?>
                        <div class="negative">
                            <div class="text">
                                <?php echo $negatives;?>
                            </div>
                        </div>
                        <?php endif;?>
                        <div class="report">
                            <a href="#review-report" rel="modal:open"><?php echo $BORN_FRAMEWORK->Options->Get('report_problem' . $lang_code);?></a>
                        </div>

                        <div id="review-report" class="modal aff-report-modal">
                            <div class="heading">
                                <?php echo $BORN_FRAMEWORK->Options->Get('report_problem' . $lang_code);?>
                            </div>
                            <form class="report-form" action="<?php echo admin_url('admin-ajax.php');?>">
                                <?php wp_nonce_field('report_nonce', 'report_nonce'.get_the_ID()); ?>
                                <input type="hidden" name="id" value="<?php echo get_the_ID();?>">
                                <div class="input">
                                    <textarea name="report-text" class="report-text"></textarea>
                                </div>
                                <div class="cta">
                                   <!-- <a href="#" class="send">Send</a>-->
                                    <input type="submit" value="<?php echo $BORN_FRAMEWORK->Options->Get('report_problem_send' . $lang_code);?>">
                                </div>
                            </form>
                        </div>
                    </div>

                    <?php endif;?>

                </div>

                <?php endwhile;?>
                <?php wp_reset_postdata();?>


            </div>

                <?php if ($reviews->max_num_pages > 1):?>
                    <div class="load-more cta">
                        <a href="#" class="load-more-reviews button" data-max="<?php echo $reviews->max_num_pages;?>"><?php echo $BORN_FRAMEWORK->Options->Get('load_more' . $lang_code);?></a>
                    </div>
                <?php endif;?>

            <?php else:?>
                <div class="review-select noreviews">

                    <div class="inner">
                        <div>
                            <?php echo $BORN_FRAMEWORK->Options->Get('acc_no_reviews' . $lang_code);?>
                        </div>
                    </div>

                </div>
            <?php endif;?>

            <?php if ($pending_review):?>
            <div class="review-select">

                <div class="submit">
                    <div>
                        <?php echo $BORN_FRAMEWORK->Options->Get('reviews_pending' . $lang_code);?>
                    </div>
                </div>

            </div>
            <?php endif;?>




            <?php if ((!$already_reviewed && is_user_logged_in()) || ($enable_unregistered && !is_user_logged_in())):?>
            <div class="review-add">

                <div class="title">
                    <?php echo $BORN_FRAMEWORK->Options->Get('review_your' . $lang_code);?>
                </div>

                <form id="review-form" action="<?php echo admin_url('admin-ajax.php');?>">
                    <?php wp_nonce_field('reviews_nonce', 'reviews_nonce'); ?>
                    <input type="hidden" name="product-id" value="<?php echo get_the_ID();?>">

                    <div class="rating">

                        <input type="hidden" name="user-rating" id="user-rating" value="0">


                        <div class="aff-rating-select">
                            <ul class="born-reset">
                                <li class="star is-rating-1" data-value="1">
                                    <span>1</span>
                                </li>
                                <li class="star is-rating-2" data-value="2">
                                    <span>2</span>
                                </li>
                                <li class="star is-rating-3" data-value="3">
                                    <span>3</span>
                                </li>
                                <li class="star is-rating-4" data-value="4">
                                    <span>4</span>
                                </li>
                                <li class="star is-rating-5" data-value="5">
                                    <span>5</span>
                                </li>
                            </ul>
                        </div>

                    </div>

                    <div class="data">

                        <?php if ($enable_unregistered && !is_user_logged_in()):?>
                            <div class="form-group">
                                <div class="input-wrapper is-req">
                                    <div class="input-wrapper is-req review-name">
                                        <label for="review-name">Vārds</label>
                                        <input type="text" id="review-name" name="review-name" data-error="<?php echo $BORN_FRAMEWORK->Options->Get('form_req'.$lang_code);?>" required>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                        <?php endif;?>

                        <div class="positive is-row">
                            <div class="positive-label">
                                <div class="text">
                                    <?php echo $BORN_FRAMEWORK->Options->Get('review_like' . $lang_code);?>
                                </div>
                            </div>
                            <div class="input-wrapper">
                                <textarea name="reviews-positives"></textarea>
                            </div>
                        </div>
                        <div class="negative is-row">
                            <div class="negative-label">
                                <div class="text">
                                    <?php echo $BORN_FRAMEWORK->Options->Get('review_dislike' . $lang_code);?>
                                </div>
                            </div>
                            <div class="input-wrapper">
                                <textarea name="reviews-negatives"></textarea>
                            </div>
                        </div>
                        <div class="submit">
                            <!--<a href="#" class="button">Add review</a>-->
                            <input type="submit" value="<?php echo $BORN_FRAMEWORK->Options->Get('add_review' . $lang_code);?>">
                        </div>
                    </div>

                </form>

            </div>
            <div class="review-submitted" style="display: none;"><?php echo $BORN_FRAMEWORK->Options->Get('review_added' . $lang_code);?></div>
            <?php endif;?>

        </div>
    </div>
</div>
<script>

    jQuery('.sorting ul li a').click(function(e) {
        e.preventDefault();
       var sortby = jQuery(this).data('sortby');
       if (sortby === 'rating-desc') {
           jQuery('.reviews-list').isotope({ sortBy: 'rating',sortAscending: false })
       }else if(sortby === 'date'){
           jQuery('.reviews-list').isotope({ sortBy: 'date' })
       }else if(sortby === 'rating-asc'){
           jQuery('.reviews-list').isotope({ sortBy: 'rating',sortAscending: true })
       }

       jQuery('.sorting .dropdown-trigger').text(jQuery(this).text());

    });

    jQuery(window).on('load', function() {

        jQuery('.reviews-list').isotope({
            // options
            itemSelector: '.review',
            layoutMode: 'fitRows',
            getSortData: {
                rating: '[data-rating]',
                date: '[data-date]',
            }
        });
    });

</script>



<script src="<?php echo get_template_directory_uri(); ?>/assets/dist/js/form-validator.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/dist/js/reviews.js"></script>

<?php endif;?>