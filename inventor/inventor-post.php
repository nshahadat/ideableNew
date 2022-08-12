<?php
define('ADMIN', 'C:/xampp/htdocs/ideable');
include ADMIN . '/includes/header.php';
include ADMIN . '/includes/navbar-main.php';
include ADMIN . '/includes/dbConfig.php';
error_reporting(0);
?>
<div class="inventor-post-container">
     <section class="post-left">
            <h5 class="inventor-header">Informations</h5>
            <form action="" method="post" class="post-form">
                <div class="input-post">  Title of your idea </div>
                <input type="text" placeholder="Type Here" name="title"/>
                <div class="input-post">  Description of your idea  </div>
                <input type="textarea" placeholder="Type Here" name="Description"/>
                <label  class="catagory" for="cars">Choose a Catagory:</label>
                <select name="Set the category" class="category">
                    <option value="Technology">Technology</option>
                    <option value="Farming">Farming</option>
                    <option value="Media">Media</option>
                    <option value="Education">Education</option>
                </select>
                <div class="input-post"> Type of investment you need   </div>  
                <div class="input-post-small">  Financial, resources, marketing etc</div>
                <input type="textarea" placeholder="Type Here" name="invesment needed"/>
                <div class="input-post"> Area of investment   </div>
                <div class="input-post-small">  In which area youre going to apply the investment and how</div>
                <input type="textarea" placeholder="Type Here" name="Area of investment"/>
                <label  class="catagory" for="cars">Do you have any patent of your idea</label>
                <select name="patent" class="category">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
                <label  class="catagory" for="cars">Do you have any demo of your idea  </label>
                <select name="demo" class="category">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
                <div class="input-post-small">  if yes, then upload it to the media files</div>
                <label  class="catagory" for="cars">Do you have your idea theoretically proven   </label>
                <select name="theoretically" class="category">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
                <label  class="catagory" for="cars">Do you have your idea practically proven    </label>
                <select name="practically" class="category">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
                <label  class="catagory" for="cars">Is there any related projects to your idea currently available?  </label>
                <select name="Realated Projects" class="category">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
                <div class="input-post-small">  if yes , then provide information in the doc file</div>
                <div class="input-post">  Approximate time limit to complete your project  </div>
                <input type="text" placeholder="Type Here" name="time"/>
    </section>
    <section class="post-right">
        <h5 class="inventor-header2">Media Files</h5>
        <div class="input-post">  Thumbnail Picture   </div> 
        <input type="file" class="hidden" id="file" name="thumbnail" accept="image/*" />
        <label for="file">Select file</label>
        <div class="input-post"> Upload media files related to your project   </div>
        <div class="input-post-small">  Video proof, Demo, Your speech etc  </div>
        <input type="file" placeholder="Upload Your Videos Here" name="Realated Video" accept="video/*" /> 
        <div class="input-post"> Upload document files related to your project    </div>
        <div class="input-post-small">  Theoretical prove, drawings etc</div>
        <input type="file" placeholder="Upload Your Files Here" name="Realated Files" />
        <div class="input-post"> Speech/Proposal    </div>
        <div class="input-post-small">  Create a short video on why an investor should invest on you </div>
        <input type="file" placeholder="Upload Your Videos Here" name="Speech Video" accept="video/*" />

    </section>
</div>
<?php
include ADMIN . '/includes/footer.php';
?> 