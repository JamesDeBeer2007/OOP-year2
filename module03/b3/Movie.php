<?php

require_once 'Product.php';

class Movie extends Product 
{
    protected string $quality;

    public function __construct(string $name, float $price, string $brand, string $description, string $quality) 
    {
        parent::__construct($name, $price, $brand, $description);
        $this->quality = $quality;
    }

    protected function simulateIMDbRating(): float 
    {
        return round(rand(50, 100) / 10, 1);
    }

    public function getInfo(): array 
    {
        return 
        [
            'Type' => 'Movie',
            'Name' => $this->name,
            'Price' => $this->price,
            'Brand' => $this->brand,
            'Description' => $this->description,
            'Quality' => $this->quality,
            'IMDb Rating' => $this->simulateIMDbRating()
        ];
    }
}
