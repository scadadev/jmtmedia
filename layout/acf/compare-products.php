<?php if (!defined('WPINC')) die; ?>
<?php
$title = get_sub_field('title');
$products = get_sub_field('products');
$parameters = get_sub_field('parameters');
$custom_parameters = get_sub_field('custom_parameters');
global $BORN_FRAMEWORK;
$lang_code = born_get_current_language_code();

?>

<div class="aff-main-items-table">

    <?php if ($title): ?>
        <div class="title can-anchor">
            <div class="born-container is-wide">
                <h2><?php echo $title; ?></h2>
            </div>
        </div>
    <?php endif; ?>

    <div class="aff-table">
        <table>
            <tbody>


            <tr class="heading heading-static">
                <td class="padding no-hover"></td>
                <td class="no-hover"></td>

                <?php foreach ($products as $product): ?>

                    <td>
                        <div class="data">
                            <div class="row">
                                <div class="logo">
                                    <a href="<?php echo get_permalink($product->ID); ?>" class="image">
                                        <?php echo born_acf_image(get_field('logo', $product->ID), 'icons-small-128', true); ?>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <a href="<?php echo get_permalink($product->ID); ?>"
                                   class="name"><?php echo get_the_title($product->ID); ?></a>
                            </div>
                            <div class="row">
                                <?php get_template_part('layout/partials/rating', '', array('id' => $product->ID)); ?>
                            </div>
                        </div>
                    </td>

                <?php endforeach; ?>

                <td class="padding no-hover"></td>
            </tr>

            <tr>
                <td class="padding no-hover"></td>
                <td class="label no-hover">
                    <div>
                        <?php echo $BORN_FRAMEWORK->Options->Get('prod_bonuses'.$lang_code);?>
                        <span class="info-marker">
                            <span class="icon"></span>
                            <span class="text">
                                <span class="close"></span>
                                <?php echo $BORN_FRAMEWORK->Options->Get('prod_bonuses_info'.$lang_code);?>
                            </span>
                        </span>
                    </div>
                </td>

                <?php foreach ($products as $product):
                    $text_gray = get_field('text_gray',$product->ID);
                    $text_orange= get_field('text_orange',$product->ID);
                    ?>
                <td>
                <span>
                    <span class="logo">
                        <a href="<?php echo get_permalink($product->ID); ?>" class="image">
                            <?php echo born_acf_image(get_field('logo', $product->ID), 'icons-small-128', true); ?>
                        </a>
                    </span>
                    <a href="<?php echo get_permalink($product->ID); ?>" class="name"><?php echo get_the_title($product->ID); ?></a>
                </span>

                    <?php if ($text_gray || $text_orange):?>
                        <div class="bonus">
                            <?php if ($text_orange):?><span style="color: #e7a736;"><?php echo $text_orange;?></span><br><?php endif;?> <?php if ($text_gray):?><?php echo $text_gray;?><?php endif;?>
                        </div>
                    <?php endif;?>

                </td>
                <?php endforeach; ?>

                <td class="padding no-hover"></td>
            </tr>


            <?php if ($custom_parameters):?>

                <?php foreach ($custom_parameters as $parameter):?>
            <tr>
                <td class="padding no-hover"></td>



                    <td class="label no-hover">
                        <div>
                            <?php echo $parameter['title'];?>
                        </div>
                    </td>

                    <?php if ($parameter['checked_1'] && $products[0]):?>

                    <td>
                        <span>
                            <span class="logo">
                                <a href="<?php echo get_permalink($products[0]->ID); ?>" class="image">
                                    <?php echo born_acf_image(get_field('logo', $products[0]->ID), 'icons-small-128', true); ?>
                                </a>
                            </span>
                            <a href="<?php echo get_permalink($products[0]->ID); ?>" class="name"><?php echo get_the_title($products[0]->ID); ?></a>
                        </span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: #e7a736;
                                    }

                                    .cls-2 {
                                        fill: #fff;
                                        fill-rule: evenodd;
                                    }
                                </style>
                            </defs>
                            <circle class="cls-1" cx="18" cy="18" r="18"/>
                            <path id="Rounded_Rectangle_8" data-name="Rounded Rectangle 8" class="cls-2" d="M25.543,15.665L18.52,22.537a1.6,1.6,0,0,1-1.22.442,1.6,1.6,0,0,1-1.22-.442l-4.623-4.523a1.542,1.542,0,0,1,0-2.214,1.623,1.623,0,0,1,2.263,0l3.58,3.5,5.98-5.852a1.625,1.625,0,0,1,2.263,0A1.543,1.543,0,0,1,25.543,15.665Z"/>
                        </svg>
                    </td>

                    <?php else:?>

                        <?php if ($products[0]):?>
                        <td>
                        <span>
                            <span class="logo">
                                <a href="<?php echo get_permalink($products[0]->ID); ?>" class="image">
                                    <?php echo born_acf_image(get_field('logo', $products[0]->ID), 'icons-small-128', true); ?>
                                </a>
                            </span>
                            <a href="<?php echo get_permalink($products[0]->ID); ?>" class="name"><?php echo get_the_title($products[0]->ID); ?></a>
                        </span>
                        </td>
                        <?php endif;?>

                    <?php endif;?>

                    <?php if ($parameter['checked_2'] && $products[1]):?>

                        <td>
                        <span>
                            <span class="logo">
                                <a href="<?php echo get_permalink($products[1]->ID); ?>" class="image">
                                    <?php echo born_acf_image(get_field('logo', $products[1]->ID), 'icons-small-128', true); ?>
                                </a>
                            </span>
                            <a href="<?php echo get_permalink($products[1]->ID); ?>" class="name"><?php echo get_the_title($products[1]->ID); ?></a>
                        </span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: #e7a736;
                                        }

                                        .cls-2 {
                                            fill: #fff;
                                            fill-rule: evenodd;
                                        }
                                    </style>
                                </defs>
                                <circle class="cls-1" cx="18" cy="18" r="18"/>
                                <path id="Rounded_Rectangle_8" data-name="Rounded Rectangle 8" class="cls-2" d="M25.543,15.665L18.52,22.537a1.6,1.6,0,0,1-1.22.442,1.6,1.6,0,0,1-1.22-.442l-4.623-4.523a1.542,1.542,0,0,1,0-2.214,1.623,1.623,0,0,1,2.263,0l3.58,3.5,5.98-5.852a1.625,1.625,0,0,1,2.263,0A1.543,1.543,0,0,1,25.543,15.665Z"/>
                            </svg>
                        </td>

                    <?php else:?>

                        <?php if ($products[1]):?>
                        <td>
                        <span>
                            <span class="logo">
                                <a href="<?php echo get_permalink($products[1]->ID); ?>" class="image">
                                    <?php echo born_acf_image(get_field('logo', $products[1]->ID), 'icons-small-128', true); ?>
                                </a>
                            </span>
                            <a href="<?php echo get_permalink($products[1]->ID); ?>" class="name"><?php echo get_the_title($products[1]->ID); ?></a>
                        </span>
                        </td>
                        <?php endif;?>

                    <?php endif;?>

                    <?php if ($parameter['checked_3'] && $products[2]):?>

                        <td>
                        <span>
                            <span class="logo">
                                <a href="<?php echo get_permalink($products[2]->ID); ?>" class="image">
                                    <?php echo born_acf_image(get_field('logo', $products[2]->ID), 'icons-small-128', true); ?>
                                </a>
                            </span>
                            <a href="<?php echo get_permalink($products[2]->ID); ?>" class="name"><?php echo get_the_title($products[2]->ID); ?></a>
                        </span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: #e7a736;
                                        }

                                        .cls-2 {
                                            fill: #fff;
                                            fill-rule: evenodd;
                                        }
                                    </style>
                                </defs>
                                <circle class="cls-1" cx="18" cy="18" r="18"/>
                                <path id="Rounded_Rectangle_8" data-name="Rounded Rectangle 8" class="cls-2" d="M25.543,15.665L18.52,22.537a1.6,1.6,0,0,1-1.22.442,1.6,1.6,0,0,1-1.22-.442l-4.623-4.523a1.542,1.542,0,0,1,0-2.214,1.623,1.623,0,0,1,2.263,0l3.58,3.5,5.98-5.852a1.625,1.625,0,0,1,2.263,0A1.543,1.543,0,0,1,25.543,15.665Z"/>
                            </svg>
                        </td>

                    <?php else:?>

                        <?php if ($products[2]):?>
                        <td>
                        <span>
                            <span class="logo">
                                <a href="<?php echo get_permalink($products[2]->ID); ?>" class="image">
                                    <?php echo born_acf_image(get_field('logo', $products[2]->ID), 'icons-small-128', true); ?>
                                </a>
                            </span>
                            <a href="<?php echo get_permalink($products[2]->ID); ?>" class="name"><?php echo get_the_title($products[2]->ID); ?></a>
                        </span>
                        </td>
                        <?php endif;?>

                    <?php endif;?>

                    <?php if ($parameter['checked_4'] && $products[3]):?>

                        <td>
                        <span>
                            <span class="logo">
                                <a href="<?php echo get_permalink($products[3]->ID); ?>" class="image">
                                    <?php echo born_acf_image(get_field('logo', $products[3]->ID), 'icons-small-128', true); ?>
                                </a>
                            </span>
                            <a href="<?php echo get_permalink($products[3]->ID); ?>" class="name"><?php echo get_the_title($products[3]->ID); ?></a>
                        </span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: #e7a736;
                                        }

                                        .cls-2 {
                                            fill: #fff;
                                            fill-rule: evenodd;
                                        }
                                    </style>
                                </defs>
                                <circle class="cls-1" cx="18" cy="18" r="18"/>
                                <path id="Rounded_Rectangle_8" data-name="Rounded Rectangle 8" class="cls-2" d="M25.543,15.665L18.52,22.537a1.6,1.6,0,0,1-1.22.442,1.6,1.6,0,0,1-1.22-.442l-4.623-4.523a1.542,1.542,0,0,1,0-2.214,1.623,1.623,0,0,1,2.263,0l3.58,3.5,5.98-5.852a1.625,1.625,0,0,1,2.263,0A1.543,1.543,0,0,1,25.543,15.665Z"/>
                            </svg>
                        </td>

                    <?php else:?>

                        <?php if ($products[3]):?>
                        <td>
                        <span>
                            <span class="logo">
                                <a href="<?php echo get_permalink($products[3]->ID); ?>" class="image">
                                    <?php echo born_acf_image(get_field('logo', $products[3]->ID), 'icons-small-128', true); ?>
                                </a>
                            </span>
                            <a href="<?php echo get_permalink($products[3]->ID); ?>" class="name"><?php echo get_the_title($products[3]->ID); ?></a>
                        </span>
                        </td>
                        <?php endif;?>

                    <?php endif;?>






                <td class="padding no-hover"></td>
            </tr>
                <?php endforeach;?>

            <?php endif;?>


            <?php if ($parameters):?>

            <?php foreach ($parameters as $parameter):?>


                    <tr>
                        <td class="padding no-hover"></td>
                        <td class="label no-hover">
                            <div>
                                <?php echo $parameter->name;?>
                            </div>
                        </td>


                        <?php foreach ($products as $product):?>

                            <?php if (has_term($parameter->term_id, 'products-details', $product->ID)):?>

                                <td>
                                <span>
                                    <span class="logo">
                                        <a href="<?php echo get_permalink($product->ID); ?>" class="image">
                                    <?php echo born_acf_image(get_field('logo', $product->ID), 'icons-small-128', true); ?>
                                </a>
                                    </span>
                                    <a href="<?php echo get_permalink($product->ID); ?>" class="name"><?php echo get_the_title($product->ID); ?></a>
                                </span>
                                    <div>
                                    <?php
                                    $parameter_settings = get_field('details_settings',$product->ID);
                                    foreach ($parameter_settings as $par){

                                        foreach ($par as $p){
                                            if ($p['select_detail'] == $parameter->term_id){

                                                foreach ($p['detail_value'] as $details){

                                                    if ($details['link']){
                                                        echo '<a href="'.$details['link'].'">';
                                                    }

                                                    echo $details['text'] . ' ';

                                                    if ($details['link']){
                                                        echo '</a>';
                                                    }


                                                }

                                            }
                                        }

                                    }
                                    ?>
                                    </div>
                                </td>

                            <?php else:?>
                                <td></td>
                            <?php endif;?>

                        <?php endforeach;?>

                        <td class="padding no-hover"></td>
                    </tr>

            <?php endforeach;?>


            <?php endif;?>

            <tr>
                <td class="padding no-hover"></td>
                <td class="label no-hover">
                    <div>
                        <?php echo $BORN_FRAMEWORK->Options->Get('positive_reviews'.$lang_code);?>
                    </div>
                </td>

                <?php foreach ($products as $product): ?>

                    <?php
                    $positive_count = get_field('total_positive_reviews',$product->ID);
                    if (!$positive_count){
                        $positive_count = 0;
                    }
                    ?>
                    <td>
                        <span>
                            <span class="logo">
                                <a href="<?php echo get_permalink($product->ID); ?>" class="image">
                                    <?php echo born_acf_image(get_field('logo', $product->ID), 'icons-small-128', true); ?>
                                </a>
                            </span>
                            <a href="<?php echo get_permalink($product->ID); ?>" class="name"><?php echo get_the_title($product->ID); ?></a>
                        </span>
                        <div class="aff-stats">
                            <a href="#" class="favorites"><?php echo $positive_count;?></a>
                        </div>
                    </td>

                <?php endforeach;?>


                <td class="padding no-hover"></td>
            </tr>

            <tr>
                <td class="padding no-hover"></td>
                <td class="label no-hover">
                    <div>
                        <?php echo $BORN_FRAMEWORK->Options->Get('negative_reviews'.$lang_code);?>
                        <span class="info-marker">
                            <span class="icon"></span>
                            <span class="text">
                                <span class="close"></span>
                                <?php echo $BORN_FRAMEWORK->Options->Get('negative_reviews_info'.$lang_code);?>
                            </span>
                        </span>
                    </div>
                </td>

                <?php foreach ($products as $product): ?>

                    <?php
                    $negative_count = get_field('total_negative_reviews',$product->ID);
                    if (!$negative_count){
                        $negative_count = 0;
                    }
                    ?>


                    <td>
                        <span>
                            <span class="logo">
                                <a href="<?php echo get_permalink($product->ID); ?>" class="image">
                                    <?php echo born_acf_image(get_field('logo', $product->ID), 'icons-small-128', true); ?>
                                </a>
                            </span>
                            <a href="<?php echo get_permalink($product->ID); ?>" class="name"><?php echo get_the_title($product->ID); ?></a>
                        </span>
                        <div class="aff-stats">
                            <a href="#" class="dislikes"><?php echo $negative_count;?></a>
                        </div>
                    </td>

                <?php endforeach;?>
                <td class="padding no-hover"></td>
            </tr>

            <tr>
                <td class="padding no-hover"></td>
                <td class="label no-hover">
                    <div>
                        <?php echo $BORN_FRAMEWORK->Options->Get('screenshot'.$lang_code);?>
                    </div>
                </td>

                <?php foreach ($products as $product): ?>

                    <td>
                        <span>
                            <span class="logo">
                                <a href="<?php echo get_permalink($product->ID); ?>" class="image">
                                    <?php echo born_acf_image(get_field('logo', $product->ID), 'icons-small-128', true); ?>
                                </a>
                            </span>
                            <a href="<?php echo get_permalink($product->ID); ?>" class="name"><?php echo get_the_title($product->ID); ?></a>
                        </span>

                        <?php if (get_post_thumbnail_id($product->ID)):?>

                            <div>
                                <?php
                                    $thumbnail_id = get_post_thumbnail_id($product->ID);
                                    if($thumbnail_id) {

                                        $scrolldown = [
                                            'link' => get_field('scrolldown_cta_button_link', $product->ID),
                                            'logo' => wp_get_attachment_url(get_field('logo', $product->ID)),
                                            'title' => get_field('cta_title', $product->ID),
                                            'btn' => get_field('scrolldown_cta_button_text', $product->ID),
                                        ];

                                        echo '<a href="'. wp_get_attachment_url($thumbnail_id) .'" rel="gallery-1" class="compare-gallery" data-bot-link="'. esc_attr(json_encode($scrolldown)) .'">';
                                    }
                                    echo born_acf_image($thumbnail_id,'compare-img',true);
                                    if($thumbnail_id) {
                                        echo '</a>';
                                    }
                                ?>
                            </div>

                        <?php endif;?>

                    </td>

                <?php endforeach;?>

                <td class="padding no-hover"></td>
            </tr>

            <tr class="tfoot">
                <td class="padding no-hover"></td>
                <td class="no-hover"></td>

                <?php foreach ($products as $product): ?>

                    <td>
                        <span>
                            <span class="logo">
                                <a href="<?php echo get_permalink($product->ID); ?>" class="image">
                                    <?php echo born_acf_image(get_field('logo', $product->ID), 'icons-small-128', true); ?>
                                </a>
                            </span>
                            <a href="<?php echo get_permalink($product->ID); ?>" class="name"><?php echo get_the_title($product->ID); ?></a>
                        </span>
                        <div>
                            <a href="<?php echo get_field('main_link',$product->ID);?>" target="_blank" class="button"><?php echo $BORN_FRAMEWORK->Options->Get('go_to_profile'.$lang_code);?></a>
                            <a href="<?php echo get_permalink($product->ID); ?>" class="link"><?php echo $BORN_FRAMEWORK->Options->Get('write_review'.$lang_code);?></a>
                        </div>
                    </td>

                <?php endforeach;?>


                <td class="padding no-hover"></td>
            </tr>

            </tbody>
        </table>
    </div>

    <div class="aff-bottom-cta compare-cta hide" id="compare_cta_block">
        <span class="close aff-bottom-close">
            <svg role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M193.94 256L296.5 153.44l21.15-21.15c3.12-3.12 3.12-8.19 0-11.31l-22.63-22.63c-3.12-3.12-8.19-3.12-11.31 0L160 222.06 36.29 98.34c-3.12-3.12-8.19-3.12-11.31 0L2.34 120.97c-3.12 3.12-3.12 8.19 0 11.31L126.06 256 2.34 379.71c-3.12 3.12-3.12 8.19 0 11.31l22.63 22.63c3.12 3.12 8.19 3.12 11.31 0L160 289.94 262.56 392.5l21.15 21.15c3.12 3.12 8.19 3.12 11.31 0l22.63-22.63c3.12-3.12 3.12-8.19 0-11.31L193.94 256z"></path></svg>
        </span>
        <div class="content">
            <div class="icon" id="compare_cta_icon">
                <a href="#" target="_blank" class="image"></a>
            </div>
            <div class="name" id="compare_cta_name"></div>
            <div class="cta" id="compare_cta_cta"></div>
        </div>
    </div>

</div>