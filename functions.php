<?php
	function bones_ahoy() {
		require_once( 'library/inc/custom-cleanup.php' );
		require_once( 'library/inc/custom-admin.php' );
		require_once( 'library/inc/custom-dashboard.php' );
		require_once( 'library/inc/styles-import.php' );
		require_once( 'library/inc/acf.php' );
		require_once( 'library/inc/custom-post/cpt-press.php' );
		require_once( 'library/inc/custom-post/cpt-video.php' );
	}
	add_action( 'after_setup_theme', 'bones_ahoy' );


	/* ************************* */
	// Pic size
	/* ************************* */
	add_action('after_setup_theme', function() {
		add_image_size('xsmall', 320, 320, false);
		add_image_size('small', 768, 768, false);
		add_image_size('medium', 1200, 1200, false);
		add_image_size('xlarge', 1920, 1920, false);
	});


	/* ************************* */
	// Register menu
	/* ************************* */
	add_theme_support( 'menus' );
	register_nav_menus(
		array(
			'main-nav' => 'Menu principal',  
			'footer-nav' => 'Menu footer'
		)
	);


	/* ************************* */
	/* AJOUT OPTIONS AU DASHBOARD */
	/* ************************* */
	if( function_exists('acf_add_options_page') ) {
		acf_add_options_page();
	}	

	
	/* ************************* */
	/* TinyMCE - Ajout styles personnalisés */
	/* ************************* */
	function my_mce_before_init_insert_formats($init_array) {

		$style_formats = [
			[
				'title'   => 'Texte souligné',
				'inline'  => 'span',
				'classes' => 'cbo-underline',
			],
			
			[
				'title'   => 'Bouton doré',
				'classes' => 'cbo-button button--gold',
				'block' => 'a',
				'wrapper' => true,
				'attributes' => array(
					'href' => '#'
				)
			],
			[
				'title'   => 'Bouton bleu',
				'classes' => 'cbo-button',
				'block' => 'a',
				'wrapper' => true,
				'attributes' => array(
					'href' => '#'
				)
			],
		];
		$init_array['style_formats'] = wp_json_encode($style_formats);
		$init_array['block_formats'] = 'Paragraphe=p;Titre 2=h2;Titre 3=h3';
		return $init_array;
	}
	add_filter('tiny_mce_before_init', 'my_mce_before_init_insert_formats');


	/* ************************* */
	/* ACF - Custom toolbars */
	/* ************************* */
	function custom_acf_wysiwyg_toolbar($toolbars) {

		// Toolbar minimaliste
		$toolbars['Custom'] = [];
		$toolbars['Custom'][1] = ['styleselect'];

		// Toolbar avec styles personnalisés
		$toolbars['Custom Light'] = [];
		$toolbars['Custom Light'][1] = ['italic', 'styleselect', 'formatselect'];

		return $toolbars;
	}
	add_filter('acf/fields/wysiwyg/toolbars', 'custom_acf_wysiwyg_toolbar');


	/* ************************* */
	/* TinyMCE - Activer styleselect */
	/* ************************* */
	function my_mce_buttons($buttons) {
		array_unshift($buttons, 'styleselect');
		return $buttons;
	}
	add_filter('mce_buttons', 'my_mce_buttons');


	/* ************************* */
	// Removing autoP from CF7
	/* ************************* */
	add_filter('wpcf7_autop_or_not', '__return_false');


	/* ************************* */
	/* CUSTOM LOGIN */
	/* ************************* */
	function childtheme_custom_login() {
		echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/library/css/style.min.css" />';
	}
	add_action('login_head', 'childtheme_custom_login');

	/* ************************* */
	/* TRANSLATE KEYS */
	/* ************************* */
	add_action('init', function() {
		pll_register_string( '404', "Erreur 404");
		pll_register_string( '404', "La page que vous rechechez n\'existe pas.<br />Vous pouvez toujours revenir sur vos pas.");
		pll_register_string( '404', "Revenir à l\'accueil");

		pll_register_string( 'article', "Voir l'article");
		pll_register_string( 'article', "Voir la vidéo");

		pll_register_string( 'general', "(nouvelle fenêtre)");

		pll_register_string( 'footer', "Hélène Drouin — Revenir à l'accueil");
		pll_register_string( 'footer', "Mon compte Instagram (nouvelle fenêtre)");
		pll_register_string( 'footer', "Mon profil LinkedIn (nouvelle fenêtre)");
		pll_register_string( 'footer', "M\'envoyer un e-mail");
		pll_register_string( 'footer', "Navigation secondaire");


		pll_register_string( 'header', "Accueil");
		pll_register_string( 'header', "Ouvrir la navigation principale");
		pll_register_string( 'header', "Sélecteur de langue");
	});
?>