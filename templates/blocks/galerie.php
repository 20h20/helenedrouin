<?php
	$title	= get_sub_field('galerie_title');
	$subtitle	= get_sub_field('galerie_subtitle');
	$chapo	= get_sub_field('galerie_chapo');
?>
<section class="cbo-gallery">
	<div class="gallery-inner">
		<div class="gallery-content cbo-container">
			<?php if($title): ?>
				<div class="gallery-title cbo-title-1 slide-up">
					<?php echo $title ?>
				</div>
			<?php endif; ?>

			<?php if($subtitle): ?>
				<div class="gallery-subtitle cbo-title-2 title--pink slide-up">
					<?php echo $subtitle ?>
				</div>
			<?php endif; ?>

			<?php if($chapo): ?>
				<div class="gallery-chapo cbo-chapo slide-up">
					<?php echo $chapo ?>
				</div>
			<?php endif; ?>
		</div>

		<div class="gallery-list">
			<?php
				$images	= get_sub_field('galerie_picture');
				if( $images ):
				foreach( $images as $image ):
			?>
				<a class="list-el lightbox slide-up" rel="galerie-lightbox-images" href="<?php echo $image["url"]; ?>">
					<span class="el-inner cbo-picture-cover gallery-pic">
						<img
							decoding="async"
							src="<?php echo $image['sizes']['small']; ?>"
							srcset="<?php echo $image['sizes']['small']; ?> 320w, <?php echo $image['sizes']['medium']; ?> 768w, <?php echo $image['sizes']['medium']; ?> 1024w"
							alt="<?php echo $image['alt']; ?>" sizes="100vw"
							loading="lazy"
							width="600" height="600"
						>
					</span>
				</a>
			<?php
				endforeach;
				endif;
			?>
		</div>
	</div>
</section>