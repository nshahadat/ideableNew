<?php
define('ADMIN', 'C:/xampp/htdocs/ideable');
include ADMIN . '/includes/header.php';
include ADMIN . '/includes/navbar-main.php';
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
$result  = mysqli_query($mysqli, $user_find_sql) or die(mysqli_error($mysqli));
$data = mysqli_fetch_array($result);
$username = $data['inventor_name'];
?>
<div class="username-btn"><button><?php echo $username; ?></button></div>
<a href="inventor-logout.php"><div class="logout-btn"><button>logout</button></div></a>
<div class="linecontainer"></div>
<a href="/ideable/inventor/inventor-post.php"><div class="postlink-btn"><button>Whats On Your Mind</button></div></a>
<?php
include ADMIN . '/includes/footer.php';
?>