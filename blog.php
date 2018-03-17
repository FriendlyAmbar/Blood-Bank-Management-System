    <?php
    date_default_timezone_set('Asia/Kolkata');
    include 'include/dbh.php';
    include 'include/blog.php';
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
    include_once 'navbar.php'; 
    ?>
        
    <?php
        
        if(isset($_SESSION['uhid']) || isset($_SESSION['urid'])) {
            echo '
            <div class="w3-red w3-center" style="padding: 40px;">
            <h1 class="w3-margin  w3-jumbo" style="padding-top: 40px;">Lets have a Chat <i class="fa fa-coffee"></i></h1>
            </div>
            <form action="'.setComments($conn).'" method="POST" style="padding:20px;" class="w3-center">
            <input type="hidden" name="uname" value="'.$_SESSION['uhid'].'">
            <input type="hidden" name="date" value="'.date('Y-m-d H:i:s').'">
            <textarea class="textarea" name="message"></textarea><br>
            <button class="commentbtn" type="Submit" name="commentSubmit">Comment</button>
            </form>
           '; 
            getComments($conn);
        } else {
            echo'
            <div class="w3-red" style="padding: 40px;margin-bottom:12px;">
           <h1 class="w3-margin w3-center w3-jumbo" style="padding-top: 40px;">Lets have a Chat <i class="fa fa-coffee"></i></h1>
           </div>
            ';
            getComments($conn);
        }
       
         

        include 'signup.php';
        include 'signin.php';
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