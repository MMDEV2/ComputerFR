<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$priority = $_POST['priority'];
$type = $_POST['type'];
$message = $_POST['message'];
$formcontent=" From: $name \n Phone: $phone \n   Priority: $priority \n Type: $type \n Message: $message";
$recipient = "sxi1692@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>