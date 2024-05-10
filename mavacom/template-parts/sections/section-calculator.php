<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

?>

<!-- Calculator Section Start -->
<section class="calculator_section container" noindex >
    <div class="row">

        <div class="col-sm-12 col-md-6 col-lg-6 text-center mx-auto calculator_item">

            <h2><?php the_sub_field('h2_header'); ?></h2>
            <?php if (get_sub_field('header_subtitle')):?>
                <h6><?php the_sub_field('header_subtitle'); ?></h6>
            <?php endif;?>

            <div class="calculator_form" noindex >
                <?php if (get_sub_field('calculator_form')):?>
                    <?php $form_id = get_sub_field('calculator_form');?>
                    <?php echo do_shortcode('[gravityform id="'. $form_id .'" title="false" description="false" ajax="true"]');?>
                <?php endif;?>
            </div>
        </div>

    </div>
</section>
<!-- Calculator Section End -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
    // Добавляем класс is_checked к первому элементу при загрузке страницы
    document.querySelector(".gchoice_4_149_0").classList.add("is_checked");

    // Обработчики событий для кликов на элементах
    document.querySelectorAll(".billing_type .gchoice").forEach(function(choice) {
        choice.addEventListener("click", function() {
            // Переключаем класс is_checked между элементами
            document.querySelectorAll(".gchoice").forEach(function(otherChoice) {
                otherChoice.classList.remove("is_checked");
            });
            this.classList.add("is_checked");
        });
    });
});

</script>