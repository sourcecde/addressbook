<?php
include 'db-operations.php';

if($_GET['id']!=''){
	$id=$_GET["id"];

	echo "PLease wait...";

	$message = deleteSalesman($id);
	if ($message) {
		echo "Success!";
		header("location:index.php");

	} else {
		echo "Failed!";
	}
}

?>