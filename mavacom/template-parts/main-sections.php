<?php
/**
 * All sections and template of EasyE theme
 *
 */
?>

<?php if ( have_rows( 'sections' ) ) : ?>
    <?php while ( have_rows('sections' ) ) : the_row();
        if ( get_row_layout() == 'hero' ) :
            get_template_part('template-parts/sections/section', 'hero');

        elseif ( get_row_layout() == 'quick_order' ) :
            get_template_part('template-parts/sections/section', 'quick_order');

        elseif ( get_row_layout() == 'two_columns' ) :
            get_template_part('template-parts/sections/section', 'two_columns');

        elseif ( get_row_layout() == 'highlighted_articles' ) :
            get_template_part('template-parts/sections/section', 'highlighted_articles');

        elseif ( get_row_layout() == 'pricing' ) :
            get_template_part('template-parts/sections/section', 'pricing');

        elseif ( get_row_layout() == 'calculator' ) :
            get_template_part('template-parts/sections/section', 'calculator');

        elseif ( get_row_layout() == 'best_price' ) :
            get_template_part('template-parts/sections/section', 'best_price');

        elseif ( get_row_layout() == 'contactus' ) :
            get_template_part('template-parts/sections/section', 'contactus');

        elseif ( get_row_layout() == 'grid_images' ) :
            get_template_part('template-parts/sections/section', 'grid_images');

        elseif ( get_row_layout() == 'page_header' ) :
            get_template_part('template-parts/sections/section', 'page_header');

        elseif ( get_row_layout() == 'page_header_contacts' ) :
            get_template_part('template-parts/sections/section', 'page_header_contacts');

        elseif ( get_row_layout() == 'podcast' ) :
            get_template_part('template-parts/sections/section', 'podcast');

        elseif ( get_row_layout() == 'blog_grid' ) :
            get_template_part('template-parts/sections/section', 'blog_grid');

        elseif ( get_row_layout() == 'team' ) :
            get_template_part('template-parts/sections/section', 'team');

        elseif ( get_row_layout() == 'related_articles' ) :
            get_template_part('template-parts/sections/section', 'related_articles');

        elseif ( get_row_layout() == 'feature_lists' ) :
            get_template_part('template-parts/sections/section', 'feature_lists');

        elseif ( get_row_layout() == 'service_cards' ) :
            get_template_part('template-parts/sections/section', 'service_cards');

        elseif ( get_row_layout() == 'service_grid' ) :
            get_template_part('template-parts/sections/section', 'service_grid');

        elseif ( get_row_layout() == 'customer_reviews' ) :
            get_template_part('template-parts/sections/section', 'customer_reviews');

        elseif ( get_row_layout() == 'counters' ) :
            get_template_part('template-parts/sections/section', 'counters');

        elseif ( get_row_layout() == 'posts_filter' ) :
            get_template_part('template-parts/blocks-archive/section', 'posts_filter');
            ?>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
