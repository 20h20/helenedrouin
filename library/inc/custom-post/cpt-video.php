<?php
	function cbo_video() { 
		register_post_type( 'video',
		array( 'labels' => array(
			'name' => __( 'Mes videos', 'bonestheme' ),
			'singular_name' => __( 'Video', 'bonestheme' ),
			'all_items' => __( 'Toutes les videos', 'bonestheme' ), 
			'add_new' => __( 'Ajouter', 'bonestheme' ), 
			'add_new_item' => __( 'Ajouter une video', 'bonestheme' ),
			'edit' => __( 'Modifier', 'bonestheme' ),
			'edit_item' => __( 'Modifier une video', 'bonestheme' ),
			'new_item' => __( 'Nouvelle video', 'bonestheme' ),
			'view_item' => __( 'Voir la video', 'bonestheme' ),
			'search_items' => __( 'Rechercher', 'bonestheme' ),
			'not_found' =>  __( 'Aucune video trouvée.', 'bonestheme' ),
			'not_found_in_trash' => __( 'Aucune video dans la corbeille', 'bonestheme' ),
			'parent_item_colon' => ''
		),
		'description' => __( 'Ceci est une video d\'exemple', 'bonestheme' ),
		'public' => false,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'show_ui' => true,
		'query_var' => true,
		'menu_position' => 3, 
		'menu_icon' => 'dashicons-video-alt3',
		'rewrite'	=> array( 'slug' => 'video', 'with_front'   => false ), // slug du single
		'has_archive' => 'mes-videos', // slug de la page d'archive
		'capability_type' => 'post',
		'hierarchical' => false,
		'show_in_rest' => false,
		'supports' => array( 'title', 'editor', 'author', 'thumbnail'), 
	)); }
	add_action( 'init', 'cbo_video');
?>