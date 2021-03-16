<?php 

include "db.php";

$type = $_POST['type'];

if ($type=='create') {
	$data = $_POST['data'];
	$insertQuery = "INSERT into `test` values ( '".$data."' )";
	$conn->query($insertQuery);
}

if ($type=="update") {
	$key  = $_POST['key'];
	$new_value  = $_POST['new_value'];
	$updateQuery = "UPDATE `test` set name = '".$new_value."' where name= '".$key."' ";
	$conn->query($updateQuery);
}

if ($type=="delete") {
	$key = $_POST['key'];
	$deleteQuery = "DELETE FROM `test` where name = '".$key."'";
	$conn->query($deleteQuery);
}

header("Location:http://localhost/crud");

?>