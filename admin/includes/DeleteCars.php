<?php
session_start();
ini_set('display_errors', 'on');
error_reporting(E_ALL);


include('../../includes/Config.php');
include('DeleteCarsForm.php');

if (isset($_GET['delete'])) {
    $delid = intval($_GET['delete']);
    echo("bonjour");
    echo($delid);
    $sql = "DELETE FROM tabcars where id=:delid";
    $query = $pdo->prepare($sql);
    $data = [
        ':delid' => $delid,
    ];
    $query = $query->execute($data);

    if ($query) {
        $_SESSION['message'] = "Voiture supprimée";
        exit(0);
    } else {
        $_SESSION['message'] = "Un problème est survenu";
        exit(0);
    }
} else{
    echo("Au revoir");
}