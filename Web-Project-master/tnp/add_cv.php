<?php
// In PHP versions earlier than 4.1.0, $HTTP_POST_FILES should be used instead
// of $_FILES.
include 'dbcon.php';
$reg = $_POST['reg'];
$uploaddir = 'c:/xampp/htdocs/Aptana/tn/cv/';
$uploadfile = $uploaddir . basename($_FILES['upload']['name']);
$name = $_FILES['upload']['name'];
//$uploadfile = $uploaddir . "$reg";
echo '<pre>';
if (move_uploaded_file($_FILES['upload']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload attack!\n";
}

$q = "UPDATE stud SET cv='$name' WHERE reg=$reg;";
$result = mysqli_query($conn,$q);
	if(!$result){
		die("There was some problem in uploading.");
	}
print "</pre>";
include 'dbclo.php';
?>
