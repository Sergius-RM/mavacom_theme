<?php
/**
 * Template name: Thanks Page Template
 *
 */

get_header();
?>

    <?php if (  get_field( 'thanks_page_code', 'option') ) :?>
        <?php $thankspage_code = get_field('thanks_page_code', 'option');
            print $thankspage_code;?>
    <?php endif ?>

    <div class="thanks_page">
        <?php get_template_part( 'template-parts/main-sections' ); ?>
    </div>

<?php
get_footer();