<?php

$title	= get_field('presslist_title');
$chapo	= get_field('presslist_chapo');

?>

<section class="cbo-presslist cbo--gold">
	<div class="presslist-inner cbo-container container--padding container--nomargin">

		<?php if ($title || $chapo) : ?>
			<div class="presslist-content">
				<?php if($title): ?>
					<div class="content-title cbo-title-2 slide-up">
						<?php echo wp_kses_post($title); ?>
					</div>
				<?php endif; ?>

				<?php if($chapo): ?>
					<div class="content-chapo cbo-subtitle slide-up">
						<?php echo wp_kses_post($chapo); ?>
					</div>
				<?php endif; ?>
			</div>
		<?php endif; ?>

		<div class="presslist-list" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
			<?php
				global $post;
				$original_post = $post;
				$posts = get_field('presslist_list');

				if ($posts) :
					foreach ($posts as $post) :
						setup_postdata($post);
						get_part('templates/parts/press/template');
					endforeach;
					wp_reset_postdata();
				else :
				$args = [
					'post_type'	=> 'press',
					'post_status'	=> 'publish',
					'posts_per_page' => -1,
				];
				$all_videos = new WP_Query($args);

				if ($all_videos->have_posts()) :
					while ($all_videos->have_posts()) :
						$all_videos->the_post();
						get_part('templates/parts/press/template');
					endwhile;
				endif;
				wp_reset_postdata();
				endif;

				$post = $original_post;
				setup_postdata($post);
			?>
		</div>
	</div>
</section>