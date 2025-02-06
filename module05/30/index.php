<?php
abstract class Vehicle { # abtracts is like strict paretnt class
    protected string $brand; # protected for use van kids
    protected string $model;
    protected int $year;
    protected string $color;

    public function __construct(string $brand, string $model, int $year, string $color) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->color = $color;
    }

    public function getBrand(): string {
        return $this->brand;
    }

    public function setBrand(string $brand): void {
        $this->brand = $brand;
    }

    public function getModel(): string {
        return $this->model;
    }

    public function setModel(string $model): void {
        $this->model = $model;
    }

    public function getYear(): int {
        return $this->year;
    }

    public function setYear(int $year): void {
        $this->year = $year;
    }

    public function getColor(): string {
        return $this->color;
    }

    public function setColor(string $color): void {
        $this->color = $color;
    }

    abstract public function displayInfo(): string; # coole fuckingtion voor shit displayen
}

class Car extends Vehicle { # is like kiddo van heicle en hebt info er van
    private int $seats;

    public function __construct(string $brand, string $model, int $year, string $color, int $seats) {
        parent::__construct($brand, $model, $year, $color); # is voor parent variables
        $this->seats = $seats;
    }

    public function getSeats(): int {
        return $this->seats;
    }

    public function setSeats(int $seats): void {
        $this->seats = $seats;
    }

    public function displayInfo(): string {
        return "Car: {$this->brand} {$this->model}, Year: {$this->year}, Color: {$this->color}, Seats: {$this->seats}";
    }
}

class Motorcycle extends Vehicle {
    private bool $offRoad;

    public function __construct(string $brand, string $model, int $year, string $color, bool $offRoad) {
        parent::__construct($brand, $model, $year, $color);
        $this->offRoad = $offRoad;
    }

    public function isOffRoad(): bool {
        return $this->offRoad;
    }

    public function setOffRoad(bool $offRoad): void {
        $this->offRoad = $offRoad;
    }

    public function displayInfo(): string {
        $offRoadText = $this->offRoad ? 'Yes' : 'No'; # if else maar simpel
        return "Motorcycle: {$this->brand} {$this->model}, Year: {$this->year}, Color: {$this->color}, Off-Road: {$offRoadText}";
    }
}

class Truck extends Vehicle {
    private float $loadCapacity;

    public function __construct(string $brand, string $model, int $year, string $color, float $loadCapacity) {
        parent::__construct($brand, $model, $year, $color);
        $this->loadCapacity = $loadCapacity;
    }

    public function getLoadCapacity(): float {
        return $this->loadCapacity;
    }

    public function setLoadCapacity(float $loadCapacity): void {
        $this->loadCapacity = $loadCapacity;
    }

    public function displayInfo(): string {
        return "Truck: {$this->brand} {$this->model}, Year: {$this->year}, Color: {$this->color}, Load Capacity: {$this->loadCapacity} tons         ";
    }
}

echo (new Car("Toyota", "Corolla", 2020, "Red", 5))->displayInfo() . "<br>" . PHP_EOL; 
echo (new Motorcycle("Yamaha", "XT500", 2019, "Blue", true))->displayInfo() . "<br>" . PHP_EOL;
echo (new Truck("Volvo", "FH16", 2018, "White", 18.5))->displayInfo() . "<br>" . PHP_EOL;
?>