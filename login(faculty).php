<?php
session_start();
$user="root";
$pas="NeverGiveUp123#";
$db="Faculty";
$username=$_POST['username'];
$password=$_POST['password'];

$conn=new mysqli("localhost",$user,$pas,$db);
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT * FROM USERS WHERE username='$username';";

$result=$conn->query($sql);

if ( $result->num_rows == 0 )
{ // User doesn't exist
    $_SESSION['message'] = "Faculty with that Username doesn't exist!";
    header("location: error(faculty).php");
}
else{
    $user = $result->fetch_assoc();
    if($user['password']==$password)
    {
        $_SESSION['username'] = $user['username'];
            $_SESSION['first_name'] = $user['first_name'];
            $_SESSION['last_name'] = $user['last_name'];
        $_SESSION['logged_in'] = true;
        header("location: profile(faculty).php");

    }
    else
    {
        $_SESSION['message'] = "You have entered wrong password, try again!";
        header("location: error(faculty).php");
    }
    }
