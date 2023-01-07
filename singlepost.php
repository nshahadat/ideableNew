<?php
define('ADMIN', 'C:/xampp/htdocs/ideable');
include ADMIN . '/includes/header.php';
include ADMIN . '/includes/navbar-main.php';
include ADMIN . '/includes/dbConfig.php';
session_start();
?>

<?php
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
        <input type="hidden" name="get_inventor_id" value="">
        <input type="hidden" name="get_inventor_email" value="">
        <button class="feed-btn1">like</button>
        <button class="feed-btn2">report</button>
        <img src="<?= $_SESSION['post_fetch_thumb_dir'] ?>" class="feed-img " alt="">

        <p> <?= $post_fetch_des ?> </p>

        
        <a href="/ideable/investor/idea-required-files.php" target="_blank">Media Files</a>
        <a href="/ideable/investor/idea-required-files.php" target="_blank">Doc Files</a>
        Theoratically Proved: Practically Proved: Demo: Business Model: Patent: Approximate Time: </p>
        <h6 class="ques">ask any questions before investing (if any)</h6>
        <textarea spellcheck="false" name="toi" placeholder="Type something here..."></textarea>
        <button class="ask-btn" name="ask-btn">ask</button></form>
        <p>or click this button if you are interested in investing</p>
        <form action="/ideable/investor/investor-feed-confirm-email.php" method="post">
            <button class="invest-btn" name="invest-confirm-btn">invest</button>
        </form>
        <p class="terms-policies">before investing read our <a href="#">terms and policies</a></p>
    </section>
</div>

<?php


if (isset($_POST['invest-confirm-btn'])) {
    $_SESSION['send_inventor_email'] = $post_fetch_inventor_email;
    $_SESSION['send_inventor_idea_title'] = $post_fetch_title;
}

?>
<?php
include ADMIN . '/includes/footer.php';
?>