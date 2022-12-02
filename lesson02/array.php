<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array in PHP</title>
</head>
<body>
<h1>Welcome to learn Array in PHP</h1>

<?php
//Phan 1: Array index
// B1. Khai bao array
$arr = [];
$arr = array();//length, index: 0 -> length - 1, index >= 0

// B2. Them phan tu vao trong mang
array_push($arr, 12); //12 -> length: 1, index: 0
var_dump($arr);
$arr[] = 10; //12, 10 -> length: 2, index: 0 -> 1
$arr[] = 100; //12, 10, 100 -> length: 3, index: 0 -> 2
$arr[] = 12;
var_dump($arr);

// B3. Lay phan tu ra
//Xac dinh vi tri index can lay du lieu ra -> index = 1
echo $arr[1];

// B4. Duyet phan tu trong mang -> count, sizeof
for ($i=0; $i < count($arr); $i++) { 
	echo "\n".$arr[$i].'<br/>';
}

echo "\n<br/>===================<br/>\n";
foreach ($arr as $item) {
	echo "\n".$item.'<br/>';
}

// B5. Xoa 1 phan tu trong mang
array_splice($arr, 2, 1);
var_dump($arr);

// B6. Chen 1 phan tu vao trong mang -> 12, 10, 12 -> 12, 10, 1, 2, 12
array_splice($arr, 2, 0, [1, 2]);
array_splice($arr, 2, 0, 11);
var_dump($arr);

// Phan 2: array index -> co cac phan tu san co
$arr2 = [10, 2, 111];
$arr2 = array(55, 6, 100);

// Phan 3: Array -> key & value
$arr = [];
$arr = [
	'fullname' => 'TRAN VAN A',
	'age' => 22
];
// Bieu dien 1 thong tin sinh vien: fullname -> TRAN VAN A, age: 22
$arr['fullname'] = 'Tran Van A';
$arr['fullname'] = 'Tran Van B';
$arr['fullname'] = 'Tran Van C';
$arr['age'] = 22;

var_dump($arr);

//Lay du lieu ra
echo $arr['fullname'];

//For
foreach ($arr as $key => $value) {
	echo "\n".$key.' -> '.$value."\n";
}

//Xoa 1 key di -> lam the nao???
unset($arr['fullname']);

var_dump($arr);

// unset($arr);
// var_dump($arr);
// Khai bao 1 mang index -> chua cac phan tu la mang key & value
$stdList = [];
$stdList[] = [
	'fullname' => 'TRAN VAN A',
	'age' => 22
];
$stdList[] = [
	'fullname' => 'TRAN VAN B',
	'age' => 25
];
$stdList[] = [
	'fullname' => 'TRAN VAN C',
	'age' => 26
];

var_dump($stdList);
?>

</body>
</html>