<?php

add_action( 'wp_ajax_sendForm', 'sendForm' );
add_action( 'wp_ajax_nopriv_sendForm', 'sendForm' );
//
function sendForm() {
	if (isset($_POST )) {
		// обрабатываем запрос
		$adminEmail = get_option('admin_email');
		var_dump($adminEmail);die();
//		$adminEmail = '89261231522@mail.ru,
//globus_estate@mail.ru';
		$name = $_POST['name'];
		$phone = $_POST['phone'];
//		$text = $_POST['text'];
//		$my_file = "";
//		/*if (!empty($_FILES['file']['tmp_name'])) {
//			$path = $_FILES['file']['name'];
//			if (copy($_FILES['file']['tmp_name'], $path)) $my_file = $path;
//		}*/
//		if(!empty($_POST['file'])){
//			$path = explode(',' , $_POST['file']);
//			$my_file = $path;
//		}
//		$nameFile = "";
//
		
		
		$message = '<h2>Заявка с '.get_bloginfo('description').' '.get_bloginfo('url').'</h2><br>';
		$message .= 'Имя: ' . $name . '<br>';
		$message .= 'Телефон: ' . $phone . '<br>';

		if (wp_mail($adminEmail,'Заявка на обратный звонок c '.get_bloginfo('description').' '.get_bloginfo('url'), $message, 'content-type: text/html')) {
			$result = [
				'result' => 'success',
				'message' => 'Ваше запрос отправлен!'
			];
		} else {
			$result = [
				'result' => 'error',
				'message' => 'Возникла ошибка при отправке запроса. Попробуйте позже!'
			];
		}
		// возвращаем результат
		wp_send_json($result);
	}
	wp_die();
}
