<?php
$sendTo  = "matrimonio@sanmiguelangel.com";
$subject = "New Event Created!";

$headers = "From: " . $_POST['guestname'];
$headers .= "<" . $_POST["guestemail"] . ">\r\n";
$headers .= "Reply-To: " . $_POST["guestemail"] . "\r\n";

$message .= "Event Name: " .$_POST["name"] . "\r\n";
$message .= "Type: " .$_POST["type"] . "\r\n";
$message .= "Guests E-mails: " .$_POST["email"] . "\r\n";
$message .= "Ask Food Preference / Allergies: " .$_POST["ask"] . "\r\n";

if (mail($sendTo, $subject, $message, $headers)) {
$alerta="New Event Created!";
echo "<script language='javascript' type='text/javascript'>alert('".$alerta."');window.location='http://sanmiguelangel.com/app/new.php';</script>";
} else {
echo "Error! Please try again!";
}
 ?>