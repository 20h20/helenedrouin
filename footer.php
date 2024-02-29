		</div><!-- End main -->

		<?php 
			$picture	= get_field('options_footerpicture', 'option');
			$locate	= get_field('options_footerlocalisation', 'option');
		?>
		<footer>
			<div class="footer-infos">
				<div class="strip-picture cbo-picture-cover">
					<img
						decoding="async"
						src="<?php echo $picture['sizes']['small']; ?>"
						srcset="<?php echo $picture['sizes']['small']; ?> 320w, <?php echo $picture['sizes']['xlarge']; ?> 768w, <?php echo $picture['sizes']['xlarge']; ?> 1024w"
						alt="<?php echo $picture['alt']; ?>" sizes="100vw"
						loading="lazy"
						width="2000" height="1000"
					>
				</div>
				<a class="infos-logo cbo-picture-contain slide-up" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>">
					<img
						decoding="async"
						src="<?php bloginfo('template_directory'); ?>/library/img/logo-helenedrouin.png"
						alt="Laboratoire de Tribologie et Dynamique des systèmes" sizes="100vw"
						loading="lazy"
						width="250" height="148"
						itemprop="logo"
					>
				</a>
				<div class="infos-strip">
					<div class="strip-content">
						<div class="strip-locate slide-up">
							<i class="icon icon--pin"></i>
							<?php echo $locate ?>
						</div>

						<div class="strip-sociallist">
							<?php
								if( have_rows('options_footersocials', 'option') ):
								while( have_rows('options_footersocials', 'option') ): the_row();
								$reseau	= get_sub_field('reseau');
								$url	= get_sub_field('url');
							?>
								<a class="list-el slide-up" href="<?php echo $url ?>" target="_blank" title="Nos réseaux">
									<?php if($reseau == 'facebook'): ?>
										<i class="icon icon--facebook"></i>
									<?php endif; ?>
									<?php if($reseau == 'instagram'): ?>
										<i class="icon icon--instagram"></i>
									<?php endif; ?>
									<?php if($reseau == 'linkedin'): ?>
										<i class="icon icon--linkedin"></i>
									<?php endif; ?>
									<?php if($reseau == 'youtube'): ?>
										<i class="icon icon--youtube"></i>
									<?php endif; ?>
								</a>
							<?php
								endwhile;
								endif;
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<nav>
					<?php wp_nav_menu( array(
						'container' => false,
						'container_class' => '',
						'menu_class' => 'bottom-menu',
						'theme_location' => 'secondary-menu',
					));?>
				</nav>
			</div>
		</footer>
		<?php wp_footer(); ?>
		<script defer="defer" src="<?php echo get_template_directory_uri(); ?>/library/js/scripts.js"></script>
	</body>
</html>