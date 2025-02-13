<?php

require_once 'vendor/autoload.php';

use Opdracht32\Car;
use Opdracht32\ElectricCar;
use Opdracht32\GasolineCar;
use Opdracht32\HydrogenCar;
use Opdracht32\Motorcycle;
use Opdracht32\Truck;
use Opdracht32\Vehicle;

$car1 = new ElectricCar('Toyota', 'Corolla', 2021, 'red', 5, 100);
$car2 = new GasolineCar('Toyota', 'Corolla', 2021, 'red', 5, 100);
$car3 = new HydrogenCar('Toyota', 'Corolla', 2021, 'red', 5, 100);

echo  $car1->printVehicleInfo() . "<br>";
echo  $car2->printVehicleInfo() . "<br>";
echo  $car3->printVehicleInfo() . "<br>";