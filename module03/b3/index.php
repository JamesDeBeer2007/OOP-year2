<?php

require_once 'Catalog.php';
require_once 'Music.php';
require_once 'Movie.php';
require_once 'Game.php';

$catalog = new Catalog();

$catalog->addProduct(new Music("Greatest Hits", 15.99, "Sony", "Best of pop music", ["Song 1", "Song 2"], 120));
$catalog->addProduct(new Movie("Inception", 12.50, "Warner Bros", "Sci-Fi Thriller", "Blu-ray"));
$catalog->addProduct(new Game("Minecraft", 20.00, "Mojang", "Sandbox game", "Adventure", "2GB RAM"));

echo "Product Catalog:\n";
$catalog->displayCatalog();

echo "Average Product Price: " . $catalog->calculateAveragePrice() . "\n";

$catalog->removeProduct("Inception");
echo "\nUpdated Catalog:\n";
$catalog->displayCatalog();
