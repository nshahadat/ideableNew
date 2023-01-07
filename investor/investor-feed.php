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
$result  = mysqli_query($mysqli, $user_find_sql) or die(mysqli_error($mysqli));
$data = mysqli_fetch_array($result);
$username = $data['investor_name'];

// backend of post management and show 

$post_fetch_sql = "SELECT * FROM $post";
$post_fetch_result  = $mysqli->query($post_fetch_sql);
while ($post_fetch_data = $post_fetch_result->fetch_assoc()) {
    $post_fetch_username = $post_fetch_data['inventor_name'];
    $post_fetch_title = $post_fetch_data['title'];
    $post_fetch_des = $post_fetch_data['description'];
    $post_fetch_tp = $post_fetch_data['theoratically_proven'];
    $post_fetch_pp = $post_fetch_data['practically_proven'];
    $post_fetch_demo = $post_fetch_data['demo'];
    $post_fetch_bm = $post_fetch_data['business_model'];
    $post_fetch_patent = $post_fetch_data['patent'];
    $post_fetch_at = $post_fetch_data['approximate_time'];
    $post_fetch_inventor_id = $post_fetch_data['inventor_id'];
    $post_fetch_inventor_email = $post_fetch_data['inventor_email'];    
    $_SESSION['post_fetch_thumb_dir'] = $post_fetch_data['thumb_files_dir'];
    $_SESSION['post_fetch_doc_dir'] = $post_fetch_data['doc_files_dir'];
    $_SESSION['post_fetch_media_dir'] = $post_fetch_data['media_files_dir'];
    $_SESSION['post_fetch_speech_dir'] = $post_fetch_data['speech_files_dir'];
    ?>

<div class="gal-container">
        <div class="gallerys">
            <div class="gallery">
                <h2 class="gallery-title">Seal</h2>
                <img src="https://images.unsplash.com/photo-1591485423007-765bde4139ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80" alt="">
                <p class="gallery-desc"> <a href="/ideable/singlepost.php">Pinnipeds, commonly known as seals,[a] are a widely distributed and diverse
                    clade of carnivorous, fin-footed, semiaquatic marine mammals. They comprise the extant families
                    Odobenidae (whose only living member is the walrus), Otariidae (the eared seals: sea lions and fur
                    seals), and Phocidae (the earless seals, or true seals).</a></p>
            </div>
            <div class="gallery">
                <h2 class="gallery-title">Lion</h2>
                <img src="https://images.unsplash.com/photo-1534188753412-3e26d0d618d6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" alt="">
                <p class="gallery-desc"><a href="/ideable/singlepost.php">Pinnipeds, commonly known as seals,[a] are a widely distributed and diverse
                    clade of carnivorous, fin-footed, semiaquatic marine mammals. They comprise the extant families
                    Odobenidae (whose only living member is the walrus), Otariidae (the eared seals: sea lions and fur
                    seals), and Phocidae (the earless seals, or true seals).</a></p>
            </div>
            <div class="gallery">
                <h2 class="gallery-title">Hawk</h2>
                <img src="https://images.unsplash.com/photo-1534251369789-5067c8b8602a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" alt="">
                <p class="gallery-desc"><a href="/ideable/singlepost.php">Pinnipeds, commonly known as seals,[a] are a widely distributed and diverse
                    clade of carnivorous, fin-footed, semiaquatic marine mammals. They comprise the extant families
                    Odobenidae (whose only living member is the walrus), Otariidae (the eared seals: sea lions and fur
                    seals), and Phocidae (the earless seals, or true seals).</a></p>
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

<?php
include ADMIN . '/includes/footer.php';
?>