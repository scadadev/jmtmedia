<?php if (!defined('WPINC')) die; ?>
<?php
global $BORN_FRAMEWORK;
$lang_code = born_get_current_language_code();

$products = get_sub_field('products');
$type = get_sub_field('type');

?>

<div class="aff-slots-wrapper">
<div class="aff-main-items-list <?php echo $type;?> <?php if ($type == 'is-ordered'):?>is-narrow<?php endif;?>">

    <div class="items-list">

    <?php foreach ($products as $product):?>

        <?php foreach ($product['select_product'] as $p):?>

            <?php
            $text_gray = get_field('text_gray',$p->ID);
            $text_orange= get_field('text_orange',$p->ID);
            ?>

            <div class="item">
                <div class="born-container is-wide">
                    <div class="content">
                        <div class="logo">
                            <a href="<?php echo get_permalink($p->ID); ?>" class="image">
                                <?php echo born_acf_image(get_field('logo', $p->ID), 'icons-large', true); ?>
                            </a>
                        </div>
                        <div class="data">
                            <div class="row">
                                <a href="<?php echo get_permalink($p->ID); ?>" class="name"><?php echo get_the_title($p->ID); ?></a>
                                <?php get_template_part('layout/partials/favorites','',array('id' => $p->ID));?>
                            </div>
                            <div class="row">
                                <?php get_template_part('layout/partials/rating','',array('id' => $p->ID));?>
                            </div>
                        </div>

                        <?php if ($text_gray || $text_orange):?>
                            <div class="desc">
                                <div class="text">
                                    <?php if ($text_orange):?><span style="color: #e7a736;"><?php echo $text_orange;?></span><br><?php endif;?> <?php if ($text_gray):?><?php echo $text_gray;?><?php endif;?>
                                </div>
                            </div>
                        <?php endif;?>

                        <?php if ($product['feature_1'] || $product['feature_2'] || $product['feature_3']):?>
                        <div class="extra-info">
                            <ul class="info-list">
                                <?php if ($product['feature_1']):?>
                                <li class="info-item"><?php echo $product['feature_1'];?></li>
                                <?php endif;?>
                                <?php if ($product['feature_2']):?>
                                <li class="info-item"><?php echo $product['feature_2'];?></li>
                                <?php endif;?>
                                <?php if ($product['feature_3']):?>
                                <li class="info-item"><?php echo $product['feature_3'];?></li>
                                <?php endif;?>
                            </ul>
                        </div>
                        <?php endif;?>

                        <div class="cta">
                            <a href="<?php echo get_field('main_link',$p->ID);?>" target="_blank" class="button" rel="nofollow noopener"><?php echo $BORN_FRAMEWORK->Options->Get('go_to_profile'.$lang_code);?></a>
                            <a href="<?php echo get_permalink($p->ID);?>" class="text"><?php echo $BORN_FRAMEWORK->Options->Get('read_reviews'.$lang_code);?></a>
                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach;?>

    <?php endforeach;?>

    </div>

</div>
</div>