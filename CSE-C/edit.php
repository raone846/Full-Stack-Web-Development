<?php include('config.php'); ?>

<?php
$id = $_GET['id'];
?>


<?php
if(isset($_POST['update'])){
    $name = $_POST['username'];
    $age = $_POST['age'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    
    $sql = "UPDATE `raone` SET Name='$name', Age='$age',
    Phone='$contact', Email='$email' WHERE Id='$id'";
    if(mysqli_query($conn, $sql)){
        header("Location:details.php");
    }
    else{
        echo 'failed'.mysqli_error($conn);
    }
}
else{
    $sql = "SELECT * FROM `raone` WHERE Id='$id'";
    $result = mysqli_query($conn, $sql);
   while( $row = $result->fetch_assoc()){
        $id = $row['Id'];
        $name = $row['Name'];
        $age = $row['Age'];
        $contact = $row['Phone'];
        $email = $row['Email'];
   }
}
?>


<html>
<head><title>Update Data</title></head>

<body>
    <form action="edit.php?id=<?php echo $id; ?>" method="post">
      UserName - <input name="username" type="text" value="<?php echo $name; ?>" placeholder="Enter Username"><br>
      Age - <input name="age" type="text" value="<?php echo $age; ?>" placeholder="Enter Age"><br>
      Contact - <input name="contact" type="text" value="<?php echo $contact; ?>" placeholder="Enter Contact"><br>
      EMail - <input name="email" type="email" value="<?php echo $email; ?>" placeholder="Enter E-Mail"><br>
      <input name="update" type="submit" value="Update">
    </form>
</body>
</html>