<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
// $call = $_POST['call'];
// $website = $_POST['website'];
// $priority = $_POST['priority'];
$type = $_POST['type'];
$message = $_POST['message'];
$formcontent=" From: $name \n Phone: $phone \n  Message: $message";
$recipient = "sxi1692@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Whoops!!!");
echo "Thank You!";
?>