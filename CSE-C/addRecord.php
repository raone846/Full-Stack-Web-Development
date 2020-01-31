<?php
include_once('config.php')
?>

<?php
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $username = $_POST['username'];
        $age = $_POST['age'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];

        $sql = "INSERT INTO `raone` (Id, Name, Age, Email, Phone)
        VALUES ('$id', '$username', '$age', '$email', '$contact')"; 
        if(mysqli_query($conn, $sql)){
            echo 'Data inserted successfully...';
        }
        else{
            echo 'Data insertion failed...'.mysqli_error($conn);
        }
    }
    else{
    echo "Please go back to Input Page.";
}
?>