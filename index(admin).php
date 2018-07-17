<?php
/* Main page with two forms: sign up and log in */

session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
  <?php include 'css/css.html'; ?>
</head>


<body>
  <div class="form">

      <ul class="tab-group">
      <!--  <li class="tab"><a href="#signup">Sign Up</a></li>-->
        <li class="tab active"><a href="#login">Log In</a></li>
      </ul>

      <div class="tab-content">

         <div id="login">
          <h1>Welcome!</h1>

          <form action="login(admin).php" method="post" autocomplete="off">

            <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="username"/>
          </div>

          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name="password"/>
          </div>

         <!-- <p class="forgot"><a href="forgot.php">Forgot Password?</a></p>-->

          <button class="button button-block" name="login" />Log In</button>

          </form>

        </div>

      </div><!-- tab-content -->

</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>s
