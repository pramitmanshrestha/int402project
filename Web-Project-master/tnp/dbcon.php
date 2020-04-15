<?php
	$log = $_POST;
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "tn";
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	if(mysqli_connect_errno()){
		die("Database connection failed: " . mysqli_connect_errno() . '(' . mysqli_connect_error() . ')');
	}
	
?>