<?php

if(empty( $args['awards'] )) return;

?>
<div class="aff-awards">
    <div class="born-container is-wide">
        <div class="inner">
            <?php if( !empty($args['block_title']) ) : ?>
            <div class="title aff-awards__title">
                <h2><?php echo $args['block_title'] ?></h2>
            </div>
            <?php endif; ?>
            <div class="content">
                <div class="aff-awards__wrap custom-sroll-bar">
                    <div class="aff-awards__row">
                    <?php foreach($args['awards'] as $key => $item) : ?>
                        <div class="aff-awards__item">
                            <div class="aff-awards__item-wrap">
                                <div class="aff-awards__top">
                                    <div class="aff-awards__name"><?php echo $item['title'] ?></div>
                                    <div class="aff-awards__small"><?php echo $item['text_1'] ?></div>
                                </div>
                                <div class="aff-awards__bottom">
                                    <?php echo $item['text_2'] ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
