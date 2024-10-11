<?php
class Book
{
    public function __construct(
        private string $title, 
        private string $author, 
        private float $price
    ) {}

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}