<?php
namespace Opdracht34;

abstract class Car extends Vehicle
{
    private int $seats;

    public function __construct(string $brand, string $model, int $year, string $color, int $seats)
    {
        parent::__construct($brand, $model, $year, $color);
        $this->seats = $seats;
    }

    public function printVehicleInfo(): string
    {
        return "This car is a " . $this->getBrand() . " " . $this->getModel() . " from " . $this->getYear() . " and is " . $this->getColor() . " and has " . $this->seats . " seats." . "with " . $this->getFuelType() . " as fuel type.";    
    }

    abstract public function getFuelType(): string;

    abstract public function calculateMileage(): int;
}