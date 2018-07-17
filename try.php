<?php
    // Start the session
    ob_start();
    session_start();

    // Check to see if actually logged in. If not, redirect to login page

?>
<?php
#echo"test\n";


 $conn = mysqli_connect("localhost", "root","NeverGiveUp123#") or die("mysql_error");
 mysqli_select_db($conn,"dbms_proj") or die("can't connect to database");
// if(mysqli_connect_errno()){
//     echo "Error".mysqli_connect_errno();
//}

  #$query=mysqli_query($conn,"SELECT * from Student");
//  print "b4 query\n";
#$query="select ID,INITIALS from Faculty LIMIT  7";
#$res=$conn->query($query);
#count++;

#$query1="update abc set No_of_Duties=count where "
#$conn->query($query);

  #print $num;
  /*echo '<table>
    <tr>

        <th> ID </th>

        <th> Initials </th>
    </tr>';

  if ($res->num_rows > 0) {
      // output data of each row
      while($row = $res->fetch_assoc()) {
          echo '
          <tr>
          <td>'.$row['ID'].'</td>
          <td>'.$row['INITIALS'].'</td>
          </tr>';
      }
  } else {
      echo "0 results";
  }
  echo '</table>';*/
  $conn->close();
#  echo $query;
#print "after query\n";
  ?>


  <form action="stud_allocate.php" method="post">
    <html>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <body>

    <div class="w3-container">

    <div class="w3-bar">

      <button class="w3-button w3-teal">Click here to allocate the students</button>

    </div>
    </div>

    </body>
    </html>
  </form>

  <form action="assign_duties.php" method="post">
    <html>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <body>

    <div class="w3-container">

    <div class="w3-bar">
      <button class="w3-button w3-red">Click here to assign duties</button>
    </div>
    </div>

    </body>
    </html>
  </form>


  <form method="post" action="ttg.php">

  <html>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <body>

  <div class="w3-container">

  <div class="w3-bar">
  <button class="w3-button w3-pink">Check the time table for 2nd Year</button>

  </div>
  </div>

  </body>
  </html>
  </form>


  <form method="post" action="ttg1.php">

  <html>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <body>

  <div class="w3-container">

  <div class="w3-bar">
  <button class="w3-button w3-blue">Check the time table for 3rd Year</button>

  </div>
  </div>

  </body>
  </html>
  </form>




  <form method="post" action="logout.php">

<html>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container">

<div class="w3-bar">
  <button class="w3-button w3-black">Logout</button>

</div>
</div>

</body>
</html>
  </form>
