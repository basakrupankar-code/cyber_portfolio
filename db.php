<?php
// This is the Key to the Vault
$host = 'localhost';
$dbname = 'cyber_app'; // This matches the database you made in CMD
$user = 'root';
$pass = ''; 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection Error: " . $e->getMessage());
}
?>