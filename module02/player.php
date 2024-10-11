<?php
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
?>