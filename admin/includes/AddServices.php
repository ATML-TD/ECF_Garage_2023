<?php

session_start();
ini_set('display_errors', 'on');
error_reporting(E_ALL);
include('../../includes/Config.php');

if (isset($_POST['submit_services_btn'])) {
	$services = $_POST['services'];
	
    $query = "INSERT INTO `tabvidange`(`services`) VALUES(:services)";
	$query_run = $pdo->prepare($query);

	$data = [
		':services' => $services
	];
	$query_execute = $query_run->execute($data);
	$lastInsertId = $pdo->lastInsertId();

	if ($query_execute) {
		$_SESSION['message'] = "Prestation ajoutée";
		echo ("DONE");
		exit(0);
	} else {
		$_SESSION['message'] = "Un problème est survenu";
		echo ("ERRROR");
		exit(0);
	}
}
