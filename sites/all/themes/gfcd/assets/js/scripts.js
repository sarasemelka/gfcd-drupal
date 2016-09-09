(function($){

  $(function(){

    labelFade = function() {

      var emailField = $('.form-newsletter #email');
      var emailLabel = $('.form-newsletter label');

      $(emailField).bind('focus', function(){
        emailLabel.fadeOut();
      });

      $(emailField).bind('blur', function(){
        var emailFieldVal = $(this).val();
        if(emailFieldVal == '') {
          emailLabel.fadeIn();
        }
      });

    }

    scrollTo = function() {

      $('a[href^="#"]').bind('click', function(event) {
        var target = $( $(this).attr('href') );

        if( target.length ) {
          event.preventDefault();
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 500);
        }
      });

    }

    menuToggle = function() {

      $('.mobile-menu-btn').click(function(){
        $('.main-nav ul, .admin-nav').toggleClass('show');
        $(this).toggleClass('active');
        return false;
      });

    }

  	newsletterValidation = function() {

    	$('.form-newsletter').submit(function(e) {
    		var formEmail = $('#email');

    		$(formEmail).each(function() {
  		    iValue = $(this).val();
      		if(iValue == '') {
            $(this).parent().addClass('error');
        		e.preventDefault();
      		}
    		});
    	});

    	$('.form-newsletter input[type="email"]').focus(function() {
    	   if ($(this).hasClass('error')) {
    	       $(this).keyup(function() {
    	           $(this).removeClass('error');
    	       });
    	   }
    	});
    }

    iconZoomIn = function() {

      $(window).scroll(function(e){
        var windowPos = $(window).scrollTop();
        var windowHeight = $(window).height();
        var homeInfoBlocks = $('.home-info-blocks');
        var homeMainPos = $(homeInfoBlocks).offset().top;

        if(windowPos = homeMainPos) {
          e.preventDefault();
          $(homeInfoBlocks).addClass('animate');
        }

      });

    }

    eventSlider = function() {

      $(".event-slider").owlCarousel({

        autoPlay: 3000,
        itemsCustom : [
        [0, 1],
        [400, 2],
        [700, 3],
        ]
      });

    }

    fitVids = function() {

      $('.event-video').fitVids();

    }

    if($('.front').length) {
      iconZoomIn();
    }

    labelFade();
    scrollTo();
    menuToggle();
    newsletterValidation();
    eventSlider();
    fitVids();

  });

})(jQuery);
