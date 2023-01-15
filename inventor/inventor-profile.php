<?php
define('ADMIN', 'C:/xampp/htdocs/ideable');
include ADMIN . '/includes/header.php';
include ADMIN . '/includes/navbar-main.php';
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
<div class="inventor-pro-container">
    <h3 class="inventor-prof-header">Your Information</h3>
    <button class="inventor-prof-btn1"><a href="/ideable/inventor/edit-profile.php" style="color:white">edit your
            information</a></button>
    <p class="inventor-profile"><span>Name:</span>
        <?= $username ?>
    </p>
    <p class="inventor-profile"><span>Email:</span> <?= $email ?> </p>
    <p class="inventor-profile"><span>About:</span>
        <?= $details ?>
    </p>
    <p class="inventor-profile"><span>Password:</span>
        <?= $pass ?>
    </p>
    <h3 class="inventor-prof-header">Your Ideas</h3>
    <button class="inventor-prof-btn2">edit your ideas</button>
    <p class="inventor-profile"><span>1.</span> Idea1</p>
    <p class="inventor-profile"><span>2.</span> Idea2</p>
    <p class="inventor-profile"><span>3.</span> Idea3</p>
</div>
<?php
include ADMIN . '/includes/footer.php';
?>