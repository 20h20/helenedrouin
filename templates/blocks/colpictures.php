<section class="cbo-colpictures">
	<div class="colpictures-inner">
		<div class="colpictures-list">
			<?php
				if( have_rows('colpictures_blocs') ):
				while ( have_rows('colpictures_blocs') ) : the_row();
				$picture	= get_sub_field('picture');
				$title	= get_sub_field('title');
			?>
				<a class="list-el lightbox slide-up" rel="colpictures-lightbox-images" href="<?php echo $picture["url"]; ?>">
					<span class="el-inner">
						<?php if( get_sub_field('title')) { ?>
							<span class="inner-title">
								<?php echo $title ?>
							</span>
						<?php } ?>

						<span class="inner-picture cbo-picture-cover">
							<img
								decoding="async"
								src="<?php echo $picture['sizes']['small']; ?>"
								srcset="<?php echo $picture['sizes']['small']; ?> 320w, <?php echo $picture['sizes']['medium']; ?> 768w, <?php echo $picture['sizes']['medium']; ?> 1024w"
								alt="<?php echo $picture['alt']; ?>" sizes="100vw"
								loading="lazy"
								width="600" height="600"
							>
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