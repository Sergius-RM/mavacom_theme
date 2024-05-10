<?php
/**
 * Template Name: Blog Post
 * Template Post Type: post
 * The template for displaying all single posts
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<!-- start of the loop -->
<?php while ( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'template-parts/blocks-blogs/section-single_article' ); ?>

<?php endwhile; ?>
<!-- end of the loop -->

<?php if ( have_rows( 'sections' ) ) : ?>
    <div class="single_post_template_parts">
    <?php while ( have_rows('sections' ) ) : the_row();
        if ( get_row_layout() == 'quick_order' ) :
            get_template_part('template-parts/sections/section', 'quick_order');
            ?>
        <?php endif; ?>
    <?php endwhile; ?>
    </div>
<?php endif; ?>


<!-- Blog Wigets Area Start -->
<?php if ( have_rows( 'blog_default_sections' ) ) : ?>
    <?php while ( have_rows('blog_default_sections' ) ) : the_row();
        if ( get_row_layout() == 'blog_related_articles' ) :
            get_template_part('template-parts/blocks-blogs/section', 'related_articles');
        ?>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
<!-- Blog Wigets Area End -->

<?php get_footer();