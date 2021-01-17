<?php
ini_set('display_errors', 1);
error_reporting( E_ALL );

$from = "raenielmail.org";
$to = "raeniel.fruylan@gmail.com";

$subject = "PHP TRY";
$message = "PHP WORKS FINE";
$headers = "FROM:" . $from;

mail($to,$subject,$message,$headers);

echo "The email message was successfully sent.";
echo "Thankyou";
?>