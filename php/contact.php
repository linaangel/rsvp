<?php
$sendTo  = "matrimonio@sanmiguelangel.com";
$subject = "Contact Us";

$headers = "From: " . $_POST['contactname'];
$headers .= "<" . $_POST["contactemail"] . ">\r\n";
$headers .= "Reply-To: " . $_POST["contactemail"] . "\r\n";

$message .= "Name: " .$_POST["contactname"] . "\r\n";
$message .= "E-mail: " .$_POST["contactemail"] . "\r\n";
$message .= "Support, Comments, Questions?" .$_POST["message"] . "\r\n";

if (mail($sendTo, $subject, $message, $headers)) {
$alerta="Thank you for contacting us! We will be in touch ASAP";
echo "<script language='javascript' type='text/javascript'>alert('".$alerta."');window.location='http://sanmiguelangel.com/app/contact.php';</script>";
} else {
echo "Error, please try again!";
}
 ?>