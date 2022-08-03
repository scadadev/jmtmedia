<?php
// Check value exists.

//var_dump( get_field('page_content') );

if( have_rows('page_content') ):

    // Loop through rows.
    while ( have_rows('page_content') ) : the_row();

        $index = get_row_index();

        do_action( 'before_page_content_block', get_row_layout(), get_the_ID() );

        // Case: Paragraph layout.
        if( get_row_layout() == 'header_with_blocks' ):
            get_template_part('layout/acf/header-with-blocks');
            get_template_part('layout/acf/menu');
            
        // Case: Download layout.
      //  elseif( get_row_layout() == 'menu_acf' ):

          //  get_template_part('layout/acf/menu');


        elseif( get_row_layout() == 'top_products' ):

            get_template_part('layout/acf/top-products');

        elseif( get_row_layout() == 'top_products_extended' ):

            get_template_part('layout/acf/top-products-extended');

        elseif( get_row_layout() == 'product_cards' ):

            get_template_part('layout/acf/product-cards');

        elseif( get_row_layout() == 'which_one_is_better' ):

            get_template_part('layout/acf/which-one-is-better');

        elseif( get_row_layout() == 'banner' ):

            get_template_part('layout/acf/banner');

        elseif( get_row_layout() == 'text_element' ):

            get_template_part('layout/acf/text-element');

        elseif( get_row_layout() == 'line' ):

            get_template_part('layout/acf/line');

        elseif( get_row_layout() == 'steps' ):

            get_template_part('layout/acf/steps');

        elseif( get_row_layout() == 'compare_products' ):

            get_template_part('layout/acf/compare-products');

        elseif( get_row_layout() == 'recent_reviews' ):

            get_template_part('layout/acf/recent-reviews');

        elseif( get_row_layout() == 'recent_news' ):

            get_template_part('layout/acf/recent-news');

        elseif( get_row_layout() == 'product_list' ):

            get_template_part('layout/acf/product-list');

        elseif( get_row_layout() == 'faq' ):

            get_template_part('layout/acf/faq');

        elseif( get_row_layout() == 'text_with_icon' ):

            get_template_part('layout/acf/text-with-icon');

        elseif( get_row_layout() == 'title_with_rating' ):

            get_template_part('layout/acf/title-with-rating');

        elseif( get_row_layout() == 'anchor_in_content' ):

            get_template_part('layout/acf/anchor-in-content');

        elseif( get_row_layout() == 'anchor_in_content_end' ):

            get_template_part('layout/acf/anchor-in-content-end');

        elseif( get_row_layout() == 'how_to_block' ):

            get_template_part('layout/acf/how-to-block', null, ['index' => $index]);

        endif;
        // End loop.
    endwhile;

    do_action( 'after_page_content_global', get_the_ID() );

// No value.
else :
    // Do something...
endif;
?>