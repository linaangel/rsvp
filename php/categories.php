<?php
$sendTo  = "matrimonio@sanmiguelangel.com";
$subject = "New Category Created!";

$headers = "From: " . $_POST['guestname'];
$headers .= "<" . $_POST["guestemail"] . ">\r\n";
$headers .= "Reply-To: " . $_POST["guestemail"] . "\r\n";

$message .= "Event Name: " .$_POST["event"] . "\r\n";
$message .= "Category Name: " .$_POST["category"] . "\r\n";
$message .= "Seats: " .$_POST["seats"] . "\r\n";

if (mail($sendTo, $subject, $message, $headers)) {
$alerta="New Category Created!";
echo "<script language='javascript' type='text/javascript'>alert('".$alerta."');window.location='http://sanmiguelangel.com/app/categories.php';</script>";
} else {
echo "Error! Please try again!";
}
 ?>