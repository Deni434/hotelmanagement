<?php
	if(ISSET($_POST['add_account'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$email = $_POST['email'];
		$query = $conn->query("SELECT * FROM `admin` WHERE `username` = '$username'") or die(mysqli_error());
		$valid = $query->num_rows;
		if($valid > 0){
			echo "<center><label style = 'color:red;'>Username already taken</center></label>";
		}else{
			$conn->query("INSERT INTO `admin` (name, username, password, email) VALUES('$name', '$username', '$password', '$email')") or die(mysqli_error());
			header("location:account.php");
		}
	}
?>