<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message']
$email_from = 'https://gokuljith-k.github.io/EHEALTH/';
$email_subject = 'new form submission';
$email_body = "user name: $name.\n".
"user email: $visitor_email.\n".
"subject: $subject.\n".
"user message: $message.\n";
$to = 'mithunkannur007@gmail.com';
$headers = "from: $email_from \r\n";
$header .="reply-to: "$visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("location: index.html");
?>
