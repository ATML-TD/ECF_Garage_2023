<?php
$host = "localhost";
$username = "root";
$password = "";
$message = "";
try {
    $pdo = new PDO("mysql:host=$host;", $username, $password);
    $pdo->exec(statement: 'CREATE DATABASE IF NOT EXISTS garageparrot');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if (isset($_POST["login"])) {
        if (empty($_POST["username"]) || empty($_POST["password"])) {
            $message = '<label>All fields are required</label>';
        } else {
            $query = "SELECT * FROM admin WHERE username = :username AND password = :password";
            $statement = $pdo->prepare($query);
            $statement->execute(
                array(
                    'username'     =>     $_POST["username"],
                    'password'     =>     $_POST["password"]
                )
            );
            $count = $statement->rowCount();
            if ($count > 0) {
                //$_SESSION["username"] = $_POST["username"];
                header("Location: admin/index.php");
            } else {
                echo "<script>alert('Invalid Details');</script>";
            }
        }
    }
} catch (PDOException $error) {
    $message = $error->getMessage();
}
?>
