
<?php
$servername = "localhost";
$username = "root";
$password = "mico2020";
try {
$conn = new PDO("mysql:host=$servername", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "CREATE DATABASE mico_shigefuji";
// use exec() because no results are returned
$conn->exec($sql);
echo "Database mico_shigefuji created successfully<br>";
} catch(PDOException $e) {
echo $sql . "<br>" . $e->getMessage();
}
$conn = null;