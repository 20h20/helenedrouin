<?php

$picture = get_field('fullpicture_picture');
$title = get_field('fullpicture_title');
$subtitle = get_field('fullpicture_subtitle');

?>

<section class="cbo-fullpicture" style="--bg-image: url('<?php echo esc_url($picture['sizes']['xlarge']); ?>')">
    <div class="fullpicture-picture"></div>
    <div class="fullpicture-content cbo-container container--margin container--padding">
        <?php if ($title): ?>
            <div class="content-title cbo-title-2 slide-up">
                <?php echo wp_kses_post($title); ?>
            </div>
        <?php endif; ?>

        <?php if ($subtitle): ?>
            <p class="content-text slide-up">
                <?php echo esc_html($subtitle); ?>
            </p>
        <?php endif; ?>
    </div>
</section>