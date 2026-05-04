<?php
	
	require get_template_directory() . '/templates/blocks/blocsimple/block.php';
	require get_template_directory() . '/templates/blocks/contact/block.php';
	require get_template_directory() . '/templates/blocks/blocpicto/block.php';
	require get_template_directory() . '/templates/blocks/fullpicture/block.php';
	require get_template_directory() . '/templates/blocks/hero/block.php';
	require get_template_directory() . '/templates/blocks/textpicture/block.php';
	require get_template_directory() . '/templates/blocks/text/block.php';
	require get_template_directory() . '/templates/blocks/picturelist/block.php';
	require get_template_directory() . '/templates/blocks/presslist/block.php';
	require get_template_directory() . '/templates/blocks/partners/block.php';
	require get_template_directory() . '/templates/blocks/videoslist/block.php';

	function allow_only_custom_blocks( $allowed_blocks, $editor_context ) {
		return array(
			'acf/blocsimple',
			'acf/contact',
			'acf/blocpicto',
			'acf/fullpicture',
			'acf/hero',
			'acf/picturelist',
			'acf/partners',
			'acf/presslist',
			'acf/textpicture',
			'acf/text',
			'acf/videoslist',
		);
	}
	add_filter( 'allowed_block_types_all', 'allow_only_custom_blocks', 10, 2 );

	/* ************************* */
	/* ADD NEW CATEGORIES INTO ACF BLOCK REGISTER */
	/* ************************* */
	function add_custom_block_categories($categories) {
		return array_merge(
			$categories,
			array(
				array(
					'slug'  => 'text',
					'title' => __('Texte'),
					'icon'  => null,
				),
				array(
					'slug'  => 'blocs',
					'title' => __('Liste de blocs'),
					'icon'  => null,
				),
				array(
					'slug'  => 'hero',
					'title' => __('En-tête'),
					'icon'  => null,
				),
				array(
					'slug'  => 'media',
					'title' => __('Médias'),
					'icon'  => null,
				),
				array(
					'slug'  => 'relationship',
					'title' => __('Relationel'),
					'icon'  => null,
				),
			)
		);
	}
	add_filter('block_categories_all', 'add_custom_block_categories');

?>