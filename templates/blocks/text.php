<?php
	$bgcolor	= get_sub_field('text_bgcolor');
	$title	= get_sub_field('text_title');
	$size	= get_sub_field('text_size');
	$text	= get_sub_field('text-content');
?>
<section class="cbo-text text--<?php echo $bgcolor ?>">
	<div class="text-inner cbo-container">
		<div class="text-content">
			<?php if($title): ?>
				<div class="text-title cbo-title-2 slide-up">
					<?php echo $title ?>
				</div>
			<?php endif; ?>

			<div class="cbo-cms text--<?php echo $size ?>">
				<?php echo $text ?>
			</div>
		</div>
	</div>
</section>