<table border="1">
<thead>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Age</th>
    <th>Contact</th>
    <th>Email</th>
    <th>Edit</th>
    <th>Delete</th>
</tr>    
</thead>
<tbody>

<?php
include('config.php');
?>

<?php
$sql = "SELECT * FROM `raone`";
$result = mysqli_query($conn, $sql);
?>

<?php
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
?>
    <tr>
        <td><?php echo $row['Id']; ?></td>
        <td><?php echo $row['Name']; ?></td>
        <td><?php echo $row['Age']; ?></td>
        <td><?php echo $row['Phone']; ?></td>
        <td><?php echo $row['Email']; ?></td>
        <td><a href="edit.php">Edit</a></td>
        <td><a href="delete.php">Delete</a></td>
    </tr>  
<?php    }
}
?>
</tbody>
</table>