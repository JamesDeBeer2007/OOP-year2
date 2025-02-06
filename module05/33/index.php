<?php
abstract class Vehicle {
    protected string $brand;
    protected string $model;
    protected int $year;
    protected string $color;
    public static array $allVehicles = [];

    public function __construct(string $brand, string $model, int $year, string $color) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->color = $color;
        self::$allVehicles[] = $this;
    }

    public function getBrand(): string {
        return $this->brand;
    }

    public function getModel(): string {
        return $this->model;
    }

    public function getYear(): int {
        return $this->year;
    }

    public function getColor(): string {
        return $this->color;
    }

    abstract public function displayInfo(): string;
}

abstract class Car extends Vehicle {
    abstract public function calculateMileage(): float;
    abstract public function getFuelType(): string;
}

class ElectricCar extends Car {
    private float $batteryCapacity;

    public function __construct(string $brand, string $model, int $year, string $color, float $batteryCapacity) {
        parent::__construct($brand, $model, $year, $color);
        $this->batteryCapacity = $batteryCapacity;
    }

    public function calculateMileage(): float {
        return $this->batteryCapacity * 5;
    }

    public function getFuelType(): string {
        return "Elektrisch";
    }

    public function displayInfo(): string {
        return "Electric Car: {$this->brand} {$this->model}, Year: {$this->year}, Color: {$this->color}, Battery Capacity: {$this->batteryCapacity} kWh";
    }
}

class GasolineCar extends Car {
    private float $engineSize;

    public function __construct(string $brand, string $model, int $year, string $color, float $engineSize) {
        parent::__construct($brand, $model, $year, $color);
        $this->engineSize = $engineSize;
    }

    public function calculateMileage(): float {
        return $this->engineSize * 12;
    }

    public function getFuelType(): string {
        return "Benzine";
    }

    public function displayInfo(): string {
        return "Gasoline Car: {$this->brand} {$this->model}, Year: {$this->year}, Color: {$this->color}, Engine Size: {$this->engineSize} L";
    }
}

class HydrogenCar extends Car {
    private float $fuelCellSize;

    public function __construct(string $brand, string $model, int $year, string $color, float $fuelCellSize) {
        parent::__construct($brand, $model, $year, $color);
        $this->fuelCellSize = $fuelCellSize;
    }

    public function calculateMileage(): float {
        return $this->fuelCellSize * 10;
    }

    public function getFuelType(): string {
        return "Waterstof";
    }

    public function displayInfo(): string {
        return "Hydrogen Car: {$this->brand} {$this->model}, Year: {$this->year}, Color: {$this->color}, Fuel Cell Size: {$this->fuelCellSize} kWh";
    }
}

class Motorcycle extends Vehicle {
    private bool $offRoad;

    public function __construct(string $brand, string $model, int $year, string $color, bool $offRoad) {
        parent::__construct($brand, $model, $year, $color);
        $this->offRoad = $offRoad;
    }

    public function displayInfo(): string {
        $offRoadText = $this->offRoad ? 'Yes' : 'No';
        return "Motorcycle: {$this->brand} {$this->model}, Year: {$this->year}, Color: {$this->color}, Off-Road: {$offRoadText}";
    }
}

class Truck extends Vehicle {
    private float $loadCapacity;

    public function __construct(string $brand, string $model, int $year, string $color, float $loadCapacity) {
        parent::__construct($brand, $model, $year, $color);
        $this->loadCapacity = $loadCapacity;
    }

    public function displayInfo(): string {
        return "Truck: {$this->brand} {$this->model}, Year: {$this->year}, Color: {$this->color}, Load Capacity: {$this->loadCapacity} tons";
    }
}

new ElectricCar("Tesla", "Model S", 2022, "Black", 100);
new GasolineCar("Ford", "Mustang", 2021, "Red", 5.0);
new HydrogenCar("Toyota", "Mirai", 2023, "Blue", 8.0);
new Motorcycle("Yamaha", "XT500", 2019, "Blue", true);
new Truck("Volvo", "FH16", 2018, "White", 18.5);

echo "All Vehicles:" . "<br>";
foreach (Vehicle::$allVehicles as $vehicle) {
    echo $vehicle->displayInfo() . "<br>" . PHP_EOL;
}
