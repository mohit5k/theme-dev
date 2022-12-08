/*
Template Name: Woof!
Author: webRedox
Author URI: themeforest/user/webredox
Version: 1.0
*/
jQuery(function(jQuery) {
	
	   "use strict";
		
		// header functions +  menu  ------------------
		var cm = jQuery(".nav-button");
		var nh = jQuery(".nav-inner");
		var no = jQuery(".nav-overlay");
		function showmenu() {
			setTimeout(function() {
				nh.addClass("vismen");
			}, 120);
			cm.addClass("cmenu");
			nh.removeClass("isDown");
			no.addClass("visover");
		}
		function hidemenu() {
			nh.addClass("isDown");
			cm.removeClass("cmenu");
			nh.removeClass("vismen");
			no.removeClass("visover");
		}
		cm.on("click", function() {
			if (nh.hasClass("isDown")) {
				showmenu();
			}
			else {
			hidemenu();
			}
			return false;
		});
		no.on("click", function() {
			hidemenu();
			return false;
		});
		
		jQuery("ul.navbar-nav .menu-item-has-children ul").removeClass("sub-menu");
		//jQuery("#menu").menu();
			
		jQuery('#menu .menu-item-has-children i').on('click',function(){
		jQuery(this).parent('#menu .menu-item-has-children').children('.sub-menu').slideToggle();
		});

		jQuery('#menu .nav-icon').on('click',function(){
			jQuery('.sub-menu').slideUp();
		});	
			
			jQuery("ul.navbar-nav li").each(function(i){
			   jQuery(this).addClass('nav-item');
			});
			
			jQuery("ul.navbar-nav li a").each(function(i){
			   jQuery(this).addClass('nav-link');
			});		
			
			jQuery("ul.navbar-nav li.menu-item-has-children").each(function(i){
			   jQuery(this).addClass('dropdown');
			});	
			
			jQuery("ul.navbar-nav li.menu-item-has-children a").each(function(i){
			   jQuery(this).addClass('dropdown-toggle');
			});	
			
			jQuery("ul.navbar-nav .menu-item-has-children ul").each(function(i){
			   jQuery(this).addClass('dropdown-menu');
			   jQuery(this).removeClass('sub-menu');
			});	
			
			jQuery("ul.navbar-nav li.menu-item-has-children ul li a").each(function(i){
			   jQuery(this).addClass('dropdown-item');
			   jQuery(this).removeClass('nav-link');
			});	

			jQuery("ul.navbar-nav li.current-menu-item").each(function(i){
			   jQuery(this).addClass('active');
			});
	 
		//----------------------------------- Document ready -----------------------------------//

		jQuery(document).ready(function() {	

			//Effects on scroll
			
			AOS.init({
				disable: 'mobile',
				duration: 1500,
				once: true
			});

			//Scrolling feature 

			jQuery('.page-scroll a').on('click', function(event) {
				var jQueryanchor = jQuery(this);
				jQuery('html, body').stop().animate({
					scrollTop: jQuery(jQueryanchor.attr('href')).offset().top
				}, 1500, 'easeInOutExpo');
				event.preventDefault();
			});

			//Dropdown on hover
						
			if (jQuery(window).width() >= 1024) {
			jQuery(".navbar .dropdown").on({
				mouseenter: function () {
				jQuery(this).find('.dropdown-menu').first().stop(true, true).delay(50).slideDown();

				},  
				mouseleave: function () {
				jQuery(this).find('.dropdown-menu').first().stop(true, true).delay(200).slideUp();
				}
			});
			}

			//	Back Top Link

			var offset = 200;
			var duration = 500;
			jQuery(window).scroll(function() {
				if (jQuery(this).scrollTop() > offset) {
					jQuery('.back-to-top').fadeIn(400);
				} else {
					jQuery('.back-to-top').fadeOut(400);
				}
			});

			//Owl-carousels
			
			jQuery("#owl-services2").owlCarousel({
				nav: true,
				navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
				dots: true,
				margin: 10,
				loop: false,
				autoplay: false,
				navRewind: true,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1,
					},
					600: {
						items: 1,
					},
					991: {
						items: 2,
					},

				}
			});

			jQuery('#owl-featured').owlCarousel({
				loop: true,
				margin: 0,
				autoplay: true,
				nav: true,
				navText: [" <i class='fas fa-chevron-left'></i>", " <i class='fas fa-chevron-right'></i>"],
				autoplayHoverPause: true,
				dots: true,

				responsive: {
					0: {
						items: 1,
						stagePadding: 0
					},
					767: {
						items: 2,
						stagePadding: 60
					},
					1200: {
						items: 4,
						stagePadding: 120
					},
				}
			})
			jQuery(".owl-services").owlCarousel({
				nav: true,
				navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
				dots: true,
				loop: false,
				autoplay: false,
				navRewind: true,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1,
					},
					600: {
						items: 1,
					},
					991: {
						items: 2,
					},
					1200: {
						items: 4,
					}
				}
			});

			jQuery('#owl-adopt-single').owlCarousel({
				loop: true,
				margin: 0,
				items: 1,
				autoplay: true,
				nav: true,
				navText: [" <i class='fas fa-chevron-left'></i>", " <i class='fas fa-chevron-right'></i>"],
				autoplayHoverPause: true,
				dots: true,
				
			});
			jQuery('.owl-gallery').owlCarousel({
				loop: true,
				margin: 0,
				autoplay: true,
				nav: true,
				navText: [" <i class='fas fa-chevron-left'></i>", " <i class='fas fa-chevron-right'></i>"],
				dots: true,
				responsive: {
					0: {
						items: 1,
						stagePadding: 20
					},
					767: {
						items: 2,
						stagePadding: 60
					},
					1200: {
						items: 4,
						stagePadding: 120
					},
				}
			});

			jQuery('.owl-testimonial').owlCarousel({
				loop: true,
				margin: 0,
				autoplay: true,
				nav: true,
				navText: [" <i class='fas fa-chevron-left'></i>", " <i class='fas fa-chevron-right'></i>"],
				autoplayHoverPause: true,
				dots: true,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1,
					},
					991: {
						items: 2,
					},

				}
			});
			jQuery(".owl-team1,.owl-team2,.owl-team3").owlCarousel({
				nav: true,
				navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
				dots: true,
				margin: 30,
				loop: true,
				autoplay: false,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1,
					},
					600: {
						items: 2,
					},
					1200: {
						items: 4,
					},

				}
			});

			 // Magnific Popup

			jQuery('#owl-gallery,#owl-adopt-single,#owl-featured,#gallery-isotope').magnificPopup({
				delegate: 'a', // child items selector, by clicking on it popup will open
				type: 'image',
				gallery: {
					enabled: true
				},
				titleSrc: 'title',
				titleSrc: function(item) {
					return '<a href="' + item.el.attr('href') + '">' + item.el.attr('title') + '</a>';
				}
			});
			


			
			 //------- Window scroll function -------//
				jQuery(window).scroll(function() {

					//Collapse the top bar on scroll
					
					if (jQuery("#main-nav").offset().top > 60) {
						jQuery('.top-bar').slideUp({
							duration: 250,
							easing: "easeInOutSine"
						}).fadeOut(120);
					} else {
						jQuery('.top-bar').slideDown({
							duration: 0,
							easing: "easeInOutSine"
						}).fadeIn(120);
					}

					
					
				}); // end window scroll


		}); // end document ready


		//----------------------------------- Window load function -----------------------------------//

		jQuery(window).load(function() {

			// Page Preloader 	

			jQuery("#preloader").fadeOut("slow");

			//Portfolio Isotope 

			var jQuerycontainer = jQuery('#gallery-isotope');
			jQuerycontainer.isotope({
				filter: '*',
				animationOptions: {
					duration: 750,
					easing: 'linear',
					queue: false,
					layoutMode: 'masonry'
				}


			});
			jQuery(window).smartresize(function() {
				jQuerycontainer.isotope({
					columnWidth: '.col-sm-3'
				});
			});

			//Portfolio Nav Filter

			jQuery('.cat a').on('click', function() {
				jQuery('.cat .active').removeClass('active');
				jQuery(this).addClass('active');

				var selector = jQuery(this).attr('data-filter');
				jQuerycontainer.isotope({
					filter: selector,
					animationOptions: {
						duration: 750,
						easing: 'linear',
						queue: false
					}
				});
				return false;
			});

		}); // end window load function
	
}); // end jquery function