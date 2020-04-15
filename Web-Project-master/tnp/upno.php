
<?php
// In PHP versions earlier than 4.1.0, $HTTP_POST_FILES should be used instead
// of $_FILES.
$s = $_POST['s'];
if(isset($s)){
include 'dbcon.php';
$sub = $_POST['sub'];
$uploaddir = 'c:/xampp/htdocs/Aptana/tn/notice/';
$uploadfile = $uploaddir . basename($_FILES['upload']['name']);
$name = $_FILES['upload']['name'];
//$uploadfile = $uploaddir . "$reg";
echo '<pre>';
if (move_uploaded_file($_FILES['upload']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "There was some problem in uploading.\n";
}

$q = "INSERT INTO `not` (`id`, `sub`, `add`) VALUES (NULL, '$sub', '$name');";
$result = mysqli_query($conn,$q);
	if(!$result){
		die("There was some problem in uploading.");
	}
print "</pre>";
include 'dbclo.php';
}
?>

