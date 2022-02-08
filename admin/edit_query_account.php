<?php
	require_once 'connect.php';
	if(ISSET($_POST['edit_account'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$oldpassword = $_POST['oldpassword'];

		$password = $_POST['password'];
		
		$query = $conn->query("SELECT * FROM `admin` WHERE `password` = '$oldpassword'") or die(mysqli_error());
		$valid = $query->num_rows;
		if($valid > 0){
		$conn->query("UPDATE `admin` SET `name` = '$name',`email` = '$email', `username` = '$username', `password` = '$password' WHERE `admin_id` = '$_REQUEST[admin_id]'") or die(mysqli_error());
		header("location:account.php");}
else{
	echo "<center><label style = 'color:red;'>old password wrong</center></label>";
}
	}	