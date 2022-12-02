<?php
require_once('dbhelper.php');

if(isset($_GET['id'])) {
	$id = $_GET['id'];

	$sql = "delete from students where id = $id";
	query($sql);
}

header('Location: show.php');