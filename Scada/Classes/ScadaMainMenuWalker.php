<?php

namespace Scada;

class ScadaMainMenuWalker extends \Walker_Nav_Menu {

    /**
     * Starts the list before the elements are added.
     *
     * @since 3.0.0
     *
     * @see Walker::start_lvl()
     *
     * @param string   $output Used to append additional content (passed by reference).
     * @param int      $depth  Depth of menu item. Used for padding.
     * @param stdClass $args   An object of wp_nav_menu() arguments.
     */
    public function start_lvl( &$output, $depth = 0, $args = array() ) {
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = str_repeat( $t, $depth );

        // Default class.
        $classes = array( 'sub-menu','born-reset', 'compact-menu', 'ul-ignore', 'ul-reset' );

        /**
         * Filters the CSS class(es) applied to a menu list element.
         *
         * @since 4.8.0
         *
         * @param array    $classes The CSS classes that are applied to the menu `<ul>` element.
         * @param stdClass $args    An object of `wp_nav_menu()` arguments.
         * @param int      $depth   Depth of menu item. Used for padding.
         */
        $class_names = join( ' ', apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';



        if (strpos($class_names, 'third-level') !== false) {
            $output .= "{$n}{$indent}<ul$class_names>{$n}";
        }else{
            $output .= "{$n}{$indent}<div class=\"menu-dropdown is-compact\" style=\"position: absolute;\"><div class=\"content\"><ul$class_names>{$n}";
        }


    }


    public function end_lvl(&$output, $depth = 0, $args = null)
    {
        $class_names = join( ' ', apply_filters( 'nav_menu_submenu_css_class', [], $args, $depth ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

        if (strpos($class_names, 'third-level') !== false) {
            $output .= "</ul>";
        }else {
            $output .= "</ul></div></div>";
        }

    }



    /**
     * Starts the element output.
     *
     * @since 3.0.0
     * @since 4.4.0 The {@see 'nav_menu_item_args'} filter was added.
     *
     * @see Walker::start_el()
     *
     * @param string   $output Used to append additional content (passed by reference).
     * @param WP_Post  $item   Menu item data object.
     * @param int      $depth  Depth of menu item. Used for padding.
     * @param stdClass $args   An object of wp_nav_menu() arguments.
     * @param int      $id     Current item ID.
     */
    public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $attributes = '';

        $indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

        $mega = get_post_meta( $item->ID, '_born_megamenu', true );

        // print_r($mega);

        if ( ! empty( $mega ) ) {

            ! empty ( $class_names )
            and $class_names = ' class="' . esc_attr( $class_names ) . ' toggle-dock-dropdown" ';
            ! empty( $item->attr_title )
            and $attributes .= ' title="' . esc_attr( $item->attr_title ) . '"';
            ! empty( $item->target )
            and $attributes .= ' target="' . esc_attr( $item->target ) . '"';
            ! empty( $item->xfn )
            and $attributes .= ' rel="' . esc_attr( $item->xfn ) . '"';
            ! empty( $item->url )
            and $attributes .= ' href="javascript:void(0)"';

            $menu_content = '';

            $menu1_ids = get_field('menu_1_content',$mega);

            $menu2_ids = get_field('menu_2_content',$mega);

            $menu3_ids = get_field('menu_3_content',$mega);

            if ($menu1_ids){
                $menu_content .= '<ul class="born-reset">';

                foreach ($menu1_ids as $post):

                    $menu_content .= '<li><a href="'.get_the_permalink($post->ID).'">'.get_the_title($post->ID).'</a></li>';

                endforeach;

                $menu_content .= '</ul>';
            }

            if ($menu2_ids){
                $menu_content .= '<ul class="born-reset">';

                foreach ($menu2_ids as $post):

                    $menu_content .= '<li><a href="'.get_the_permalink($post->ID).'">'.get_the_title($post->ID).'</a></li>';

                endforeach;

                $menu_content .= '</ul>';
            }

            if ($menu3_ids){
                $menu_content .= '<ul class="born-reset">';

                foreach ($menu3_ids as $post):

                    $menu_content .= '<li><a href="'.get_the_permalink($post->ID).'">'.get_the_title($post->ID).'</a></li>';

                endforeach;

                $menu_content .= '</ul>';
            }

            // print_r($menu1_content);



            $mega_content =

                '<a href="'.$item->url.'">'.$item->title.'</a><div class="menu-dropdown"><div class="content">' . $menu_content . '</div></div>';

        }

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;
        //if( $args->walker->has_children ) $classes[] = 'born-dropdown';

        if ( ! empty( $mega ) ) {
            $classes[] = 'has-dropdown';
        }


        /**
         * Filters the arguments for a single nav menu item.
         *
         * @since 4.4.0
         *
         * @param stdClass $args  An object of wp_nav_menu() arguments.
         * @param WP_Post  $item  Menu item data object.
         * @param int      $depth Depth of menu item. Used for padding.
         */
        $args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );

        /**
         * Filters the CSS class(es) applied to a menu item's list item element.
         *
         * @since 3.0.0
         * @since 4.1.0 The `$depth` parameter was added.
         *
         * @param array    $classes The CSS classes that are applied to the menu item's `<li>` element.
         * @param WP_Post  $item    The current menu item.
         * @param stdClass $args    An object of wp_nav_menu() arguments.
         * @param int      $depth   Depth of menu item. Used for padding.
         */
        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );

        if(strpos( $class_names,'menu-item-has-children')){
            $class_names = $class_names ? ' class="has-compact-dropdown has-level-3 ' . esc_attr( $class_names ) . '"' : '';
        }else{
            $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
        }

        /*   if ($depth == 2){
              // die('ff');
               $class_names = ' class="has-level-3 ' . esc_attr( $class_names ) . '"';
           }*/



        /**
         * Filters the ID applied to a menu item's list item element.
         *
         * @since 3.0.1
         * @since 4.1.0 The `$depth` parameter was added.
         *
         * @param string   $menu_id The ID that is applied to the menu item's `<li>` element.
         * @param WP_Post  $item    The current menu item.
         * @param stdClass $args    An object of wp_nav_menu() arguments.
         * @param int      $depth   Depth of menu item. Used for padding.
         */
        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth );
        $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

