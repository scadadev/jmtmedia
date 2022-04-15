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
        var list = jQuery('.aff-custom-menu ul');

        jQuery(".can-anchor h2").each(function () {

            var anchor = jQuery(this).text().replace(/\s+/g, '-');
            anchor = anchor.replace(".", "");
            anchor = anchor.replace("?", "");
            anchor = anchor.replace("!", "");
            anchor = anchor.replace(".", "");
            anchor = anchor.replace(",", "");
            anchor = anchor.replace("/", "");
            anchor = anchor.normalize("NFD").replace(/[\u0300-\u036f]/g, "");


            jQuery(this).prepend('<a name="' + anchor + '"></a>');
            jQuery(list).append('<li><a href="#' + anchor + '">' + jQuery(this).text() + '</a></li>');
        });

        jQuery('.aff-custom-menu.aff-page-menu a').on('click', function () {
            jQuery.each(jQuery('.aff-custom-menu.aff-page-menu a'), function (i, v) {
                jQuery(v).removeClass('active');
            });
            jQuery(this).addClass('active');
        });
    });
</script>