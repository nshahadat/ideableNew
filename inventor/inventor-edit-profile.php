<?php
define('ADMIN', 'C:/xampp/htdocs/ideable');
include ADMIN . '/includes/header.php';
include ADMIN . '/includes/navbar-main.php';
include ADMIN . '/includes/dbConfig.php';
session_start();
?>

<?php
// $user_email = $_SESSION['email'];
// $user_find_sql = "SELECT * FROM $inventor WHERE inventor_email = '$user_email'";
// $result = mysqli_query($mysqli, $user_find_sql) or die(mysqli_error($mysqli));
// $data = mysqli_fetch_array($result);
// $username = $data['inventor_name'];
// $email = $data['inventor_email'];
// $pass = $data['inventor_pass'];
// $details = $data['inventor_details'];
?>
<div class="edit-pro-container">
<div class="form-style-6">
<h3>Inventor Profile</h3>
<form>
<input type="text" name="field1" placeholder="Your Name" />
<input type="email" name="field2" placeholder="Email Address" />
<input type="password" name="password" placeholder="Password" />
<input type="submit" value="Submit" />
</form>
</div>
</div>
<?php
include ADMIN . '/includes/footer.php';
?>