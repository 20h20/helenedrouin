<?php

$title  = get_field('contact_title');
$chapo = get_field('contact_chapo');
$form    = get_field('contact_form');

?>

<section class="cbo-contact">
    <div class="contact-inner cbo-container container--small container--nomargin container--padding cbo-gold">

        <div class="contact-content">
            <?php if($title): ?>
                <div class="content-title cbo-title-2 slide-up">
                    <?php echo wp_kses_post($title); ?>
                </div>
            <?php endif; ?>

            <?php if($chapo): ?>
                <div class="content-chapo cbo-subtitle slide-up">
                    <?php echo wp_kses_post($chapo); ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="contact-form cbo-form slide-up">
            <?php
                $posts = get_field('contact_form');
                if( $posts ):
                    foreach( $posts as $p ):
                        $cf7_id= $p->ID;
                        echo do_shortcode( '[contact-form-7 id="'.$cf7_id.'" ]' );
                    endforeach;
                endif;
            ?>
        </div>
    </div>
</section>