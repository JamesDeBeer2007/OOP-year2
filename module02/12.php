<?php
class WatchList
{
    public array $movies = [];

    public function addMovie($movie)
    {
        $this-movies[] = $movie;
    }
};
?>