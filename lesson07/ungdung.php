<?php
define('HOST', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DB', 'C2206L');

function query($sql) {
	//B1. Mo ket noi toi CSDL
	$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DB);
	mysqli_set_charset($conn, 'utf8');

	//B2. Them/sua/xoa/lay du lieu tu database -> insert/update/delete/select
	mysqli_query($conn, $sql);

	//B3. Dong ket noi toi CSDL
	mysqli_close($conn);
}

class User {
	public $fullname;
	public $email;
	public $birthday;
	public $address;
	public $password;

	public function processForm() {
		if(!empty($_POST)) {
			$this->fullname = $_POST['fullname'];
			$this->email = $_POST['email'];
			$this->birthday = $_POST['birthday'];
			$this->address = $_POST['address'];
			$this->password = $_POST['password'];
		}
	}

	public function insert() {
		$sql = "insert into students(fullname, email, birthday, address, password) values ('$this->fullname', '$this->email', '$this->birthday', '$this->address', '$this->password')";
		query($sql);
	}
}

if(!empty($_POST)) {
	$u = new User();
	$u->processForm();
	$u->insert();
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