<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<title><?php wp_title(' - '); ?></title>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
		
		<?php $theme_uri = esc_url(get_template_directory_uri()); ?>
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $theme_uri; ?>/library/images/fav/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $theme_uri; ?>/library/images/fav/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $theme_uri; ?>/library/images/fav/favicon-16x16.png">
		<?php wp_head(); ?>

		<?php
			$addstrip	= get_field('option_addstrip', 'option');
		?>
	</head>

	<body <?php body_class('cbo-main test'); ?> itemscope itemtype="http://schema.org/WebPage">

		<header role="banner" itemscope itemtype="http://schema.org/WPHeader">
			<?php
				if ($addstrip == 1):
					get_template_part('templates/parts/stripnews/template'); 
				endif;
			?>

			<div class="header-inner cbo-container container--nomargin">
				<a
					class="header-logo"
					title="<?php pll_e('Accueil') ?> - <?php echo get_bloginfo('description'); ?>"
					href="<?php echo home_url(); ?>"
					itemprop="url"
					rel="home"
				>
					Hélène Drouin
				</a>

				<div class="header-content">
					<nav
						class="header-nav"
						role="navigation"
						itemscope
						itemtype="http://schema.org/SiteNavigationElement"
						aria-label="<?php esc_attr_e('Navigation principale', 'textdomain'); ?>"
					>
						<?php wp_nav_menu( array(
							'container' => false,
							'container_class' => 'nav-inner',
							'menu_class' => '',
							'theme_location' => 'main-nav',
							'menu_id' => 'menu-principal',
						)); ?>
					</nav>
					<button type="button" class="burger-menu" aria-label="<?php pll_e('Ouvrir la navigation principale') ?>">
						<span class="top"></span>
						<span class="middle"></span>
						<span class="bottom"></span>
					</button>

					<?php
						$languages = pll_the_languages([
							'show_flags' => 0,
							'show_names' => 1,
							'echo'       => 0,
						]);
						if ($languages) :
					?>
						<nav class="languages-switcher" aria-label="<?php pll_e('Sélecteur de langue') ?>">
							<?php echo wp_kses_post($languages); ?>
						</nav>
					<?php endif; ?>
				</div>
			</div>
		</header>

		<main class="cbo-page" role="main" itemscope itemtype="http://schema.org/WebPageElement">