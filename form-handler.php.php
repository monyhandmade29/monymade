<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['country'];
$message = $_POST['message'];

$email_from ='monymade295@gmail.com';
$email_subject ='New form submession';

$email_body = "User Name: $name.\n". 
                "user email: $visitor_email.\n". 
                "subject: $subject.\n". 
                "user message: $message .\n";

$to = 'mazrix2727@gmail.com';

$headers = "from: $email_from \r\n";

$headers = "reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html.html");



?>