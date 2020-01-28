<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$databaseName = 'user';

$conn = mysqli_connect($hostname, $username, $password, $databaseName);

if($conn){
    echo "connection successfull";
}
else{
    echo mysqli_error();
}
?>