<?php

namespace Scada;

class HowTo
{
    public function __construct()
    {

        /** ADD layout "Top products extended" to flexible content "Product content"  */
        add_action('acf/load_field/name=page_content', [$this, 'acf'], 22);

        add_action('wp_head', [$this, 'schema'], 11);

    }


    public function acf($field)
    {

        foreach ($field['layouts'] as $key => $item) {
            if ($item['name'] == 'how_to_block') {
                unset($field['layouts'][$key]);
                break;
            }
        }

        $field['layouts']['layout_627e00e2ee27b'] = array(
            'key' => 'layout_627e00e2ee27b',
            'name' => 'how_to_block',
            'label' => 'How to block',
            'display' => 'block',
            'sub_fields' => array(
                array(
                    'key' => 'field_627e00e8ee27c',
                    'label' => 'Title',
                    'name' => 'title',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '50',
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
                    'key' => 'field_627e00e8ee27b',
                    'label' => 'Schema name',
                    'name' => 'schema_name',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '50',
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
                    'key' => 'field_627e00f1ee27d',
                    'label' => 'Text',
                    'name' => 'text',
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
                    'rows' => 4,
                    'new_lines' => 'wpautop',
                ),
                array(
                    'key' => 'field_627e00fdee27e',
                    'label' => 'List',
                    'name' => 'how_to_list',
                    'type' => 'repeater',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'collapsed' => '',
                    'min' => 0,
                    'max' => 0,
                    'layout' => 'table',
                    'button_label' => '',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_627e0113ee27f',
                            'label' => 'Title',
                            'name' => 'title',
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
                        array(
                            'key' => 'field_627e0119ee280',
                            'label' => 'Text',
                            'name' => 'text',
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
                            'rows' => 4,
                            'new_lines' => 'wpautop',
                        ),
                    ),
                ),
            ),
            'min' => '',
            'max' => '1',
        );


        return $field;
    }


    /** решает баг вывода повторителя (получаем список через мета поля) */
    public static function getList($list, $index = 0, $post_id = false)
    {
        $post_id = $post_id ?? get_queried_object_id();

        $meta = get_post_meta($post_id);
        $page_content_block_index = $index - 1;
        $list_count = count($list);

        $newList = [];

        for ($i = 0; $i < $list_count; $i++) {
            $title_key = 'page_content_' . $page_content_block_index . '_how_to_list_' . $i . '_title';
            $text_key = 'page_content_' . $page_content_block_index . '_how_to_list_' . $i . '_text';

            $newList[] = [
                'title' => $meta[$title_key][0] ?? '',
                'text' => $meta[$text_key][0] ?? '',
            ];
        }

        return $newList;
    }


    public function schema() {

        if( is_singular(['products', 'page', 'post']) ) {

            $post_id = get_queried_object_id();

            if( have_rows('page_content', $post_id) ) {
                while (have_rows('page_content', $post_id)) {
                    the_row();
                    if( get_row_layout() == 'how_to_block' ) {
                        $index = get_row_index();
                        $list_field_object = get_sub_field_object('how_to_list');
                        $list = get_sub_field('how_to_list');

                        $schema = [
                            '@context' => 'https://schema.org',
                            '@type' => 'HowTo',
                            '@id' => get_the_permalink() . '#' . $list_field_object['name'],
                            'name' => get_sub_field('schema_name'),
                            'inLanguage' => get_locale(),
                            'step' => []
                        ];

                        $list = self::getList($list, $index, $post_id);

                        if( !empty($list) ) {
                            foreach($list as $key => $item) {
                                $schema['step'][] = [
                                    '@type' => 'HowToStep',
                                    'url' => get_the_permalink() . '#' . $list_field_object['name'] .'_item_'. $key,
                                    'name' => $item['title'],
                                    'itemListElement' => [
                                        '@type' => 'HowToDirection',
                                        'text' => strip_tags($item['text'])
                                    ],
                                ];
                            }
                        }

                        echo '<script type="application/ld+json">'. json_encode($schema) .'</script>';

                        break;
                    }
                }
            }
        }

        /*$schema = [
            '@type' => 'HowTo',
            '@id' => get_the_permalink() . '#' . $list_field_object['name'],
            'name' => get_sub_field('schema_name'),
            'inLanguage' => get_locale(),
            'step' => []
        ];

        if( !empty($list) ) {
            foreach($list as $key => $item) {
                $schema['step'][] = [
                    '@type' => 'HowToStep',
                    'url' => get_the_permalink() . '#' . $list_field_object['name'] .'_item_'. $key,
                    'name' => $item['title'],
                    'itemListElement' => [
                        '@type' => 'HowToDirection',
                        'text' => strip_tags($item['text'])
                    ],
                ];
            }
        }

        echo '<script type="application/ld+json">'. json_encode($schema) .'</script>';*/
    }
}