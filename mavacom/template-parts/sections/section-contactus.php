<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

$contact_source = get_sub_field( 'contact_source' );


$number = get_sub_field( 'number_of_posts' );
$orderby = get_sub_field( 'order_by' );
$order = get_sub_field( 'sorting_order' );
$location = get_sub_field('from_dep');
$term_array = array( $location );

if ( get_sub_field('from_dep') == true ) {
    $team_posts = get_posts( array(
        'post_type'      => 'team',
        'post_status'    => 'publish',
        'posts_per_page' => $number,
        'orderby'        => $orderby,
        'order'          => $order,
        'tax_query' => array(
            array(
                'taxonomy' => 'team_category',
                'field'    => 'tag_ID',
                'terms'    => $term_array[0],
            )
        )
    ) );
} else {
    $team_posts = get_posts( array(
        'post_type'      => 'team',
        'post_status'    => 'publish',
        'posts_per_page' => $number,
        'orderby'        => $orderby,
        'order'          => $order
    ) );
}

?>

<!-- Contact US Section Start -->
<section class="contactus_section wrap_two_columns">
    <div class="container">
        <div class="row mx-auto justify-content-end section_two_columns">

            <h4 class="sub-title"><?php the_sub_field('contactus_subtitle_h4'); ?></h4>
            <h2><?php the_sub_field('contactus_title_h2'); ?></h2>
            <p><?php the_sub_field('contactus_content_area'); ?></p>

            <div class="col-12 col-md-10 col-xl-9 inner-wrap mx-auto">
            <div class="row">

                <div class="col-sm-12 col-md-6 col-lg-6 contactus_content">

                <?php if ($contact_source == 'custom'):?>

                    <?php if( have_rows('contacts_array_info') ): ?>
                        <?php while( have_rows('contacts_array_info') ) : the_row(); ?>

                        <div class="contactus_content_item align-items-center d-flex">
                        <?php if ( get_sub_field('image') ):?>
                            <?php $about_content_img = get_sub_field('image');?>
                            <div class="about-content-img">
                                <img src="<?php echo $about_content_img;?>">
                            </div>
                        <?php endif; ?>

                        <div class="about-content">
                            <?php if (get_sub_field('title')):?>
                                <h4><?php $contacts_title = the_sub_field('title'); ?>
                                    <?php echo $contacts_title;?>
                                </h4>
                            <?php endif;?>
                            <?php if (get_sub_field('subtitle')):?>
                                <span><?php $contacts_subtitle = the_sub_field('subtitle'); ?>
                                    <?php echo $contacts_subtitle;?>
                                </span>
                            <?php endif;?>

                            <?php if( have_rows('contacts_contacts_info') ): ?>
                                <ul>
                                <?php while( have_rows('contacts_contacts_info') ) : the_row(); ?>
                                    <li>
                                        <?php $icon = get_sub_field('icon'); ?>
                                        <a <?php if ( get_sub_field('in_new_tab') == true ) { echo 'target="_blank"'; } ?>
                                            href="<?php if($icon == 'envelope-fill'): ?>
                                                mailto:<?php the_sub_field('url'); ?>
                                                <?php elseif($icon == 'telephone-fill'): ?>
                                                tel:<?php the_sub_field('url'); ?>
                                                <?php else:?>
                                                <?php the_sub_field('url'); ?>
                                                <?php endif; ?>">
                                            <i class="bi bi-<?php echo $icon;?>"></i> <?php the_sub_field('contact'); ?>
                                        </a>
                                    </li>
                                <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                            </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                <?php elseif($contact_source == 'team'):?>

                    <?php
                    foreach ( $team_posts as $post ): setup_postdata($post); $thumb_src = null;
                    if ( has_post_thumbnail($post->ID) ) {
                        $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ));
                        $thumb_src = $src[0]; }
                    ?>
                        <div class="contactus_content_item align-items-center d-flex">
                            <?php if ( $thumb_src ): ?>
                            <div class="about-content-img">
                                <img src="<?php echo $thumb_src; ?>" alt="<?php the_title(); ?>, <?php the_field('team_status'); ?>">
                            </div>
                            <?php endif; ?>

                            <div class="about-content">
                                <?php if( get_field('team_first_name') ): ?>
                                    <h4><?php echo the_field('team_first_name'); ?> <?php echo the_field('team_last_name'); ?></h4>
                                <?php endif; ?>

                                <?php if( get_field('team_status') ): ?>
                                    <span><?php echo the_field('team_status'); ?></span>
                                <?php endif;?>

                                <ul>
                                    <?php if( get_field('team_email_address') ): ?>
                                        <li>
                                            <a href="mailto:<?php echo the_field('team_email_address'); ?>" class="team-cta-btn">
                                                <i class="bi bi-envelope-fill"></i> <?php echo the_field('team_email_address'); ?>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if( get_field('team_phone_number') ): ?>
                                        <li>
                                            <a href="tel:<?php echo the_field('team_phone_number'); ?>" class="team-cta-btn">
                                                <i class="bi bi-telephone-fill"></i> <?php echo the_field('team_phone_number'); ?>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                </ul>

                            </div>
                        </div>
                    <?php endforeach; ?>

                <?php endif;?>

                </div>

                <div class="col-sm-12 col-md-6 col-lg-6 contactus_form">
                    <?php if (get_sub_field('contactus_shortcode_form')):?>
                        <?php $form_id = get_sub_field('contactus_shortcode_form');?>
                        <?php echo do_shortcode('[gravityform id="'. $form_id .'" title="false" description="false" ajax="true"]');?>
                    <?php endif;?>
                </div>
            </div>
            </div>

        </div>
    </div>
</section>
<!-- Contact US Section End -->