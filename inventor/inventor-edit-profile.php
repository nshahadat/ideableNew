<?php
define('ADMIN', 'C:/xampp/htdocs/ideable');
include ADMIN . '/includes/header.php';
include ADMIN . '/includes/navbar-short.php';
include ADMIN . '/includes/dbConfig.php';
session_start();
?>

<?php
$user_email = $_SESSION['email'];
$user_find_sql = "SELECT * FROM $inventor WHERE inventor_email = '$user_email'";
$result = mysqli_query($mysqli, $user_find_sql) or die(mysqli_error($mysqli));
$data = mysqli_fetch_array($result);
$username = $data['inventor_name'];
$email = $data['inventor_email'];
$pass = $data['inventor_pass'];
$details = $data['inventor_details'];
?>
<div class="username-btn">
    <button>
        <a href="/ideable/inventor/inventor-profile.php" style="color:white;">
            <?php echo $username; ?>
        </a>
    </button>
</div>
<a href="inventor-logout.php">
    <div class="logout-btn"><button>logout</button></div>
</a>
<div class="edit-pro-container">
    <div class="form-style-6">
        <h3>Inventor Profile</h3>
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

    $update_sql = "UPDATE $inventor SET inventor_name = '$newusername', inventor_pass = '$newuserpass'";
    $mysqli->query($update_sql) or die($mysqli->error);

    echo "<script>alert('Profile updated');
    window.location='/ideable/inventor/inventor-profile.php';</script>";
}
?>
<?php
include ADMIN . '/includes/footer.php';
?>