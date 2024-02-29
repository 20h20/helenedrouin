<?php
	$picture	= get_field('press_logo');
	$url	= get_field('podcast_url');
?>
<article <?php post_class('list-el el-press'); ?>>
	<a class="el-inner" href="<?php echo $url ?>" target="_blank">
		<span class="el-picture cbo-picture-contain">
			<img
				decoding="async"
				src="<?php echo $picture['sizes']['xsmall']; ?>"
				srcset="<?php echo $picture['sizes']['xsmall']; ?> 320w, <?php echo $picture['sizes']['xsmall']; ?> 768w, <?php echo $picture['sizes']['xsmall']; ?> 1024w"
				alt="<?php echo $picture['alt']; ?>" sizes="100vw"
				loading="lazy"
				width="140" height="70"
			>
		</span>
	</a>
</article>