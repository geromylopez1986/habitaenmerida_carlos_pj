<?php 

$name = $_POST['name'];
$mail = $_POST['email'];
$phone = $_POST['tel'];
$message = $_POST['mensenje'];


$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Télefono de contacto: " . $phone . " \r\n";
$message .= "Mensaje: " . $_POST['mensenje'] . " \r\n";
$message .= "Enviado el: " . date('d/m/y', time());

$to = 'informacion@habitaenmerida.com';
$subject = 'Asunto de el mensenje';

mail($to, $subject, utf8_decode($message), $header);

header("Location:index.html");

?>