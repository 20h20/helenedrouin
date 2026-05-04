<?php

$title	= get_field('videoslist_title');
$chapo	= get_field('videoslist_chapo');

?>

<section class="cbo-videoslist">
	<div class="videoslist-inner cbo-container">

		<?php if ($title || $chapo) : ?>
			<div class="videoslist-content">
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

		<div class="videoslist-list" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
			<?php
				global $post;
				$original_post = $post;
				$posts = get_field('videoslist_list');

				if ($posts) :
					foreach ($posts as $post) :
						setup_postdata($post);
						get_part('templates/parts/video/template');
					endforeach;
					wp_reset_postdata();
				else :
				$args = [
					'post_type'	=> 'video',
					'post_status'	=> 'publish',
					'posts_per_page' => -1,
				];
				$all_videos = new WP_Query($args);

				if ($all_videos->have_posts()) :
					while ($all_videos->have_posts()) :
						$all_videos->the_post();
						get_part('templates/parts/video/template');
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