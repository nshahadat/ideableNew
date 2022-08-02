<?php
define('ADMIN', 'C:/xampp/htdocs/ideable');
include ADMIN . '/includes/header.php';
include ADMIN . '/includes/navbar-main.php';
include ADMIN . '/includes/dbConfig.php';
?>

<div class="container">
    <div class="forms-container">
        <div class="signin-signup">
            <form action="/ideable/inventor/forget-pass-inventor-backend.php" method="post" class="sign-in-form">
            <h2 class="title">Reset your password</h2>
                <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Email Address" name="inventor_reset_email" required />
                </div>
                <input type="submit" value="Login" name="inventor_pass_reset_btn" class="btn solid" />
</div>

<?php
include ADMIN . '/includes/footer.php';
?>