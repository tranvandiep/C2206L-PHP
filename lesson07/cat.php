<?php
require_once('animal.php');

//Child class -> lop con
class Cat extends Animal {
	public $color;
	public $footCount = 4;

	public function showSound() {
		echo 'Meo .. meo ..';
	}
}