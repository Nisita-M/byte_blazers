<?php

if (!isset($_POST['uname']) || !isset($_POST['upass1']) )

{
    echo "Missing Params";
    die;
}

$connection=new mysqli("localhost","root","","trnit_db",3306);

$status=mysqli_query($connection,"insert into user(username,password) values ('$_POST[uname]', '$_POST[upass1]')");
 
if ($status){
    echo "Registration Successful!";
}
else{
    echo mysqli_query($connection);
}

?>