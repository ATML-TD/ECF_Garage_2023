<?php

session_start();
ini_set('display_errors', 'on');
error_reporting(E_ALL);
include('../../includes/Config.php');

if (isset($_POST['submit_opening_btn'])) {
	$opening_week = $_POST['opening_week'];
	$opening_saturday = $_POST['opening_saturday'];
    $opening_sunday = $_POST['opening_sunday'];
	
    $query = "UPDATE `tabopening` SET `opening_week`=:opening_week, `opening_saturday`=:opening_saturday, `opening_sunday`=:opening_sunday WHERE id=1";
	$query_run = $pdo->prepare($query);

	$data = [
		':opening_week' => $opening_week,
		':opening_saturday' => $opening_saturday,
        ':opening_sunday' => $opening_sunday,
	];
	$query_execute = $query_run->execute($data);
	$lastInsertId = $pdo->lastInsertId();

	if ($query_execute) {
		$_SESSION['message'] = "Horaire modifié";
		echo ("DONE");
		exit(0);
	} else {
		$_SESSION['message'] = "Un problème est survenu";
		echo ("ERRROR");
		exit(0);
	}
}
