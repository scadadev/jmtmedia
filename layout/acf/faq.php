<?php if (!defined('WPINC')) die; ?>
<?php
$main_title = get_sub_field('main_title');
$questions = get_sub_field('questions');

$rand = rand(1,1000);
?>


<?php if ($questions): ?>
    <?php $count = count($questions); ?>

    <script type="application/ld+json">{
            "@context": "https:\/\/schema.org",
            "@type": "FAQPage",
            "mainEntity": [
<?php foreach ($questions as $index => $q): ?>
                {
                    "@type": "Question",
                    "name": "<?php echo strip_tags($q['title']); ?>",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "<?php echo strip_tags($q['text']); ?>"
                    }
                }<?php if ($count == $index + 1) {
        } else {
            echo ',';
        } ?>
        <?php endforeach; ?>
            ]
        }

    </script>

<?php endif; ?>

<div class="aff-faq">
    <div class="born-container is-wide">

        <?php if ($main_title):?>
        <div class="aff-title can-anchor">
            <div class="content">
                <h2><?php echo $main_title;?></h2>
            </div>
        </div>
        <?php endif;?>

        <div class="aff-faq-list">
            <div class="content">
                <ul class="born-reset">

                    <?php foreach ($questions as $index => $question):?>

                        <li>
                            <div class="question collapsed" data-toggle="collapse" role="button" data-target="#collapse<?php echo $rand+$index;?>" aria-expanded="true" aria-controls="collapse<?php echo $rand+$index;?>">
                                <?php echo $question['title'];?>
                                <div class="caret"></div>
                            </div>
                            <div id="collapse<?php echo $rand+$index;?>" class="collapse"  data-parent="#accordionExample">
                                <div class="desc">
                                    <?php echo $question['text'];?>
                                </div>
                            </div>
                        </li>

                    <?php endforeach;?>



                </ul>
            </div>
        </div>

    </div>
</div>