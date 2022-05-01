<?php

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$message = $_POST['content'];
$subject = "Mail from portfolio";

$to = "nofyogalta@vusra.com";
$body = "";

$body .= "From : ". $firstName ." ". $lastName . "\r\n";
$body .= "Email : ". $email ."\r\n";
$body .= "Message : ". $message ."\r\n";

mail($to, $subject, $body);
header('location: ../index.html');