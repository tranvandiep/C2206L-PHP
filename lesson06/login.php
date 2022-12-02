<?php
require_once('dbhelper.php');

$std = checkToken();
if($std != null) {
	header('Location: show.php');
	die();
}

if(!empty($_POST)) {
	$email = $_POST['email'];
	$password = $_POST['password'];

	$password = getSecurityMD5($password);

	$sql = "select * from students where email = '$email' and password = '$password'";
	$std = queryResult($sql, true);

	if($std != null) {
		//B1. Gen token
		$token = $std['id'].'#'.time().'#'.getSecurityMD5($std['email'].time());

		//B2. Luu cookie phía người dùng
		setcookie('token', $token, time() + 30 * 24 * 60 * 60, '/');

		//B3. Luu vao database
		$sql = "update students set token = '$token' where id = ".$std['id'];
		query($sql);

		header('Location: show.php');
		die();
	}
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
					  <label for="email">Email:</label>
					  <input required="true" type="email" class="form-control" id="email" name="email" value="">
					</div>
					<div class="form-group">
					  <label for="password">Password:</label>
					  <input required="true" type="password" class="form-control" id="password" name="password" value="">
					</div>
					<p>
						<a href="register.php">Create a new account</a>
					</p>
					<button type="submit" class="btn btn-success">Login</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>