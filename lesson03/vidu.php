<?php
if(!empty($_GET)) {
	//Nghia la gi?
	// echo $_GET['title'];
	header('Location: test.php?x=1&y=2');
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GET tutorial</title>
</head>
<body>
<form method="get">
	<input type="text" name="title" size="50">
	<button>Submit Data</button>
</form>
</body>
</html>