<?php
$name = $_POST["name"];
$email = $_POST["email"];
$text = $_POST["text"];
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$text = htmlspecialchars($text);
$name = urldecode($name);
$email = urldecode($email);
$text = urldecode($text);
$name = trim($name);
$email = trim($email);
$text = trim($text);


if (mail("example@mail.ru", "Заявка с сайта", "Имя:".$name.". E-mail: ".$email ,"From: example2@mail.ru \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>
