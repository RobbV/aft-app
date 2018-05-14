<?php
// // store the form inputs into varible
// $fname= $_POST['name'];
// $email = $_POST['email'];
// $subject = $_POST['subject'];
// $message = $_POST['message'];
//
// $to = "rob.vdg.14@gmail.com";
//
// $name = 'From: '. $fname .' Email address '. $email;
//
// mail($to,$subject,$message,$name,$email);


$message = $_POST['name'];
$headers= $_POST['email'];
$subject = $_POST['subject'];
$to_address = "rob.vdg.14@gmail.com";
$mailsend=mail("$to_address","$subject","$message" ,"$headers");
header ('location:sent-message.html');
?>
