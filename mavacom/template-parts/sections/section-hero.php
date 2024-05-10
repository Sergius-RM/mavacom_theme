<?php
$right_image = get_sub_field('hero_top_icon');
?>

<!-- Hero Section Start -->
<section class="hero-section" >
    <div class="hero-container container-fluid" style="background: #ffae10; background-size: contain;">
        <div class="row align-items-center">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <?php if (get_sub_field( 'above_heading')): ?>
                    <h4>
                        <?php echo get_sub_field('above_heading');?>
                    </h4>
                <?php endif;?>
                <h1 class="hero_title">
                    <?php echo get_sub_field('header_title');?>
                </h1>
                <?php if (get_sub_field( 'content')): ?>
                    <span class="hero-content d-block">
                        <?php echo get_sub_field('content');?>
                    </span>
                <?php endif;?>
                <?php if (get_sub_field( 'enable_cta_button')): ?>
                    <a class="read_more_link" <?php if (get_sub_field('hero_link_id')):?>id="<?php the_sub_field('hero_link_id'); ?>"<?php endif;?> href="<?php echo get_sub_field('hero_link_url');?>"><?php echo get_sub_field('hero_link_text');?></a>
                <?php endif;?>
            </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
            <img  style="width: 100%" src="<?php echo $right_image['url'];?>" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->