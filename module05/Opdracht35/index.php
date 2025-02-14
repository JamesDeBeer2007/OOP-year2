<?php

require_once 'vendor/autoload.php';

use Opdracht35\Car;
use Opdracht35\ElectricCar;
use Opdracht35\GasolineCar;
use Opdracht35\HydrogenCar;
use Opdracht35\Motorcycle;
use Opdracht35\Truck;
use Opdracht35\Vehicle;
use Opdracht35\VehicleList;

$car1 = new ElectricCar('Toyota', 'Corolla', 2021, 'red', 5, 100);
$car2 = new GasolineCar('Toyota', 'Corolla', 2021, 'red', 5, 100);
$car3 = new HydrogenCar('Toyota', 'Corolla', 2021, 'red', 5, 100);

$vehicleList = new VehicleList();
$vehicleList->addVehicle($car1);
$vehicleList->addVehicle($car2);
$vehicleList->addVehicle($car3);

foreach ($vehicleList->getVehicles() as $vehicle) 
{
    echo $vehicle->printVehicleInfo() . "<br>";
}

foreach(Vehicle::$allVehicles() as $vehicle) 
{
    echo $vehicle->printVehicleInfo() . "<br>";
}