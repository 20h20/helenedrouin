<?php
	$title	= get_field('partners_title');
?>

<section class="cbo-partners">
	<div class="partners-inner cbo-container container--padding">

		<?php if($title): ?>
			<div class="partners-title cbo-subtitle slide-up">
				<?php echo wp_kses_post($title); ?>
			</div>
		<?php endif; ?>

		<div class="partners-list">
			<?php
				if( have_rows('partners_list') ):
				while( have_rows('partners_list') ): the_row();
				$logo = get_sub_field('logo');
			?>
				<div class="list-el">
					<div class="el-inner cbo-picture-contain slide-up">
						<img
							src="<?php echo esc_url($logo['sizes']['small']); ?>"
							srcset="<?php echo esc_url($logo['sizes']['small']); ?> 320w, 
								<?php echo esc_url($logo['sizes']['small']); ?> 768w, 
								<?php echo esc_url($logo['sizes']['small']); ?> 1024w"
							alt="<?php echo esc_url($logo['alt']); ?>"
							sizes="(min-width: 1024px) 50vw, (min-width: 768px) 60vw, 100vw"
							loading="lazy"
							decoding="async"
						>
					</div>
				</div>
			<?php
				endwhile;
				endif;
			?>
		</div>
	</div>
</section>