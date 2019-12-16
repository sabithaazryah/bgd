/************************************************** AOS SCROLL ANIMATION **********************************/
AOS.init();
window.addEventListener('load', AOS.refresh)

jQuery(function($) {'use strict',
	new WOW().init();
});


//-- header fixed JavaScript -->
/**************************************************Header**********************************/

if ($(window).width() >= 992) {
  window.onscroll = function() {
    myFunction();
  };
  var header = document.getElementById("Header");
  var sticky = 300;

  function myFunction() {
    if (window.pageYOffset >= sticky) {
      header.classList.add("sticky");
    } else {
      header.classList.remove("sticky");
    }
  }

	$(document).ready(function() {
	        var headerHeight = $('#Header').height() + 'px';
	        $('.inner-page').css('margin-top', headerHeight);
	        $('#main-slider').css('margin-top', headerHeight);
	    });
}

/**************************************************Header_END**********************************/

//< !------scrollup---- - >
$(document).ready(function() {

  $(window).scroll(function() {

    if ($(this).scrollTop() > 1500) {

      $('.scrollup').fadeIn();
    } else {
      $('.scrollup').fadeOut();
    }
  });
  $('.scrollup').click(function() {
    $("html, body").animate({
      scrollTop: 0
    }, 1000);
    return false;
  });
});


$(".scroll_down").click(function() {
    $('html,body').animate({
        scrollTop: $("#welcome_sec").offset().top},
        'slow');
});


$(".carousel").swipe({
  swipe: function(event, direction, distance, duration, fingerCount, fingerData) {

    if (direction == 'left')
      $(this).carousel('next');
    if (direction == 'right')
      $(this).carousel('prev');
  },
  allowPageScroll: "vertical"
});



/*************************SLICK******************************/

$(document).ready(function() {

  $(".features_slide").slick({
    infinite: true,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
    dots: false,
    pauseOnHover:true,
    slidesToShow: 5,
    slidesToScroll: 1,
    prevArrow: '<button class="slide-prev">Previous</button>',
    nextArrow: '<button class="slide-nxt">Next</button>',
    responsive: [{
      breakpoint: 992,
      settings: {
        slidesToShow: 5
      }
    }, {
      breakpoint: 768,
      settings: {
        slidesToShow: 4
      }
    }, {
      breakpoint: 576,
      settings: {
        slidesToShow: 2
      }
    }]
  });

	$(".our_works_slide").slick({
		infinite: true,
		vertical: false,
		autoplay: true,
		arrows: false,
		dots: true,
		pauseOnHover:true,
		slidesToShow: 2,
    prevArrow: '<button class="slide-prev">Prev</button>',
    nextArrow: '<button class="slide-nxt">Next</button>',
		responsive: [{
			breakpoint: 576,
			settings: {
				slidesToShow: 1
			}
		}]
	});

	$(".process_slide").slick({
		infinite: true,
		vertical: false,
		autoplay: true,
		arrows: false,
		dots: false,
		pauseOnHover:true,
		slidesToShow: 5,
		slidesToScroll: 1,
    prevArrow: '<button class="slide-prev">Prev</button>',
    nextArrow: '<button class="slide-nxt">Next</button>',
		responsive: [{
			breakpoint: 768,
			settings: {
				slidesToShow: 4
			}
		},{
			breakpoint: 576,
			settings: {
				slidesToShow: 3
			}
		},{
			breakpoint: 468,
			settings: {
				slidesToShow: 2
			}
		}]
	});

	$(".expertise_slide").slick({
		infinite: true,
		vertical: false,
		autoplay: true,
		arrows: false,
		dots: false,
		pauseOnHover:true,
		slidesToShow: 4,
		slidesToScroll: 1,
    prevArrow: '<button class="slide-prev">Prev</button>',
    nextArrow: '<button class="slide-nxt">Next</button>',
		responsive: [{
			breakpoint: 576,
			settings: {
				slidesToShow: 3
			}
		},{
			breakpoint: 468,
			settings: {
				slidesToShow: 2
			}
		}]
	});

	$(".test_slide").slick({
		infinite: true,
		vertical: false,
		autoplay: true,
		fade: true,
		speed: 2000,
		cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
		autoplaySpeed: 2000,
		arrows: false,
		dots: true,
		pauseOnHover:true,
		slidesToShow: 1,
		slidesToScroll: 1,
		prevArrow: '<button class="slide-prev">Prev</button>',
		nextArrow: '<button class="slide-nxt">Next</button>',
	});


});

/****************************SCROLL_ANIMATION*********************************/
$(window).scroll(function(){

    var w = $(window).scrollTop();
    var d = "translateX(" + -w*.15 + "px)";
    var a = "translateX(" + w*.25 + "px)";
		var y = "translateY(" + -w*.20 + "px)";

    $('.floating_title').css({
      transform : d
    });
    $('.floating_title::after').css({
      transform : a
    });
    $('.float_img').css({
      transform : y
    });

});


/***************** ISOTOPE_GALLERY ******************************/
$(window).ready(function(){
	var $container = $('.portfolioContainer');
	$container.isotope({
			filter: '*',
			animationOptions: {
					duration: 750,
					easing: 'linear',
					queue: false
			}
	});

	$('.portfolioFilter a').click(function(){
			$('.portfolioFilter .current').removeClass('current');
			$(this).addClass('current');

			var selector = $(this).attr('data-filter');
			$container.isotope({
					filter: selector,
					animationOptions: {
							duration: 750,
							easing: 'linear',
							queue: false
					}
			 });
			 return false;
	});
});
