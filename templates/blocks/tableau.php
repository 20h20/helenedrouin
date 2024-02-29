
<?php
	$picture	= get_sub_field('tableau_picture');
	$title	= get_sub_field('tableau_title');
?>
<section class="cbo-tableau">
	<div class="tableau-picture cbo-picture-cover">
		<img
			decoding="async"
			src="<?php echo $picture['sizes']['small']; ?>"
			srcset="<?php echo $picture['sizes']['small']; ?> 320w, <?php echo $picture['sizes']['xlarge']; ?> 768w, <?php echo $picture['sizes']['xlarge']; ?> 1024w"
			alt="<?php echo $picture['alt']; ?>" sizes="100vw"
			loading="lazy"
			width="2000" height="2000"
		>
	</div>

	<div class="tableau-inner cbo-container container--nomargin">
		<div class="tableau-content slide-up">
			<?php if($title): ?>
				<div class="tableau-title cbo-title-2 slide-up">
					<?php echo $title ?>
				</div>
			<?php endif; ?>

			<div class="content-table slide-up">
				<?php
					if( have_rows('tableau_lines') ):
					while ( have_rows('tableau_lines') ) : the_row();
				?>
					<div class="table-row">
						<?php
							if( have_rows('tableau_cols') ):
							while ( have_rows('tableau_cols') ) : the_row();
							$content	= get_sub_field('content');
						?>
							<div class="table-col cbo-cms">
								<?php echo $content ?>
							</div>
						<?php
							endwhile;
							endif;
						?>
					</div>
				<?php
					endwhile;
					endif;
				?>
			</div>
		</div>
	</div>
</section>