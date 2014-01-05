(function($){

	"use strict";

	$(function(){


		/**
		 * Validación de emails
		 */
		// window.validateEmail = function (email) {
		// 	var regExp = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		// 	return regExp.test(email);
		// };


		/**
		 * Regresa todos los valores de un formulario como un associative array
		 */
		// window.getFormData = function (selector) {
		// 	var result = [],
		// 		data   = $(selector).serializeArray();

		// 	$.map(data, function (attr) {
		// 		result[attr.name] = attr.value;
		// 	});
		// 	return result;
		// }

		var alto_ventana = $(window).height(),
			alto_menu	 = $('#nav').height(),
			alto_logo	 = $('.centrar').height(),
			alto_total	 = alto_menu + alto_logo + 200;

		//console.log(alto_logo);

		$('.header').height(alto_ventana);
		$('.titulo').height(alto_ventana/2);

		$('.header').css('min-height', alto_total + 'px');

		//Resize
		$(window).resize(function(){
			alto_ventana = $(window).height(),
			alto_menu	 = $('#nav').height(),
			alto_logo	 = $('.centrar').height(),
			alto_total	 = alto_menu + alto_logo + 100;

			$('.header').height(alto_ventana);
			$('.titulo').height(alto_ventana/2);

			$('.header').css('min-height', alto_total + 'px');
		});

		$('a[href*=#]').each(function() {
			if ( location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
				&& location.hostname == this.hostname
				&& this.hash.replace(/#/,'') ) {
					var $targetId = $(this.hash),
						$targetAnchor = $('[name=' + this.hash.slice(1) +']');

					var $target = $targetId.length ? $targetId : $targetAnchor.length ? $targetAnchor : false;
					if ($target) {
						var targetOffset = ($target.offset().top) + 40;
						$(this).click(function() {
							console.log(targetOffset);
							$("#nav li a").removeClass("active");
							$(this).addClass('active');
							$('html, body').animate({scrollTop: targetOffset}, 400);
							return false;
						});
					}
			}
		});

	});

})(jQuery);
