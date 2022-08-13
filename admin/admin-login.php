<?php
define('ADMIN', 'C:/xampp/htdocs/ideable');
include ADMIN . '/includes/header.php';
include ADMIN . '/includes/navbar-main.php';
include ADMIN . '/includes/dbConfig.php';
error_reporting(0);
?>

<?php
// Login Backend

if (isset($_POST['admin_signin'])) {
$u_signin_email = mysqli_real_escape_string($mysqli, $_POST['u_signin_email']);
$u_signin_pass  = mysqli_real_escape_string($mysqli, $_POST['u_signin_pass']);

$sql = "SELECT * FROM $admin WHERE admin_email = '$u_signin_email' AND admin_pass = '$u_signin_pass'";

$result  = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
$numrows = mysqli_num_rows($result);

if ($numrows == 0) {
echo "<script>alert('Wrong email or password')</script>";
} else {
    session_start();
    $_SESSION['email'] = $u_signin_email;
    header("Location: admin-review.php");
}

}
?>

<div class="container">
    <div class="forms-container">
        <div class="signin-signup">
            <form action="" method="post" class="sign-in-form">
            <h2 class="title"> Admin Sign in</h2>
            <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Email Address" name="u_signin_email" value="<?php echo $_POST['u_signin_email']; ?>" required />
            </div>
            <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="u_signin_pass" value="<?php echo $_POST['u_signin_pass']; ?>" required />
            </div>
            <input type="submit" value="Login" name="admin_signin" class="btn solid" />
            <p style="display: flex;justify-content: center;align-items: center;margin-top: 20px;"><a href="forget-pass-investor.php" style="color: #4590ef;">Forgot Password?</a></p>
            </form>
        </div>
    </div>
</div>
