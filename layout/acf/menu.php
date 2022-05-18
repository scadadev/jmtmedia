<?php if (!defined('WPINC')) die; ?>
<?php
global $BORN_FRAMEWORK;
$lang_code = born_get_current_language_code();
$block_title = $BORN_FRAMEWORK->Options->Get('table_of_contents_'.$lang_code);
?>

<div class="aff-custom-menu aff-page-menu">
    <div class="born-container is-wide">
        <div class="inner">
            <h2><?php echo $block_title; ?></h2>
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
    jQuery(function () {
        var list = jQuery('.aff-custom-menu ul'),
            anchors = [];

        jQuery(".can-anchor h2").each(function (i,v) {
            var id = 'menu-element-' + i;

            anchors.push({
                id: id,
                anchor: jQuery(this).text(),
                slug: null
            });

            jQuery(this).addClass(id);
        });

        if( anchors.length ) {
            jQuery.post(theme_params.ajaxurl, {action:'get_menu_slugs', anchors:anchors})
            .done(function(response){
                if( response.data.length ) {
                    for( let i=0; i<response.data.length; i++ ) {
                        jQuery(list).append('<li><a href="#' + response.data[i].slug + '">' + response.data[i].anchor + '</a></li>');
                        //jQuery('.'+ response.data[i].id).prepend('<a name="' + response.data[i].slug + '"></a>');
                        jQuery('.'+ response.data[i].id).attr('id', response.data[i].slug);
                    }
                }
            });
        }

        jQuery('.aff-custom-menu.aff-page-menu a').on('click', function () {
            jQuery.each(jQuery('.aff-custom-menu.aff-page-menu a'), function (i, v) {
                jQuery(v).removeClass('active');
            });
            jQuery(this).addClass('active');
        });
    });
</script>