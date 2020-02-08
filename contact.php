<?php

if(empty($_POST['email'])  		||
   empty($_POST['subject']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
   {
     // header('Location: https://www.placeholder.com/');
     return false;
   }

$mail_to = 'example@mail.com';

$email = $_POST['email'];
$name = $_POST['subject'];
$message = $_POST['message'];

$subject = "Bericht van $name";
$body = "Bericht van: $name ($email)\n \nBericht:\n $message";
$headers = "Afkomstig van: $email";
$headers = "From: $email";

mail($mail_to, $subject, $body, $headers);

header('Refresh: 1');

?>
