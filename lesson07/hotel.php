<?php
class Hotel {
	public $name;
	public $area;
	public $address;
	public $ownerName;
	public $contractDate;

	/**public function __construct() {
		echo 'Xin chao<br/>';
	}*/

	/**public function __construct($x, $y, $z) {
		echo 'Xin chao<br/>';
	}*/
	public function __construct($name, $area, $address, $ownerName, $contractDate) {
		$this->name = $name;
		$this->area = $area;
		$this->address = $address;
		$this->ownerName = $ownerName;
		$this->contractDate = $contractDate;
	}

	public function processForm() {
		echo "Lay du lieu tu Form gui len";
	}

	public function display() {
		echo 'Name -> '.$this->name;
	}
}