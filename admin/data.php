<?php 
	include'../config/config.php';
	$date = $_POST['date'];
	$agama = mysqli_query($host, "SELECT AVG((ngaji+dhuha+tahajud)/3) WHERE date_survey='$date'");
	$it    = mysqli_query($host, "SELECT AVG((ngoding+ngetik+belajar)/3) WHERE date_survey='$date'");
	$kedisiplinan = mysqli_query($host, "SELECT AVG((tidur+bangun+sholat)/3) WHERE date_survey='$date'");


 ?>