<?php

$color	= get_field('text_color');
$content	= get_field('text_content');

?>

<section class="cbo-text <?php echo ($color === 'gold') ? 'cbo--gold' : ''; ?>">
	<div class="text-inner cbo-container container--small <?php echo ($color === 'gold') ? 'container--padding container--nomargin' : ''; ?>">
		<div class="text-content cbo-cms">
			<?php echo wp_kses_post($content); ?>
		</div>
	</div>
</section>