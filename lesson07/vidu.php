<?php
require_once('hotel.php');

/**
$hotel = new Hotel();
$hotel->name = 'ABC';
$hotel->address = 'Ha Noi';
$hotel->area = 200;
$hotel->ownerName = 'TRAN VAN A';
$hotel->contractDate = '2022-01-12';
*/
$hotel = new Hotel('TRAN VAN A', 200, 'Ha Noi', 'TRAN VAN A', '2022-01-12');

$hotel->display();

require_once('animal.php');
require_once('cat.php');


$a = new Animal();
$a->name = 'A';
$a->display();

$c = new Cat();
$c->name = 'Cat';
$c->display();