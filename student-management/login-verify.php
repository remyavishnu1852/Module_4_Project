<?php
include('config.php');
if(count($_POST)>0) {
	$result = mysqli_query($conn,"SELECT * FROM admin WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		echo "Invalid Username or Password!";
        header("Refresh: 3; url=login.php");
	} else {
		header("Location:index.php");
	}
}
?>