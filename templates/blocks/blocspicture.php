<section class="cbo-blocspicture">
	<div class="blocspicture-inner cbo-container">
		<div class="blocspicture-list">
			<?php
				if( have_rows('blocspicture_blocs') ):
				while ( have_rows('blocspicture_blocs') ) : the_row();
				$picture	= get_sub_field('picture');
				$title	= get_sub_field('title');
				$link	= get_sub_field('link');
			?>
				<a class="list-el" href="<?php echo $link ?>">
					<span class="el-inner">
						<span class="inner-picture cbo-picture-cover">
							<img
								decoding="async"
								src="<?php echo $picture['sizes']['small']; ?>"
								srcset="<?php echo $picture['sizes']['small']; ?> 320w, <?php echo $picture['sizes']['small']; ?> 768w, <?php echo $picture['sizes']['small']; ?> 1024w"
								alt="<?php echo $picture['alt']; ?>" sizes="100vw"
								loading="lazy"
								width="400" height="400"
							>
							<span class="el-square"></span>
							<span class="el-square square--pink"></span>
						</span>

						<?php if( get_sub_field('title')) { ?>
							<span class="inner-title cbo-title-2">
								<?php echo $title ?>
							</span>
						<?php } ?>
					</span>
				</a>
			<?php
				endwhile;
				endif;
			?>
		</div>
	</div>
</section>