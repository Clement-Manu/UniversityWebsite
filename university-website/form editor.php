<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com';

$email_subject = 'new form submission';

$email_boby = "User Name: $name.\n". 
               "User Email: $visitor_name.\n". 
                "subject: $suject.\n".
                 "User Message: $message.\n". 


$to = 'manuclement219@mail.com';

$headers = "from: $email_from\r\n"; 

$headers .= "Reply-To: $visitor_email \r\n";


mail?($to,$mail_subject,$mail_body,$headers);

header("Location: contact.html");
?>