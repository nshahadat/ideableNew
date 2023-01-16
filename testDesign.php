<?php
define('ADMIN', 'C:/xampp/htdocs/ideable');
include ADMIN . '/includes/header.php';
include ADMIN . '/includes/navbar-main.php';
include ADMIN . '/includes/dbConfig.php';
error_reporting(0);
session_start();
?><div class="username-btn"><button>
<?php echo $username; ?>
</button></div>
<a href="investor-logout.php">
<div class="logout-btn"><button>logout</button></div>
</a>
<div class="postContainer">
    <div class="postBox">
    <form action="#" method="post">
        <div class="postName">
            <p>User has an idea about Ruti</p>
            <input type="submit" value="Report" class="postInputReport">
        </div>
        </form>
        <div class="postDetails">
            <div class="postImage">
                <img src="https://images.unsplash.com/photo-1661961112951-f2bfd1f253ce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=872&q=80"
                    alt="">
            </div>
            <div class="postInfo">
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
            </b>| Related Projects: <b><?= $post_fetch_rp; ?></b> | Patent: <b>
                <?= $post_fetch_patent; ?>
            </b> | Approximate Time: <b>
                <?= $post_fetch_at; ?>
            </b> |
        </p>
            </div>
        </div>
        <div class="askComment">
            <p>ask any questions before investing, (if any)</p>
            <form action="" style="flex-direction:row !important">
            <textarea spellcheck="false" name="toi" class="cmnt-box" placeholder="Type something here..."></textarea>
                <input type="submit" value="Comment" class="postInputReport">
            </form>
        </div>
        <p class="comnt"><span>Arnob:</span>asdasdasdasdaskkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk</p>
        <p class="comnt"><span>Arnob:</span>asdasdasdasdas</p>
        <p class="comnt"><span>Arnob:</span>asdasdasdasdas</p>
        <p class="comnt"><span>Arnob:</span>asdasdasdasdas</p>
        <div class="actionsofpost">
            <div class="reviewthepost">
                <p>If you want review from experts, then contact</p>
                <input type="submit" value="Review" class="postInputReport">
            </div>
            <div class="investonpost">
                <p>If you want to invest on this idea</p>
                <input type="submit" value="Invest" class="postInputReport">
            </div>
            <p class="terms-policies">before investing read our <a href="#">terms and policies</a></p>
        </div>
    </div>
</div>
<?php
include ADMIN . '/includes/footer.php';
?>