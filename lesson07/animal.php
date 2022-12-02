<?php
//parent class -> lop cha
class Animal {
	public $name;
	public $type;
	public $foodType;

	public function processForm() {
		echo "Lay du lieu tu Form gui len";
	}

	public function display() {
		echo '<br/>Name -> '.$this->name;
	}
}