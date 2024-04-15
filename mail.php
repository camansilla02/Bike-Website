<?php
if(isset($_POST['name']))
$name = $POST['name'];
if(isset($_POST['email']))
$email =  $_POST['email'];
if(isset($_POST['telephone']))
$telephone =  $_POST['telephone'];


$content="From: $name";
$recipient = "cracuna@liberty.edu";
$emailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "Email sent!";
?>

