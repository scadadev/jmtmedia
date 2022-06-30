<?php
global $born_options;

global $BORN_FRAMEWORK;
$lang_code = born_get_current_language_code();
?>
<div class="game-card">
    <div class="image">
        <a href="<?php echo get_permalink();?>"><?php if (get_post_thumbnail_id()):?>
                <?php echo born_acf_image(get_post_thumbnail_id(),'game-thumb',true);?>
        <?php endif;?></a>
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
        <a href="<?php echo get_permalink();?>" class="button">
            <?php echo $born_options['aff_read_more_games' . LANG_CODE] ?>
        </a>
    </div>
</div>
