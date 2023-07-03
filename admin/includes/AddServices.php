<?php

session_start();
ini_set('display_errors', 'on');
error_reporting(E_ALL);
include('../../includes/Config.php');

if (isset($_POST['submit_services_btn'])) {
	$services_type = $_POST['services_type'];
	$services_details = $_POST['services_details'];
	
    $query = "INSERT INTO `tabservices`(`services_type`, `services_details` ) VALUES(:services_type, :services_details)";
	$query_run = $pdo->prepare($query);

	$data = [
		':services_type' => $services_type,
		':services_details' => $services_details,
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
