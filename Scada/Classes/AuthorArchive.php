<?php

namespace Scada;

class AuthorArchive
{
    public function __construct() {

        $this->acf();
    }

    public function acf(){
        acf_add_local_field_group(array(
            'key' => 'group_62c691a35c08c',
            'title' => 'author archive',
            'fields' => array(
                array(
                    'key' => 'field_62c691ebe3d9a',
                    'label' => 'author archive',
                    'name' => 'author_archive',
                    'type' => 'user',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'role' => array(
                        0 => 'administrator',
                    ),
                    'allow_null' => 0,
                    'multiple' => 0,
                    'return_format' => 'id',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'archive-games.php',
                    ),
                ),
                array(
                    array(
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'archive-products.php',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'side',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
            'show_in_rest' => 0,
        ));
        
    }


}
