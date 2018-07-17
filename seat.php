
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
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

$conn = mysqli_connect("localhost", "root","NeverGiveUp123#") or die("mysql_error");
mysqli_select_db($conn,"dbms_proj") or die("can't connect to database");

$query1="select ROOM_NO,FLOOR,NO_OF_2_SEATERS,NO_OF_3_SEATERS from ROOM";
$res1=$conn->query($query1);
echo '<table id="customers">
  <tr>


      <th> Room Number </th>
      <th> Floor </th>
      <th> No of 2 seaters </th>
      <th> No of 3 seaters</th>

  </tr>';
while($row1=$res1->fetch_assoc()){
  echo '
   <tr>

     <td>'.$row1['ROOM_NO'].'</td>
     <td>'.$row1['FLOOR'].'</td>
     <td>'.$row1['NO_OF_2_SEATERS'].'</td>
     <td>'.$row1['NO_OF_3_SEATERS'].'</td>

   </tr>';
   $
}
 ?>
</div>
</body>
</html>
