<?php
define('ADMIN', 'C:/xampp/htdocs/ideable');
include ADMIN . '/includes/header.php';
include ADMIN . '/includes/navbar-main.php';
include ADMIN . '/includes/dbConfig.php';
session_start();
?>
<div class="edit-pro-container">
    <div class="form-style-6">
        <h3>Contact Us</h3>
        <form action="#" method="POST">
            <input type="text" name="field1" placeholder="Your Name" />
            <input type="email" name="field2" placeholder="Email Address" />
            <textarea name="field3" placeholder="Type your Message"></textarea>
            <input type="submit" value="Send" name="send" />
        </form>
    </div>
</div>

<?php
if (isset($_POST['send'])) {
    $_SESSION['name'] = $_POST['field1'];
    $_SESSION['email'] = $_POST['field2'];
    $_SESSION['text'] = $_POST['field3'];

    echo "<script>window.location='/ideable/admin/contactus-backend.php';</script>";
}
?>
<?php
include ADMIN . '/includes/footer.php';
?>