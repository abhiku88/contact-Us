<?php

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer;

 if(isset($_POST["email"])) {
    
     // $mail->SMTPDebug  = 3;
    // $mail->PHPMailer(true);
	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'ssl';
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 465;
	$mail->Username = "anhishekkumar18@gmail.com";
	$mail->Password = "ymwifppygazdamec";
	$mail->From ="anhishekkumar18@gmail.com";  
	
	$mail->Body = "Name :". $_POST["name"].$_POST["message"] ;
    // $mail->addAddress($_POST["email"]);
    $mail->addAddress("anhishekkumar18@gmail.com");
    $mail->addBCC("dubeyneeraj113@gmail.com");
    $mail->IsHTML(true);
    $mail->Subject = "Contact request from : ".$_POST["email"];
    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
 }

?>