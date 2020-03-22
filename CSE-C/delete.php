<?php
$enroll = $_GET['id'];
if (!empty($id)){ 
include 'dbconnect.php';
  $sql= "DELETE FROM  `raone` WHERE Enrollment=$id";
  if($conn->query($sql)){
    header("location:show_detail.php");
  }
  else
  {
    echo " data deletion failed";
  }
}
 else {
 echo "enrollment number not available";
}
 ?>