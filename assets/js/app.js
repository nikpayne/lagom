!function(t){t(document).ready(function(){var n=t("#main__content"),i=t(".filter__link"),a=t(".select__list");t(".filter__button .btn-sort").on("click",function(){t(".filter__list").fadeToggle(150)}),i.on("click",function(i){i.preventDefault(),$el=t(this);var a=$el.attr("href");n.animate({opacity:"0.25"}),n.load(a+" #main__content",function(){n.animate({opacity:"1"},"ease")}),t(".filter__list").fadeOut(150)}),a.change(function(){$option=t(this);var i=$option.prop("value");n.animate({opacity:"0.125"}),t(".loading__main").toggleClass("active"),n.load(i+" #main__content",function(){t(".loading__main").toggleClass("active"),n.animate({opacity:"show"})})})})}(jQuery);
var test;
