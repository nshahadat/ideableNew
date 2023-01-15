<?php
session_start();
error_reporting(0);

$get_name = $_SESSION['warn_invname'];
$get_email = $_SESSION['warn_invemail'];

echo $get_email;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

function warn_user($get_name, $get_email)
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
        $mail->addAddress($get_email); //Add a recipient

        //Content
        $mail->isHTML(true); //Set email format to HTML
        $mail->Subject = 'Warning from ideable';
        $mail->Body = "Hello $get_name,  Your idea on ideable got some reports. Check what is wrong immediately or we will remove it from our platform. Thank you";

        if ($mail->send()) {
            echo "<script>alert('We have sent an email to the inventor about the warning.');
            window.location='/ideable/admin/admin-review.php';</script>";

            session_unset();
            session_destroy();
        } else {
            echo "<script>
            alert('Something went wrong');
            window.location='/ideable/admin/admin-review.php';
            </script>";
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

warn_user($get_name, $get_email);

?>