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

		var alto = $(window).height();

		$('.header').height(alto);
		$('.titulo').height(alto/2);
		$('h2').css('line-height', (alto/2)+'px');

		//Resize
		$(window).resize(function(){
			alto = $(window).height();

			$('.header').height(alto);
			$('.titulo').height(alto/2);
			$('h2').css('line-height', (alto/2)+'px');
		});

	});

})(jQuery);
