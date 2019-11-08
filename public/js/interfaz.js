$(document).ready(function () {
	var content = $('#content'),
		categories = $('.categories a'),
		menuOptions = $('.menu a');

	categories.click(function () {
		categories.removeClass('selected');
		$(this).addClass('selected');

		$('.section').hide();

		if ($(this).text() == 'SELECCIONADOS')
			$('#section-1').show();

		else if ($(this).text() == 'PODCASTS')
			$('#section-2').show();

		else if ($(this).text() == 'GÉNEROS Y ESTADOS DE ÁNIMO')
			$('#section-3').show();

		else if ($(this).text() == 'NOVEDADES')
			$('#section-4').show();

		else if ($(this).text() == 'DESCUBRIR')
			$('#section-5').show();
	});
});
