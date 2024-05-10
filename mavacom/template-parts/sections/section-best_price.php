<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

?>

<!-- Best Price Section Start -->
<section class="best_price_section wrap_two_columns container">
    <div class="row align-items-center section_two_columns">

        <div class="col-12 col-sm-6 col-md-4 col-lg-4 best_price_title <?php if ( get_sub_field('swap_blocks') == true ) { echo 'order-second'; } ?>">
            <h2><?php the_sub_field('name'); ?></h2>
            <div class="price"><?php the_sub_field('price'); ?></div>
        </div>

        <div class="col-12 col-sm-6 col-md-8 col-lg-8 best_price_content <?php if ( get_sub_field('swap_blocks') == true ) { echo 'order-first'; } ?>">
            <?php if ( get_sub_field('content') ):?>
                <div class="content"><?php the_sub_field('content'); ?></div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- Best Price Section End -->