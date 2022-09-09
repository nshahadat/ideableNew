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
$user_find_sql = "SELECT * FROM $inventor WHERE inventor_email = '$user_email'";
$result  = mysqli_query($mysqli, $user_find_sql) or die(mysqli_error($mysqli));
$data = mysqli_fetch_array($result);
$username = $data['inventor_name'];
?>

<div class="username-btn"><button><?php echo $username; ?></button></div>
<a href="inventor-logout.php"><div class="logout-btn"><button>logout</button></div></a>
<!-- <div class="linecontainer"></div> -->
<div class="inventor-post-container">
     <section class="post-left">
            <form action="" method="post" class="post-form"id="left-hand">
            <h5 class="inventor-header">Informations</h5>
                <div class="input-post">  Title of your idea </div>
                <div class="input-field-post">
                <input type="text"class="text-area" name="title"/>
                </div>
                <div class="input-post">  Description of your idea  </div>
                <div class="input-field-post2">
                <input type="text-area"class="text-area1" name="description"/>
                </div>
                <label  class="catagory" for="cars">Choose a Catagory:</label>
                <select name="Set the category" class="select-button3">
                    <option value="Technology">Technology</option>
                    <option value="Farming">Farming</option>
                    <option value="Media">Media</option>
                    <option value="Education">Education</option>
                </select>
                <div class="input-post"> Type of investment you need   </div>  
                <div class="input-post-small">  (Financial, resources, marketing etc)</div>
                <div class="input-field-post2">
                <input type="text-area"class="text-area1" name="investment-needed"/>
                </div>
                <div class="input-post"> Area of investment   </div>
                <div class="input-post-small">  (In which area youre going to apply the investment and how)</div>
                <div class="input-field-post2">
                <input type="text-area"class="text-area1" name="area of investment"/>
                </div>
                <label  class="catagory" for="cars">Do you have any patent of your idea</label>
                <select name="patent" class="select-button">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
                <label  class="catagory" for="cars">Do you have any demo of your idea  </label>
                <div class="input-post-small">  (if yes, then upload it to the media files)</div>
                <select name="demo" class="select-button">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
                <label  class="catagory" for="cars">Do you have your idea theoretically proven <select name="theoretically" class="select-button">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>  </label>
                
                <label  class="catagory" for="cars">Do you have your idea practically proven    </label>
                <select name="practically" class="select-button">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
                <label  class="catagory" for="cars">Is there any related projects to your idea currently available     <select name="Realated Projects" class="select-button">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select> </label>
                <div class="input-post-small">  (if yes , then provide information in the doc file)
            
                </div>
                <div class="input-post">  Approximate time limit to complete your project  </div>
                <div class="input-field-post">
                <input type="text"class="text-area" name="time"/>
                </div>
    </section>
    <section class="post-right">
    <form action="" method="post" class="post-form" id="right-hand">
        <h5 class="inventor-header2">Media Files</h5>
        <div class="input-post">  Thumbnail Picture   </div> 
        <input type="file" class="hidden" id="file" name="thumbnail" accept="image/*" />
        <label for="file"class="select-button2">Select Pictures</label>
        <div class="input-post"> Upload media files related to your project   </div>
        <div class="input-post-small">  (Video proof, Demo, Your speech etc ) </div>
        <input type="file" class="hidden" id="file" name="Realated Video" accept="video/*" /> 
        <label for="file"class="select-button2">Select Media Files</label>
        <div class="input-post"> Upload document files related to your project    </div>
        <div class="input-post-small">  (Theoretical prove, drawings etc)</div>
        <input type="file" class="hidden" id="file" name="Realated Files" />
        <label for="file"class="select-button2">Select Documents</label>
        <div class="input-post"> Speech/Proposal    </div>
        <div class="input-post-small">  (Create a short video on why an investor should invest on you) </div>
        <input type="file" class="hidden" id="file" name="Speech Video" accept="video/*" />
        <label for="file"class="select-button2">Select Media Files</label>
     </form>
    </section>
    <button class="up-btn">Upload</button>
</div>
<?php
include ADMIN . '/includes/footer.php';
?> 