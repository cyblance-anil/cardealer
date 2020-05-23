 (function(jQuery) {
     jQuery(".mCustomScrollbar").mCustomScrollbar({
          //theme:"dark"
        });
    var HeaderHi = jQuery('.main-header').innerHeight();
    jQuery('body').css('margin-top', HeaderHi + 'px');
     
     var mainPanel = jQuery('.mainPanel').innerHeight();
     jQuery('.sellcar-rightpart').css('height', mainPanel + 'px');
     
    setTimeout(function(){
       var HeaderHi = jQuery('.main-header').innerHeight();
       jQuery('body').css('margin-top', HeaderHi + 'px');
    }, 500);
     
    jQuery(window).resize(function(){
        var mainPanel = jQuery('.mainPanel').innerHeight();
        jQuery('.sellcar-rightpart').css('height', mainPanel + 'px');
        
        var HeaderHi = jQuery('.main-header').innerHeight();
        jQuery('body').css('margin-top', HeaderHi + 'px');
    });
    jQuery(".js-range-slider").ionRangeSlider();
    
     jQuery('.video-slider').slick({
        slidesToShow: 1,
        autoplay: false,
        autoplaySpeed: 2000,         
        infinite: true,
        centerMode: true,
        centerPadding: '40%',
        easing:'linear',
        swipe: true,
        dots: false,
        responsive:[{
              breakpoint: 1024,
              settings:{
                slidesToShow: 1,
                swipe: true,
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 1,
                swipe: true,
                centerMode: true,
                centerPadding: '10%',
                arrows: false
              }
            },
            {
              breakpoint: 420,
              settings: {
                slidesToShow: 1,
                swipe: true,
                centerMode: true,
                centerPadding: '15%',
                arrows: false
              }
            },
            {
              breakpoint: 380,
              settings: {
                slidesToShow: 1,
                swipe: true,
                centerMode: true,
                centerPadding:'10%',
                arrows: false
              }
            },
            {
              breakpoint: 320,
              settings: {
                slidesToShow: 1,
                swipe: true,
                centerMode: true,
                centerPadding:'10%',
                arrows: false
              }
            }
        ]
    });
     
    jQuery('.product-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,         
        infinite: true,
        centerPadding:'50px',
        easing:'linear',
        swipe: false,
        responsive: [{
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                swipe: true,
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 1,
                swipe: true,
                centerMode: true,
                centerPadding:'50px'
              }
            },
            {
              breakpoint: 420,
              settings: {
                slidesToShow: 1,
                swipe: true,
                centerMode: true,
                centerPadding:'50px'
              }
            },
            {
              breakpoint: 380,
              settings: {
                slidesToShow: 1,
                swipe: true,
                centerMode: true,
                centerPadding:'50px'
              }
            },
            {
              breakpoint: 320,
              settings: {
                slidesToShow: 1,
                swipe: true,
                centerMode: true,
                centerPadding:'50px'
              }
            }
        ]

    });
     
     
    jQuery('.testimonial-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,         
        infinite: true,
        easing:'linear',
    });

   /*============================================
        02: Sidebar accoroding
    ==============================================*/

     
    /*============================================
        03: homepage slider
    ==============================================*/

    jQuery(window).on('load', function(){
        //banner slider
        jQuery(".bannerSlider").slick({
            dots: false, 
            autoplay: false, 
            infinite: true, 
            dots: true,
            slidesToShow: 1,
            slideswToScroll: 1,
            arrows: true
        });
        
        function removePreloader() {
            var preLoader = $('.preLoader');
            preLoader.fadeOut();
        }
        setTimeout(removePreloader, 250);
    });
     
    /*============================================
        04: Detail page slider
    ==============================================*/ 
     jQuery(window).on('load', function(){   
        var $status = $('.pagingInfo');
        var $slickElement = $('.detail-page-slider');

        $slickElement.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
          //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
          var i = (currentSlide ? currentSlide : 0) + 1;
          $status.text(i + '/' + slick.slideCount);
        }); 
         
        $slickElement.slick({           
            autoplay: false, 
            infinite: true, 
            dots: false,
            slidesToShow: 1,
            slideswToScroll: 1,
        });        
        function removePreloader() {
            var preLoader = $('.preLoader');
            preLoader.fadeOut();
        }
        setTimeout(removePreloader, 250);
    });
     
    /*============================================
        05: Sellcar page
    ==============================================*/ 
    jQuery(function() {
        //jQuery('#datetimepicker1').datetimepicker({
			//format: 'DD-MM-YYYY LT'
		//});
    });
     
    /*============================================
        05: Faq page
    ==============================================*/
    jQuery(".faq_main .question").click(function() {
        jQuery('.faq_main .question').removeClass('closeicon');
        if (jQuery('.answer').is(":visible")) {
            jQuery('.answer').slideUp(300);
  			jQuery(this).find('.show_img').show();
  			jQuery(this).find('.show_img').show();
            jQuery(this).removeClass('close');
        }
        if (jQuery(this).next('.answer').is(":visible")) {
            jQuery(this).next('.answer').slideUp(300);
            jQuery(this).removeClass('closeicon');
            jQuery('.show_img').show();
        } else {
            jQuery(this).next('.answer').slideDown(300);
            jQuery(this).addClass('closeicon');
            jQuery('.show_img').show();
            jQuery(this).find('.show_img').hide();
        }

    });
     
    /*============================================
        06: MOBILE MENU
    ==============================================*/ 
     
     
     
})(jQuery);

jQuery(".Mobile_nav").click(function() {
        if (jQuery(".HeaderMenu").is(":hidden")) {
            jQuery(".HeaderMenu").slideDown();           
            jQuery('.Mobile_nav').addClass('close_menu');    
            jQuery('body').addClass('overlay');
        } else {  
            jQuery('.HeaderMenu').slideUp();           
            jQuery('.Mobile_nav').removeClass('close_menu');
            jQuery('body').removeClass('overlay');
        }
    });

    jQuery('.HeaderMenu li').on('click', function (e) { 
         if(jQuery('.megamenu-dropdown, .header-menu .dropdown').is(':hidden')){	
             jQuery(this).children('.megamenu-dropdown, .header-menu .dropdown').stop().slideToggle();
         }
         else{   
            jQuery(this).children('.megamenu-dropdown, .header-menu .dropdown').stop().slideUp();
        }
    });
    jQuery('.megamenu-dropdown li, .header-menu .dropdown li').on('click', function (e) {
        e.stopPropagation();
    });
    
    
    jQuery(window).resize(function() {
        var HeaderHi = jQuery('#header').innerHeight();
        jQuery('body').css('margin-top', HeaderHi + 'px');
        jQuery('.Mobile_nav').removeClass('close_menu');
        jQuery('.HeaderMenu').hide();
    });

