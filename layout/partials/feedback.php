<?php
global $BORN_FRAMEWORK;
$lang_code = born_get_current_language_code();
?>

<div class="aff-feedback">
    <div class="born-container is-wide">
        <div class="content">
            <button class="feedback collapsed" data-toggle="collapse" data-target="#feedback-1" aria-expanded="true" aria-controls="feedback-1">
                <?php echo $BORN_FRAMEWORK->Options->Get('feedback_title'.$lang_code);?>
                <span class="caret"></span>
            </button>
            <div id="feedback-1" class="collapse" >
                <div class="desc">
                    <form class="feedback-form" action="<?php echo admin_url('admin-ajax.php');?>" data-focus="false">
                        <input type="hidden" value="<?php echo $args['id'];?>" name="id">
                        <?php wp_nonce_field('feedback_nonce', 'feedback_nonce'); ?>
                        <div class="feedback-success success" style="display: none;">
                            <?php echo $BORN_FRAMEWORK->Options->Get('feedback_thanks'.$lang_code);?>
                        </div>
                        <div class="row feedback-row">
                            <div class="label">
                                <?php echo $BORN_FRAMEWORK->Options->Get('feedback_question_one'.$lang_code);?>
                            </div>
                            <div class="form-group">
                                <div class="input">

                                    <div class="input-wrapper">
                                        <input type="radio" name="choice-1" id="yes-1" value="yes" data-error="<?php echo $BORN_FRAMEWORK->Options->Get('form_req'.$lang_code);?>" required>

                                        <label for="yes-1"><?php echo $BORN_FRAMEWORK->Options->Get('feedback_yes'.$lang_code);?></label>
                                    </div>

                                    <div class="input-wrapper">
                                        <input type="radio" name="choice-1" id="no-1" value="no">
                                        <label for="no-1"><?php echo $BORN_FRAMEWORK->Options->Get('feedback_no'.$lang_code);?></label>

                                    </div>
                                    </div>
                                <div class="help-block with-errors"></div>

                            </div>
                        </div>
                        <div class="row feedback-row">
                            <div class="label">
                                <?php echo $BORN_FRAMEWORK->Options->Get('feedback_question_two'.$lang_code);?>
                            </div>
                            <div class="form-group">
                                <div class="input">

                                    <div class="input-wrapper">
                                        <input type="radio" name="choice-2" id="yes-2" value="yes" data-error="<?php echo $BORN_FRAMEWORK->Options->Get('form_req'.$lang_code);?>" required>

                                        <label for="yes-2"><?php echo $BORN_FRAMEWORK->Options->Get('feedback_yes'.$lang_code);?></label>
                                    </div>
                                    <div class="input-wrapper">
                                        <input type="radio" name="choice-2" id="no-2" value="no" >
                                        <label for="no-2"><?php echo $BORN_FRAMEWORK->Options->Get('feedback_no'.$lang_code);?></label>
                                    </div>
                                    </div>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="row feedback-row">
                            <input type="submit" value="<?php echo $BORN_FRAMEWORK->Options->Get('feedback_submit'.$lang_code);?>">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/assets/dist/js/form-validator.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/dist/js/feedback.js"></script>