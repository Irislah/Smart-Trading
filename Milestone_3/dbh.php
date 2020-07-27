<?php
$conn = mysqli_connect("localhost", "root", "password","smart-trading");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>