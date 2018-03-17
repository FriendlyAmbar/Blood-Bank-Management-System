<?php
session_start();
?>
<!Doctype html>
<html>
<title>Blood Bank System</title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="w3css.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="signin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="montserrat.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
</head>
    
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-heartbeat{font-size:210px}
</style> 

<body>
<?php
include_once 'navbar.php';  
include_once 'signup.php';
include_once 'signin.php'; 
?>
<?php
  if(isset($_SESSION['uhid'])) {
      echo '
      <!-- Header -->
        <header class="w3-container w3-red w3-center" style="padding:128px 16px">
          <h1 class="w3-margin w3-jumbo">BLOOD BANK SYSTEM - HOSPITAL</h1>
          <p class="w3-xlarge">Made by Ambar Gupta</p>
          <a href="#header" class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Get Started</a>
        </header>
      ';
  } elseif(isset($_SESSION['urid'])) {
      echo '
      <!-- Header -->
    <header class="w3-container w3-red w3-center" style="padding:128px 16px">
      <h1 class="w3-margin w3-jumbo">BLOOD BANK SYSTEM - RECIEVER</h1>
      <p class="w3-xlarge">Made by Ambar Gupta</p>
      <a href="#header" class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Get Started</a>
    </header>
      ';
  } else {
      echo '
      <!-- Header -->
    <header class="w3-container w3-red w3-center" style="padding:128px 16px">
      <h1 class="w3-margin w3-jumbo">BLOOD BANK SYSTEM</h1>
      <p class="w3-xlarge">Made by Ambar Gupta</p>
      <a href="#header" class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Get Started</a>
    </header>
      ';
  }
?>  
<?php
  if (isset($_SESSION['uhid'])) {
      echo ''; 
  }  else if (isset($_SESSION['urid'])) {
      echo '';
  } else {
   echo '<div class="w3-center">You are not logged in!</div>' ;
     
  }
?>
        
    
<!-- First Grid -->
<div class="w3-row-padding w3-padding-32 w3-container" id="header">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>What is a Blood Bank ?</h1>
      <h5 class="w3-padding-32">A blood bank is a center where blood gathered as a result of blood donation is stored and preserved for later use in blood transfusion. The term "blood bank" typically refers to a division of a hospital where the storage of blood product occurs and where proper testing is performed (to reduce the risk of transfusion related adverse events). However, it sometimes refers to a collection center, and indeed some hospitals also perform collection.</h5>

      <p class="w3-text-grey">Whole blood or blood with RBC, is transfused to patients with anaemia/iron deficiency. It also helps to improve the oxygen saturation in blood. It can be stored at 1.0 °C-6.0 °C for 35–45 days. Platelet transfusion, is transfused to those who suffer from low platelet count. This can be stored at room temperature for 5–7 days. Plasma transfusion is indicated to patients with liver failure, severe infections or serious burns. Fresh frozen plasma can be stored at a very low temperature of -25 °C for up to 12 months.</p>
    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-heartbeat w3-padding-64 w3-text-red w3-margin-right"></i>
    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="fa fa-heartbeat w3-padding-64 w3-text-red w3-margin-right"></i>
    </div>

    <div class="w3-twothird">
      <h1>Why Donate Blood!</h1>
      <h5 class="w3-padding-32">There is no SUBSTITUTE FOR BLOOD!
          Despite all medical advances, we have found no way of duplicating it except in our own bodies.
          Only a HUMAN being can donate and help another human being.
          It feels great to donate!</h5>

      <p class="w3-text-grey">It’s something you can spare most people have blood to spare… yet, there is still not enough to go around. You will help ensure blood is on the shelf when needed most people don’t think they’ll ever need blood, but many do. You will be someone’s hero in fact, you will help as many as three people with just one donation.</p>
    </div>
  </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64" style="letter-spacing:1px;">
    <h1 class="w3-margin w3-xlarge">Quote of the day: Share a little, care a little – Donate Blood.</h1>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-48 w3-center">  
  <div class="w3-xxlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <a href="#top" title="To The Top"><i class="fa fa-hand-o-up w3-hover-opacity w3-right"></i></a>
 </div>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
    
<script>
    // Get the modal
var modal_signup = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal_signup) {
        modal_signup.style.display = "none";
    }
}

</script>

<script>
// Get the modal
var modal_signin = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal_signin) {
        modal_signin.style.display = "none";
    }
}

</script>
</body>
</html>