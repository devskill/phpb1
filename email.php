<?php
$to_email = 'jalal.uddin@selise.ch';
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail function';
$headers = 'From: jalal.exe@gmail.com';
mail($to_email,$subject,$message,$headers);
	
