<?php
$server = "localhost";
$servername = "root";
$serverpassword = " ";

try {
//Creating connection for mysql
$conn = new PDO("mysql:host=$server;dbname=salon", $servername, $serverpassword);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected successfully";
}
catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
}
?>
