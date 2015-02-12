$(document).ready(function () {
  $('.icon-menu7').hover(function () {

    $('.icon-menu7').delay(100).slideUp(250);

    $('nav').css('height', '370px');

    setTimeout(function() {

      $('nav').css('height', '350px');

      flipIn( $('nav .color-nav:nth-child(1)') );

      setTimeout(function() {
        flipIn( $('nav .color-nav:nth-child(2)') );
      }, 125);

      setTimeout(function() {
        flipIn( $('nav .color-nav:nth-child(3)') );
      }, 250);

      setTimeout(function() {
        flipIn( $('nav .color-nav:nth-child(4)') );
      }, 375);

    }, 500);

  });

  function flipIn( element ) {
    element.show().addClass('flipInX animated');
  }
});
