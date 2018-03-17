<?php
session_start();
include_once 'include/dbh.php';
?>

<!Doctype html>
<html>
<title>Blood Bank System</title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="w3css.css">
    <link rel="stylesheet" href="addbloodinfo.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="montserrat.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
</head>
    
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
</style> 

<body>
<?php
  include_once 'navbar.php';  
?>

<!-- Header -->
<header class="w3-container w3-red  w3-padding-64" style="">
    <div class="w3-animate">
        <form class="modal-content_addbloodinfo" id="addInfoForm" action="include/addbloodinfo.php" method="post">
            <div class="container ">
                <h1 class="w3-center w3-text-red">ADD BLOOD INFO <i class="fa fa-heartbeat"></i>
                <span class="w3-text-black w3-small">Please fill in this form to add blood type.</span></h1>
                <hr>
                <div class="w3-col s6">
                <label class="w3-text-black" for="bloodtype"><b>BloodType</b></label>
                <input type="text" value="" id="myInput" placeholder="Enter BloodType" name="bloodtype" required>
                </div>
                <div class="w3-col s6">
                <label class="w3-text-black" for="hospitalname"><b>Hospital Name</b></label>
                <input type="text" value="" id="myInput" placeholder="Enter Hospital Name" name="hospitalname" required>
                </div>
                <label class="w3-text-black" for="components"><b>Blood Components</b></label>
                <input type="text" value="" id="myInput" placeholder="Enter Blood Components" name="component" required>

                <label class="w3-text-black" for="test"><b>Blood Test</b></label>
                <input type="text" value="" id="myInput" placeholder="Enter Blood Test" name="test" required>
                <div class="clearfix">
                <button type="submit" class="addinfo" name="submit">Add Info</button>
                <button type="button" onclick="reset()" class="cancelbtn">Cancel</button>
                </div>
            </div>
        </form>
    </div>
</header>
    

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
function reset() {
    document.getElementById("addInfoForm").reset();
}
</script>    
</body>
</html>