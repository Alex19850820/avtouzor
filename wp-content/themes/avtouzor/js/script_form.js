$(document).ready(function(){
	// if($('.js_phone-mask').length > 0) {
	// 	$('.js_phone-mask').inputmask({alias: 'phoneru'});
	// }
	$('.js_modalWindow').fancybox({
		afterClose : function () {
			$('.modal-block').removeClass('modal-noactive');
			$('.modal-thanks').removeClass('modal-active');
		}
	});
	// $(document).on('click', '.js_modalThanks', function () {
	// 	$('.modal-block').addClass('modal-noactive');
	// 	$('.modal-thanks').addClass('modal-active');
	// });// уже добавлял тоже самое - смотри
	$('#fw-ext-builder-frontend-grid-css').remove();
});



$(document).on('click', '.modal-form__form-btn', function (e) {
	e.preventDefault();
	var data = $('.modal-form').serialize();
	var name = $("input[name='name']").val();
	var phone = $("input[name='phone']").val();

	var form_data = new FormData();
	// var guest = $(this).attr('data-guest');
	// if(guest) {
	// 	name = guest;
	// }
	// if(!phone) {
	// 	phone = $('#guest_phone').val();
	// }
	if (name ==='') {
		alert('Введите Ваше имя!');
		return false;
	}
	if(phone === '') {
		alert('Введите номер телефона!');
		return false;
	}
	if(name !== '') {
		form_data.append('action', 'sendForm');
		form_data.append('name', name);
		form_data.append('phone', phone);
		$.ajax({
			url: myajax.url,
			type: 'post',
			data: form_data,
			contentType: false,
			processData: false,
			success: function (response) {
				if (response.result === 'success') {
					/*form.reset();*/
					console.log(123); // покажи где подключаются скрипты
					$('.modal-form').trigger('reset');
					$('.modal-block').addClass('modal-noactive');
					$('.modal-thanks').addClass('modal-active');
					// alert(response.message);
				} else {
					alert(response.message);
				}
			}
		});
		return false;
	} else {
		alert('Вы не заполнили все поля!');
	}
});