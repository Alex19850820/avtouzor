if(window.innerWidth > 769) {
  function reSize($target) {
    var containerW = $('.container').width();
    var windowW = $(window).width();
    var sideMargin = (windowW - containerW) / 2;
    $target.css('width', (containerW - $('.footer > .contacts').width() + sideMargin) + 'px');
  }

  $(document).ready(function () {
    reSize($('.map-block'));
  });

  $(window).resize(function () {
    reSize($('.map-block'));
  });
}
