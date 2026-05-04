<?php

$title	= get_field('hero_title');
$picture	= get_field('hero_picture');

?>

<section class="cbo-hero">
	<div class="hero-inner">
		<div class="inner-picture cbo-picture-cover">
			<img
				src="<?php echo esc_url($picture['sizes']['small']); ?>"
				srcset="<?php echo esc_attr($picture['sizes']['small']); ?> 320w, <?php echo esc_attr($picture['sizes']['xlarge']); ?> 768w, <?php echo esc_attr($picture['sizes']['xlarge']); ?> 1024w"
				sizes="100vw"
				alt="<?php echo esc_attr($picture['alt'] ?: $title); ?>"
				width="<?php echo esc_attr($picture['width']); ?>"
				height="<?php echo esc_attr($picture['height']); ?>"
				decoding="async"
				loading="eager"
				fetchpriority="high"
			>
		</div>

		<?php if($title): ?>
			<div class="inner-content">
				<h1 class="content-title cbo-title-1 slide-up" itemprop="headline">
					<?php echo wp_kses_post($title); ?>
				</h1>
			</div>
		<?php endif; ?>
	</div>
</section>