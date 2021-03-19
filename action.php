<?php 

include "db.php";

$type = $_POST['type'];
$is_api = $_POST['is_api'];

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

if ($type=="read") {
	$selectQuery = "SELECT * FROM `test`";
	$result = $conn->query($selectQuery)->fetch_all(MYSQLI_ASSOC);
	header('Content-Type: application/json');
	echo json_encode($result);
}

if (!$is_api) {
	header("Location:http://localhost/crud");
}

?>