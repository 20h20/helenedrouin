<?php

global $post;
$date = get_field('video_date', $post->ID);
$url	= get_field('video_url', $post->ID);

?>

<article <?php post_class('list-el slide-up'); ?> itemscope itemtype="https://schema.org/VideoObject">
	<a
		class="el-inner"
		href="<?php echo esc_html($url); ?>"
		target="_blank"
		aria-label="<?php pll_e('Voir la vidéo') ?> <?php the_title(); ?> <?php pll_e('(nouvelle fenêtre)') ?>"
		rel="noopener noreferrer"
		itemprop="url"
	>
		<?php if (has_post_thumbnail()) : ?>
			<span class="inner-picture cbo-picture-cover slide-up" itemprop="thumbnail">
				<i class="picture-player icon icon--player" aria-hidden="true"></i>
				<?php 
					the_post_thumbnail('medium', [
						'loading'  => 'lazy',
						'decoding' => 'async',
						'itemprop' => 'thumbnailUrl',
					]); 
				?>
			</span>
		<?php endif; ?>

		<span class="inner-content" itemscope itemtype="https://schema.org/Article">
			<h3 class="content-title cbo-title-4 slide-up" itemprop="headline">
				<?php the_title(); ?>
			</h3>

			<span class="content-date slide-up">
				<?php echo esc_html($date); ?>
			</span>
		</span>
	</a>
</article>