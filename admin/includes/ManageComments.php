<?php
session_start();
ini_set('display_errors', 'on');
error_reporting(E_ALL);


include('../../includes/Config.php');
include('ManageCommentsForm.php');

if (isset($_GET['delete'])) {
    $delid = intval($_GET['delete']);
    $sql = "DELETE FROM tabcomment where id=:delid";
    $query = $pdo->prepare($sql);
    $data = [
        ':delid' => $delid,
    ];
    $query = $query->execute($data);

    if ($query) {
        $_SESSION['message'] = "Commentaire supprimé";
        exit(0);
    } else {
        $_SESSION['message'] = "Un problème est survenu";
        exit(0);
    }
} 