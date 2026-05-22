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
							src="<?php echo esc_url($logo['sizes']['xsmall']); ?>"
							srcset="<?php echo esc_url($logo['sizes']['xsmall']); ?> 320w,
								<?php echo esc_url($logo['sizes']['small']); ?> 768w"
							alt="<?php echo esc_attr($logo['alt']); ?>"
							sizes="(min-width: 991px) 16vw, (min-width: 767px) 20vw, (min-width: 500px) 25vw, 33vw"
							width="<?php echo esc_attr($logo['sizes']['xsmall-width']); ?>"
							height="<?php echo esc_attr($logo['sizes']['xsmall-height']); ?>"
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