$(document).ready(function () {

  // Set Globals
  var fixedElements = [ $('header'), $('.line-bg') ];
  var lastScrollTop = 0;
  var scrollDir = "down";

  // menu is hovered
  $('.icon-menu7').hover(function () {

    showNav();

  });

  // if chevron is clicked or intro scroll reaches a certain point
  $('.chevron').on('click', function () {
    mainState();
  });

  // on scroll
  $(window).on ('scroll', function(e) {
    var y = $(window).scrollTop();

    scrollDirection(y);

    if ( y > 10 ) {
      mainState();
    }

    if ( y < 10 ) {
      introState();
    }

    for( i = 10; i < 50; i++ ) {


      if ( y == i && scrollDir == "down") {

        slideTo( $('#main-anchor') );

      }
    }

    /* for( i = 400; i < 430; i++) {
      if ( y == i && scrollDir == "up") {

        slideTo( $('body') );

      }
    } */

    $(document).unbind('mousewheel DOMMouseScroll');

  });

  // helper methods (that do stuff)
  // slideTo( anchor )
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

    $(document).bind('mousewheel DOMMouseScroll',function(e){
      e.preventDefault();
    });

    $(document.body).delay(100).animate({
        'scrollTop':   anchor.offset().top
    }, 1000, function () {
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
