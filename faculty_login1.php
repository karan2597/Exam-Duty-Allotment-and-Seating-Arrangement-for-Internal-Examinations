
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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


<?php
$conn = mysqli_connect("localhost", "root","NeverGiveUp123#") or die("mysql_error"); // connection to databse is mandatory in each of the page
mysqli_select_db($conn,"dbms_proj") or die("can't connect to database");


      $temp=$_POST['ID'];
      //echo $temp;
      $query1="select * from Faculty where ID="."$temp";
      //echo $temp;
      $res1=$conn->query($query1);
      if($res1->num_rows>0){
        $row1=$res1->fetch_assoc();
        $temp1=$row1['Fname'];
        $temp2=$row1['MNAME'];
        $temp3=$row1['LNAME'];


        echo '<table id="customers">
          <tr>


              <th> Slot Number </th>
              <th> Room Number </th>
              <th> Date of Examination </th>
              <th> Time Slot for Examination</th>
              <th> Number of Students </th>
          </tr>';
      //  echo $temp1." ". $temp2." ".$temp3." has been assigned duties for the following slots for CIE in following rooms: -";


        $query2="select col1,CIE_slot,Date_of_Exam,Time_of_Exam from def where ID_of_Faculty_assigned="."$temp" ;
        $res2=$conn->query($query2);
        //echo $res2->num_rows." ";
        while ($row2=$res2->fetch_assoc()) {
          # code...
          
          $temp5=$row2['CIE_slot'];
          $temp6=$row2['col1'];
          $temp7=$row2['Date_of_Exam'];
          $temp8=$row2['Time_of_Exam'];
          $cons="17";
          //echo "\n"."Slot-->".$temp5." Room No -->" .$temp6
             echo '
              <tr>

                <td>'.$temp5.'</td>
                <td>'.$temp6.'</td>
                <td>'.$temp7.'</td>
                <td>'.$temp8.'</td>
                <td>'.$cons.'</td>
              </tr>';
      }

}
else {
  echo "string";
}




 ?>
 <div class="w3-container w3-tangerine w3-flat-emerald">
 <p class="w3-xxlarge"><b><h1'> Welcome <?php echo $temp1.$temp2." ".$temp3."!"; ?></h1></b></p>
</div>
<br> <br>
</body>
</html>
