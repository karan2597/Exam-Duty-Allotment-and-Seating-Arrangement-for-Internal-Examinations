<?php

$conn = mysqli_connect("localhost", "root","NeverGiveUp123#") or die("mysql_error"); // connection to databse is mandatory in each of the page
mysqli_select_db($conn,"dbms_proj") or die("can't connect to database");

//$temp=$_POST["USN"];
//echo $temp;

if ($_POST['name']=="root") {
$temp34=$_POST["name1"];echo $temp34;
  $query1="select * from `Student1` where `FNname` IS " . "$temp34";
  $res1=$conn->query($query1);

  if($res1->num_rows>0){
    echo "string";
        $row1=$res1->fetch_assoc();

        $temp1=$row1['Fname'];
        $temp2=$row1['Mname'];
        $temp3=$row1['Lname'];
        $temp4=$row1['USN1'];
        $temp5=$row1['ROOM_NO'];

        echo '<table>
          <tr>


              <th> Fname </th>
              <th> Mname </th>
              <th> Lname </th>
              <th> USN </th>
              <th> Room Allocated </th>

          </tr>';

          echo '
           <tr>

             <td>'.$temp1.'</td>
             <td>'.$temp2.'</td>
             <td>'.$temp3.'</td>
             <td>'.$temp4.'</td>
             <td>'.$temp5.'</td>
           </tr>';
   }
 }


 ?>
