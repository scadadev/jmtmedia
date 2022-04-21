<?php
global $born_options;

$text_gray = get_field('text_gray');
$text_orange = get_field('text_orange');

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
            <a href="<?php echo get_permalink();?>" class="button"><?php echo $born_options['aff_go_to_profile' . LANG_CODE] ?></a>
        </div>
    </div>

    <?php if (get_field('main_link')):?>
        <div class="cta">
            <a href="<?php echo get_field('main_link');?>" class="button"><?php echo $born_options['aff_play' . LANG_CODE] ?></a>
        </div>
    <?php endif;?>
</div>
