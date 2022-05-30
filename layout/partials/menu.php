<?php if (!defined('ABSPATH')) exit; // Exit if accessed directly
global $BORN_FRAMEWORK;

$lang_code = born_get_current_language_code();

$user = wp_get_current_user();
$avatar = get_user_meta($user->ID,'custom_avatar',true);

$cookies_notification = $BORN_FRAMEWORK->Options->Get('cookies_text_' . $lang_code);

$cookies_agree = $BORN_FRAMEWORK->Options->Get('cookies_agree_' . $lang_code);
$cookies_disagree = $BORN_FRAMEWORK->Options->Get('cookies_disagree_' . $lang_code);

$login_page = get_permalink($BORN_FRAMEWORK->Options->Get('login_page'));
$registration_page = get_permalink($BORN_FRAMEWORK->Options->Get('registration_page'));
$my_account_page = get_permalink($BORN_FRAMEWORK->Options->Get('my_account_page'));

$edit_profile_page = get_permalink($BORN_FRAMEWORK->Options->Get('edit_profile_page'));
$user_reviews_page = get_permalink($BORN_FRAMEWORK->Options->Get('user_reviews_page'));
$user_favorites_page = get_permalink($BORN_FRAMEWORK->Options->Get('user_favorites_page'));


$main_menu = born_render_menu(array(
    'theme_location' => 'main-menu',
    'depth' => 3,
    'items_wrap' => '<div class="menu"><ul class="born-reset">%3$s</ul></div>',
    'walker' => '\Scada\ScadaMainMenuWalker',
));


$main_menu_mobile = born_render_menu(array(
    'theme_location' => 'mobile-menu',
    'depth' => 3,
    'items_wrap' => '<ul class="born-reset menu">%3$s</ul>',
    //'walker' => 'Born\Core\Walkers\Born_Main_Menu_Mobile_Walker',
    'walker' => '\Scada\ScadaMainMenuMobileWalker',
));

if (is_page_template('template-login.php') || is_page_template('template-registration.php')){
    $show_menu = false;
}else{
    $show_menu = true;
}

$header_color = $BORN_FRAMEWORK->Options->Get('header_color');
?>


<?php

$menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)
// This returns an array of menu locations ([LOCATION_NAME] = MENU_ID);

$menuID = $menuLocations['main-menu'];

$menu_for_schemas = wp_get_nav_menu_items($menuID);
?>
<script type="application/ld+json">
        {
            "@context": "https://schema.org",
	        "@graph":
            [
                <?php foreach ($menu_for_schemas as $key => $menu_item):?>
                {
                    "@type":"SiteNavigationElement",
                    "name": "<?php echo $menu_item->title; ?>",
                    "url": "<?php echo $menu_item->url;?>"

                }<?php if ($key === array_key_last($menu_for_schemas)){}else{echo ',';}?>
    <?php endforeach;?>

            ]
        }
    </script>


