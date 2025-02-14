<?php

namespace Opdracht35;

class HydrogenCar extends Car
{

    private int $fuelTankCapacity;

    public function __construct(string $brand, string $model, int $year, string $color, int $seats, int $fuelTankCapacity)
    {
        parent::__construct($brand, $model, $year, $color, $seats);
        $this->fuelTankCapacity = $fuelTankCapacity;
    }

    public function calculateMileage(): int
    {
        return $this->fuelTankCapacity * 2;
    }

    public function getFuelType(): string
    {
        return "Hydrogen";
    }
}