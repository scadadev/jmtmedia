<?php if (!defined('WPINC')) die; ?>
<?php
$title = get_sub_field('title');
$text = get_sub_field('description');
$products = get_sub_field('products');
$bg = get_sub_field('background_image');
global $BORN_FRAMEWORK;
$lang_code = born_get_current_language_code();

if ($products):
?>


<div class="aff-compare has-parallax">
    <div class="born-container is-wide">

        <div class="content">

            <?php if ($title || $text):?>
            <div class="title can-anchor">
                <div class="born-container is-wide">
                    <div class="content">
                        <?php if ($title):?>
                        <h2><?php echo $title;?></h2>
                        <?php endif;?>
                        <?php if ($text):?>
                        <div class="desc">
                            <?php echo $text;?>
                        </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>
            <?php endif;?>

            <div class="compare">
                <div class="aff-main-items-grid">
                    <div class="items-grid">

                        <?php foreach ($products as $product):?>

                            <?php
                            $text_gray = get_field('text_gray',$product->ID);
                            $text_orange= get_field('text_orange',$product->ID);
                            ?>

                            <div class="item has-image-bg is-light">
                                <?php get_template_part('layout/partials/label','',array('id' => $product->ID));?>
                                <?php get_template_part('layout/partials/favorites','',array('id' => $product->ID));?>

                                <div class="data" <?php if (get_post_thumbnail_id($product->ID)):?>style="background-image: url(<?php echo born_acf_image(get_post_thumbnail_id($product->ID),'compare-img',false);?>)"<?php endif;?>>
                                    <div class="row">
                                        <div class="logo">
                                            <a href="<?php echo get_permalink($product->ID);?>" class="image">
                                                <?php
                                                echo wp_get_attachment_image(get_field('logo',$product->ID), 'icons-small-192');
                                                //echo born_acf_image(get_field('logo',$product->ID),'icons-small-192',true);
                                                ?>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <a href="<?php echo get_permalink($product->ID);?>" class="name"><?php echo get_the_title($product->ID);?></a>
                                    </div>
                                    <div class="row">
                                        <?php get_template_part('layout/partials/rating','',array('id' => $product->ID));?>
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
                                    $featured_settings = get_field('featured_positives_negatives',$product->ID);
                                    ?>

                                    <?php if (!empty($featured_settings['positives']) || !empty($featured_settings['negatives'])):?>

                                    <div class="aff-pros-cons">
                                        <ul class="born-reset">

                                            <?php foreach ($featured_settings['positives'] as $positive):?>

                                                <?php foreach ($positive as $p):?>
                                                    <li class="is-pro"><span><?php echo $p;?></span></li>
                                                <?php endforeach;?>

                                            <?php endforeach;?>

                                            <?php foreach ($featured_settings['negatives'] as $negatives):?>

                                                <?php foreach ($negatives as $n):?>
                                                    <li class="is-con"><span><?php echo $n;?></span></li>
                                                <?php endforeach;?>


                                            <?php endforeach;?>

                                        </ul>
                                    </div>

                                    <?php endif;?>

                                    <div class="cta">
                                        <a href="<?php echo get_permalink($product->ID);?>" class="button"><?php echo $BORN_FRAMEWORK->Options->Get('review_write'.$lang_code);?></a>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="<?php echo get_field('main_link',$product->ID);?>" target="_blank" class="button"><?php echo $BORN_FRAMEWORK->Options->Get('go_to_profile'.$lang_code);?></a>
                                </div>
                            </div>

                        <?php endforeach;?>



                    </div>
                </div>
            </div>

        </div>

    </div>

    <?php if ($bg):?>
    <div class="bg">
        <div class="image" style="background-image: url(<?php echo born_acf_image($bg,'full',false);?>);"></div>
    </div>
    <?php endif;?>

</div>

<?php endif;?>