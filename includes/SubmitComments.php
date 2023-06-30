<?php
session_start();
ini_set('display_errors', 'on');
error_reporting(E_ALL);


include('Config.php');


if(isset($_POST["rating_data"]))
{
    $data = array(
		':usermail' => $_POST["usermail"],
		':userrating' => $_POST["rating_data"],
		':comment' => $_POST["comment"],
	);
	$query = "INSERT INTO tabcomment (usermail, userrating, comment) VALUES (:usermail, :userrating, :comment)";

    $statement = $pdo->prepare($query);
	$statement->execute($data);

	echo "Votre commentaire a bien été soumis";
}

