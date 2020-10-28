<?php
header("Content-Type: text/html; charset=utf-8");

if(isset($_POST['phone'])) {
	
$email = "Ваша почта"; #Email, на него придут письма
$title = "Заявка с сайта"; #Заголовок письма

$text = "
Информация о покупателе:

Телефон: ".$_POST['phone']."
Время заявки: ".date("Y-m-d H:i:s");

if(mail($email, $title, $text)) {
	echo "Сообщение отправлено";
} else {
	echo "Ошибка. Возможно функция mail отключена.";
}
} else {
	echo "Ошибка";
}
?>