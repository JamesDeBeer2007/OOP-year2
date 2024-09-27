<?php

class Product
{
    public function __construct(public $name, public $price, public $category = "dranken", public $description, public $rating = 3)
    {
        $this->name = strtolower($name);
        $this->price = number_format($this->price*1.09, 2);
        $this->category = strtoupper($category);
    }
    
    public function setCategory()
    {
        return strtoupper($this->category);
    }
};

$A = new Product("Toilet Tower defence", 1.00, "Tower defence", "blah blah bleh blhe za zip ziep ozp zao", -1);

$B = new Product("Moonshire", 19.99, "RPG", "Open world rpg, with a story line and cool workd", rating:100);

$C = new Product("Elden Ring", 59.99, "RPG", "peak gaming", 11);

echo "<pre>";
echo $A->name."<br>".$A->price."<br>".$A->category."<br>".$A->description."<br>".$A->rating."<br><br>";
var_dump($A, $B, $C);
echo "</pre>";
?>