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

	//nilai
	$agama		  = mysqli_query($host, "SELECT AVG((ngaji+dhuha+tahajud)/3) WHERE date_survey='$date'");
	$it    		  = mysqli_query($host, "SELECT AVG((ngoding+ngetik+belajar)/3) WHERE date_survey='$date'");
	$kedisiplinan = mysqli_query($host, "SELECT AVG((tidur+bangun+sholat)/3) WHERE date_survey='$date'");

	$insert_nilai = mysqli_query($host, "INSERT INTO nilai (agama, it, kedisiplinan) VALUES ('$agama', '$it', '$kedisiplinan')");

	if (mysqli_query($host,$insert)) {
		if ($insert_nilai) {
			header('location:index.php');
		}

	}else{
		echo "gagal";
	}


 ?>