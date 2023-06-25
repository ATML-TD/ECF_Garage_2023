<?php

session_start();
ini_set('display_errors', 'on');
error_reporting(E_ALL);
include('../includes/Config.php');

if (isset($_POST['submit_car_btn'])) {
	$carsname = $_POST['carsname'];
	$carsprice = $_POST['carsprice'];
	$carsyear = $_POST['carsyear'];
	$carskm = $_POST['carskm'];
	$carsdescription = $_POST['carsdescription'];
	$carsseat = $_POST['carsseat'];
	$carstype = $_POST['carstype'];
	$carsac = $_POST['carsac'];
	$bluetooth = $_POST['bluetooth'];
	$autolight = $_POST['autolight'];
	$carsimage1 = $_FILES['carsimage1']['name'];
	$carsimage2 = $_FILES['carsimage2']['name'];
	$carsimage3 = $_FILES['carsimage3']['name'];
	$carsimage4 = $_FILES['carsimage4']['name'];

	move_uploaded_file($_FILES["carsimage1"]["tmp_name"], "assets/images/" . $_FILES["carsimage1"]["name"]);
	move_uploaded_file($_FILES["carsimage2"]["tmp_name"], "assets/images/" . $_FILES["carsimage2"]["name"]);
	move_uploaded_file($_FILES["carsimage3"]["tmp_name"], "assets/images/" . $_FILES["carsimage3"]["name"]);
	move_uploaded_file($_FILES["carsimage4"]["tmp_name"], "assets/images/" . $_FILES["carsimage4"]["name"]);


	$query = "INSERT INTO `tabcars`(`CarsName`,`CarsPrice`,`CarsYear`,`CarsKM`,`CarsDescription`,`CarsSeat`,`CarsType`,`CarsAC`,`Bluetooth`,`AutoLight`,`CarsImage1`,`CarsImage2`,`CarsImage3`,`CarsImage4`) VALUES(:carsname,:carsprice,:carsyear,:carskm,:carsdescription,:carsseat,:carstype,:carsac,:bluetooth,:autolight,:carsimage1,:carsimage2,:carsimage3,:carsimage4)";
	$query_run = $pdo->prepare($query);

	$data = [
		':carsname' => $carsname,
		':carsprice' => $carsprice,
		':carsyear' => $carsyear,
		':carskm' => $carskm,
		':carsdescription' => $carsdescription,
		':carsseat' => $carsseat,
		':carstype' => $carstype,
		':carsac' => $carsac,
		':bluetooth' => $bluetooth,
		':autolight' => $autolight,
		':carsimage1' => $carsimage1,
		':carsimage2' => $carsimage2,
		':carsimage3' => $carsimage3,
		':carsimage4' => $carsimage4,
	];
	$query_execute = $query_run->execute($data);
	$lastInsertId = $pdo->lastInsertId();

	if ($query_execute) {
		$_SESSION['message'] = "Voiture ajoutée";
		echo ("DONE");
		exit(0);
	} else {
		$_SESSION['message'] = "Un problème est survenu";
		echo ("ERRROR");
		exit(0);
	}
}
