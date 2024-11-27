(function ($) {

	"use strict";

	// Cria um toggle nos itens dos cards escondendo e mostrando o texto 

	const aboutCardBox = $('.culture-card__container .culture-card__border');

	aboutCardBox.each(function () {

		// Conteúdo completo - valor inicial (não é alterado)
		let aboutCardTextContent = $(this).children('p').html();

		let aboutCardText = $(this).children('p');

		let buttonTextContent = $(this).children('.info-toggle').html();

		let buttonText = $(this).children('.info-toggle');

		// Estreita o comprimento da string em até 87 caracteres
		if (aboutCardText.html().length > 255) {
			aboutCardText.html(aboutCardText.html().substr(0, 255) + '...');
		} else {
			aboutCardText.css('margin-bottom', '54px')
			buttonText.hide()
		}


		// Roda uma função anonima que verifica o estado do card como aberto ou fechado e reescreve o conteúdo do paragrafo de cada card
		$(buttonText).click(function () {

			// Executa a função no elemento pai e não no próprio elemento buttonText
			if ($(this).parent().hasClass('closed')) {

				$(this).parent().removeClass('closed');
				$(this).parent().addClass('open');

				aboutCardText.html(aboutCardTextContent);
				buttonText.html('Ver Menos -');

			} else {
				$(this).parent().removeClass('open');
				$(this).parent().addClass('closed');

				if (aboutCardText.html().length > 255) {
					aboutCardText.html(aboutCardText.html().substr(0, 255) + '...');
					buttonText.html(buttonTextContent);
				}
			}

		});

	});


})(window.jQuery);