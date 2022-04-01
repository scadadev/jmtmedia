<?php

global $BORN_FRAMEWORK;

$lang_code = born_get_current_language_code();

$author_id = get_the_author_meta('ID');
$userdata = get_user_by('id', $author_id);
$author_data = get_user_meta($author_id);

$author_avatar_url = get_avatar_url($author_id ) ?? '';

$expert = get_field('expert', 'user_' . $author_id);

?>
<div class="aff-item-description aff-is-author <?php echo isset($expert['is_expert']) && $expert['is_expert'] === true ? 'is-expert' : '' ?>">
    <div class="born-container is-wide">
        <div class="content">
            <div class="heading">

                <div class="icon">
                            <span>
                                <a href="<?php echo get_author_posts_url($author_id); ?>">
                                        <?php if (!empty($author_avatar_url)): ?>
                                            <img src="<?php echo $author_avatar_url ?>" alt="<?php echo esc_attr($userdata->data->display_name); ?>">
                                        <?php else: ?>
                                        <?php if ($BORN_FRAMEWORK->Options->Get('default_user_icon')): ?>
                                            <?php echo born_acf_image($BORN_FRAMEWORK->Options->Get('default_user_icon')['id'], 'icons-large-160', true); ?>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </a>
                            </span>
                </div>

                <div class="name">
                    <div>
                        <a href="<?php echo get_author_posts_url($author_id); ?>">
                            <?php echo $userdata->data->display_name; ?>
                            <?php if( isset($expert['is_expert']) && $expert['is_expert'] === true ) : ?>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 0C9.125 0 10.125 0.65625 10.625 1.625C11.6562 1.28125 12.8125 1.53125 13.6562 2.34375C14.4688 3.15625 14.6875 4.34375 14.375 5.375C15.3438 5.875 16 6.875 16 8C16 9.15625 15.3438 10.1562 14.375 10.6562C14.7188 11.6875 14.4688 12.8438 13.6562 13.6562C12.8125 14.4688 11.6562 14.7188 10.625 14.4062C10.125 15.375 9.125 16 8 16C6.84375 16 5.84375 15.375 5.34375 14.4062C4.3125 14.7188 3.15625 14.4688 2.3125 13.6562C1.5 12.8438 1.28125 11.6875 1.59375 10.6562C0.625 10.1562 0 9.15625 0 8C0 6.875 0.625 5.875 1.59375 5.375C1.25 4.34375 1.5 3.15625 2.3125 2.34375C3.15625 1.53125 4.3125 1.28125 5.34375 1.625C5.84375 0.65625 6.84375 0 8 0ZM11 7.03125C11.3125 6.75 11.3125 6.28125 11 5.96875C10.7188 5.6875 10.25 5.6875 9.96875 5.96875L7 8.96875L5.75 7.71875C5.46875 7.4375 5 7.4375 4.71875 7.71875C4.40625 8.03125 4.40625 8.5 4.71875 8.78125L6.46875 10.5312C6.75 10.8438 7.21875 10.8438 7.5 10.5312L11 7.03125Z" fill="currentColor"/>
                                </svg>
                            <?php endif; ?>
                        </a>
                    </div>
                    <p><?php echo $BORN_FRAMEWORK->Options->Get('author_text' . $lang_code); ?></p>
                </div>

                <?php get_template_part('Scada/templates/author', 'expert', [
                        'expert' => $expert
                ]) ?>

                <div class="cta">
                    <a href="<?php echo get_author_posts_url($author_id); ?>"
                       class="articles"><?php echo count_user_posts($author_id, array('post', 'page', 'products', 'games'), true); ?><?php echo $BORN_FRAMEWORK->Options->Get('author_articles' . $lang_code); ?></a>
                </div>

            </div>
            <div class="text">
                <?php echo $author_data['description'][0] ?? ''; ?>
            </div>
            <div class="more author-block-more">
                <a href="<?php echo get_author_posts_url($author_id); ?>"><?php echo $BORN_FRAMEWORK->Options->Get('author_about' . $lang_code); ?></a>
                <div class="author-soc-links">
                    <?php if( !empty($author_data['telegram'][0]) ) :  ?>
                        <a href="<?php echo $author_data['telegram'][0]; ?>" class="is-button is-mail" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 width="16px" height="16px">
                                <path fill-rule="evenodd" fill="currentColor"
                                      d="M14.160,13.468 C14.138,13.620 14.52,13.756 13.926,13.837 C13.846,13.887 13.756,13.912 13.666,13.912 C13.611,13.912 13.556,13.903 13.504,13.885 L6.516,11.392 L13.388,2.752 L4.507,10.676 L0.337,9.189 C0.148,9.121 0.16,8.943 0.0,8.735 C0.13,8.527 0.91,8.329 0.268,8.232 L15.268,0.58 C15.434,0.32 15.636,0.17 15.789,0.96 C15.942,0.210 16.21,0.403 15.994,0.598 L14.160,13.468 ZM6.735,15.787 C6.639,15.923 6.488,15.999 6.332,15.999 C6.280,15.999 6.228,15.991 6.176,15.974 C5.971,15.903 5.832,15.703 5.832,15.478 L5.832,12.251 L8.544,13.218 L6.735,15.787 Z"></path>
                            </svg>
                        </a>
                    <?php endif; ?>

                    <?php if( !empty($author_data['twitter'][0]) ) :  ?>
                        <a href="https://twitter.com/<?php echo $author_data['twitter'][0]; ?>" target="_blank"
                           class="is-button is-twitter">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="15px" height="15px" fill="curentColor"><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg>
                        </a>
                    <?php endif; ?>

                    <?php if( !empty($author_data['linkedin'][0]) ) :  ?>
                        <a href="<?php echo $author_data['linkedin'][0]; ?>" target="_blank"
                           class="is-button is-linkedin">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 width="15px" height="15px">
                                <path fill-rule="evenodd" fill="currentColor"
                                      d="M14.996,14.999 L14.996,14.999 L11.893,14.999 L11.893,10.124 C11.893,8.962 11.869,7.472 10.276,7.472 C8.659,7.472 8.411,8.735 8.411,10.40 L8.411,14.999 L5.305,14.999 L5.305,4.984 L8.288,4.984 L8.288,6.350 L8.332,6.350 C8.746,5.563 9.761,4.733 11.274,4.733 C14.420,4.733 15.0,6.806 15.0,9.498 L15.0,14.999 L14.996,14.999 ZM1.801,3.619 C0.806,3.619 0.0,2.795 0.0,1.801 C0.0,0.806 0.806,0.0 1.801,0.0 C2.794,0.0 3.601,0.806 3.602,1.801 C3.602,2.795 2.795,3.619 1.801,3.619 ZM3.357,14.999 L0.247,14.999 L0.247,4.985 L3.357,4.985 L3.357,14.999 Z"></path>
                            </svg>
                        </a>
                    <?php endif; ?>

                    <?php if( !empty($author_data['instagram'][0]) ) :  ?>
                        <a href="<?php echo $author_data['instagram'][0]; ?>" target="_blank"
                           class="is-button is-instagram">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="20px" height="20px"><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg>
                        </a>
                    <?php endif; ?>

                    <?php if( !empty($author_data['facebook'][0]) ) :  ?>
                        <a href="<?php echo $author_data['facebook'][0]; ?>" target="_blank"
                           class="is-button is-facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 264 512" width="20px" height="20px"><path fill="currentColor" d="M76.7 512V283H0v-91h76.7v-71.7C76.7 42.4 124.3 0 193.8 0c33.3 0 61.9 2.5 70.2 3.6V85h-48.2c-37.8 0-45.1 18-45.1 44.3V192H256l-11.7 91h-73.6v229"></path></svg>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>