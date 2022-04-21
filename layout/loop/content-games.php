<?php
global $born_options;
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
    <div class="cta">
        <a href="<?php echo get_permalink();?>" class="button">
            <?php echo $born_options['aff_read_more_games' . LANG_CODE] ?>
        </a>
    </div>
</div>
