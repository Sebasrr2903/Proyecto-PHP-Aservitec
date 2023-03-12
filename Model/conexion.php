<?php

$conn = "";

try {
	$servername = "localhost";
	$dbname = "aservitecdb";
	$username = "admin";
	$password = "123456";

	$conn = new PDO(
		"mysql:host=$servername; dbname=aservitecdb",
		$username, $password
	);
	

}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

public_function getConexion(){
	$conn->setAttribute(PDO::ATTR_ERRMODE,
	PDO::ERRMODE_EXCEPTION);
	return $conn;
}
?>

