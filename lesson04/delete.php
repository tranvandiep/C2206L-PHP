<?php
if(isset($_GET['id'])) {
	$id = $_GET['id'];

	//B1. Mo ket noi toi CSDL
	$conn = mysqli_connect('localhost', 'root', '', 'C2206L');
	mysqli_set_charset($conn, 'utf8');

	//B2. Them/sua/xoa/lay du lieu tu database -> insert/update/delete/select
	$sql = "delete from students where id = $id";
	mysqli_query($conn, $sql);

	//B3. Dong ket noi toi CSDL
	mysqli_close($conn);
}

header('Location: show.php');