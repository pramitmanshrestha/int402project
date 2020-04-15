<?php
	$log = $_POST;
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "codexfor9";
	$dbname = "tn";
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	if(mysqli_connect_errno()){
		die("Database connection failed: " . mysqli_connect_errno() . '(' . mysqli_connect_error() . ')');
	}
	$q = "SELECT * FROM users";
	$result = mysqli_query($conn,$q);
	if(!$result){
		die("Database query failed.");
	}
	while ($row = mysqli_fetch_row($result)) {
		if($log['uname'] == $row[0] && $log['pwd'] == $row[1]){
			red_tp("menu.html");
		}else{
			red_tp("index.html");
		}
		
	}
	
	function red_tp($loc){
		header("Location: ". $loc);
		exit;
	}
	
	mysqli_close($conn);
?>
