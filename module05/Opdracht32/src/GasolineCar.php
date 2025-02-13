<?php

namespace Opdracht32;

class GasolineCar extends Car
{

    private int $engineSize;

    public function __construct(string $brand, string $model, int $year, string $color, int $seats, int $engineSize)
    {
        parent::__construct($brand, $model, $year, $color, $seats);
        $this->engineSize = $engineSize;
    }

    public function calculateMileage(): int
    {
        return $this->engineSize * 2;
    }

    public function getFuelType(): string
    {
        return "Gasoline";
    }
}