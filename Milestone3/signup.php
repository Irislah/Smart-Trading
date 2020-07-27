
<?php
include_once 'dbh.php';

$name = $_POST['name'];
$pwd = $_POST['pwd'];
mysqli_query($conn, "INSERT INTO user(username,password)
VALUES ('$name','$pwd')");

hearder("Location: item.php");

?>