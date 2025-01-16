<?php

namespace Inheritance;

class Student extends Person
{
    private int $studentId;
    public function setStudentId(int $studentId): void
    {
        $this -> studentId = $studentId;
    }

    public function setAge(int $age): void
    {
        $this -> age = $age;
    }
}

?>