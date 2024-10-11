<?php
declare(strict_types=1);

class Player
{
    private string $name;
    private array $games = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function addGame(Game $game): void
    {
        $this->games[] = $game;
    }

    public function getGames(): array
    {
        return $this->games;
    }

    public function printPlayerInfo(): void
    {
        echo "<h2>mens naam: " . $this->getName() . "</h2>";
        foreach ($this->games as $game) {
            echo "<li>game name: " . $game->getName() . " - dcription: " . $game->getDescription() . " - og price zonder bullsjit: €" . $game->getPurchasePrice() . "</li>";
        }
    }
}
class Game
{
    private float $purchasePrice;

    public function __construct(
        public string $name = "name", 
        public string $description = "description", 
        public float $price = 1.00, 
        public array $tags = ["tags"]
    ) {
        $this->calculatePurchasePrice();
    }

    private function calculatePurchasePrice(): void
    {
        $this->purchasePrice = $this->price / 1.21 / 1.10;
    }

    public function getPurchasePrice(): float
    {
        return round($this->purchasePrice, 2);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getTags(): array
    {
        return $this->tags;
    }
}

$game1 = new Game('sgma simulator', 'alpha sigma male moments', 19.99, ['action', 'fantasy']);
$game2 = new Game('ligma pirtaes', 'Apirates with aids', 29.99, ['adventure', 'pirate']);
$game3 = new Game('Space War agianst the ZIggers', 'racsim', 39.99, ['sci-fi', 'action']);

$player1 = new Player('Bob');
$player1->addGame($game1);

$player2 = new Player('Diederick');
$player2->addGame($game2);

$player3 = new Player('Jan');
$player3->addGame($game3);

$player1->printPlayerInfo();
$player2->printPlayerInfo();
$player3->printPlayerInfo();
?>