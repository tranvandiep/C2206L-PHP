<?php
require_once('dbhelper.php');

$std = checkToken();
if($std != null) {
	header('Location: show.php');
	die();
}

if(!empty($_POST)) {
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$birthday = $_POST['birthday'];
	$address = $_POST['address'];
	$password = $_POST['password'];

	$password = getSecurityMD5($password);

	//B2. Them/sua/xoa/lay du lieu tu database -> insert/update/delete/select
	$sql = "insert into students(fullname, email, birthday, address, password) values ('$fullname', '$email', '$birthday', '$address', '$password')";
	query($sql);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register - Page</title>
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
				<h2 class="text-center">Register</h2>
			</div>
			<div class="panel-body">
				<form method="post">
					<div class="form-group">
					  <label for="usr">Name:</label>
					  <input required="true" type="text" class="form-control" id="usr" name="fullname" value="">
					</div>
					<div class="form-group">
					  <label for="email">Email:</label>
					  <input required="true" type="email" class="form-control" id="email" name="email" value="">
					</div>
					<div class="form-group">
					  <label for="birthday">Birthday:</label>
					  <input type="date" class="form-control" id="birthday" name="birthday" value="">
					</div>
					<div class="form-group">
					  <label for="address">Address:</label>
					  <input type="text" class="form-control" id="address" name="address" value="">
					</div>
					<div class="form-group">
					  <label for="password">Password:</label>
					  <input required="true" type="password" class="form-control" id="password" name="password" value="">
					</div>
					<!-- <div class="form-group">
					  <label for="confirmPwd">Confirm Pwd:</label>
					  <input type="password" class="form-control" id="confirmPwd" name="confirmPwd" value="">
					</div> -->
					<p>
						<a href="login.php">I have a account</a>
					</p>
					<button type="submit" class="btn btn-success">Register</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>