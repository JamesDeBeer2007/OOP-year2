<?php

class Product
{
    public $name;
    public $price;
    public $type;
};

$A = new Product();
$A -> name = "Toilet Tower defence";
$A -> price = 0.00;
$A -> type = "Tower defence";

$B = new Product();
$B -> name = "Moonshire";
$B -> price = 19.99;
$B -> type = "RPG";

$C = new Product();
$C -> name = "Elden Ring";
$C -> price = 59.99;
$C -> type = "RPG";

$A->type = "Zigger type shit";

echo "<pre>";
echo  $A->name, "<br>";
echo  $A->price, "<br>";
echo  $A->type, "<br><br>";

echo  $B->name, "<br>";
echo  $B->price, "<br>";
echo  $B->type, "<br><br>";

echo  $C->name, "<br>";
echo  $C->price, "<br>";
echo  $C->type, "<br><br>";

var_dump($A, $B, $C);
echo "</pre>";
?>