<div class="aff-page-wrapper aff-profile-wrapper <?php if ($header_color):?>header-color-<?php echo $header_color;?><?php endif;?>">

    <?php if (is_page_template('template-login.php') || is_page_template('template-registration.php')):?>
    <div class="aff-hero-bg" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/tmp/aff-hero-bg.jpg)">
    <?php endif;?>

    <div class="aff-menu-btn-mobile">
        <s></s>
        <s></s>
    </div>

    <div class="aff-menu-mobile">

        <div class="top">

        </div>

        <div class="content">
            <div>
                <?php echo $main_menu_mobile; ?>
            </div>
        </div>

    </div>

    <div class="aff-header is-mobile">
        <div class="content">
            <div class="logo">
                <a href="<?php echo get_home_url();?>"><?php
                    echo wp_get_attachment_image($BORN_FRAMEWORK->Options->Get('main_logo')['id'], 'main-logo', false, [
                        'alt' => esc_attr(get_bloginfo('name'))
                    ]);
                    //echo born_acf_image($BORN_FRAMEWORK->Options->Get('main_logo')['id'],'main-logo',true);
                ?></a>
            </div>
            <?php if (get_option('users_can_register') == 1):?>
            <div class="controls">
                <?php if (!is_user_logged_in()):?>
                    <a href="<?php echo $login_page;?>" class="login">
                        <svg
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="15px" height="15px">
                            <path fill-rule="evenodd"
                                  d="M0.200,14.142 C0.200,14.505 0.493,14.797 0.855,14.797 C1.216,14.797 1.509,14.505 1.509,14.142 C1.509,11.833 2.839,9.789 4.911,8.824 C5.629,9.288 6.482,9.562 7.399,9.562 C8.320,9.562 9.177,9.286 9.896,8.817 C10.515,9.108 11.088,9.502 11.565,9.979 C12.678,11.092 13.291,12.571 13.291,14.142 C13.291,14.505 13.584,14.797 13.946,14.797 C14.307,14.797 14.600,14.505 14.600,14.142 C14.600,12.221 13.851,10.414 12.491,9.055 C12.035,8.599 11.507,8.209 10.939,7.887 C11.590,7.096 11.981,6.084 11.981,4.982 C11.981,2.456 9.926,0.401 7.399,0.401 C4.873,0.401 2.818,2.456 2.818,4.982 C2.818,6.082 3.207,7.090 3.855,7.880 C1.608,9.144 0.200,11.507 0.200,14.142 ZM7.399,1.710 C9.204,1.710 10.672,3.176 10.672,4.982 C10.672,6.786 9.204,8.254 7.399,8.254 C5.595,8.254 4.127,6.786 4.127,4.982 C4.127,3.176 5.595,1.710 7.399,1.710 Z"/>
                        </svg>
                    </a>
                <?php else:?>
                    <a href="<?php echo $my_account_page;?>" class="login">
                        <svg
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="15px" height="15px">
                            <path fill-rule="evenodd"
                                  d="M0.200,14.142 C0.200,14.505 0.493,14.797 0.855,14.797 C1.216,14.797 1.509,14.505 1.509,14.142 C1.509,11.833 2.839,9.789 4.911,8.824 C5.629,9.288 6.482,9.562 7.399,9.562 C8.320,9.562 9.177,9.286 9.896,8.817 C10.515,9.108 11.088,9.502 11.565,9.979 C12.678,11.092 13.291,12.571 13.291,14.142 C13.291,14.505 13.584,14.797 13.946,14.797 C14.307,14.797 14.600,14.505 14.600,14.142 C14.600,12.221 13.851,10.414 12.491,9.055 C12.035,8.599 11.507,8.209 10.939,7.887 C11.590,7.096 11.981,6.084 11.981,4.982 C11.981,2.456 9.926,0.401 7.399,0.401 C4.873,0.401 2.818,2.456 2.818,4.982 C2.818,6.082 3.207,7.090 3.855,7.880 C1.608,9.144 0.200,11.507 0.200,14.142 ZM7.399,1.710 C9.204,1.710 10.672,3.176 10.672,4.982 C10.672,6.786 9.204,8.254 7.399,8.254 C5.595,8.254 4.127,6.786 4.127,4.982 C4.127,3.176 5.595,1.710 7.399,1.710 Z"/>
                        </svg>
                    </a>
                <?php endif;?>


            </div>
            <?php endif;?>
        </div>
    </div>

    <div class="aff-header">
        <div class="content">
            <div class="logo">
                <a href="<?php echo get_home_url();?>"><?php
                    echo wp_get_attachment_image($BORN_FRAMEWORK->Options->Get('main_logo')['id'], 'main-logo', false, [
                            'alt' => esc_attr(get_bloginfo('name'))
                    ]);
                    //echo born_acf_image($BORN_FRAMEWORK->Options->Get('main_logo')['id'],'main-logo',true)
                ?></a>
            </div>

            <?php if ($show_menu):?>
            <div class="menu">
                <?php echo $main_menu;?>
            </div>
            <?php endif;?>
            <div class="controls">

                <?php if (get_option('users_can_register') == 1):?>

                <div class="account">

                    <?php if (!is_user_logged_in()):?>
                        <a href="<?php echo $login_page;?>">
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="15px" height="15px">
                                <path fill-rule="evenodd"
                                      d="M0.200,14.142 C0.200,14.505 0.493,14.797 0.855,14.797 C1.216,14.797 1.509,14.505 1.509,14.142 C1.509,11.833 2.839,9.789 4.911,8.824 C5.629,9.288 6.482,9.562 7.399,9.562 C8.320,9.562 9.177,9.286 9.896,8.817 C10.515,9.108 11.088,9.502 11.565,9.979 C12.678,11.092 13.291,12.571 13.291,14.142 C13.291,14.505 13.584,14.797 13.946,14.797 C14.307,14.797 14.600,14.505 14.600,14.142 C14.600,12.221 13.851,10.414 12.491,9.055 C12.035,8.599 11.507,8.209 10.939,7.887 C11.590,7.096 11.981,6.084 11.981,4.982 C11.981,2.456 9.926,0.401 7.399,0.401 C4.873,0.401 2.818,2.456 2.818,4.982 C2.818,6.082 3.207,7.090 3.855,7.880 C1.608,9.144 0.200,11.507 0.200,14.142 ZM7.399,1.710 C9.204,1.710 10.672,3.176 10.672,4.982 C10.672,6.786 9.204,8.254 7.399,8.254 C5.595,8.254 4.127,6.786 4.127,4.982 C4.127,3.176 5.595,1.710 7.399,1.710 Z"/>
                            </svg>
                            <span><?php echo $BORN_FRAMEWORK->Options->Get('sign_in'.$lang_code);?></span>
                        </a>
                        <a href="<?php echo $registration_page;?>"><span><?php echo $BORN_FRAMEWORK->Options->Get('sign_up'.$lang_code);?></span></a>
                    <?php else:?>

                    <?php
                    $current_user = wp_get_current_user();
                    ?>

                    <span class="name"><?php echo $current_user->first_name;?></span>
                    <div class="image-wrapper">
                        <?php if (!empty($avatar)):?>
                            <?php echo born_acf_image($avatar,'icons-micro-avatar',true);?>
                        <?php else:?>
                            <?php if ($BORN_FRAMEWORK->Options->Get('default_user_icon')):?>
                                <?php echo born_acf_image($BORN_FRAMEWORK->Options->Get('default_user_icon')['id'],'icons-micro-avatar',true);?>
                            <?php endif;?>
                        <?php endif;?>
                    </div>
                    <div class="menu">
                        <ul class="menu-list">
                            <li class="menu-item">
                                <a href="<?php echo $my_account_page;?>"><?php echo $BORN_FRAMEWORK->Options->Get('dash'.$lang_code);?>
                                    <svg 
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="16px" height="16px">
                                    <path fill-rule="evenodd"  fill="rgb(231, 167, 54)"
                                    d="M9.000,16.000 L9.000,8.000 L16.000,8.000 L16.000,16.000 L9.000,16.000 ZM9.000,0.000 L16.000,0.000 L16.000,6.000 L9.000,6.000 L9.000,0.000 ZM0.000,11.000 L7.000,11.000 L7.000,16.000 L0.000,16.000 L0.000,11.000 ZM0.000,0.000 L7.000,0.000 L7.000,9.000 L0.000,9.000 L0.000,0.000 Z"/>
                                    </svg>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="<?php echo $user_favorites_page;?>"><?php echo $BORN_FRAMEWORK->Options->Get('acc_favorites'.$lang_code);?>
                                    <svg 
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="17px" height="16px">
                                    <path fill-rule="evenodd"  fill="rgb(231, 167, 54)"
                                    d="M15.651,1.562 C14.771,0.552 13.563,-0.004 12.249,-0.004 C11.268,-0.004 10.369,0.324 9.577,0.971 C9.178,1.298 8.816,1.698 8.497,2.164 C8.178,1.698 7.816,1.298 7.417,0.971 C6.625,0.324 5.726,-0.004 4.745,-0.004 C3.431,-0.004 2.223,0.552 1.343,1.562 C0.473,2.559 -0.006,3.922 -0.006,5.400 C-0.006,6.920 0.530,8.312 1.681,9.780 C2.710,11.094 4.190,12.427 5.903,13.971 C6.488,14.498 7.151,15.095 7.840,15.732 C8.021,15.900 8.255,15.993 8.497,15.993 C8.739,15.993 8.973,15.900 9.154,15.732 C9.843,15.095 10.506,14.498 11.091,13.970 C12.805,12.427 14.284,11.094 15.313,9.780 C16.464,8.312 17.000,6.920 17.000,5.400 C17.000,3.922 16.521,2.559 15.651,1.562 Z"/>
                                    </svg>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="<?php echo $user_reviews_page;?>"><?php echo $BORN_FRAMEWORK->Options->Get('acc_reviews'.$lang_code);?>
                                    <svg 
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="17px" height="16px">
                                    <path fill-rule="evenodd"  fill="rgb(231, 167, 54)"
                                    d="M16.976,6.074 C16.917,5.897 16.761,5.768 16.574,5.741 L11.303,4.987 L8.946,0.285 C8.862,0.119 8.689,0.012 8.499,0.012 C8.310,0.012 8.136,0.119 8.052,0.285 L5.695,4.987 L0.425,5.741 C0.237,5.768 0.081,5.897 0.023,6.074 C-0.036,6.252 0.013,6.447 0.148,6.577 L3.962,10.237 L3.062,15.405 C3.030,15.589 3.107,15.775 3.260,15.884 C3.347,15.946 3.450,15.978 3.553,15.978 C3.632,15.978 3.712,15.959 3.785,15.922 L8.499,13.482 L13.213,15.922 C13.381,16.009 13.584,15.994 13.738,15.884 C13.891,15.775 13.968,15.589 13.936,15.404 L13.035,10.237 L16.850,6.577 C16.985,6.447 17.034,6.252 16.976,6.074 Z"/>
                                    </svg>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="<?php echo $edit_profile_page;?>"><?php echo $BORN_FRAMEWORK->Options->Get('acc_settings'.$lang_code);?>
                                    <svg 
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="16px" height="16px">
                                    <path fill-rule="evenodd"  fill="rgb(231, 167, 54)"
                                    d="M15.656,6.638 L13.784,6.179 C13.681,5.851 13.550,5.532 13.391,5.223 L14.347,3.630 C14.459,3.442 14.431,3.208 14.281,3.058 L12.950,1.727 C12.800,1.577 12.566,1.549 12.378,1.661 L10.784,2.617 C10.475,2.458 10.156,2.327 9.828,2.224 L9.378,0.352 C9.322,0.146 9.134,-0.004 8.919,-0.004 L7.044,-0.004 C6.828,-0.004 6.641,0.146 6.584,0.352 L6.134,2.224 C5.806,2.327 5.487,2.458 5.178,2.617 L3.584,1.661 C3.397,1.549 3.162,1.577 3.012,1.727 L1.681,3.058 C1.531,3.208 1.503,3.442 1.615,3.630 L2.572,5.223 C2.412,5.532 2.281,5.851 2.178,6.179 L0.369,6.638 C0.162,6.685 0.013,6.873 0.013,7.088 L0.013,8.963 C0.013,9.178 0.162,9.366 0.369,9.413 L2.178,9.872 C2.281,10.200 2.412,10.519 2.572,10.828 L1.615,12.422 C1.503,12.609 1.531,12.843 1.681,12.993 L3.012,14.324 C3.162,14.474 3.397,14.502 3.584,14.390 L5.178,13.434 C5.487,13.593 5.806,13.724 6.134,13.828 L6.584,15.637 C6.641,15.843 6.828,15.993 7.044,15.993 L8.919,15.993 C9.134,15.993 9.322,15.843 9.378,15.637 L9.828,13.828 C10.156,13.724 10.475,13.593 10.784,13.434 L12.378,14.390 C12.566,14.502 12.800,14.474 12.950,14.324 L14.281,12.993 C14.431,12.843 14.459,12.609 14.347,12.422 L13.391,10.828 C13.550,10.519 13.681,10.200 13.784,9.872 L15.656,9.413 C15.862,9.366 16.013,9.178 16.013,8.963 L16.013,7.088 C16.013,6.873 15.862,6.685 15.656,6.638 ZM7.981,10.369 C6.687,10.369 5.637,9.319 5.637,8.026 C5.637,6.732 6.687,5.682 7.981,5.682 C9.275,5.682 10.325,6.732 10.325,8.026 C10.325,9.319 9.275,10.369 7.981,10.369 Z"/>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                        <div class="sign-out">
                            <a href="<?php echo wp_logout_url();?>"><?php echo $BORN_FRAMEWORK->Options->Get('logout'.$lang_code);?></a>
                        </div>
                    </div>

                    <?php endif;?>


                </div>
                <?php endif;?>

            </div>
        </div>
    </div>
