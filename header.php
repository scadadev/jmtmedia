<?php if (!defined('ABSPATH')) exit; // Exit if accessed directly
global $BORN_FRAMEWORK;

$gtm_id = $BORN_FRAMEWORK->Options->Get('gtm_id');
if (!$gtm_id) $gtm_id = '';
?>
<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>"/>
    <title><?php wp_title(''); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="<?php echo BORN_IMAGES; ?>favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo BORN_IMAGES; ?>apple-icon.png">
    <?php wp_head(); ?>
    <style>


        <?php if (get_field('add_scroll_down_cta')):?>

        .aff-bottom-cta .content {
            background-color: <?php echo get_field('scrolldown_cta_background_color');?>;
        }

        .aff-bottom-cta .content .cta .button {
            background-color: <?php echo get_field('scrolldown_cta_button_color');?>;
        }

        .aff-bottom-cta .content .cta .button:hover {
            background-color: <?php echo get_field('scrolldown_cta_button_hover_color');?>;
        }

        <?php endif;?>

        <?php if (get_field('add_scroll_down_cta')):?>

        .aff-inner-item-header .menu > .cta .button {
            background-color: <?php echo get_field('scrolldown_cta_top_color')?>;
        }

        .aff-inner-item-header .menu > .cta .button:hover {
            background-color: <?php echo get_field('scrolldown_cta_top_hover_color')?>;
        }

        <?php endif;?>

        <?php if (get_field('add_label_after_logo')):?>
        /* Bonus tag */

        .aff-bonus-tag .text {
            background-color: <?php echo get_field('bg_color');?>;
        }

        .aff-bonus-tag .text span:nth-child(2) {
            color: <?php echo get_field('accent_color');?>;
        }

        .aff-bonus-tag .tag {
            background-color: <?php echo get_field('accent_color');?>;
        }

        <?php endif;?>


        <?php

        $global_accent = $BORN_FRAMEWORK->Options->Get('accent_color_global');
        $global_background = $BORN_FRAMEWORK->Options->Get('background_color_global');
        $global_hover = $BORN_FRAMEWORK->Options->Get('hover_color_global');

        $accent_color_menu = $BORN_FRAMEWORK->Options->Get('accent_color_menu');
        $hover_color_menu = $BORN_FRAMEWORK->Options->Get('hover_color_menu');

        $hover_color_menu_dropdown = $BORN_FRAMEWORK->Options->Get('hover_color_menu_dropdown');
        $color_menu = $BORN_FRAMEWORK->Options->Get('color_menu');

        $header_bg = $BORN_FRAMEWORK->Options->Get('header_bg_color');

        if (!$global_accent){
            $global_accent = '#e7a736';
        }

        if (!$global_background){
            $global_background = '#162e4c';
        }

        if (!$global_hover){
            $global_hover = '#81d742';
        }

        if (!$accent_color_menu){
            $accent_color_menu = '#ffffff';
        }

        if (!$hover_color_menu){
            $hover_color_menu = '#e7a736';
        }


        if (!$hover_color_menu_dropdown){
            $hover_color_menu_dropdown = '#ff2323';
        }

        if (!$color_menu){
            $color_menu = '#ffffff';
        }

         if (!$header_bg){
            $header_bg = '#ffffff';
        }

        ?>

        /* base link color override */

        a {
            color: <?php echo $global_accent;?>;
        }

        a:hover {
            color: <?php echo $global_hover;?>;
        }

        /* updates reinis 08.11.2021 */

        .aff-header .menu ul li a {
            color: <?php echo $color_menu;?> !important;
        }

        /* new inner elements 17.12.2021 */

        .aff-text-icon .icon svg path {
            fill: <?php echo $global_accent;?>;
        }

        .aff-text-icon .inner {
            border-left: 5px solid <?php echo $global_accent;?>;
        }

        .aff-details-table.is-overall-rating .aff-rating:before {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='156px' height='26px'%3E%3Cpath fill-rule='evenodd' fill='%23<?php echo str_replace('#','',$global_accent);?>' d='M154.961,10.534 L148.900,16.220 L150.331,24.246 C150.382,24.532 150.259,24.821 150.016,24.991 C149.772,25.161 149.449,25.183 149.182,25.048 L141.691,21.259 L134.199,25.049 C134.083,25.108 133.957,25.136 133.831,25.136 C133.667,25.136 133.504,25.087 133.366,24.991 C133.122,24.821 133.000,24.532 133.051,24.246 L134.481,16.220 L128.421,10.534 C128.205,10.332 128.127,10.029 128.220,9.753 C128.314,9.478 128.561,9.277 128.859,9.235 L137.235,8.064 L140.981,0.761 C141.114,0.501 141.390,0.336 141.691,0.336 C141.992,0.336 142.267,0.501 142.401,0.761 L146.147,8.064 L154.522,9.235 C154.821,9.277 155.068,9.478 155.161,9.753 C155.255,10.029 155.177,10.332 154.961,10.534 ZM117.055,16.220 L118.486,24.246 C118.537,24.532 118.414,24.821 118.171,24.991 C117.927,25.161 117.604,25.183 117.337,25.048 L109.846,21.259 L102.354,25.049 C102.238,25.108 102.112,25.136 101.986,25.136 C101.822,25.136 101.659,25.087 101.521,24.991 C101.277,24.821 101.155,24.532 101.206,24.246 L102.636,16.220 L96.576,10.534 C96.360,10.332 96.282,10.029 96.375,9.753 C96.469,9.478 96.716,9.277 97.014,9.235 L105.390,8.064 L109.136,0.761 C109.269,0.501 109.545,0.336 109.846,0.336 C110.147,0.336 110.422,0.501 110.556,0.761 L114.301,8.064 L122.677,9.235 C122.976,9.277 123.223,9.478 123.316,9.753 C123.409,10.029 123.332,10.332 123.116,10.534 L117.055,16.220 ZM85.210,16.220 L86.641,24.246 C86.692,24.532 86.570,24.821 86.326,24.991 C86.082,25.161 85.759,25.183 85.492,25.048 L78.001,21.259 L70.509,25.049 C70.393,25.108 70.267,25.136 70.141,25.136 C69.977,25.136 69.814,25.087 69.676,24.991 C69.432,24.821 69.310,24.532 69.361,24.246 L70.791,16.220 L64.731,10.534 C64.515,10.332 64.437,10.029 64.530,9.753 C64.623,9.478 64.871,9.277 65.169,9.235 L73.545,8.064 L77.291,0.761 C77.424,0.501 77.700,0.336 78.001,0.336 C78.302,0.336 78.577,0.501 78.711,0.761 L82.457,8.064 L90.832,9.235 C91.131,9.277 91.378,9.478 91.471,9.753 C91.564,10.029 91.487,10.332 91.271,10.534 L85.210,16.220 ZM53.365,16.220 L54.796,24.246 C54.847,24.532 54.725,24.821 54.481,24.991 C54.237,25.161 53.914,25.183 53.647,25.048 L46.156,21.259 L38.664,25.049 C38.548,25.108 38.422,25.136 38.296,25.136 C38.132,25.136 37.969,25.087 37.831,24.991 C37.587,24.821 37.465,24.532 37.516,24.246 L38.946,16.220 L32.886,10.534 C32.670,10.332 32.592,10.029 32.685,9.753 C32.778,9.478 33.026,9.277 33.324,9.235 L41.700,8.064 L45.446,0.761 C45.580,0.501 45.855,0.336 46.156,0.336 C46.457,0.336 46.732,0.501 46.866,0.761 L50.611,8.064 L58.987,9.235 C59.286,9.277 59.533,9.478 59.626,9.753 C59.719,10.029 59.642,10.332 59.426,10.534 L53.365,16.220 ZM21.520,16.220 L22.951,24.246 C23.002,24.532 22.880,24.821 22.636,24.991 C22.392,25.161 22.069,25.183 21.802,25.048 L14.311,21.259 L6.819,25.049 C6.704,25.108 6.577,25.136 6.451,25.136 C6.287,25.136 6.124,25.087 5.986,24.991 C5.742,24.821 5.620,24.532 5.671,24.246 L7.101,16.220 L1.041,10.534 C0.825,10.332 0.747,10.029 0.840,9.753 C0.933,9.478 1.181,9.277 1.479,9.235 L9.855,8.064 L13.601,0.761 C13.734,0.501 14.010,0.336 14.311,0.336 C14.612,0.336 14.887,0.501 15.021,0.761 L18.767,8.064 L27.142,9.235 C27.441,9.277 27.688,9.478 27.781,9.753 C27.874,10.029 27.797,10.332 27.581,10.534 L21.520,16.220 Z'/%3E%3C/svg%3E");
        }

        .aff-title-stars {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='16px' height='15px'%3E%3Cpath fill-rule='evenodd' fill='%23<?php echo str_replace('#','',$global_accent);?>' d='M15.960,5.691 C15.905,5.524 15.758,5.403 15.582,5.378 L10.624,4.669 L8.407,0.254 C8.328,0.97 8.165,0.1 7.987,0.1 C7.809,0.1 7.646,0.97 7.567,0.254 L5.349,4.669 L0.392,5.378 C0.215,5.403 0.69,5.524 0.13,5.691 C0.41,5.857 0.4,6.41 0.132,6.163 L3.719,9.600 L2.873,14.453 C2.843,14.625 2.915,14.800 3.59,14.903 C3.141,14.961 3.237,14.991 3.334,14.991 C3.409,14.991 3.484,14.974 3.552,14.938 L7.987,12.647 L12.421,14.938 C12.579,15.19 12.770,15.6 12.914,14.903 C13.59,14.800 13.131,14.625 13.101,14.453 L12.254,9.600 L15.842,6.163 C15.969,6.41 16.15,5.857 15.960,5.691 Z'/%3E%3C/svg%3E");
        }

        li.has-dropdown>ul.dropdown-content li a:hover {
            color: <?php echo $global_accent;?> !important;
        }

        .aff-item-reviews .review-select .login a,
        .aff-item-reviews .review-select .signup a {
            color: <?php echo $global_accent;?> !important;
        }

        /* updates 20.09.2021 */

        .aff-authors .item .cta a,
        .aff-is-author .more a,
        .aff-is-author .heading .cta .articles,
        .aff-header .account a,
        .aff-text .wys p a {
            color: <?php echo $global_accent;?>;
        }

        .aff-custom-menu .menu ul li a {
            color: <?php echo $global_accent;?> !important;
        }

        .aff-custom-menu .menu ul li a:hover,
        .aff-shortcuts .item:hover h2,
        .aff-shortcuts .item:hover h3,
        .aff-text .wys p a:hover {
            color: <?php echo $global_hover;?> !important;
        }

        .aff-is-author .heading .cta .is-button svg path {
            fill: <?php echo $global_accent;?>;
        }

        .aff-authors .item .name a:hover,
        .aff-is-author .heading .name a:hover {
            color: <?php echo $global_accent;?>;
        }


        /* News slider */

        .aff-news-grid .title .cta a,
        .aff-news-grid .news-card .cta a {
            color: <?php echo $global_accent;?> !important;
        }

        .aff-news-grid .title .cta a:hover,
        .aff-news-grid .news-card .cta a:hover {
            color: <?php echo $global_hover;?> !important;
        }

        .aff-news-grid .news-card .heading a:hover {
            color: <?php echo $global_accent;?> !important;
        }

        .aff-news-grid .content > .cta .button {
            color: <?php echo $global_accent;?> !important;
        }

        /* Feedback */

        .aff-feedback .feedback .caret {
            background-color: <?php echo $global_accent;?>;
        }

        .aff-feedback .feedback.collapsed:hover,
        .aff-feedback .feedback:hover {
            color: <?php echo $global_accent;?>;
        }

        .aff-feedback .desc .success {
            color: <?php echo $global_accent;?>;
        }

        .aff-feedback .desc input[type="submit"] {
            background-color: <?php echo $global_accent;?>;
        }

        .aff-feedback .desc input[type="submit"]:hover {
            background-color: <?php echo $global_hover;?>;
        }

        ul:not(.ul-ignore):not(.dropdown-menu):not(#wp-admin-bar-root-default):not(#wp-admin-bar-top-secondary):not(#wp-admin-bar-user-actions):not(.comment):not(.products):not(.list):not(.product-categories):not(.children):not(.page-numbers):not(.tabs):not(.ab-submenu):not(.select2-results__options):not(.payment_methods):not(.main-menu):not(.menu):not(#shipping_method):not(.breadcrumb):not(.compact-menu):not(.born-reset):not(.pagination-list):not(.submenu-list) li a:hover {
            color: <?php echo $global_accent;?> !important;
        }

        ul:not(.ul-ignore):not(.dropdown-menu):not(#wp-admin-bar-root-default):not(#wp-admin-bar-top-secondary):not(#wp-admin-bar-user-actions):not(.comment):not(.products):not(.list):not(.product-categories):not(.children):not(.page-numbers):not(.tabs):not(.ab-submenu):not(.select2-results__options):not(.payment_methods):not(.main-menu):not(.menu):not(#shipping_method):not(.breadcrumb):not(.compact-menu):not(.born-reset):not(.pagination-list):not(.submenu-list) li:after {
            background: <?php echo $global_accent;?> !important;
        }

        label:after {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='6px' height='6px'%3E%3Cpath fill-rule='evenodd' fill='%23<?php echo str_replace('#','',$global_accent);?>' d='M2.800,0.464 C4.125,0.464 5.200,1.538 5.200,2.864 C5.200,4.190 4.125,5.264 2.800,5.264 C1.474,5.264 0.400,4.190 0.400,2.864 C0.400,1.538 1.474,0.464 2.800,0.464 Z'/%3E%3C/svg%3E");
        }

        .aff-delete-modal .cta {
            background-color: <?php echo $global_background;?>;
        }

        .aff-delete-modal .cta a.delete {
            background: <?php echo $global_accent;?>;
        }

        .aff-delete-modal .cta a.delete:hover {
            background: <?php echo $global_hover;?>;
        }

        .aff-delete-modal .cta a.cancel {
            color: <?php echo $global_accent;?>;
        }

        .modal a.close-modal:hover {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='16px' height='16px'%3E%3Cpath fill-rule='evenodd' fill='%23<?php echo str_replace('#','',$global_accent);?>' d='M15.778,14.364 L14.364,15.778 L8.000,9.414 L1.636,15.778 L0.222,14.364 L6.586,8.000 L0.222,1.636 L1.636,0.222 L8.000,6.586 L14.364,0.222 L15.778,1.636 L9.414,8.000 L15.778,14.364 Z'/%3E%3C/svg%3E");
        }

        .pagination-buttons a:not(.disabled) svg path {
            fill: <?php echo $global_accent;?> !important;
        }

        select {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='13px' height='8px'%3E%3Cpath fill-rule='evenodd' fill='%23<?php echo str_replace('#','',$global_accent);?>' d='M12.394,1.488 L6.737,7.143 L6.600,7.006 L6.463,7.143 L0.806,1.488 L1.937,0.356 L6.600,5.018 L11.263,0.356 L12.394,1.488 Z'/%3E%3C/svg%3E");
        }


        /* updates 20.09.2021 */

        .aff-pagination .content .pagination-list .pagination-item a.current,
        .aff-pagination .content .pagination-list .pagination-item span.current {
            background-color: <?php echo $global_accent;?> !important;
        }

        .aff-pagination .content .pagination-list .pagination-item a:not(.current):hover,
        .aff-pagination .content .pagination-list .pagination-item span:not(.current):hover {
            color: <?php echo $global_accent;?> !important;
        }

        table tr th {
            background-color: <?php echo $global_background;?> !important;
        }

        .aff-load-more .content .posts_loadmore {
            color: <?php echo $global_accent;?> !important;
        }

        ul:not(.ul-ignore):not(.dropdown-menu):not(#wp-admin-bar-root-default):not(#wp-admin-bar-top-secondary):not(#wp-admin-bar-user-actions):not(.comment):not(.products):not(.list):not(.product-categories):not(.children):not(.page-numbers):not(.tabs):not(.ab-submenu):not(.select2-results__options):not(.payment_methods):not(.main-menu):not(.menu):not(#shipping_method):not(.breadcrumb):not(.compact-menu):not(.born-reset):not(.pagination-list):not(.submenu-list) li a:hover {
            color: <?php echo $global_accent;?> !important;
        }

        ul:not(.ul-ignore):not(.dropdown-menu):not(#wp-admin-bar-root-default):not(#wp-admin-bar-top-secondary):not(#wp-admin-bar-user-actions):not(.comment):not(.products):not(.list):not(.product-categories):not(.children):not(.page-numbers):not(.tabs):not(.ab-submenu):not(.select2-results__options):not(.payment_methods):not(.main-menu):not(.menu):not(#shipping_method):not(.breadcrumb):not(.compact-menu):not(.born-reset):not(.pagination-list):not(.submenu-list) li:after {
            background: <?php echo $global_accent;?>;
        }

        .aff-rating-select ul li.selected span {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='28px' height='26px'%3E%3Cpath fill-rule='evenodd' fill='%23<?php echo str_replace('#','',$global_accent);?>' d='M27.181,11.164 L21.120,16.849 L22.551,24.877 C22.602,25.162 22.479,25.451 22.236,25.621 C21.992,25.791 21.669,25.814 21.402,25.679 L13.911,21.890 L6.419,25.680 C6.304,25.739 6.177,25.767 6.051,25.767 C5.887,25.767 5.724,25.718 5.586,25.621 C5.342,25.451 5.220,25.162 5.271,24.877 L6.701,16.849 L0.641,11.164 C0.425,10.961 0.347,10.659 0.440,10.383 C0.534,10.107 0.781,9.907 1.079,9.865 L9.455,8.693 L13.201,1.390 C13.334,1.130 13.610,0.965 13.911,0.965 C14.212,0.965 14.487,1.130 14.621,1.390 L18.366,8.693 L26.742,9.865 C27.040,9.907 27.288,10.107 27.381,10.383 C27.474,10.659 27.397,10.961 27.181,11.164 Z'/%3E%3C/svg%3E");
        }

        .aff-rating-select ul:hover li.selected.hover span {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='28px' height='26px'%3E%3Cpath fill-rule='evenodd' fill='%23<?php echo str_replace('#','',$global_accent);?>' d='M27.181,11.164 L21.120,16.849 L22.551,24.877 C22.602,25.162 22.479,25.451 22.236,25.621 C21.992,25.791 21.669,25.814 21.402,25.679 L13.911,21.890 L6.419,25.680 C6.304,25.739 6.177,25.767 6.051,25.767 C5.887,25.767 5.724,25.718 5.586,25.621 C5.342,25.451 5.220,25.162 5.271,24.877 L6.701,16.849 L0.641,11.164 C0.425,10.961 0.347,10.659 0.440,10.383 C0.534,10.107 0.781,9.907 1.079,9.865 L9.455,8.693 L13.201,1.390 C13.334,1.130 13.610,0.965 13.911,0.965 C14.212,0.965 14.487,1.130 14.621,1.390 L18.366,8.693 L26.742,9.865 C27.040,9.907 27.288,10.107 27.381,10.383 C27.474,10.659 27.397,10.961 27.181,11.164 Z'/%3E%3C/svg%3E") !important;
        }

        .aff-header .menu .menu-dropdown {
            background: <?php echo $global_background;?>;
        }

        .aff-submenu .submenu-list .submenu-item a:hover {
            color: <?php echo $global_accent;?> !important;
        }


        /* Reviews */

        .aff-reviews .aff-rating:before,
        .reviews-list .aff-rating:before {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='156px' height='26px'%3E%3Cpath fill-rule='evenodd' fill='%23<?php echo str_replace('#','',$global_accent);?>' d='M154.961,10.534 L148.900,16.220 L150.331,24.246 C150.382,24.532 150.259,24.821 150.016,24.991 C149.772,25.161 149.449,25.183 149.182,25.048 L141.691,21.259 L134.199,25.049 C134.083,25.108 133.957,25.136 133.831,25.136 C133.667,25.136 133.504,25.087 133.366,24.991 C133.122,24.821 133.000,24.532 133.051,24.246 L134.481,16.220 L128.421,10.534 C128.205,10.332 128.127,10.029 128.220,9.753 C128.314,9.478 128.561,9.277 128.859,9.235 L137.235,8.064 L140.981,0.761 C141.114,0.501 141.390,0.336 141.691,0.336 C141.992,0.336 142.267,0.501 142.401,0.761 L146.147,8.064 L154.522,9.235 C154.821,9.277 155.068,9.478 155.161,9.753 C155.255,10.029 155.177,10.332 154.961,10.534 ZM117.055,16.220 L118.486,24.246 C118.537,24.532 118.414,24.821 118.171,24.991 C117.927,25.161 117.604,25.183 117.337,25.048 L109.846,21.259 L102.354,25.049 C102.238,25.108 102.112,25.136 101.986,25.136 C101.822,25.136 101.659,25.087 101.521,24.991 C101.277,24.821 101.155,24.532 101.206,24.246 L102.636,16.220 L96.576,10.534 C96.360,10.332 96.282,10.029 96.375,9.753 C96.469,9.478 96.716,9.277 97.014,9.235 L105.390,8.064 L109.136,0.761 C109.269,0.501 109.545,0.336 109.846,0.336 C110.147,0.336 110.422,0.501 110.556,0.761 L114.301,8.064 L122.677,9.235 C122.976,9.277 123.223,9.478 123.316,9.753 C123.409,10.029 123.332,10.332 123.116,10.534 L117.055,16.220 ZM85.210,16.220 L86.641,24.246 C86.692,24.532 86.570,24.821 86.326,24.991 C86.082,25.161 85.759,25.183 85.492,25.048 L78.001,21.259 L70.509,25.049 C70.393,25.108 70.267,25.136 70.141,25.136 C69.977,25.136 69.814,25.087 69.676,24.991 C69.432,24.821 69.310,24.532 69.361,24.246 L70.791,16.220 L64.731,10.534 C64.515,10.332 64.437,10.029 64.530,9.753 C64.623,9.478 64.871,9.277 65.169,9.235 L73.545,8.064 L77.291,0.761 C77.424,0.501 77.700,0.336 78.001,0.336 C78.302,0.336 78.577,0.501 78.711,0.761 L82.457,8.064 L90.832,9.235 C91.131,9.277 91.378,9.478 91.471,9.753 C91.564,10.029 91.487,10.332 91.271,10.534 L85.210,16.220 ZM53.365,16.220 L54.796,24.246 C54.847,24.532 54.725,24.821 54.481,24.991 C54.237,25.161 53.914,25.183 53.647,25.048 L46.156,21.259 L38.664,25.049 C38.548,25.108 38.422,25.136 38.296,25.136 C38.132,25.136 37.969,25.087 37.831,24.991 C37.587,24.821 37.465,24.532 37.516,24.246 L38.946,16.220 L32.886,10.534 C32.670,10.332 32.592,10.029 32.685,9.753 C32.778,9.478 33.026,9.277 33.324,9.235 L41.700,8.064 L45.446,0.761 C45.580,0.501 45.855,0.336 46.156,0.336 C46.457,0.336 46.732,0.501 46.866,0.761 L50.611,8.064 L58.987,9.235 C59.286,9.277 59.533,9.478 59.626,9.753 C59.719,10.029 59.642,10.332 59.426,10.534 L53.365,16.220 ZM21.520,16.220 L22.951,24.246 C23.002,24.532 22.880,24.821 22.636,24.991 C22.392,25.161 22.069,25.183 21.802,25.048 L14.311,21.259 L6.819,25.049 C6.704,25.108 6.577,25.136 6.451,25.136 C6.287,25.136 6.124,25.087 5.986,24.991 C5.742,24.821 5.620,24.532 5.671,24.246 L7.101,16.220 L1.041,10.534 C0.825,10.332 0.747,10.029 0.840,9.753 C0.933,9.478 1.181,9.277 1.479,9.235 L9.855,8.064 L13.601,0.761 C13.734,0.501 14.010,0.336 14.311,0.336 C14.612,0.336 14.887,0.501 15.021,0.761 L18.767,8.064 L27.142,9.235 C27.441,9.277 27.688,9.478 27.781,9.753 C27.874,10.029 27.797,10.332 27.581,10.534 L21.520,16.220 Z'/%3E%3C/svg%3E");
        }

        .aff-profile-wrapper.aff-reviews-wrapper .aff-reviews .review-card-wrapper .review-card .delete svg path {
            fill: <?php echo $global_accent;?> !important;
        }

        .aff-item-reviews .review-select .sorting .is-visible .dropdown-trigger:after {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='8px' height='6px'%3E%3Cpath fill-rule='evenodd' fill='%23<?php echo str_replace('#','',$global_accent);?>' d='M7.063,1.882 L3.669,5.297 L3.600,5.228 L3.531,5.297 L0.137,1.882 L1.269,0.743 L3.600,3.089 L5.931,0.743 L7.063,1.882 Z'/%3E%3C/svg%3E");
        }

        .aff-item-reviews .review-select .sorting .is-visible .dropdown-trigger {
            color: <?php echo $global_accent;?> !important;
        }


        .aff-rating-select ul li.hover span {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='28px' height='26px'%3E%3Cpath fill-rule='evenodd' fill='%23<?php echo str_replace('#','',$global_accent);?>' d='M27.181,11.164 L21.120,16.849 L22.551,24.877 C22.602,25.162 22.479,25.451 22.236,25.621 C21.992,25.791 21.669,25.814 21.402,25.679 L13.911,21.890 L6.419,25.680 C6.304,25.739 6.177,25.767 6.051,25.767 C5.887,25.767 5.724,25.718 5.586,25.621 C5.342,25.451 5.220,25.162 5.271,24.877 L6.701,16.849 L0.641,11.164 C0.425,10.961 0.347,10.659 0.440,10.383 C0.534,10.107 0.781,9.907 1.079,9.865 L9.455,8.693 L13.201,1.390 C13.334,1.130 13.610,0.965 13.911,0.965 C14.212,0.965 14.487,1.130 14.621,1.390 L18.366,8.693 L26.742,9.865 C27.040,9.907 27.288,10.107 27.381,10.383 C27.474,10.659 27.397,10.961 27.181,11.164 Z'/%3E%3C/svg%3E");
        }

        .aff-item-reviews .load-more {
            color: <?php echo $global_accent;?> !important;
        }

        .aff-item-reviews .review-add .submit .button,
        .aff-item-reviews .review-add .submit input[type="submit"] {
            background: <?php echo $global_accent;?> !important;
        }

        .aff-item-reviews .review-add .submit .button:hover,
        .aff-item-reviews .review-add .submit input[type="submit"]:hover {
            background: <?php echo $global_hover;?> !important;
        }

        /* Header */

        .aff-header .menu ul li.current_page_item a {
            color: <?php echo $hover_color_menu;?> !important;
        }

        .aff-header .menu ul li a:hover,
        .aff-header .menu ul li.current_page_item a:hover,
        .aff-header a:hover,
        .aff-header .account a:hover,
        .aff-header li.has-dropdown > ul.dropdown-content li a:hover {
            color: <?php echo $hover_color_menu;?> !important;
        }

        .aff-header .account a:hover svg path {
            fill: <?php echo $hover_color_menu;?> !important;
        }

        .aff-header .menu ul li.is-visible > a {
            color: <?php echo $hover_color_menu;?> !important;
        }

        .aff-header .menu ul li.has-compact-dropdown .menu-dropdown .content ul.compact-menu li a:hover,
        .aff-header .menu .menu-dropdown .content ul li a:hover,
        .aff-header .menu ul li.has-compact-dropdown .menu-dropdown .content ul.compact-menu li.has-level-3:hover > a {
            color: <?php echo $hover_color_menu_dropdown;?> !important;
        }

        .aff-header .account svg path {
            fill: <?php echo $global_accent;?> !important;
        }

        .aff-header {
            background: <?php echo $global_background;?>;
        }

        .aff-header .menu ul li.has-compact-dropdown .menu-dropdown,
        .aff-header .menu ul li.has-compact-dropdown .compact-menu > li > ul {
            background-color: <?php echo $global_background;?>;
        }

        .aff-main-items-grid .item .badge,
        .aff-main-items-grid .item .details {
            background-color: <?php echo $global_background;?> !important;
        }

        .aff-main-items-grid .item .desc .text span,
        .aff-main-items-grid .item .details .cta .button {
            color: <?php echo $global_accent;?> !important;
        }

        .aff-main-items-grid .item .name:hover,
        .aff-games-grid .game-card .heading a:hover {
            color: <?php echo $global_hover;?> !important;
        }

        .aff-main-items-grid .item > .cta .button {
            background-color: <?php echo $global_accent;?> !important;
        }

        .aff-main-items-grid .item > .cta .button:hover {
            background-color: <?php echo $global_hover;?> !important;
        }

        .aff-main-items-grid .aff-fav {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='31px' height='28px'%3E%3Cpath fill-rule='evenodd' stroke='%23<?php echo str_replace('#','',$global_accent);?>' stroke-width='2px' stroke-linecap='butt' stroke-linejoin='miter' fill='none' d='M26.779,3.446 C25.329,1.869 23.341,0.999 21.178,0.999 C19.562,0.999 18.082,1.513 16.779,2.524 C16.121,3.035 15.525,3.660 15.000,4.389 C14.475,3.660 13.879,3.035 13.221,2.524 C11.918,1.513 10.438,0.999 8.822,0.999 C6.660,0.999 4.671,1.869 3.221,3.446 C1.789,5.006 1.000,7.137 1.000,9.445 C1.000,11.821 1.882,13.997 3.777,16.292 C5.472,18.344 7.908,20.427 10.729,22.840 C11.692,23.663 12.784,24.598 13.918,25.592 C14.217,25.855 14.601,26.000 15.000,26.000 C15.398,26.000 15.783,25.855 16.082,25.592 C17.216,24.598 18.308,23.663 19.272,22.840 C22.092,20.426 24.528,18.344 26.223,16.291 C28.118,13.997 29.000,11.821 29.000,9.445 C29.000,7.137 28.211,5.006 26.779,3.446 Z'/%3E%3C/svg%3E");
        }

        .aff-main-items-grid .aff-fav.favorited {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='28px' height='25px'%3E%3Cpath fill-rule='evenodd' fill='%23<?php echo str_replace('#','',$global_accent);?>' d='M25.779,2.446 C24.329,0.869 22.341,-0.001 20.178,-0.001 C18.562,-0.001 17.082,0.513 15.779,1.524 C15.121,2.035 14.525,2.660 14.000,3.389 C13.475,2.660 12.879,2.035 12.221,1.524 C10.918,0.513 9.438,-0.001 7.822,-0.001 C5.660,-0.001 3.671,0.869 2.221,2.446 C0.789,4.006 -0.000,6.137 -0.000,8.445 C-0.000,10.821 0.882,12.997 2.777,15.292 C4.472,17.344 6.908,19.427 9.729,21.840 C10.692,22.663 11.784,23.598 12.918,24.592 C13.217,24.855 13.601,25.000 14.000,25.000 C14.398,25.000 14.783,24.855 15.082,24.592 C16.216,23.598 17.308,22.663 18.272,21.840 C21.092,19.426 23.528,17.344 25.223,15.291 C27.118,12.997 28.000,10.821 28.000,8.445 C28.000,6.137 27.211,4.006 25.779,2.446 Z'/%3E%3C/svg%3E");
        }

        .aff-main-items-grid .aff-rating:before {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='156px' height='26px'%3E%3Cpath fill-rule='evenodd' fill='%23<?php echo str_replace('#','',$global_accent);?>' d='M154.961,10.534 L148.900,16.220 L150.331,24.246 C150.382,24.532 150.259,24.821 150.016,24.991 C149.772,25.161 149.449,25.183 149.182,25.048 L141.691,21.259 L134.199,25.049 C134.083,25.108 133.957,25.136 133.831,25.136 C133.667,25.136 133.504,25.087 133.366,24.991 C133.122,24.821 133.000,24.532 133.051,24.246 L134.481,16.220 L128.421,10.534 C128.205,10.332 128.127,10.029 128.220,9.753 C128.314,9.478 128.561,9.277 128.859,9.235 L137.235,8.064 L140.981,0.761 C141.114,0.501 141.390,0.336 141.691,0.336 C141.992,0.336 142.267,0.501 142.401,0.761 L146.147,8.064 L154.522,9.235 C154.821,9.277 155.068,9.478 155.161,9.753 C155.255,10.029 155.177,10.332 154.961,10.534 ZM117.055,16.220 L118.486,24.246 C118.537,24.532 118.414,24.821 118.171,24.991 C117.927,25.161 117.604,25.183 117.337,25.048 L109.846,21.259 L102.354,25.049 C102.238,25.108 102.112,25.136 101.986,25.136 C101.822,25.136 101.659,25.087 101.521,24.991 C101.277,24.821 101.155,24.532 101.206,24.246 L102.636,16.220 L96.576,10.534 C96.360,10.332 96.282,10.029 96.375,9.753 C96.469,9.478 96.716,9.277 97.014,9.235 L105.390,8.064 L109.136,0.761 C109.269,0.501 109.545,0.336 109.846,0.336 C110.147,0.336 110.422,0.501 110.556,0.761 L114.301,8.064 L122.677,9.235 C122.976,9.277 123.223,9.478 123.316,9.753 C123.409,10.029 123.332,10.332 123.116,10.534 L117.055,16.220 ZM85.210,16.220 L86.641,24.246 C86.692,24.532 86.570,24.821 86.326,24.991 C86.082,25.161 85.759,25.183 85.492,25.048 L78.001,21.259 L70.509,25.049 C70.393,25.108 70.267,25.136 70.141,25.136 C69.977,25.136 69.814,25.087 69.676,24.991 C69.432,24.821 69.310,24.532 69.361,24.246 L70.791,16.220 L64.731,10.534 C64.515,10.332 64.437,10.029 64.530,9.753 C64.623,9.478 64.871,9.277 65.169,9.235 L73.545,8.064 L77.291,0.761 C77.424,0.501 77.700,0.336 78.001,0.336 C78.302,0.336 78.577,0.501 78.711,0.761 L82.457,8.064 L90.832,9.235 C91.131,9.277 91.378,9.478 91.471,9.753 C91.564,10.029 91.487,10.332 91.271,10.534 L85.210,16.220 ZM53.365,16.220 L54.796,24.246 C54.847,24.532 54.725,24.821 54.481,24.991 C54.237,25.161 53.914,25.183 53.647,25.048 L46.156,21.259 L38.664,25.049 C38.548,25.108 38.422,25.136 38.296,25.136 C38.132,25.136 37.969,25.087 37.831,24.991 C37.587,24.821 37.465,24.532 37.516,24.246 L38.946,16.220 L32.886,10.534 C32.670,10.332 32.592,10.029 32.685,9.753 C32.778,9.478 33.026,9.277 33.324,9.235 L41.700,8.064 L45.446,0.761 C45.580,0.501 45.855,0.336 46.156,0.336 C46.457,0.336 46.732,0.501 46.866,0.761 L50.611,8.064 L58.987,9.235 C59.286,9.277 59.533,9.478 59.626,9.753 C59.719,10.029 59.642,10.332 59.426,10.534 L53.365,16.220 ZM21.520,16.220 L22.951,24.246 C23.002,24.532 22.880,24.821 22.636,24.991 C22.392,25.161 22.069,25.183 21.802,25.048 L14.311,21.259 L6.819,25.049 C6.704,25.108 6.577,25.136 6.451,25.136 C6.287,25.136 6.124,25.087 5.986,24.991 C5.742,24.821 5.620,24.532 5.671,24.246 L7.101,16.220 L1.041,10.534 C0.825,10.332 0.747,10.029 0.840,9.753 C0.933,9.478 1.181,9.277 1.479,9.235 L9.855,8.064 L13.601,0.761 C13.734,0.501 14.010,0.336 14.311,0.336 C14.612,0.336 14.887,0.501 15.021,0.761 L18.767,8.064 L27.142,9.235 C27.441,9.277 27.688,9.478 27.781,9.753 C27.874,10.029 27.797,10.332 27.581,10.534 L21.520,16.220 Z'/%3E%3C/svg%3E");
        }

        /* Header background */
        .aff-header-title {
            background-color: <?php echo $header_bg;?>;
        }

        /* Newsletter */

        .aff-newsletter {
            background: <?php echo $global_accent;?>;
        }

        .aff-newsletter input[type="submit"] {
            background: <?php echo $global_background;?>;
        }

        .aff-newsletter input[type="submit"]:hover {
            background: <?php echo $global_hover;?>;
        }

        .aff-newsletter .notes a {
            color: <?php echo $global_background;?>;
        }

        /* Footer */

        .aff-footer,
        .aff-copyright {
            background-color: <?php echo $global_background;?>;
        }

        .aff-footer .widget_nav_menu .widget-title {
            color: <?php echo $global_accent;?>;
        }

        /* Mobile */

        .aff-menu-btn-mobile,
        .aff-menu-mobile {
            background-color: <?php echo $global_background;?>;
        }

        .aff-menu-mobile .content .has-dropdown.is-visible > a {
            color: <?php echo $global_accent;?> !important;
        }

        .aff-header.is-mobile .controls .login svg path {
            fill: <?php echo $global_accent;?> !important;
        }

        /* Breadcrumbs */

        .aff-page-info .content .breadcrumb li a {
            color: <?php echo $global_accent;?> !important;
        }

        /* Page details */

        .aff-page-info .content .last-update {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='13px' height='13px'%3E%3Cpath fill-rule='evenodd' fill='%23<?php echo str_replace('#','',$global_accent);?>' d='M10.079,11.521 C9.035,12.333 7.723,12.780 6.383,12.780 C5.858,12.780 5.338,12.712 4.836,12.577 C2.675,11.996 0.983,10.205 0.525,8.014 C0.058,5.782 0.919,3.436 2.719,2.037 C3.759,1.228 5.070,0.782 6.412,0.782 C7.341,0.782 8.264,0.998 9.080,1.407 C11.097,2.417 12.400,4.525 12.400,6.779 C12.400,8.619 11.532,10.391 10.079,11.521 ZM8.668,2.233 C7.979,1.888 7.199,1.706 6.412,1.706 C5.275,1.706 4.164,2.082 3.285,2.766 C1.763,3.950 1.034,5.936 1.429,7.825 C1.816,9.677 3.248,11.193 5.076,11.685 C5.500,11.799 5.940,11.857 6.383,11.857 L6.384,11.857 C7.519,11.857 8.630,11.479 9.513,10.792 C10.743,9.836 11.477,8.336 11.477,6.779 C11.477,4.872 10.374,3.087 8.668,2.233 ZM6.399,9.757 C6.144,9.757 5.937,9.550 5.937,9.295 L5.937,5.648 C5.937,5.394 6.144,5.187 6.399,5.187 C6.654,5.187 6.860,5.394 6.860,5.648 L6.860,9.295 C6.860,9.550 6.654,9.757 6.399,9.757 ZM6.399,4.725 C6.276,4.725 6.159,4.677 6.073,4.588 C5.986,4.504 5.937,4.385 5.937,4.263 C5.937,4.141 5.986,4.023 6.073,3.937 C6.244,3.765 6.553,3.765 6.724,3.936 C6.812,4.023 6.860,4.141 6.860,4.263 C6.860,4.383 6.812,4.504 6.724,4.588 C6.639,4.677 6.521,4.725 6.399,4.725 Z'/%3E%3C/svg%3E");
        }

        /* Login */

        .aff-sign-form .content .main .account-check a,
        .aff-sign-form .content .main .forgot-password a {
            color: <?php echo $global_accent;?>;
        }

        .aff-sign-form button[type="submit"] {
            background-color: <?php echo $global_accent;?>;
        }

        .aff-sign-form button[type="submit"]:hover {
            background-color: <?php echo $global_hover;?>;
        }

        .aff-sign-form .content .main .sign-in-form input.email {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='20px' height='15px'%3E%3Cpath fill-rule='evenodd' fill='%23<?php echo str_replace('#','',$global_accent);?>' d='M17.048,15.000 L2.952,15.000 C1.322,15.000 0.000,13.654 0.000,11.995 L0.000,4.231 L9.398,10.072 C9.587,10.192 9.799,10.240 9.988,10.240 C10.177,10.240 10.390,10.192 10.578,10.072 L20.000,4.231 L20.000,11.995 C20.000,13.654 18.678,15.000 17.048,15.000 ZM0.094,2.356 C0.378,1.010 1.558,-0.000 2.952,-0.000 L17.048,-0.000 C18.442,-0.000 19.622,1.010 19.905,2.356 L10.012,8.510 L0.094,2.356 Z'/%3E%3C/svg%3E") !important;
        }

        .aff-sign-form .content .main .sign-in-form input.password {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='17px' height='24px'%3E%3Cpath fill-rule='evenodd' fill='%23<?php echo str_replace('#','',$global_accent);?>' d='M14.875,9.000 L14.167,9.000 L14.167,6.000 C14.167,2.691 11.625,-0.000 8.500,-0.000 C5.375,-0.000 2.833,2.691 2.833,6.000 L2.833,9.000 L2.125,9.000 C0.954,9.000 -0.000,10.009 -0.000,11.250 L-0.000,21.750 C-0.000,22.991 0.954,24.000 2.125,24.000 L14.875,24.000 C16.046,24.000 17.000,22.991 17.000,21.750 L17.000,11.250 C17.000,10.009 16.046,9.000 14.875,9.000 ZM4.722,6.000 C4.722,3.794 6.417,2.000 8.500,2.000 C10.583,2.000 12.278,3.794 12.278,6.000 L12.278,9.000 L4.722,9.000 L4.722,6.000 ZM9.444,16.722 L9.444,19.000 C9.444,19.552 9.022,20.000 8.500,20.000 C7.978,20.000 7.556,19.552 7.556,19.000 L7.556,16.722 C6.994,16.375 6.611,15.737 6.611,15.000 C6.611,13.897 7.458,13.000 8.500,13.000 C9.542,13.000 10.389,13.897 10.389,15.000 C10.389,15.737 10.006,16.375 9.444,16.722 Z'/%3E%3C/svg%3E") !important;
        }

        /* Sign up */

        .aff-sign-form .content .info {
            background-color: <?php echo $global_background;?>;
        }

        .aff-sign-form .content .info .info-list .info-item:before {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='32px' height='33px'%3E%3Cpath fill-rule='evenodd' fill='%23<?php echo str_replace('#','',$global_accent);?>' d='M16.000,0.441 C24.837,0.441 32.000,7.606 32.000,16.444 C32.000,25.281 24.837,32.446 16.000,32.446 C7.163,32.446 0.000,25.281 0.000,16.444 C0.000,7.606 7.163,0.441 16.000,0.441 Z'/%3E%3C/svg%3E") !important;
        }

        /* Profile */

        .aff-profile-wrapper .aff-header .controls .account .menu .sign-out a:hover,
        .aff-profile-wrapper .aff-header .controls .account:hover .name {
            color: <?php echo $global_accent;?> !important;
        }

        .aff-profile-wrapper .aff-header .controls .account:hover .name:before {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='8px' height='6px'%3E%3Cpath fill-rule='evenodd' fill='%23<?php echo str_replace('#','',$global_accent);?>' d='M7.063,1.882 L3.669,5.297 L3.600,5.228 L3.531,5.297 L0.137,1.882 L1.269,0.743 L3.600,3.089 L5.931,0.743 L7.063,1.882 Z'/%3E%3C/svg%3E");
        }

        .aff-profile-wrapper .aff-profile-info .content .options .options-list .options-item svg path {
            fill: <?php echo $global_accent;?> !important;
        }

        /* Submenu */

        .aff-submenu .submenu-list .submenu-item a.active::after {
            background-color: <?php echo $global_accent;?> !important;
        }

        /* Post */

        .aff-news-post-wrapper .aff-news-post p a,
        .aff-news-post-wrapper .aff-post p a,
        .aff-post-wrapper .aff-news-post p a,
        .aff-post-wrapper .aff-post p a {
            color: <?php echo $global_accent;?> !important;
        }

        .aff-news-post-wrapper .aff-news-post .cta a,
        .aff-news-post-wrapper .aff-post .cta a,
        .aff-post-wrapper .aff-news-post .cta a,
        .aff-post-wrapper .aff-post .cta a {
            background-color: <?php echo $global_accent;?> !important;
        }

        .aff-news-post-wrapper .aff-news-post .cta a:hover,
        .aff-news-post-wrapper .aff-post .cta a:hover,
        .aff-post-wrapper .aff-news-post .cta a:hover,
        .aff-post-wrapper .aff-post .cta a:hover {
            background-color: <?php echo $global_hover;?> !important;
        }

        .aff-post-author-info .info .date {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='18px' height='18px'%3E%3Cpath fill-rule='evenodd' fill='%23<?php echo str_replace('#','',$global_accent);?>' d='M8.800,17.781 C4.168,17.781 0.400,14.013 0.400,9.381 C0.400,4.749 4.168,0.982 8.800,0.982 C13.432,0.982 17.200,4.749 17.200,9.381 C17.200,14.013 13.432,17.781 8.800,17.781 ZM8.800,2.283 C4.886,2.283 1.701,5.468 1.701,9.381 C1.701,13.295 4.886,16.479 8.800,16.479 C12.714,16.479 15.899,13.295 15.899,9.381 C15.899,5.468 12.714,2.283 8.800,2.283 ZM11.402,12.036 C11.266,12.036 11.129,11.993 11.012,11.906 L8.410,9.954 C8.246,9.831 8.149,9.638 8.149,9.433 L8.149,5.530 C8.149,5.170 8.440,4.879 8.800,4.879 C9.160,4.879 9.451,5.170 9.451,5.530 L9.451,9.108 L11.793,10.864 C12.081,11.080 12.139,11.488 11.923,11.775 C11.796,11.946 11.600,12.036 11.402,12.036 Z'/%3E%3C/svg%3E");
        }

        .aff-load-more .content .load-more {
            color: <?php echo $global_accent;?> !important;
        }

        /* Sidebar */

        .aff-sidebar .menu {
            background-color: <?php echo $global_background;?>;
        }

        .aff-sidebar .menu .menu-list .menu-item a.active,
        .aff-sidebar .menu .menu-list .menu-item a:hover {
            color: <?php echo $global_accent;?> !important;
        }

        .aff-sidebar .offer .card-wrapper .card .data .aff-rating:before {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='76px' height='13px'%3E%3Cpath fill-rule='evenodd' fill='%23<?php echo str_replace('#','',$global_accent);?>' d='M75.484,5.696 L72.531,8.447 L73.228,12.333 C73.253,12.471 73.194,12.610 73.075,12.693 C72.956,12.775 72.799,12.786 72.669,12.721 L69.020,10.887 L65.372,12.721 C65.315,12.750 65.254,12.764 65.192,12.764 C65.112,12.764 65.033,12.739 64.966,12.693 C64.847,12.610 64.787,12.471 64.812,12.333 L65.509,8.447 L62.557,5.696 C62.452,5.598 62.414,5.452 62.460,5.319 C62.505,5.185 62.626,5.088 62.771,5.067 L66.850,4.501 L68.675,0.967 C68.740,0.840 68.874,0.761 69.020,0.761 C69.167,0.761 69.301,0.840 69.366,0.967 L71.191,4.501 L75.270,5.067 C75.415,5.088 75.536,5.185 75.581,5.319 C75.627,5.452 75.589,5.598 75.484,5.696 ZM57.021,8.447 L57.718,12.333 C57.743,12.471 57.684,12.610 57.565,12.693 C57.446,12.775 57.289,12.786 57.159,12.721 L53.510,10.887 L49.862,12.721 C49.805,12.750 49.744,12.764 49.682,12.764 C49.602,12.764 49.523,12.739 49.456,12.693 C49.337,12.610 49.277,12.471 49.302,12.333 L49.999,8.447 L47.047,5.696 C46.942,5.598 46.904,5.452 46.950,5.319 C46.995,5.185 47.116,5.088 47.261,5.067 L51.340,4.501 L53.165,0.967 C53.230,0.840 53.364,0.761 53.510,0.761 C53.657,0.761 53.791,0.840 53.856,0.967 L55.680,4.501 L59.760,5.067 C59.905,5.088 60.026,5.185 60.071,5.319 C60.116,5.452 60.079,5.598 59.974,5.696 L57.021,8.447 ZM41.511,8.447 L42.208,12.333 C42.233,12.471 42.174,12.610 42.055,12.693 C41.936,12.775 41.779,12.786 41.649,12.721 L38.000,10.887 L34.352,12.721 C34.295,12.750 34.234,12.764 34.172,12.764 C34.092,12.764 34.013,12.739 33.946,12.693 C33.827,12.610 33.767,12.471 33.792,12.333 L34.489,8.447 L31.537,5.696 C31.432,5.598 31.394,5.452 31.440,5.319 C31.485,5.185 31.606,5.088 31.751,5.067 L35.830,4.501 L37.655,0.967 C37.720,0.840 37.854,0.761 38.000,0.761 C38.147,0.761 38.281,0.840 38.346,0.967 L40.171,4.501 L44.250,5.067 C44.395,5.088 44.516,5.185 44.561,5.319 C44.607,5.452 44.569,5.598 44.464,5.696 L41.511,8.447 ZM26.001,8.447 L26.698,12.333 C26.723,12.471 26.664,12.610 26.545,12.693 C26.426,12.775 26.269,12.786 26.139,12.721 L22.490,10.887 L18.842,12.721 C18.785,12.750 18.724,12.764 18.662,12.764 C18.582,12.764 18.503,12.739 18.436,12.693 C18.317,12.610 18.257,12.471 18.282,12.333 L18.979,8.447 L16.027,5.696 C15.922,5.598 15.884,5.452 15.930,5.319 C15.975,5.185 16.096,5.088 16.241,5.067 L20.320,4.501 L22.145,0.967 C22.210,0.840 22.344,0.761 22.490,0.761 C22.637,0.761 22.771,0.840 22.836,0.967 L24.661,4.501 L28.740,5.067 C28.885,5.088 29.006,5.185 29.051,5.319 C29.097,5.452 29.059,5.598 28.954,5.696 L26.001,8.447 ZM10.491,8.447 L11.188,12.333 C11.213,12.471 11.154,12.610 11.035,12.693 C10.916,12.775 10.759,12.786 10.629,12.721 L6.980,10.887 L3.332,12.721 C3.275,12.750 3.214,12.764 3.152,12.764 C3.072,12.764 2.993,12.739 2.926,12.693 C2.807,12.610 2.748,12.471 2.772,12.333 L3.469,8.447 L0.517,5.696 C0.412,5.598 0.374,5.452 0.420,5.319 C0.465,5.185 0.586,5.088 0.731,5.067 L4.810,4.501 L6.635,0.967 C6.700,0.840 6.834,0.761 6.980,0.761 C7.127,0.761 7.261,0.840 7.326,0.967 L9.150,4.501 L13.230,5.067 C13.375,5.088 13.496,5.185 13.541,5.319 C13.586,5.452 13.549,5.598 13.444,5.696 L10.491,8.447 Z'/%3E%3C/svg%3E");
        }

        .aff-sidebar .offer .card-wrapper .card .data .name:hover {
            color: <?php echo $global_accent;?> !important;
        }

        .aff-sidebar .aff-fav {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='31px' height='28px'%3E%3Cpath fill-rule='evenodd' stroke='%23<?php echo str_replace('#','',$global_accent);?>' stroke-width='2px' stroke-linecap='butt' stroke-linejoin='miter' fill='none' d='M26.779,3.446 C25.329,1.869 23.341,0.999 21.178,0.999 C19.562,0.999 18.082,1.513 16.779,2.524 C16.121,3.035 15.525,3.660 15.000,4.389 C14.475,3.660 13.879,3.035 13.221,2.524 C11.918,1.513 10.438,0.999 8.822,0.999 C6.660,0.999 4.671,1.869 3.221,3.446 C1.789,5.006 1.000,7.137 1.000,9.445 C1.000,11.821 1.882,13.997 3.777,16.292 C5.472,18.344 7.908,20.427 10.729,22.840 C11.692,23.663 12.784,24.598 13.918,25.592 C14.217,25.855 14.601,26.000 15.000,26.000 C15.398,26.000 15.783,25.855 16.082,25.592 C17.216,24.598 18.308,23.663 19.272,22.840 C22.092,20.426 24.528,18.344 26.223,16.291 C28.118,13.997 29.000,11.821 29.000,9.445 C29.000,7.137 28.211,5.006 26.779,3.446 Z'/%3E%3C/svg%3E");
        }

        .aff-sidebar .aff-fav.favorited {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='28px' height='25px'%3E%3Cpath fill-rule='evenodd' fill='%23<?php echo str_replace('#','',$global_accent);?>' d='M25.779,2.446 C24.329,0.869 22.341,-0.001 20.178,-0.001 C18.562,-0.001 17.082,0.513 15.779,1.524 C15.121,2.035 14.525,2.660 14.000,3.389 C13.475,2.660 12.879,2.035 12.221,1.524 C10.918,0.513 9.438,-0.001 7.822,-0.001 C5.660,-0.001 3.671,0.869 2.221,2.446 C0.789,4.006 -0.000,6.137 -0.000,8.445 C-0.000,10.821 0.882,12.997 2.777,15.292 C4.472,17.344 6.908,19.427 9.729,21.840 C10.692,22.663 11.784,23.598 12.918,24.592 C13.217,24.855 13.601,25.000 14.000,25.000 C14.398,25.000 14.783,24.855 15.082,24.592 C16.216,23.598 17.308,22.663 18.272,21.840 C21.092,19.426 23.528,17.344 25.223,15.291 C27.118,12.997 28.000,10.821 28.000,8.445 C28.000,6.137 27.211,4.006 25.779,2.446 Z'/%3E%3C/svg%3E");
        }

        .aff-sidebar .cta a {
            background-color: <?php echo $global_accent;?>;
        }

        .aff-sidebar .cta a:hover {
            background-color: <?php echo $global_hover;?>;
        }

        /* Settings */

        .aff-settings-wrapper .aff-settings .content .profile .picture .upload input + label {
            background-color: <?php echo $global_accent;?>;
        }

        .aff-settings-wrapper .aff-settings .content .profile .picture .upload input + label:hover {
            background-color: <?php echo $global_hover;?> !important;
        }

        .aff-settings-wrapper .aff-settings .content .profile .picture .delete svg path {
            fill: <?php echo $global_accent;?> !important;
        }

        .aff-settings-wrapper .aff-settings .content .save #settings-submit,
        .aff-settings-wrapper .aff-settings .content .save a,
        .aff-settings-wrapper .aff-settings .content .save input[type="submit"] {
            background-color: <?php echo $global_accent;?>;
        }

        .aff-settings-wrapper .aff-settings .content .save #settings-submit:hover,
        .aff-settings-wrapper .aff-settings .content .save a:hover,
        .aff-settings-wrapper .aff-settings .content .save input[type="submit"]:hover {
            background-color: <?php echo $global_hover;?>;
        }

        /* Inner page */

        .aff-inner-item-header .aff-rating:before {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='156px' height='26px'%3E%3Cpath fill-rule='evenodd' fill='%23<?php echo str_replace('#','',$global_accent);?>' d='M154.961,10.534 L148.900,16.220 L150.331,24.246 C150.382,24.532 150.259,24.821 150.016,24.991 C149.772,25.161 149.449,25.183 149.182,25.048 L141.691,21.259 L134.199,25.049 C134.083,25.108 133.957,25.136 133.831,25.136 C133.667,25.136 133.504,25.087 133.366,24.991 C133.122,24.821 133.000,24.532 133.051,24.246 L134.481,16.220 L128.421,10.534 C128.205,10.332 128.127,10.029 128.220,9.753 C128.314,9.478 128.561,9.277 128.859,9.235 L137.235,8.064 L140.981,0.761 C141.114,0.501 141.390,0.336 141.691,0.336 C141.992,0.336 142.267,0.501 142.401,0.761 L146.147,8.064 L154.522,9.235 C154.821,9.277 155.068,9.478 155.161,9.753 C155.255,10.029 155.177,10.332 154.961,10.534 ZM117.055,16.220 L118.486,24.246 C118.537,24.532 118.414,24.821 118.171,24.991 C117.927,25.161 117.604,25.183 117.337,25.048 L109.846,21.259 L102.354,25.049 C102.238,25.108 102.112,25.136 101.986,25.136 C101.822,25.136 101.659,25.087 101.521,24.991 C101.277,24.821 101.155,24.532 101.206,24.246 L102.636,16.220 L96.576,10.534 C96.360,10.332 96.282,10.029 96.375,9.753 C96.469,9.478 96.716,9.277 97.014,9.235 L105.390,8.064 L109.136,0.761 C109.269,0.501 109.545,0.336 109.846,0.336 C110.147,0.336 110.422,0.501 110.556,0.761 L114.301,8.064 L122.677,9.235 C122.976,9.277 123.223,9.478 123.316,9.753 C123.409,10.029 123.332,10.332 123.116,10.534 L117.055,16.220 ZM85.210,16.220 L86.641,24.246 C86.692,24.532 86.570,24.821 86.326,24.991 C86.082,25.161 85.759,25.183 85.492,25.048 L78.001,21.259 L70.509,25.049 C70.393,25.108 70.267,25.136 70.141,25.136 C69.977,25.136 69.814,25.087 69.676,24.991 C69.432,24.821 69.310,24.532 69.361,24.246 L70.791,16.220 L64.731,10.534 C64.515,10.332 64.437,10.029 64.530,9.753 C64.623,9.478 64.871,9.277 65.169,9.235 L73.545,8.064 L77.291,0.761 C77.424,0.501 77.700,0.336 78.001,0.336 C78.302,0.336 78.577,0.501 78.711,0.761 L82.457,8.064 L90.832,9.235 C91.131,9.277 91.378,9.478 91.471,9.753 C91.564,10.029 91.487,10.332 91.271,10.534 L85.210,16.220 ZM53.365,16.220 L54.796,24.246 C54.847,24.532 54.725,24.821 54.481,24.991 C54.237,25.161 53.914,25.183 53.647,25.048 L46.156,21.259 L38.664,25.049 C38.548,25.108 38.422,25.136 38.296,25.136 C38.132,25.136 37.969,25.087 37.831,24.991 C37.587,24.821 37.465,24.532 37.516,24.246 L38.946,16.220 L32.886,10.534 C32.670,10.332 32.592,10.029 32.685,9.753 C32.778,9.478 33.026,9.277 33.324,9.235 L41.700,8.064 L45.446,0.761 C45.580,0.501 45.855,0.336 46.156,0.336 C46.457,0.336 46.732,0.501 46.866,0.761 L50.611,8.064 L58.987,9.235 C59.286,9.277 59.533,9.478 59.626,9.753 C59.719,10.029 59.642,10.332 59.426,10.534 L53.365,16.220 ZM21.520,16.220 L22.951,24.246 C23.002,24.532 22.880,24.821 22.636,24.991 C22.392,25.161 22.069,25.183 21.802,25.048 L14.311,21.259 L6.819,25.049 C6.704,25.108 6.577,25.136 6.451,25.136 C6.287,25.136 6.124,25.087 5.986,24.991 C5.742,24.821 5.620,24.532 5.671,24.246 L7.101,16.220 L1.041,10.534 C0.825,10.332 0.747,10.029 0.840,9.753 C0.933,9.478 1.181,9.277 1.479,9.235 L9.855,8.064 L13.601,0.761 C13.734,0.501 14.010,0.336 14.311,0.336 C14.612,0.336 14.887,0.501 15.021,0.761 L18.767,8.064 L27.142,9.235 C27.441,9.277 27.688,9.478 27.781,9.753 C27.874,10.029 27.797,10.332 27.581,10.534 L21.520,16.220 Z'/%3E%3C/svg%3E");
        }

        .aff-inner-item-header .content .data .cta .button {
            background-color: <?php echo $global_accent;?>;
        }

        .aff-inner-item-header .content .data .cta .button:hover {
            background-color: <?php echo $global_hover;?>;
        }

        .aff-inner-item-header .aff-fav {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='31px' height='28px'%3E%3Cpath fill-rule='evenodd' stroke='%23<?php echo str_replace('#','',$global_accent);?>' stroke-width='2px' stroke-linecap='butt' stroke-linejoin='miter' fill='none' d='M26.779,3.446 C25.329,1.869 23.341,0.999 21.178,0.999 C19.562,0.999 18.082,1.513 16.779,2.524 C16.121,3.035 15.525,3.660 15.000,4.389 C14.475,3.660 13.879,3.035 13.221,2.524 C11.918,1.513 10.438,0.999 8.822,0.999 C6.660,0.999 4.671,1.869 3.221,3.446 C1.789,5.006 1.000,7.137 1.000,9.445 C1.000,11.821 1.882,13.997 3.777,16.292 C5.472,18.344 7.908,20.427 10.729,22.840 C11.692,23.663 12.784,24.598 13.918,25.592 C14.217,25.855 14.601,26.000 15.000,26.000 C15.398,26.000 15.783,25.855 16.082,25.592 C17.216,24.598 18.308,23.663 19.272,22.840 C22.092,20.426 24.528,18.344 26.223,16.291 C28.118,13.997 29.000,11.821 29.000,9.445 C29.000,7.137 28.211,5.006 26.779,3.446 Z'/%3E%3C/svg%3E");
        }

        .aff-inner-item-header .aff-fav.favorited {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='28px' height='25px'%3E%3Cpath fill-rule='evenodd' fill='%23<?php echo str_replace('#','',$global_accent);?>' d='M25.779,2.446 C24.329,0.869 22.341,-0.001 20.178,-0.001 C18.562,-0.001 17.082,0.513 15.779,1.524 C15.121,2.035 14.525,2.660 14.000,3.389 C13.475,2.660 12.879,2.035 12.221,1.524 C10.918,0.513 9.438,-0.001 7.822,-0.001 C5.660,-0.001 3.671,0.869 2.221,2.446 C0.789,4.006 -0.000,6.137 -0.000,8.445 C-0.000,10.821 0.882,12.997 2.777,15.292 C4.472,17.344 6.908,19.427 9.729,21.840 C10.692,22.663 11.784,23.598 12.918,24.592 C13.217,24.855 13.601,25.000 14.000,25.000 C14.398,25.000 14.783,24.855 15.082,24.592 C16.216,23.598 17.308,22.663 18.272,21.840 C21.092,19.426 23.528,17.344 25.223,15.291 C27.118,12.997 28.000,10.821 28.000,8.445 C28.000,6.137 27.211,4.006 25.779,2.446 Z'/%3E%3C/svg%3E");
        }

        .aff-inner-item-header .menu ul li a:after, .aff-inner-item-header .menu ul li div:after,
        .aff-inner-item-header .menu ul li .tag {
            background-color: <?php echo $global_accent;?> !important;
        }

        .aff-details-table .item .data a,
        .aff-details-table .learn-more span,
        .aff-pros-cons .learn-more span,
        .aff-details-table.is-table .data a {
            color: <?php echo $global_accent;?>;
        }

        .aff-details-table .learn-more span:after,
        .aff-pros-cons .learn-more span:after {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='12px' height='8px'%3E%3Cpath fill-rule='evenodd' fill='%23<?php echo str_replace('#','',$global_accent);?>' d='M11.863,1.346 L6.069,7.141 L6.000,7.072 L5.931,7.141 L0.137,1.346 L1.269,0.214 L6.000,4.946 L10.731,0.214 L11.863,1.346 Z'/%3E%3C/svg%3E");
        }

        .aff-youtube .play {
            background-color: <?php echo $global_accent;?>;
        }

        .aff-youtube .play:hover {
            background-color: <?php echo $global_hover;?>;
        }

        .aff-inner-item-header .content > .image .tag {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='18' height='16' viewBox='0 0 18 16'%3E%3Cdefs%3E%3Cstyle%3E .cls-1 %7B fill: %23<?php echo str_replace('#','',$global_accent);?>; fill-rule: evenodd; %7D %3C/style%3E%3C/defs%3E%3Cpath class='cls-1' d='M10.587,6.945a2.312,2.312,0,0,1,0,3.233,2.225,2.225,0,0,1-3.181,0,2.312,2.312,0,0,1,0-3.233,2.224,2.224,0,0,1,3.181,0m5.158-4.67H14.191L13.065-.011H4.927L3.8,2.276l-1.552,0A2.272,2.272,0,0,0,.006,4.564L0,13.7A2.27,2.27,0,0,0,2.249,15.99h13.5A2.27,2.27,0,0,0,17.994,13.7V4.561A2.27,2.27,0,0,0,15.745,2.275ZM9,13.134a4.572,4.572,0,1,1,4.5-4.572A4.541,4.541,0,0,1,9,13.134H9Z'/%3E%3C/svg%3E%0A");
        }

        .aff-game-header .game .report a:hover {
            color: <?php echo $global_accent;?>;
        }


        /* Bonuses */

        .aff-bonuses .card.is-light {
            background-color: <?php echo $global_accent;?>;
        }

        .aff-bonuses .card.is-light .cta .button {
            color: <?php echo $global_accent;?>;
        }

        .aff-bonuses .card.is-dark {
            background-color: <?php echo $global_background;?>;
        }

        .aff-bonuses .card.is-dark .cta .button {
            color: <?php echo $global_background;?>;
        }

        .aff-bonuses .card.is-image .cta .button {
            background-color: <?php echo $global_accent;?>;
        }

        .aff-bonuses .card.is-image .cta .button:hover {
            background-color: <?php echo $global_hover;?>;
        }

        /* Games grid */

        .aff-games-grid .aff-rating:before {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='156px' height='26px'%3E%3Cpath fill-rule='evenodd' fill='%23<?php echo str_replace('#','',$global_accent);?>' d='M154.961,10.534 L148.900,16.220 L150.331,24.246 C150.382,24.532 150.259,24.821 150.016,24.991 C149.772,25.161 149.449,25.183 149.182,25.048 L141.691,21.259 L134.199,25.049 C134.083,25.108 133.957,25.136 133.831,25.136 C133.667,25.136 133.504,25.087 133.366,24.991 C133.122,24.821 133.000,24.532 133.051,24.246 L134.481,16.220 L128.421,10.534 C128.205,10.332 128.127,10.029 128.220,9.753 C128.314,9.478 128.561,9.277 128.859,9.235 L137.235,8.064 L140.981,0.761 C141.114,0.501 141.390,0.336 141.691,0.336 C141.992,0.336 142.267,0.501 142.401,0.761 L146.147,8.064 L154.522,9.235 C154.821,9.277 155.068,9.478 155.161,9.753 C155.255,10.029 155.177,10.332 154.961,10.534 ZM117.055,16.220 L118.486,24.246 C118.537,24.532 118.414,24.821 118.171,24.991 C117.927,25.161 117.604,25.183 117.337,25.048 L109.846,21.259 L102.354,25.049 C102.238,25.108 102.112,25.136 101.986,25.136 C101.822,25.136 101.659,25.087 101.521,24.991 C101.277,24.821 101.155,24.532 101.206,24.246 L102.636,16.220 L96.576,10.534 C96.360,10.332 96.282,10.029 96.375,9.753 C96.469,9.478 96.716,9.277 97.014,9.235 L105.390,8.064 L109.136,0.761 C109.269,0.501 109.545,0.336 109.846,0.336 C110.147,0.336 110.422,0.501 110.556,0.761 L114.301,8.064 L122.677,9.235 C122.976,9.277 123.223,9.478 123.316,9.753 C123.409,10.029 123.332,10.332 123.116,10.534 L117.055,16.220 ZM85.210,16.220 L86.641,24.246 C86.692,24.532 86.570,24.821 86.326,24.991 C86.082,25.161 85.759,25.183 85.492,25.048 L78.001,21.259 L70.509,25.049 C70.393,25.108 70.267,25.136 70.141,25.136 C69.977,25.136 69.814,25.087 69.676,24.991 C69.432,24.821 69.310,24.532 69.361,24.246 L70.791,16.220 L64.731,10.534 C64.515,10.332 64.437,10.029 64.530,9.753 C64.623,9.478 64.871,9.277 65.169,9.235 L73.545,8.064 L77.291,0.761 C77.424,0.501 77.700,0.336 78.001,0.336 C78.302,0.336 78.577,0.501 78.711,0.761 L82.457,8.064 L90.832,9.235 C91.131,9.277 91.378,9.478 91.471,9.753 C91.564,10.029 91.487,10.332 91.271,10.534 L85.210,16.220 ZM53.365,16.220 L54.796,24.246 C54.847,24.532 54.725,24.821 54.481,24.991 C54.237,25.161 53.914,25.183 53.647,25.048 L46.156,21.259 L38.664,25.049 C38.548,25.108 38.422,25.136 38.296,25.136 C38.132,25.136 37.969,25.087 37.831,24.991 C37.587,24.821 37.465,24.532 37.516,24.246 L38.946,16.220 L32.886,10.534 C32.670,10.332 32.592,10.029 32.685,9.753 C32.778,9.478 33.026,9.277 33.324,9.235 L41.700,8.064 L45.446,0.761 C45.580,0.501 45.855,0.336 46.156,0.336 C46.457,0.336 46.732,0.501 46.866,0.761 L50.611,8.064 L58.987,9.235 C59.286,9.277 59.533,9.478 59.626,9.753 C59.719,10.029 59.642,10.332 59.426,10.534 L53.365,16.220 ZM21.520,16.220 L22.951,24.246 C23.002,24.532 22.880,24.821 22.636,24.991 C22.392,25.161 22.069,25.183 21.802,25.048 L14.311,21.259 L6.819,25.049 C6.704,25.108 6.577,25.136 6.451,25.136 C6.287,25.136 6.124,25.087 5.986,24.991 C5.742,24.821 5.620,24.532 5.671,24.246 L7.101,16.220 L1.041,10.534 C0.825,10.332 0.747,10.029 0.840,9.753 C0.933,9.478 1.181,9.277 1.479,9.235 L9.855,8.064 L13.601,0.761 C13.734,0.501 14.010,0.336 14.311,0.336 C14.612,0.336 14.887,0.501 15.021,0.761 L18.767,8.064 L27.142,9.235 C27.441,9.277 27.688,9.478 27.781,9.753 C27.874,10.029 27.797,10.332 27.581,10.534 L21.520,16.220 Z'/%3E%3C/svg%3E");
        }

        .aff-games-grid .game-card .cta .button {
            background-color: <?php echo $global_accent;?>;
        }

        .aff-games-grid .game-card .cta .button:hover {
            background-color: <?php echo $global_hover;?>;
        }

        .aff-games-grid .load-more .button,
        .aff-news-grid .load-more .button {
            color: <?php echo $global_accent;?>;
        }

        .aff-forgot-password .save a,
        .aff-forgot-password .save input[type="submit"] {
            background-color: <?php echo $global_accent;?>;
        }

        .aff-forgot-password .save a:hover,
        .aff-forgot-password .save input[type="submit"]:hover {
            background-color: <?php echo $global_hover;?>;
        }


        /* Element styles */
        <?php
        // Check value exists.
        if( have_rows('page_content') ):

            // Loop through rows.
            while ( have_rows('page_content') ) : the_row();

                // Case: Paragraph layout.
                if( get_row_layout() == 'header_with_blocks' ):?>

        <?php if (get_sub_field('accent_color') || get_sub_field('background_color')):?>

        /* Header */
        .aff-header-title h1, .aff-header-title h2,
        .aff-header-title .desc a,
        .aff-header-title .ffwd > a span {
            color: <?php echo get_sub_field('accent_color');?> !important;
        }

        .aff-header-title .ffwd > a svg path {
            fill: <?php echo get_sub_field('accent_color');?> !important;
        }

        <?php if (get_sub_field('background_color')):?>
        .aff-header-title {
            background: <?php echo get_sub_field('background_color');?> !important;
        }

        <?php endif;?>

        /* Shortcuts */

        .aff-shortcuts .item:hover h2,
        .aff-shortcuts .item:hover h3 {
            color: <?php echo get_sub_field('accent_color');?> !important;
        }

        .aff-shortcuts .item .star path {
            fill: <?php echo get_sub_field('accent_color');?> !important;
        }

        <?php endif;?>

        <?php
       // echo get_sub_field('accent_color');

    // Case: Download layout.
    elseif( get_row_layout() == 'menu_acf' ):?>


        <?php if (get_sub_field('accent_color')):?>

        /* Custom menu */

        body div.aff-custom-menu .menu ul li a {
            color: <?php echo get_sub_field('accent_color');?> !important;
        }

        <?php endif;?>

        <?php

        elseif( get_row_layout() == 'top_products' ):?>

        <?php if (get_sub_field('accent_color') || get_sub_field('hover_color')):?>

        /* Main items list */

        .aff-main-items-list .item .name:hover,
        .aff-main-items-list .item .link:hover {
            color: <?php echo get_sub_field('accent_color');?> !important;
        }

        .aff-main-items-list .item .desc .text span,
        .aff-main-items-list .item .cta .text {
            color: <?php echo get_sub_field('accent_color');?> !important;
        }

        .aff-main-items-list .item .cta .button {
            background: <?php echo get_sub_field('accent_color');?> !important;
        }

        .aff-main-items-list .item .cta .button:hover {
            background: <?php echo get_sub_field('hover_color');?> !important;
        }

        .aff-slots-wrapper .aff-main-items-list.is-ordered .items-list .item::before {
            background-color: <?php echo get_sub_field('accent_color');?>;
        }

        .aff-main-items-list .aff-fav {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='31px' height='28px'%3E%3Cpath fill-rule='evenodd' stroke='%23<?php echo str_replace('#','',get_sub_field('accent_color'));?>' stroke-width='2px' stroke-linecap='butt' stroke-linejoin='miter' fill='none' d='M26.779,3.446 C25.329,1.869 23.341,0.999 21.178,0.999 C19.562,0.999 18.082,1.513 16.779,2.524 C16.121,3.035 15.525,3.660 15.000,4.389 C14.475,3.660 13.879,3.035 13.221,2.524 C11.918,1.513 10.438,0.999 8.822,0.999 C6.660,0.999 4.671,1.869 3.221,3.446 C1.789,5.006 1.000,7.137 1.000,9.445 C1.000,11.821 1.882,13.997 3.777,16.292 C5.472,18.344 7.908,20.427 10.729,22.840 C11.692,23.663 12.784,24.598 13.918,25.592 C14.217,25.855 14.601,26.000 15.000,26.000 C15.398,26.000 15.783,25.855 16.082,25.592 C17.216,24.598 18.308,23.663 19.272,22.840 C22.092,20.426 24.528,18.344 26.223,16.291 C28.118,13.997 29.000,11.821 29.000,9.445 C29.000,7.137 28.211,5.006 26.779,3.446 Z'/%3E%3C/svg%3E");
        }

        .aff-main-items-list .aff-rating:before {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='156px' height='26px'%3E%3Cpath fill-rule='evenodd' fill='%23<?php echo str_replace('#','',get_sub_field('accent_color'));?>' d='M154.961,10.534 L148.900,16.220 L150.331,24.246 C150.382,24.532 150.259,24.821 150.016,24.991 C149.772,25.161 149.449,25.183 149.182,25.048 L141.691,21.259 L134.199,25.049 C134.083,25.108 133.957,25.136 133.831,25.136 C133.667,25.136 133.504,25.087 133.366,24.991 C133.122,24.821 133.000,24.532 133.051,24.246 L134.481,16.220 L128.421,10.534 C128.205,10.332 128.127,10.029 128.220,9.753 C128.314,9.478 128.561,9.277 128.859,9.235 L137.235,8.064 L140.981,0.761 C141.114,0.501 141.390,0.336 141.691,0.336 C141.992,0.336 142.267,0.501 142.401,0.761 L146.147,8.064 L154.522,9.235 C154.821,9.277 155.068,9.478 155.161,9.753 C155.255,10.029 155.177,10.332 154.961,10.534 ZM117.055,16.220 L118.486,24.246 C118.537,24.532 118.414,24.821 118.171,24.991 C117.927,25.161 117.604,25.183 117.337,25.048 L109.846,21.259 L102.354,25.049 C102.238,25.108 102.112,25.136 101.986,25.136 C101.822,25.136 101.659,25.087 101.521,24.991 C101.277,24.821 101.155,24.532 101.206,24.246 L102.636,16.220 L96.576,10.534 C96.360,10.332 96.282,10.029 96.375,9.753 C96.469,9.478 96.716,9.277 97.014,9.235 L105.390,8.064 L109.136,0.761 C109.269,0.501 109.545,0.336 109.846,0.336 C110.147,0.336 110.422,0.501 110.556,0.761 L114.301,8.064 L122.677,9.235 C122.976,9.277 123.223,9.478 123.316,9.753 C123.409,10.029 123.332,10.332 123.116,10.534 L117.055,16.220 ZM85.210,16.220 L86.641,24.246 C86.692,24.532 86.570,24.821 86.326,24.991 C86.082,25.161 85.759,25.183 85.492,25.048 L78.001,21.259 L70.509,25.049 C70.393,25.108 70.267,25.136 70.141,25.136 C69.977,25.136 69.814,25.087 69.676,24.991 C69.432,24.821 69.310,24.532 69.361,24.246 L70.791,16.220 L64.731,10.534 C64.515,10.332 64.437,10.029 64.530,9.753 C64.623,9.478 64.871,9.277 65.169,9.235 L73.545,8.064 L77.291,0.761 C77.424,0.501 77.700,0.336 78.001,0.336 C78.302,0.336 78.577,0.501 78.711,0.761 L82.457,8.064 L90.832,9.235 C91.131,9.277 91.378,9.478 91.471,9.753 C91.564,10.029 91.487,10.332 91.271,10.534 L85.210,16.220 ZM53.365,16.220 L54.796,24.246 C54.847,24.532 54.725,24.821 54.481,24.991 C54.237,25.161 53.914,25.183 53.647,25.048 L46.156,21.259 L38.664,25.049 C38.548,25.108 38.422,25.136 38.296,25.136 C38.132,25.136 37.969,25.087 37.831,24.991 C37.587,24.821 37.465,24.532 37.516,24.246 L38.946,16.220 L32.886,10.534 C32.670,10.332 32.592,10.029 32.685,9.753 C32.778,9.478 33.026,9.277 33.324,9.235 L41.700,8.064 L45.446,0.761 C45.580,0.501 45.855,0.336 46.156,0.336 C46.457,0.336 46.732,0.501 46.866,0.761 L50.611,8.064 L58.987,9.235 C59.286,9.277 59.533,9.478 59.626,9.753 C59.719,10.029 59.642,10.332 59.426,10.534 L53.365,16.220 ZM21.520,16.220 L22.951,24.246 C23.002,24.532 22.880,24.821 22.636,24.991 C22.392,25.161 22.069,25.183 21.802,25.048 L14.311,21.259 L6.819,25.049 C6.704,25.108 6.577,25.136 6.451,25.136 C6.287,25.136 6.124,25.087 5.986,24.991 C5.742,24.821 5.620,24.532 5.671,24.246 L7.101,16.220 L1.041,10.534 C0.825,10.332 0.747,10.029 0.840,9.753 C0.933,9.478 1.181,9.277 1.479,9.235 L9.855,8.064 L13.601,0.761 C13.734,0.501 14.010,0.336 14.311,0.336 C14.612,0.336 14.887,0.501 15.021,0.761 L18.767,8.064 L27.142,9.235 C27.441,9.277 27.688,9.478 27.781,9.753 C27.874,10.029 27.797,10.332 27.581,10.534 L21.520,16.220 Z'/%3E%3C/svg%3E");
        }

        .aff-main-items-list .aff-fav.favorited {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='28px' height='25px'%3E%3Cpath fill-rule='evenodd' fill='%23<?php echo str_replace('#','',get_sub_field('accent_color'));?>' d='M25.779,2.446 C24.329,0.869 22.341,-0.001 20.178,-0.001 C18.562,-0.001 17.082,0.513 15.779,1.524 C15.121,2.035 14.525,2.660 14.000,3.389 C13.475,2.660 12.879,2.035 12.221,1.524 C10.918,0.513 9.438,-0.001 7.822,-0.001 C5.660,-0.001 3.671,0.869 2.221,2.446 C0.789,4.006 -0.000,6.137 -0.000,8.445 C-0.000,10.821 0.882,12.997 2.777,15.292 C4.472,17.344 6.908,19.427 9.729,21.840 C10.692,22.663 11.784,23.598 12.918,24.592 C13.217,24.855 13.601,25.000 14.000,25.000 C14.398,25.000 14.783,24.855 15.082,24.592 C16.216,23.598 17.308,22.663 18.272,21.840 C21.092,19.426 23.528,17.344 25.223,15.291 C27.118,12.997 28.000,10.821 28.000,8.445 C28.000,6.137 27.211,4.006 25.779,2.446 Z'/%3E%3C/svg%3E");
        }

        <?php endif;?>

        <?php

        elseif( get_row_layout() == 'product_cards' || get_row_layout() == 'which_one_is_better' ):?>

        <?php if (get_sub_field('background_color') || get_sub_field('accent_color') || get_sub_field('hover_color') || get_sub_field('text_color')):?>

        <?php if(get_sub_field('text_color')):?>
        /* Main items grid item custom pros cons colors */
        .aff-pros-cons ul li,
        .aff-main-items-grid .item .desc .text {
            color: <?php echo get_sub_field('text_color');?> !important;
        }

        <?php else:?>

        /* Main items grid */

        .aff-main-items-grid .item .badge,
        .aff-main-items-grid .item .details {
            background-color: <?php echo get_sub_field('background_color');?> !important;
        }

        .aff-main-items-grid .item .desc .text span,
        .aff-main-items-grid .item .details .cta .button {
            color: <?php echo get_sub_field('accent_color');?> !important;
        }

        .aff-main-items-grid .item .name:hover {
            color: <?php echo get_sub_field('hover_color');?> !important;
        }

        .aff-main-items-grid .item > .cta .button {
            background-color: <?php echo get_sub_field('accent_color');?> !important;
        }

        .aff-main-items-grid .item > .cta .button:hover {
            background-color: <?php echo get_sub_field('hover_color');?> !important;
        }

        .aff-main-items-grid .aff-fav {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='31px' height='28px'%3E%3Cpath fill-rule='evenodd' stroke='%23<?php echo str_replace('#','',get_sub_field('accent_color'));?>' stroke-width='2px' stroke-linecap='butt' stroke-linejoin='miter' fill='none' d='M26.779,3.446 C25.329,1.869 23.341,0.999 21.178,0.999 C19.562,0.999 18.082,1.513 16.779,2.524 C16.121,3.035 15.525,3.660 15.000,4.389 C14.475,3.660 13.879,3.035 13.221,2.524 C11.918,1.513 10.438,0.999 8.822,0.999 C6.660,0.999 4.671,1.869 3.221,3.446 C1.789,5.006 1.000,7.137 1.000,9.445 C1.000,11.821 1.882,13.997 3.777,16.292 C5.472,18.344 7.908,20.427 10.729,22.840 C11.692,23.663 12.784,24.598 13.918,25.592 C14.217,25.855 14.601,26.000 15.000,26.000 C15.398,26.000 15.783,25.855 16.082,25.592 C17.216,24.598 18.308,23.663 19.272,22.840 C22.092,20.426 24.528,18.344 26.223,16.291 C28.118,13.997 29.000,11.821 29.000,9.445 C29.000,7.137 28.211,5.006 26.779,3.446 Z'/%3E%3C/svg%3E");
        }

        .aff-main-items-grid .aff-fav.favorited {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='28px' height='25px'%3E%3Cpath fill-rule='evenodd' fill='%23<?php echo str_replace('#','',get_sub_field('accent_color'));?>' d='M25.779,2.446 C24.329,0.869 22.341,-0.001 20.178,-0.001 C18.562,-0.001 17.082,0.513 15.779,1.524 C15.121,2.035 14.525,2.660 14.000,3.389 C13.475,2.660 12.879,2.035 12.221,1.524 C10.918,0.513 9.438,-0.001 7.822,-0.001 C5.660,-0.001 3.671,0.869 2.221,2.446 C0.789,4.006 -0.000,6.137 -0.000,8.445 C-0.000,10.821 0.882,12.997 2.777,15.292 C4.472,17.344 6.908,19.427 9.729,21.840 C10.692,22.663 11.784,23.598 12.918,24.592 C13.217,24.855 13.601,25.000 14.000,25.000 C14.398,25.000 14.783,24.855 15.082,24.592 C16.216,23.598 17.308,22.663 18.272,21.840 C21.092,19.426 23.528,17.344 25.223,15.291 C27.118,12.997 28.000,10.821 28.000,8.445 C28.000,6.137 27.211,4.006 25.779,2.446 Z'/%3E%3C/svg%3E");
        }

        .aff-main-items-grid .aff-rating:before {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='156px' height='26px'%3E%3Cpath fill-rule='evenodd' fill='%23<?php echo str_replace('#','',get_sub_field('accent_color'));?>' d='M154.961,10.534 L148.900,16.220 L150.331,24.246 C150.382,24.532 150.259,24.821 150.016,24.991 C149.772,25.161 149.449,25.183 149.182,25.048 L141.691,21.259 L134.199,25.049 C134.083,25.108 133.957,25.136 133.831,25.136 C133.667,25.136 133.504,25.087 133.366,24.991 C133.122,24.821 133.000,24.532 133.051,24.246 L134.481,16.220 L128.421,10.534 C128.205,10.332 128.127,10.029 128.220,9.753 C128.314,9.478 128.561,9.277 128.859,9.235 L137.235,8.064 L140.981,0.761 C141.114,0.501 141.390,0.336 141.691,0.336 C141.992,0.336 142.267,0.501 142.401,0.761 L146.147,8.064 L154.522,9.235 C154.821,9.277 155.068,9.478 155.161,9.753 C155.255,10.029 155.177,10.332 154.961,10.534 ZM117.055,16.220 L118.486,24.246 C118.537,24.532 118.414,24.821 118.171,24.991 C117.927,25.161 117.604,25.183 117.337,25.048 L109.846,21.259 L102.354,25.049 C102.238,25.108 102.112,25.136 101.986,25.136 C101.822,25.136 101.659,25.087 101.521,24.991 C101.277,24.821 101.155,24.532 101.206,24.246 L102.636,16.220 L96.576,10.534 C96.360,10.332 96.282,10.029 96.375,9.753 C96.469,9.478 96.716,9.277 97.014,9.235 L105.390,8.064 L109.136,0.761 C109.269,0.501 109.545,0.336 109.846,0.336 C110.147,0.336 110.422,0.501 110.556,0.761 L114.301,8.064 L122.677,9.235 C122.976,9.277 123.223,9.478 123.316,9.753 C123.409,10.029 123.332,10.332 123.116,10.534 L117.055,16.220 ZM85.210,16.220 L86.641,24.246 C86.692,24.532 86.570,24.821 86.326,24.991 C86.082,25.161 85.759,25.183 85.492,25.048 L78.001,21.259 L70.509,25.049 C70.393,25.108 70.267,25.136 70.141,25.136 C69.977,25.136 69.814,25.087 69.676,24.991 C69.432,24.821 69.310,24.532 69.361,24.246 L70.791,16.220 L64.731,10.534 C64.515,10.332 64.437,10.029 64.530,9.753 C64.623,9.478 64.871,9.277 65.169,9.235 L73.545,8.064 L77.291,0.761 C77.424,0.501 77.700,0.336 78.001,0.336 C78.302,0.336 78.577,0.501 78.711,0.761 L82.457,8.064 L90.832,9.235 C91.131,9.277 91.378,9.478 91.471,9.753 C91.564,10.029 91.487,10.332 91.271,10.534 L85.210,16.220 ZM53.365,16.220 L54.796,24.246 C54.847,24.532 54.725,24.821 54.481,24.991 C54.237,25.161 53.914,25.183 53.647,25.048 L46.156,21.259 L38.664,25.049 C38.548,25.108 38.422,25.136 38.296,25.136 C38.132,25.136 37.969,25.087 37.831,24.991 C37.587,24.821 37.465,24.532 37.516,24.246 L38.946,16.220 L32.886,10.534 C32.670,10.332 32.592,10.029 32.685,9.753 C32.778,9.478 33.026,9.277 33.324,9.235 L41.700,8.064 L45.446,0.761 C45.580,0.501 45.855,0.336 46.156,0.336 C46.457,0.336 46.732,0.501 46.866,0.761 L50.611,8.064 L58.987,9.235 C59.286,9.277 59.533,9.478 59.626,9.753 C59.719,10.029 59.642,10.332 59.426,10.534 L53.365,16.220 ZM21.520,16.220 L22.951,24.246 C23.002,24.532 22.880,24.821 22.636,24.991 C22.392,25.161 22.069,25.183 21.802,25.048 L14.311,21.259 L6.819,25.049 C6.704,25.108 6.577,25.136 6.451,25.136 C6.287,25.136 6.124,25.087 5.986,24.991 C5.742,24.821 5.620,24.532 5.671,24.246 L7.101,16.220 L1.041,10.534 C0.825,10.332 0.747,10.029 0.840,9.753 C0.933,9.478 1.181,9.277 1.479,9.235 L9.855,8.064 L13.601,0.761 C13.734,0.501 14.010,0.336 14.311,0.336 C14.612,0.336 14.887,0.501 15.021,0.761 L18.767,8.064 L27.142,9.235 C27.441,9.277 27.688,9.478 27.781,9.753 C27.874,10.029 27.797,10.332 27.581,10.534 L21.520,16.220 Z'/%3E%3C/svg%3E");
        }

        <?php endif;?>



        <?php endif;?>

        <?php
        elseif( get_row_layout() == 'banner' ):?>

        <?php if (get_sub_field('background_color_2') || get_sub_field('accent_color') || get_sub_field('hover_color')):?>
        /* Promo */

        .aff-promo.is-dark {
            background-color: <?php echo get_sub_field('background_color_2');?> !important;
        }

        .aff-promo.is-light {
            background-color: <?php echo get_sub_field('background_color_2');?> !important;
        }

        .aff-promo .button {
            background-color: <?php echo get_sub_field('accent_color');?> !important;
        }

        .aff-promo .button:hover {
            background-color: <?php echo get_sub_field('hover_color');?> !important;
        }

        .aff-promo .suptitle {
            color: <?php echo get_sub_field('accent_color');?> !important;
        }

        .aff-promo .aff-rating:before {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='156px' height='26px'%3E%3Cpath fill-rule='evenodd' fill='%23<?php echo str_replace('#','',get_sub_field('accent_color'));?>' d='M154.961,10.534 L148.900,16.220 L150.331,24.246 C150.382,24.532 150.259,24.821 150.016,24.991 C149.772,25.161 149.449,25.183 149.182,25.048 L141.691,21.259 L134.199,25.049 C134.083,25.108 133.957,25.136 133.831,25.136 C133.667,25.136 133.504,25.087 133.366,24.991 C133.122,24.821 133.000,24.532 133.051,24.246 L134.481,16.220 L128.421,10.534 C128.205,10.332 128.127,10.029 128.220,9.753 C128.314,9.478 128.561,9.277 128.859,9.235 L137.235,8.064 L140.981,0.761 C141.114,0.501 141.390,0.336 141.691,0.336 C141.992,0.336 142.267,0.501 142.401,0.761 L146.147,8.064 L154.522,9.235 C154.821,9.277 155.068,9.478 155.161,9.753 C155.255,10.029 155.177,10.332 154.961,10.534 ZM117.055,16.220 L118.486,24.246 C118.537,24.532 118.414,24.821 118.171,24.991 C117.927,25.161 117.604,25.183 117.337,25.048 L109.846,21.259 L102.354,25.049 C102.238,25.108 102.112,25.136 101.986,25.136 C101.822,25.136 101.659,25.087 101.521,24.991 C101.277,24.821 101.155,24.532 101.206,24.246 L102.636,16.220 L96.576,10.534 C96.360,10.332 96.282,10.029 96.375,9.753 C96.469,9.478 96.716,9.277 97.014,9.235 L105.390,8.064 L109.136,0.761 C109.269,0.501 109.545,0.336 109.846,0.336 C110.147,0.336 110.422,0.501 110.556,0.761 L114.301,8.064 L122.677,9.235 C122.976,9.277 123.223,9.478 123.316,9.753 C123.409,10.029 123.332,10.332 123.116,10.534 L117.055,16.220 ZM85.210,16.220 L86.641,24.246 C86.692,24.532 86.570,24.821 86.326,24.991 C86.082,25.161 85.759,25.183 85.492,25.048 L78.001,21.259 L70.509,25.049 C70.393,25.108 70.267,25.136 70.141,25.136 C69.977,25.136 69.814,25.087 69.676,24.991 C69.432,24.821 69.310,24.532 69.361,24.246 L70.791,16.220 L64.731,10.534 C64.515,10.332 64.437,10.029 64.530,9.753 C64.623,9.478 64.871,9.277 65.169,9.235 L73.545,8.064 L77.291,0.761 C77.424,0.501 77.700,0.336 78.001,0.336 C78.302,0.336 78.577,0.501 78.711,0.761 L82.457,8.064 L90.832,9.235 C91.131,9.277 91.378,9.478 91.471,9.753 C91.564,10.029 91.487,10.332 91.271,10.534 L85.210,16.220 ZM53.365,16.220 L54.796,24.246 C54.847,24.532 54.725,24.821 54.481,24.991 C54.237,25.161 53.914,25.183 53.647,25.048 L46.156,21.259 L38.664,25.049 C38.548,25.108 38.422,25.136 38.296,25.136 C38.132,25.136 37.969,25.087 37.831,24.991 C37.587,24.821 37.465,24.532 37.516,24.246 L38.946,16.220 L32.886,10.534 C32.670,10.332 32.592,10.029 32.685,9.753 C32.778,9.478 33.026,9.277 33.324,9.235 L41.700,8.064 L45.446,0.761 C45.580,0.501 45.855,0.336 46.156,0.336 C46.457,0.336 46.732,0.501 46.866,0.761 L50.611,8.064 L58.987,9.235 C59.286,9.277 59.533,9.478 59.626,9.753 C59.719,10.029 59.642,10.332 59.426,10.534 L53.365,16.220 ZM21.520,16.220 L22.951,24.246 C23.002,24.532 22.880,24.821 22.636,24.991 C22.392,25.161 22.069,25.183 21.802,25.048 L14.311,21.259 L6.819,25.049 C6.704,25.108 6.577,25.136 6.451,25.136 C6.287,25.136 6.124,25.087 5.986,24.991 C5.742,24.821 5.620,24.532 5.671,24.246 L7.101,16.220 L1.041,10.534 C0.825,10.332 0.747,10.029 0.840,9.753 C0.933,9.478 1.181,9.277 1.479,9.235 L9.855,8.064 L13.601,0.761 C13.734,0.501 14.010,0.336 14.311,0.336 C14.612,0.336 14.887,0.501 15.021,0.761 L18.767,8.064 L27.142,9.235 C27.441,9.277 27.688,9.478 27.781,9.753 C27.874,10.029 27.797,10.332 27.581,10.534 L21.520,16.220 Z'/%3E%3C/svg%3E");
        }

        <?php endif;?>

        <?php
        elseif( get_row_layout() == 'text_element' ):?>

        <?php if (get_sub_field('background_color') || get_sub_field('accent_color') || get_sub_field('hover_color')):?>
        /* Text block */

        .aff-text-v2 .suptitle {
            color: <?php echo get_sub_field('accent_color');?> !important;
        }

        <?php endif;?>


        <?php elseif( get_row_layout() == 'line' ):

          //  get_template_part('layout/acf/line');

        elseif( get_row_layout() == 'steps' ):?>

        <?php if (get_sub_field('background_color') || get_sub_field('accent_color') || get_sub_field('hover_color')):?>
        /* Steps */

        .aff-step .icon {
            background: <?php echo get_sub_field('accent_color');?> !important;
        }

        <?php endif;?>


        <?php elseif( get_row_layout() == 'compare_products' ):?>

        <?php if (get_sub_field('background_color') || get_sub_field('accent_color') || get_sub_field('hover_color')):?>

        /* Main items table */

        body div.aff-table > table tr.heading .name:hover {
            color: <?php echo get_sub_field('hover_color');?> !important;
        }

        body div.aff-table > table tbody > tr > td .bonus span,
        body div.aff-table > table tr.tfoot .button {
            color: <?php echo get_sub_field('accent_color');?> !important;
        }

        body div.aff-table > table .info-marker .icon,
        body div.aff-table > table tr.tfoot > td {
            background-color: <?php echo get_sub_field('background_color');?> !important;
        }

        body div.aff-table > table tr.heading > td {
            background: <?php echo get_sub_field('background_color');?>;
        }

        body div.aff-table > table tr.tfoot .button:hover {
            background: <?php echo get_sub_field('hover_color');?>;
        }

        body div.aff-main-items-table .aff-rating:before {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='156px' height='26px'%3E%3Cpath fill-rule='evenodd' fill='%23<?php echo str_replace('#','',get_sub_field('accent_color'));?>' d='M154.961,10.534 L148.900,16.220 L150.331,24.246 C150.382,24.532 150.259,24.821 150.016,24.991 C149.772,25.161 149.449,25.183 149.182,25.048 L141.691,21.259 L134.199,25.049 C134.083,25.108 133.957,25.136 133.831,25.136 C133.667,25.136 133.504,25.087 133.366,24.991 C133.122,24.821 133.000,24.532 133.051,24.246 L134.481,16.220 L128.421,10.534 C128.205,10.332 128.127,10.029 128.220,9.753 C128.314,9.478 128.561,9.277 128.859,9.235 L137.235,8.064 L140.981,0.761 C141.114,0.501 141.390,0.336 141.691,0.336 C141.992,0.336 142.267,0.501 142.401,0.761 L146.147,8.064 L154.522,9.235 C154.821,9.277 155.068,9.478 155.161,9.753 C155.255,10.029 155.177,10.332 154.961,10.534 ZM117.055,16.220 L118.486,24.246 C118.537,24.532 118.414,24.821 118.171,24.991 C117.927,25.161 117.604,25.183 117.337,25.048 L109.846,21.259 L102.354,25.049 C102.238,25.108 102.112,25.136 101.986,25.136 C101.822,25.136 101.659,25.087 101.521,24.991 C101.277,24.821 101.155,24.532 101.206,24.246 L102.636,16.220 L96.576,10.534 C96.360,10.332 96.282,10.029 96.375,9.753 C96.469,9.478 96.716,9.277 97.014,9.235 L105.390,8.064 L109.136,0.761 C109.269,0.501 109.545,0.336 109.846,0.336 C110.147,0.336 110.422,0.501 110.556,0.761 L114.301,8.064 L122.677,9.235 C122.976,9.277 123.223,9.478 123.316,9.753 C123.409,10.029 123.332,10.332 123.116,10.534 L117.055,16.220 ZM85.210,16.220 L86.641,24.246 C86.692,24.532 86.570,24.821 86.326,24.991 C86.082,25.161 85.759,25.183 85.492,25.048 L78.001,21.259 L70.509,25.049 C70.393,25.108 70.267,25.136 70.141,25.136 C69.977,25.136 69.814,25.087 69.676,24.991 C69.432,24.821 69.310,24.532 69.361,24.246 L70.791,16.220 L64.731,10.534 C64.515,10.332 64.437,10.029 64.530,9.753 C64.623,9.478 64.871,9.277 65.169,9.235 L73.545,8.064 L77.291,0.761 C77.424,0.501 77.700,0.336 78.001,0.336 C78.302,0.336 78.577,0.501 78.711,0.761 L82.457,8.064 L90.832,9.235 C91.131,9.277 91.378,9.478 91.471,9.753 C91.564,10.029 91.487,10.332 91.271,10.534 L85.210,16.220 ZM53.365,16.220 L54.796,24.246 C54.847,24.532 54.725,24.821 54.481,24.991 C54.237,25.161 53.914,25.183 53.647,25.048 L46.156,21.259 L38.664,25.049 C38.548,25.108 38.422,25.136 38.296,25.136 C38.132,25.136 37.969,25.087 37.831,24.991 C37.587,24.821 37.465,24.532 37.516,24.246 L38.946,16.220 L32.886,10.534 C32.670,10.332 32.592,10.029 32.685,9.753 C32.778,9.478 33.026,9.277 33.324,9.235 L41.700,8.064 L45.446,0.761 C45.580,0.501 45.855,0.336 46.156,0.336 C46.457,0.336 46.732,0.501 46.866,0.761 L50.611,8.064 L58.987,9.235 C59.286,9.277 59.533,9.478 59.626,9.753 C59.719,10.029 59.642,10.332 59.426,10.534 L53.365,16.220 ZM21.520,16.220 L22.951,24.246 C23.002,24.532 22.880,24.821 22.636,24.991 C22.392,25.161 22.069,25.183 21.802,25.048 L14.311,21.259 L6.819,25.049 C6.704,25.108 6.577,25.136 6.451,25.136 C6.287,25.136 6.124,25.087 5.986,24.991 C5.742,24.821 5.620,24.532 5.671,24.246 L7.101,16.220 L1.041,10.534 C0.825,10.332 0.747,10.029 0.840,9.753 C0.933,9.478 1.181,9.277 1.479,9.235 L9.855,8.064 L13.601,0.761 C13.734,0.501 14.010,0.336 14.311,0.336 C14.612,0.336 14.887,0.501 15.021,0.761 L18.767,8.064 L27.142,9.235 C27.441,9.277 27.688,9.478 27.781,9.753 C27.874,10.029 27.797,10.332 27.581,10.534 L21.520,16.220 Z'/%3E%3C/svg%3E");
        }

        body div.aff-main-items-table svg circle {
            fill: <?php echo get_sub_field('accent_color');?> !important;
        }

        <?php endif;?>

        <?php elseif( get_row_layout() == 'recent_reviews' ):?>

        <?php if (get_sub_field('button_color') || get_sub_field('accent_color') || get_sub_field('hover_color')):?>

        /* Reviews */

        .aff-reviews .title .cta a {
            color: <?php echo get_sub_field('accent_color');?> !important;
        }

        .aff-reviews .title .cta a:hover {
            color: <?php echo get_sub_field('hover_color');?> !important;
        }

        .aff-reviews .aff-rating:before,
        .reviews-list .aff-rating:before {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='156px' height='26px'%3E%3Cpath fill-rule='evenodd' fill='%23<?php echo str_replace('#','',get_sub_field('accent_color'));?>' d='M154.961,10.534 L148.900,16.220 L150.331,24.246 C150.382,24.532 150.259,24.821 150.016,24.991 C149.772,25.161 149.449,25.183 149.182,25.048 L141.691,21.259 L134.199,25.049 C134.083,25.108 133.957,25.136 133.831,25.136 C133.667,25.136 133.504,25.087 133.366,24.991 C133.122,24.821 133.000,24.532 133.051,24.246 L134.481,16.220 L128.421,10.534 C128.205,10.332 128.127,10.029 128.220,9.753 C128.314,9.478 128.561,9.277 128.859,9.235 L137.235,8.064 L140.981,0.761 C141.114,0.501 141.390,0.336 141.691,0.336 C141.992,0.336 142.267,0.501 142.401,0.761 L146.147,8.064 L154.522,9.235 C154.821,9.277 155.068,9.478 155.161,9.753 C155.255,10.029 155.177,10.332 154.961,10.534 ZM117.055,16.220 L118.486,24.246 C118.537,24.532 118.414,24.821 118.171,24.991 C117.927,25.161 117.604,25.183 117.337,25.048 L109.846,21.259 L102.354,25.049 C102.238,25.108 102.112,25.136 101.986,25.136 C101.822,25.136 101.659,25.087 101.521,24.991 C101.277,24.821 101.155,24.532 101.206,24.246 L102.636,16.220 L96.576,10.534 C96.360,10.332 96.282,10.029 96.375,9.753 C96.469,9.478 96.716,9.277 97.014,9.235 L105.390,8.064 L109.136,0.761 C109.269,0.501 109.545,0.336 109.846,0.336 C110.147,0.336 110.422,0.501 110.556,0.761 L114.301,8.064 L122.677,9.235 C122.976,9.277 123.223,9.478 123.316,9.753 C123.409,10.029 123.332,10.332 123.116,10.534 L117.055,16.220 ZM85.210,16.220 L86.641,24.246 C86.692,24.532 86.570,24.821 86.326,24.991 C86.082,25.161 85.759,25.183 85.492,25.048 L78.001,21.259 L70.509,25.049 C70.393,25.108 70.267,25.136 70.141,25.136 C69.977,25.136 69.814,25.087 69.676,24.991 C69.432,24.821 69.310,24.532 69.361,24.246 L70.791,16.220 L64.731,10.534 C64.515,10.332 64.437,10.029 64.530,9.753 C64.623,9.478 64.871,9.277 65.169,9.235 L73.545,8.064 L77.291,0.761 C77.424,0.501 77.700,0.336 78.001,0.336 C78.302,0.336 78.577,0.501 78.711,0.761 L82.457,8.064 L90.832,9.235 C91.131,9.277 91.378,9.478 91.471,9.753 C91.564,10.029 91.487,10.332 91.271,10.534 L85.210,16.220 ZM53.365,16.220 L54.796,24.246 C54.847,24.532 54.725,24.821 54.481,24.991 C54.237,25.161 53.914,25.183 53.647,25.048 L46.156,21.259 L38.664,25.049 C38.548,25.108 38.422,25.136 38.296,25.136 C38.132,25.136 37.969,25.087 37.831,24.991 C37.587,24.821 37.465,24.532 37.516,24.246 L38.946,16.220 L32.886,10.534 C32.670,10.332 32.592,10.029 32.685,9.753 C32.778,9.478 33.026,9.277 33.324,9.235 L41.700,8.064 L45.446,0.761 C45.580,0.501 45.855,0.336 46.156,0.336 C46.457,0.336 46.732,0.501 46.866,0.761 L50.611,8.064 L58.987,9.235 C59.286,9.277 59.533,9.478 59.626,9.753 C59.719,10.029 59.642,10.332 59.426,10.534 L53.365,16.220 ZM21.520,16.220 L22.951,24.246 C23.002,24.532 22.880,24.821 22.636,24.991 C22.392,25.161 22.069,25.183 21.802,25.048 L14.311,21.259 L6.819,25.049 C6.704,25.108 6.577,25.136 6.451,25.136 C6.287,25.136 6.124,25.087 5.986,24.991 C5.742,24.821 5.620,24.532 5.671,24.246 L7.101,16.220 L1.041,10.534 C0.825,10.332 0.747,10.029 0.840,9.753 C0.933,9.478 1.181,9.277 1.479,9.235 L9.855,8.064 L13.601,0.761 C13.734,0.501 14.010,0.336 14.311,0.336 C14.612,0.336 14.887,0.501 15.021,0.761 L18.767,8.064 L27.142,9.235 C27.441,9.277 27.688,9.478 27.781,9.753 C27.874,10.029 27.797,10.332 27.581,10.534 L21.520,16.220 Z'/%3E%3C/svg%3E");
        }

        .aff-reviews .review-card .report a:hover,
        .reviews-list .report a:hover {
            color: <?php echo get_sub_field('hover_color');?> !important;
        }

        .aff-reviews .tns-nav button {
            background: <?php echo get_sub_field('accent_color');?> !important;
        }

        .aff-reviews .tns-nav button:hover {
            background-color: <?php echo get_sub_field('hover_color');?> !important;
        }

        .aff-reviews .tns-nav button.tns-nav-active {
            background: <?php echo get_sub_field('accent_color');?> !important;
        }


        <?php endif;?>

        <?php elseif( get_row_layout() == 'text_with_icon' ):?>

        <?php if (get_sub_field('accent_color')):?>
        /* new inner elements 17.12.2021 */

        .aff-text-icon .icon svg path {
            fill: <?php echo get_sub_field('accent_color');?> !important;
        }

        .aff-text-icon .inner {
            border-left: 5px solid <?php echo get_sub_field('accent_color');?> !important;
        }
        <?php endif;?>


        <?php elseif( get_row_layout() == 'recent_news' ):?>

        <?php if (get_sub_field('button_color') || get_sub_field('accent_color') || get_sub_field('hover_color')):?>

        /* News slider */

        .aff-news-slider .title .cta a,
        .aff-news-slider .news-card .cta a {
            color: <?php echo get_sub_field('accent_color');?> !important;
        }


        .aff-news-slider .title .cta a:hover,
        .aff-news-slider .news-card .cta a:hover {
            color: <?php echo get_sub_field('hover_color');?> !important;
        }

        .aff-news-slider .news-card .heading a:hover {
            color: <?php echo get_sub_field('hover_color');?> !important;
        }

        .aff-news-slider .tns-nav button {
            background: <?php echo get_sub_field('accent_color');?> !important;
        }

        .aff-news-slider .tns-nav button:hover {
            background-color: <?php echo get_sub_field('hover_color');?> !important;
        }

        .aff-news-slider .tns-nav button.tns-nav-active {
            background: <?php echo get_sub_field('hover_color');?> !important;
        }


        <?php endif;?>

        <?php elseif( get_row_layout() == 'product_list' ):?>

        <?php if (get_sub_field('accent_color') || get_sub_field('hover_color')):?>

        /* Main items list */

        .aff-main-items-list .item .name:hover,
        .aff-main-items-list .item .link:hover {
            color: <?php echo get_sub_field('accent_color');?> !important;
        }

        .aff-main-items-list .item .desc .text span,
        .aff-main-items-list .item .cta .text {
            color: <?php echo get_sub_field('accent_color');?> !important;
        }

        .aff-main-items-list .item .cta .button {
            background: <?php echo get_sub_field('accent_color');?> !important;
        }

        .aff-main-items-list .item .cta .button:hover {
            background: <?php echo get_sub_field('hover_color');?> !important;
        }

        .aff-slots-wrapper .aff-main-items-list.is-ordered .items-list .item::before {
            background-color: <?php echo get_sub_field('accent_color');?>;
        }

        .aff-main-items-list .aff-fav {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='31px' height='28px'%3E%3Cpath fill-rule='evenodd' stroke='%23<?php echo str_replace('#','',get_sub_field('accent_color'));?>' stroke-width='2px' stroke-linecap='butt' stroke-linejoin='miter' fill='none' d='M26.779,3.446 C25.329,1.869 23.341,0.999 21.178,0.999 C19.562,0.999 18.082,1.513 16.779,2.524 C16.121,3.035 15.525,3.660 15.000,4.389 C14.475,3.660 13.879,3.035 13.221,2.524 C11.918,1.513 10.438,0.999 8.822,0.999 C6.660,0.999 4.671,1.869 3.221,3.446 C1.789,5.006 1.000,7.137 1.000,9.445 C1.000,11.821 1.882,13.997 3.777,16.292 C5.472,18.344 7.908,20.427 10.729,22.840 C11.692,23.663 12.784,24.598 13.918,25.592 C14.217,25.855 14.601,26.000 15.000,26.000 C15.398,26.000 15.783,25.855 16.082,25.592 C17.216,24.598 18.308,23.663 19.272,22.840 C22.092,20.426 24.528,18.344 26.223,16.291 C28.118,13.997 29.000,11.821 29.000,9.445 C29.000,7.137 28.211,5.006 26.779,3.446 Z'/%3E%3C/svg%3E");
        }

        .aff-main-items-list .aff-rating:before {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='156px' height='26px'%3E%3Cpath fill-rule='evenodd' fill='%23<?php echo str_replace('#','',get_sub_field('accent_color'));?>' d='M154.961,10.534 L148.900,16.220 L150.331,24.246 C150.382,24.532 150.259,24.821 150.016,24.991 C149.772,25.161 149.449,25.183 149.182,25.048 L141.691,21.259 L134.199,25.049 C134.083,25.108 133.957,25.136 133.831,25.136 C133.667,25.136 133.504,25.087 133.366,24.991 C133.122,24.821 133.000,24.532 133.051,24.246 L134.481,16.220 L128.421,10.534 C128.205,10.332 128.127,10.029 128.220,9.753 C128.314,9.478 128.561,9.277 128.859,9.235 L137.235,8.064 L140.981,0.761 C141.114,0.501 141.390,0.336 141.691,0.336 C141.992,0.336 142.267,0.501 142.401,0.761 L146.147,8.064 L154.522,9.235 C154.821,9.277 155.068,9.478 155.161,9.753 C155.255,10.029 155.177,10.332 154.961,10.534 ZM117.055,16.220 L118.486,24.246 C118.537,24.532 118.414,24.821 118.171,24.991 C117.927,25.161 117.604,25.183 117.337,25.048 L109.846,21.259 L102.354,25.049 C102.238,25.108 102.112,25.136 101.986,25.136 C101.822,25.136 101.659,25.087 101.521,24.991 C101.277,24.821 101.155,24.532 101.206,24.246 L102.636,16.220 L96.576,10.534 C96.360,10.332 96.282,10.029 96.375,9.753 C96.469,9.478 96.716,9.277 97.014,9.235 L105.390,8.064 L109.136,0.761 C109.269,0.501 109.545,0.336 109.846,0.336 C110.147,0.336 110.422,0.501 110.556,0.761 L114.301,8.064 L122.677,9.235 C122.976,9.277 123.223,9.478 123.316,9.753 C123.409,10.029 123.332,10.332 123.116,10.534 L117.055,16.220 ZM85.210,16.220 L86.641,24.246 C86.692,24.532 86.570,24.821 86.326,24.991 C86.082,25.161 85.759,25.183 85.492,25.048 L78.001,21.259 L70.509,25.049 C70.393,25.108 70.267,25.136 70.141,25.136 C69.977,25.136 69.814,25.087 69.676,24.991 C69.432,24.821 69.310,24.532 69.361,24.246 L70.791,16.220 L64.731,10.534 C64.515,10.332 64.437,10.029 64.530,9.753 C64.623,9.478 64.871,9.277 65.169,9.235 L73.545,8.064 L77.291,0.761 C77.424,0.501 77.700,0.336 78.001,0.336 C78.302,0.336 78.577,0.501 78.711,0.761 L82.457,8.064 L90.832,9.235 C91.131,9.277 91.378,9.478 91.471,9.753 C91.564,10.029 91.487,10.332 91.271,10.534 L85.210,16.220 ZM53.365,16.220 L54.796,24.246 C54.847,24.532 54.725,24.821 54.481,24.991 C54.237,25.161 53.914,25.183 53.647,25.048 L46.156,21.259 L38.664,25.049 C38.548,25.108 38.422,25.136 38.296,25.136 C38.132,25.136 37.969,25.087 37.831,24.991 C37.587,24.821 37.465,24.532 37.516,24.246 L38.946,16.220 L32.886,10.534 C32.670,10.332 32.592,10.029 32.685,9.753 C32.778,9.478 33.026,9.277 33.324,9.235 L41.700,8.064 L45.446,0.761 C45.580,0.501 45.855,0.336 46.156,0.336 C46.457,0.336 46.732,0.501 46.866,0.761 L50.611,8.064 L58.987,9.235 C59.286,9.277 59.533,9.478 59.626,9.753 C59.719,10.029 59.642,10.332 59.426,10.534 L53.365,16.220 ZM21.520,16.220 L22.951,24.246 C23.002,24.532 22.880,24.821 22.636,24.991 C22.392,25.161 22.069,25.183 21.802,25.048 L14.311,21.259 L6.819,25.049 C6.704,25.108 6.577,25.136 6.451,25.136 C6.287,25.136 6.124,25.087 5.986,24.991 C5.742,24.821 5.620,24.532 5.671,24.246 L7.101,16.220 L1.041,10.534 C0.825,10.332 0.747,10.029 0.840,9.753 C0.933,9.478 1.181,9.277 1.479,9.235 L9.855,8.064 L13.601,0.761 C13.734,0.501 14.010,0.336 14.311,0.336 C14.612,0.336 14.887,0.501 15.021,0.761 L18.767,8.064 L27.142,9.235 C27.441,9.277 27.688,9.478 27.781,9.753 C27.874,10.029 27.797,10.332 27.581,10.534 L21.520,16.220 Z'/%3E%3C/svg%3E");
        }

        .aff-main-items-list .aff-fav.favorited {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='28px' height='25px'%3E%3Cpath fill-rule='evenodd' fill='%23<?php echo str_replace('#','',get_sub_field('accent_color'));?>' d='M25.779,2.446 C24.329,0.869 22.341,-0.001 20.178,-0.001 C18.562,-0.001 17.082,0.513 15.779,1.524 C15.121,2.035 14.525,2.660 14.000,3.389 C13.475,2.660 12.879,2.035 12.221,1.524 C10.918,0.513 9.438,-0.001 7.822,-0.001 C5.660,-0.001 3.671,0.869 2.221,2.446 C0.789,4.006 -0.000,6.137 -0.000,8.445 C-0.000,10.821 0.882,12.997 2.777,15.292 C4.472,17.344 6.908,19.427 9.729,21.840 C10.692,22.663 11.784,23.598 12.918,24.592 C13.217,24.855 13.601,25.000 14.000,25.000 C14.398,25.000 14.783,24.855 15.082,24.592 C16.216,23.598 17.308,22.663 18.272,21.840 C21.092,19.426 23.528,17.344 25.223,15.291 C27.118,12.997 28.000,10.821 28.000,8.445 C28.000,6.137 27.211,4.006 25.779,2.446 Z'/%3E%3C/svg%3E");
        }

        <?php endif;?>

        <?php elseif( get_row_layout() == 'faq' ):?>

        <?php if (get_sub_field('accent_color') || get_sub_field('hover_color')):?>
        /* FAQ */

        .aff-faq-list .content ul li > .question.collapsed:hover,
        .aff-faq-list .content ul li > .question:hover,
        .aff-faq-list .content ul li > h3.collapsed:hover,
        .aff-faq-list .content ul li > h3:hover {
            color: <?php echo get_sub_field('accent_color');?> !important;
        }

        .aff-faq-list .content ul li > .question .caret {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='9px' height='15px'%3E%3Cpath fill-rule='evenodd' fill='%23<?php echo str_replace('#','',get_sub_field('accent_color'));?>' d='M9.011,13.441 L7.751,14.648 L1.481,8.645 L1.449,8.675 L0.189,7.468 L0.221,7.438 L0.189,7.407 L1.449,6.200 L1.481,6.231 L7.751,0.227 L9.011,1.434 L2.741,7.438 L9.011,13.441 Z'/%3E%3C/svg%3E") !important;
        }

        <?php endif;?>


        <?php endif;
        // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;
