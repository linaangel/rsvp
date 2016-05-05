<?php
$sendTo  = "matrimonio@sanmiguelangel.com";
$subject = "RSVP";

$headers = "From: " . $_POST['guestname'];
$headers .= "<" . $_POST["guestemail"] . ">\r\n";
$headers .= "Reply-To: " . $_POST["guestemail"] . "\r\n";

$message .= "Name: " .$_POST["guestname"] . "\r\n";
$message .= "Preferred E-mail: " .$_POST["guestemail"] . "\r\n";
$message .= "RSVP: " .$_POST["rsvp"] . "\r\n";
$message .= "Allergies, Food Preference, Commentaries? " .$_POST["message"] . "\r\n";

if (mail($sendTo, $subject, $message, $headers)) {
$alerta="Thank you for RSVP!";
echo "<script language='javascript' type='text/javascript'>alert('".$alerta."');window.location='http://sanmiguelangel.com/app/guest.php';</script>";
} else {
echo "Error! Please try again!";
}
 ?>