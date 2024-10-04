<?php
class Game
{
    public function __construct(public $name = "name", public $description = "description", public $price = "price", public $tags = "tags")
    {
    }
};

$A = new Game("GameA", "DescrciptionA", "1.00", "TagsA");
var_dump($A);
echo "<br>";

$B = new Game("GameB", "DescrciptionB", "2.00", "TagsB");
var_dump($B);
echo "<br>";

$C = new Game("GameC", "DescrciptionC", "3.00", "TagsC");
var_dump($C);
echo "<br>";
?>