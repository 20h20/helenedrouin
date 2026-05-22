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
			var elementsToShow = document.querySelectorAll('.slide-up, .slide-right, .slide-left, .scale-up, .scale-down');
			if ('IntersectionObserver' in window && elementsToShow.length) {
				var animObserver = new IntersectionObserver(function(entries) {
					entries.forEach(function(entry) {
						entry.target.classList.toggle('anim-scroll', entry.isIntersecting);
					});
				}, { threshold: 0.15 });
				elementsToShow.forEach(function(el) { animObserver.observe(el); });
			} else {
				elementsToShow.forEach(function(el) { el.classList.add('anim-scroll'); });
			}


			//////////////// STICKY + HERO PARALLAX (listener passif unifié) ////////////////
			var headerEl = document.querySelector('header');
			var scrollTicking = false;
			var prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
			var heroEl = document.querySelector('.cbo-hero');
			var heroImgEl = heroEl ? heroEl.querySelector('.inner-picture img') : null;

			function onScrollFrame() {
				var scrollY = window.scrollY || window.pageYOffset;
				if (headerEl) headerEl.classList.toggle('header-scroll', scrollY > 80);
				if (!prefersReducedMotion && heroImgEl && scrollY <= heroEl.offsetHeight) {
					heroImgEl.style.transform = 'translateY(' + (-scrollY * 0.3) + 'px)';
				}
				scrollTicking = false;
			}
			window.addEventListener('scroll', function() {
				if (!scrollTicking) {
					window.requestAnimationFrame(onScrollFrame);
					scrollTicking = true;
				}
			}, { passive: true });
			onScrollFrame();


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


		},

		onload : function(){

		},

		onresize : function(){

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

})(jQuery);