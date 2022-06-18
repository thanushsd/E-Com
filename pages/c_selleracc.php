<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<?php include '../main/nav.php'; ?>
<link rel="stylesheet" type="text/css" href="../css/style.css">

<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #ffffff;
}

#regForm {
  background-color: #ffffff;
}

h1 {
  text-align: center;  
}

input {
  width: 100%;
  font-size: 15px;
  border: 1px solid #aaaaaa;
  border: 5px;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #04AA6D;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #39ace5;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #39ace5;
}
</style>
<body>
<br>
<br>
<form class="container animate__animated animate__fadeInDown" style="border-radius: 10px;" class="container" id="regForm" action="../sql/shop.php">
  <h4>Setup New Seller Account:</h4>
  <!-- One "tab" for each step in the form: -->
  <div class="tab animate__animated animate__fadeInUpBig ">Owner Details: 
    <br>
    <br>
    <p><input placeholder="Your E-mail" oninput="this.className = ''" name="email"></p>
    <p><input placeholder="Your Name" oninput="this.className = ''" name="oname"></p>
    <p><input placeholder="Your NIC" oninput="this.className = ''" name="nic"></p>
    <p><input placeholder="Your Telephone" oninput="this.className = ''" name="tel"></p>
  </div>
  <div class="tab animate__animated animate__fadeInUp">Shop Details:
    <br>
    <br>
    <p><input placeholder="Shop Name" oninput="this.className = ''" name="sname"></p>
    <p><input placeholder="Description" oninput="this.className = ''" name="des"></p>
  </div>
  <div class="tab animate__animated animate__fadeInUp ">Security:
    <br>
    <br>
    <p><input placeholder="Create Username" oninput="this.className = ''" name="uname"></p>
    <p><input placeholder="Create Password" oninput="this.className = ''" name="pw"></p>
    <p><input placeholder="Confirm Password" oninput="this.className = ''" name="pw"></p>
  </div>
  <div class="tab animate__animated animate__fadeInUp">Optional:
    <br>
    <br>
    <p><input placeholder="Shop Category" oninput="this.className = ''" name="cat"></p>
    
    <p></p>
        

    <p>When Submitting This You Agreed To Our Terms & Conditions </p>

    <h6>After Submitting We'll Review Your Details & Approve Your Account. After It You Can Start Selling On E-Com</h6>
    <h6 style=" color: red; " >You Can Log In To Your Account After The Approval !</h6>

  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button style="background-color: #39ace5; border-radius: 5px;" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button style="background-color: #febe68; border-radius: 5px;" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
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
  showTab(currentTab);
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

<?php include '../main/footer.php'; ?>


</body>
</html>
