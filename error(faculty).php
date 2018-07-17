<?php
/* Displays all error messages */

?>
<!DOCTYPE html>
<html>
<head>
  <title>Error</title>
  <?php include 'css/css.html'; ?>
</head>
<body>
<div class="form">
    <h1>Error</h1>
    <p>
    <?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ): 
        echo $_SESSION['message'];    
    else:
        header( "location: index(faculty).php" );
    endif;
    ?>
    </p>     
    <a href="index(faculty).php"><button class="button button-block"/>Home</button></a>
</div>
</body>
</html>
