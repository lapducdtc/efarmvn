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
$nhietdo = $_POST['nhietdo'];
$doam = $_POST['doam'];
$sql = "INSERT INTO dth22 (id,nhietdo, doam)
VALUES (NULL, $nhietdo, $doam)";
echo $nhietdo;
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>