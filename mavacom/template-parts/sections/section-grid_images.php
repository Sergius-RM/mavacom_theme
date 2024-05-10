<?php
/**
 * The template for displaying footer.
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

?>

<!-- Grid Images Area Start -->
<section class="grid_images_section">
    <div class="container">
        <div class="row gallery text-center m-auto">
        <h3><?php the_sub_field('h2_header'); ?></h3>
            <?php if( have_rows('grid_images_gallery') ): ?>
                <div class="col-12 col-md-12 col-xl-10 col-lg-8 m-auto">
                    <div class="row">
                    <?php while( have_rows('grid_images_gallery') ) : the_row(); ?>
                    <?php $id = get_row_index();?>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 gallery-item">
                            <img src="<?php the_sub_field('image_item');?>">
                        </div>
                    <?php endwhile; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- Grid Images Area End -->