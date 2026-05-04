<?php
	function cbo_press() { 
		register_post_type( 'press',
		array( 'labels' => array(
			'name' => __( 'Les articles', 'bonestheme' ),
			'singular_name' => __( 'Presse', 'bonestheme' ),
			'all_items' => __( 'Tous les articles', 'bonestheme' ), 
			'add_new' => __( 'Ajouter', 'bonestheme' ), 
			'add_new_item' => __( 'Ajouter un article', 'bonestheme' ),
			'edit' => __( 'Modifier', 'bonestheme' ),
			'edit_item' => __( 'Modifier un article', 'bonestheme' ),
			'new_item' => __( 'Nouvel article', 'bonestheme' ),
			'view_item' => __( 'Voir l\'article', 'bonestheme' ),
			'search_items' => __( 'Rechercher', 'bonestheme' ),
			'not_found' =>  __( 'Aucun article trouvé.', 'bonestheme' ),
			'not_found_in_trash' => __( 'Aucun article dans la corbeille', 'bonestheme' ),
			'parent_item_colon' => ''
		),
		'description' => __( 'Ceci est une video d\'exemple', 'bonestheme' ),
		'public' => false,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'show_ui' => true,
		'query_var' => true,
		'menu_position' => 3, 
		'menu_icon' => 'dashicons-media-document',
		'rewrite'	=> array( 'slug' => 'video', 'with_front'   => false ), // slug du single
		'has_archive' => 'mes-videos', // slug de la page d'archive
		'capability_type' => 'post',
		'hierarchical' => false,
		'show_in_rest' => false,
		'supports' => array( 'title', 'editor', 'author', 'thumbnail'), 
	)); }
	add_action( 'init', 'cbo_press');
?>