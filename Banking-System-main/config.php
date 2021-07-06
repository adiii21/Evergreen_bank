<?php
	//Development Connection
	//$servername = "localhost";
	//$username = "root";
	//$password = "";
	//$dbname = "Indian_bank";

	//Remote Connection
	$servername = "remotemysql.com";
	$username = "nRbHIlrpH0";
	$password = "S3vbLRUi0a";
	$dbname = "nRbHIlrpH0";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
