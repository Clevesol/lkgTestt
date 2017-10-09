   $(document).ready(function(){
        $('.slider').slider();

         $('ul.nav li.dropdown').hover(function () {
        $(this).find('.mega-dropdown-menu').stop(true, true).delay(200).fadeIn(200);
        $('.darkness').stop(true, true).fadeIn();
    }, function () {
        $(this).find('.mega-dropdown-menu').stop(true, true).delay(200).fadeOut(200);
         $('.darkness').stop(true, true).delay(200).fadeOut();
    });
    });


    $('#myCarousel').carousel();
    var winWidth = $(window).innerWidth();
    $(window).resize(function () {

        if ($(window).innerWidth() < winWidth) {
            $('.carousel-inner>.item>img').css({
                'min-width': winWidth, 'width': winWidth
            });
        }
        else {
            winWidth = $(window).innerWidth();
            $('.carousel-inner>.item>img').css({
                'min-width': '', 'width': ''
            });
        }
    });

    
