<?php
class Game
{
    public function __construct(
        public string $name = "name", 
        public string $description = "description", 
        public float $price = 1.00, 
        public array $tags = ["tags"]
    ) {}

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getTags(): array
    {
        return $this->tags;
    }
}
?>
