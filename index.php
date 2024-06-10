<?php

use Admin\Op\Car;
use Admin\Op\Truck;
use Admin\Op\Garage;

require 'vendor/autoload.php';

$car = new Car("mecct241","abcc",2021,4);
$truck = new Truck ("AVC","aabvc",2021,5);

$garege = new Garage();
$garege->addVehicle($car);
$garege->addVehicle($truck);