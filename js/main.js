$(document).ready(function () {

  var fixedElements = [ $('header'), $('.line-bg') ];
  var lastScrollTop = 0;
  var scrollDir = "down";

  $('.icon-menu7').hover(function () {
    showNav();
  });

  $('.chevron').on('click', function () {
    mainState();
  });

  $(window).on ('scroll', function(e) {
    var y = $(this).scrollTop();

    scrollDirection(y);

    if ( y > 10 ) {
      mainState();
    }

    if ( y < 10 ) {
      introState();
    }

    for( i = 0; i < 300; i++ ) {


      if ( y == i && scrollDir == "down") {

        slideTo( $('#main-anchor') );

        $(window).bind("mousewheel", function() {
          $("html, body").stop(); // Hammertime! :D
        });
      }

    }
  });

  // helper methods (that do stuff)
  function scrollDirection( y ) {
    var st = y;

    if (st > lastScrollTop){
      scrollDir = "down";
    } else {
      scrollDir = "up";
    }

    lastScrollTop = st;
  }

  function slideTo( anchor ) {
    $(document.body).animate({
        'scrollTop':   anchor.offset().top
    }, 800, function () {
      console.log('animated bitchhead');
    });

  }

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
