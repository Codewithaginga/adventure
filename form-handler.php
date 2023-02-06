<?php

$name = $_POST['name']
$visitor_email = $_POST['email']
$subject = $_POST['subject']
$message = $_POST['message']

$email_from = 'info@.http://127.0.0.1:5500/uni.html'
$email_subject = 'New Form Submission'

$email_body = "user Name: $name./n".
                "user Email : $visitor_email./n".
                "Subject : $subject./n".
                "user Message: $message./n";

$to = 'brianaginga35@gmail.com';

$headers = "From: $email_from   \r\n";

$headers .= "Reply-To: $visitor_email \r\n";


mail($to, $email_subject,$email_body,$headers);

header("Location: contact.html");

?>