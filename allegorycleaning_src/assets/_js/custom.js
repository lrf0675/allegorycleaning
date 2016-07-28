/*
  SKROLLR MENU
*/
setTimeout(function() {
  var s = skrollr.init({
    forceHeight: false
  });

  skrollr.menu.init(s, {
     // easing: 'sqrt',
     // animate: true,
     // scale: 2,
    //  duration: function(currentTop, targetTop) {
    //     return 1000;
    //     // return Math.abs(currentTop - targetTop) * 100;
    // }
  });
});

var link = document.querySelector('a');
skrollr.menu.click(link);

/*
  BXSLIDER
*/
$('.slider-box').bxSlider({
  mode: 'vertical',
  pager: true,
  auto: true,
  pause: 10000
});
