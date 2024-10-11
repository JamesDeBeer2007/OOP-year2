<?php
declare(strict_types=1);

include("player.php");
include("game.php");

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