<?php if (!defined('WPINC')) die; ?>
<?php
global $BORN_FRAMEWORK;
$lang_code = born_get_current_language_code();
$block_title = $BORN_FRAMEWORK->Options->Get('table_of_contents_' . $lang_code);
?>

<div class="aff-custom-menu aff-page-menu">
    <div class="">
        <div class="inner">
            <!-- <h2><?php // echo $block_title; 
                        ?></h2> -->
            <div class="content">
                <div class="menu custom-sroll-bar">
                    <ul class="born-reset">
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    jQuery(function() {
        var list = jQuery('.aff-custom-menu ul'),
            anchors = [];

        jQuery(".can-anchor h2").each(function(i, v) {
            var id = 'menu-element-' + i;
            jQuery(this).parents('[class^="aff-"]').addClass('scrolled-for-elem');
            var text = jQuery(this).text();
            anchors.push({
                id: id,
                anchor: text.replace(/'/g, "&#39;"),
                slug: null
            });

            jQuery(this).addClass(id);
        });

        jQuery(window).on('scroll', function() {


            var anchor = jQuery(".can-anchor h2");
            anchor.each(function(i, el) {
                var top = jQuery(this).parents('[class^="aff-"]').offset().top - 100;
                var bottom = top + jQuery(this).outerHeight();
                var scroll = jQuery(window).scrollTop();
                var id = jQuery(this).attr('id');
                if (scroll > top && scroll < bottom) {
                    console.log(id);
                    jQuery('a.active').removeClass('active');
                    jQuery('a[href="#' + id + '"]').addClass('active');

                }

            });

        });

        if (anchors.length) {
            jQuery.post(theme_params.ajaxurl, {
                    action: 'get_menu_slugs',
                    anchors: anchors
                })
                .done(function(response) {
                    if (response.data.length) {
                        //   console.log(response.data);
                        for (let i = 0; i < response.data.length; i++) {
                            jQuery(list).append('<li><a href="#' + response.data[i].slug + '">' + response.data[
                                i].anchor + '</a></li>');
                            //jQuery('.'+ response.data[i].id).prepend('<a name="' + response.data[i].slug + '"></a>');
                            jQuery('.' + response.data[i].id).attr('id', response.data[i].slug);
                            console.log(jQuery('.' + response.data[i].id).attr('id'));
                        }

                    }
                });
        }

        jQuery(document).on('click', '.aff-custom-menu.aff-page-menu a', function() {

            jQuery.each(jQuery('.aff-custom-menu.aff-page-menu a'), function(i, v) {
                jQuery(v).removeClass('active');
            });
            jQuery(this).addClass('active');
        });


        // fixed nav
        // var objToStick = jQuery(".aff-custom-menu.aff-page-menu");
        // var topOfObjToStick = jQuery(objToStick).offset().top;

        // jQuery(window).scroll(function() {
        //     var windowScroll = jQuery(window).scrollTop();
        //     if (windowScroll > topOfObjToStick) {
        //         jQuery(objToStick).addClass("fixed");
        //     } else {
        //         jQuery(objToStick).removeClass("fixed");
        //     };
        // });



        var element = jQuery(".aff-custom-menu.aff-page-menu");
        var height_el = element.offset().top;
        var element_stop = jQuery(".aff-footer");
        var height_el_stop = element_stop.offset().top;

        // jQuery(".aff-page-wrapper").css({
        //     "width": element.outerWidth(),
        //     "height": element.outerHeight()
        // });

        jQuery(window).scroll(function() {

            if (jQuery(window).scrollTop() > height_el_stop - element.outerHeight() - 20) {

                element.css({
                    "top": element.offset().top,
                    "left": element.offset().left
                }).removeClass("fixed").addClass("absolute");

            } else {

                if (jQuery(window).scrollTop() > height_el) {

                    element.addClass("fixed").removeClass("absolute").attr("style", "");

                } else {

                    element.removeClass("fixed absolute").attr("style", "");

                }

            }

        });


        // $sections.each(function(i, el) {

        //     var top = jQuery(this).offset().top - 100;
        //     var bottom = top + jQuery(this).outerHeight();
        //     var scroll = jQuery(window).scrollTop();
        //     var id = jQuery(this).find('h2').attr('id');
        //     console.log(id);
        //     if (scroll > top && scroll < bottom) {
        //         console.log(id);
        //         jQuery('a.active').removeClass('active');
        //         jQuery('a[href="#' + id + '"]').addClass('active');

        //     }
        // })


    });
</script>