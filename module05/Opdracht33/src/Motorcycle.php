<?php
namespace Opdracht33;

class Motorcycle extends Vehicle
{
    private bool $offRoad;

    public function __construct(string $brand, string $model, int $year, string $color, bool $offRoad)
    {
        parent::__construct($brand, $model, $year, $color);
        $this->offRoad = $offRoad;
    }

    public function getFuelType(): string
    {
        return "Diesel";
    }

    public function printVehicleInfo(): string
    {
        return "This car is a " . $this->getBrand() . " " . $this->getModel() . " from " . $this->getYear() . " and is " . $this->getColor() . " and has " . $this->offRoad . " seats." . "with " . $this->getFuelType() . " as fuel type.";    
    }
}