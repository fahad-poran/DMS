<?php 
 // [server]$ pear install --alldeps Mail0 - Disable Debugging, 2 - Responses received from the server

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



// Load Composer's autoloader
require 'vendor/autoload.php';
$mail = new PHPMailer(true);
try{
$mail->SMTPDebug = 0;


$mail->isSMTP(); //shihab.uddin121111@gmail.com Set mailer to use SMTP
$mail->Host = 'tls://smtp.gmail.com:587'; // Specify main and backup SMTP servers
$mail->SMTPAuth = true; // Enable SMTP authentication
$mail->Username = 'poransha404@gmail.com'; // SMTP username
$mail->Password = 'Dummy@1234'; // SMTP password
//$mail->SMTPSecure = 'tls';//PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption, `PHPMailer::ENCRYPTION_SMTPS` also accepted
//$mail->Port = 587; // TCP port to connect to
//$_SESSION['mail']=$_POST['email'];
// $m="aafporan8@gmail.com";
$m = $_SESSION['email'];
$name= $_SESSION['pname'];  
// echo"i am mail";   
//Recipients
$mail->setFrom('poransha404@gmail.com', 'DoctorManagement');
$mail->addAddress($m,$name); // Add a recipient

// Attachement
// $mail->addAttachment('upload/file.pdf');
// $mail->addAttachment('upload/image.png', 'image 1'); // Optional name
// session_start();
// Content
// $token =rand(10,9999);
// $_SESSION['key']=$token;
$mail->isHTML(true); // Set email format to HTML
$mail->Subject = 'Approval';
$mail->Body = '<h2>Assalamualikum '.$_SESSION['comment'].",</h2><br>MR/Ms ".$name."<h3>You are approved </h3>";
// $mail->AltBody = 'A test email fromshihabuddinshakil9@gmail.com'; // Plain text for non-HTML mail clients

$mail->send();
// echo '<h4>approved mail send</h4>';
} catch (Exception $e) {
// echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
print "<script>alert('Email Not Sent, Invalid Patient Email!');</script>";
}


?>