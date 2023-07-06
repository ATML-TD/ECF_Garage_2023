<?php
session_start();
ini_set('display_errors', 'on');
error_reporting(E_ALL);


include('../../includes/Config.php');
include('CommentsForm.php');

if (isset($_GET['add'])) {
    $delid = intval($_GET['add']);
    $sql = "UPDATE tabcomment SET status=1 WHERE id=:addid";

    $query = $pdo->prepare($sql);
    $data = [
        ':addid' => $delid,
    ];
    $query = $query->execute($data);
    if ($query) {
        $_SESSION['message'] = "Commentaire ajouté";
        exit(0);
    } else {
        $_SESSION['message'] = "Un problème est survenu";
        exit(0);
    }
} 