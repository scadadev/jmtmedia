<?php
global $born_options;
?>
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
        <a href="<?php the_permalink();?>">
            <?php echo $born_options['aff_read_more' . LANG_CODE] ?>
        </a>
    </div>
</div>
