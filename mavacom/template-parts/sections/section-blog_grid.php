<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

$number = get_sub_field('number_of_posts');
$category = get_sub_field('from_category');
$category_array = array( $category );
$tag = get_sub_field('from_tag');
$tag_array = array( $tag );
$orderby = get_sub_field('order_by');
$order = get_sub_field('sorting_order');
$colnumber = get_sub_field('number_columns');

if ( get_sub_field('swap_by_category') == true ) {
    $args = array(
        'post_type'         => 'post',
        'posts_per_page'    => $number,
        'orderby'           => $orderby,
        'order'             => $order,
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'terms'    => $category_array[0],
            )
        )
    );
} else {
    $args = array(
        'post_type'         => 'post',
        'posts_per_page'    => $number,
        'orderby'           => $orderby,
        'order'             => $order,
        'tax_query' => array(
            array(
                'taxonomy' => 'post_tag',
                'terms'    => $tag_array[0],
            )
        )
    );
}

$text = get_the_excerpt();
$words = 20;
$excerpt_lenght = 20;
$more = '…';
$excerpt = wp_trim_words( $text, $words, $more );
?>

<!-- Blog Grid Area Start -->
<section class="blogrid_articles">
    <div class="container">

        <div class="section-title text-center">
            <?php if( get_sub_field('h2_header') ): ?>
                <h2><?php echo get_sub_field('h2_header'); ?></h2>
            <?php endif; ?>
        </div>

        <div class="row">
            <div class="blogrid-content text-center">
                <?php if( get_sub_field('content') ): ?>
                    <?php echo get_sub_field('content'); ?>
                <?php endif; ?>

                <?php if ( get_sub_field('use_filter') == true ):?>
                    <div id="filters" class="button-group filter-button-group">
                        <?php
                            $categories = array();
                            $wpex_query = new WP_Query( $args );
                            foreach ($wpex_query->posts as $post) {
                            $post_categories = get_the_category($post->ID);
                                foreach ($post_categories as $category) {
                                    if (!in_array($category, $categories)) {
                                    $categories[] = $category;
                                    }
                                }
                            }
                        ?>
                        <button class="button is-checked" data-filter="*">Kaikki</button>
                        <?php foreach ($categories as $category) { ?>
                            <button class="button" data-filter=".<?php echo $category->slug;?>"><?php echo $category->name;?></button>
                        <?php }
                        ?>
                    </div>
                <?php endif;?>

            </div>
        </div>
        <div class="row grid">

            <?php $wpex_query = new WP_Query( $args );
            foreach( $wpex_query->posts as $post ) : setup_postdata( $post ); ?>

            <?php
            $categories = get_the_category();
            if (!empty($categories)) {
                $category_names = array_map(function($category) {
                    return $category->slug;
                }, $categories);
            }
            ?>

            <div class="grid-item col-12 col-sm-6 col-md-6 col-xl-<?php echo $colnumber;?> <?php echo implode(' ', $category_names);?>" data-categories="<?php echo implode(' ', $category_names); ?>" >
                <div class="articles-item">
                    <div class="image">
                        <div class="square-container">
                            <?php if (has_post_thumbnail( $post->ID ) ): ?>
                                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'image_full' ); ?>
                                <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
                            <?php else: ?>
                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/post_thumbnail.png" alt="<?php the_title(); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="articles-content">

                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

                        <div class="excerpt"><?php echo custom_excerpt($excerpt_lenght); ?></div>

                        <a href="<?php the_permalink(); ?>" class="learn-more"><?php esc_html_e('Lue lisää'); ?> <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
            <?php
            endforeach;
            wp_reset_postdata(); ?>
        </div>
    </div>
</div>
</section>
<!-- Blog Grid Area END  -->
