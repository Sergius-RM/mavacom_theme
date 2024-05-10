<?php
/**
 * The template for displaying footer.
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

?>

<!-- Counters Area Start -->
<section class="counters_section ">
    <div class="container">
        <div class="row benefits__inner">
            <?php if( have_rows('counter_wrap') ): ?>
                <?php while( have_rows('counter_wrap') ) : the_row(); ?>

                    <div class="col-sm-12 col-md-4 col-xl-4 text-center mx-auto counter_item">

                         <h2 class="benefits__number"><?php the_sub_field('сountdown'); ?></h2>
                        <?php if (get_sub_field('description')):?>
                            <div class="description"><?php the_sub_field('description');?></div>
                        <?php endif;?>

                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- Counters Area End -->

<!-- <script src="/wp-content/themes/mavacom/assets/js/jquery.spincrement.min.js"></script>
<script>
jQuery.noConflict(); (function($) {
    $(document).ready(function () {
 
 var show = true;
 var countbox = ".benefits__inner";
 $(window).on("scroll load resize", function () {
     if (!show) return false; // Отменяем показ анимации, если она уже была выполнена
     var w_top = $(window).scrollTop(); // Количество пикселей на которое была прокручена страница
     var e_top = $(countbox).offset().top; // Расстояние от блока со счетчиками до верха всего документа
     var w_height = $(window).height(); // Высота окна браузера
     var d_height = $(document).height(); // Высота всего документа
     var e_height = $(countbox).outerHeight(); // Полная высота блока со счетчиками
     if (w_top + 500 >= e_top || w_height + w_top == d_height || e_height + e_top < w_height) {
         $('.benefits__number').css('opacity', '1');
         $('.benefits__number').spincrement({
             thousandSeparator: "",
             duration: 1200
         });
          
         show = false;
     }
 });

});
})(jQuery);
</script> -->