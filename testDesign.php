<?php
define('ADMIN', 'C:/xampp/htdocs/ideable');
include ADMIN . '/includes/header.php';
include ADMIN . '/includes/navbar-main.php';
include ADMIN . '/includes/dbConfig.php';
error_reporting(0);
session_start();
?>
<div class="postContainer">
    <div class="postBox">
        <div class="postName">
            <p>User has an idea about Ruti</p>
            <input type="submit" value="Report" class="postInputReport">
        </div>
        <div class="postDetails">
            <div class="postImage">
                <img src="https://images.unsplash.com/photo-1661961112951-f2bfd1f253ce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=872&q=80"
                    alt="">
            </div>
            <div class="postInfo">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum optio alias, hic ipsum libero deserunt
                    mollitia necessitatibus, molestias iste recusandae sapiente nisi doloremque ab, earum dignissimos
                    dolorem fugiat perspiciatis voluptas.</p>
            </div>
        </div>
        <div class="askComment">
            <p>ask any questions before investing, (if any)</p>
            <form action="" style="flex-direction:row !important">
                <input type="text" placeholder="Comment">
                <input type="submit" value="Comment" class="postInputReport">
            </form>
        </div>
        <div class="showComment">
            <div class="commentBox">
                <p class="usernameofcomment">
                    <b>Arnob</b>
                </p>
                <p class="commenttext">
                    Mindich Blowing
                </p>

                <p class="usernameofcomment">
                    <b>Arnob</b>
                </p>
                <p class="commenttext">
                    Mindich Blowing
                </p>

                <p class="usernameofcomment">
                    <b>Arnob</b>
                </p>
                <p class="commenttext">
                    Mindich Blowing
                </p>
            </div>
        </div>
        <div class="actionsofpost">
            <div class="reviewthepost">
                <p>If you want review from experts, then contact</p>
                <input type="submit" value="Review" class="postInputReport">
            </div>
            <div class="investonpost">
                <p>If you want to invest on this idea</p>
                <input type="submit" value="Invest" class="postInputReport">
            </div>
            <div class="termsWarning">
                <p>Before investing, please read our terms and policies</p>
            </div>
        </div>
    </div>
</div>
<?php
include ADMIN . '/includes/footer.php';
?>