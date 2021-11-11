<?php
$servername = "localhost";
$username = "root";
$password = "mico2020";
$dbname = "mico_shigefuji";
try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// sql to create table
$sql = 
"CREATE TABLE  Micx(
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(20) NOT NULL,
lastname VARCHAR(20) NOT NULL,
phone_no INT(20) UNSIGNED,
email VARCHAR(30),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
CREATE TABLE Frikx (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(20) NOT NULL,
lastname VARCHAR(20) NOT NULL,
phone_no INT(20) UNSIGNED,
email VARCHAR(30),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
CREATE TABLE Kix (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(20) NOT NULL,
lastname VARCHAR(20) NOT NULL,
phone_no INT(20) UNSIGNED,
email VARCHAR(30),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
CREATE TABLE Jix (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(20) NOT NULL,
lastname VARCHAR(20) NOT NULL,
phone_no INT(20) UNSIGNED,
email VARCHAR(30),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
";
// use exec() because no results are returned
$conn->exec($sql);
echo ("4 Tables created in Database successfully.");
} catch(PDOException $e) {
echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>