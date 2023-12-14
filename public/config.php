<?php

$host = 'localhost'; // Usually '127.0.0.1' or 'localhost'
$database = 'u552531142_photos';
$username = 'u552531142_photos';
$password = 'U552531142_photos';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    echo "Connected successfully to the database!";
} catch (PDOException $e) {
    echo "<br><br>";
    echo "Connection failed: " . $e->getMessage();
    echo "<br><br>";
    echo "------ PHP Setup Information ----When Faild----";
    print_r(phpinfo());
}



?>
