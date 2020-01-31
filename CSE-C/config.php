<?php
$hostName = 'localhost';
$userName = 'root';
$password = '';
$dataBase = 'user';

$conn= mysqli_connect($hostName, $userName, $password, $dataBase);

if(mysqli_connect($hostName, $userName, $password, $dataBase)){
   // echo 'Connection Successful!';
}
else{
    echo "Connection Failed!" + mysqli_connect_error();
}
?>