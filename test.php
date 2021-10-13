
<?php
$servername = "localhost";
$username = "u800783204_efarmvn";
$password = "Efarmvn72126120";
$dbname = "u800783204_efarmvn";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
	echo "ketnoithanhcong";
	echo $_POST['nhietdo'];
}

if(!empty($_POST['nhietdo'])&&!empty($_POST['doam'])){
	$nd = $_POST['nhietdo'];
	$da = $_POST['doam'];

	$sql = "INSERT INTO dth22 (nhietdo, doam) VALUES ('".$nd."','".$da."')";

	if($conn->query($sql) == True){
		echo "ok";
	}else{
		echo "error:".$sql."<br>".$conn->error;
	}
}
?>
