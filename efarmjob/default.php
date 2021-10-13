<?php
$servername = "localhost";
$username = "u800783204_efarmvn";
$password = "Efarmvn72126120";
$dbname = "u800783204_efarmvn";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM dth22";
$up = $conn->query($sql);

echo $up;

$conn->close();
?>