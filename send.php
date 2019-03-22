<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';
$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->Username = "yoel.velasquez.valencia@gmail.com";
$mail->Password = "*********";

$mail->setFrom('yoel.velasquez.valencia@gmail.com', 'First Last');
$mail->addAddress('yoel_17_58@hotmail.com', 'John Doe');

$mail->Subject = 'PHPMailer GMail SMTP test';
$mail->msgHTML('<p>Este es el contenido de mi mensaje</p>');
$mail->AltBody = 'This is a plain-text message body';

if (!$mail->send()) echo "Mailer Error: " . $mail->ErrorInfo;
else echo "Message sent!";