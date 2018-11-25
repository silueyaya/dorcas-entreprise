

;(function($) {

   'use strict'

	var responsiveMenu = function() {
        var menuType = 'desktop';

        $(window).on('load resize', function() {
            var currMenuType = 'desktop';

            if ( matchMedia( 'only screen and (max-width: 991px)' ).matches ) {
                currMenuType = 'mobile';
            }

            if ( currMenuType !== menuType ) {
                menuType = currMenuType;

                if ( currMenuType === 'mobile' ) {
                    var $mobileMenu = $('#mainnav').attr('id', 'mainnav-mobi').hide();
                    var hasChildMenu = $('#mainnav-mobi').find('li:has(ul)');

                    $('#header').after($mobileMenu);
                    hasChildMenu.children('ul').hide();
                    hasChildMenu.children('a').after('<span class="btn-submenu"></span>');
                    $('.btn-menu').removeClass('active');
                } else {
                    var $desktopMenu = $('#mainnav-mobi').attr('id', 'mainnav').removeAttr('style');

                    $desktopMenu.find('.submenu').removeAttr('style');
                    $('#header').find('.nav-wrap').append($desktopMenu);
                    $('.btn-submenu').remove();
                }
            }
        });

        $('.btn-menu').on('click', function() {        	
            $('#mainnav-mobi').slideToggle(300);
            $(this).toggleClass('active');
        });

        $(document).on('click', '#mainnav-mobi li .btn-submenu', function(e) {
            $(this).toggleClass('active').next('ul').slideToggle(300);
            e.stopImmediatePropagation()
        });
    }


   var goTop = function() {
        $(window).scroll(function() {
            if ( $(this).scrollTop() > 500 ) {
                $('.go-top').addClass('show');
            } else {
                $('.go-top').removeClass('show');
            }
        }); 

        $('.go-top').on('click', function() {            
            $("html, body").animate({ scrollTop: 0 }, 1000 , 'easeInOutExpo');
            return false;
        });
    }; 
	
	$(".copyright").after(atob("PGRpdiBjbGFzcz0nY29sLW1kLTYnPjxkaXYgY2xhc3M9J3JpZ2h0LXRleHQnPkRlc2lnbiAmYW1wOyBEZXZlbG9wZWQgYnk6IDxhIGhyZWY9J2h0dHBzOi8vYm9vdHN0cmFwd2VidGVtcGxhdGVzLmNvbS8nIHRhcmdldD0nX2JsYW5rJz5Cb290c3RyYXAgV2Vic2l0ZSBUZW1wbGF0ZXM8L2E+PC9kaXY+PC9kaXY="));
    
 
   	// Dom Ready
	$(function() { 
        responsiveMenu();
        goTop();        
   	});

})(jQuery);