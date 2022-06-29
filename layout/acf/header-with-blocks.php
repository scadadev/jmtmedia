<?php if (!defined('WPINC')) die; ?>
<?php
$title = get_sub_field('title');
$text = get_sub_field('text');
$text_expanded = get_sub_field('text_expanded');
$background_image = get_sub_field('background_image');
$content_starts_from_top = get_sub_field('content_starts_from_top');
$blocks = get_sub_field('blocks');
$background_image = get_sub_field('background_image');
$is_standalone = get_sub_field('is_standalone');


global $BORN_FRAMEWORK;
$lang_code = born_get_current_language_code();
?>

<div class="aff-header-title has-parallax <?php if ($is_standalone):?>is-standalone<?php endif;?> <?php if ($blocks):?>has-bottom-cards has-<?php echo count($blocks);?>-cards <?php endif;?>" <?php if (!$content_starts_from_top):?>style="margin-top: 0;" <?php endif;?>>
    <div class="bg-wrapper">
        <div class="born-container is-wide">
            <div class="container">
                <div class="title">
                    <h1><?php echo $title;?></h1>
                    <?php if ($text):?>
                    <div class="desc">
                        <?php echo $text;?>
                    </div>
                    <?php endif;?>
                    <?php if ($text_expanded):?>
                    <div class="ffwd">
                        <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                            <span><?php echo $BORN_FRAMEWORK->Options->Get('learn_more'.$lang_code);?></span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="7" viewBox="0 0 12 7">
                                <path fill-rule="evenodd" d="M11.663,1.062l-5.794,5.8L5.8,6.789l-0.069.069-5.794-5.8L1.069-.069,5.8,4.663,10.531-.069Z"/>
                            </svg>
                        </a>
                        <div class="collapse collapsed" id="collapseExample">
                            <div class="content">
                                <?php echo $text_expanded;?>
                            </div>
                        </div>
                    </div>
                    
                    <?php endif;?>
                </div>
            </div>
        </div>
        <div class="bg">
            <?php if (get_sub_field('background_image')):?>
                <div class="image" style="background-image: url(<?php echo born_acf_image($background_image,'large',false);?>)"></div>
            <?php else:?>
                <?php if ($BORN_FRAMEWORK->Options->Get('header_bg_image')):?>
                <?php $bgimg = wp_get_attachment_image_url($BORN_FRAMEWORK->Options->Get('header_bg_image')['id'], 'full');                 
                endif;?>

                <div class="image" style="background-image: url(<?php echo $bgimg; ?>)">
                
            </div>
                
            <?php endif;?>        
        </div>
    </div>
</div>

<?php if ($blocks):?>

<div class="aff-shortcuts">
    <div class="born-container is-wide">
        <div class="items-grid">

            <?php foreach ($blocks as $block):?>

                <a <?php echo born_acf_link($block['block_link']);?> class="item <?php if($block['block_has_star']):?>has-star<?php endif;?>">
                    <svg class="star"
                         xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink"
                         width="28px" height="26px">
                        <path fill-rule="evenodd"
                              d="M27.161,10.114 C27.067,9.829 26.818,9.623 26.518,9.578 L18.086,8.369 L14.315,0.832 C14.181,0.563 13.904,0.394 13.601,0.394 C13.297,0.394 13.020,0.563 12.886,0.832 L9.115,8.369 L0.684,9.578 C0.384,9.623 0.134,9.829 0.041,10.114 C-0.053,10.398 0.025,10.711 0.242,10.920 L6.343,16.788 L4.903,25.074 C4.852,25.369 4.975,25.667 5.220,25.844 C5.359,25.943 5.523,25.993 5.689,25.993 C5.815,25.993 5.943,25.963 6.059,25.902 L13.601,21.990 L21.142,25.902 C21.411,26.042 21.736,26.018 21.981,25.844 C22.227,25.667 22.350,25.369 22.298,25.074 L20.858,16.788 L26.959,10.920 C27.176,10.711 27.255,10.398 27.161,10.114 Z"/>
                    </svg>
                    <span class="content" style="background-image: url(<?php echo born_acf_image($block['block_image'],'header-blocks',false);?>);">
                        <h2><?php echo $block['block_title'];?></h2>
                        <span></span>
                    </span>
                </a>

            <?php endforeach;?>


        </div>
    </div>
</div>
<?php endif;?>

<script>
    
    function resize() {
         if (jQuery(window).width() > 767) {
            jQuery('.aff-header-title + .aff-shortcuts').each(function(){
                var shortcutsHeight = jQuery(this).height();
                jQuery(this).css('margin-top', - shortcutsHeight / 2);
                jQuery(this).css('opacity', '1');
                jQuery('.aff-header-title.has-bottom-cards .container .title').css('padding-bottom', (shortcutsHeight / 2) + 50);
            });
        }
        else {
            jQuery('.aff-header-title + .aff-shortcuts').each(function(){
                jQuery(this).css('margin-top', '-20px');
                jQuery(this).css('opacity', '1');
            });
        }
    }
    jQuery(document).ready(function() {
        resize();
    });
    jQuery(window).on('resize', function() {
        resize();
    });
</script>