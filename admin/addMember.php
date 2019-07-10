<?php 
	include'../config/config.php';
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$pass	  = $_POST['password'];
		$role	  = $_POST['role'];

		$insert   = mysqli_query($host, "INSERT INTO user (username, password, role) VALUES ('$username', '$pass', '$role')");
		if ($insert) {
			header('location:members.php');
		}else{
			echo "gagal";
		}
	}
 ?>