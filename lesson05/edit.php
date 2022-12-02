<?php
require_once('dbhelper.php');

$id = $fullname = $email = $birthday = $address = "";

if(!empty($_POST)) {
	$id = $_POST['id'];
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$birthday = $_POST['birthday'];
	$address = $_POST['address'];

	$sql = "update students set fullname = '$fullname', email = '$email', birthday = '$birthday', address = '$address' where id = $id";
	query($sql);

	header('Location: show.php');
}

if(isset($_GET['id'])) {
	$id = $_GET['id'];

	$sql = "select * from students where id = $id";
	$row = queryResult($sql, true);

	if($row != null) {
		$id = $row['id'];
		$fullname = $row['fullname'];
		$email = $row['email'];
		$birthday = $row['birthday'];
		$address = $row['address'];
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit new student - Page</title>
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
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Edit new student</h2>
			</div>
			<div class="panel-body">
				<form method="post">
					<div class="form-group">
					  <label for="usr">Name:</label>
					  <input required="true" type="text" class="form-control" id="id" name="id" value="<?=$id?>" style="display: none;">
					  <input required="true" type="text" class="form-control" id="usr" name="fullname" value="<?=$fullname?>">
					</div>
					<div class="form-group">
					  <label for="email">Email:</label>
					  <input required="true" type="email" class="form-control" id="email" name="email" value="<?=$email?>">
					</div>
					<div class="form-group">
					  <label for="birthday">Birthday:</label>
					  <input type="date" class="form-control" id="birthday" name="birthday" value="<?=$birthday?>">
					</div>
					<div class="form-group">
					  <label for="address">Address:</label>
					  <input type="text" class="form-control" id="address" name="address" value="<?=$address?>">
					</div>
					<button type="submit" class="btn btn-warning">Save Data</button>
					<p>
						<a href="show.php">Back to list</a>
					</p>
				</form>
			</div>
		</div>
	</div>
</body>
</html>