<?php 

	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "tester";

	// Getting Data From Database
	$connection = mysqli_connect($host, $user, $pass, $db);

	// Getting Data From Table
	$result = mysqli_query($connection, "SELECT * FROM tester2");

	// Storting To Array
	$data = array();
	while ($row = mysqli_fetch_assoc($result)) {
		$data[] = $row;
	}

	$data2 = array();
	while ($row = mysqli_fetch_row($result)) {
		$data2[] = $row;
	}
	
	echo json_encode($data);

	// echo "Hello World";
?>