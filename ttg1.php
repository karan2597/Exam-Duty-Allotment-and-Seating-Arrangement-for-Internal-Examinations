
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="../lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
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
.w3-tangerine {
  font-family: "Tangerine", serif;
  text-align: center;
  color: yellow;

}
</style>
<body>
  <div class="w3-container w3-tangerine w3-flat-emerald">
  <p class="w3-xxlarge"><b>Time Table for 5th Semester B.E.</b></p>
  </div>
<br><br>

<?php
$conn = mysqli_connect("localhost", "root","NeverGiveUp123#") or die("mysql_error"); // connection to databse is mandatory in each of the page
mysqli_select_db($conn,"dbms_proj") or die("can't connect to database");

$query1="select * from TT_3 where Sem=5 order by Date_of_Exam";
$res1=$conn->query($query1);

echo '<table id="customers">
  <tr>

      <th> Date of Exam </th>

      <th> Time of Exam </th>
      <th> Course Code </th>
      <th> Course name </th>
  </tr>';
 while($row1=$res1->fetch_assoc()){
   echo '
    <tr>
    <td>'.$row1['Date_of_Exam'].'</td>
    <td>'.$row1['Time_of_Exam'].'</td>
    <td>'.$row1['Sub_code'].'</td>
    <td>'.$row1['Sub_name'].'</td>
    </tr>';
 }

 ?>
</div>
</body>
</html>
