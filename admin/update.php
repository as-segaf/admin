<?php 
	include'../config/config.php';
	session_start();
	if (isset($_POST['submit'])) {
		$id 	 = $_GET['id'];
		$oldPass = $_POST['oldPass'];
		$newPass = $_POST['newPass'];
		$rePass  = $_POST['newPass1'];

		$select = mysqli_query($host, "SELECT password FROM user WHERE id='$id'");
		$data   = mysqli_fetch_array($select);
		$update = mysqli_query($host, "UPDATE user SET password='$newPass' WHERE id='$id'");

		if ($oldPass = $data['password']) {
			if ($newPass = $newPass1) {
				if ($update) {
					$_SESSION['msg'] = "success";
					header('location:profile.php');

				}else{
					$_SESSION['msg'] = "failed";
					header('location:profile.php');
				}
			}else{
				$_SESSION['msg'] = "doesn't match";
				header('location:profile.php');
			}
		}else{
			$_SESSION['msg'] = "wrong pass";
			header('location:profile.php');
		}
	}



 ?>