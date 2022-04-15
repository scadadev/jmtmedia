<?php

namespace Scada;

class Awards
{
    public function __construct() {

        $this->acf();

        add_action('aff_before_footer', [$this, 'show'], 20);

    }

    public function show($object_id) {

        global $born_options;

        if( empty($object_id) ) return;

        $enable_block = get_field('enable_awards_block', $object_id);

        if( ! $enable_block ) return;

        $awards_key = BORN_NAME . '_awards_repeater' . LANG_CODE;
        $title_key = BORN_NAME . '_award_block_title_' . LANG_CODE;

        $awards = [];
        $block_title = $born_options[$title_key] ?? '';

        if(!empty($born_options[$awards_key])) {
            for( $i=0; $i<count($born_options[$awards_key]['award_title']); $i++ ) {
                if( !empty($born_options[$awards_key]['award_title'][$i]) ) {
                    $awards[] = [
                        'title' => $born_options[$awards_key]['award_title'][$i],
                        'text_1' => $born_options[$awards_key]['award_text_1'][$i],
                        'text_2' => $born_options[$awards_key]['award_text_2'][$i],
                    ];
                }
            }
        }

        get_template_part('/Scada/templates/awards', null, [
            'block_title' => $block_title,
            'awards' => $awards
        ]);

    }

    public function acf()
    {
        acf_add_local_field_group(array(
            'key' => 'group_6221a54646a21',
            'title' => 'Awards block',
            'fields' => array(
                array(
                    'key' => 'field_6211a46e7131e',
                    'label' => 'Enable awards block?',
                    'name' => 'enable_awards_block',
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
            'menu_order' => 203,
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