<?php
// Файлы phpmailer
require 'PHPmailer/PHPMailer.php';
require 'PHPmailer/SMTP.php';
require 'PHPmailer/Exception.php';
session_start();

// Переменные, которые отправляет пользователь
$email = $_SESSION["email"];
$hash = $_SESSION["hash"];
$title  = "Заголовок";

$body = $title .'  
<html>
<head>
<title>Подтвердите Email</title>
</head>
<body>
<p>Что бы подтвердить Email, перейдите по <a href="http://localhost/registration_succesful.php?hash=' . $hash . '">ссылка</a></p>
</body>
</html>
';

// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    //$mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host = 'ssl://smtp.mail.ru';
    $mail->Port = 465;
    $mail->Username = 'liatan@mail.ru';
    $mail->Password   = 'ZnTJu0bUKmahQtYiMSS5'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->setFrom('liatan@mail.ru', 'gallery'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress($email);  
   // $mail->addAddress('youremail@gmail.com'); // Ещё один, если нужен

// Отправка сообщения
$mail->isHTML(true);
$mail->Subject = $title;
$mail->Body = $body;    

// Проверяем отравленность сообщения
if ($mail->send()) {$result = "success";} 
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

header("Location: /registration_succesful.php"); 