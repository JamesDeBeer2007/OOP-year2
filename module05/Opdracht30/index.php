<?php

require_once 'vendor/autoload.php';

use Opdracht30\Car;
use Opdracht30\Motorcycle;
use Opdracht30\Truck;
use Opdracht30\Vehicle;

$car1 = new Car('Toyota', 'Corolla', 2021, 'red', 5);
$motor1 = new Motorcycle('Yamaha', 'R1', 2021, 'blue', false);
$truck1 = new Truck('Volvo', 'FH16', 2021, 'white', 50000);

var_dump($car1);
var_dump($motor1);
var_dump($truck1);