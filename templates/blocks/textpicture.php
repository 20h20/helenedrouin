<?php
	$title	= get_sub_field('textpicture_title');
	$subtitle	= get_sub_field('textpicture_subtitle');
	$text	= get_sub_field('textpicture_text');
	$picture	= get_sub_field('textpicture_picture');
	$cover	= get_sub_field('textpicture_cover');
	$picturepos	= get_sub_field('textpicture_picturepos');
	$objectblocposition	= get_sub_field('textpicture_pictureblocpos');
?>
<section class="cbo-textpicture textpicture--<?php echo $picturepos; ?>">
	<div class="textpicture-inner cbo-container">
		<?php if($title): ?>
			<div class="textpicture-title title--<?php echo $titlecolor; ?> cbo-title-1 slide-up">
				<?php echo $title ?>
			</div>
		<?php endif; ?>

		<?php if($subtitle): ?>
			<div class="textpicture-subtitle cbo-title-2 title--pink slide-up">
				<?php echo $subtitle ?>
			</div>
		<?php endif; ?>

		<div class="textpicture-content <?php if($cover == 1): ?>content-cover<?php endif; ?>">
			<div class="textpicture-picture slide-up">
				<div class="picture-inner picture--<?php echo $objectblocposition; ?> <?php if($cover == 1): ?>cbo-picture-cover<?php endif; ?> <?php if($cover == 0): ?>cbo-picture-contain<?php endif; ?>">
					<img
						decoding="async"
						src="<?php echo $picture['sizes']['small']; ?>"
						srcset="<?php echo $picture['sizes']['small']; ?> 320w, <?php echo $picture['sizes']['xlarge']; ?> 768w, <?php echo $picture['sizes']['xlarge']; ?> 1024w"
						alt="<?php echo $picture['alt']; ?>" sizes="100vw"
						loading="lazy"
						width="768" height="768"
					>
				</div>
			</div>

			<?php if($text): ?>
				<div class="textpicture-text slide-up">
					<div class="cbo-cms">
						<?php echo $text ?>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>