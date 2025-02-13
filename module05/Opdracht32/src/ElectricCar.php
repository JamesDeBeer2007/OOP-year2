<?php

namespace Opdracht32;

class ElectricCar extends Car
{

    private int $batteryCapacity;

    public function __construct(string $brand, string $model, int $year, string $color, int $seats, int $batteryCapacity)
    {
        parent::__construct($brand, $model, $year, $color, $seats);
        $this->batteryCapacity = $batteryCapacity;
    }

    public function calculateMileage(): int
    {
        return $this->batteryCapacity * 2;
    }

    public function getFuelType(): string
    {
        return "Electricity";
    }
}