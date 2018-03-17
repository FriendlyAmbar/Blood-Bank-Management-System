<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
      <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
      <a href="index.php" class="w3-bar-item w3-button w3-padding-large">Home</a>
      <a href="availablebloodsample.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Available Blood Samples</a>
      <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">About Us</a>
      <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Contact Us</a>
      <a href="blog.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Blog</a>
      <?php
      if (isset($_SESSION['urid'])) {
          echo '
          <div class="w3-right">
          <form action="include/signout.php" method="post">
          <button type="submit" class="signout w3-hide-small" name="submit"><i class="fa fa-plug"></i> Sign-Out</button>
          </form>
          </div>
          ';
      } else {
          echo '
          <div class="w3-right">
          <a href="#" onclick="document.getElementById(\'id01\').style.display=\'block\'" style="width:auto;" class="w3-bar-item w3-hide-small w3-button w3-padding-large w3-hover-white"><i class="fa fa-user"></i> Sign-Up</a>
          <a href="#" onclick="document.getElementById(\'id02\').style.display=\'block\'" style="width:auto;" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><i class="fa fa-sign-in"></i> Sign-In</a>
      </div>
          ';
      }
      ?>
      
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
      <a href="availablebloodsample.php" class="w3-bar-item w3-button w3-padding-large">Available Blood Samples</a>
      <a href="#" class="w3-bar-item w3-button w3-padding-large">About Us</a>
      <a href="#" class="w3-bar-item w3-button w3-padding-large">Contact Us</a>
      <a href="blog.php" class="w3-bar-item w3-button w3-padding-large">Blog</a>
      <?php
      if (isset($_SESSION['urid'])) {
          echo '
          <div class="w3-text-left">
          <form action="include/signout.php" method="post">
          <button type="submit" class="signout" name="submit"><i class="fa fa-plug"></i> Sign-Out</button>
          </form>
          </div>
          ';
      } else {
          echo '
          <div>
          <a href="#" onclick="document.getElementById(\'id01\').style.display=\'block\'" style="width:auto;" class="w3-bar-item w3-button w3-padding-large w3-hover-white"><i class="fa fa-user"></i> Sign-Up</a>
          <a href="#" onclick="document.getElementById(\'id02\').style.display=\'block\'" style="width:auto;" class="w3-bar-item w3-button w3-padding-large w3-hover-white"><i class="fa fa-sign-in"></i> Sign-In</a>
      </div>
          ';
      }
      ?>
  </div>
</div>
