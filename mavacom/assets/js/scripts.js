jQuery.noConflict(); (function($) {

  window.addEventListener('scroll', function() {
      var header = document.querySelector('.header_area');
      var headerHeight = 150; // Высота шапки в пикселях

      if (window.pageYOffset > headerHeight) {
          header.classList.add('sticky');
      } else {
          header.classList.remove('sticky');
      }
  });

  $('.reviews_slider').each(function(index, element) {
      var slider3 = tns({
          container: element,
          autoHeight: true,
          items: 1,
          loop: true,
          swipeAngle: false,
          speed: 500,
          gutter: 20,
          mouseDrag: true,
          autoplay: false,
          controls: true,
          nav: false,
          navPosition: 'bottom'
      });
  });

  //spoiler
  $('.pricing_item .spoiler_link').click(function() {

    const $priceContent = $(this).closest('.pricing_item').find('.price_content');
    const $arrow = $(this).closest('.price').find('.price_arrow');

    $priceContent.slideToggle();

    $arrow.find('.spoiler_link').toggleClass('rotate');

  });


  $('.gform-field-label--type-inline').click(function() {

    var checkbox = $(this).prev('.gfield-choice-input');
    var parent = $(this).parent('.gchoice');

    if(parent.hasClass('checked')) {
      parent.removeClass('checked');
    } else {
      parent.addClass('checked');
    }

  });
// инициализация
$(document).ready(function() {
  var $grid = $('.grid').isotope({
      itemSelector: '.grid-item',
      getFilterData: {
          categories: '[data-categories]'
      }
  });

  // Функция для инициализации Isotope после загрузки изображений
  function initIsotopeAfterImagesLoaded() {
      $grid.imagesLoaded().progress(function() {
          $grid.isotope('layout');
      });
  }

  // Вызываем функцию после загрузки страницы
  initIsotopeAfterImagesLoaded();

  // Обработка клика по кнопкам
  $('#filters').on('click', 'button', function() {
      var filterValue = $(this).attr('data-filter');
      $grid.isotope({
          filter: filterValue
      });
  });

  $('.button-group').each(function(i, buttonGroup) {
      var $buttonGroup = $(buttonGroup);
      $buttonGroup.on('click', 'button', function() {
          $buttonGroup.find('.is-checked').removeClass('is-checked');
          $(this).addClass('is-checked');
      });
  });
});

// Находим блоки для скрытия  
const aloitusmaksuField = document.querySelector('.aloitusmaksu-field');
const kuukausihintaField = document.querySelector('.kuukausihinta-field');

// Скрываем изначально
aloitusmaksuField.style.display = 'none';
kuukausihintaField.style.display = 'none';

// Находим все элементы .aloitusmaksu
const aloitusmaksuElements = document.querySelectorAll('.aloitusmaksu');

// Находим все элементы .kuukausihinta
const kuukausihintaElements = document.querySelectorAll('.kuukausihinta');

// Функция создания tooltip
function createTooltip(element) {

  // Находим label
  const label = element.querySelector('.gfield_label');  

  // Создаем элемент tooltip
  const tooltip = document.createElement('span');

  // Добавляем класс
  tooltip.classList.add('tooltip');

  // Добавляем текст
  tooltip.textContent = 'Info';

  // Вставляем после label
  label.insertAdjacentElement('afterend', tooltip);

  // Обработчик на mouseover
  tooltip.addEventListener('mouseover', () => {

    // Если элемент .aloitusmaksu
    if (element.classList.contains('aloitusmaksu')) {
    
      // Показываем блок .aloitusmaksu-field
      aloitusmaksuField.style.display = 'block';
    
    // Если элемент .kuukausihinta  
    } else if (element.classList.contains('kuukausihinta')) {
    
      // Показываем блок .kuukausihinta-field
      kuukausihintaField.style.display = 'block';
      
    }

  });
  
  // Обработчик на mouseout
  tooltip.addEventListener('mouseout', () => {
  
    // Скрываем блок 
    aloitusmaksuField.style.display = 'none';
    kuukausihintaField.style.display = 'none';

  });

}

// Генерируем tooltip для .aloitusmaksu 
aloitusmaksuElements.forEach(element => {
  createTooltip(element);
});

// Генерируем tooltip для .kuukausihinta
kuukausihintaElements.forEach(element => {
  createTooltip(element);
});

})(jQuery);