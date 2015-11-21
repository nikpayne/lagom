(function($){
  $(document).ready(function(){

    var $mainContent = $('#main__content'),
    $cat_links = $('.filter__link'),
    $select_links = $('.select__list');

    $cat_links.on('click', function(e) {
      e.preventDefault();
      $el = $(this);
      var value = $el.attr("href");
      $mainContent.animate({opacity: "0.25"});
      // $('.loading__main').toggleClass("active");
      $mainContent.load(value + " #main__content", function(){
        // setTimeout(function() {
        //   $('.loading__main').toggleClass("active");
        // }, 50);
        $mainContent.animate({opacity: "1"});
      });
    });

    $select_links.change(function(){
        $option = $(this);
        var value = $option.prop("value");
        $mainContent.animate({opacity: "0.125"});
        $('.loading__main').toggleClass("active");
        $mainContent.load(value + " #main__content", function(){
            $('.loading__main').toggleClass("active");
            $mainContent.animate({opacity: "1"});
        });
    });

  });
}(jQuery));
