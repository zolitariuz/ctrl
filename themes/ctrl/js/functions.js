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

		$('#nav a').on('click', function(){

			$('#nav a').removeClass("active");
			$(this).addClass('active');

			var div = $(this).attr('href'),
				divPosicion = $(div).offset().top;

			$('html, body').animate({scrollTop: divPosicion}, 400);

		});

		$(".fancybox").fancybox();

	});

})(jQuery);
