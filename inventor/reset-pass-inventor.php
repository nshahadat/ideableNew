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
            <form action="" method="post" class="sign-in-form">
            <h2 class="title">Reset your password</h2>
                <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="password" placeholder="New Password" name="inventor_reset_new_pass" required />
                </div>
                <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="password" placeholder="Confirm Password" name="inventor_reset_new_pass_con" required />
                </div>
                <input type="submit" value="Login" name="inventor_reset_new_pass_btn" class="btn solid" />
            </form>
        </div>
    </div>
</div>


<?php

if(isset($_POST['inventor_reset_new_pass_btn'])){
    $new_pass = $_POST['inventor_reset_new_pass'];
    $new_pass_con = $_POST['inventor_reset_new_pass_con'];
    $email = $_SESSION['email'];

    if($new_pass == $new_pass_con){
        $query = "SELECT * FROM $inventor WHERE inventor_email = '$email'";
        $run = mysqli_query($mysqli, $query);

        echo $new_pass;
        echo $email;

        if(mysqli_num_rows($run)>0){
            $update_query = "UPDATE $inventor SET inventor_pass = '$new_pass' WHERE inventor_email = '$email'";
            $run_update = mysqli_query($mysqli, $query);

            if($run_update){
                echo "<script>alert('Password changed succesfully. Login to continue.')</script>";
                header('Location:/ideable/inventor/inventor-login.php');

            }else{
                echo "<script>alert('Something went wrong. Try again Later.')</script>";
                header('Location:/ideable/inventor/inventor-login.php');
            }
        }else{
            echo "<script>alert('Invalid e-mail address')</script>";
            header('Location:/ideable/inventor/inventor-login.php');
        }
    }else{
        echo "<script>alert('Password and confirm password does not match')</script>";
        header('Location:/ideable/inventor/inventor-login.php');
    }

}else{
    echo "<script>alert('Something went wrong.')</script>";
    header('Location:/ideable/test.php');
}


echo $_SESSION['email'];
?>


<?php
include ADMIN . '/includes/footer.php';
?>