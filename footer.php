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

        <div class="footer-text-block">
            <?php
            global $BORN_FRAMEWORK;
            $wrap_foo = $BORN_FRAMEWORK->Options->Get('foo_' . $lang_code);
            echo wpautop($wrap_foo);
            ?>
        </div>
        <div class="footer-logos">
            <div class="footer-logos-inner">
            <?php
                $foo_gallery = [];       
                if(!empty($BORN_FRAMEWORK->Options->Get('foo_logo_repeater'))) {
                    for( $i=0; $i<count($BORN_FRAMEWORK->Options->Get('foo_logo_repeater')['foo_logo']); $i++ ) {
                        if( !empty($BORN_FRAMEWORK->Options->Get('foo_logo_repeater')['foo_logo'][$i]) ) {
                            $foo_gallery[] = [
                                'f_img' => $BORN_FRAMEWORK->Options->Get('foo_logo_repeater')['foo_logo'][$i],
                                'f_link' => $BORN_FRAMEWORK->Options->Get('foo_logo_repeater')['foo_logo_link'][$i],
                            ];
                        }
                    }
                }
                foreach($foo_gallery as $item) : ?>
                   <?php if ($item['f_link']):?> <a href="<?php echo $item['f_link'] ?>" target="_blank">
                    <?php echo wp_get_attachment_image($item['f_img']['id'], 'full'); ?>
                    </a>
                    <?php else: ?>
                        <?php echo wp_get_attachment_image($item['f_img']['id'], 'full'); ?>
                    <?php endif;?>

                <?php endforeach; ?>
            </div>
        </div>

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

            <div class="social-links">
            <?php if ($BORN_FRAMEWORK->Options->Get('soc_fb')):?>
                    <a href="<?php echo $BORN_FRAMEWORK->Options->Get('soc_fb');?>" target="_blank"> <svg width="9" height="16" viewBox="0 0 9 16" fill="#fff" xmlns="http://www.w3.org/2000/svg">
