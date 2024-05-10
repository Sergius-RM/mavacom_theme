<?php
/**
 * Template name: Cookiebot Template
 *
 */

get_header();
?>

    <?php if (  get_field( 'thanks_page_code', 'option') ) :?>
        <?php $thankspage_code = get_field('thanks_page_code', 'option');
            print $thankspage_code;?>
    <?php endif ?>

    <div class="thanks_page">
	<script id="CookieDeclaration" src="https://consent.cookiebot.com/f324d74a-e1dd-4071-a038-13be23544b71/cd.js" type="text/javascript" async></script>
        <?php get_template_part( 'template-parts/main-sections' ); ?>
    </div>

<?php
get_footer();