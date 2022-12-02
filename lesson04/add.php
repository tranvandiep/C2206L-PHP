<?php
if(!empty($_POST)) {
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$birthday = $_POST['birthday'];
	$address = $_POST['address'];

	//Xu ly nghiep vu -> day thong tin nay vao database quan ly

	//B1. Mo ket noi toi CSDL
	$conn = mysqli_connect('localhost', 'root', '', 'C2206L');
	mysqli_set_charset($conn, 'utf8');

	//B2. Them/sua/xoa/lay du lieu tu database -> insert/update/delete/select
	$sql = "insert into students(fullname, email, birthday, address) values ('$fullname', '$email', '$birthday', '$address')";
	//echo $sql; -> ' -> \'
	mysqli_query($conn, $sql);

	//B3. Dong ket noi toi CSDL
	mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add new student - Page</title>
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
				<h2 class="text-center">Add new student</h2>
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
					<button type="submit" class="btn btn-success">Save Data</button>
					<p>
						<a href="show.php">Back to list</a>
					</p>
				</form>
			</div>
		</div>
	</div>
</body>
</html>