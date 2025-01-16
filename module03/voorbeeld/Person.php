<?php

namespace Inheritance;

class Person
{
    private string $name;
    protected int $age;

    public function setName(string $name): void
    {
        $this -> name = $name;
    }
}

?>