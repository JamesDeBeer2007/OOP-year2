<?php

require_once 'vendor/autoload.php';

use Opdracht34\Car;
use Opdracht34\ElectricCar;
use Opdracht34\GasolineCar;
use Opdracht34\HydrogenCar;
use Opdracht34\Motorcycle;
use Opdracht34\Truck;
use Opdracht34\Vehicle;

$car1 = new ElectricCar('Toyota', 'Corolla', 2021, 'red', 5, 100);
$car2 = new GasolineCar('Toyota', 'Corolla', 2021, 'red', 5, 100);
$car3 = new HydrogenCar('Toyota', 'Corolla', 2021, 'red', 5, 100);

// echo  $car1->printVehicleInfo() . "<br>";
// echo  $car2->printVehicleInfo() . "<br>";
// echo  $car3->printVehicleInfo() . "<br>";

// echo "<pre>";
// var_dump(Vehicle::$allVehicles);

foreach(Vehicle::$allVehicles() as $vehicle) 
{
    echo $vehicle->printVehicleInfo() . "<br>";
}