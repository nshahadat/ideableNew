<?php
define('ADMIN', 'C:/xampp/htdocs/ideable');
include ADMIN . '/includes/header.php';
include ADMIN . '/includes/navbar-short.php';
include ADMIN . '/includes/dbConfig.php';
error_reporting(0);
session_start();
// if(!isset($_SESSION['email'])){
//     echo "<script>alert('You have to login first');
//     window.location='/ideable/inventor/inventor-login.php';</script>";
//     die();
// }

$user_email = $_SESSION['email'];
$user_find_sql = "SELECT * FROM $inventor WHERE inventor_email = '$user_email'";
$result = mysqli_query($mysqli, $user_find_sql) or die(mysqli_error($mysqli));
$data = mysqli_fetch_array($result);
$username = $data['inventor_name'];
$userid = $data['inventor_id'];
$useremail = $data['inventor_email'];
?>

<div class="username-btn"><button>
        <a href="/ideable/inventor/inventor-profile.php" style="color:white;">
            <?php echo $username; ?>
        </a>
    </button></div>
<a href="inventor-logout.php">
    <div class="logout-btn"><button>logout</button></div>
</a>
<div class="inventor-post-container">
    <section class="post-left">
        <form action="" method="post" class="post-form" id="left-hand" enctype="multipart/form-data">
            <h5 class="inventor-header">Informations</h5>
            <div class="wrapper">
                <div class="input-post"> Title of your Idea </div>
                <textarea spellcheck="false" name="toi" placeholder="Type something here..."></textarea>
            </div>
            <div class="wrapper">
                <div class="input-post"> Description </div>
                <textarea spellcheck="false" name="doi" placeholder="Type something here..."></textarea>
                </script>
                <div class="wrapper3">
                    <div class="input-post"> Choose a Catagory: </div>
                    <label class="catagory" for="cars"></label>
                    <select name="category" class="select-button2">
                        <option value="Technology">Technology</option>
                        <option value="Farming">Farming</option>
                        <option value="Media">Media</option>
                        <option value="Education">Education</option>
                    </select>
                </div>
                <div class="wrapper">
                    <div class="input-post"> Type of investment you need </div>
                    <div class="input-post-small"> (Financial, resources, marketing etc)</div>
                    <textarea spellcheck="false" name="typeofinvest" placeholder="Type something here..."></textarea>
                </div>
                <div class="wrapper">
                    <div class="input-post"> Area of investment </div>
                    <div class="input-post-small"> (In which area youre going to apply the investment and how)</div>
                    <textarea spellcheck="false" name="areaofinvest" placeholder="Type something here..."></textarea>
                    <div class="wrapper2">
                        <div class="input-post"> Do you have any demo of your idea </div>
                        <label class="catagory" for="cars"> </label>
                        <div class="input-post-small"> (if yes, then upload it to the media files)</div>
                        <select name="demo" class="select-button">
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="wrapper2">
                        <div class="input-post"> Do you have any patent of your idea </div>
                        <select name="patent" class="select-button">
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="wrapper2">
                        <div class="input-post"> Do you have your idea theoretically proven </div>
                        <label class="catagory" for="cars"> <select name="theoretical" class="select-button">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select> </label>
                    </div>
                    <div class="wrapper2">
                        <div class="input-post">Do you have your idea practically proven </div>
                        <label class="catagory" for="cars"> </label>
                        <select name="practical" class="select-button">
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="wrapper2">
                        <div class="input-post">Is there any related projects to your idea currently available </div>
                        <label class="catagory" for="cars"><select name="Related_Projects" class="select-button">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select> </label>
                        <div class="input-post-small"> (if yes , then provide information in the doc file)
                        </div>
                    </div>
                    <div class="wrapper">
                        <div class="input-post"> Approximate time limit to complete your project </div>
                        <textarea spellcheck="false" name="aprxtm" placeholder="Type something here..."></textarea>
                    </div>
                </div>
    </section>
    <section class="post-right">
        <form action="" method="post" class="post-form" id="right-hand" enctype="multipart/form-data">
            <h5 class="inventor-header2">Media Files</h5>
            <div class="wrapper2">
                <div class="input-post2"> Thumbnail Picture </div>
                <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                <script>
                    $(document).ready(function () {
                        $('input[type="file"]').change(function (e) {
                            var fileName = e.target.files[0].name;
                            alert('The file "' + fileName + '" has been selected.');
                        });
                    });
                </script>
                <input type="file" class="hidden" id="file-thumbnail" name="thumbnail" accept="image/*" />
                <label for="file-thumbnail" class="select-button3">Select Pictures</label>
            </div>
            <div class="wrapper2">
                <div class="input-post"> Upload media files related to your project </div>
                <div class="input-post-small2"> (Video proof, Demo, Your speech etc ) </div>
                <input type="file" class="hidden" id="file-rVideo" name="rVideo" accept="video/*" />
                <label for="file-rVideo" class="select-button3">Select Media Files</label>
            </div>
            <div class="wrapper2">
                <div class="input-post"> Upload document files related to your project </div>
                <div class="input-post-small2"> (Theoretical prove, drawings etc)</div>
                <input type="file" class="hidden" id="file-rFiles" name="rFiles"
                    accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf" />
                <label for="file-rFiles" class="select-button3">Select Documents</label>
            </div>
            <div class="wrapper2">
                <div class="input-post"> Speech/Proposal </div>
                <div class="input-post-small2"> (Create a short video on why an investor should invest on you) </div>
                <input type="file" class="hidden" id="file-speech" name="speech" accept="video/*" />
                <label for="file-speech" class="select-button3">Select Media Files</label>
            </div>
    </section>
