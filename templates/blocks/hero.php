<section class="cbo-hero">
	<div class="hero-picturelist">
		<?php
			if( have_rows('hero_images') ):
			while ( have_rows('hero_images') ) : the_row();
			$picture	= get_sub_field('picture');
			$position	= get_sub_field('picture_position');
		?>
			<div class="picturelist-el cbo-picture-cover picturelist--<?php echo $position ?>">
				<img
					decoding="async"
					src="<?php echo $picture['sizes']['small']; ?>"
					srcset="<?php echo $picture['sizes']['small']; ?> 320w, <?php echo $picture['sizes']['xlarge']; ?> 768w, <?php echo $picture['sizes']['xlarge']; ?> 1024w"
					alt="<?php echo $picture['alt']; ?>" sizes="100vw"
					width="2000" height="2000"
				>
			</div>
		<?php
			endwhile;
			endif;
		?>
	</div>
	<div class="hero-inner">
		<a class="hero-logo cbo-picture-contain slide-up" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>">
			<img
				decoding="async"
				src="<?php bloginfo('template_directory'); ?>/library/img/logo-helenedrouin.png"
				alt="Hélène Drouin" sizes="100vw"
				width="250" height="148"
				itemprop="logo"
			>
		</a>
	</div>
</section>