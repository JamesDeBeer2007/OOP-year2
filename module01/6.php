<?php

class Product
{
    public $name;
    public $price;
    public $category;
    public $description;

    public function __construct($name, $price, $category, $description)
    {
        $this->name = strtolower($name);
        $this->price = number_format($this->price*1.09, 2);
        $this->category = strtoupper($this->category);
        $this->description = $description;
    }
    
    public function setCategory()
    {
        return strtoupper($this->category);
    }
};

$A = new Product("Toilet Tower defence", 1.00, "Tower defence", "blah blah bleh blhe za zip ziep ozp zao");

$B = new Product("Moonshire", 19.99, "RPG", "Open world rpg, with a story line and cool workd");

$C = new Product("Elden Ring", 59.99, "RPG", "peak gaming");

echo "<pre>";
echo $A->name."<br>".$A->price."<br>".$A->category."<br>".$A->description."<br>";
var_dump($A, $B, $C);
echo "</pre>";
?>