<path  d="M2.40625 16H5.34375V8.84375H7.625L8 6H5.34375V4.03125C5.34375 3.59375 5.40625 3.25 5.59375 3.03125C5.78125 2.78125 6.1875 2.65625 6.75 2.65625H8.25V0.125C7.6875 0.0625 6.9375 0 6.0625 0C4.9375 0 4.0625 0.34375 3.40625 1C2.71875 1.65625 2.40625 2.5625 2.40625 3.75V6H0V8.84375H2.40625V16Z" />
</svg></a>
                <?php endif;?>
                <?php if ($BORN_FRAMEWORK->Options->Get('soc_tw')):?>
                    <a href="<?php echo $BORN_FRAMEWORK->Options->Get('soc_tw');?>" target="_blank">
                    <svg width="17" height="13" viewBox="0 0 17 13" fill="#fff" xmlns="http://www.w3.org/2000/svg"><path  d="M14.5938 3.25C15.2188 2.78125 15.7812 2.21875 16.25 1.53125C15.625 1.8125 15 2 14.375 2.0625C15.0625 1.625 15.5625 1.03125 15.8125 0.25C15.1562 0.625 14.4688 0.90625 13.7188 1.03125C13.4062 0.71875 13.0312 0.46875 12.625 0.28125C12.2188 0.09375 11.7812 0 11.3125 0C10.7188 0 10.1875 0.15625 9.6875 0.4375C9.1875 0.75 8.78125 1.15625 8.5 1.65625C8.1875 2.15625 8.0625 2.71875 8.0625 3.28125C8.0625 3.53125 8.0625 3.78125 8.125 4.03125C6.78125 3.96875 5.53125 3.65625 4.34375 3.03125C3.15625 2.4375 2.1875 1.625 1.375 0.59375C1.0625 1.125 0.90625 1.6875 0.90625 2.25C0.90625 2.8125 1.03125 3.34375 1.3125 3.8125C1.5625 4.3125 1.9375 4.6875 2.375 5C1.84375 5 1.34375 4.84375 0.90625 4.5625V4.625C0.90625 5.40625 1.15625 6.09375 1.65625 6.6875C2.15625 7.3125 2.78125 7.6875 3.53125 7.84375C3.21875 7.90625 2.9375 7.9375 2.65625 7.9375C2.46875 7.9375 2.25 7.9375 2.0625 7.90625C2.25 8.5625 2.625 9.09375 3.1875 9.53125C3.75 9.96875 4.375 10.1562 5.125 10.1562C3.90625 11.0938 2.53125 11.5625 1.03125 11.5625C0.71875 11.5625 0.46875 11.5625 0.25 11.5312C1.75 12.5312 3.4375 13 5.28125 13C7.1875 13 8.875 12.5312 10.375 11.5312C11.7188 10.6562 12.7812 9.5 13.5312 8C14.25 6.625 14.625 5.15625 14.625 3.65625C14.625 3.46875 14.5938 3.34375 14.5938 3.25Z" /></svg>
                </a>
                <?php endif;?>
                <?php if ($BORN_FRAMEWORK->Options->Get('soc_insta')):?>
                    <a href="<?php echo $BORN_FRAMEWORK->Options->Get('soc_insta');?>" target="_blank"><svg width="17" height="16" viewBox="0 0 17 16" fill="#fff" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M11.5726 0C12.9274 0 14.121 0.451613 14.9597 1.32258C15.7984 2.16129 16.25 3.32258 16.25 4.67742V11.3226C16.25 12.7097 15.7984 13.9032 14.9274 14.7419C14.0887 15.5484 12.9274 16 11.5403 16H4.95968C3.6371 16 2.47581 15.5806 1.60484 14.7419C0.701613 13.871 0.25 12.6774 0.25 11.2903V4.67742C0.25 1.87097 2.12097 0 4.92742 0H11.5726ZM13.8952 13.6774C14.4758 13.129 14.8306 12.3226 14.8306 11.3226V4.67742C14.8306 3.74193 14.5081 2.93548 13.9597 2.35484C13.379 1.77419 12.5726 1.48387 11.6048 1.48387H4.95968C3.99194 1.48387 3.15323 1.77419 2.60484 2.32258C2.02419 2.90323 1.73387 3.70968 1.73387 4.67742V11.2903C1.73387 12.2903 2.02419 13.0968 2.60484 13.6774C3.18548 14.2258 3.99194 14.5161 4.95968 14.5161H11.5403C12.5081 14.5161 13.3145 14.2258 13.8952 13.6774ZM12.54 4.67736C13.0566 4.67736 13.4755 4.25853 13.4755 3.74188C13.4755 3.22523 13.0566 2.8064 12.54 2.8064C12.0233 2.8064 11.6045 3.22523 11.6045 3.74188C11.6045 4.25853 12.0233 4.67736 12.54 4.67736ZM8.25013 3.83862C5.99206 3.83862 4.12109 5.67733 4.12109 7.96765C4.12109 10.258 5.9598 12.0967 8.25013 12.0967C10.5404 12.0967 12.3792 10.2257 12.3792 7.96765C12.3792 5.70959 10.5082 3.83862 8.25013 3.83862ZM8.25013 10.6128C6.79851 10.6128 5.60496 9.41927 5.60496 7.96765C5.60496 6.51604 6.79851 5.32249 8.25013 5.32249C9.70174 5.32249 10.8953 6.51604 10.8953 7.96765C10.8953 9.41927 9.70174 10.6128 8.25013 10.6128Z" />
</svg></a>
                <?php endif;?>
                <?php if ($BORN_FRAMEWORK->Options->Get('soc_yout')):?>
                    <a href="<?php echo $BORN_FRAMEWORK->Options->Get('soc_yout');?>" target="_blank"><svg width="17" height="12" viewBox="0 0 17 12" fill="#fff" xmlns="http://www.w3.org/2000/svg">
