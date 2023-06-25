<?php

session_start();
ini_set('display_errors', 'on');
error_reporting(E_ALL);
include('../includes/Config.php');

if (isset($_POST['submit_employee_btn'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	
    $query = "INSERT INTO `employees`(`username`,`email`,`firstname`,`lastname`) VALUES(:username,:email,:firstname,:lastname)";
	$query_run = $pdo->prepare($query);

	$data = [
		':username' => $username,
		':email' => $email,
		':firstname' => $firstname,
		':lastname' => $lastname,
	];
	$query_execute = $query_run->execute($data);
	$lastInsertId = $pdo->lastInsertId();

	if ($query_execute) {
		$_SESSION['message'] = "Employé ajouté";
		echo ("DONE");
		exit(0);
	} else {
		$_SESSION['message'] = "Un problème est survenu";
		echo ("ERRROR");
		exit(0);
	}
}
