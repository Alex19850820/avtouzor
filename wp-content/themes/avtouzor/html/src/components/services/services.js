// $(document).on('click', '.js_moreActive', function () {
//   var parentItem =  $(this).parents('.service-item');
//   $('.more-info').removeClass('more-info-active');
//   parentItem.find('.more-info').toggleClass('more-info-active');
//   if (parentItem.hasClass('js_activeItem')) {
//     $('.more-info').removeClass('more-info-active');
//     parentItem.removeClass('js_activeItem');
//   } else {
//     parentItem.addClass('js_activeItem');
//   }
// });
//
// $(document).click(function (event) {
//   if ($(event.target).parents('.js_activeItem').length) return;
//   $('.more-info').removeClass('more-info-active');
//   $('.service-item').removeClass('js_activeItem');
//   event.stopPropagation();
// });

$(document).on('click', '.js_moreActive', function () {
  var parentItem =  $(this).parents('.service-item');
  $('.more-info').removeClass('more-info-active');
  if (parentItem.hasClass('js_activeItem')){
    parentItem.find('.more-info').removeClass('more-info-active');
    $('.service-item').removeClass('js_activeItem');
  } else {
    parentItem.find('.more-info').addClass('more-info-active');
    parentItem.addClass('js_activeItem');
  }
});

$(document).on('click', '.close-more', function () {
  var parentItem =  $(this).parents('.service-item');
  parentItem.find('.more-info').removeClass('more-info-active');
  $('.service-item').removeClass('js_activeItem');
});

$(document).click(function (event) {
  if ($(event.target).parents('.js_activeItem').length) return;
  $('.more-info').removeClass('more-info-active');
  $('.service-item').removeClass('js_activeItem');
  event.stopPropagation();
});
