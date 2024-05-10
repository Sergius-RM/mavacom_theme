<!-- Hero Section Start -->
<section class="page_header_section contact_header_section" >
    <div class="page_header_container container-fluid">
        <div class="row">
        <div class="col-12 col-sm-8 col-md-6 col-lg-6">
                <?php if (get_sub_field( 'above_heading')): ?>
                    <h4>
                        <?php echo get_sub_field('above_heading');?>
                    </h4>
                <?php endif;?>
                <h1 class="hero_title">
                    <?php echo get_sub_field('header_title_h1');?>
                </h1>
                <?php if (get_sub_field( 'content')): ?>
                    <span class="page_header_content d-block">
                        <?php echo get_sub_field('content');?>
                    </span>
                <?php endif;?>

                <?php if( have_rows('autor_contacts') ): ?>
                    <div class="page_header_autor_contacts">
                    <?php while( have_rows('autor_contacts') ) : the_row(); ?>
                    <div class="contactus_content_item align-items-center d-flex">
                        <div class="about-content">
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
                    </div>
                <?php endif; ?>

                <?php if (get_sub_field( 'enable_cta_button')): ?>
                    <a class="read_more_link" <?php if (get_sub_field('hero_link_id')):?>id="<?php the_sub_field('hero_link_id'); ?>"<?php endif;?> href="<?php echo get_sub_field('hero_link_url');?>"><?php echo get_sub_field('hero_link_text');?></a>
                <?php endif;?>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-6 contactus_form">
                <?php if (get_sub_field( 'form_title')): ?>
                    <h4>
                        <?php echo get_sub_field('form_title');?>
                    </h4>
                <?php endif;?>
                <?php if (get_sub_field('contactus_shortcode_form')):?>
                    <?php $form_id = get_sub_field('contactus_shortcode_form');?>
                    <?php echo do_shortcode('[gravityform id="'. $form_id[0] .'" title="false" description="false" ajax="true"]');?>
                <?php endif;?>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->