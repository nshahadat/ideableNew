<?php
define('ADMIN', 'C:/xampp/htdocs/ideable');
include ADMIN . '/includes/header.php';
include ADMIN . '/includes/navbar-main.php';
include ADMIN . '/includes/dbConfig.php';
?>
<div class="inventor-pro-container">
    <h3 class="inventor-prof-header">Your Information</h3>
    <button class="inventor-prof-btn1">edit your information</button>
    <p class="inventor-profile"><span>Name:</span> Arnob Mallick</p>
    <p class="inventor-profile"><span>Email:</span> Arnob Mallick</p>
    <p class="inventor-profile"><span>About:</span> Arnob Mallick</p>
    <p class="inventor-profile"><span>Password:</span> Arnob Mallick</p>
    <h3 class="inventor-prof-header">Your Ideas</h3>
    <button class="inventor-prof-btn2">edit your ideas</button>
    <p class="inventor-profile"><span>1.</span> Idea1</p>
    <p class="inventor-profile"><span>2.</span> Idea2</p>
    <p class="inventor-profile"><span>3.</span> Idea3</p>
</div>
<?php
include ADMIN . '/includes/footer.php';
?> 