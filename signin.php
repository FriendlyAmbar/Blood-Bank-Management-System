<!-- SignIn -->
<div id="id02" class="modal_signin w3-row-padding">
    <span onclick="document.getElementById('id02').style.display='none'" class="close_signin" title="Close Modal"><i class="fa fa-close"></i></span>
    <!-- Hospitals -->
    <div class="w3-col m6 l6">
    <form class="modal-content_signin animate" action="include/hospitals_signin.php" method="post">
        <div class="imgcontainer">
            <img src="male_avatar.png" alt="Avatar" class="avatar">
            <h3>Sign In <span class="w3-text-red">HOSPITALS <i class="fa fa-medkit"></i></span></h3>
        </div>

        <div class="container">
          <label for="hospital"><b>Hospital Name</b></label>
          <input type="text" placeholder="Enter Hospital Name" name="hospital" required>

          <label for="pwd"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="pwd" required>

          <button type="submit" name="submit">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtnSignin">Cancel</button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
      </form>
    </div>
    <!-- Recievers -->
    <div class="w3-col m6 l6">
    <form class="modal-content_signin animate" action="include/recievers_signin.php" method="post">
        <div class="imgcontainer">
          <img src="male_avatar.png" alt="Avatar" class="avatar">
            <h3>Sign In <span class="w3-text-green">RECEIVERS <i class="fa fa-child"></i></span></h3>
        </div>

        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>

          <button type="submit" name="submit">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtnSignin">Cancel</button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
      </form>
    </div>
      
</div>