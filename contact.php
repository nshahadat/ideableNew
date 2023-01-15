
<?php
define('ADMIN', 'C:/xampp/htdocs/ideable');
include ADMIN . '/includes/header.php';
include ADMIN . '/includes/navbar-main.php';
include ADMIN . '/includes/dbConfig.php';
?><div class="edit-pro-container">
<div class="form-style-6">
<h3>Contact Us</h3>
<form>
<input type="text" name="field1" placeholder="Your Name" />
<input type="email" name="field2" placeholder="Email Address" />
<textarea name="field3" placeholder="Type your Message"></textarea>
<input type="submit" value="Send" />
</form>
</div>
</div>
<?php
include ADMIN . '/includes/footer.php';
?>