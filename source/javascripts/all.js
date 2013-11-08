//= require_tree .

$(document).ready(function()

{
  windowHeight = $(window).height();
  $('.top').css('min-height', windowHeight);
});

$(document).ready(function() {

    /* Every time the window is scrolled ... */
    $(window).scroll( function(){

        /* Check the location of each desired element */
        $('.samples').each( function(i){

            var bottom_of_object = $(this).position().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();

            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){

                $(this).animate({
                  'opacity':'1',
                  'margin-top': '0'
                  }, 600, 'easeOutQuart');


            }

        });

    });

});