<?php
class Product 
{
    protected string $name;
    protected float $price;
    protected string $brand;
    protected string $description;

    public function __construct(string $name, float $price, string $brand, string $description) 
    {
        $this->name = $name;
        $this->price = $price;
        $this->brand = $brand;
        $this->description = $description;
    }

    public function printInfo(array $productInfo): string 
    {
        $output = "";
        foreach ($productInfo as $key => $value) 
        {
            $output .= "$key: $value\n";
        }
        $output .= "<br><br>";
        return $output;
    }
}