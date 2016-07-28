$(window).load(function(){  

  $('html').niceScroll();

  $('a[href^="#"]').on('click', function(e) {
    e.preventDefault();
    var offset = 0;

    hash = this.hash;

    var offset = ( $(window).width() <= 1024 ) ? offset = 160 : offset = 130;

    $('html, body').animate({
      scrollTop: $(hash).position().top - offset
    }, 1000);
  });

  /*
    BXSLIDER
  */
  $('.slider-box').bxSlider({
    mode: 'vertical',
    pager: true,
    auto: true,
    pause: 10000,
    adaptiveHeight: true,
    responsive: true
  });

  /*
    HAMBURGER MENU
  */
  $(window).on('resize', function() {
        var win = $(this);

        if( win.width() > 1024 ) {
          $('#menu').hide();
          $('#navigation').removeClass('mobile');
        } else {
          $('#menu').show();
          $('#navigation').addClass('mobile');
        }
  });

    if( $(window).width() > 1024){
      $('#menu').hide();
      $('#navigation').removeClass('mobile');
    } else {
      $('#menu').show();
      $('#navigation').addClass('mobile');
    }

  $('#menu').on('click', function(){
    $('#navigation').slideToggle('slow', function() {
      $('li a').click(function(){
        $(this).parents('#navigation').slideUp();
      });
    });
  }).on('blur', function(){
    $('#navigation').slideUp();
  });

});