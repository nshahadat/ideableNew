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

$comment_fetch_sql = "SELECT * FROM $comment WHERE c_post_id = $post_id";
$comment_fetch_result = $mysqli->query($comment_fetch_sql);

$post_fetch_username = $post_fetch_data['inventor_name'];
$post_fetch_id = $post_fetch_data['post_id'];
$post_fetch_title = $post_fetch_data['title'];
$post_fetch_des = $post_fetch_data['description'];
$post_fetch_tp = $post_fetch_data['theoratically_proven'];
$post_fetch_pp = $post_fetch_data['practically_proven'];
$post_fetch_demo = $post_fetch_data['demo'];
$post_fetch_rp = $post_fetch_data['related_projects'];
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
<a href="/ideable/investor/investor-profile.php">
    <div class="username-btn"><button>
            <?php echo $username; ?>
        </button></div>
</a>
<a href="/ideable/investor/investor-logout.php">
    <div class="logout-btn"><button>logout</button></div>
</a>
<div class="postContainer">
    <div class="postBox">
        <form action="#" method="post">
            <div class="postName">
                <p>
                    <span style="font-weight:bold; font-size: larger;">
                        <?= $post_fetch_username ?>
                    </span> has an idea of <span style="font-weight:bold; font-size: larger;"><?= $post_fetch_title ?></span>
                </p>
                <input type="submit" value="Report" class="postInputReport" name="reportonpost">
            </div>
        </form>
        <div class="postDetails">
            <div class="postImage">
                <img src="<?= $_SESSION['post_fetch_thumb_dir'] ?>" alt="">
            </div>
            <div class="postInfo">
                <p>
                    <?= $post_fetch_des ?>
                </p>
                <a href="/ideable/investor/idea-required-files.php" target="_blank"><i>Media Files</i></a>
                <a href="/ideable/investor/idea-required-files.php" target="_blank"><i>Doc Files</i></a>
                <p>| Theoratically Proved: <b>
                        <?= $post_fetch_tp; ?>
                    </b>| Practically Proved: <b>
                        <?= $post_fetch_pp; ?>
                    </b> |
                    Demo: <b>
                        <?= $post_fetch_demo; ?>
                    </b>| Related Projects: <b>
                        <?= $post_fetch_rp; ?>
                    </b> | Patent: <b>
                        <?= $post_fetch_patent; ?>
                    </b> | Approximate Time: <b>
                        <?= $post_fetch_at; ?>
                    </b> |
                </p>
            </div>
        </div>
        <div class="askComment">
            <p>ask any questions before investing, (if any)</p>
            <form action="#" method="POST" style="flex-direction:row !important">
                <textarea spellcheck="false" name="commentText" class="cmnt-box"
                    placeholder="Type something here..."></textarea>
                <input type="submit" value="Comment" class="postInputReport" name="askonidea">
            </form>
        </div>
        <?php while ($comment_fetch_data = $comment_fetch_result->fetch_assoc()) {
            $comment_fetch_username = $comment_fetch_data['c_user_name'];
            $comment_fetch_text = $comment_fetch_data['c_text']; ?>
            <p class="comnt"><span><?= $comment_fetch_username ?> :</span>
                <?= $comment_fetch_text ?>
            </p>
        <?php } ?>
        <div class="actionsofpost">
            <div class="reviewthepost">
                <p>If you want review from experts, then contact</p>
                <form action="#" method="POST" style="flex-direction:row !important">
                    <input type="submit" value="Review" class="postInputReport" name="reviewonidea">
                    <input type="hidden" name="get_inventor_email" value="<?= $post_fetch_inventor_email ?>">
                </form>
            </div>
            <div class="investonpost">
                <p>If you want to invest on this idea</p>
                <form action="#" method="POST" style="flex-direction:row !important">
                    <input type="submit" value="Invest" class="postInputReport" name="investonidea">
                    <input type="hidden" name="get_inventor_email" value="<?= $post_fetch_inventor_email ?>" </div>
                </form>
            </div>
            <p class="terms-policies">Before investing read our <a href="#">terms and policies</a></p>
        </div>
    </div>

    <?php

    if (isset($_POST['reportonpost'])) {
        $check_rev_sql = "SELECT * FROM $post WHERE post_id = '$post_fetch_id'";
        $result = mysqli_query($mysqli, $check_rev_sql) or die(mysqli_error($mysqli));
        $data = mysqli_fetch_array($result);

        $report_count = $data['report'];
        $new_report_count = $report_count + 1;
        $updatesql = "UPDATE $post SET report = '$new_report_count' WHERE post_id = '$post_fetch_id' ";
        $mysqli->query($updatesql) or die($mysqli->error);
    }

    if (isset($_POST['investonidea'])) {
        $_SESSION['send_inventor_email'] = $post_fetch_inventor_email;
        $_SESSION['send_inventor_idea_title'] = $post_fetch_title;

        $check_sql = "SELECT * FROM $investment WHERE post_id = '$post_fetch_id' AND investor_email = '$user_email'";

        $result = mysqli_query($mysqli, $check_sql) or die(mysqli_error($mysqli));
        $numrows = mysqli_num_rows($result);

        if ($numrows == 0) {

            $sql = "INSERT IGNORE INTO $investment (post_id,investor_email) VALUES('$post_fetch_id','$user_email')";
            $mysqli->query($sql) or die($mysqli->error);

            echo "<script>alert('We have sent an email to the inventor. Please wait until he contacts you');
        window.location='/ideable/investor/investor-feed.php';</script>";
        } else {
            echo "<script>alert('You have already invested in this idea.');
        window.location='/ideable/investor/investor-feed.php';</script>";
        }

    }
    if (isset($_POST['reviewonidea'])) {
        $_SESSION['send_inventor_idea_title'] = $post_fetch_title;
        $_SESSION['send_investor_email'] = $user_email;

        echo "<script>alert('Choose company for reviewing. Please remind that ideable has no controls over the reviewing system. It totally depends on you and the company youre interreacting with.');
        window.location='/ideable/expertise.php';</script>";
    }

    if (isset($_POST['askonidea'])) {

        $commentText = $_POST['commentText'];
        $usernameforcomment = $_SESSION['username'];

        $comment_sql = "INSERT IGNORE INTO $comment (c_post_id,c_user_name,c_text) VALUES('$post_fetch_id','$usernameforcomment', '$commentText')";
        $mysqli->query($comment_sql) or die($mysqli->error);

        echo "<script>alert('You just commented on this idea.');
        window.location='/ideable/investor/investor-feed.php';</script>";
    }

    ?>

    <?php
    include ADMIN . '/includes/footer.php';
    ?>