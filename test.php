<?php
include "includes/header.php";
include "includes/navbar-main.php";
include "includes/dbConfig.php";
?>
 <div class="feed-container">
  <section class="feed-left">
    <h1 class="userheader">user has an idea of iron man</h1>
    <button class="feed-btn1">like</button>
    <button class="feed-btn2">report</button>
    <img src="media/arnob.jpg" class="feed-img " alt="">
    <h1 style="color: green;">
        Iron man
    </h1>
  
    <p>
        GeeksforGeeks was born out of necessity-
        a need to provide a convenient <br>and
        one-stop educational portal to all the
        students of Computer Science.
        <span id="points">...</span>
  
        <!-- Define the text that would be 
            hidden by default and only shown 
            when clicked on the button -->
        <span id="moreText"> This necessity was
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
            do is to look around yourself.
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
    <a href="#">Media Files</a>
    <a href="#">Doc Files</a>
    <p >Theoratically Proved:Yes; Practically Proved:Yes; Demo:Yes; Business Model:Yes; Patent:Yes; Approximate Time:2 month</p>
    
    <h6 class ="ques">ask any questions before investing (if any)</h6>
    <textarea spellcheck="false"name="toi" placeholder="Type something here..."></textarea>
                <script>
                const textarea = document.querySelector("textarea");
                textarea.addEventListener("keyup", e =>{
                    textarea.style.height = "63px";
                    let scHeight = e.target.scrollHeight;
                    textarea.style.height = `${scHeight}px`;
                });
                </script> 
    <button class="ask-btn">ask</button>
    <p>or click this button if you are interested in investing</p>
    <button class="invest-btn">invest</button>
    <p class="terms-policies">before investing read our <a href="#">terms and policies</a></p>
    </div>
  </section>
  <div class="feed-container">
  <section class="feed-left">
    <h1 class="userheader">user has an idea of iron man</h1>
    <button class="feed-btn1">like</button>
    <button class="feed-btn2">report</button>
    <img src="media/arnob.jpg" class="feed-img " alt="">
    <h1 style="color: green;">
        Iron man
    </h1>
  
    <p>
        GeeksforGeeks was born out of necessity-
        a need to provide a convenient <br>and
        one-stop educational portal to all the
        students of Computer Science.
        <span id="points">...</span>
  
        <!-- Define the text that would be 
            hidden by default and only shown 
            when clicked on the button -->
        <span id="moreText"> This necessity was
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
            do is to look around yourself.
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
    <a href="#">Media Files</a>
    <a href="#">Doc Files</a>
    <p >Theoratically Proved:Yes; Practically Proved:Yes; Demo:Yes; Business Model:Yes; Patent:Yes; Approximate Time:2 month</p>
    
    <h6 class ="ques">ask any questions before investing (if any)</h6>
    <textarea spellcheck="false"name="toi" placeholder="Type something here..."></textarea>
                <script>
                const textarea = document.querySelector("textarea");
                textarea.addEventListener("keyup", e =>{
                    textarea.style.height = "63px";
                    let scHeight = e.target.scrollHeight;
                    textarea.style.height = `${scHeight}px`;
                });
                </script> 
    <button class="ask-btn">ask</button>
    <p>or click this button if you are interested in investing</p>
    <button class="invest-btn">invest</button>
    <p class="terms-policies">before investing read our <a href="#">terms and policies</a></p>
    </div>
  </section>
  <button class="logout-btn">logout</button>
  <section class="feed-right">
      <p class ="right" >your current category of searching is <span style="color:green;">tech</span></p>
      <div class="switch-cat"> Want to Switch Category? </div>  
      <label  class="catagory" for="cars"></label>
      <select name="category" class="select-button3">
                    <option value="Technology">Technology</option>
                    <option value="Farming">Farming</option>
                    <option value="Media">Media</option>
                    <option value="Education">Education</option>
                </select>
  </section>
 
    <?php
include "includes/footer.php";
?>