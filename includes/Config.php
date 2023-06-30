<?php 
    // DB credentials.
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'garageparrot';
    
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        echo("IM IN");
    }

    catch(PDOException $e) {
        die("Could not connect to the database" . $e->getMessage());
        echo("IM OUT");
}
    
?>