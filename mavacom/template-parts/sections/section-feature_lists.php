<?php
/**
 * The template for displaying footer.
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

?>

<!-- Feature Lists Area Start -->
<section class="feature_lists_section">
    <div class="container">
        <h2 class="text-center m-auto"><?php the_sub_field('title');?></h2>
        <div class="row">
        <?php if( have_rows('feature_lists_cols') ): ?>
            <?php while( have_rows('feature_lists_cols') ) : the_row(); ?>

                <div class="col-12 col-sm-8 col-md-6 col-xl-4 mx-auto feature_lists_cols">

                    <?php if (have_rows('feature_items')) { ?>
                        <ul>
                        <?php while (have_rows('feature_items')) {
                            the_row(); ?>
                                <li class="align-items-center feature_item d-flex">
                                    <div class="feature_icon">
                                        <img src="<?php the_sub_field('icon');?>">
                                    </div>
                                    <div class="feature_content">
                                        <h4><?php the_sub_field('title');?></h4>
                                        <p><?php the_sub_field('content');?></p>
                                    </div>
                                </li>
                        <?php } ?>
                        </ul>
                    <?php } ?>

                </div>
            <?php endwhile; ?>
        <?php endif; ?>

        </div>
    </div>
</section>
<!-- Feature Lists Area End -->