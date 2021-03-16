<?php 

include("db.php");

$selectQuery = "SELECT * FROM `test`";
$result = $conn->query($selectQuery)->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>List</title>
	<script src="main.js"></script>
</head>

<body>



	<table border="1px">
		<?php foreach ($result as $key => $value): ?>
			<tr>
				<td><?php echo $key ?></td>
				<td><?php echo $value['name'] ?></td>
			</tr>
		<?php endforeach ?>
	</table>


	<br><h5>Create</h5><hr>
	<form action="action.php" method="post">
		<input type="hidden" name="type" value="create">
		<input type="text" name="data">
		<button id="create">CREATE</button>
	</form>

	<br><h5>Update</h5><hr>
	<form action="action.php" method="post">
		<input type="hidden" name="type" value="update">
		<input type="text" name="key">
		<input type="text" name="new_value">
		<button id="create">Update</button>
	</form>

	<br><h5>Delete</h5><hr>
	<form action="action.php" method="post">
		<input type="hidden" name="type" value="delete">
		<input type="text" name="key">
		<button id="create">Delete</button>
	</form>

	
</body>

</html>