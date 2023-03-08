<?php
define('ADMIN', 'C:/xampp/htdocs/ideable');
include ADMIN . '/includes/header.php';
include ADMIN . '/includes/navbar-short.php';
include ADMIN . '/includes/dbConfig.php';
error_reporting(0);
session_start();

// if(!isset($_SESSION['email'])){
//     echo "<script>alert('You have to login first');
//     window.location='/ideable/inventor/inventor-login.php';</script>";
//     die();
// }

$user_email = $_SESSION['email'];
$user_find_sql = "SELECT * FROM $inventor WHERE inventor_email = '$user_email'";
$result = mysqli_query($mysqli, $user_find_sql) or die(mysqli_error($mysqli));
$data = mysqli_fetch_array($result);
$username = $data['inventor_name'];
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
<div class="inventor-feed-container">
<div class="linecontainer"></div>
<a href="/ideable/inventor/inventor-post.php">
    <div class="postlink-btn"><button>Whats On Your Mind</button></div>
</a>
</div>
<?php
include ADMIN . '/includes/footer.php';
?>