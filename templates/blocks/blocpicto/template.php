<?php

$title	= get_field('blocpicto_title');
$color	= get_field('blocpicto_color');

?>

<section class="cbo-blocpicto <?php echo ($color === 'gold') ? 'cbo--gold' : ''; ?>">
	<div class="blocpicto-inner cbo-container <?php echo ($color === 'gold') ? 'container--padding container--nomargin' : ''; ?>">

		<?php if($title): ?>
			<div class="blocpicto-title cbo-title-2 slide-up">
				<?php echo wp_kses_post($title); ?>
			</div>
		<?php endif; ?>

		<div class="blocpicto-list" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
			<?php
				if( have_rows('blocpicto_list') ):
				while ( have_rows('blocpicto_list') ) : the_row();
				$icon	= get_sub_field('icon');
				$title	= get_sub_field('title');
				$content	= get_sub_field('content');
			?>
				<div class="list-el">
					<div class="el-inner">
						<?php if($icon): ?>
							<figure class="el-icon cbo-picture-contain slide-up">
								<img 
									src="<?php echo esc_url($icon['url']); ?>" 
									aria-hidden="true"
									role="img"
									loading="lazy"
									decoding="async"
								>
							</figure>
						<?php endif; ?>

						<?php if($title): ?>
							<h3 class="el-title cbo-title-4 slide-up" itemprop="name">
								<?php echo wp_kses_post($title); ?>
							</h3>
						<?php endif; ?>

						<?php if($content): ?>
							<div class="el-content slide-up" itemprop="description">
								<?php echo wp_kses_post($content); ?>
							</div>
						<?php endif; ?>
					</div>
				</div>
			<?php
				endwhile;
				endif;
			?>
		</div>
	</div>
</section>