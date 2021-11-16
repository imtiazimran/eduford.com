<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$massege = $_POST['massege'];

$email_from = 'info@eduford.com';
$email_subject = ' New form submission';

$email_body = "User Name: $name.\n".
               "User email: $visitor_email.\n".
                "Subject: $subject.\n".
                 "User_massege: $massege.\n".;
 
                 
$to = 'amranhossain080@gmail.com';
$headers = "From: $email_from \r\n";

$headers .= "Reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);


header("Location: contact.html")


?>
