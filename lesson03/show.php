<?php
	$fullname = $email = $birthday = $address = "";

	if(!empty($_GET)) {
		$fullname = $_GET['fullname'];
		$email = $_GET['email'];
		$birthday = $_GET['birthday'];
		$address = $_GET['address'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registation Form * Form Tutorial</title>
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
				<h2 class="text-center">Show Data</h2>
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Full Name</th>
							<th>Email</th>
							<th>Birthday</th>
							<th>Address</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><?=$fullname?></td>
							<td><?=$email?></td>
							<td><?=$birthday?></td>
							<td><?=$address?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>