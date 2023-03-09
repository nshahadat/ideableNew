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
$useridinv = $data['investor_id'];
$email = $data['investor_email'];
$pass = $data['investor_pass'];
$details = $data['investor_details'];

$invest_find_sql = "SELECT * FROM $investment WHERE investor_email = '$user_email'";
$result = mysqli_query($mysqli, $invest_find_sql) or die(mysqli_error($mysqli));

$pass_sql = "SELECT * FROM sharedpost WHERE investor_id = '$useridinv'";
$resultpass = mysqli_query($mysqli, $pass_sql) or die(mysqli_error($mysqli));
?>
<div class="username-btn">
    <button>
        <a href="/ideable/investor/investor-profile.php" style="color:white;">
            <?php echo $username; ?>
        </a>
    </button>
</div>
<a href="/ideable/investor/investor-logout.php">
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
        <a href="/ideable/investor/investor-edit-profile.php" style="color:white">
            <input type="button" value="Edit Your Information" class="inventor-prof-btn1">
        </a>
    </div>
    <div class="prof-secondpart">
        <h3 class="inventor-prof-header">Ideas you've invested on</h3>
        <?php while ($data = mysqli_fetch_array($result)) {
            $post = $data['post_title'];
            $postID = $data['post_id'];
            ?>

            <div class="prof-secondpart1">
                <p class="inventor-profile"><?= $post ?></p>
                <a href="/ideable/investor/singlepost.php?id=<?= $postID ?>"><input type="button" value="Show Idea"
                        class="inventor-prof-btn2"></a>
            </div>
        <?php } ?>
    </div>
    <div class="prof-secondpart">
        <h3 class="inventor-prof-header">Ideas you've been shared with</h3>
        <?php while ($datapass = mysqli_fetch_array($resultpass)) {
            $postIDD = $datapass['post_id'];
            $postsql = "SELECT * FROM post WHERE post_id = '$postIDD'";
            $postresult = $mysqli->query($postsql) or die ($mysqli->error);
            $postdata = mysqli_fetch_array($postresult);
            $posttitle = $postdata['title'];
            ?>

            <div class="prof-secondpart1">
                <p class="inventor-profile"><?= $posttitle ?></p>
                <a href="/ideable/investor/singlepost.php?id=<?= $postIDD ?>"><input type="button" value="Show Idea" class="inventor-prof-btn2"></a>
            </div>
        <?php } ?>
    </div>
</div>
<?php
include ADMIN . '/includes/footer.php';
?>