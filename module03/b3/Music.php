<?php

require_once 'Product.php';

class Music extends Product 
{
    protected array $trackList;
    protected int $durationMinutes;

    public function __construct(string $name, float $price, string $brand, string $description, array $trackList, int $durationMinutes) 
    {
        parent::__construct($name, $price, $brand, $description);
        $this->trackList = $trackList;
        $this->durationMinutes = $durationMinutes;
    }

    protected function calculateDurationInHours(): float 
    {
        return $this->durationMinutes / 60;
    }

    public function getInfo(): array 
    {
        return 
        [
            'Type' => 'Music',
            'Name' => $this->name,
            'Price' => $this->price,
            'Brand' => $this->brand,
            'Description' => $this->description,
            'Tracks' => implode(", ", $this->trackList),
            'Duration (hours)' => $this->calculateDurationInHours()
        ];
    }
}
