<?php

namespace Scada;

class Author
{

    public function __construct() {

        $this->acf();

        //add_filter('acf/load_field/name=show_before_block', [$this, 'acf_add_choices']);

        add_action('after_page_content_global', [$this, 'block_html'], 10);
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

                /*array(
                    'key' => 'field_6224f88cd6001',
                    'label' => 'Show before content block',
                    'name' => 'show_before_block',
                    'type' => 'select',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'choices' => array(
                        'faq' => 'FAQ',
                    ),
                    'default_value' => 'faq',
                    'allow_null' => 0,
                    'multiple' => 0,
                    'ui' => 0,
                    'return_format' => 'value',
                    'ajax' => 0,
                    'placeholder' => '',
                ),*/
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
            'key' => 'group_6231f0bf8878e',
            'title' => 'User expert data',
            'fields' => array(
                array(
                    'key' => 'field_6231f0cd76e16',
                    'label' => 'Expert data',
                    'name' => 'expert',
                    'type' => 'group',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'layout' => 'block',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_6231f11b76e17',
                            'label' => 'Is expert',
                            'name' => 'is_expert',
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
                            'ui' => 0,
                            'ui_on_text' => '',
                            'ui_off_text' => '',
                        ),
                        array(
                            'key' => 'field_6231f741edf4e',
                            'label' => 'Keen journalist',
                            'name' => 'type_1',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_6231f11b76e17',
                                        'operator' => '==',
                                        'value' => '1',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '33.3333',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                        ),
                        array(
                            'key' => 'field_6231f796edf4f',
                            'label' => 'Esports nut',
                            'name' => 'type_2',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_6231f11b76e17',
                                        'operator' => '==',
                                        'value' => '1',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '33.3333',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                        ),
                        array(
                            'key' => 'field_6231f7baedf50',
                            'label' => 'Lovers tennis and soccer',
                            'name' => 'type_3',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_6231f11b76e17',
                                        'operator' => '==',
                                        'value' => '1',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '33.3333',
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
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
            'show_in_rest' => 0,
        ));
    }

//    public function acf_add_choices($field) {
//
//        $screen = get_current_screen();
//
//        if ( is_admin() && ($screen->id == 'page') ) {
//            $post_id = $_REQUEST['post'];
//
//            $post_content = get_field('page_content', $post_id);
//
//            if( !empty($post_content) ) {
//                foreach($post_content as $item) {
//                    $field['choices'][ $item['acf_fc_layout'] ] = $item['acf_fc_layout'];
//                }
//            }
//        }
//
//        return $field;
//    }

    public function block_html( $post_id ) {
        $post = get_post($post_id);

        if( !$post ) return;

        $enable_block = get_post_meta($post->ID, 'enable_author_page_block', true);

        if( $enable_block != '1' ) return;

        get_template_part('/Scada/templates/author');
    }

}

new \Scada\Author();