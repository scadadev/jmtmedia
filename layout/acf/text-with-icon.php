<?php if (!defined('WPINC')) die; ?>
<?php
$elements = get_sub_field('text_with_icon_elements');

?>
<?php if ($elements):?>
<?php foreach ($elements as $element):?>

<div class="aff-text-icon">
    <div class="born-container is-wide">
        <div class="inner">
            <?php if ($element['icon']):?>
                <div class="icon">
                    <?php
                    echo wp_get_attachment_image($element['icon'], 'icons-small-avatar-100');
                    // echo born_acf_image($element['icon'],'icons-small-avatar-100',true);
                    ?>
                </div>
            <?php endif;?>

            <div class="content">
                <h2><?php echo $element['title'];?></h2>
                <?php echo $element['text'];?>
            </div>
        </div>
    </div>
</div>

<?php endforeach;?>
<?php endif;?>
