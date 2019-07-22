<?php

	//DATABASE CONNECTION//


	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "test";
	$conn = mysqli_connect($servername, $username, $password, $database);

	if (!$conn) {
		echo "Database connection faild";
	}else{
		echo "<span style='color:green; font-size:40px;'>Database connection success...</span>";
	}


?>
