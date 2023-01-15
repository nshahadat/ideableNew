<?php
define('ADMIN', 'C:/xampp/htdocs/ideable');
include ADMIN . '/includes/header.php';
include ADMIN . '/includes/navbar-main.php';
include ADMIN . '/includes/dbConfig.php';
?>


<div class="feed-container">
<section class="feed-left">
    <h1 class="userheader">  has an idea of </h1>
    <input type="hidden" name="get_inventor_id" value="">
    <input type="hidden" name="get_inventor_email" value="">
    <button class="feed-btn1">like</button>
    <button class="feed-btn2">report</button>
    <img src="" class="feed-img " alt="">
    <h1 style="color: #2E5261">
    </h1>

    <p>
    
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
   Theoratically Proved:  Practically Proved:  Demo: Business Model: Patent: Approximate Time: </p>
    <h6 class ="ques">ask any questions before investing (if any)</h6>
    <textarea spellcheck="false" name="toi" placeholder="Type something here..."></textarea>
                <script>
                const textarea = document.querySelector("textarea");
                textarea.addEventListener("keyup", e =>{
                    textarea.style.height = "63px";
                    let scHeight = e.target.scrollHeight;
                    textarea.style.height = ${scHeight}px;
                });
                </script> 
    <button class="ask-btn" name = "ask-btn">ask</button></form>
    <p class="comnt-box"><span>Arnob:</span>asdasdasdasdas</p>

    <div class="post-p3">
    <p >or click this button if you are interested in investing</p>
    <form action="/ideable/investor/investor-feed-confirm-email.php" method="post">
        <input type="button" value="Invest" class="invest-btn" name="invest-confirm-btn">
        </form>
    </div>
    <div class="post-p4">
        <p >If You want experts opinion on this</p>
        <form action="/ideable/investor/investor-feed-confirm-email.php" method="post">
        <input type="button" value="Review" class="review-btn" name="invest-confirm-btn">
        </form>                                                 
    </div>       
    <p class="terms-policies">before investing read our <a href="#">terms and policies</a></p>
 
</section>

<div class="card-container">
  <ul class="cards">
    <li>
      <a href="" class="card">
        <img src="https://i.imgur.com/oYiTqum.jpg" class="card__image" alt="" />
        <div class="card__overlay">
          <div class="card__header">
            <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
              <path />
            </svg>
            <img class="card__thumb" src="https://i.imgur.com/7D7I6dI.png" alt="" />
            <div class="card__header-text">
              <h3 class="card__title">Jessica Parker</h3>
              <span class="card__status">1 hour ago</span>
            </div>
          </div>
          <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?
          </p>
        </div>
      </a>
    </li>
    <li>
      <a href="" class="card">
        <img src="https://i.imgur.com/2DhmtJ4.jpg" class="card__image" alt="" />
        <div class="card__overlay">
          <div class="card__header">
            <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
              <path />
            </svg>
            <div class="card__header-text">
              <h3 class="card__title">kim Cattrall</h3>
              <span class="card__status">3 hours ago</span>
            </div>
          </div>
          <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?
          </p>
        </div>
      </a>
    </li>
    <li>
      <a href="" class="card">
        <img src="https://i.imgur.com/oYiTqum.jpg" class="card__image" alt="" />
        <div class="card__overlay">
          <div class="card__header">
            <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
              <path />
            </svg>
            <img class="card__thumb" src="https://i.imgur.com/7D7I6dI.png" alt="" />
            <div class="card__header-text">
              <h3 class="card__title">Jessica Parker</h3>
              <span class="card__status">1 hour ago</span>
            </div>
          </div>
          <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?
          </p>
        </div>
      </a>
    </li>
    <li>
      <a href="" class="card">
        <img src="https://i.imgur.com/2DhmtJ4.jpg" class="card__image" alt="" />
        <div class="card__overlay">
          <div class="card__header">
            <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
              <path />
            </svg>
            <div class="card__header-text">
              <h3 class="card__title">kim Cattrall</h3>
              <span class="card__status">3 hours ago</span>
            </div>
          </div>
          <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?
          </p>
        </div>
      </a>
    </li>
  </ul>

</div>
<?php
include ADMIN . '/includes/footer.php';
?>