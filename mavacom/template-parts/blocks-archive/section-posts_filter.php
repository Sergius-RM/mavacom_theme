<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

?>

<!-- Posts Filter Section Start -->
<section <?php if( get_sub_field('enable_anchor') ): ?>
            id="<?php the_sub_field('anchor_name'); ?>"
        <?php endif;?> 
        class="blogrid_articles posts_filter_section" >

    <div class="container posts_filter_list">

        <ul class="blogrid_categories">
            <?php if (get_sub_field('kaikki_url')):?>
                <li class="cat-item current-cat">
                    <a aria-current="page" href="<?php the_sub_field('kaikki_url'); ?>">Kaikki</a>
                </li>
            <?php else:?>
                <li class="cat-item">
                    <a aria-current="page" href="/referenssit/">Kaikki</a>
                </li>
            <?php endif;?>
                <?php wp_list_categories('orderby=name&title_li='); ?><br>
        </ul>

    </div>

</section>
<!-- Posts Filter Section Start -->