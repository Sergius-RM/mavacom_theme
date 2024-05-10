<?php
$right_image = get_sub_field('heder_right_image');
?>

<!-- Hero Section Start -->
<section class="page_header_section" >
    <div class="page_header_container container-fluid hero_mobile" style="background: url('<?php echo $right_image['url'];?>') 85% 0% no-repeat #ffae10; background-size: contain;">
        <div class="row align-items-center">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
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
                <?php if (get_sub_field( 'enable_cta_button')): ?>
                    <a class="read_more_link" <?php if (get_sub_field('hero_link_id')):?>id="<?php the_sub_field('hero_link_id'); ?>"<?php endif;?> href="<?php echo get_sub_field('hero_link_url');?>"><?php echo get_sub_field('hero_link_text');?></a>
                <?php endif;?>
            </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-6 hero_mobile_img">
                <img  style="width: 100%" src="<?php echo $right_image['url'];?>" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->