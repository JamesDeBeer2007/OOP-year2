<?php
require_once 'Catalog.php';
require_once 'Music.php';
require_once 'Movie.php';
require_once 'Game.php';

$catalog = new Catalog();

$music = new Music("Greatest Hits", 15.99, "Sony", "Best of pop music", ["Song 1", "Song 2"], 120);
$movie = new Movie("Inception", 12.50, "Warner Bros", "Sci-Fi Thriller", "Blu-ray");
$game = new Game("Minecraft", 20.00, "Mojang", "Sandbox game", "Adventure", "2GB RAM");

$catalog->addProduct($music);
$catalog->addProduct($movie);
$catalog->addProduct($game);

echo "Product Catalog:<br>";
$catalog->displayCatalog();

echo "Average Product Price: " . $catalog->calculateAveragePrice() . "<br>";

echo $music->printInfo(["Name" => "Greatest Hits", "Price" => 15.99, "Brand" => "Sony", "Description" => "Best of pop music"]);

$catalog->removeProduct("Inception");
echo "<br>Updated Catalog:<br>";
$catalog->displayCatalog();