<path  d="M15.9238 1.75781C16.041 2.28516 16.1582 3.10547 16.2168 4.16016L16.2461 5.625L16.2168 7.08984C16.1582 8.20312 16.041 8.99414 15.9238 9.52148C15.8066 9.87305 15.6309 10.166 15.3965 10.4004C15.1328 10.6641 14.8398 10.8398 14.4883 10.9277C13.9609 11.0742 12.7891 11.1621 10.9141 11.2207L8.24805 11.25L5.58203 11.2207C3.70703 11.1621 2.50586 11.0742 2.00781 10.9277C1.65625 10.8398 1.33398 10.6641 1.09961 10.4004C0.835938 10.166 0.660156 9.87305 0.572266 9.52148C0.425781 8.99414 0.337891 8.20312 0.279297 7.08984L0.25 5.625C0.25 5.21484 0.25 4.7168 0.279297 4.16016C0.337891 3.10547 0.425781 2.28516 0.572266 1.75781C0.660156 1.40625 0.835938 1.11328 1.09961 0.849609C1.33398 0.615234 1.65625 0.439453 2.00781 0.322266C2.50586 0.205078 3.70703 0.0878906 5.58203 0.0292969L8.24805 0L10.9141 0.0292969C12.7891 0.0878906 13.9609 0.205078 14.4883 0.322266C14.8398 0.439453 15.1328 0.615234 15.3965 0.849609C15.6309 1.11328 15.8066 1.40625 15.9238 1.75781ZM6.60742 8.02734L10.7969 5.625L6.60742 3.25195V8.02734Z" />
</svg></a>
                <?php endif;?>
                <?php if ($BORN_FRAMEWORK->Options->Get('soc_in')):?>
                    <a href="<?php echo $BORN_FRAMEWORK->Options->Get('soc_in');?>" target="_blank"><svg width="20" height="18" viewBox="0 0 20 18" fill="white" xmlns="http://www.w3.org/2000/svg">
<path d="M4.04912 1.89474C4.04912 2.97552 3.22271 3.78947 2.13542 3.78947C1.04811 3.78947 0.234375 2.97552 0.234375 1.89474C0.234375 0.814737 1.04836 0 2.13567 0C3.22297 0 4.04912 0.814737 4.04912 1.89474ZM4.04912 5.68421H0.234376L0.236873 18H4.0439L4.04912 5.68421ZM10.7106 5.68421H6.90104V18H10.7106V11.4269C10.7106 7.77209 15.4725 7.47313 15.4725 11.4269V18H19.2845V10.0714C19.2845 3.90444 12.3741 4.06953 10.7106 7.10526V5.68421Z" />
</svg>
                    </a>
                <?php endif;?>
                <?php if ($BORN_FRAMEWORK->Options->Get('soc_tik')):?>
                    <a href="<?php echo $BORN_FRAMEWORK->Options->Get('soc_tik');?>" target="_blank"><svg width="14" height="17" viewBox="0 0 14 17" fill="#fff" xmlns="http://www.w3.org/2000/svg">
<path d="M14 6.5625C12.5938 6.59375 11.2812 6.15625 10.1562 5.34375V10.9375C10.1562 14.8438 5.90625 17.2812 2.53125 15.3438C-0.84375 13.375 -0.84375 8.5 2.53125 6.53125C3.5 5.96875 4.65625 5.75 5.78125 5.90625V8.71875C4.0625 8.15625 2.40625 9.6875 2.78125 11.4375C3.1875 13.1875 5.3125 13.875 6.65625 12.6562C7.125 12.2188 7.40625 11.5938 7.40625 10.9375V0H10.1562C10.1562 0.25 10.1562 0.46875 10.2188 0.71875C10.4062 1.75 11 2.65625 11.9062 3.21875C12.5 3.625 13.25 3.84375 14 3.84375V6.5625Z" />
</svg></a>
                <?php endif;?>
         
            </div>

        </div>
    </div>
</div>

</div>




<?php wp_footer(); ?>

</body>

</html>