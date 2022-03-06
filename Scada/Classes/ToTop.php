<?php

namespace Scada;

class ToTop
{
    public function __construct() {
        add_action('wp_footer', [$this, 'html']);

        add_filter('aff_inline_footer_styles', [$this, 'style']);
    }

    public function html() {
        get_template_part('/Scada/templates/to-top');
    }

    public function style( $styles ) {
        global $BORN_FRAMEWORK;
        $bg_color = $BORN_FRAMEWORK->Options->Get('hover_color_global') ?? '#dd9933';
        $styles .= '.to-top{background:'. $bg_color .'}';
        return $styles;
    }
}

new \Scada\ToTop();