<?php
if(isset($_POST["submit"])) {
	$file=$_FILES['data_csv']['name'];
	$path="file/";
	$tmp=$_FILES['data_csv']['tmp_name'];
	$newfilename='data.csv';
	move_uploaded_file($tmp, $path.$newfilename);
}
header("location:input.php");
?>