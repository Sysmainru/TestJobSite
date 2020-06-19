<?php

$text = '312838128383';

if( isset( $_POST['submit'] ) )
{

$name = $_POST['name'];
$phone = $_POST['phone'];
$text = '123123123';

if (1 == 1)
	{
		echo "сообщение успешно отправлено";
		$text = '123123123';
		echo 'some text' . $text . ' more text';
		
	} 
else {
		echo "при отправке сообщения возникли ошибки";
	}
}
?>