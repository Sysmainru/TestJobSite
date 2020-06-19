<?php
session_start();
if (isset($_SESSION['submit'])){
$name = $_POST['name'];
$phone = $_POST['phone'];
$text = "";

if (mail("sysmainru@gmail.com", "Был заказан обратный звонок ", "Имя: ".$name.". Телефон: ".$phone))
	{
		$text = 'Ваша заявка принята';
		header("Location: /");
	} 
else {
		$text = 'при отправке сообщения возникли ошибки';
		header("Location: /");
	}
}
exit;
?>
