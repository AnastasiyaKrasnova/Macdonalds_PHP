<?php
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

function SendMessage($customer,$msg){
	$mail = new PHPMailer\PHPMailer\PHPMailer();
	try {
		$mail->isSMTP();   
		$mail->CharSet = "UTF-8";                                          
		$mail->SMTPAuth   = true;
		$mail->Host       = 'ssl://smtp.mail.ru';
		$mail->Username   = 'anastasiya.krasnova2017@mail.ru'; 
		$mail->Password   = '2011NKrasA'; 
		$mail->SMTPSecure = 'ssl';
		$mail->Port       = 465;
		$mail->setFrom('anastasiya.krasnova2017@mail.ru', 'Анастасия Краснова');
		$mail->addAddress($customer);  
		$mail->isHTML(true);
		$mail->Subject = "MacDonald's";
		$mail->Body    = $msg;
		if ($mail->send()) {
			return 1;
		}
	}
	catch (Exception $e) {
		return 0;
	}
}

function FormMailMessage($_sess,$data_order){
	$order="";
	for($i=0;$i<$_sess['counter'];$i++){
			$si=$_sess['item_' . $i];
			$order=$order . "<br>" . $si['card_title'] . " : " . $si['card_price'] . "$ : X" . $si['card_num'] . " : " . $si['total_price'] . "$";		
	}
	$msg="<b>Уважаемый(ая) {$_sess['name']}</b>. Ваш заказ успешно оформлен и отправлен на сборку<br>
		<br><b>Информация о доставке:</b>
		<br>Имя: {$_sess['name']}
		<br>Контактный телефон: {$_sess['phone']}
		<br>Адрес доставки: {$_sess['adress']}<br>
		<br><b>Информация о заказе:</b>
		<br>Стоимость: {$data_order['price']}$
		<br>Количество блюд: {$data_order['capacity']}
		<br>Дата: {$data_order['date']}
		<br>Время: {$data_order['time']}<br>
		<br><b>Перечень блюд:</b>$order";
	return $msg;
}