?>

    </style>
    <meta name="theme-color" content="<?php echo $global_background; ?>">
</head>

<?php

$body_classes = '';

if (is_404()) {
    $body_classes .= ' is-404 ';
}

if (is_page_template('template-account.php')) {
    $body_classes .= ' aff-profile-wrapper ';
}

if (is_page_template('template-account-settings.php')) {
    $body_classes .= ' aff-profile-wrapper aff-settings-wrapper ';
}

if (is_page_template('template-password-change.php')) {
    $body_classes .= ' aff-profile-wrapper aff-settings-wrapper ';
}

if (is_page_template('template-account-reviews.php')) {
    $body_classes .= ' aff-profile-wrapper aff-reviews-wrapper ';
}


if (is_singular(array('post', 'games', 'page'))) {
    $body_classes .= ' aff-news-post-wrapper ';
}


?>

<body <?php echo body_class($body_classes); ?>>
<script type="application/ld+json">{
        "@context": "https:\/\/schema.org",
        "@type": "WebSite",
        "url": "<?php echo get_site_url(); ?>",
        "author": {
            "@type": "Organization",
            "name": "<?php get_bloginfo('name'); ?>",
            "logo": {
                "@type": "ImageObject",
                "url": "<?php echo born_acf_image($BORN_FRAMEWORK->Options->Get('main_logo')['id'], 'main-logo', false) ?>"
            }
            <?php if ($BORN_FRAMEWORK->Options->Get('scheme_about_one_name') || $BORN_FRAMEWORK->Options->Get('scheme_about_one_link') || $BORN_FRAMEWORK->Options->Get('scheme_about_two_name') || $BORN_FRAMEWORK->Options->Get('scheme_about_two_link')): ?>
            ,
            "knowsAbout": [
                <?php if ($BORN_FRAMEWORK->Options->Get('scheme_about_one_name') && $BORN_FRAMEWORK->Options->Get('scheme_about_one_link')): ?>
                {
                    "@type": "Thing",
                    "name": "<?php echo $BORN_FRAMEWORK->Options->Get('scheme_about_one_name'); ?>",
                    "sameAs": [
                        "<?php echo $BORN_FRAMEWORK->Options->Get('scheme_about_one_link'); ?>"
                    ]
                }
                <?php endif; ?>
        <?php if ($BORN_FRAMEWORK->Options->Get('scheme_about_two_name') && $BORN_FRAMEWORK->Options->Get('scheme_about_two_link')): ?>
                ,{
                    "@type": "Thing",
                    "name": "<?php echo $BORN_FRAMEWORK->Options->Get('scheme_about_two_name'); ?>",
                    "sameAs": [
                        "<?php echo $BORN_FRAMEWORK->Options->Get('scheme_about_two_link'); ?>"
                    ]
                }
                <?php endif; ?>
            ]
            <?php endif; ?>
            <?php if ($BORN_FRAMEWORK->Options->Get('scheme_contact_point')): ?>

            ,"contactPoint": [
                {
                    "@type": "ContactPoint",
                    "email": "<?php echo $BORN_FRAMEWORK->Options->Get('scheme_contact_point'); ?>",
                    "contactType": "Support"
                }
            ]
            <?php endif; ?>
        }
    }


</script>


<?php if (is_front_page()): ?>
    <script type=application/ld+json>{
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "<?php get_bloginfo('name'); ?>",
        "logo": {
            "@type": "ImageObject",
            "url": "<?php echo born_acf_image($BORN_FRAMEWORK->Options->Get('main_logo')['id'], 'main-logo', false) ?>"
        },
        <?php if ($BORN_FRAMEWORK->Options->Get('scheme_same_as')): ?>
        "sameAs": [
            "<?php echo $BORN_FRAMEWORK->Options->Get('scheme_same_as'); ?>"
        ],
        <?php endif; ?>
        "url": "<?php echo get_site_url(); ?>"
        <?php if ($BORN_FRAMEWORK->Options->Get('scheme_contact_point')): ?>

            ,"contactPoint": [
                {
                    "@type": "ContactPoint",
                    "email": "<?php echo $BORN_FRAMEWORK->Options->Get('scheme_contact_point'); ?>",
                    "contactType": "Support"
                }
            ]
            <?php endif; ?>
    }
    </script>
<?php endif; ?>


<?php

get_template_part('layout/partials/menu');

?>




