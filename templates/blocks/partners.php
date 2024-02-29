<?php
	$title	= get_sub_field('partners_title');
	$outro	= get_sub_field('partners_outro');
?>
<section class="cbo-partners">
	<div class="partners-inner cbo-container container--full">
		<?php if($title): ?>
			<div class="partners-title cbo-title-2 slide-up">
				<?php echo $title ?>
			</div>
		<?php endif; ?>

		<div class="partners-list">
			<?php
				if( have_rows('partners_list') ):
				while( have_rows('partners_list') ): the_row();
				$logo = get_sub_field('logo');
				$url = get_sub_field('url');
			?>
				<div class="list-el slide-up">
					<a class="el-inner cbo-picture-contain" href="<?php echo $url ?>" target="_blank">
						<img
							src="<?php echo $logo['sizes']['small']; ?>"
							srcset="<?php echo $logo['sizes']['small'] ?> 320w, <?php echo $logo['sizes']['small'] ?> 768w, <?php echo $logo['sizes']['small'] ?> 1024w"
							alt="<?php echo $logo["alt"]; ?>"
							loading="lazy"
							width="120" height="70"
						>
					</a>
				</div>
			<?php
				endwhile;
				endif;
			?>
		</div>

		<?php if($outro): ?>
			<div class="partners-outro cbo-chapo">
				<?php echo $outro ?>
			</div>
		<?php endif; ?>
	</div>
</section>