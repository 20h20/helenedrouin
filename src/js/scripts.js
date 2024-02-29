/*include /libs/jquery.core.js*/
/*include /libs/jquery.fancybox.js*/
/*include /libs/slick.js*/
/*include /libs/move.js*/

var Master = {
    onready : function(){
        cg_Move.init_wavy();
    },
    onscroll : function(){
        cg_Move.scroll_slides();
    },
};

$(window).on( 'scroll', function(){
    Master.onscroll();
});


(function($) { 
	var Master = {
		onready : function(){

			//////////////// STICKY ////////////////
			$(window).scroll(function(){
				if($(window).scrollTop()>80){
					$("header").addClass('header-scroll');
				}else{
					$("header").removeClass('header-scroll');
				}
			})
			.scroll();

			/////////////////// SMARTPHONE NAVIGATION ///////////////////
			$('header .burger-menu').on('click', function(){
				$('.header-nav').toggleClass('nav--open');
				$('.burger-menu').toggleClass('burger-menu-cross');
				$('body').toggleClass('body--menuopen');
				$('.menu-overlay').toggleClass('overlay--open');
			});

			/////////////////// REMOVE OVERLAY OPEN ON CLICK ON IT ///////////////////
			$('.menu-overlay').on('click', function(){
				$('.menu-overlay').removeClass('overlay--open');
				$('.header-nav').removeClass('nav--open');
				$('body').removeClass('body--menuopen');
				$('.burger-menu').removeClass('burger-menu-cross');
			});


			/////////////////// SLIDER LOGOS ///////////////////
			$('.cbo-hero .hero-picturelist').slick({
				arrows : false,
				dots: false,
				infinite: true,
				slidesToShow: 1,
				slidesToScroll: 1,
				speed: 1000,
				autoplaySpeed: 5000,
				autoplay: true,
				fade:true,
			});

			/////////////////// LIGHTBOX ///////////////////
			$(".lightbox").fancybox({
				openEffect:'elastic',
				openSpeed:500,
				closeEffect:'fade',
				closeSpeed:500,
			});

			/////////////////// SLIDER TESTIMONIALS ///////////////////
			$('.cbo-testimonialslist .testimonialslist-list').slick({
				arrows : false,
				dots: true,
				adaptiveHeight: true,
				slidesToShow: 1,
				slidesToScroll: 1,
				speed: 1000,
			});

			/////////////////// HEADER - LANGUAGES SWITCH ///////////////////
			$('header .languages-switcher').on('click', function(){
				$('.languages-switcher').toggleClass('active');
			});

			//////////////// SCROLL ANIMATIONS ////////////////
			var scroll = window.requestAnimationFrame || function(callback){ window.setTimeout(callback, 1000/60)};
			var elementsToShow = document.querySelectorAll('.slide-up, .slide-up, .slide-right, .slide-left, .scale-up, .scale-down'); 

			function loop() {
				Array.prototype.forEach.call(elementsToShow, function(element){
					if (isElementInViewport(element)) {
						element.classList.add('anim-scroll');
					} else {
						element.classList.remove('anim-scroll');
					}
				});
				scroll(loop);
			}	

			loop();
			function isElementInViewport(el) {
				if (typeof jQuery === "function" && el instanceof jQuery) {
					el = el[0];
				}
				var rect = el.getBoundingClientRect();
				return (
					(rect.top <= 0&& rect.bottom >= 0)||(rect.bottom >= (window.innerHeight || document.documentElement.clientHeight) && rect.top <= (window.innerHeight || document.documentElement.clientHeight))||(rect.top >= 0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight))
				);
			}
		},
		
		onload : function(){

		},

		onresize : function(){

		},

		onscroll : function(){

		},
	
	};

	$(document).ready( function(){
		Master.onready();
		
	});

	$(window).load( function(){
		Master.onload();
	});

	$(window).resize( function(){
		Master.onresize();
	});

	$(window).on('scroll', function(){
		Master.onscroll();
	});

})(jQuery);