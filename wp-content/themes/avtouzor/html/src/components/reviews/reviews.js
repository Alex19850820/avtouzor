$(document).on('click', '.js_listTwo', function () {
  $('.list-reviews').removeClass('js_listTwo');
  $('.list-reviews').addClass('js_listThree');
  $('.reviews-list-first').fadeOut(0);
  $('.reviews-list-two').fadeIn();
});

$(document).on('click', '.js_listThree', function () {
  $('.list-reviews').removeClass('js_listThree');
  $('.list-reviews').addClass('js_listFirst');
  $('.reviews-list-two').fadeOut(0);
  $('.reviews-list-three').fadeIn();
});

$(document).on('click', '.js_listFirst', function () {
  $('.list-reviews').removeClass('js_listFirst');
  $('.list-reviews').addClass('js_listTwo');
  $('.reviews-list-three').fadeOut(0);
  $('.reviews-list-first').fadeIn();
});

