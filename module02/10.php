<?php
declare(strict_types=1);
class Game
{
    public function __construct(public string $name = "name", public string $description = "description", public float $price = 1.00, public array $tags = ["tags"])
    {
    }
};

$A = new Game("GameA", "DescrciptionA", 1.00, ["TagsA"]);
var_dump($A);
echo "<br>";

$B = new Game("GameB", "DescrciptionB", 2.00, ["TagsB"]);
var_dump($B);
echo "<br>";

$C = new Game("GameC", "DescrciptionC", 3.00, ["TagsC"]);
var_dump($C);
echo "<br>";
?>

foreach ($A->getGame() as Item)