<?php
define('ADMIN', 'C:/xampp/htdocs/ideable');
include ADMIN . '/includes/header.php';
include ADMIN . '/includes/navbar-main.php';
include ADMIN . '/includes/dbConfig.php';
error_reporting(0);
?>

<?php
// Login Backend

if (isset($_POST['investor_signin'])) {
  $u_signin_email = mysqli_real_escape_string($mysqli, $_POST['u_signin_email']);
  $u_signin_pass  = mysqli_real_escape_string($mysqli, $_POST['u_signin_pass']);

  $sql = "SELECT * FROM $investor WHERE investor_email = '$u_signin_email' AND investor_pass = '$u_signin_pass'";

  $result  = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
  $numrows = mysqli_num_rows($result);

  if ($numrows == 0) {
    echo "<script>alert('Wrong email or password')</script>";
  } else {
      session_start();
      $_SESSION['email'] = $u_signin_email;
      header("Location: investor-feed.php");

  }

}
?>

  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="" method="post" class="sign-in-form">
          <h2 class="title"> investor Sign in</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Email Address" name="u_signin_email" value="<?php echo $_POST['u_signin_email']; ?>" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="u_signin_pass" value="<?php echo $_POST['u_signin_pass']; ?>" required />
          </div>
          <input type="submit" value="Login" name="investor_signin" class="btn solid" />
          <p style="display: flex;justify-content: center;align-items: center;margin-top: 20px;"><a href="forget-pass-investor.php" style="color: #4590ef;">Forgot Password?</a></p>
        </form>
        <form action="" class="sign-up-form" method="post">
          <h2 class="title"> investor Sign up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Full Name" name="u_signup_name" value="<?php echo $_POST["u_signup_name"]; ?>" required />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email Address" name="u_signup_email" value="<?php echo $_POST["u_signup_email"]; ?>" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="u_signup_password" value="<?php echo $_POST["u_signup_password"]; ?>" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Confirm Password" name="u_signup_cpassword" value="<?php echo $_POST["u_signup_cpassword"]; ?>" required />
          </div>
          <input type="submit" class="btn" name="investor_signup" value="Sign up" />
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here ?</h3>
          <p>
            Register now and start experiencing your new journey with us!
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Sign up
          </button>
        </div>
        <img src="img/log.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>One of us ?</h3>
          <p>
          What are you waiting for? Login now!
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Sign in
          </button>
        </div>
        <img src="img/register.svg" class="image" alt="" />
      </div>
    </div>
  </div>


<?php

// Registration Backend

if (isset($_POST['investor_signup'])) {

  $u_signup_name  = mysqli_real_escape_string($mysqli, $_POST['u_signup_name']);
  $u_signup_password  = mysqli_real_escape_string($mysqli, $_POST['u_signup_password']);
  $u_signup_cpassword = mysqli_real_escape_string($mysqli, $_POST['u_signup_cpassword']);
  $u_signup_email     = mysqli_real_escape_string($mysqli, $_POST['u_signup_email']);

  $email_sql = "SELECT * FROM $investor WHERE investor_email = '$u_signup_email'";

  $result  = mysqli_query($mysqli, $email_sql) or die(mysqli_error($mysqli));
  $numrows = mysqli_num_rows($result);

  if($numrows==0){
      if ($u_signup_password  == $u_signup_cpassword) {

          $sql = "INSERT IGNORE INTO $investor (investor_name,investor_pass,investor_email) VALUES('$u_signup_name','$u_signup_password','$u_signup_email')";
          $mysqli->query($sql) or die($mysqli->error);
          header("Location: investor-login.php");
          echo "<script>alert('Registration is completed. Now login to continue.')</script>";
      } else {
      echo "<script>alert('Password and Confirm Password is not matched.')</script>";
      }
  }
  else{
      echo "<script>alert('This email is already in use. Try a different one.');
      window.location='/ideable/investor/investor-login.php';</script>";
  }


}
?>


<?php
include ADMIN . '/includes/footer.php';
?> 