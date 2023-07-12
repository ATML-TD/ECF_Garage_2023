<?php 

//Heroku

if(getenv('JAWSDB_URL') !== false){
    $url = getenv('JAWSDB_URL');
    $dbparts = parse_url($url);

    $hostname = $dbparts['host'];
    $username = $dbparts['user'];
    $password = $dbparts['pass'];
    $database = ltrim($dbparts['path'],'/');
} else {
    // DB credentials local
    $host = '127.0.0.1';
    $username = 'root';
    $password = '';
    $dbname = 'garageparrot';
}




    
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        
    }

    catch(PDOException $e) {
        die("Could not connect to the database" . $e->getMessage());
        
}
    
?>