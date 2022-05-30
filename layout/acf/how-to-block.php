<?php

$title = get_sub_field('title');
$text = get_sub_field('text');
$list = get_sub_field('how_to_list');

$list_field_object = get_sub_field_object('how_to_list');

$list_has_keys = true;

if( !empty($list) ) {
    foreach($list as $key => $item) {
        if( !isset($item['title']) ) {
            $list_has_keys = false;
        }

        $totalTime += !empty($item['duration']) ? (int) $item['duration'] : 1;
    }
}

/** решаем проблему вывода повторителя (отсутсвуют ключи массива) */
if( !$list_has_keys && !empty($args['index']) ) {
    $list = \Scada\HowTo::getList($list, $args['index'], get_the_ID());
}

?>
<div class="aff-text-v2" id="<?php echo $list_field_object['name']; ?>">
    <div class="born-container is-wide">
        <div class="inner">
            <?php if( !empty($title) ) : ?>
            <div class="title can-anchor">
                <h2><?php echo $title; ?></h2>
            </div>
            <?php endif; ?>
            <div class="content">
                <?php
                    if( !empty($text) ) echo $text;

                    if( !empty($list) ) {
                        echo '<ol>';
                        foreach($list as $key => $item) {
                            echo '<li id="'. $list_field_object['name'] .'_item_'. $key .'">';
                                if( !empty($item['title']) ) {
                                    echo '<strong>'. $item['title'] .'</strong>';
                                }

                                if( !empty( $item['image'] ) && $imageData = wp_get_attachment_image_src( $item['image'], 'full' ) ) {
                                    echo '<div class="how-to-image">';
                                    echo '<a class="thumb" href="'. $imageData[0] .'" rel="gallery-how-to">';
                                    echo wp_get_attachment_image($item['image'], 'medium');
                                    echo '</a>';
                                    echo '</div>';
                                }

                                echo wpautop($item['text']);
                            echo '</li>';
                        }
                        echo '</ol>';
                    }

                    ?>
            </div>
        </div>
    </div>
</div>
