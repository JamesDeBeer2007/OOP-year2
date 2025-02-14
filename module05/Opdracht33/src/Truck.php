<?php
namespace Opdracht33;

class Truck extends Vehicle
{
    private int $loadCapacity;
    
    public function __construct(string $brand, string $model, int $year, string $color, int $loadCapacity)
    {
        parent::__construct($brand, $model, $year, $color);
        $this->loadCapacity = $loadCapacity;
    }

    public function getFuelType(): string
    {
        return "Electric";
    }

    public function printVehicleInfo(): string
    {
        return "This car is a " . $this->getBrand() . " " . $this->getModel() . " from " . $this->getYear() . " and is " . $this->getColor() . " and has " . $this->loadCapacity . " seats." . "with " . $this->getFuelType() . " as fuel type.";    
    }
}