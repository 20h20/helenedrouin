<?php
    if( function_exists('acf_register_block_type') ):
        acf_register_block_type(array(
            'name' => 'presslist',
            'title' => 'Listing presse',
            'description' => '',
            'category' => 'relationship',
            'keywords' => array(
            ),
            'post_types' => array(
            ),
            'mode' => 'auto',
            'align' => '',
            'align_content' => NULL,
            'render_template' => 'templates/blocks/presslist/template.php',
            'render_callback' => '',
            'enqueue_assets' => function() {
                if (is_admin()) {
                    wp_enqueue_style('acf-block-style', get_template_directory_uri() . '/library/css/style.css');
                }
            },
            'icon' => 'media-document',
            'supports' => array(
                'align' => false,
                'mode' => false,
                'multiple' => true,
                'jsx' => false,
                'align_content' => false,
                'anchor' => true,
            ),
            'example' => [
                'attributes' => [
                    'mode' => 'preview',
                    'data' => ['preview_image' => true],
                ]
            ]
        ));
    endif;
?>