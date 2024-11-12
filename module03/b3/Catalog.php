<?php

class Catalog 
{
    private array $products = [];

    public function addProduct(Product $product): void 
    {
        $this->products[] = $product;
    }

    public function removeProduct(string $name): void 
    {
        foreach ($this->products as $index => $product) 
        {
            if ($product instanceof Product && $product->getInfo()['Name'] === $name) 
            {
                unset($this->products[$index]);
            }
        }
        $this->products = array_values($this->products); // Reindex array
    }

    public function displayCatalog(): void 
    {
        foreach ($this->products as $product) 
        {
            $productInfo = $product->getInfo();
            $product->printInfo($productInfo);
        }
    }

    public function calculateAveragePrice(): float 
    {
        $totalPrice = array_sum(array_map(fn($product) => $product->getInfo()['Price'], $this->products));
        return count($this->products) > 0 ? $totalPrice / count($this->products) : 0;
    }
}