<?php
include "includes/header.php";
include "includes/navbar.php";
include "includes/dbConfig.php";
?>
   <form id="regForm" method="post">
<!-- One "tab" for each step in the form: -->

<div class="tab">
<div class="wrapper">
      <h2>Title of your idea </h2>
      <input type="text"class="post-text" spellcheck="false" placeholder="Type something here..."name="title" required>
    </div>
    <div class="wrapper">
      <h2>Description</h2>
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
        <h2>Choose a Catagory: </h2>
        <label  class="catagory" for="cars"></label>
                <select name="Set the category" class="select-button3">
                    <option value="Technology">Technology</option>
                    <option value="Farming">Farming</option>
                    <option value="Media">Media</option>
                    <option value="Education">Education</option>
                </select>
    </div> 
    <div class="wrapper">
        <h2>Thumbnail Picture  </h2>
         <input type="file" class="hidden"  name="thumbnail"  />
        <label for="file"class="select-button2">Select Pictures</label>
     </div> 

</div>
<div class="tab">
<div class="wrapper">
     <div class="input-post"> Upload media files related to your project   </div>
        <div class="input-post-small">  (Video proof, Demo, Your speech etc ) </div>
        <input type="file" class="hidden"  name="Realated-Video"  /> 
        <label for="file"class="select-button4">Select Media Files</label>
                </div>
                <div class="wrapper">
                <div class="input-post"> Upload document files related to your project    </div>
        <div class="input-post-small">  (Theoretical prove, drawings etc)</div>
        <input type="file" class="hidden"  name="Realated-Files" />
        <label for="file"class="select-button4">Select Documents</label>
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
</div>
<div class="tab">
<div class="wrapper">
<div class="input-post"> Area of investment   </div>
                <div class="input-post-small">  (In which area youre going to apply the investment and how)</div>
                <textarea spellcheck="false"name="invested-areas" placeholder="Type something here..." required></textarea>
                </div>
                <div class="wrapper">
              <label  class="input-post" for="cars">Do you have any patent of your idea</label>
                <select name="patent" class="select-button3">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
                </div>
                <div class="wrapper">
                <label  class="input-post" for="cars">Do you have any demo of your idea  </label>
                <div class="input-post-small">  (if yes, then upload it to the media files)</div>
                <select name="demo" class="select-button3">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
                </div>
                <div class="wrapper">
                <label  class="input-post" for="cars">Do you have your idea theoretically proven</label>
                   <select name="theoretically" class="select-button5">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>  
                </div>

</div>
<div class="tab">
  <div class="wrapper">
    <label  class="input-post" for="cars">Is there any related projects to your idea currently available     
                <div class="input-post-small">  (if yes , then provide information in the doc file)
                <select name="Realated Projects" class="select-button6">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select> </label>
                </div>
  </div>
    <div class="wrapper">
                <div class="time">  Approximate time limit to complete your project  </div>
                <input type="text"class="post-text" spellcheck="false" placeholder="Type something here..."name="approximate time" required>
   
    </div>
<div class="wrapper">
<div class="input-post"> Speech/Proposal    </div>
        <div class="input-post-small">  (Create a short video on why an investor should invest on you) </div>
        <input type="file" class="hidden" id="file" name="Speech Video" />
        <label for="file"class="select-button4">Select Media Files</label>
        </div>
        </div>

<div style="overflow:auto;">
  <div style="float:right;">
    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
  </div>
</div>

<!-- Circles which indicates the steps of the form: -->
<div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  
</div>

</form>
<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  // showTab(currentTab);
   console.log("ok");
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
    <?php
include "includes/footer.php";
?>