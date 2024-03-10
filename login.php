<?php

session_start();
$_SESSION['login_status']=false;

$uname = $_POST['uname'];
$upass=$_POST['upass'];

$connection = new mysqli("localhost","root","","trinit_db",3306);

$sql_result= mysqli_query($connection,  "select * from user where username = '$uname' and password='$upass'");

$no_of_rows = mysqli_num_rows($sql_result);

if ($no_of_rows==0){
    echo  "Invaid Credentials";
    die;
}

$dbrow=mysqli_fetch_assoc($sql_result);

echo "Login Success";
$_SESSION['login_status']=true;
$_SESSION['username']=$dbrow['username'];
$_SESSION['userid']=$dbrow['userid'];


?>

