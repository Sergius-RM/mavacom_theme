<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

?>

<!-- Podcast Section Start -->
<section class="podcast_section">
    <div class="container">
        <div class="row">

            <div class="col-sm-12 col-md-6 col-lg-6 text-center mx-auto podcast_item">
                <?php if (get_sub_field('header_subtitle')):?>
                    <h6><?php the_sub_field('header_subtitle'); ?></h6>
                <?php endif;?>
                <h2><?php the_sub_field('h2_header'); ?></h2>
                <div class="content">
                    <?php the_sub_field('content'); ?>
                </div>

                <?php if (get_sub_field('enable_cta_button')):?>
                    <a class="cta_btn" <?php if ( get_sub_field('in_new_tab') == true ) { echo 'target="_blank"'; } ?> <?php if (get_sub_field('button_link')):?>id="<?php the_sub_field('button_id'); ?>"<?php endif;?> href="<?php the_sub_field('button_link'); ?>">
                        <?php the_sub_field('button_text'); ?>
                    </a>
                <?php endif;?>
            </div>

        </div>
    </div>
</section>
<!-- Podcast Section End -->