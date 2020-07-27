<?php
session_start();
include_once 'dbh.php';
$id = $_SESSION['id'];

# if user click the button called submit
if (isset($_POST['submit'])) {
	$file = $_FILES['file'];
	
	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];

	$fileExt = explode('.',$fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('jpg','jpeg','png','pdf');

	if (in_array($fileActualExt, $allowed)) {
		if ($fileError === 0) {
			if ($fileSize < 100000000000) {
				$fileNameNew = "profile".$id.".".$fileActualExt;
				$fileDestination = 'uploads/'.$fileName;
				move_uploaded_file($fileTmpName, $fileDestination);
				// Get all the submitted data from the form 
        		$sql = "INSERT INTO image (filename) VALUES ('$fileName')"; 
				$result = mysqli_query($conn, $sql);
				header("Location: item.php?uploadsuccess");
			} else {
				echo "Your file is too big!";
			}
		} else {
			echo "There was an error uploading your file!";
		}
	} else {
		echo "You cannot upload files of this type!";
	}
}