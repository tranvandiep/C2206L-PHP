<?php
require_once('dbhelper.php');

$sql = "select * from students";
$data = queryResult($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Show student - Page</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<a href="add.php"><button class="btn btn-success mb-2 mt-2">Add new student</button></a>
		<div class="panel panel-primary">
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Full Name</th>
							<th>Email</th>
							<th>Birthday</th>
							<th>Address</th>
							<th style="width: 190px"></th>
						</tr>
					</thead>
					<tbody>
<?php
$count = 0;
foreach ($data as $item) {
	echo '<tr>
			<td>'.++$count.'</td>
			<td>'.$item['fullname'].'</td>
			<td>'.$item['email'].'</td>
			<td>'.$item['birthday'].'</td>
			<td>'.$item['address'].'</td>
			<td>
				<a href="edit.php?id='.$item['id'].'"><button class="btn btn-warning">Edit</button></a>
				<a href="delete.php?id='.$item['id'].'"><button class="btn btn-danger">Remove</button></a>
			</td>
		</tr>';
}
?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>