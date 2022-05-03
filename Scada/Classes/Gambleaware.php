<?php

namespace Scada;

class Gambleaware
{
    public function __construct() {

        $this->acf();
    }

    public function acf() {
        acf_add_local_field_group(array(
            'key' => 'group_62712f3c975be',
            'title' => 'Gambleaware',
            'fields' => array(
                array(
                    'key' => 'field_62712f572957a',
                    'label' => 'Gambleaware text',
                    'name' => 'gambleaware',
                    'type' => 'textarea',
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
                    'maxlength' => '',
                    'rows' => 3,
                    'new_lines' => 'br',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'products',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
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