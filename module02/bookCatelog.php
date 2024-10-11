<?php
class BookCatalog
{
    private array $catalog = [];

    public function addBook(Book $book): void
    {
        $this->catalog[] = $book;
    }

    public function getBooks(): array
    {
        return $this->catalog;
    }

    public function printCatalog(): void
    {
        if (count($this->catalog) === 0) {
            echo "De catalogus bevat geen boeken.<br>";
            return;
        }

        echo "<h2>al tgoevegeden boeken:</h2>";
        foreach ($this->catalog as $book) {
            echo "<li>naam: " . $book->getTitle() . " - arthur: " . $book->getAuthor() . " - rrijs: €" . number_format($book->getPrice(), 2) . "</li>";
        }

        echo "<h3>avg price: €" . number_format($this->getAvgPrice(), 2) . "</h3>";
    }

    public function getAvgPrice(): float
    {
        $totalPrice = 0;
        foreach ($this->catalog as $book) {
            $totalPrice += $book->getPrice();
        }

        return count($this->catalog) > 0 ? $totalPrice / count($this->catalog) : 0;
    }
}

?>