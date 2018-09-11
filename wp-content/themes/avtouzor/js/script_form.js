$(document).on('click', '.modal-form__form-btn', function (e) {
	e.preventDefault();
	var data = $('.modal-form').serialize();
	var name = $("input[name='name']").val();
	var phone = $("input[name='phone']").val();
	var form_data = new FormData();
	$('.js_modalWindow').click();
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
					$('.modal-form').trigger('reset');
					$.fancybox.close();
					alert(response.message);
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