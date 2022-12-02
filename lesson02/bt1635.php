<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BT in PHP</title>
</head>
<body>
<?php
//B1. Sinh ngau nhien so N
$N = rand(1, 10);
$bookList = [];

for ($i=0; $i < $N; $i++) { 
	$bookList[] = [
		'bookName' => 'Sach '.$i,
		'authorName' => 'Tac gia '.$i,
		'price' => 1000 * $i + rand(10, 2000),
		'nxb' => 'NXB '.$i
	];
}

// var_dump($bookList);
?>
<table border="1" cellpadding="3" cellpadding="3">
	<thead>
		<th>STT</th>
		<th>Ten Sach</th>
		<th>Tac Gia</th>
		<th>Gia Ban</th>
		<th>NXB</th>
	</thead>
	<tbody>
<?php
$count = 0;
foreach ($bookList as $item) {
	echo '<tr>
			<td>'.++$count.'</td>
			<td>'.$item['bookName'].'</td>
			<td>'.$item['authorName'].'</td>
			<td>'.$item['price'].'</td>
			<td>'.$item['nxb'].'</td>
		</tr>';
}
?>
	</tbody>
</table>


<table border="1" cellpadding="3" cellpadding="3">
	<thead>
		<th>STT</th>
		<th>Ten Sach</th>
		<th>Tac Gia</th>
		<th>Gia Ban</th>
		<th>NXB</th>
	</thead>
	<tbody>
<?php
$count = 0;
foreach ($bookList as $item) {
?>

<tr>
	<td><?=++$count?></td>
	<td><?=$item['bookName']?></td>
	<td><?=$item['authorName']?></td>
	<td><?=$item['price']?></td>
	<td><?=$item['nxb']?></td>
</tr>

<?php
}
?>
	</tbody>
</table>

</body>
</html>