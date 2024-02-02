<?php 
// Import PHPMailer classes into the global namespace 
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\SMTP; 
use PHPMailer\PHPMailer\Exception; 
 
// Include library files 
require 'plugins/PHPMailer/Exception.php'; 
require 'plugins/PHPMailer/PHPMailer.php'; 
require 'plugins/PHPMailer/SMTP.php'; 

$mail = new PHPMailer; 
$mail->SMTPDebug = SMTP::DEBUG_CONNECTION;          //Enable verbose debug output 
$mail->isSMTP();                                    // Set mailer to use SMTP 
$mail->Host = 'mail.dhome.id';                      // Specify main and backup SMTP servers 
$mail->SMTPAuth = true;                             // Enable SMTP authentication 
$mail->Username = 'mail@dhome.id';                  // SMTP username 
$mail->Password = 'TIE?2!,brJu3';                   // SMTP password 
$mail->SMTPSecure = 'ssl';                          // Enable TLS encryption, `ssl` also accepted 
$mail->Port = 465;                                  // TCP port to connect to 
 
$mail->setFrom('mail@bawaslubali.ac.id', 'Bawaslu Bali'); 
$mail->addAddress('yarumeshina@gmail.com'); 
 
$mail->isHTML(true); 
 
// Mail subject 
$mail->Subject = 'Recovery Code'; 
 
// Mail body content 

$bodyContent = '<br>Trouble signing in?<br>';
$bodyContent .= '<br>Resetting your password is easy.<br>';
$bodyContent .= '<br>Just press the button below and follow the instructions. We"ll have you up and running in no time.<br>';
$bodyContent .= "<a href='http://localhost/Auth/reset_password/RANDOM123442' target='_blank' rel='noopener'>disini</a>";
$bodyContent .= '<br>If you did not make this request then please ignore this email.<br>';

$mail->Body    = $bodyContent; 
 
// Send email 
if(!$mail->send()) { 
    echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
} else { 
    echo 'Message has been sent.'; 
}
