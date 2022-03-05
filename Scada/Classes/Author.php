<?php

namespace Scada;

class Author
{

    public function __construct() {

        $this->acf();

        add_action('before_global_block_faq', [$this, 'block_html']);
    }


    /** add enable block author switch */

    public function acf(){
        acf_add_local_field_group(array(
            'key' => 'group_6221a74846a02',
            'title' => 'Author block',
            'fields' => array(
                array(
                    'key' => 'field_6221a76e7121e',
                    'label' => 'Enable author page block?',
                    'name' => 'enable_author_page_block',
                    'type' => 'true_false',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'message' => '',
                    'default_value' => 0,
                    'ui' => 1,
                    'ui_on_text' => '',
                    'ui_off_text' => '',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'page',
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

        acf_add_local_field_group(array(
            'key' => 'group_6222571093631',
            'title' => 'Author block content',
            'fields' => array(
                array(
                    'key' => 'field_62225740ba0b5',
                    'label' => 'Author block text',
                    'name' => 'author_block_text',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'user_form',
                        'operator' => '==',
                        'value' => 'edit',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'seamless',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
            'show_in_rest' => 0,
        ));
    }


    public function block_html() {
        get_template_part('/Scada/templates/author');
    }

}