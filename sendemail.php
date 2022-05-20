<?php

print_r($_POST);


$name = isset($_POST['name']) ? $_POST['name'] : null;
$phone = isset($_POST['phone']) ? $_POST['phone'] : null;
$email = isset($_POST['email']) ? trim($_POST['email']) : null;
$subject = isset($_POST['subject']) ? $_POST['subject'] : null;

$project_type = isset($_POST['project-type']) ? $_POST['project-type'] : null;
$enquiry_type = isset($_POST['enquiry-type']) ? $_POST['enquiry-type'] : null;


$type = isset($_POST['type']) ? $_POST['type'] : "New Contact request";



//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

require("vendor/phpmailer/phpmailer/src//PHPMailer.php");
require("vendor/phpmailer/phpmailer/src/SMTP.php");
require("vendor/phpmailer/phpmailer/src/Exception.php");

// use vendor\phpmailer\phpmailer\src\PHPMailer;
// use vendor\phpmailer\phpmailer\src\SMTP;
// use vendor\phpmailer\phpmailer\src\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer\PHPMailer\PHPMailer();

try {
    //Server settings
    $mail->SMTPDebug = 1;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'sg2plzcpnl476821.prod.sin2.secureserver.net';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'info@rasasvadaarchitects.com';                     //SMTP username
    $mail->Password   = 'rasasvada@2021';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('info@rasasvadaarchitects.com', 'Ne');
    $mail->addAddress('info@rasasvadaarchitects.com', 'Info Rasasvada');     //Add a recipient
    $mail->addReplyTo($email, $name);

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $type;
    $mail->Body    = '<table><tr><td>Name:</td><td>'.$name.'</td></tr><tr><td>Phone:</td><td>'.$phone.'</td></tr><tr><td>Email</td><td>'.$email.'</td></tr><tr><td>Subject:</td><td>'.$subject.'</td></tr><tr><td>Project</td><td>'.$project_type.'</td></tr><tr><td>Enquiry:</td><td>'.$enquiry_type.'</td></tr></table>';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
