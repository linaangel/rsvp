<?php
$sendTo  = "matrimonio@sanmiguelangel.com";
$subject = "RSVP";

$headers = "From: " . $_POST['nombre'];
$headers .= "<" . $_POST["correo"] . ">\r\n";
$headers .= "Reply-To: " . $_POST["correo"] . "\r\n";

$message .= "Nombre: " .$_POST["nombre"] . "\r\n";
$message .= "Correo: " .$_POST["correo"] . "\r\n";
$message .= "RSVP: " .$_POST["rsvp"] . "\r\n";
$message .= "Comentarios: " .$_POST["mensaje"] . "\r\n";

if (mail($sendTo, $subject, $message, $headers)) {
$alerta="Gracias por confirmar!";
echo "<script language='javascript' type='text/javascript'>alert('".$alerta."');window.location='http://sanmiguelangel.com/rsvp/rsvp.php';</script>";
} else {
echo "Error en el envío, por favor intenta otra vez!";
}
 ?>