</div>
<input type="submit" value="Upload " Name="upload-btn" class="up-btn">
</form>

<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>

<?php

if (isset($_POST['upload-btn'])) {
    $title = $_POST['toi'];
    $des = $_POST['doi'];
    $cat = $_POST['category'];
    $toi = $_POST['typeofinvest'];
    $aoi = $_POST['areaofinvest'];
    $demo = $_POST['demo'];
    $patent = $_POST['patent'];
    $theoretical = $_POST['theoretical'];
    $practical = $_POST['practical'];
    $rp = $_POST['Related_Projects'];
    $apprx_time = $_POST['aprxtm'];
    $thumb_files_name = $_FILES['thumbnail']['name'];
    $thumb_files_name_tmp = $_FILES['thumbnail']['tmp_name'];
    $thumb_files_dir = '/ideable/inventor/dbFiles/thumbFiles/' . $thumb_files_name;
    $video_files_name = $_FILES['rVideo']['name'];
    $video_files_name_tmp = $_FILES['rVideo']['tmp_name'];
    $video_files_dir = '/ideable/inventor/dbFiles/mediaFiles/' . $video_files_name;
    $doc_files_name = $_FILES['rFiles']['name'];
    $doc_files_name_tmp = $_FILES['rFiles']['tmp_name'];
    $doc_files_dir = '/ideable/inventor/dbFiles/docFiles/' . $doc_files_name;
    $speech_files_name = $_FILES['speech']['name'];
    $speech_files_name_tmp = $_FILES['speech']['tmp_name'];
    $speech_files_dir = '/ideable/inventor/dbFiles/speechFiles/' . $speech_files_name;
    $pathThumb = "dbFiles/thumbFiles/" . $thumb_files_name;
    $pathVideo = "dbFiles/mediaFiles/" . $video_files_name;
    $pathDoc = "dbFiles/docFiles/" . $doc_files_name;
    $pathSpeech = "dbFiles/speechFiles/" . $speech_files_name;

    move_uploaded_file($thumb_files_name_tmp, $pathThumb);
    move_uploaded_file($video_files_name_tmp, $pathVideo);
    move_uploaded_file($doc_files_name_tmp, $pathDoc);
    move_uploaded_file($speech_files_name_tmp, $pathSpeech);

    if (!empty($_FILES['thumbnail']['name'])) {
        $upload_sql = "INSERT IGNORE INTO $post (inventor_id, inventor_name, inventor_email, title, description, category, doc_files_dir, media_files_dir, thumb_files_dir, speech_files_dir, type_of_investment, area_of_investment, theoratically_proven, practically_proven, demo, related_projects, approximate_time, patent) VALUES ('$userid', '$username', '$useremail', '$title', '$des', '$cat', '$doc_files_dir', '$video_files_dir', '$thumb_files_dir', '$speech_files_dir', '$toi', '$aoi', '$theoretical', '$practical', '$demo', '$rp', '$apprx_time', '$patent')";

        echo $upload_sql;

        if ($mysqli->query($upload_sql)) {
            echo "<script>alert('Post uploaded successfully!');</script>";
        } else if (die($mysqli->error)) {
            echo "<script>alert('Post upload failed');</script>";
        }
        // echo "<script>alert('$thumb_files_name');</script>";
        // echo "<script>alert('$doc_files_name');</script>";
        // echo "<script>alert('$video_files_name');</script>";
        // echo "<script>alert('$speech_files_name');</script>";
    } else {
        echo "<script>alert('Upload your files properly');</script>";
    }
}

?>
<?php
include ADMIN . '/includes/footer.php';
?>