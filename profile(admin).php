<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error(admin).php");
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

          <h1>Welcome Admin</h1>
	<h1><?php echo $first_name.' '.$last_name; ?></h1>


          <ul class="tab-group">
      <!--  <li class="tab"><a href="#signup">Sign Up</a></li>-->
        <li class="tab active"><a href="#login">Options</a></li>
      </ul>

      <div class="tab-content">

         <div id="login">


         <form action="stud_allocate.php" method="post" autocomplete="off">

            <div class="field-wrap">
             <button class="button button-block" name="Room_Alloc" />ROOM ALLOCATION</button>

          </div>
        </form>
        <form action="assign_duties.php" method="post">
          <div class="field-wrap">
            <button class="button button-block" name="Fac_Allot" />FACULTY ALLOTMENT</button>
          </div>
        </form>


        </form>
        <form  action="ttg.php" method="post">
	<div class="field-wrap">
             <button class="button button-block" name="2TT" />2nd YEAR TIME-TABLE</button>

          </div>
        </form>
        <form  action="ttg1.php" method="post">


          <div class="field-wrap">
            <button class="button button-block" name="3TT" />3rd YEAR TIME-TABLE</button>
          </div>
</form>
         <!-- <p class="forgot"><a href="forgot.php">Forgot Password?</a></p>-->


          </form>

        </div>



          <a href="logout(admin).php"><button class="button button-block" name="logout"/>Log Out</button></a>

    </div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

</body>
</html>
