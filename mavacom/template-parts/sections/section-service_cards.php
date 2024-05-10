<?php
/**
 * The template for displaying footer.
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}


?>

<!-- Argument Lists Area Start -->
<section class="argument_lists_section">
    <div class="container-fluid">
    <div class="row mx-auto">
    <div class="col-12 col-sm-12 col-lg-10 mx-auto">
        <div class="row mx-auto">

            <?php if( have_rows('argument_list_loop') ): ?>
                <?php while( have_rows('argument_list_loop') ) : the_row(); ?>

                    <div class="col-xs-12 col-sm-6 col-md-4 col-xl-4 mb-2 mx-auto argument_lists_item">
                        <div class="argument_wrap align-items-center d-flex">
                            <img class="argument_icon" src="<?php the_sub_field('icon');?>">
                            <h4><?php the_sub_field('title');?></h4>
                            <div class="argument_content"><?php the_sub_field('content');?></div>
                            <?php if (get_sub_field('enable_cta_button')):?>
                                <a class="cta_btn" <?php if (get_sub_field('link_id')):?>id="<?php the_sub_field('link_id'); ?>"<?php endif;?> href="<?php the_sub_field('link_url');?>"><?php the_sub_field('link_name');?></a>
                            <?php endif;?>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        </div>
        </div>
    </div>
</section>
<!-- Argument Lists Area End -->