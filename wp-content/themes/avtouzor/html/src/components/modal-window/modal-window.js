if ($('.js_phone-mask').length > 0) {
  $('.js_phone-mask').inputmask({alias: "phoneru"});
}

// $(document).on('click', '.js_modalWindow', function () {
//   $('body').css({'overflow': 'hidden'});
//   $('.modal-window').addClass('modal-window-active');
// });
// $(document).on('click', '.overlay', function () {
//   $('body').css({'overflow': 'visible'});
//   $('.modal-window').removeClass('modal-window-active');
// });

$('.js_modalWindow').fancybox({
  // Options will go here
});
