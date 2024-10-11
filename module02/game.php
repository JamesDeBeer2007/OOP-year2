<?php
class Game
{
    private float $purchasePrice;

    public function __construct(
        public string $name = "name", 
        public string $description = "description", 
        public float $price = 1.00, 
        public array $tags = ["tags"]
    ) {
        $this->calculatePurchasePrice();
    }

    private function calculatePurchasePrice(): void
    {
        $this->purchasePrice = $this->price / 1.21 / 1.10;
    }

    public function getPurchasePrice(): float
    {
        return round($this->purchasePrice, 2);
    }

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
