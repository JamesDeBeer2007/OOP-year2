<?php
// opdracht 4.1
echo "<br><b> Opdracht 4.1 </b><br>";

$products = 
[
    ["name" => "laptop", "price" => 100, "inStock" => 10],
    ["name" => "phone", "price" => 200, "inStock" => 20],
    ["name" => "monitor", "price" => 300, "inStock" => 30],
    ["name" => "keyboard", "price" => 400, "inStock" => 40]
];
echo $products[1]["price"];
echo "<br>";

$products[3]["inStock"] = 120;

$products += ["name" => "tablet", "price" => 299.99, "inStock" => 50];

echo "<pre>";
var_dump($products);
echo "</pre>";

// opdracht 4.2
echo "<br><b> Opdracht 4.2 </b><br>";

$books = 
[
    ["title" => "Goon Quest", "writer" => "John Ballsucker", "pageTotal" => 69],
    ["title" => "Goon Quest 2", "writer" => "John Ballsucker", "pageTotal" => 690],
    ["title" => "Goon Quest 3", "writer" => "Dave Ballsucker", "pageTotal" => 6900],
];

echo $books[1]["title"];
echo "<br>";

$books[0]["pageTotal"] = 350;

$books += ["title" => "De Ontdekking van de Hemel", "writer" => "Harry Mulisch", "pageTotal" => 900];

echo "<pre>";
var_dump($books);
echo "</pre>";

// opdracht 4.3
echo "<br><b> Opdracht 4.3 </b><br>";

$pets =
[
    ["Species" => "Goblin", "Name" => "Hurbus Fugrblus", "Age" => NULL],
    ["Species" => "Human", "Name" => "Steve Hamburger", "Age" => 40],
    ["Species" => "Alien", "Name" => "Zorp Zigmaxer", "Age" => 8924776327842364283469182]
];
echo $pets[2]["Name"]."<br>".$pets[2]["Species"]."<br>";

$pets[1]["Age"] += 1;

$pets += ["Species" => "Kat", "Name" => "Sigma", "Age" => 2];

echo "<pre>";
var_dump($books);
echo "</pre>";
?>