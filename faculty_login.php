
<?php
$conn = mysqli_connect("localhost", "root","NeverGiveUp123#") or die("mysql_error"); // connection to databse is mandatory in each of the page
mysqli_select_db($conn,"dbms_proj") or die("can't connect to database");
?>
<html>
<body>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<form name='form' method='post' action="faculty_login1.php">

Name: <input type="text" name="name" id="name"><br><br>

Password: <input type="password" name="password" id="password1"> <br><br>

<div class="w3-container">

<div class="w3-bar">

  <button class="w3-button w3-teal">Click here</button>
  <button type="reset" class="w3-button w3-purple"> Reset <br>
</div>
</div>

</body>
</html>
