<?php

define('ROOT', 'C:/xampp/htdocs/ideable');
include ROOT . '/includes/dbConfig.php';

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';


function send_confirm_email($user_email)
{
    $mail = new PHPMailer(true);

    try {
        //Server settings

        $mail->isSMTP(); //Send using SMTP
        $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
        $mail->SMTPAuth = true; //Enable SMTP authentication
        $mail->Username = 'ideabletest@gmail.com'; //SMTP username
        $mail->Password = 'injfxdwzmgjwymsx'; //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
        $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('ideabletest@gmail.com', 'ideable');
        $mail->addAddress($_SESSION['send_inventor_email']); //Add a recipient

        //Content
        $mail->isHTML(true); //Set email format to HTML
        $mail->Subject = 'New investor on your idea';
        $mail->Body = "Hello Sir, your idea on ideable got a new interest who is $user_email";

        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

$user_email = $_SESSION['email'];
$a = $_SESSION['send_inventor_email'];

if (send_confirm_email($user_email)) {
    echo "<script>alert('Your email has been sent');
    </script>";
} else {
    echo "<script>alert('Your email has not been sent $user_email');
    </script>";
}



// echo "<script>alert('An email has been sent to the inventor. Please wait until he contacts you.');
//     window.location='/ideable/investor/investor-feed.php';</script>";

?>