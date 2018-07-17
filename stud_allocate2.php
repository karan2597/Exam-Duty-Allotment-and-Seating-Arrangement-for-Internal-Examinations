<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
<style>
.w3-tangerine {
  font-family: "Tangerine", serif;
  text-align: center;
  color: yellow;

}
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

  <div class="w3-container w3-tangerine w3-flat-emerald">
  <p class="w3-xxlarge"><b>Room allocation for the students for 3rd slot</b></p>
</div>

<?php

$conn = mysqli_connect("localhost", "root","NeverGiveUp123#") or die("mysql_error"); // connection to databse is mandatory in each of the page
mysqli_select_db($conn,"dbms_proj") or die("can't connect to database");
$prev1=0; $prev2=0;
$a=0;
$date='2018-04-10';
$time='09:30:00';
  # code...
$query_init="truncate Student1";
$res_init=$conn->query($query_init);
$query2="select * from ROOM1 order by rand()";    //randimising
$res=$conn->query($query2);

$i=0;
if ($res->num_rows > 0) {
    // output data of each row
    while($row = $res->fetch_assoc()) {

       $abc=$row['R_NU'];
       //echo $abc;
        $query3="select NO_OF_2_SEATERS from ROOM";
        $var=$conn->query($query3);
        $var1=$var->fetch_assoc();  #var1=4
        #echo $var1['NO_OF_2_SEATERS'];

        $query4="select NO_OF_3_SEATERS from ROOM";
        $varp=$conn->query($query4);
        $var2=$varp->fetch_assoc();     #var2=3

        $prev1= $var1['NO_OF_2_SEATERS']+ $var2['NO_OF_3_SEATERS'];

        $temp=$i*$prev1;

        $query5="select * from Student where SEM=4 LIMIT 7 offset $temp";
        $res1=$conn->query($query5);

        $query_sub2="select Sub_code,Sub_name from TT_3 where Sem=3 and Date_of_Exam='$date' and Time_of_Exam='$time' ";
        $res_sub2=$conn->query($query_sub2);
        $row_sub2=$res_sub2->fetch_assoc();
        while ($row1 = $res1->fetch_assoc()) {
       $alpha=$row1['USN'];
       #echo $alpha."  ". $abc;
       $bed1=$row1['Fname'];
       $sub2=$row_sub2['Sub_code'];
       $sub2_name=$row_sub2['Sub_name'];
       //echo $bed1." ";
       $bed2=$row1['Mname'];
       $bed3=$row1['Lname'];
       $query7="insert into Student1(Fname,Mname,Lname,USN1,ROOM_NO,Sub_Code,Course_name,Date_of_Exam,Time_of_Exam) values('$bed1','$bed2','$bed3','$alpha','$abc','$sub2','$sub2_name','$date','$time')";

        $conn->query($query7);
      }

        #returns a table of USN of student from start to end for 4th SEM
        #$final1="select * $res1 order by USN ASC LIMIT 1"; returns first USN o*
        $prev2= $var1['NO_OF_2_SEATERS']+ 2*$var2['NO_OF_3_SEATERS'];
        $temp1=$i*$prev2;
        $query6="select * from Student where SEM=6 LIMIT 10 offset $temp1";

        $res2=$conn->query($query6);

        $query_sub="select Sub_code,Sub_name from TT_3 where Sem=5 and Date_of_Exam='$date' and Time_of_Exam='$time'";
        $res_sub=$conn->query($query_sub);
        $row_sub=$res_sub->fetch_assoc();
        while ($row2 = $res2->fetch_assoc()) {
          # codetr>
          $beta=$row2['USN'];
          $sub=$row_sub['Sub_code'];
          $sub_name=$row_sub['Sub_name'];
          $bed4=$row2['Fname'];
          $bed5=$row2['Mname'];
          $bed6=$row2['Lname'];
          $query8="insert into Student1(Fname,Mname,Lname,USN1,ROOM_NO,Sub_Code,Course_name,Date_of_Exam,Time_of_Exam) values('$bed4','$bed5','$bed6','$beta','$abc','$sub','$sub_name','$date','$time')";
          $conn->query($query8);
        }

    $i=$i+1;

}
$temp=$temp+7;
#$temp1=$temp1+10;
  #$final=$temp1+$temp;
  $query10="select * from Student where SEM=4 LIMIT 9 offset $temp";
  $gamma=$conn->query($query10);
  $query_sub1="select Sub_code,Sub_name from TT_3 where Sem=3 and Date_of_Exam='$date' and Time_of_Exam='$time'";
  $res_sub1=$conn->query($query_sub1);

  $row_sub1=$res_sub1->fetch_assoc();
  while ($row8 = $gamma->fetch_assoc()) {

    # codetr>
    $delta=$row8['USN'];
    $sub1=$row_sub1['Sub_code'];
    $sub1_name=$row_sub1['Sub_name'];
    $bed7=$row8['Fname'];
    $bed8=$row8['Mname'];
    $bed9=$row8['Lname'];
    $query11="insert into Student1(Fname,Mname,Lname,USN1,ROOM_NO,Sub_Code,Course_name,Date_of_Exam,Time_of_Exam) values('$bed7','$bed8','$bed9','$delta','$abc','$sub1','$sub1_name','$date','$time')";
    $conn->query($query11);
  }


  $query9="select * from Student1";
  $res_final=$conn->query($query9);

  echo '<table id="customers">
    <tr>

        <th> USN of Student </th>
        <th> Fname </th>
        <th> Mname </th>
        <th> Lname </th>
        <th> Room No allocated </th>
        <th> Course Code </th>
        <th> Course Name </th>
        <th> Date of Exam </th>
        <th> Time of Exam </th>
    </tr>';


while($row3 = $res_final->fetch_assoc()) {
echo '
<tr>

<td>'.$row3['USN1'].'</td>
<td>'.$row3['Fname'].'</td>
<td>'.$row3['Mname'].'</td>
<td>'.$row3['Lname'].'</td>
<td>'.$row3['ROOM_NO'].'</td>
<td>'.$row3['Sub_Code'].'</td>
<td>'.$row3['Course_name'].'</td>
<td>'.$row3['Date_of_Exam'].'</td>
<td>'.$row3['Time_of_Exam'].'</td>
</tr>';
  #</tr>';

}

}



  else {
      echo "string";
  }
//  $a=$a+1;
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
        $error = "success";
        header('Location:execute.php');
    }

 ?>

</div>
</body>
</html>

<html>
<head>
<style>
.pagination {
    display: inline-block;
}

.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
}

.pagination a.active {
    background-color: #4CAF50;
    color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}

</style>
</head>
<body>

  <div class="pagination">
  <a href="stud_allocate1.php">&laquo;</a>
  <a href="stud_allocate.php">1</a>
  <a href="stud_allocate1.php">2</a>
  <a class="active" href="#">3</a>

  <a href="stud_allocate3.php ">&raquo;</a>
</div>

</body>
</html>
