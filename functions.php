<?php
	function bones_ahoy() {
		require_once( 'library/inc/custom-cleanup.php' );
		require_once( 'library/inc/custom-admin.php' );
	}
	add_action( 'after_setup_theme', 'bones_ahoy' );

	show_admin_bar(false);

	/* ************************* */
	// Register menu
	/* ************************* */
	function register_my_menu() {
		register_nav_menu('primary-menu',__( 'Menu Principal' ));
		register_nav_menu('secondary-menu',__( 'Menu pied de page' ));
	}
	add_action( 'init', 'register_my_menu' );

	/* ************************* */
	// Pic size
	/* ************************* */
	add_image_size('xsmall', 320, 320, false);
	add_image_size('small', 768, 768, false);
	add_image_size('medium', 1200, 1200, false);
	add_image_size('xlarge', 1920, 1920, false);

	/* ************************* */
	// Add `loading="lazy"` attribute to images output by the_post_thumbnail().
	/* ************************* */
	add_filter( 'post_thumbnail_html', 'wpdd_modify_post_thumbnail_html', 10, 5 );
	
	function wpdd_modify_post_thumbnail_html( $html, $post_id, $post_thumbnail_id, $size, $attr ) {
		return str_replace( '<img', '<img loading="lazy"', $html );
	}

	/* ************************* */
	/* Add styles to wysiwyg editor */
	/* ************************* */
	function add_style_select_button($buttons) {
		array_unshift($buttons, 'styleselect');
		return $buttons;
	}
	add_filter('mce_buttons_2', 'add_style_select_button');
	function my_mce_before_init_insert_formats( $init_array ) {
		$style_formats = array(
			array(
				'title' => 'Bouton rose',
				'block' => 'a',
				'classes' => 'cbo-button',
				'wrapper' => true,
				'attributes' => array(
					'href' => '#'
				)
			),
			array(
				'title' => 'Bouton rose + picto mail',
				'block' => 'a',
				'classes' => 'cbo-button button--mail',
				'wrapper' => true,
				'attributes' => array(
					'href' => '#'
				)
			),
		);
		$init_array['style_formats'] = json_encode( $style_formats );
		return $init_array;
	}
	add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );

	/* ************************* */
	/* AJOUT OPTIONS AU DASHBOARD */
	/* ************************* */
	if( function_exists('acf_add_options_page') ) {
		acf_add_options_page();
	}	

	/* ************************* */
	/* REMOVE P & SPAN FROM CF7 FIELD */
	/* ************************* */
	add_filter('wpcf7_autop_or_not', '__return_false');
	add_filter('wpcf7_form_elements', function($content) {
		$content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
		return $content;
	});

	/* ************************* */
	/* DISABLE GUTEMBERG */
	/* ************************* */
	add_filter('use_block_editor_for_post', '__return_false', 10);
	add_filter('use_block_editor_for_post_type', '__return_false', 10);

	/* ************************* */
	/* CUSTOM LOGIN */
	/* ************************* */
	function childtheme_custom_login() {
	 echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/library/css/style.css" />';
	}
	add_action('login_head', 'childtheme_custom_login');

?>