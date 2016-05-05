<?php
$sendTo  = "matrimonio@sanmiguelangel.com";
$subject = "Food Preference";

$headers = "From: " . $_POST['nombre'];
$headers .= "<" . $_POST["correo"] . ">\r\n";
$headers .= "Reply-To: " . $_POST["correo"] . "\r\n";

$message .= "Nombre: " .$_POST["nombre"] . "\r\n";
$message .= "Preferencia Comida: " .$_POST["food"] . "\r\n";

if (mail($sendTo, $subject, $message, $headers)) {
$alerta="Gracias por la información!";
echo "<script language='javascript' type='text/javascript'>alert('".$alerta."');window.location='http://sanmiguelangel.com/rsvp/food_preference.php';</script>";
} else {
echo "Error en el envío, por favor intenta otra vez!";
}
 ?>