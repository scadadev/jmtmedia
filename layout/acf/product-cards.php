<?php if (!defined('WPINC')) die; ?>
<?php
$title = get_sub_field('title');
$type = get_sub_field('type');
$products = get_sub_field('cards');
global $BORN_FRAMEWORK;
$lang_code = born_get_current_language_code();
?>

<div class="aff-main-items-grid">

    <?php if ($title):?>
    <div class="title can-anchor">
        <div class="born-container is-wide">
            <h2><?php echo $title;?></h2>
        </div>
    </div>
    <?php endif;?>

    <div class="born-container is-wide">
        <div class="items-grid">
            <?php foreach ($products as $product):?>
                <?php
                switch ($type) {
                    case 'bg':
                        $class = 'has-image-bg';
                        break;
                    case 'white':
                        $class = 'is-light';
                        break;
                    default:
                        $class = '';
                }
                ?>

                <?php
                $text_gray = get_field('text_gray',$product->ID);
                $text_orange= get_field('text_orange',$product->ID);
                ?>
                <div class="item <?php echo $class;?>">

                    <?php get_template_part('layout/partials/label','',array('id' => $product->ID));?>
                    <?php get_template_part('layout/partials/favorites','',array('id' => $product->ID));?>
                    <div class="data" <?php if ($type == 'bg' &&  get_post_thumbnail_id($product->ID)):?>style="background-image: url(<?php echo born_acf_image(get_post_thumbnail_id($product->ID),'cards-img',false);?>)"<?php endif;?>>
                        <div class="row">
                            <div class="logo">
                                <a href="<?php echo get_permalink($product->ID);?>" class="image">
                                    <?php
                                    echo wp_get_attachment_image(get_field('logo', $product->ID), 'icons-large');
                                    //echo born_acf_image(get_field('logo',$product->ID),'icons-large',true);
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
                    <?php if ($type != 'nostats'):?>
                    <div class="details">
                        <?php if ($text_gray || $text_orange):?>
                            <div class="desc">
                                <div class="text">
                                    <?php if ($text_orange):?><span style="color: #e7a736;"><?php echo $text_orange;?></span><br><?php endif;?> <?php if ($text_gray):?><?php echo $text_gray;?><?php endif;?>
                                </div>
                            </div>
                        <?php endif;?>


                        <?php
                        $parameter_settings = get_field('parameters_settings',$product->ID);
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
                            <a href="<?php echo get_permalink($product->ID);?>" class="button"><?php echo $BORN_FRAMEWORK->Options->Get('go_to_profile'.$lang_code);?></a>
                        </div>
                    </div>
                    <?php endif;?>
                    <?php if (get_field('main_link',$product->ID)):?>
                    <div class="cta">
                        <a href="<?php echo get_field('main_link',$product->ID);?>" target="_blank" class="button"><?php echo $BORN_FRAMEWORK->Options->Get('play'.$lang_code);?></a>
                    </div>
                    <?php endif;?>
                </div>

            <?php endforeach;?>


        </div>
    </div>

</div>