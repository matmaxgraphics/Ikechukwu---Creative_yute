<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent = "From: $name \n Email Address: $email \n Message Content: $message";
$recipient = "gbadamosimateen@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
$user = "$email";
$usersubject = "Thanks For Contacting Me";
$userheaders = "From: gbadamosimateen@gmail.com\n";

$usermessage = "Thank you for messaging me. I'll get back to you shortly.";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
mail($user, $usersubject, $usermessage, $userheaders);
header("Location: thanks.html");
echo "Thank You"

?>

ini_set('SMTP', "gmail.com");
ini_set('smtp_port', "25");
ini_set('sendmail_from', "gbadamosimateen@gmail.com");


