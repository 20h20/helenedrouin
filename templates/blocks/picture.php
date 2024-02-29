<?php
	$picture	= get_sub_field('picture');
?>
<section class="cbo-picture">
	<div class="picture-inner cbo-picture-cover">
		<img
			decoding="async"
			src="<?php echo $picture['sizes']['xsmall']; ?>"
			srcset="<?php echo $picture['sizes']['xsmall']; ?> 320w, <?php echo $picture['sizes']['xlarge']; ?> 768w, <?php echo $picture['sizes']['xlarge']; ?> 1024w"
			alt="<?php echo $picture['alt']; ?>" sizes="100vw"
			loading="lazy"
			width="1900" height="600"
		>
	</div>
</section>