<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP for beginer</title>
</head>
<body>
	<h1>Welcome to learn PHP</h1>

<?php
	// Hien thi du lieu ra man hinh
	echo 'Xin chao<br/>';
	print('OKOK<br/>');

	// Khai bao bien
	$x = 'Sinh vien Aptech 54 Le Thanh Nghi<br/>';
	echo $x;
	$s1 = "Aptech";
	$s2 = "54 Le Thanh Nghi<br/>";
	$s = $s1.' '.$s2;
	echo $s;
	echo "Thong tin: ".$s;

	//Phan biet ' va "
	echo 'Thong tin: $s';
	echo "Thong tin: $s";

	const BASE_URL = "https://gokisoft.com";
	echo BASE_URL;

	define("ABC", "Noi dung");
	echo ABC;

	var_dump($_SERVER);

	$x = 5;
	$y = $x++;
	//$y = 5(x=6)
	$s = ++$x - --$y + $x++ + 1;
	//$s = (x=7)7 - (y=4)4 + 7(x=8) + 1 = 11
	echo "<br/>$x, $y, $s<br/>";
	//x = 8, y = 4, s = 11

	$number = 1;

	do {
		$number += 2;
		echo "$number<br/>";
	} while($number <= 10);
?>

<h1>Thong tin: <?php echo $s; ?></h1>

<h1>Thong tin: <?=$s?></h1>
</body>
</html>