<?php

if(empty( $args['logos'] )) return;

?>
<div class="aff-logos">
    <div class="born-container is-wide">
        <div class="inner">
            <?php if( !empty($args['block_title']) ) : ?>
                <div class="title aff-logos__title">
                    <h2><?php echo $args['block_title'] ?></h2>
                </div>
            <?php endif; ?>
            <div class="content">
                <div class="aff-logos__wrap custom-sroll-bar">
                    <div class="aff-logos__row">
                        <?php foreach($args['logos'] as $key => $item) : ?>
                            <div class="aff-logos__item">
                                <div class="aff-logos__item-wrap">
                                    <?php
                                        echo wp_get_attachment_image($item, 'medium');
                                    ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>