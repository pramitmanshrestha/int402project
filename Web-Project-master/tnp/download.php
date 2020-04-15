     <?php
		$reg = $_POST['reg1'];
		include 'dbcon.php';
		$q = "SELECT cv FROM stud WHERE reg=$reg;";
		$result = mysqli_query($conn,$q);
		if($result){
			while($row = mysqli_fetch_row($result)) {
				$filename = $row[0];
			}
    	$path = 'c:/xampp/htdocs/Aptana/tn/cv/';
    	header("Cache-Control:no-store");
		header("Content-Type:application/msword");
		header('Content-Disposition:attachment; filename="'.basename($path) .'.doc' . '"');
		header('Content-Transfer-Encoding:binary');
		header('Content-Length:'.filesize($path . $filename));
		ob_clean();
		flush();
		readfile($path . $filename);
		exit();
		}
		else{
			die("There was some problem.");
		}
    ?>