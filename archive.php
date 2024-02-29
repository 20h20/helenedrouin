<?php
	get_header();
	$title	= get_field('options_articlestitle', 'option');
	$subtitle	= get_field('options_articlessubtitle', 'option');
?>
	<div class="cbo-page page--archive">
		<section class="cbo-hero">
			<div class="hero-picturelist">
				<?php
					if( have_rows('options_articleslide', 'option') ):
					while ( have_rows('options_articleslide', 'option') ) : the_row();
					$picture	= get_sub_field('picture');
				?>
					<div class="picturelist-el cbo-picture-cover">
						<img
							decoding="async"
							src="<?php echo $picture['sizes']['small']; ?>"
							srcset="<?php echo $picture['sizes']['small']; ?> 320w, <?php echo $picture['sizes']['xlarge']; ?> 768w, <?php echo $picture['sizes']['xlarge']; ?> 1024w"
							alt="<?php echo $picture['alt']; ?>" sizes="100vw"
							loading="lazy"
							width="2000" height="2000"
						>
					</div>
				<?php
					endwhile;
					endif;
				?>
			</div>
			<div class="hero-inner">
				<a class="hero-logo cbo-picture-contain" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>">
					<img
						decoding="async"
						src="<?php bloginfo('template_directory'); ?>/library/img/logo-helenedrouin.png"
						alt="Laboratoire de Tribologie et Dynamique des systèmes" sizes="100vw"
						loading="lazy"
						width="250" height="148"
						itemprop="logo"
					>
				</a>
			</div>
		</section>

		<section class="cbo-articles">
			<div class="articles-inner cbo-container">
				<?php if($title): ?>
					<div class="articles-title cbo-title-1">
						<?php echo $title ?>
					</div>
				<?php endif; ?>

				<?php if($subtitle): ?>
					<div class="articles-subtitle cbo-title-2 title--pink">
						<?php echo $subtitle ?>
					</div>
				<?php endif; ?>

				<div class="articles-container cbo-container">
					<div class="articles-list">
						<?php
							$videos_query = new WP_Query(array(
								'category_name' => 'videos-fr, videos-en',
								'posts_per_page' => -1
							));
							if ($videos_query->have_posts()) :
								while ($videos_query->have_posts()) : $videos_query->the_post();
									get_template_part('templates/content/content', 'video');
								endwhile;
								wp_reset_postdata();
							endif;
						?>
					</div>

					<div class="articles-list">
						<?php
							$presse_query = new WP_Query(array(
								'category_name' => 'presse, press-en',
								'posts_per_page' => -1
							));
							if ($presse_query->have_posts()) :
								while ($presse_query->have_posts()) : $presse_query->the_post();
									get_template_part('templates/content/content', 'presse');
								endwhile;
								wp_reset_postdata();
							endif;
						?>
					</div>

					<div class="articles-list">
						<?php
							$podcast_query = new WP_Query(array(
								'category_name' => 'podcast-fr, podcast-en',
								'posts_per_page' => -1
							));
							if ($podcast_query->have_posts()) :
								while ($podcast_query->have_posts()) : $podcast_query->the_post();
									get_template_part('templates/content/content', 'podcast');
								endwhile;
								wp_reset_postdata();
							endif;
						?>
					</div>
				</div>
			</div>
		</section>
	</div>
<?php
	get_footer();
?>