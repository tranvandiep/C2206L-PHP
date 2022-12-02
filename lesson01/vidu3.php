<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Function in PHP</title>
</head>
<body>
<?php
function tong($x) {
	$s = 0;
	for ($i=0; $i <= $x; $i++) { 
		$s += $i;
	}
	echo "Tong: $s";
	return $s;
}

tong(5);

function test($x) {
	$x += 2;
	echo "x2 = $x<br/>";
}

function test2(& $x) {
	$x += 2;
	echo "x2 = $x<br/>";
}

function test3() {
	global $x;
	$x += 2;
	echo "x22 = $x<br/>";
}

$x = 2;
echo "x1 = $x<br/>";
test($x);
echo "x3 = $x<br/>";

$x = 2;
echo "x11 = $x<br/>";
test2($x);
echo "x31 = $x<br/>";

$x = 2;
echo "x12 = $x<br/>";
test3($x);
echo "x32 = $x<br/>";
?>
</body>
</html>