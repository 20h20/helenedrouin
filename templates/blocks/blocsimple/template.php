<?php

$title	= get_field('blocsimple_title');
$subtitle	= get_field('blocsimple_subtitle');

?>

<section class="cbo-blocsimple">
	<div class="blocsimple-inner cbo-container container--nomargin container--padding">

		<?php if($title): ?>
			<div class="blocsimple-title cbo-title-2 slide-up">
				<?php echo wp_kses_post($title); ?>
			</div>
		<?php endif; ?>

		<?php if($subtitle): ?>
			<div class="blocsimple-subtitle cbo-subtitle slide-up">
				<?php echo wp_kses_post($subtitle); ?>
			</div>
		<?php endif; ?>

		<div class="blocsimple-list">
			<?php
				if( have_rows('blocsimple_list') ):
				while ( have_rows('blocsimple_list') ) : the_row();
				$icon	= get_sub_field('icon');
				$title	= get_sub_field('title');
				$content	= get_sub_field('description');
			?>
				<div class="list-el">
					<div class="el-inner">
						<?php if($icon): ?>
							<figure class="inner-icon cbo-picture-contain slide-up">
								<img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>">
							</figure>
						<?php endif; ?>

						<?php if($title): ?>
							<div class="inner-title cbo-title-3 slide-up">
								<?php echo esc_html($title); ?>
							</div>
						<?php endif; ?>

						<?php if($content): ?>
							<div class="inner-content cbo-cms slide-up">
								<?php echo esc_html($content); ?>
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