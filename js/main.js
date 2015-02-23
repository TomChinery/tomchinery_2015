$(document).ready(function () {

  var fixedElements = [ $('header'), $('.line-bg') ];
  var lastScrollTop = 0;
  var scrollDir = "down";
  var imgHeight = 0;
  var navHeight = "350px";
  var navHeightBigger = "370px";

  // logic
  $('.icon-menu7').hover(function () {
    showNav();
  });

  $('.icon-menu7').click(function () {
    showNav();
  });

  $('.icon-cross2').click(function () {
    closeNav();
  });

  $('nav a').click(function () {
    closeNav();
  });

  $('.chevron').on('click', function () {
    mainState();
  });

  $(window).on('scroll', function(e) {
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

  $(".hero img").load(function(){
    getImageSizes();
  });

  $('section.intro').height( $(window).height() );

  $(window).resize(function() {
    getImageSizes();
    $('section.intro').height( $(window).height() );
  });

  if ( $(window).width() <= 768 ) {
    var winHeight = $(window).height() - ( 12 / 100 * $(window).height() );
    navHeight = winHeight + "px";
    navHeightBigger = ( winHeight + 20 ) + "px";
  }

  if ( $(window).height() <= 580  && $(window).width() <= 768 ) {
    // style things smaller - Yuck JS styling elements *shivers*
    $('nav h2').css('padding-top', '10px' );
    $('nav h2').css('padding-bottom', '10px');
    $('nav .color-nav:nth-child(1) h2').css('padding-bottom', '27px');
    $('nav a').css('padding', "5px 10px");
    $('nav a').css('font-size', '12px');

    var winHeight = $(window).height();
    navHeight = winHeight + "px";
    navHeightBigger = ( winHeight + 20 ) + "px";
  }

  // Helpers
  function getImageSizes() {
    $(".hero img").each(function() {
        var $this = $(this);
        $('.hero .overlay').height($this.height());
    });
  }

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
    element.removeClass('flipOutX');
    element.show().addClass('flipInX animated');
  }

  function flipOut( element ) {
    element.removeClass('flipInX');
    element.addClass('flipOutX');
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
    $('nav').css('height', navHeightBigger);

    setTimeout(function() {

      $('nav').css('height', navHeight);

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

  function closeNav() {
    $('nav').css('height', navHeightBigger);

    setTimeout(function() {

      flipOut( $('nav .color-nav:nth-child(4)') );

      setTimeout(function() {
        flipOut( $('nav .color-nav:nth-child(3)') );
      }, 125);

      setTimeout(function() {
        flipOut( $('nav .color-nav:nth-child(2)') );
      }, 250);

      setTimeout(function() {
        flipOut( $('nav .color-nav:nth-child(1)') );
      }, 375);

    }, 500);

    setTimeout(function () {
      $('nav').css('height', '0px');
      $('nav .color-nav').hide();
    }, 1400);

  }

});
