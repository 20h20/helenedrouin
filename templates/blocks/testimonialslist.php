<?php
	$title	= get_sub_field('testimonialslist_title');
	$bgcolor	= get_sub_field('testimonialslist_color');
?>
<section class="cbo-testimonialslist">
	<div class="testimonialslist-inner">

		<?php if($title): ?>
			<div class="testimonialslist-content cbo-container">
				<div class="testimonialslist-title cbo-title-2">
					<?php echo $title ?>
				</div>
			</div>
		<?php endif; ?>

		<div class="testimonialslist-list list--<?php echo $bgcolor ?>">
			<?php
				if( have_rows('testimonialslist_blocs') ):
				while( have_rows('testimonialslist_blocs') ): the_row();
				$name = get_sub_field('name');
				$testimonials = get_sub_field('testimonials');
			?>
				<div class="list-el">
					<div class="el-inner">
						<?php if($name): ?>
							<div class="el-name">
								<?php echo $name; ?>
							</div>
						<?php endif; ?>
						<div class="el-content cbo-cms">
							<?php echo $testimonials; ?>
						</div>
					</div>
				</div>
			<?php
				endwhile;
				endif;
			?>
		</div>
	</div>
</section>