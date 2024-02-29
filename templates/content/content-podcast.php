<?php
	$url	= get_field('podcast_url');
?>
<article <?php post_class('list-el el-podcast'); ?>>
	<a class="el-inner" href="<?php echo $url ?>" itemprop="url" target="_blank">
		<span class="el-picture cbo-picture-contain">
			<img
				decoding="async"
				src="<?php bloginfo('template_directory'); ?>/library/img/podcast.png"
				alt="Podcast d'Hélène Drouin" sizes="100vw"
				loading="lazy"
				width="80" height="80"
			>
		</span>
		<?php the_title(); ?>
	</a>
</article>