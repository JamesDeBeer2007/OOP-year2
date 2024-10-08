<?php

class Product
{
    public $name;
    public $price;
    public $category;

    public function showSalesPrice()
    {
        return number_format($this->price*1.09, 2);
    }

    public function setName()
    {
        return strtolower($this->name);
    }

    public function setCategory()
    {
        return strtoupper($this->category);
    }
};

$A = new Product();
$A -> name = "Toilet Tower defence";
$A -> price = 1.00;
$A -> category = "Tower defence";

$B = new Product();
$B -> name = "Moonshire";
$B -> price = 19.99;
$B -> category = "RPG";

$C = new Product();
$C -> name = "Elden Ring";
$C -> price = 59.99;
$C -> category = "RPG";

echo "<pre>";
echo $C -> setName(), "<br>";
echo $C -> showSalesPrice(), "<br>";
echo $C -> setCategory(), "<br>";
var_dump($A, $B, $C);
echo "</pre>";
?>