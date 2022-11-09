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

<div class="username-btn"><button><?php echo $username; ?></button></div>
<a href="investor-logout.php"><div class="logout-btn"><button>logout</button></div></a>
<form action="#" method="post">
<div class="feed-container">
<section class="feed-left">
    <h1 class="userheader"> <?php echo $post_fetch_username; ?> has an idea of <?php echo $post_fetch_title; ?></h1>
    <input type="hidden" name="get_inventor_id" value="<?php echo $post_fetch_inventor_id ?>">
    <input type="hidden" name="get_inventor_email" value="<?php echo $post_fetch_inventor_email ?>">
    <button class="feed-btn1">like</button>
    <button class="feed-btn2">report</button>
    <img src="<?php echo $post_fetch_data['thumb_files_dir']; ?>" class="feed-img " alt="">
    <h1 style="color: #2E5261">
    <?php echo $post_fetch_title; ?>
    </h1>

    <p>
    <?php echo $post_fetch_des; ?>
        <span id="points">...</span>

        <!-- Define the text that would be 
            hidden by default and only shown 
            when clicked on the button -->
        <!-- <span id="moreText"> This necessity was
            as personal to me as it was universal.
            This need combined with my passion for
            teaching resulted in GeeksforGeeks as
            we know today. My message to you, in
            our inaugural edition of Geeks Digest,
            would be that if you are looking for
            a problem to work on, you don’t need
            to look very far for it. All you should
            do is to look around yourself.
            This necessity was
            as personal to me as it was universal.
            This need combined with my passion for
            teaching resulted in GeeksforGeeks as
            we know today. My message to you, in
            our inaugural edition of Geeks Digest,
            would be that if you are looking for
            a problem to work on, you don’t need
            to look very far for it. All you should
            do is to look around yourself. -->
        </span>
    </p>

    <!-- Trigger toggleText() when the 
        button is clicked -->
    <button onclick="toggleText()" id="textButton">
        Show More
    </button>

    <script>
        function toggleText() {

            // Get all the elements from the page
            var points = 
                document.getElementById("points");

            var showMoreText =
                document.getElementById("moreText");

            var buttonText =
                document.getElementById("textButton");

            // If the display property of the dots 
            // to be displayed is already set to 
            // 'none' (that is hidden) then this 
            // section of code triggers
            if (points.style.display === "none") {

                // Hide the text between the span
                // elements
                showMoreText.style.display = "none";

                // Show the dots after the text
                points.style.display = "inline";

                // Change the text on button to 
                // 'Show More'
                buttonText.innerHTML = "Show More";
            }

            // If the hidden portion is revealed,
            // we will change it back to be hidden
            else {

                // Show the text between the
                // span elements
                showMoreText.style.display = "inline";  
                // Hide the dots after the text
                points.style.display = "none";

                // Change the text on button
                // to 'Show Less'
                buttonText.innerHTML = "Show Less";
            }
        }
    </script>
    <a href="/ideable/investor/idea-required-files.php" target="_blank">Media Files</a>
    <a href="/ideable/investor/idea-required-files.php" target="_blank">Doc Files</a>
    <p >Theoratically Proved: <?php echo $post_fetch_tp; ?>; Practically Proved: <?php echo $post_fetch_pp; ?>; Demo: <?php echo $post_fetch_demo; ?>; Business Model: <?php echo $post_fetch_bm; ?>; Patent: <?php echo $post_fetch_patent; ?>; Approximate Time: <?php echo $post_fetch_at; ?></p>
    
    <h6 class ="ques">ask any questions before investing (if any)</h6>
    <textarea spellcheck="false" name="toi" placeholder="Type something here..."></textarea>
                <script>
                const textarea = document.querySelector("textarea");
                textarea.addEventListener("keyup", e =>{
                    textarea.style.height = "63px";
                    let scHeight = e.target.scrollHeight;
                    textarea.style.height = `${scHeight}px`;
                });
                </script> 
    <button class="ask-btn" name = "ask-btn">ask</button></form>
    <p>or click this button if you are interested in investing</p>
    <form action="/ideable/investor/investor-feed-confirm-email.php" method="post">
        <button class="invest-btn" name="invest-confirm-btn">invest</button>
        <input type="hidden" name="get_inventor_email" value="<?php echo $post_fetch_inventor_email ?>">
    </form>
    <p class="terms-policies">before investing read our <a href="#">terms and policies</a></p>
    </div>
</section>

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