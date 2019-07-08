<?php 
	include'../config/config.php';

	if (isset($_POST['date'])) {
	 $date          = $_POST['date'];
	 $agama		    = mysqli_query($host, "SELECT AVG((ngaji+dhuha+tahajud)/3) AS sum FROM survey WHERE date_survey='$date'");
	 $it    	    = mysqli_query($host, "SELECT AVG((ngoding+ngetik+belajar)/3) AS sum FROM survey WHERE date_survey='$date'");
	 $kedisiplinan  = mysqli_query($host, "SELECT AVG((tidur+bangun+sholat)/3) AS sum FROM survey WHERE date_survey='$date'");

	 $data  	= mysqli_fetch_array($agama);
	 $data 	    = mysqli_fetch_array($it);
	 $data 	    = mysqli_fetch_array($kedisiplinan);
	 $dataAgama = number_format($data['sum'],1);
	 $dataIt    = number_format($data['sum'],1);
	 $dataDis   = number_format($data['sum'],1);
		
	}else{
		$date = date("Y-m-d");
		$agama		    = mysqli_query($host, "SELECT AVG((ngaji+dhuha+tahajud)/3) AS sum FROM survey WHERE date_survey='$date'");
		$it    	    = mysqli_query($host, "SELECT AVG((ngoding+ngetik+belajar)/3) AS sum FROM survey WHERE date_survey='$date'");
		$kedisiplinan  = mysqli_query($host, "SELECT AVG((tidur+bangun+sholat)/3) AS sum FROM survey WHERE date_survey='$date'");

		$data      = mysqli_fetch_array($agama);
		$data      = mysqli_fetch_array($it);
		$data 	   = mysqli_fetch_array($kedisiplinan);
		$dataAgama = number_format($data['sum'],1);
		$dataIt    = number_format($data['sum'],1);
		$dataDis   = number_format($data['sum'],1);
	}

 ?>