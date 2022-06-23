<?php if (!defined('WPINC')) die; ?>
<?php

$title = get_sub_field('title');
$products = get_sub_field('products_blocks');
global $BORN_FRAMEWORK;
$lang_code = born_get_current_language_code();

$is_default_page = basename(get_page_template()) === 'page.php';

?>
<div class="aff-main-items-list">

    <?php if ($title): ?>
        <div class="title can-anchor <?php echo $is_default_page ? 'title-default-page' : '' ?>">
            <div class="born-container is-wide">
                <h2><?php echo $title; ?></h2>

                <?php if ($is_default_page) : ?>
                    <div class="title-meta">
                        <div class="title-meta__wrap">
                            <?php if (!empty($_SERVER['REMOTE_ADDR'])) : ?>
                                <div class="title-meta__item"><?php
                                    echo '<svg width="19" height="19" viewBox="0 0 19 19" xmlns="http://www.w3.org/2000/svg"><path d="M13.375 4.75V0.25H7.1875C6.23828 0.25 5.5 1.02344 5.5 1.9375V4.92578C5.53516 4.92578 5.60547 4.89062 5.71094 4.89062L5.85156 4.85547C6.02734 4.78516 6.23828 4.75 6.41406 4.75C6.97656 4.75 7.53906 4.99609 7.92578 5.41797L8.03125 5.52344C8.10156 5.59375 8.17188 5.62891 8.20703 5.69922C8.27734 5.69922 8.34766 5.73438 8.45312 5.76953L8.59375 5.80469C9.33203 5.98047 9.89453 6.57812 10.1055 7.31641L10.1406 7.45703C10.1758 7.5625 10.1758 7.66797 10.2109 7.70312C10.2461 7.77344 10.3164 7.80859 10.3867 7.91406L10.457 7.98438C11.0195 8.54688 11.2305 9.35547 11.0195 10.0938V10.1992C10.9844 10.3398 10.9492 10.4102 10.9492 10.4805C10.9492 10.5156 10.9844 10.6211 10.9844 10.7266L11.0195 10.8672C11.2305 11.6055 11.0195 12.4141 10.4922 12.9414L10.3867 13.0469C10.3164 13.1172 10.2461 13.1875 10.2109 13.2227C10.1758 13.293 10.1758 13.3633 10.1406 13.4688L10.1055 13.6094C9.92969 14.2773 9.47266 14.8047 8.83984 15.0508V18.25H17.3125C18.2266 18.25 19 17.5117 19 16.5625V5.875H14.5C13.8672 5.875 13.375 5.38281 13.375 4.75ZM14.5 0.25V4.75H19L14.5 0.25ZM9.01562 13.3281C9.05078 13.1523 9.08594 13.0117 9.12109 12.9062C9.22656 12.5898 9.29688 12.5547 9.68359 12.168C9.92969 11.8867 10.0352 11.5 9.92969 11.1484C9.75391 10.4102 9.75391 10.5156 9.92969 9.8125C10.0352 9.42578 9.92969 9.03906 9.68359 8.79297C9.29688 8.37109 9.22656 8.33594 9.12109 8.01953C9.08594 7.91406 9.05078 7.80859 9.01562 7.59766C8.98047 7.52734 8.94531 7.42188 8.91016 7.35156C8.76953 7.14062 8.55859 6.96484 8.27734 6.85938C7.85547 6.75391 7.71484 6.71875 7.53906 6.57812C7.46875 6.54297 7.39844 6.47266 7.29297 6.36719C7.25781 6.33203 7.1875 6.26172 7.15234 6.19141C7.04688 6.12109 6.94141 6.05078 6.83594 5.98047C6.80078 5.98047 6.80078 5.98047 6.76562 5.94531C6.66016 5.91016 6.51953 5.875 6.41406 5.875C6.30859 5.875 6.23828 5.91016 6.13281 5.91016C6.16797 5.91016 6.16797 5.91016 6.16797 5.91016C6.16797 5.91016 6.16797 5.91016 6.13281 5.91016C5.78125 6.01562 5.64062 6.08594 5.46484 6.08594C5.28906 6.08594 5.14844 6.01562 4.79688 5.91016C4.72656 5.91016 4.65625 5.875 4.55078 5.875C4.44531 5.875 4.30469 5.91016 4.19922 5.94531C4.16406 5.98047 4.16406 5.98047 4.12891 5.98047C4.02344 6.05078 3.91797 6.12109 3.8125 6.19141C3.28516 6.71875 3.39062 6.68359 2.6875 6.85938C2.33594 6.96484 2.05469 7.24609 1.94922 7.59766C1.87891 7.87891 1.84375 8.05469 1.80859 8.16016C1.70312 8.37109 1.59766 8.44141 1.28125 8.79297C1.21094 8.86328 1.17578 8.93359 1.10547 9.00391C1 9.25 0.929688 9.53125 1.03516 9.8125C1.21094 10.5156 1.21094 10.4102 1.03516 11.1484C0.929688 11.4297 1 11.7109 1.10547 11.957C1.17578 12.0273 1.21094 12.0977 1.28125 12.168C1.66797 12.5547 1.73828 12.625 1.84375 12.9062C1.87891 13.0117 1.91406 13.1523 1.94922 13.3281C2.05469 13.6797 2.33594 13.9609 2.6875 14.0664C2.93359 14.1367 3.03906 14.1719 3.07422 14.1719C3.14453 14.207 3.14453 14.207 3.25 14.2422V18.25L5.5 17.125L7.71484 18.25V14.2422C7.89062 14.1719 7.78516 14.207 8.27734 14.0664C8.55859 13.9961 8.76953 13.8203 8.91016 13.5742C8.94531 13.5039 8.98047 13.4336 9.01562 13.3281ZM5.5 12.625C5.32422 12.625 5.18359 12.625 5.04297 12.5898C4.72656 12.5195 4.48047 12.4141 4.23438 12.2734C3.98828 12.0977 3.77734 11.8867 3.60156 11.6406C3.39062 11.2891 3.25 10.8672 3.25 10.375C3.25 9.91797 3.39062 9.49609 3.60156 9.14453C3.77734 8.89844 3.98828 8.6875 4.23438 8.51172C4.48047 8.37109 4.72656 8.23047 5.04297 8.19531C5.18359 8.16016 5.32422 8.125 5.5 8.125C6.73047 8.125 7.71484 9.14453 7.71484 10.375C7.71484 11.6406 6.73047 12.625 5.5 12.625Z"/></svg>';
                                    echo $BORN_FRAMEWORK->Options->Get('page_meta_country_' . $lang_code);
                                    ?></div>
                            <?php endif; ?>
                            <div class="title-meta__item">
                                <svg width="23" height="19" viewBox="0 0 23 19" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.8672 9.8125L17.8242 8.23047C17.6836 8.16016 17.3672 8.08984 17.0156 8.23047L12.9727 9.8125C12.6211 9.95312 12.375 10.3047 12.375 10.6562C12.375 14.5586 14.7656 17.2656 17.0156 18.1445C17.3672 18.2852 17.6484 18.2148 17.8242 18.1445C19.6172 17.4766 22.5 15.0508 22.5 10.6562C22.5 10.3047 22.2539 9.95312 21.8672 9.8125ZM17.4375 16.5273V9.88281L20.7773 11.1836C20.5664 14.2422 18.6328 15.9297 17.4375 16.5273ZM7.875 9.25C10.3359 9.25 12.375 7.24609 12.375 4.75C12.375 2.28906 10.3359 0.25 7.875 0.25C5.37891 0.25 3.375 2.28906 3.375 4.75C3.375 7.24609 5.37891 9.25 7.875 9.25ZM11.25 11.1836C10.7227 11.043 10.1953 10.9375 9.63281 10.9375H6.08203C2.70703 10.9375 0 13.6797 0 17.0547C0 17.7227 0.527344 18.25 1.19531 18.25H14.5195C14.625 18.25 14.7305 18.2148 14.8359 18.2148C12.9727 16.7734 11.3906 14.3477 11.25 11.1836Z"/>
                                </svg>
                                <?php echo $BORN_FRAMEWORK->Options->Get('page_meta_safe_' . $lang_code); ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>


    <?php if ($products): ?>
        <div class="items-list">
            <?php
            $i=1;
            foreach ($products as $product):

                $fields = get_fields($product->ID);
                $itemClass = ['item', 'extended'];
                if( $fields['gambleaware'] ) $itemClass[] = 'has-gambleaware';
                ?>

                <div class="<?php echo implode(' ', $itemClass) ?>">
                    <div class="born-container is-wide">
                        <div class="item__wrap">
                            <div class="content">
                                <div class="logo">
                                    <span class="product-extended-rating" style="background:<?php echo get_field('rating_color', $product->ID); ?>;"><?php echo $i; ?></span>
                                    <a href="<?php echo get_field('main_link', $product->ID); ?>" class="image" target="_blank">
                                        <?php
                                        echo wp_get_attachment_image(get_field('logo', $product->ID), 'icons-large');
                                        //echo born_acf_image(get_field('logo',$product->ID),'icons-large',true);
                                        ?> 
                                    </a>
                                    <?php if (get_field('product_badge', $product->ID)):?>
                                         <span class="product-extended-badge"><?php echo get_field('product_badge', $product->ID); ?></span>
                                    <?php endif;?>
                                </div>
                                <div class="data">
                                    <div class="row">
                                        <a href="<?php echo get_permalink($product->ID); ?>"
                                           class="name"><?php echo get_the_title($product->ID); ?></a>
                                        <?php get_template_part('layout/partials/favorites', '', array('id' => $product->ID)); ?>
                                        <!--<a href="<?php /*echo get_field('main_link',$product->ID);*/
                                        ?>" target="_blank" class="link"><?php /*echo $play_link;*/
                                        ?></a>-->
                                    </div>
                                    <div class="row">

                                        <?php get_template_part('layout/partials/rating', '', array('id' => $product->ID)); ?>
                                        <?php get_template_part('layout/partials/positives-negatives', '', array('id' => $product->ID)); ?>

                                    </div>
                                </div>
                                <?php if ($fields['text_gray'] || $fields['text_orange']): ?>
                                    <a class="desc" href="<?php echo get_field('main_link', $product->ID); ?>" target="_blank">
                                        <div class="text">
                                            <?php if ($fields['text_orange']): ?>
                                                <span class="orange-icon" style="color: #e7a736;">
                                <svg width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                     fill="currentColor"><path fill="currentColor"
                                                               d="M32 448c0 17.7 14.3 32 32 32h160V320H32v128zm256 32h160c17.7 0 32-14.3 32-32V320H288v160zm192-320h-42.1c6.2-12.1 10.1-25.5 10.1-40 0-48.5-39.5-88-88-88-41.6 0-68.5 21.3-103 68.3-34.5-47-61.4-68.3-103-68.3-48.5 0-88 39.5-88 88 0 14.5 3.8 27.9 10.1 40H32c-17.7 0-32 14.3-32 32v80c0 8.8 7.2 16 16 16h480c8.8 0 16-7.2 16-16v-80c0-17.7-14.3-32-32-32zm-326.1 0c-22.1 0-40-17.9-40-40s17.9-40 40-40c19.9 0 34.6 3.3 86.1 80h-86.1zm206.1 0h-86.1c51.4-76.5 65.7-80 86.1-80 22.1 0 40 17.9 40 40s-17.9 40-40 40z"/></svg>
                                <?php echo $fields['text_orange']; ?>
                            </span><br>
                                            <?php endif; ?>
                                            <?php if ($fields['text_gray']): ?><p style="color: #000; font-size: 20px"><?php echo $fields['text_gray']; ?></p><?php endif; ?>
                                        </div>
                                        </a>
                                <?php endif; ?>
                                <div class="cta">
                                    <a href="<?php echo get_field('main_link', $product->ID); ?>" target="_blank"
                                       class="button"><?php echo $BORN_FRAMEWORK->Options->Get('go_to_profile' . $lang_code); ?></a>
                                    <a href="<?php echo get_permalink($product->ID); ?>"
                                       class="text"><?php echo $BORN_FRAMEWORK->Options->Get('read_reviews' . $lang_code); ?></a>
                                </div>
                            </div>
                            <div class="items-list-hide">
                                <div class="content">
                                    <div class="data summary">
                                        <?php
                                        if (!empty($fields['summary'])) {
                                            echo '<div class="small-title">' . $BORN_FRAMEWORK->Options->Get('summary_' . $lang_code) . '</div>';
                                            echo $fields['summary'];
                                        }

                                        if (!empty($fields['page_content'])) {
                                            foreach ($fields['page_content'] as $row) {
                                                if ($row['acf_fc_layout'] == 'text_with_icon') {
                                                    if (!empty($row['text_with_icon_elements'][0])) {
                                                        echo '<div class="license">';
                                                        if (!empty($row['text_with_icon_elements'][0])) {
                                                            echo '<div class="license__icon">' . wp_get_attachment_image($row['text_with_icon_elements'][0]['icon']) . '</div>';
                                                        }
                                                        echo '<div class="license__text">' . $row['text_with_icon_elements'][0]['text'] . '</div>';
                                                        echo '</div>';
                                                    }
                                                    break;
                                                }
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="features">
                                        <div class="features__content">
                                            <?php
                                            echo '<div class="small-title">' . $BORN_FRAMEWORK->Options->Get('main_features_' . $lang_code) . '</div>';
                                            if (!empty($fields['positives_negatives']['positives'])) {
                                                echo '<ul class="ul-ignore">';
                                                foreach ($fields['positives_negatives']['positives'] as $value) {
                                                    if (!empty($value['feature'])) echo '<li>' . $value['feature'] . '</li>';
                                                }
                                                echo '</ul>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="cta">
                                        <?php
                                        echo '<div class="small-title payment-title">' . $BORN_FRAMEWORK->Options->Get('payment_methods_' . $lang_code) . '</div>';
                                        if (!empty($fields['payments']['currencies'])) {
                                            echo '<div class="cta__currencies">';
                                            foreach ($fields['payments']['currencies'] as $icon) {
                                                echo '<div class="cta__item">';
                                                echo wp_get_attachment_image($icon['icon']);
                                                echo '</div>';
                                            }
                                            echo '</div>';
                                        }
                                        if (!empty($fields['payments']['payment_methods'])) {
                                            echo '<div class="cta__payment">';
                                            foreach ($fields['payments']['payment_methods'] as $icon) {
                                                echo '<div class="cta__item">';
                                                echo wp_get_attachment_image($icon['icon']);
                                                echo '</div>';
                                            }
                                            echo '</div>';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="items-list-more">
                                <span class="more"><?php echo $BORN_FRAMEWORK->Options->Get('more_info_' . $lang_code) ?></span>
                                <span class="less"><?php echo $BORN_FRAMEWORK->Options->Get('less_info_' . $lang_code) ?></span>
                            </div>
                            <?php if(!empty($fields['gambleaware'])) :  ?>
                                <div class="gambleaware"><?php echo $fields['gambleaware']; ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            <?php
              $i++;
        endforeach;
           
            ?>
           
        </div>

    <?php endif; ?>
</div>
