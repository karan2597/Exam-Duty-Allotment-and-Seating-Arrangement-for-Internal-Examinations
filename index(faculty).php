<?php 
/* Main page with two forms: sign up and log in */

?>
<!DOCTYPE html>
<html>
<head>
  <title>Faculty Login Form</title>
  <?php include 'css/css.html'; ?>
</head>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) { //user logging in

        require 'login(faculty).php';
        
    }
    
    //elseif (isset($_POST['register'])) { //user registering
        
      //  require 'register.php';
        
//    }
}
?>
<body>
  <div class="form">
      
      <ul class="tab-group">
       <!-- <li class="tab"><a href="#signup">Sign Up</a></li>-->
        <li class="tab active"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">

         <div id="login">   
          <h1>Welcome </h1>
          
          <form action="index(faculty).php" method="post" autocomplete="off">
          
            <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
            <input type="username" required autocomplete="off" name="username"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name="password"/>
          </div>
          
          <!--<p class="forgot"><a href="forgot.php">Forgot Password?</a></p>-->
          
          <button class="button button-block" name="login" />Log In</button>
          
          </form>

        </div>
          
         
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
