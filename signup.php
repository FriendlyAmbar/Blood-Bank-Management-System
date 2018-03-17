<!--Sign Up-->
<div id="id01" class="modal_signup w3-row-padding">
  <span onclick="document.getElementById('id01').style.display='none'" class="close_signup" title="Close Modal"><i class="fa fa-close"></i></span>
    <!-- Hospitals -->
    <div class="w3-col m6 l6 w3-animate-left">
        <form class="modal-content_signup" action="include/hospitals_signup.php" method="post">
            <div class="container">
                <h1>Sign Up <span class="w3-text-red">HOSPITALS <i class="fa fa-medkit"></i></span></h1>
                <p>Please fill in this form to create an account.</p>
                <hr>
                <div class="w3-col s6">
                <label for="first"><b>FirstName</b></label>
                <input type="text" placeholder="Enter FirstName" name="first" required>
                </div>
                <div class="w3-col s6">
                <label for="last"><b>LastName</b></label>
                <input type="text" placeholder="Enter LastName" name="last" required>
                </div>
                <label for="hospital"><b>Hospital Name</b></label>
                <input type="text" placeholder="Enter Hospital Name" name="hospital" required>

                <label for="pwd"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="pwd" required>

                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                <div class="clearfix">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn signup" name="submit">Sign Up</button>
                </div>
            </div>
        </form>
    </div>
    <!-- Recievers -->
    <div class="w3-col m6 l6 w3-animate-right">
        <form class="modal-content_signup" action="include/recievers_signup.php" method="post">
        <div class="container">
            <h1>Sign Up <span class="w3-text-green">RECIEVERS <i class="fa fa-child"></i></span></h1>
            <p>Please fill in this form to create an account.</p>
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
                <label for="uname"><b>UserName</b></label>
                <input type="text" placeholder="Enter UserName" name="uname" required>
            </div>
            <div class="w3-col s6">
                <label for="bloodtype"><b>Blood Type</b></label>
                <input type="text" placeholder="Enter Blood Type" name="bloodtype" required>
            </div>

            <label for="pwd"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="pwd" required>

            <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

            <div class="clearfix">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn" name="submit">Sign Up</button>
            </div>
        </div>
        </form>
    </div>
</div>