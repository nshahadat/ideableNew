<?php
define('ADMIN', 'C:/xampp/htdocs/ideable');
include ADMIN . '/includes/header.php';
include ADMIN . '/includes/navbar-main.php';
include ADMIN . '/includes/dbConfig.php';
?>
<h1 class="founders">Founders</h1>
<div class="cont">
    <div class="box">
        <img src="/ideable/media/arnob.jpg" alt="">
        <h3>Arnob Mallick</h3>
        <div class="visiblecont">
            <p>Front-end Developer</p>
        </div>
        <div class="invisiblecont">
            <p>Graduated from Notre Dame University Bangladesh</p>
        </div>
        <button id="btn">Read More</button>
    </div>

    <div class="box">
        <img src="/ideable/media/shahadat.jpg" alt="">
        <h3>Shahadat Nayeem</h3>
        <div class="visiblecont">
            <p>Back-end Developer</p>
        </div>
        <div class="invisiblecont">
            <p>Graduated from Notre Dame University Bangladesh</p>
        </div>
        <button id="btn">Read More</button>
    </div>
    <div class="box">
        <img src="/ideable/media/safran.jpg" alt="">
        <h3>Hasibul Hassan</h3>
        <div class="visiblecont">
            <p>UI/UX Developer</p>
        </div>
        <div class="invisiblecont">
            <p>Graduated from Notre Dame University Bangladesh</p>
        </div>
        <button id="btn">Read More</button>
    </div>
</div>
<?php
include ADMIN . '/includes/footer.php';
?>