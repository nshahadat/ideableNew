<?php
define('ADMIN', 'C:/xampp/htdocs/ideable');
include ADMIN . '/includes/header.php';
include ADMIN . '/includes/navbar-main.php';
include ADMIN . '/includes/dbConfig.php';
error_reporting(0);
?>
<div class="username-btn"><button>username</button></div>
<div class="logout-btn"><button>logout</button></div>
<div class="linecontainer"></div>
<div class="postlink-btn"><button>Whats On Your Mind</button></div>
<?php
include ADMIN . '/includes/footer.php';
?>