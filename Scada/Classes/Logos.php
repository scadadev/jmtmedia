<?php

namespace Scada;

class Logos
{
    public function __construct() {

        $this->acf();

        add_action('aff_before_footer', [$this, 'show'], 21);

    }

    public function show($object_id) {

        global $born_options;

        if( empty($object_id) ) return;

        $enable_block = get_field('enable_logos_block', $object_id);

        if( ! $enable_block ) return;

        $title_key = BORN_NAME . '_logos_block_title_' . LANG_CODE;
        $block_title = $born_options[$title_key] ?? '';

        $logos = $born_options[BORN_NAME . '_logos_list'];

        if( empty($logos) ) return;

        $logos = explode(',', $logos);

        get_template_part('/Scada/templates/logos', null, [
            'block_title' => $block_title,
            'logos' => $logos
        ]);

    }

    public function acf()
    {
        acf_add_local_field_group(array(
            'key' => 'group_6221a54846a01',
            'title' => 'Logos block',
            'fields' => array(
                array(
                    'key' => 'field_6211a66e7131e',
                    'label' => 'Enable logos block?',
                    'name' => 'enable_logos_block',
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
                )
            ),

            'location' => array(
                array(
                    array(
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'default',
                    ),
                ),
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
            'menu_order' => 204,
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