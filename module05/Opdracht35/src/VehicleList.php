<?php

namespace Opdracht35;

class VehicleList
{
    private array $vehicles = [];

    public function addVehicle(ElectricCar|HydrogenCar|GasolineCar $vehicle): void
    {
        $this->vehicles[] = $vehicle;
    }

    public function getVehicles(): array
    {
        return $this->vehicles;
    }
}