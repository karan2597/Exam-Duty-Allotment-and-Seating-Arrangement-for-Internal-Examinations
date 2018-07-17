<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 75%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: center;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #4CAF50;
    color: white;
}
</style>
<body>



<?php

$conn = mysqli_connect("localhost", "root","NeverGiveUp123#") or die("mysql_error"); // connection to databse is mandatory in each of the page
mysqli_select_db($conn,"dbms_proj") or die("can't connect to database");

$query1="select `ID_of_Faculty_assigned`,count(ID_of_Faculty_assigned) from `def` group by `ID_of_Faculty_assigned`";
$res1=$conn->query($query1);
$query2="select INITIALS from Faculty";
$res2=$conn->query($query2);
if($res1->num_rows>0){
echo '<table id="customers">
  <tr>

      <th> ID of Faculty </th>
      <th> Initials </th>
      <th> No. of duties </th>

  </tr>';
  while($row1=$res1->fetch_assoc()){
      $row2=$res2->fetch_assoc();
    echo '
     <tr>
     <td>'.$row1['ID_of_Faculty_assigned'].'</td>
     <td>'.$row2['INITIALS'].'</td>
     <td>'.$row1['count(ID_of_Faculty_assigned)'].'</td>
     </tr>';
  }
}
else {
  echo "No duties assigned";
}
 ?>
</div>
</body>
</html>



<form  action="assign_duties.php" method="post">

<html>
<head>
<style>
.button {
display: inline-block;
padding: 15px 25px;
font-size: 24px;
cursor: pointer;
text-align: center;
text-decoration: none;
outline: none;
color: #fff;
background-color: #4CAF50;
border: none;
border-radius: 15px;
box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
background-color: #3e8e41;
box-shadow: 0 5px #666;
transform: translateY(4px);
}
</style>
</head>
<body>

<br><br>
<button class="button">Previous Page</button>

</body>
</html>

</form>


<form  action="profile(admin).php" method="post">

<html>
<head>
<style>
.button {
display: inline-block;
padding: 15px 25px;
font-size: 24px;
cursor: pointer;
text-align: center;
text-decoration: none;
outline: none;
color: #fff;
background-color: #4CAF50;
border: none;
border-radius: 15px;
box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
background-color: #3e8e41;
box-shadow: 0 5px #666;
transform: translateY(4px);
}
</style>
</head>
<body>

<br><br>
<button class="button">Return to Home!</button>
<br><br>
</body>
</html>

</form>
