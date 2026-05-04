
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
								src="<?php echo $picture['sizes']['small']; ?>"
								srcset="<?php echo $picture['sizes']['small']; ?> 320w, <?php echo $picture['sizes']['medium']; ?> 768w, <?php echo $picture['sizes']['medium']; ?> 1024w"
								alt="<?php echo $picture['alt']; ?>" sizes="100vw"
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