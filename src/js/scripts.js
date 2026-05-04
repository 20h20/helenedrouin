/*include /libs/jquery.core.js*/
/*include /libs/slick.js*/
/*include /libs/jquery.fancybox.js*/

(function($) { 
	
	var Master = {
		onready : function(){
			/////////////////// SLIDER PARTNERS ///////////////////
			$('.partners-list').slick({
				arrows : false,
				dots: true,
				infinite: true,
				slidesToShow: 6,
				slidesToScroll: 6,
				autoplaySpeed: 0,
				cssEase: 'linear',  
				responsive: [
					{
						breakpoint: 991,
						settings: {
							slidesToShow: 5,
							slidesToScroll: 2
						}
					},
					{
						breakpoint: 767,
						settings: {
							slidesToShow: 4,
							slidesToScroll: 2
						}
					},
					{
						breakpoint: 500,
						settings: {
							slidesToShow: 3,
							slidesToScroll: 1
						}
					}
				]
			});


			/////////////////// LIGHTBOX ///////////////////
			$(".lightbox").fancybox({
				openEffect:'elastic',
				openSpeed:500,
				closeEffect:'fade',
				closeSpeed:500,
			});


			/////////////////// Ouverture d'une modale lors de la soumission d'un formulaire ///////////////////
			document.addEventListener('wpcf7mailsent', function(event) {
				event.preventDefault();

				var modal = document.createElement('div');
				modal.className = 'cbo-cf7modale';
				modal.innerHTML =
					'<div class="cf7modale-inner">' +
						'<i class="inner-icon icon icon--success"></i>' +
						'<p class="inner-title cbo-title-3">Votre message a bien été envoyé !</p>' +
						'<button type="button" class="inner-button cbo-button" aria-label="Fermer la fenêtre">Fermer la fenêtre</button>' +
					'</div>';
				document.body.appendChild(modal);

				var closeButton = modal.querySelector('.inner-button');
				closeButton.addEventListener('click', function() {
					modal.remove();
				});
			}, false);

			/////////////////// Ouverture d'une modale lors d'un échec d'envoi CF7 ///////////////////
			document.addEventListener('wpcf7mailfailed', function(event) {
				event.preventDefault();
				var modal = document.createElement('div');
				modal.className = 'cbo-cf7modale cbo-cf7modale--error';
				modal.innerHTML =
					'<div class="cf7modale-inner">' +
						'<i class="inner-icon icon icon--warning"></i>' +
						'<p class="inner-title cbo-title-3">Une erreur s\'est produite lors de l\'envoi de votre message. Veuillez essayer à nouveau plus tard.</p>' +
						'<button type="button" class="inner-button cbo-button" aria-label="Fermer la fenêtre">Fermer la fenêtre</button>' +
					'</div>';
				document.body.appendChild(modal);
				var closeButton = modal.querySelector('.inner-button');
				closeButton.addEventListener('click', function() {
					modal.remove();
				});
			}, false);


			/////////////////// ADD CHECK TO ACCEPTANCE ///////////////////
			var cbo_forms = {
				init: function () {
				this.bind_checked();
				this.check_checked();
				},
				
				bind_checked: function () {
				$(".cbo-form")
					.find('input[type="radio"], input[type="checkbox"]')
					.on("change", function () {
					cbo_forms.check_checked();
					});
				},
				
				check_checked: function () {
				$(".cbo-form")
					.find('input[type="radio"], input[type="checkbox"]')
					.each(function () {
					if ($(this).is(":checked")) {
						$(this).closest(".form-field").find(".field-inner").addClass("checked");
					} else {
						$(this).closest(".form-field").find(".field-inner").removeClass("checked");
					}
					});
				},
			};
			cbo_forms.init();


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


			/////////////////// SMARTPHONE NAVIGATION ///////////////////
			$('.burger-menu').on('click', function(){
				$('.header-nav').toggleClass('nav--open');
				$('.burger-menu').toggleClass('burger-menu-cross');
				$('body').toggleClass('menu--open');
				$('html').toggleClass('html--hidden');
			});


			/////////////////// Burger menu - Accessibilité ///////////////////
			var burger = document.querySelector('.burger-menu');
			var nav = document.querySelector('.header-nav');
			if (burger && nav) {
				burger.addEventListener('click', function () {
					var expanded = burger.getAttribute('aria-expanded') === 'true';
					burger.setAttribute('aria-expanded', !expanded);
					burger.classList.toggle('is-active');
					nav.classList.toggle('is-open');
				});
			}


			//////////////// STICKY ////////////////
			$(window).scroll(function(){
				if($(window).scrollTop()>80){
					$("header").addClass('header-scroll');
				}else{
					$("header").removeClass('header-scroll');
				}
			})
			.scroll();			
		},

		onload : function(){

		},

		onresize : function(){

		},

		onscroll : function(){
			//////////////// HERO PARALLAX ////////////////
			if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
				var hero = document.querySelector('.cbo-hero');
				if (hero) {
					var heroImg = hero.querySelector('.inner-picture img');
					var scrollY = window.scrollY || window.pageYOffset;
					if (heroImg && scrollY <= hero.offsetHeight) {
						heroImg.style.transform = 'translateY(' + (-scrollY * 0.3) + 'px)';
					}
				}
			}
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