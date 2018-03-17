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
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="signin.css">
    <link rel="stylesheet" href="availablebloodsample.css">
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
    
<?php
  include_once 'signup.php';  
?>
  
<?php
  include_once 'signin.php';  
?>    

<!-- Header -->
<header class="w3-container w3-red  w3-padding-64"> 
<div style="overflow-x:auto; letter-spacing: 1px;">
    <h1 class="w3-xxlarge w3-center">AVAILABLE BLOOD SAMPLES</h1>
<table> 
  <tr>
    <th>Blood Type</th>
    <th>Hospital Name</th>
    <th>Blood Components</th>
    <th>Blood Sample</th>
  </tr>
  <tr>
    <td>
    <?php

    $sql = "SELECT * FROM bloodinfo ORDER BY bloodtype;";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if ($resultcheck > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo $row['bloodtype'];
            echo '<br>';
            echo '<br>';
        }
    } else {
        
    }
    ?>       
    </td>
    <td>
    <?php

    $sql = "SELECT * FROM bloodinfo ORDER BY bloodtype;";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if ($resultcheck > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo $row['hospitalname'];
            echo '<br>';
            echo '<br>';
        }
    } else {
        
    }
    ?> 
    </td>
    <td>
    <?php

    $sql = "SELECT * FROM bloodinfo ORDER BY bloodtype;";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if ($resultcheck > 0) {
        while($row = mysqli_fetch_assoc($result)) { 
            echo $row['component'];
            echo '<br>';
            echo '<br>';
        }
    } else {
        
    }
    ?>   
    </td>
    <td class="tabledatahidden" style="color: green; opacity:1;">
    <?php

    $sql = "SELECT * FROM bloodinfo ORDER BY bloodtype;";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if ($resultcheck > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            if (isset($_SESSION['uhid'])) {
                echo 'Cannot Request';
            } elseif(isset($_SESSION['urid'])) {
                echo '
                <a href="#requestbloodform">Request</a>
                
                ';
                
            } else {
               echo '<a id="myBtn" onclick="javascript:alert(\'Please Sign-In with a Recievers Account\')">Request</a>';
            }
            echo '<br>';
            echo '<br>';
        }
    } else {
        
    }
    ?> 
    </td>
  </tr>
</table>
</div> 
</header>
    
    <?php
    if(isset($_SESSION['urid'])) {
        echo '
        <div id="requestbloodform" class="w3-padding-48">
                <form class="modal-content_requestblood" action="include/requestblood.php" method="post">
                    <div class="container">
                        <h1 class=" w3-text-red">Request Blood <i class="fa fa-heartbeat"></i>
                        <span class="w3-text-black w3-small">Please fill in this form to request blood.</span></h1>
                        <hr>
                        <div class="w3-col s6">
                        <label for="first"><b>FirstName</b></label>
                        <input type="text" placeholder="Enter FirstName" name="first" required>
                        </div>
                        <div class="w3-col s6">
                        <label for="last"><b>LastName</b></label>
                        <input type="text" placeholder="Enter LastName" name="last" required>
                        </div>
                        <div class="w3-col s6">
                        <label for="email"><b>Email</b></label>
                        <input type="text" placeholder="Enter Email" name="email" required>
                        </div>
                        <div class="w3-col s6">
                        <label for="phone"><b>Phone Number</b></label>
                        <input type="text" placeholder="Enter Phone Number" name="phonenumber" required>
                        </div>
                        <label for="bloodtype"><b>Blood Type</b></label>
                        <input type="text" placeholder="Enter Blood Type Required" name="bloodtype" required>

                        <p>By requesting you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                        <div class="clearfix">
                        <button type="button" onclick="document.getElementById(\'id01\').style.display=\'none\'" class="cancelbtn">Cancel</button>
                        <button type="submit" class="requestbloodtbtn" name="submit">Request</button>
                        </div>
                    </div>
                </form>
                </div>   
        ';
    }
    
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
function reset() {
    document.getElementById("addInfoForm").reset();
}
</script>    
</body>
</html>