<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

$container_width = get_sub_field('width');
if ($container_width == 'container') {
    $width = 'container';
} else if ($container_width == 'fulwidth') {
    $width = 'container-fluid';
}

$container_filling = get_sub_field('filling');
$container_style = get_sub_field('style');

?>

<!-- Quick Order Section Start -->
<section class="quick_order_section wrap_two_columns <?php if ( get_sub_field('swap_blocks') == true ) { echo 'swap_blocks'; } ?>">
    <div class="<?php echo $width; ?>">
        <div class="row align-items-center section_two_columns <?php echo $container_style; ?> <?php if ($container_filling == 'part'):?>partial_fill<?php endif;?>">

            <div class="col-12 col-sm-6 col-md-8 col-lg-7 quick_order_content">
                <?php if (get_sub_field( 'above_title')): ?>
                    <h4><?php the_sub_field('above_title'); ?></h4>
                <?php endif;?>
                <h2><?php the_sub_field('h2_header'); ?></h2>
                <?php if (get_sub_field( 'content')): ?>
                    <p><?php the_sub_field('content'); ?></p>
                <?php endif;?>

                <?php if (get_sub_field('enable_cta_button')):?>
                    <a class="cta_btn" <?php if (get_sub_field('button_id')):?>id="<?php the_sub_field('button_id'); ?>"<?php endif;?> href="<?php the_sub_field('button_link'); ?>">
                        <?php the_sub_field('button_text'); ?>
                    </a>
                <?php endif;?>

            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-5 quick_order_image <?php if ( get_sub_field('swap_blocks') == true ) { echo 'order-first'; } ?>">
                <?php if ( get_sub_field('image') ):?>
                    <?php $quick_order_image = get_sub_field('image');?>
                    <img src="<?php echo $quick_order_image;?>">
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>
<!-- Quick Order Section End -->