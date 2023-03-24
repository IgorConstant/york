$(document).ready(function () {
	$('.btn-trocar').on('click', function () {
		$('.input-change-file').removeClass('hide')
		$('.input-change-file').prop('disabled', false);
		$('.foto-funcionario').addClass('hide');
	});

	$('.btn-cancelar').on('click', function () {
		$('.input-change-file').prop('disabled', true);
		$('.foto-funcionario').removeClass('hide');
		$('.input-change-file').addClass('hide');
	});
});
