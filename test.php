<?php
define('ADMIN', 'C:/xampp/htdocs/ideable');
include ADMIN . '/includes/header.php';
include ADMIN . '/includes/navbar-main.php';
include ADMIN . '/includes/dbConfig.php';
session_start();
error_reporting(0);
$test = 'testing';
?>


<?php
include ADMIN . '/includes/footer.php';
?>