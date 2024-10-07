<?php
declare(strict_types = 1);


class player
{
    public string $name;
    public array $games = [];

    public function construct(string $name)
    {
        $this->name = $name;
    }

    public function addGame(Game $games)
    {
        $this->games[] = $games;
    }
}


class Game
{
    public string $name;
    public string $description;
    public float $price;
    public array $tags;

    public function __construct
    (
        string $name = "name", 
        string $description = "description", 
        float $price = 1.00, 
        array $tags = ["tags"]
    )
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->tags = $tags;
    }
    public function getGames()
    {
        return [$this ->name, $this->description, $this->price, $this->tags];
    }
    public function getName()
    {
        return $this->name."<br>";
    }
    public function getDescription()
    {
        return $this->description."<br>";
    }
}
echo "<pre>";
$game1 =  new Game('gameName','description', 1.00, ["tag", "tag"]);
var_dump($game1);
$game2 =  new Game('gameName','description', 2.00, ["tag", "tag"]);
var_dump($game2);
$game3 =  new Game('gameName','description', 3.00, ["tag", "tag"]);
var_dump($game3);


$klant1 = new player('Zieflorb');
$klant1 -> addGame($game1);
$klant1 -> addGame($game3);
var_dump($klant1);

$klant2 = new player('Ligma');
$klant2 -> addGame($game1);
$klant2 -> addGame($game2);
var_dump($klant2);

$klant3= new player('Ballsucker');
$klant3 -> addGame($game1);
$klant3 -> addGame($game2);
$klant3 -> addGame($game3);
var_dump($klant3);
echo "</pre>";
?>