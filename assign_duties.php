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
.w3-tangerine {
  font-family: "Tangerine", serif;
  text-align: center;
  color: yellow;

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
  <div class="w3-container w3-tangerine w3-flat-emerald">
  <p class="w3-xxlarge"><b>Faculty allocation for Continious Internal Evaluation 2018-19</b></p>
</div>
 <br><br>
<?php
//This segment consist of assiging duties to different invigilators such that toal no of duties <5 per faculty

$conn = mysqli_connect("localhost", "root","NeverGiveUp123#") or die("mysql_error"); // connection to databse is mandatory in each of the page
mysqli_select_db($conn,"dbms_proj") or die("can't connect to database");
$query_trunc="truncate def";
$res_trunc=$conn->query($query_trunc);
#$query="select ID,INITIALS from Faculty LIMIT  10";
#$res=$conn->query($query);
$count=0; $i=0;$a=0;  $temp1=0;$karan=0; $temp2=0;
##########################
while ($a < 6) {
  # code...
$p=($i*8)%24;
//echo $p;
$query2="select * from Faculty  LIMIT 8 offset $p";
$res2=$conn->query($query2);

$count=$count+1;
if($res2->num_rows>0){

  while($row2=$res2->fetch_assoc()){  #corresponds to each row of ROOM
    $query3="select ROOM_NO from ROOM LIMIT 1 offset $temp1";
    $res3=$conn->query($query3);
    $row3=$res3->fetch_assoc();
    $temp=$row3['ROOM_NO'];
    //echo $temp."  ";
    $query8="SELECT ID,INITIALS from Faculty LIMIT 1 offset $karan";
    $res8=$conn->query($query8);
    $row8=$res8->fetch_assoc();
    $temp2=$row8['ID'];
    $wow=$row8['INITIALS'];


    $query4="INSERT INTO def(`Initials`,`ID_of_Faculty_assigned`,`col1`,`CIE_slot`) values('$wow','$temp2','$temp','$count')";
    $conn->query($query4);
/*
    switch ($count) {
      case '1':
        # code...
        $date1="2018-04-09";
        $time1="09:30:00";
          $queryf="update def set Date_of_Exam='$date1',Time_of_Exam='$time1' where $count=1";
        break;
      case '2':
      $date1="2018-04-09";
      $time1="14:00:00";
        $queryf="update def set Date_of_Exam='$date1',Time_of_Exam='$time1' where $count=2";
        # code...
        break;
      case '3':
      $date1="2018-04-10";
      $time1="09:30:00";
        $queryf="update def set Date_of_Exam='$date1',Time_of_Exam='$time1' where $count=3";
        # code...
        break;
      case '4':
      $date1="2018-04-10";
      $time1="14:00:00";
        $queryf="update def set Date_of_Exam='$date1',Time_of_Exam='$time1' where $count=4";
          # code...
      break;
      case '5':
      $date1="2018-04-11";
      $time1="09:30:00";
        $queryf="update def set Date_of_Exam='$date1',Time_of_Exam='$time1' where $count=5";
        # code...
        break;
      case '6':
        # code...
        $date1="2018-04-11";
        $time1="14:00:00";
          $queryf="update def set Date_of_Exam='$date1',Time_of_Exam='$time1' where $count=6";
        break;

    }

    $conn->query($queryf);
*/



    $karan=($karan+1)%24;
    $temp1=($temp1+1)%8;
    $temp2=$temp2+1;
  }

#########################
$i=$i+1;
$a=$a+1;
}


}
/*$b=0;
while ($b < 144) {
  # code...

$query_new="select Date_of_Exam,Time_of_Exam,Slot from TT_3 LIMIT 1 offset $temp2";
$res_new=$conn->query($query_new);

$row_new=$res_new->fetch_assoc();

$case=$row_new['Slot'];

switch ($case) {
  case '1':
    # code...
    $date1=$row_new['Date_of_Exam'];
    $time1=$row_new['Time_of_Exam'];
    break;
  case '2':
  $date1=$row_new['Date_of_Exam'];
  $time1=$row_new['Time_of_Exam'];
    # code...
    break;
  case '3':
  $date1=$row_new['Date_of_Exam'];
  $time1=$row_new['Time_of_Exam'];
    # code...
    break;

    case '4':
    $date1=$row_new['Date_of_Exam'];
    $time1=$row_new['Time_of_Exam'];
      # code...
    break;

    case '5':
    $date1=$row_new['Date_of_Exam'];
    $time1=$row_new['Time_of_Exam'];
      break;

    case '6':
    $date1=$row_new['Date_of_Exam'];
    $time1=$row_new['Time_of_Exam'];

      break;

$query40="INSERT INTO def(`Date_of_Exam`,`Time_of_Exam`) values('$date1','$time1')";
$conn->query($query40);
}
$temp2=($temp2+1)%8;
$b=$b+1;
}*/



  $querya="update def set Date_of_Exam='2018-04-09',Time_of_Exam='09:30:00' where CIE_slot=1";
  $conn->query($querya);
  $queryb="update def set Date_of_Exam='2018-04-09',Time_of_Exam='14:00:00' where CIE_slot=2";
  $conn->query($queryb);
  $queryc="update def set Date_of_Exam='2018-04-10',Time_of_Exam='09:30:00' where CIE_slot=3";
  $conn->query($queryc);
  $queryd="update def set Date_of_Exam='2018-04-10',Time_of_Exam='14:00:00' where CIE_slot=4";
  $conn->query($queryd);
  $querye="update def set Date_of_Exam='2018-04-11',Time_of_Exam='09:30:00' where CIE_slot=5";
  $conn->query($querye);
  $queryf="update def set Date_of_Exam='2018-04-11',Time_of_Exam='14:00:00' where CIE_slot=6";
  $conn->query($queryf);
//  $queryc=""




echo '<table id="customers">
  <tr>
      <th> Initials </th>
      <th> ID of Faculty </th>
      <th> Room Number </th>
      <th> CIE slot </th>
      <th> Date of Exam </th>
      <th> Time of Exam </th>
  </tr>';
$query_final="select * from def";
$res_final=$conn->query($query_final);
if ($res_final->num_rows > 0) {
    // output data of each row
    while($row_final = $res_final->fetch_assoc()) {
       echo '
        <tr>
        <td>'.$row_final['Initials'].'</td>
        <td>'.$row_final['ID_of_Faculty_assigned'].'</td>
        <td>'.$row_final['col1'].'</td>
        <td>'.$row_final['CIE_slot'].'</td>
        <td>'.$row_final['Date_of_Exam'].'</td>
        <td>'.$row_final['Time_of_Exam'].'</td>
        </tr>';

    }
}
 else {
    echo "0 results";
}
echo '</table>';
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
    $error = "success";
    header('Location:execute1.php');}
?>

</div>
</body>
</html>


  <html>
<head>
<style>
.button {
    background-color: Purple; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}



.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
</head>
<body>
<br>
<form action="report.php" method="post">
<button class="button button2">Click to Generate Report!</button>
</form>
</body>
</html>
