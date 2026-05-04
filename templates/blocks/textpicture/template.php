<?php

$color	= get_field('textpicture_color');
$subtitle	= get_field('textpicture_subtitle');
$title	= get_field('textpicture_title');
$content	= get_field('textpicture_content');
$picturepos	= get_field('textpicture_picturepos');
$picture	= get_field('textpicture_picture');

?>

<section class="cbo-textpicture textpicture--<?php echo $picturepos; ?> <?php echo ($color === 'gold') ? 'cbo--gold' : ''; ?>">
	<div class="textpicture-inner cbo-container <?php echo ($color === 'gold') ? 'container--padding container--nomargin' : ''; ?>">

		<figure class="textpicture-picture cbo-picture-cover slide-up" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
			<img
				src="<?php echo esc_url($picture['sizes']['medium']); ?>"
				srcset="<?php echo esc_url($picture['sizes']['medium']); ?> 320w, <?php echo esc_url($picture['sizes']['large']); ?> 768w, <?php echo esc_url($picture['sizes']['xlarge']); ?> 1024w"
				sizes="100vw"
				alt="<?php echo esc_attr($picture['alt']); ?>"
				width="<?php echo esc_attr($picture['width']); ?>"
				height="<?php echo esc_attr($picture['height']); ?>"
				decoding="async"
				loading="lazy"
				itemprop="contentUrl"
			>
		</figure>

		<div class="textpicture-content slide-up">
			<?php if($title): ?>
				<div class="content-title cbo-title-2 slide-up">
					<?php echo wp_kses_post($title); ?>
				</div>
			<?php endif; ?>

			<?php if($subtitle): ?>
				<div class="content-subtitle cbo-subtitle slide-up">
					<?php echo esc_html($subtitle); ?>
				</div>
			<?php endif; ?>

			<div class="content-text cbo-cms slide-up">
				<?php echo wp_kses_post($content); ?>
			</div>
		</div>
	</div>
</section>