        //  if ($depth == 3){
        //      $output .= $indent . '<li data-trd="fff"' . $id . $class_names .'>';
        //   }else{
        $output .= $indent . '<li ' . $id . $class_names .'>';
        //  }
        //  $output .= $indent . '<li ' . $id . $class_names .'>';

        $atts = array();
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
        $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
        $atts['href']   = ! empty( $item->url )        ? $item->url        : '';

        /**
         * Filters the HTML attributes applied to a menu item's anchor element.
         *
         * @since 3.6.0
         * @since 4.1.0 The `$depth` parameter was added.
         *
         * @param array $atts {
         *     The HTML attributes applied to the menu item's `<a>` element, empty strings are ignored.
         *
         *     @type string $title  Title attribute.
         *     @type string $target Target attribute.
         *     @type string $rel    The rel attribute.
         *     @type string $href   The href attribute.
         * }
         * @param WP_Post  $item  The current menu item.
         * @param stdClass $args  An object of wp_nav_menu() arguments.
         * @param int      $depth Depth of menu item. Used for padding.
         */
        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        /** This filter is documented in wp-includes/post-template.php */
        $title = apply_filters( 'the_title', $item->title, $item->ID );

        /**
         * Filters a menu item's title.
         *
         * @since 4.4.0
         *
         * @param string   $title The menu item's title.
         * @param WP_Post  $item  The current menu item.
         * @param stdClass $args  An object of wp_nav_menu() arguments.
         * @param int      $depth Depth of menu item. Used for padding.
         */
        $title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

        $item_output = $args->before;
        if( !$mega ) {
            $item_output .= '<a'. $attributes .'>';
            $item_output .= $args->link_before . $title . $args->link_after;
            $item_output .= '</a>';
        } else {
            $item_output .= $mega_content;
        }

        $item_output .= $args->after;

        /**
         * Filters a menu item's starting output.
         *
         * The menu item's starting output only includes `$args->before`, the opening `<a>`,
         * the menu item's title, the closing `</a>`, and `$args->after`. Currently, there is
         * no filter for modifying the opening and closing `<li>` for a menu item.
         *
         * @since 3.0.0
         *
         * @param string   $item_output The menu item's starting HTML output.
         * @param WP_Post  $item        Menu item data object.
         * @param int      $depth       Depth of menu item. Used for padding.
         * @param stdClass $args        An object of wp_nav_menu() arguments.
         */
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}
