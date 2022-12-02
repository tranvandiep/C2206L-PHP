<?php
$id = $fullname = $email = $birthday = $address = "";

if(!empty($_POST)) {
	$id = $_POST['id'];
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$birthday = $_POST['birthday'];
	$address = $_POST['address'];

	//B1. Mo ket noi toi CSDL
	$conn = mysqli_connect('localhost', 'root', '', 'C2206L');
	mysqli_set_charset($conn, 'utf8');

	//B2. Them/sua/xoa/lay du lieu tu database -> insert/update/delete/select
	$sql = "update students set fullname = '$fullname', email = '$email', birthday = '$birthday', address = '$address' where id = $id";
	mysqli_query($conn, $sql);

	//B3. Dong ket noi toi CSDL
	mysqli_close($conn);

	header('Location: show.php');
}

if(isset($_GET['id'])) {
	$id = $_GET['id'];

	//B1. Mo ket noi toi CSDL
	$conn = mysqli_connect('localhost', 'root', '', 'C2206L');
	mysqli_set_charset($conn, 'utf8');

	//B2. Them/sua/xoa/lay du lieu tu database -> insert/update/delete/select
	$sql = "select * from students where id = $id";
	$resultset = mysqli_query($conn, $sql);
	
	$row = mysqli_fetch_array($resultset, 1);
	if($row != null) {
		$id = $row['id'];
		$fullname = $row['fullname'];
		$email = $row['email'];
		$birthday = $row['birthday'];
		$address = $row['address'];
	}

	//B3. Dong ket noi toi CSDL
	mysqli_close($conn);
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