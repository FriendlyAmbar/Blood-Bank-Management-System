<?php
date_default_timezone_set('Asia/Kolkata');
include 'include/dbh.php';
include 'include/blog.php';
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
    <link rel="stylesheet" href="blog.css">
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
    $cid = $_POST['cid'];
    $uname = $_POST['uname'];
    $date = $_POST['date'];
    $message = $_POST['message'];
    
   echo '
   <div class="w3-red" style="padding: 10px;">
   <form action="'.replyComment($conn).'" method="POST" style="padding-top:80px;">
    <input type="hidden" name="cid" value="'.$cid.'">
    <input type="hidden" name="uname" value="'.$uname.'">
    <input type="hidden" name="date" value="'.$date.'">
    <textarea name="message" placeholder="Type your reply here"></textarea><br>
    <button class="commentbtn" type="Submit" name="replySubmit">Reply</button>
    </form>
    </div>
   ';
    
    include_once 'signup.php';
    include_once 'signin.php';
?>
        
    

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