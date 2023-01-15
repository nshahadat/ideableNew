<?php
define('ADMIN', 'C:/xampp/htdocs/ideable');
include ADMIN . '/includes/header.php';
include ADMIN . '/includes/navbar-main.php';
include ADMIN . '/includes/dbConfig.php';
session_start();
?>

<div class="container">
    <div class="forms-container">
        <div class="signin-signup">
            <form action="reset-pass-investor.php" method="post" class="sign-in-form">
                <h2 class="title">Reset your password</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="password" placeholder="New Password" name="investor_reset_new_pass" required />
                </div>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="password" placeholder="Confirm Password" name="investor_reset_new_pass_con" required />
                </div>
                <input type="submit" value="Reset" name="investor_reset_new_pass_btn" class="btn solid" />
            </form>
        </div>
    </div>
</div>


<?php

if (isset($_POST['investor_reset_new_pass_btn'])) {
    $new_pass = $_POST['investor_reset_new_pass'];
    $new_pass_con = $_POST['investor_reset_new_pass_con'];
    $email = $_SESSION['email'];

    if ($new_pass == $new_pass_con) {
        $query = "SELECT * FROM $investor WHERE investor_email = '$email'";
        $run = mysqli_query($mysqli, $query);

        if (mysqli_num_rows($run) > 0) {
            $update_query = "UPDATE $investor SET investor_pass = '$new_pass' WHERE investor_email = '$email'";
            $run_update = mysqli_query($mysqli, $update_query);

            if ($run_update) {
                echo "<script>alert('Password changed succesfully. Login to continue.'); 
                window.location='/ideable/investor/investor-login.php';</script>";

            } else {
                echo "<script>alert('Something went wrong. Try again Later.');
                window.location='/ideable/investor/investor-login.php';</script>";
            }
        } else {
            echo "<script>alert('Invalid e-mail address');
            window.location='/ideable/investor/investor-login.php';</script>";
        }
    } else {
        echo "<script>alert('Password and confirm password does not match');
        window.location='/ideable/investor/investor-login.php';</script>";
    }

}
?>


<?php
include ADMIN . '/includes/footer.php';
?>