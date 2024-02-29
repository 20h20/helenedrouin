<?php
	$title	= get_sub_field('keynumber_title');
	$text	= get_sub_field('keynumber_content');
?>
<section class="cbo-keynumber">
	<div class="keynumber-inner cbo-container">
		<div class="keynumber-content slide-up">
			<?php if($title): ?>
				<div class="contact-title cbo-title-2 slide-up">
					<?php echo $title ?>
				</div>
			<?php endif; ?>

			<div class="cbo-cms slide-up">
				<?php echo $text ?>
			</div>
		</div>
	</div>
</section>