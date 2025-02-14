<?php

require_once 'vendor/autoload.php';

use Opdracht33\Car;
use Opdracht33\ElectricCar;
use Opdracht33\GasolineCar;
use Opdracht33\HydrogenCar;
use Opdracht33\Motorcycle;
use Opdracht33\Truck;
use Opdracht33\Vehicle;

$car1 = new ElectricCar('Toyota', 'Corolla', 2021, 'red', 5, 100);
$car2 = new GasolineCar('Toyota', 'Corolla', 2021, 'red', 5, 100);
$car3 = new HydrogenCar('Toyota', 'Corolla', 2021, 'red', 5, 100);

// echo  $car1->printVehicleInfo() . "<br>";
// echo  $car2->printVehicleInfo() . "<br>";
// echo  $car3->printVehicleInfo() . "<br>";

// echo "<pre>";
// var_dump(Vehicle::$allVehicles);

foreach(Vehicle::$allVehicles as $vehicle) 
{
    echo $vehicle->printVehicleInfo() . "<br>";
}   