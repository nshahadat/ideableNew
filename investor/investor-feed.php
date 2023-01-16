<?php
define('ADMIN', 'C:/xampp/htdocs/ideable');
include ADMIN . '/includes/header.php';
include ADMIN . '/includes/navbar-main.php';
include ADMIN . '/includes/dbConfig.php';
error_reporting(0);
session_start();

// if(!isset($_SESSION['email'])){
//     echo "<script>alert('You have to login first');
//     window.location='/ideable/inventor/inventor-login.php';</script>";
//     die();
// }

$user_email = $_SESSION['email'];
$user_find_sql = "SELECT * FROM $investor WHERE investor_email = '$user_email'";
$result = mysqli_query($mysqli, $user_find_sql) or die(mysqli_error($mysqli));
$data = mysqli_fetch_array($result);
$username = $data['investor_name'];
$_SESSION['username'] = $data['investor_name'];

// backend of post management and show 

$post_fetch_sql = "SELECT * FROM $post";
$post_fetch_result = $mysqli->query($post_fetch_sql);
?>
<a href="/ideable/investor/investor-profile.php">
    <div class="username-btn"><button>
            <?php echo $username; ?>
        </button></div>
</a>
<a href="/ideable/investor/investor-logout.php">
    <div class="logout-btn"><button>logout</button></div>
</a>
<div class="gallery-main-container">

    <?php

    while ($post_fetch_data = $post_fetch_result->fetch_assoc()) {
        $post_fetch_username = $post_fetch_data['inventor_name'];
        $post_fetch_id = $post_fetch_data['post_id'];
        $post_fetch_title = $post_fetch_data['title'];
        $post_fetch_des = $post_fetch_data['description'];
        ?>
        <div class="gal-container">
            <div class="gallerys">
                <div class="gallery">
                    <h2 class="gallery-title">
                        <?php echo $post_fetch_title ?>
                    </h2>
                    <img src="<?php echo $post_fetch_data['thumb_files_dir']; ?>" alt="">
                    <a href="/ideable/investor/singlepost.php?id=<?= $post_fetch_id ?>" style="color:black">
                        <p class="gallery-desc">
                            <?php echo $post_fetch_des; ?>
                        </p>
                    </a>
                </div>
            </div>
        </div>



        <?php
    }

    if (isset($_POST['invest-confirm-btn'])) {
        $_SESSION['send_inventor_email'] = $post_fetch_inventor_email;
        $_SESSION['send_inventor_idea_title'] = $post_fetch_title;
    }

    ?>
</div>

<?php
include ADMIN . '/includes/footer.php';
?>