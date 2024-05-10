<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

?>

<!-- Pricing Section Start -->
<section class="pricing_section">
    <div class="container">

        <?php if( have_rows('pricing_loop') ): ?>
            <div class="row mx-auto pricing_list">
            <?php while( have_rows('pricing_loop') ) : the_row(); ?>
                <div class="col-sm-6 col-md-4 col-lg-4 mx-auto pricing_loop">
                    <div class="pricing_item">
                        <div class="price_top ">
                            <div class="price d-flex">
                                <h3 class="spoiler_link"><?php the_sub_field('name'); ?></h3>
                                <div class="price_arrow">
                                    <div class="spoiler_link"><i class="bi bi-chevron-right"></i></div>
                                </div>
                            </div>
                            <div class="price_content ">
                                <?php the_sub_field('content'); ?>
                            </div>
                            <div class="price_currency">
                                <?php the_sub_field('currency'); ?>
                            </div>
                        </div>

                    </div>
                </div>
            <?php endwhile; ?>
            </div>
        <?php endif; ?>

    </div>

</section>
<!-- Pricing Statements Section End -->