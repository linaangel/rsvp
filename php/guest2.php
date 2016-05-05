<?php

$guestname = $_POST['guestname'];
$guestemail = $_POST['guestemail'];
$rsvp = $_POST['rsvp'];
$message = $_POST['message'];

 $cvsData = $guestname . "," . $guestemail . "," . $rsvp . "," . $message ."\n";

$fp = fopen("http://sanmiguelangel.com/app/test/guests.csv","a");

if($fp) {
	fwrite($fp,$cvsData);
	fclose($fp);
}
?>