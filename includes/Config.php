<?php 
    // DB credentials.
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'garageparrot';
    
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        
    }

    catch(PDOException $e) {
        die("Could not connect to the database" . $e->getMessage());
        
}
    
?>