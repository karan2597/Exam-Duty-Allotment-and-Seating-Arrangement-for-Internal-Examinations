<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error(stud).php");    
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $username = $_SESSION['username'];
    
}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Welcome <?= $first_name.' '.$last_name ?></title>
  <?php include 'css/css.html'; ?>
</head>

<body>
  <div class="form">

          <h1>Welcome <?php echo $first_name.' '.$last_name; ?></h1>
         

          <ul class="tab-group">
      <!--  <li class="tab"><a href="#signup">Sign Up</a></li>-->
        <li class="tab active"><a href="#login">Seating Arrangement</a></li>
      </ul>
      
      <div class="tab-content">

         <div id="login">   
          
          
         <form action="" method="post" autocomplete="off">
          
            <div class="field-wrap">
            <label>
              Student Usn<span class="req">*</span>
            </label>
            <input type="Id" required autocomplete="off" name="Faculty ID"/>
                  
          </div>
          
          <div class="field-wrap">
            <button class="button button-block" name="Enter" />Submit</button>
          </div>
          
         <!-- <p class="forgot"><a href="forgot(faculty).php">Forgot Password?</a></p>-->
          
         
          </form>


        </div>
	<a href="logout(stud).php"><button class="button button-block" name="logout"/>Log Out</button></a>

          
      
          
          
          
       

    </div>
    
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

</body>
</html>
