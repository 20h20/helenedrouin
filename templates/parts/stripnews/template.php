<?php
	$striptag	= get_field('option_striptag', 'option');
	$striptxt	= get_field('option_stripcontent', 'option');
	$button	= get_field('option_stripurl', 'option');
?>

<div class="cbo-stripnews">
	<div class="stripnews-inner cbo-container container--nomargin">
		<div class="inner-content">
			<?php if($striptag): ?>
				<div class="content-tag">
					<?php echo esc_html($striptag); ?>
				</div>
			<?php endif; ?>

			<?php if($striptxt): ?>
				<div class="content-txt">
					<?php echo esc_html($striptxt); ?>
				</div>
			<?php endif; ?>
		</div>

		<?php if($button): ?>
			<a class="content-button cbo-button button--gold" href="<?php echo esc_url($button['url']); ?>" target="<?php echo esc_attr($button['target'] ?: '_self'); ?>" aria-label="<?php echo esc_html($button['title']); ?>">
				<?php echo esc_html($button['title']); ?>
			</a>
		<?php endif; ?>
	</div>
</div>