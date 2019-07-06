<?php 
	include'../config/config.php';
	session_start();

	$id_user = $_SESSION['id_user'];
	$role    = $_SESSION['role'];

	//Agama
	$ngaji   = $_POST['ngaji'];
	$dhuha   = $_POST['dhuha'];
	$tahajud = $_POST['tahajud'];

	//IT
	$ngoding = $_POST['ngoding'];
	$ngetik  = $_POST['ngetik'];
	$belajar = $_POST['belajar'];

	//Kedisiplinan
	$tidur  = $_POST['tidur'];
	$bangun = $_POST['bangun'];
	$sholat = $_POST['sholat'];

	$date   = date("Y-m-d H:i:s");

	$insert = "INSERT INTO survey (id_user,ngaji,dhuha,tahajud,ngoding,ngetik,belajar,tidur,bangun,sholat,date_survey) VALUES ('$id_user', '$ngaji', '$dhuha', '$tahajud', '$ngoding', '$ngetik', '$belajar', '$tidur', '$bangun', '$sholat', '$date')";

	if (mysqli_query($host,$insert)) {
		header('location:index.php');

	}else{
		echo "gagal";
	}


 ?>