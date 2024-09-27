<?php

class Product
{
    public $name;
    public $price;
    public $type;

    public function showSalesPrice()
    {
        return number_format($this->price*1.09, 2);
    }
};

$A = new Product();
$A -> name = "Toilet Tower defence";
$A -> price = 1.00;
$A -> type = "Tower defence";

$B = new Product();
$B -> name = "Moonshire";
$B -> price = 19.99;
$B -> type = "RPG";

$C = new Product();
$C -> name = "Elden Ring";
$C -> price = 59.99;
$C -> type = "RPG";

echo "<pre>";
echo $A -> showSalesPrice();
var_dump($A, $B, $C);
echo "</pre>";
?>