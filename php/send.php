<?php 
$name_user = $_POST['name_user'];
$mail_user = $_POST['mail_user'];
$report_user = $_POST['report_user'];





$name_user = htmlspecialchars($name_user);
$mail_user = htmlspecialchars($mail_user);
$report_user = htmlspecialchars($report_user);

$name_user = urldecode($name_user);
$mail_user = urldecode($mail_user);
$report_user = urldecode($report_user);

$name_user = trim($name_user);
$mail_user = trim($mail_user);
$report_user = trim($report_user);


if(mail($mail_user,
	"Новое письмо с сайта",
	"Имя клиента: ".$name_user."\n".
	"Почтовый ящик клиента: ".$mail_user."\n".
	"Вопрос/Жалоба: ".$report_user."\n",
	"From: <eco_sport@list.ru> \r\n")
)   {
	echo ('Письмо успешно отправлено');
}
else {
	echo ('Есть ошибки! Проверьте данные...');
}



 ?>