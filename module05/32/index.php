<?php
abstract class Vehicle {
    protected string $brand;
    protected string $model;
    protected int $year;
    protected string $color;

    public function __construct(string $brand, string $model, int $year, string $color) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->color = $color;
    }

    abstract public function getFuelType(): string;
    abstract public function displayInfo(): void;
}

abstract class Car extends Vehicle {
    protected int $seats;

    public function __construct(string $brand, string $model, int $year, string $color, int $seats) {
        parent::__construct($brand, $model, $year, $color);
        $this->seats = $seats;
    }

    public function getSeats(): int {
        return $this->seats;
    }

    public function setSeats(int $seats): void {
        $this->seats = $seats;
    }

    abstract public function calculateMileage(): float;
}

class ElectricCar extends Car {
    private float $batteryCapacity;

    public function __construct(string $brand, string $model, int $year, string $color, int $seats, float $batteryCapacity) {
        parent::__construct($brand, $model, $year, $color, $seats);
        $this->batteryCapacity = $batteryCapacity;
    }

    public function getFuelType(): string {
        return "Elektrisch";
    }

    public function calculateMileage(): float {
        return $this->batteryCapacity * 5;
    }

    public function displayInfo(): void {
        echo "Electric Car: {$this->brand} {$this->model}, Year: {$this->year}, Color: {$this->color}, Seats: {$this->seats}, Battery: {$this->batteryCapacity} kWh, Mileage: " . $this->calculateMileage() . " km/kWh.<br>" . PHP_EOL;
    }
}

class GasolineCar extends Car {
    private float $engineSize;

    public function __construct(string $brand, string $model, int $year, string $color, int $seats, float $engineSize) {
        parent::__construct($brand, $model, $year, $color, $seats);
        $this->engineSize = $engineSize;
    }

    public function getFuelType(): string {
        return "Benzine";
    }

    public function calculateMileage(): float {
        return 15 / $this->engineSize;
    }

    public function displayInfo(): void {
        echo "Gasoline Car: {$this->brand} {$this->model}, Year: {$this->year}, Color: {$this->color}, Seats: {$this->seats}, Engine: {$this->engineSize}L, Mileage: " . $this->calculateMileage() . " km/L.<br>" . PHP_EOL;
    }
}

class HydrogenCar extends Car {
    private float $fuelCellSize;

    public function __construct(string $brand, string $model, int $year, string $color, int $seats, float $fuelCellSize) {
        parent::__construct($brand, $model, $year, $color, $seats);
        $this->fuelCellSize = $fuelCellSize;
    }

    public function getFuelType(): string {
        return "Waterstof";
    }

    public function calculateMileage(): float {
        return $this->fuelCellSize * 20;
    }

    public function displayInfo(): void {
        echo "Hydrogen Car: {$this->brand} {$this->model}, Year: {$this->year}, Color: {$this->color}, Seats: {$this->seats}, Fuel Cell: {$this->fuelCellSize} kWh, Mileage: " . $this->calculateMileage() . " km/kWh.<br>" . PHP_EOL;
    }
}

$electricCar = new ElectricCar("Tesla", "Model S", 2023, "Black", 5, 100);
$gasolineCar = new GasolineCar("Ford", "Mustang", 2022, "Red", 4, 5.0);
$hydrogenCar = new HydrogenCar("Toyota", "Mirai", 2021, "Blue", 5, 40);

$electricCar->displayInfo();
$gasolineCar->displayInfo();
$hydrogenCar->displayInfo();
?>
