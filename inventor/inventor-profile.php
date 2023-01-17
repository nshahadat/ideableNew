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
<div class="inventor-pro-container">

    <h3 class="inventor-prof-header">Your Information</h3>
    <div class="prof-frstpart">
        <div class="prof-frstpart1">
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
        </div>
        <a href="/ideable/inventor/inventor-edit-profile.php" style="color:white">
            <input type="button" value="Edit Your Information" class="inventor-prof-btn1">
        </a>
    </div>
    <div class="prof-secondpart">
        <h3 class="inventor-prof-header">Your Ideas</h3>
        <div class="prof-secondpart1">
            <p class="inventor-profile"><span>1.</span> Idea1</p>
            <input type="button" value="Edit Your Idea" class="inventor-prof-btn2">
        </div>
        <div class="prof-secondpart1">
            <p class="inventor-profile"><span>2.</span> Idea2</p>
            <input type="button" value="Edit Your Idea" class="inventor-prof-btn2">
        </div>
        <div class="prof-secondpart1">
            <p class="inventor-profile"><span>3.</span> Idea3</p>
            <input type="button" value="Edit Your Idea" class="inventor-prof-btn2">
        </div>
    </div>
</div>
<?php
include ADMIN . '/includes/footer.php';
?>