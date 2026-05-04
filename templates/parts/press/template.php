<?php

global $post;
$url	= get_field('press_url', $post->ID);

?>
<article <?php post_class('list-el'); ?> itemscope itemtype="https://schema.org/VideoObject">
	<a
		class="el-inner"
		href="<?php echo esc_html($url); ?>"
		target="_blank"
		aria-label="<?php pll_e('Erreur 404') ?> <?php the_title(); ?> <?php pll_e('(nouvelle fenêtre)') ?>"
		rel="noopener noreferrer"
		itemprop="url"
	>
		<?php if (has_post_thumbnail()) : ?>
			<span class="inner-picture cbo-picture-contain" itemprop="thumbnail">
				<?php 
					the_post_thumbnail('medium', [
						'loading'  => 'lazy',
						'decoding' => 'async',
						'itemprop' => 'thumbnailUrl',
					]); 
				?>
			</span>
		<?php endif; ?>
	</a>
</article>