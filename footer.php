<?php
global $BORN_FRAMEWORK;

$lang_code = born_get_current_language_code();


$footer_btn_text = $BORN_FRAMEWORK->Options->Get('footer_btn_text' . $lang_code);
$footer_btn_link = $BORN_FRAMEWORK->Options->Get('footer_btn_link' . $lang_code);
$footer_copy = $BORN_FRAMEWORK->Options->Get('footer_copy' . $lang_code);


$footer_menu = born_render_menu(array(
    'theme_location' => 'footer-menu',
    'depth' => 1,
    'items_wrap' => '<ul class="born-reset">%3$s</ul>',
    'walker' => 'Born\Core\Walkers\Born_Main_Menu_Walker',
));

wp_reset_query();
?>
<?php if ( is_home() ):?>
    <?php if (get_field('enable_subscribe_block',get_option( 'page_for_posts' ))):?>
        <?php get_template_part('layout/partials/subscribe');?>
    <?php endif;?>
<?php else:?>
    <?php if (get_field('enable_subscribe_block')):?>
        <?php get_template_part('layout/partials/subscribe');?>
    <?php endif;?>
<?php endif;?>


<div class="aff-footer">
    <div class="born-container is-wide">
        <footer id="colophon" class="site-footer" role="contentinfo">

            <div class="col-full">

                <div class="footer-widgets row-1 col-4 fix">

                    <div class="block footer-widget-1">

                        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widget-1')) :endif;?>
                    </div>

                    <div class="block footer-widget-2">

                        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widget-2')) :endif;?>
                    </div>

                    <div class="block footer-widget-3">

                        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widget-3')) :endif;?>
                    </div>

                    <div class="block footer-widget-4">

                        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widget-4')) :endif;?>
                    </div>

                </div>

            </div>

        </footer>
    </div>
</div>

<div class="aff-copyright">
    <div class="born-container is-wide">
        <div class="content">
            <div class="copyright">
                <?php echo $BORN_FRAMEWORK->Options->Get('copyright' . $lang_code);?>
            </div>
            <div class="labels">

                <?php if ($BORN_FRAMEWORK->Options->Get('footer_logo_1')):?>
                    <?php echo wp_get_attachment_image($BORN_FRAMEWORK->Options->Get('footer_logo_1')['id'], 'medium'); ?>
                <?php endif;?>
                <?php if ($BORN_FRAMEWORK->Options->Get('footer_logo_2')):?>
                    <?php echo wp_get_attachment_image($BORN_FRAMEWORK->Options->Get('footer_logo_2')['id'], 'medium'); ?>
                <?php endif;?>
                <?php if ($BORN_FRAMEWORK->Options->Get('footer_logo_3')):?>
                    <?php echo wp_get_attachment_image($BORN_FRAMEWORK->Options->Get('footer_logo_3')['id'], 'medium'); ?>
                <?php endif;?>

            </div>
        </div>
    </div>
</div>

</div>




<?php wp_footer(); ?>

</body>
</html>

