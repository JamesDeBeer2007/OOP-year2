<?php
// opdracht 3.1
echo "<br><b> Opdracht 3.1 </b><br>";

$cities = ["Amsterdam", "Rotterdam", "Utrecht", "Den Haag"];
$cities[] = "Groningen";
echo $cities[0]."<br>", $cities[3]."<br>", $cities[4]."<br>" ;

// opdracht 3.2
echo "<br><b> Opdracht 3.2 </b><br>";

$numbers = [5, 10, 15, 20];
$numbers[1] = 12;
echo "<pre>";
var_dump($numbers);
echo "</pre>";

// opdracht 3.3
echo "<br><b> Opdracht 3.3 </b><br>";

$student = ["name"=>"Jan", "age" => 20, "grade" => "A"];
echo "Name of student: ".$student["name"]. "<br>";
echo "Grade of student: ".$student["grade"]. "<br>";

// opdracht 3.4
echo "<br><b> Opdracht 3.4 </b><br>";

$product = ["name"=>"Laptop", "price"=>899.99, "inStock"=>true];
$product["brand"] = "HP";
$product["price"] = 799.99;
echo "<pre>";
var_dump($product);
echo "</pre>";
?>