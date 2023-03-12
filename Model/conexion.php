<?php

$conn = "";

try {
	$servername = "localhost";
	$dbname = "aservitecdb";
	$username = "root";
	$password = "Palomo19952813.";

	$conn = new PDO(
		"mysql:host=$servername; dbname=geeksforgeeks",
		$username, $password
	);
	
$conn->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>

