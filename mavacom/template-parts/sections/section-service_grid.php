<?php
/**
 * The template for displaying footer.
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}


?>

<!-- Argument Lists Area Start -->
<section class="service_grid_section">
    <div class="container">
        <div class="row mx-auto">

            <?php if (get_sub_field( 'title')): ?>
                <h2 class="text-center mx-auto">
                    <?php echo get_sub_field('title');?>
                </h2>
            <?php endif;?>

            <?php if( have_rows('argument_list_loop') ): ?>
                <?php while( have_rows('argument_list_loop') ) : the_row(); ?>

                    <div class="col-12 col-sm-6 col-md-6 col-xl-4 mb-2 mx-auto service_grid_item">
                        <div class="service_wrap">
                            <img class="service_icon" src="<?php the_sub_field('icon');?>">
                            <h3><?php the_sub_field('title');?></h3>
                            <p class="service_content"><?php the_sub_field('content');?></p>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- Argument Lists Area End -->