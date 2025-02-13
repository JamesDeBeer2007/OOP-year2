<?php

namespace Opdracht31;

abstract class Vehicle
{
    // variabes
    private string $brand;
    private string $model;
    private int $year;
    private string $color;

    // constructor
    public function __construct(string $brand, string $model, int $year, string $color)
    {
        $this -> brand =  $brand;
        $this -> model =  $model;
        $this -> year =  $year;
        $this -> color =  $color;
    }

    // getters
    public function getBrand(): string
    {
        return $this->brand;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    // setters
    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    public function setYear(string $year): void
    {
        $this->year = $year;    
    }

    public function setColor(string $color): void
    {
        $this->color = $color;    
    }

    // abtract function
    abstract public function getFuelType(): string;

    abstract public function printVehicleInfo(): string;
}