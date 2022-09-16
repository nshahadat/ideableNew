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
<div class="inventor-post-container">
     <section class="post-left">
            <form action="" method="post" class="post-form"id="left-hand">
            <h5 class="inventor-header">Informations</h5>
            <div class="wrapper">
            <div class="input-post"> Title of your Idea  </div>  
                <input type="text"class="post-text" spellcheck="false" placeholder="Type something here..."name="title" required>
            </div>
                <div class="wrapper">
                <div class="input-post"> Description  </div>  
            <textarea spellcheck="false"name="description" placeholder="Type something here..." required></textarea>
            </div>
            <script>
      const textarea = document.querySelector("textarea");
      textarea.addEventListener("keyup", e =>{
        textarea.style.height = "63px";
        let scHeight = e.target.scrollHeight;
        textarea.style.height = `${scHeight}px`;
      });
    </script>
                <div class="wrapper">
                <div class="input-post"> Choose a Catagory: </div>  
                <label  class="catagory" for="cars"></label>
                <select name="Set the category" class="select-button3">
                    <option value="Technology">Technology</option>
                    <option value="Farming">Farming</option>
                    <option value="Media">Media</option>
                    <option value="Education">Education</option>
                </select>
                </div>
                <div class="wrapper">
                <div class="input-post"> Type of investment you need   </div>  
                <div class="input-post-small">  (Financial, resources, marketing etc)</div>
                <textarea spellcheck="false"name="investment-needed" placeholder="Type something here..." required></textarea>
                <script>
                const textarea = document.querySelector("textarea");
                textarea.addEventListener("keyup", e =>{
                    textarea.style.height = "63px";
                    let scHeight = e.target.scrollHeight;
                    textarea.style.height = `${scHeight}px`;
                });
                </script> 
                 </div>
                <div class="wrapper">
                <div class="input-post"> Area of investment   </div>  
                <div class="input-post-small">  (In which area youre going to apply the investment and how)</div>
                <textarea spellcheck="false"name="investment-needed" placeholder="Type something here..." required></textarea>
                <script>
                const textarea = document.querySelector("textarea");
                textarea.addEventListener("keyup", e =>{
                    textarea.style.height = "63px";
                    let scHeight = e.target.scrollHeight;
                    textarea.style.height = `${scHeight}px`;
                });
                </script>
                <div class="wrapper">
                <div class="input-post"> Do you have any demo of your idea </div>  
                <label  class="catagory" for="cars">  </label>
                <div class="input-post-small">  (if yes, then upload it to the media files)</div>
                <select name="demo" class="select-button4">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
                </div>
                <div class="wrapper">
                <div class="input-post"> Do you have your idea theoretically proven </div> 
                <label  class="catagory" for="cars"> <select name="theoretically" class="select-button4">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>  </label>
                </div>
                <div class="wrapper">
                <div class="input-post">Do you have your idea practically proven </div> 
                <label  class="catagory" for="cars">    </label>
                <select name="practically" class="select-button4">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
                </div>
                <div class="wrapper">
                <div class="input-post">Is there any related projects to your idea currently available </div> 
                <label  class="catagory" for="cars"><select name="Realated Projects" class="select-button5">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select> </label>
                <div class="input-post-small">  (if yes , then provide information in the doc file)
                </div>
                </div>
                <div class="wrapper">
                <div class="input-post"> Approximate time limit to complete your project   </div>  
                <input type="text"class="post-text" spellcheck="false" placeholder="Type something here..."name="title" required>
                </div>
                </div>
    </section>
    <section class="post-right">
    <form action="" method="post" class="post-form" id="right-hand">
        <h5 class="inventor-header2">Media Files</h5>
        <div class="input-post2">  Thumbnail Picture   </div> 
        <input type="file" class="hidden" id="file" name="thumbnail"  />
        <label for="file"class="select-button2">Select Pictures</label>
        <div class="input-post"> Upload media files related to your project   </div>
        <div class="input-post-small2">  (Video proof, Demo, Your speech etc ) </div>
        <input type="file" class="hidden" id="file" name="Realated Video"  /> 
        <label for="file"class="select-button7">Select Media Files</label>
        <div class="input-post"> Upload document files related to your project    </div>
        <div class="input-post-small2">  (Theoretical prove, drawings etc)</div>
        <input type="file" class="hidden" id="file" name="Realated Files" />
        <label for="file"class="select-button8">Select Documents</label>
        <div class="input-post"> Speech/Proposal    </div>
        <div class="input-post-small2">  (Create a short video on why an investor should invest on you) </div>
        <input type="file" class="hidden" id="file" name="Speech Video" />
        <label for="file"class="select-button6">Select Media Files</label>
        </form>
    </section>
    </div>

    <button class="up-btn">Upload</button>
<?php
include ADMIN . '/includes/footer2.php';
?> 