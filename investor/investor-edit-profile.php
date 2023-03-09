<?php
define('ADMIN', 'C:/xampp/htdocs/ideable');
include ADMIN . '/includes/header.php';
include ADMIN . '/includes/navbar-main.php';
include ADMIN . '/includes/dbConfig.php';
session_start();
?>

<?php
$user_email = $_SESSION['email'];
$user_find_sql = "SELECT * FROM $investor WHERE investor_email = '$user_email'";
$result = mysqli_query($mysqli, $user_find_sql) or die(mysqli_error($mysqli));
$data = mysqli_fetch_array($result);
$username = $data['investor_name'];
$email = $data['investor_email'];
$pass = $data['investor_pass'];
$details = $data['investor_details'];
?>
<div class="username-btn">
    <button>
        <a href="/ideable/investor/investor-profile.php" style="color:white;">
            <?php echo $username; ?>
        </a>
    </button>
</div>
<a href="investor-logout.php">
    <div class="logout-btn"><button>logout</button></div>
</a>
<div class="edit-pro-container">
    <div class="form-style-6">
        <h3>investor Profile</h3>
        <form action="#" method="POST">
            <input type="text" name="newusername" placeholder="Your Name" required />
            <input type="password" name="newuserpass" placeholder="Password" required />
            <input type="submit" value="Submit" name="updatebtn" />
        </form>
    </div>
</div>

<?php
if (isset($_POST['updatebtn'])) {
    $newusername = $_POST['newusername'];
    $newuserpass = $_POST['newuserpass'];

    $update_sql = "UPDATE $investor SET investor_name = '$newusername', investor_pass = '$newuserpass'";
    $mysqli->query($update_sql) or die($mysqli->error);

    echo "<script>alert('Profile updated');
    window.location='/ideable/investor/investor-profile.php';</script>";
}
?>
<?php
include ADMIN . '/includes/footer.php';
?>