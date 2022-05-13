<?php

namespace Scada;

class TopProducts
{

    public function __construct() {

        /** ADD layout "Top products extended" to flexible content "Product content"  */
        add_action('acf/load_field/name=page_content', [$this, 'acf'], 21);

    }


    public function acf($field) {
        if( !empty( $field['layouts'] ) ) {

            $new_field_key = 'field_60fe5b3444713';

            $new_layout = false;

            // remove top_products_extended
            foreach($field['layouts'] as $key => $item) {
                if( $item['name'] == 'top_products_extended' ) {
                    unset($field['layouts'][$key]);
                    break;
                }
            }

            // add new top_products_extended
            foreach($field['layouts'] as $key => $item) {
                if( $item['name'] == 'top_products' ) {
                    $new_layout = $item;
                    break;
                }
            }
        }

        if( $new_layout ) {
            $new_layout['key'] = $new_field_key;
            $new_layout['name'] = 'top_products_extended';
            $new_layout['label'] = 'Top products extended';

            $field['layouts'][] = $new_layout;
        }


        return $field;
    }

}