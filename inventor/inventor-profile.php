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
$useridlogin = $data['inventor_id'];

$pass_sql = "SELECT * FROM askpass WHERE inventor_name = '$username'";
$resultpass = mysqli_query($mysqli, $pass_sql) or die(mysqli_error($mysqli));
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
            <p class="inventor-profile"><span>Email:</span>
                <?= $email ?>
            </p>
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

    <div class="prof-secondpart">
        <h3 class="inventor-prof-header">Permission Request</h3>
        <?php while ($datapass = mysqli_fetch_array($resultpass)) {
            $post = $datapass['post_title'];
            $postID = $datapass['post_id'];
            $inv = $datapass['investor_name'];
            $invid = $datapass['investor_id'];
            ?>
            <div class="prof-secondpart1">
                <p class="inventor-profile">
                    <?= $post ?> asked by
                    <?= $inv ?>
                </p>
                <form action="#" method="post">
                    <input type="submit" value="Give Permission" name="perbtn" class="inventor-prof-btn2">
                </form>
            </div>
        <?php } ?>
    </div>
</div>

<?php
if (isset($_POST['perbtn'])) {
    $postid = $postID;
    $investor = $invid;
    $inventor = $useridlogin;

    $sharesql = "INSERT IGNORE INTO sharedpost (investor_id,inventor_id,post_id)
    VALUES('$investor','$inventor','$postid')";
    if ($mysqli->query($sharesql)) {
        echo "okay";
    } elseif (die($mysqli->error)) {
        echo $mysqli->error;
    }

    $del = "DELETE FROM askpass WHERE post_id = '$postid' AND investor_id = '$investor'";
    $mysqli->query($del) or die($mysqli->error);

    echo "<script>
    alert('You just gave permission for this post.');
    window.location = '/ideable/inventor/inventor-profile.php';
    </script>";

}
?>
<?php
include ADMIN . '/includes/footer.php';
?>