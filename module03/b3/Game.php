<?php

require_once 'Product.php';

class Game extends Product 
{
    protected string $genre;
    protected string $hardwareRequirements;

    public function __construct(string $name, float $price, string $brand, string $description, string $genre, string $hardwareRequirements) 
    {
        parent::__construct($name, $price, $brand, $description);
        $this->genre = $genre;
        $this->hardwareRequirements = $hardwareRequirements;
    }

    protected function calculateRecommendedAge(): int 
    {
        switch ($this->genre) 
        {
            case 'Shooter':
                return 18;
            case 'Adventure':
                return 12;
            case 'Puzzle':
                return 3;
            default:
                return 0;
        }
    }

    public function getInfo(): array 
    {
        return 
        [
            'Type' => 'Game',
            'Name' => $this->name,
            'Price' => $this->price,
            'Brand' => $this->brand,
            'Description' => $this->description,
            'Genre' => $this->genre,
            'Hardware Requirements' => $this->hardwareRequirements,
            'Recommended Age' => $this->calculateRecommendedAge()
        ];
    }
}
