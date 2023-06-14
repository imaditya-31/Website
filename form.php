<?php
$name=$_POST[''];
$email=$_POST[''];
$contact=$_POST[''];
$message=$_POST[''];
$email_from='info@gmail.com';
$email_subject='New Form Submission';
$email_body="User Name: $name.\n"."User Email: $email.\n"."contact: $contact.\n"."User Message: $message.\n";
$to='pcccsplc2121@gmail.com';
$headers="from: $email_from \r\n";
$headers.="Reply to: $email \r\n";
mail($to, $email, $email_body, $headers);
header("Location: contact.html");
?>