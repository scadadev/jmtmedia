<?php get_header(); ?>

<?php
global $query_string, $post, $BORN_FRAMEWORK;

$page = $BORN_FRAMEWORK->Options->Get('page_404');

if( function_exists('icl_object_id') ) {
    $page = icl_object_id($page, 'page', false, ICL_LANGUAGE_CODE);
}

?>

<div class="aff-404">
    <?php if (!empty(get_the_content('','',$page))):?>
    <div class="born-container is-wide">
        <div class="content">
            <?php echo get_the_content('','',$page);?>
        </div>
    </div>
    <?php endif;?>
    <?php
    if($page) {
        $post = get_post($page);
        setup_postdata($post);
    }
    ?>
    <?php get_template_part('layout/acf/global');?>
</div>

<?php get_footer(); ?>
