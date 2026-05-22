
<section class="cbo-picturelist">
	<div class="picturelist-inner cbo-container">
		<div class="picturelist-list">
			<?php
				if( have_rows('picturelist_list') ):
				while ( have_rows('picturelist_list') ) : the_row();
				$picture	= get_sub_field('picture');
				$title	= get_sub_field('title');
				$subtitle	= get_sub_field('subtitle');
				$date	= get_sub_field('date');
			?>
				<a class="list-el lightbox" rel="colpictures-lightbox-images" href="<?php echo $picture["url"]; ?>">
					<span class="el-inner">
						<span class="inner-picture cbo-picture-cover slide-up">
							<img
								decoding="async"
								src="<?php echo esc_url($picture['sizes']['xsmall']); ?>"
								srcset="<?php echo esc_url($picture['sizes']['xsmall']); ?> 320w, <?php echo esc_url($picture['sizes']['small']); ?> 768w, <?php echo esc_url($picture['sizes']['medium']); ?> 1200w"
								alt="<?php echo esc_attr($picture['alt']); ?>" sizes="(min-width: 1024px) 33vw, (min-width: 768px) 50vw, 100vw"
								loading="lazy"
								width="600" height="600"
							>
						</span>

						<span class="inner-content">
							<?php if($title): ?>
								<span class="content-title slide-up">
									<?php echo $title ?>
								</span>
							<?php endif; ?>

							<?php if($subtitle): ?>
								<span class="content-subtitle slide-up">
									<?php echo $subtitle ?>
								</span>
							<?php endif; ?>

							<?php if($date): ?>
								<span class="content-date slide-up">
									<?php echo $date ?>
								</span>
							<?php endif; ?>
						</span>
					</span>
				</a>
			<?php
				endwhile;
				endif;
			?>
		</div>
	</div>
</section>