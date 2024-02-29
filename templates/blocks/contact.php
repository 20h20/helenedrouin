<?php
	$title	= get_sub_field('contact_title');
	$subtitle	= get_sub_field('contact_subtitle');
	$chapo	= get_sub_field('contact_chapo');
?>
<section class="cbo-contact">
	<div class="contact-inner cbo-container">
		<?php if($title): ?>
			<div class="contact-title cbo-title-1 slide-up">
				<?php echo $title ?>
			</div>
		<?php endif; ?>

		<?php if($subtitle): ?>
			<div class="contact-subtitle cbo-title-2 title--pink slide-up">
				<?php echo $subtitle ?>
			</div>
		<?php endif; ?>

		<?php if($chapo): ?>
			<div class="contact-chapo cbo-chapo slide-up">
				<?php echo $chapo ?>
			</div>
		<?php endif; ?>

		<div class="contact-form">
			<div class="form-inner slide-up">
				<?php
					$posts = get_sub_field('contact_form');
					if( $posts ):
						foreach( $posts as $p ):
							$cf7_id= $p->ID;
							echo do_shortcode( '[contact-form-7 id="'.$cf7_id.'" ]' );
						endforeach;
					endif;
				?>
			</div>
		</div>
	</div>
</section>