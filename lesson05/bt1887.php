<?php
$actionList = ['add', 'edit', 'remove', 'list'];
$studentList = [];

for ($i=0; $i < 5; $i++) {
	$studentList[] = [
		'fullname' => 'Ho Ten '.$i,
		'email' => $i.'@gmail.com',
		'gender' => 'Nam',
		'address' => 'Dia Chi '.$i
	]; 
}

$actionIndex = rand(0, 2);
$action = $actionList[$actionIndex];

$index = rand(0, count($studentList) - 1);

switch ($action) {
	case 'add':
		$studentList[] = [
			'fullname' => 'Ho Ten '.$index,
			'email' => $index.'@gmail.com',
			'gender' => 'Nam',
			'address' => 'Dia Chi '.$index
		]; 
		break;
	case 'edit':
		$studentList[$index] = [
			'fullname' => 'Ho Ten '.$index.'--edit',
			'email' => $index.'@gmail.com',
			'gender' => 'Nam',
			'address' => 'Dia Chi '.$index
		]; 
		break;
	case 'remove':
		array_splice($studentList, $index, 1);
		break;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Management - Page</title>
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
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Full Name</th>
					<th>Email</th>
					<th>Gender</th>
					<th>Address</th>
				</tr>
			</thead>
			<tbody>
<?php
$index = 0;
foreach ($studentList as $item) {
	echo '<tr>
			<td>'.++$index.'</td>
			<td>'.$item['fullname'].'</td>
			<td>'.$item['email'].'</td>
			<td>'.$item['gender'].'</td>
			<td>'.$item['address'].'</td>
		</tr>';
}
?>
			</tbody>
		</table>
	</div>
</body>
</html>