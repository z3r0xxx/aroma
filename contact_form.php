<?php

$to      = 'natali.kvasova@bk.ru';
$subject = $_POST["subject"];
$message = $_POST["message"];
$name = $_POST["name"];
$email = $_POST["email"];

$headers = array(
    'From'     => $email,
    'Reply-To' => 'webmaster@example.com',
    'X-Mailer' => 'PHP/' . phpversion()
);

mail($to, $subject, $message, $headers);

?>
