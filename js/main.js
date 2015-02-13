$(document).ready(function () {

  // Set Globals
  var fixedElements = [ $('header'), $('.line-bg') ];

  // menu is hovered
  $('.icon-menu7').hover(function () {

    showNav();

  });

  // if chevron is clicked or intro scroll reaches a certain point
  $('.chevron').on('click', function () {
    mainState();
  });

  // if scroll reaches certain point
  $(window).scroll(function() {
    var h = $('body').height();
    var y = $(window).scrollTop();

    if ( y > 10 ) {
      // slide to anchor
      // go to main state
      mainState();

    }
    // dont unset fixed unless at top
    if ( y < 10 ) {
      // slide to intro anchor
      introState();
    }
  });

  // helper methods (that do stuff)
  function flipIn( element ) {
    element.show().addClass('flipInX animated');
  }

  function setFixed( array ) {
    $.each( array, function (k, v) {
      array[k].css('position', 'fixed');
    });
  }

  function unsetFixed( array ) {
    $.each( array, function (k, v) {
      array[k].css('position', 'relative');
    });
  }

  function introState() {
    $('.line-bg').css('background', 'transparent');
    $('.pag-dots').hide();

    unsetFixed(fixedElements);
  }

  function mainState() {
    $('.line-bg').css('background', 'rgb(198, 207, 212)');
    $('.pag-dots').show();

    setFixed(fixedElements);
  }

  function showNav() {
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
  }
});
