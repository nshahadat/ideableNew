<?php
session_start();
error_reporting(0);

$get_email = $_SESSION['email'];
$get_text = $_SESSION['text'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

function send_text_ideable($get_email, $get_text)
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
        $mail->addAddress('shahadatnayeem23@gmail.com'); //Add a recipient

        //Content
        $mail->isHTML(true); //Set email format to HTML
        $mail->Subject = 'New email from ideable' . $get_email;
        $mail->Body = $get_text;

        if ($mail->send()) {
            echo "<script>alert('We have sent your email o ideable. Thank you!');
            window.location='/ideable/index.php';</script>";

            session_unset();
            session_destroy();
        } else {
            echo "<script>
            alert('Something went wrong');
            window.location='/ideable/index.php';
            </script>";
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

send_text_ideable($get_email, $get_text);
?>