(function($) {
  $(document).ready(function(){
    $('.btn-close').fadeOut(150);
    var open = false;
    $('.nav__icons svg').on('click',function(){
      console.log('clicking');
      if(open == false){
        $('.nav__overlay, .btn-close').fadeIn(150);
        $('.btn-menu, .array').fadeOut(150);
        open = true;
      } else {
        $('.nav__overlay, .btn-close').fadeOut(150)
        $('.btn-menu').fadeIn(150);
        open = false;
      }
    });

    function hideOverlay() {
      $('.nav__overlay, .btn-close').fadeOut(150);
      $('.btn-menu').fadeIn(150);
      open = false;
    }

    $('.nav__overlay').on('mouseup', function(){
      hideOverlay();
    });

    $('.nav__wrap').on('click', function(){
      hideOverlay();
    });

    $('.nav__row').on('click', function(e){
      e.preventDefault();
    });

    $('.nav__wrap').on('mouseup', function(){
      return false;
    });
  });
}(jQuery));

(function($) {
  $(window).scroll(function(event){
    didScroll = true;
  });
  setInterval(function() {
    if (didScroll) {
      hasScrolled();
      didScroll = false;
    }
  }, 250);

  var prevScroll = 0;

  function hasScrolled() {
    var currScroll = $(this).scrollTop();

    if (currScroll > 54 && currScroll > prevScroll + 30) {
      $('.nav__header').addClass('minimalist-mode');
    } else if(currScroll < 54 || currScroll < prevScroll - 60) {
      $('.nav__header').removeClass('minimalist-mode');
    }
    prevScroll = currScroll;
  }
}(jQuery));
