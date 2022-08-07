<?php
define('ADMIN', 'C:/xampp/htdocs/ideable');
include ADMIN . '/includes/dbConfig.php';
include ADMIN . '/inventor/forget-pass-inventor.php';
session_start();
error_reporting(0);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

function send_pass_reset($get_name, $get_email, $otp){
    $mail = new PHPMailer(true);

try {
    //Server settings

    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'ideabletest@gmail.com';                     //SMTP username
    $mail->Password   = 'cfblztamjiasttix';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('ideabletest@gmail.com', 'ideable');
    $mail->addAddress($_POST['inventor_reset_email']);     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'ideable user account password reset request';
    $mail->Body    = "Hello $get_name,  Your OTP(one time password) is  $otp";

    $mail->send();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}

if(isset($_POST['inventor_pass_reset_btn'])){

    $email = $_POST['inventor_reset_email'];
    $otp = rand(100000,999999);

    $check_email = "SELECT * FROM $inventor WHERE inventor_email = '$email'";
    $check_email_run = mysqli_query($mysqli, $check_email);

    if(mysqli_num_rows($check_email_run)>0){
        $row = mysqli_fetch_array($check_email_run);
        $get_name = $row['inventor_name'];
        $get_email = $row['inventor_email'];

        $update_otp = "UPDATE $inventor SET otp = '$otp' WHERE inventor_email = '$get_email'";
        $update_otp_run = mysqli_query($mysqli, $update_otp);

        if($update_otp_run){
            send_pass_reset($get_name, $get_email, $otp);
            echo "<script>alert('An e-mail has been sent to your email address. Get the otp to verify and reset your password.');
            window.location='/ideable/inventor/otp-inventor.php';</script>";
        }
        else{
            echo "<script>alert('Something went wrong');
            window.location='/ideable/inventor/forget-pass-inventor.php';</script>";
        }
    }
    else{
        echo "<script>alert('No user found of this email');
        window.location='/ideable/inventor/forget-pass-inventor.php';</script>";
    }
}

?>