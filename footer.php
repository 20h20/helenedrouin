	</main>

	<?php
		$linkedin	= get_field('footer_linkedin', 'option');
		$instagram	= get_field('footer_instagram', 'option');
		$mail	= get_field('footer_mail', 'option');
	?>

	<footer itemscope itemtype="https://schema.org/WPFooter" role="contentinfo">
		<div class="footer-inner cbo-container container--padding container--nomargin" itemscope itemtype="https://schema.org/Person">
			<meta itemprop="name" content="Hélène Drouin">
			<a class="footer-logo" href="<?php echo esc_url( home_url('/') ); ?>" rel="home" aria-label="<?php pll_e('Hélène Drouin — Revenir à l\'accueil') ?>" itemprop="url">
				© <?php echo date("Y"); ?> Hélène Drouin
			</a>

			<div class="footer-nav">
				<nav aria-label="<?php pll_e('Navigation secondaire') ?>">
					<?php wp_nav_menu( array(
						'container' => false,
						'container_class' => '',
						'menu_class' => 'footer-menu',
						'theme_location' => 'footer-nav',
					));?>
				</nav>
			</div>

			<div class="footer-social">
				<a class="social-el" href="<?php echo esc_url( $linkedin ); ?>" itemprop="sameAs" target="_blank" aria-label="<?php pll_e('Mon profil LinkedIn (nouvelle fenêtre)') ?>" rel="noopener noreferrer">
					<i class="icon icon--linkedin" aria-hidden="true"></i>
				</a>

				<a class="social-el" href="<?php echo esc_url( $instagram ); ?>" itemprop="sameAs" target="_blank" aria-label="<?php pll_e('Mon compte Instagram (nouvelle fenêtre)') ?>" rel="noopener noreferrer">
					<i class="icon icon--instagram" aria-hidden="true"></i>
				</a>

				<a class="social-el" href="<?php echo esc_url( 'mailto:' . $mail ); ?>" itemprop="email" aria-label="<?php pll_e('M\'envoyer un e-mail') ?>">
					<i class="icon icon--mail" aria-hidden="true"></i>
				</a>
			</div>
		</div>
	</footer>

	<script src="<?php echo get_template_directory_uri(); ?>/library/js/scripts.js"></script>
	<?php wp_footer(); ?>
</body>
</html>