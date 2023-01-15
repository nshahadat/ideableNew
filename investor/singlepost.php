<?php
define('ADMIN', 'C:/xampp/htdocs/ideable');
include ADMIN . '/includes/header.php';
include ADMIN . '/includes/navbar-main.php';
include ADMIN . '/includes/dbConfig.php';
error_reporting(0);
session_start();
?>

<?php
$user_email = $_SESSION['email'];
$post_id = $_GET['id'];

$post_fetch_sql = "SELECT * FROM $post WHERE post_id = $post_id";
$post_fetch_result = $mysqli->query($post_fetch_sql);
$post_fetch_data = $post_fetch_result->fetch_assoc();

$post_fetch_username = $post_fetch_data['inventor_name'];
$post_fetch_id = $post_fetch_data['post_id'];
$post_fetch_title = $post_fetch_data['title'];
$post_fetch_des = $post_fetch_data['description'];
$post_fetch_tp = $post_fetch_data['theoratically_proven'];
$post_fetch_pp = $post_fetch_data['practically_proven'];
$post_fetch_demo = $post_fetch_data['demo'];
$post_fetch_bm = $post_fetch_data['business_model'];
$post_fetch_patent = $post_fetch_data['patent'];
$post_fetch_at = $post_fetch_data['approximate_time'];
$post_fetch_inventor_id = $post_fetch_data['inventor_id'];
$post_fetch_inventor_email = $post_fetch_data['inventor_email'];
$_SESSION['post_fetch_thumb_dir'] = $post_fetch_data['thumb_files_dir'];
$_SESSION['post_fetch_doc_dir'] = $post_fetch_data['doc_files_dir'];
$_SESSION['post_fetch_media_dir'] = $post_fetch_data['media_files_dir'];
$_SESSION['post_fetch_speech_dir'] = $post_fetch_data['speech_files_dir'];
$_SESSION['inventor_name'] = $post_fetch_data['inventor_name'];
$_SESSION['title'] = $post_fetch_data['title'];
?>
<div class="feed-container">
    <section class="feed-left">
        <h1 class="userheader">
            <?= $post_fetch_username ?> has an idea of <?= $post_fetch_title ?>
        </h1>
        <form action="#" method="post">
            <input type="submit" value="report" class="feed-btn2" name="feed-btn2">
        </form>
        <img src="<?= $_SESSION['post_fetch_thumb_dir'] ?>" class="feed-img " alt="">
        <p>
            <?= $post_fetch_des ?>
        </p>
        <a href="/ideable/investor/idea-required-files.php" target="_blank"><i>Media Files</i></a>
        <a href="/ideable/investor/idea-required-files.php" target="_blank"><i>Doc Files</i></a>
        <p>| Theoratically Proved: <b>
                <?= $post_fetch_tp; ?>
            </b>| Practically Proved: <b><?= $post_fetch_pp; ?></b> |
            Demo: <b>
                <?= $post_fetch_demo; ?>
            </b>| Business Model: <b><?= $post_fetch_bm; ?></b> | Patent: <b>
                <?= $post_fetch_patent; ?>
            </b> | Approximate Time: <b>
                <?= $post_fetch_at; ?>
            </b> |
        </p>
        <h6 class="ques">ask any questions before investing (if any)</h6>
        <textarea spellcheck="false" name="toi" placeholder="Type something here..."></textarea>
        <input type="submit" value="ask" class="ask-btn" name="ask-btn">
        <div class="single-post1">
            <p>or click this submit if you are interested in investing</p>
            <form action="#" method="post">
                <input type="submit" value="invest" class="invest-btn" name="invest-confirm-btn">
                <input type="hidden" name="get_inventor_email" value="<?= $post_fetch_inventor_email ?>">
            </form>
        </div>
        <div class="single-post2">
            <p>If You Want Review On This Idea Click This </p>
            <form action="#" method="post">
                <input type="submit" value="review" class="review-btn" name="review-btn">
                <input type="hidden" name="get_inventor_email" value="<?= $post_fetch_inventor_email ?>">
            </form>
        </div>
        <p class="terms-policies">before investing read our <a href="#">terms and policies</a></p>
    </section>
</div>

<?php

if (isset($_POST['feed-btn2'])) {
    $check_rev_sql = "SELECT * FROM $post WHERE post_id = '$post_fetch_id'";
    $result = mysqli_query($mysqli, $check_rev_sql) or die(mysqli_error($mysqli));
    $data = mysqli_fetch_array($result);

    $report_count = $data['report'];
    echo $report_count;
    $new_report_count = $report_count + 1;
    echo $new_report_count;
    $updatesql = "UPDATE $post SET report = '$new_report_count' WHERE post_id = '$post_fetch_id' ";
    $mysqli->query($updatesql) or die($mysqli->error);
}

if (isset($_POST['invest-confirm-btn'])) {
    $_SESSION['send_inventor_email'] = $post_fetch_inventor_email;
    $_SESSION['send_inventor_idea_title'] = $post_fetch_title;

    $check_sql = "SELECT * FROM $investment WHERE post_id = '$post_fetch_id' AND investor_email = '$user_email'";

    $result = mysqli_query($mysqli, $check_sql) or die(mysqli_error($mysqli));
    $numrows = mysqli_num_rows($result);

    if ($numrows = 0) {

        $sql = "INSERT IGNORE INTO $investment (post_id,investor_email) VALUES('$post_fetch_id','$user_email')";
        $mysqli->query($sql) or die($mysqli->error);

        echo "<script>alert('We have sent an email to the inventor. Please wait until he contacts you');
        window.location='/ideable/investor/investor-feed.php';</script>";
    } else {
        echo "<script>alert('You have already invested in this idea.');
        window.location='/ideable/investor/investor-feed.php';</script>";
    }

}
if (isset($_POST['review-btn'])) {
    $_SESSION['send_inventor_idea_title'] = $post_fetch_title;
    $_SESSION['send_investor_email'] = $user_email;

    echo "<script>alert('Choose company for reviewing. Please remind that ideable has no controls over the reviewing system. It totally depends on you and the company youre interreacting with.');
    window.location='/ideable/expertise.php';</script>";
}

?>
<?php
include ADMIN . '/includes/footer.php';
?>