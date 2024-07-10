<?php
	get_header();
?>
	<div class="cbo-page page-404">
		<section class="cbo-text">
			<div class="text-inner cbo-container">
				<div class="text-content">
					<h1 class="contact-title cbo-title-1 slide-up">
						Erreur 404
					</h1>
					<div class="cbo-cms text--small">
						<?php pll_e('La page que vous recherchez n\'existe pas.<br />Vous pouvez toujours revenir sur vos pas.') ?>
						<br/><br/>
						<a class="cbo-button" href="<?php echo home_url(); ?>">
							Revenir à l'accueil
						</a>
					</div>
				</div>
			</div>
		</section>
	</div>
<?php
	get_footer();
?>