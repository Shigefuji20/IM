<?php
$servername = "localhost";
$username = "root";
$password = "mico2020";
$dbname = "mico_shigefuji";
try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO Micx ( firstname, lastname, phone_no, email)
VALUES ('Mico', 'Shigefuji', 09878767654, 'mico@gmail.com');
INSERT INTO Frikx ( firstname, lastname, phone_no, email)
VALUES ('Mico', 'Shigefuji', 09878767654, 'mico@gmail.com');
INSERT INTO Kix ( firstname, lastname, phone_no, email)
VALUES ( 'Mico', 'Shigefuji', 09878767654, 'mico@gmail.com');
INSERT INTO Jix ( firstname, lastname, phone_no, email)
VALUES ( 'Mico', 'Shigefuji', 09878767654, 'mico@gmail.com');";
// use exec() because no results are returned
$conn->exec($sql);
echo "Inserted One Data On Each Table Successfully";
} catch(PDOException $e) {
echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>
