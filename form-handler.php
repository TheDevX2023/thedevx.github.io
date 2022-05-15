<?php
$name = $_POST['name'];
$vistor = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from = 'info@yourwebsite.com';

$email_subject = 'New Form Submission';
    
$email_body = "User Name : $name. \n";
            "User Email: $vistor_email.\n";
    "Genre: $message.\n";
    
    "User Message: $message.\n";
    
$to = '';
$headers = "From: $email_from\r \n";
$headers .= "Reply-To $visitor_email \r \n";
mail($to,$email_subject,$email_body,$headers);

header("location: contact.html")
?>