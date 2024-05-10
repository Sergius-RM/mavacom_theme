<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

?>
    <!-- Page Banner Start -->
    <section class="blog-banner">

    <div class="page_header_container container articles-item">
        <div class="row align-items-center">
            <div class="col-12 col-sm-6">
                <?php if (get_field('blog_custom_title') ): ?>
                    <h1 class="page-title"><?php the_field('blog_custom_title');?></h1>
                <?php else: ?>
                    <h1 class="page-title"><?php the_title(); ?></h1>
                <?php endif; ?>
            </div>
            <div class="col-12 col-sm-6 image">
                <div class="square-container">
                <?php if (get_field('blog_custom_thumbnail') ): ?>
                    <?php $custom_thumbnail = get_field('blog_custom_thumbnail');?>
                    <img src="<?php echo $custom_thumbnail;?>">
                <?php elseif (has_post_thumbnail() ): ?>
                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'image_full' ); ?>
                    <img src="<?php echo $image[0]; ?>">
                <?php else: ?>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/post_thumbnail.png">
                <?php endif;?>
                </div>
            </div>
        </div>
    </div>

    </section>
    <!-- Page Banner End -->

    <!-- Blog Details Area Start -->
    <section class="blog-details-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-md-8 col-lg-8 mx-auto blog-content-area">

                    <div class="blog-details-content">
                        <?php the_content();?>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- Blog Details Area End -->