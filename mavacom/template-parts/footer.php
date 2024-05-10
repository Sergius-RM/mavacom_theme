<?php
/**
 * The template for displaying footer.
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

$copyright_data = get_field('copyright_data', 'option');

?>
</div>
<!-- Footer Area Start -->
<footer id="site-footer" class="site-footer" role="contentinfo">
    <div class="container-fluid">
        <div class="row">

        <a href="#" id="to-top-button"><i class="fas fa-chevron-up"></i></a>

            <!-- Branding Area Start -->
            <div class="col-sm-12 col-md-4 col-xl-4 site-branding">

                <a href="/" class="footer-logo">
                    <?php
                    $header_logo = get_theme_mod('header_logo');
                    $img = wp_get_attachment_image_src($header_logo, 'full');
                    if ($img) :
                        ?>
                        <img src="<?php echo $img[0]; ?>" alt="">
                    <?php endif; ?>
                </a>

             <!-- Contacts Info Area Start -->
             <div class="row footer_contact_wiget">
                <?php if( have_rows('contact_wiget', 'option') ): ?>
                    <?php while( have_rows('contact_wiget', 'option') ) : the_row(); ?>

                        <div class="footer_contacts">

                            <h4><?php $contacts_title = the_sub_field('contacts_title', 'option'); ?>
                            <?php echo $contacts_title;?></h4>

                            <?php if (have_rows('topbaremails', 'option')) { ?>
                                <?php while (have_rows('topbaremails', 'option')) {
                                    the_row(); ?>
                                        <a href="mailto:<?php the_sub_field('top_bar_email_link');?>">
                                            <i class="bi bi-envelope-fill"></i> <?php the_sub_field('top_bar_email');?></a>
                                <?php } ?>
                            <?php } ?>

                            <?php if (have_rows('topbarphones', 'option')) { ?>
                                <?php while (have_rows('topbarphones', 'option')) {
                                    the_row(); ?>
                                        <a href="tel:<?php the_sub_field('top_bar_phone_link');?>">
                                            <i class="bi bi-telephone-fill"></i><?php the_sub_field('top_bar_phone');?></a>
                                <?php } ?>
                            <?php } ?>

                            <?php if (have_rows('physical_adress', 'option')) {
                                while (have_rows('physical_adress', 'option')) {
                                    the_row(); ?>
                                        <div class="physical_adress"><i class="bi bi-geo-alt-fill"></i> <?php the_sub_field('short_physical_adress');?></div>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <!-- END Contacts Info Area -->

            <!-- Socials Area Start -->
            <div class="footer_socials">
                <?php if( have_rows('social_links', 'option') ): ?>
                    <?php while( have_rows('social_links', 'option') ) : the_row(); ?>
                        <a target="_blank" href="<?php the_sub_field('url'); ?>">
                                <i class="bi <?php the_sub_field('service_ico'); ?>"></i>
                        </a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <!-- END Socials Area Start -->
            </div>
            <!-- END Branding Area -->

            <!-- Footer Nav Area Start -->
            <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-xl-4 footer_nav" role="navigation">
                <?php dynamic_sidebar( 'footer_1' ); ?>
            </div>
            <!-- Footer Nav Area -->

            <!-- Ordering Area Start -->
            <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-xl-4 footer_ordering">
                <?php if( have_rows('orderind_link', 'option') ): ?>
                    <?php while( have_rows('orderind_link', 'option') ) : the_row(); ?>
                        <h4>
                            <?php the_sub_field('title'); ?>
                        </h4>
                        <a <?php if ( get_sub_field('in_new_tab', 'option') == true ) { echo 'target="_blank"'; } ?>  id="<?php the_sub_field('link_id'); ?>" href="<?php the_sub_field('url'); ?>">
                            <?php the_sub_field('link_text'); ?> <i class="bi bi-arrow-right"></i>
                        </a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <!-- END Ordering Area -->

            <!-- Ordering Area Start -->
            <div class="footer_entrepreneurs d-flex">
                <?php if( have_rows('footer_logo_area', 'option') ): ?>
                    <?php while( have_rows('footer_logo_area', 'option') ) : the_row(); ?>
                        <a href="<?php the_sub_field('url'); ?>">
                            <img src="<?php the_sub_field('logo_img'); ?>" alt="footer_entrepreneurs logo">
                        </a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <!-- END Ordering Area -->

        </div>
    </div>

</footer>
 <!-- Footer Area End -->

<!-- START Copyright Area -->
<div class="container-fluid footer_copyright">
    <div class="row align-items-center">
        <div class="col-12 col-sm-6 col-xl-6 footer_copyright_menu">
            <?php dynamic_sidebar( 'footer_bottom' ); ?>
        </div>
        <div class="col-12 col-sm-6 col-xl-6 copyright_data">
            <?php echo $copyright_data;?>
        </div>
    </div>
</div>
<!-- END Copyright Area -->