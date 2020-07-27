<?php
session_start();
include_once 'dbh.php';

$name = $_POST['name'];
$pwd = $_POST['pwd'];

$result = mysqli_query($conn,"SELECT password from user WHERE username = $name");
if ($result != $pwd) {
	mysqli_query($conn, "INSERT INTO user(username,password)
VALUES ('$name','$pwd')");
}

if(isset($_POST['submitLogin'])) {
	$_SESSION['id'] = 1;
	header("Location:item.php");
} 